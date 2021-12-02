<div class="contact-form">
    <form wire:submit.prevent="submit" id="contact">
        @csrf
        <div class="row clearfix">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label>Your name *</label>
                <input type="text" name="name" class="form-control" placeholder="name" wire:model="contact.name">
                @error('contact.name')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
         
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label>Email address *</label>
                <input type="text" name="email" placeholder="email" wire:model="contact.email">
                @error('contact.email')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label>Phone number *</label>
                <input type="text" name="number" placeholder="phone" wire:model="contact.number">
                @error('contact.number')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label>Subject</label>
                <input type="text" name="subject" placeholder="subject" wire:model="contact.subject">
                @error('contact.subject')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label>Your Message *</label>
                <textarea name="message" placeholder="message" wire:model="contact.message"></textarea>
                @error('contact.message')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send
                        Now</span></button>
            </div>

        </div>
    </form>
</div>
