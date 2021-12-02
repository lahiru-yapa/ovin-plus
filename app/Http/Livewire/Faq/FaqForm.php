<?php

namespace App\Http\Livewire\Faq;

use Livewire\Component;
use App\Models\Faq;
use domain\Facades\Faq\FaqFacade;

class FaqForm extends Component
{
    public $faq;
    public $data;
    /**
     * mount
     *
     * @return void
     */
    public function mount()
    {
        $this->faq = new Faq();
    }

    /**
     * rules
     *
     * @return void
     */
    protected function rules()
    {
        return [
            'faq.name' => 'required|string|max:255',
            // 'faq.email' => 'required',
            'faq.number' => 'required',
            'faq.subject' => 'required',
            'faq.question' => 'required',
        ];
    }
    /**
     * messages
     *
     * @var array
     */
    protected $messages = [
        'faq.name.required' => 'Please enter name.',
        'faq.email.required' => 'Please enter email.',
        'faq.number.required' => 'Please enter number.',
        'faq.subject.required' => 'Please enter subject.',
        'faq.question.required' => 'Please enter question.',
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
        return view('pages.Faq.faq-form');
    }

    /**
     * submit
     *
     * @return void
     */
    public function submit()
    {

        $this->validate();
        dd("hello");

        FaqFacade::create($this->faq->toArray());
        return redirect()->route('faq');
    }
}
