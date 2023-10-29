<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;
    public $notes = '';
    public $status = 'new';
    public $dealerId;
    public $dealerTheme = null;

    public function mount($dealerId, $dealerTheme)
    {
        $this->dealerId = $dealerId;
        $this->dealerTheme = $dealerTheme;
    }    

    public function submitForm()
    {
        $data = $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string|max:500',
            'notes' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $data['personal_dealer_site_id'] = $this->dealerId;

        Contact::create($data);

        // Here, you might also want to flash a success message or redirect the user.
        session()->flash('message', 'Contact request submitted successfully!');

        // Clean the inputs
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
