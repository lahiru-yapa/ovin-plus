<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use App\Models\Contact;

use App\Notifications\ContactMail;
use domain\Facades\Contact\ContactFacade;


class ContactForm extends Component
{
    public $contact;
    public $data;
    /**
     * mount
     *
     * @return void
     */
    public function mount()
    {
        $this->contact = new Contact();
    }

    /**
     * rules
     *
     * @return void
     */
    protected function rules()
    {
        return [
            'contact.full_name' => 'required|string|max:255',
            'contact.address' => 'required',
            'contact.contact' => 'required',
            'contact.gender' => 'required',
            'contact.birthday' => 'required',
            'contact.membership' => 'required',
        ];
    }
    /**
     * messages
     *
     * @var array
     */
    protected $messages = [
        'contact.full_name.required' => 'Please enter name.',
        'contact.address.required' => 'Please enter address.',
        'contact.contact.required' => 'Please enter contact number.',
        'contact.gender.required' => 'Please enter gender.',
        'contact.birthday.required' => 'Please enter birthday.',
        'contact.membership.required' => 'Please enter membership.',

    ];

    /**
     * updated
     * @param  string $propertyName
     *
     * @return void
     */
    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('pages.Contact.contact-form');
    }

    /**
     * submit
     *
     * @return void
     */
    public function submit()
    {

        $this->validate();


        ContactFacade::create($this->contact->toArray());

        return redirect()->route('home');
    }
}
