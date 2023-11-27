<form wire:submit.prevent="submit">
    <input type="text" wire:model="author" placeholder="Your Name">
    <textarea wire:model="content" placeholder="Leave your review here"></textarea>
    @for ($i = 1; $i <= 5; $i++)
        <input type="radio" wire:model="rating" id="star{{ $i }}" value="{{ $i }}"><label for="star{{ $i }}">☆</label>
    @endfor
    <button type="submit">Submit Review</button>
</form>

@if (session()->has('message'))
    <div>{{ session('message') }}</div>
@endif
