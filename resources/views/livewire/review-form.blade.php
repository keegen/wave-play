<form wire:submit.prevent="submit" class="space-y-4">
    @csrf

    <!-- Rating Field -->
    <!-- ... same as before, but with Livewire model binding -->
    <select wire:model="rating" id="rating" name="rating" class="...">
        <!-- options -->
    </select>
    @error('rating') <span class="error">{{ $message }}</span> @enderror

    <!-- Review Field -->
    <!-- ... same as before, but with Livewire model binding -->
    <textarea wire:model="review" id="review" name="review" rows="4" class="..."></textarea>
    @error('review') <span class="error">{{ $message }}</span> @enderror

    <!-- Name Field -->
    <!-- ... same as before, but with Livewire model binding -->
    <input wire:model="name" type="text" id="name" name="name" class="...">
    @error('name') <span class="error">{{ $message }}</span> @enderror

    <!-- Submit Button -->
    <button type="submit" class="...">
        Submit Review
    </button>
</form>
