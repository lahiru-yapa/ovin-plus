<div class="faq-form">

    <!--faq Form-->
    <form wire:submit.prevent="submit" id="faq">
        @csrf
        <div class="row clearfix">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <input type="text" name="name" placeholder="Name" wire:model="faq.name">
                @error('faq.name')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>

            {{-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <input type="text" name="email" placeholder="Email" wire:model="faq.email">
                @error('faq.email')
                <label class="error">{{ $message }}</label>
            @enderror
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <input type="text" name="number" placeholder="Phone" wire:model="faq.number">
            @error('faq.number')
            <label class="error">{{ $message }}</label>
            @enderror
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <input type="text" name="subject" placeholder="Subject" wire:model="faq.subject">
            @error('faq.subject')
            <label class="error">{{ $message }}</label>
            @enderror
        </div>

        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <textarea name="question" placeholder="Question Detail" wire:model="faq.question"></textarea>
            @error('faq.question')
            <label class="error">{{ $message }}</label>
            @enderror
        </div> --}}

        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
            <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send
                    Now</span></button>
        </div>

</div>
</form>
</div>
