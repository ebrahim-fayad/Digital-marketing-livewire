<form wire:submit.prevent='submit'>
    @if (session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input wire:model='name' type="text" class="form-control" id="name" placeholder="Your Name">
                <label for="name">Your Name</label>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input wire:model='email' type="email" class="form-control" id="email" placeholder="Your Email">
                <label for="email">Your Email</label>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input wire:model='subject' type="text" class="form-control" id="subject" placeholder="Subject">
                <label for="subject">Subject</label>
                @error('subject')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" wire:model='message' placeholder="Leave a message here" id="message"
                    style="height: 150px"></textarea>
                <label for="message">Message</label>
                @error('message')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
        </div>
    </div>
</form>
