<div class="contact-form">

    <form wire:submit.prevent="submit" id="contact">
        @csrf
        <div class="row clearfix">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label>Your name *</label>
                <input type="text" name="name" class="form-control" placeholder="full name"
                    wire:model="contact.full_name">
                @error('contact.full_name')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label> Address *</label>
                <input type="text" name="address" placeholder="address" wire:model="contact.address">
                @error('contact.address')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label>Phone number *</label>
                <input type="text" name="number" placeholder="phone" wire:model="contact.contact">
                @error('contact.contact')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">

                <label for="Gender">Gender</label>

                <select name="Gender" id="Gender" wire:model="contact.gender">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                </select>
                @error('contact.gender')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" wire:model="contact.birthday">

                @error('contact.birthday')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">

                <label for="membership">membership</label>

                <select name="cars" id="cars" wire:model="contact.membership">
                    <option value="VIP">VIP</option>
                    <option value="Gold">Gold</option>
                    <option value="General">General</option>
                </select>
                @error('contact.membership')
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
