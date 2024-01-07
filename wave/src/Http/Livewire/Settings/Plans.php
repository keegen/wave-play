<?php

namespace Wave\Http\Livewire\Settings;

use Livewire\Component;
use Wave\Http\Controllers\SubscriptionController;
use App\Models\User;
use App\PersonalSiteDetail;


class Plans extends Component
{

    protected $listeners = ['checkout'];

    public function checkout($payload){
        // Create a new form request to send to the subscription controller
        $request = new \Illuminate\Http\Request();
        $request->setMethod('POST');
        $request->request->add(['checkout_id' => $payload['checkout_id']]);

        $subscription = new SubscriptionController;
        $checkoutResponse = $subscription->checkout($request);
        $this->dispatchBrowserEvent('checkoutCompleteResponse', $checkoutResponse->getData(true) );
    }

    public function render()
    {
        $user = auth()->user();
        $detail = $user->personalSiteDetail()->firstOrNew();

        return view('theme::livewire.settings.plans', compact('detail'));
    }
}
