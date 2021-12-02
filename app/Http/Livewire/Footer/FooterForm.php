<?php

namespace App\Http\Livewire\Footer;

use Livewire\Component;
use App\Models\subcribe;
use domain\Facades\subcribe\subcribeFacade;

class FooterForm extends Component
{
    public $subcribe;
    public $data;
    /**
     * mount
     *
     * @return void
     */
    public function mount()
    {
        $this->subcribe = new subcribe();
    }

    /**
     * rules
     *
     * @return void
     */
    protected function rules()
    {

        return [
            'subcribe.email' => 'required',
        ];
    }
    /**
     * messages
     *
     * @var array
     */
    protected $messages = [
        'subcribe.email.required' => 'Please enter email.',
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
        return view('pages.footer.footer-form');
    }

    /**
     * submit
     *
     * @return void
     */
    public function submit()
    {

        $this->validate();
        subcribeFacade::create($this->subcribe->toArray());
        return redirect()->route('subcribe');
    }
}
