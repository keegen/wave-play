<div x-data="{ activeSlide: 0, slides: {{ $reviews->count() }} }">
    <template x-for="(review, index) in {{ Js::from($reviews) }}" :key="index">
        <div x-show="activeSlide === index">
            <p x-text="review.content"></p>
            <p x-text="review.author"></p>
            <!-- Display stars based on rating -->
        </div>
    </template>

    <button @click="activeSlide = activeSlide === 0 ? slides - 1 : activeSlide - 1">Previous</button>
    <button @click="activeSlide = activeSlide === slides - 1 ? 0 : activeSlide + 1">Next</button>
</div>
