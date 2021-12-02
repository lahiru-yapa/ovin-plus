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
            'contact.name' => 'required|string|max:255',
            'contact.email' => 'required',
            'contact.number' => 'required',
            'contact.subject' => 'required',
            'contact.message' => 'required',
        ];
    }
    /**
     * messages
     *
     * @var array
     */
    protected $messages = [
        'contact.name.required' => 'Please enter name.',
        'contact.email.required' => 'Please enter email.',
        'contact.number.required' => 'Please enter number.',
        'contact.subject.required' => 'Please enter subject.',
        'contact.message.required' => 'Please enter message.',
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

        return redirect()->route('contact');
    }
}
