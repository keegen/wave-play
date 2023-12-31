<div class="bg-gray-100">
    <div class="container mx-auto py-12">
        <!-- Header and Subheader -->
        <div class="mb-8">
            <h2 class="text-3xl font-semibold text-gray-800">Recent Customer? Share Your Experience</h2>
            <p class="mt-2 text-lg text-gray-600">How did i do? I'd love to hear your thoughts!</p>
        </div>

        <form wire:submit.prevent="submit" class="flex items-center space-x-6 bg-white shadow-md rounded px-6 py-4">
            @csrf

            <!-- Star Rating Field -->
            <div class="flex items-center">
                @for ($i = 1; $i <= 5; $i++)
                <svg wire:click="setRating({{ $i }})" class="h-6 w-6 cursor-pointer {{ $i <= $rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.396-1.001 1.806-1.001 2.202 0l1.15 2.918a1.2 1.2 0 00.902.657l3.235.47c1.11.161 1.554 1.523.751 2.305l-2.342 2.282a1.2 1.2 0 00-.345 1.063l.553 3.217c.19 1.103-1.045 1.947-2.014 1.427l-2.89-1.52a1.2 1.2 0 00-1.118 0l-2.89 1.52c-.969.52-2.204-.324-2.014-1.427l.553-3.217a1.2 1.2 0 00-.345-1.063l-2.342-2.282c-.803-.782-.359-2.144.751-2.305l3.235-.47a1.2 1.2 0 00.902-.657l1.15-2.918z" />
                </svg>
                @endfor
                @error('rating') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <!-- Review Field -->
            <div class="flex-grow">
                <textarea wire:model="review" id="review" name="review" rows="1" class="resize-none w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-2 px-4 leading-tight focus:outline-none focus:border-gray-500" placeholder="Your review..."></textarea>
                @error('review') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <!-- Name Field -->
            <div class="flex-initial">
                <input wire:model="name" type="text" id="name" name="name" class="bg-gray-200 text-gray-700 border border-gray-300 rounded py-2 px-4 leading-tight focus:outline-none focus:border-gray-500" placeholder="Your name">
                @error('name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex-initial">
                <button type="submit" class="px-4 py-2 rounded bg-{{ $dealerTheme->pd_theme_primary_color }} text-white shadow-sm hover:bg-{{ $dealerTheme->pd_theme_secondary_color }} focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bg-{{ $dealerTheme->pd_theme_primary_color }}">
                    Submit Review
                </button>
            </div>
        </form>
    </div>
</div>