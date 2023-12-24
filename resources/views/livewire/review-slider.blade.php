<div wire:id="mp7Fz4qoM0N6Q7hQJPVG">
    <div x-data="reviewSlider({{ json_encode($reviews) }})">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Recent Reviews
                    </h2>
                    <p class="mt-4 text-gray-500">
                        When you're buying a car, remember that the salesperson's reputation matters. A trustworthy and reputable salesperson ensures you're making a smart and reliable choice for your new ride.
                    </p>
                </div>

                <div class="mt-8 lg:mt-0 lg:ml-8">
                    <div class="flex items-center">
                        <button @click="prevSlide()" class="bg-white p-2 rounded-full shadow text-gray-600 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button @click="nextSlide()" class="ml-3 bg-white p-2 rounded-full shadow text-gray-600 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Slider -->
            <div class="mt-12 flex overflow-hidden">
                <template x-for="(review, index) in reviews" :key="index">
                    <div x-show="isActive(index) || isNext(index) || isPrev(index)"
                         class="transition-transform duration-300 ease-in-out"
                         :class="{
                             'transform scale-100': isActive(index),
                             'transform scale-90': isNext(index) || isPrev(index)
                         }"
                         style="min-width: 100%;">
                        <!-- Review Card -->
                        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-4">
                            <div class="flex items-center">
                                <!-- Loop to generate yellow stars based on rating -->
                                <template x-for="i in parseInt(review.rating)">
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <!-- Star SVG path -->
                                    </svg>
                                </template>
                                <!-- Display the rating -->
                                <p class="ml-3 text-sm text-gray-700" x-text="review.rating + ' out of 5 stars'"></p>
                            </div>
                            <div class="tracking-wide text-sm text-indigo-500 font-semibold" x-text="review.guest_name"></div>
                            <p class="mt-2 text-gray-500" x-text="review.review_text"></p>
                        </div>
                        <!-- End Review Card -->
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>
