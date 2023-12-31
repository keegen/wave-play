<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead;
use App\Models\Contact;
use App\Models\Review;

class Dashboard extends Component
{
    public $activeTab = 'leads';
    public $data = [];

    public $userId;
    public $personalDealerSiteId;

    public $leadCount, $contactCount, $reviewCount;

    public function mount($userId, $personalDealerSiteId)
    {
        $this->personalDealerSiteId = $personalDealerSiteId;
        $this->userId = $userId;
        $this->activeTab = session('activeTab', 'leads');

        $this->leadCount = Lead::where('status', 'New')
                               ->where('personal_dealer_site_id', $this->personalDealerSiteId)
                               ->count();
        $this->contactCount = Contact::where('status', 'New')
                                     ->where('personal_dealer_site_id', $this->personalDealerSiteId)
                                     ->count();
        $this->reviewCount = Review::where('is_approved', false)
                                   ->where('user_id', $this->userId)
                                   ->count();

        $this->switchTab($this->activeTab);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function switchTab($tab)
    {
        $this->activeTab = $tab;
        $this->loadData();
    }

    public function toggleReviewStatus($reviewId)
    {
        $review = Review::findOrFail($reviewId);
        $review->toggleApproval();
        session(['activeTab' => 'reviews']);

        // Refresh data or emit an event if necessary
        $this->loadData();
    }

    private function loadData()
    {
        switch ($this->activeTab) {
            case 'leads':
                $this->data = Lead::where('personal_dealer_site_id', $this->personalDealerSiteId)
                                  ->orderBy('created_at', 'desc')->get();
                break;
            case 'contacts':
                $this->data = Contact::where('personal_dealer_site_id', $this->personalDealerSiteId)
                                     ->orderBy('created_at', 'desc')->get();
                break;
            case 'reviews':
                $this->data = Review::where('user_id', $this->userId)
                                   ->orderBy('created_at', 'desc')->get();
                break;
        }
    }
}
