<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $dealerId = auth()->user()->PersonalSiteDetail->id;  // Assuming the logged-in user has a relation to a PersonalDealerSite via 'personal_dealer_site_id' attribute.

        // Get leads for the dealer, ordered by created_at descending
        $leads = Lead::where('personal_dealer_site_id', $dealerId)
                     ->orderBy('created_at', 'desc')
                     ->get();

        // Leads logic
        $last30DaysLeadsCount = Lead::leadsLast30Days($dealerId);
        $previous30DaysLeadsCount = Lead::leadsPrevious30Days($dealerId);
        $leadsGrowthPercentage = ($previous30DaysLeadsCount != 0) ? 
            (($last30DaysLeadsCount - $previous30DaysLeadsCount) / $previous30DaysLeadsCount) * 100 : 
            0;

        $contacts = Contact::where('personal_dealer_site_id', $dealerId)
                     ->orderBy('created_at', 'desc')
                     ->get();

        // Contacts logic
        $last30DaysContactsCount = Contact::contactsLast30Days($dealerId);
        $previous30DaysContactsCount = Contact::contactsPrevious30Days($dealerId);
        $contactsGrowthPercentage = ($previous30DaysContactsCount != 0) ? 
            (($last30DaysContactsCount - $previous30DaysContactsCount) / $previous30DaysContactsCount) * 100 : 
            0;

        return view('themes.tallstack.dashboard.index', [
            'contacts' => $contacts,
            'leads' => $leads,
            'leadsCount' => $last30DaysLeadsCount,
            'leadsGrowthPercentage' => $leadsGrowthPercentage,
            'contactsCount' => $last30DaysContactsCount,
            'contactsGrowthPercentage' => $contactsGrowthPercentage
        ]);
    }
}
