<form wire:submit.prevent="submit" id="footer">
    @csrf
    <div class="form-group">
        <input type="email" name="email" placeholder="Enter Your Email" wire:model="subcribe.email">
        @error('subcribe.email')
        <label class="error">{{ $message }}</label>
        @enderror
        <button type="submit" class="theme-btn">Subscribe Now</button>
    </div>
</form>
