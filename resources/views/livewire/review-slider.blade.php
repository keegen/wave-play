<div wire:id="mp7Fz4qoM0N6Q7hQJPVG">
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
                    <button wire:click="previousReview" class="bg-white p-2 rounded-full shadow text-gray-600 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                          </svg>
                          
                    </button>
                    <button wire:click="nextReview" class="ml-3 bg-white p-2 rounded-full shadow text-gray-600 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>
                          
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-12 relative overflow-hidden" style="height: 250px;">
            <div class="whitespace-nowrap transition-transform" style="transform: translateX(-{{ $activeIndex * 100 }}%);">
                @foreach ($reviews as $index => $review)
                    <div class="inline-block w-full align-top" style="transition: transform 300ms ease-in-out;">
                        <!-- Review Card -->
                        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-4">
                                <div class="flex items-center">
                                    <!-- Loop to generate yellow stars based on rating -->
                                    @for ($i = 0; $i < intval($review['rating']); $i++)
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                      
                                    @endfor
                                    <!-- Display the rating -->
                                    <p class="ml-3 text-sm text-gray-700">{{ $review['rating'] }} out of 5 stars</p>
                                </div>
                                <div class="tracking-wide text-sm text-indigo-500 font-semibold">{{ $review['guest_name'] }}</div>
                                <p class="mt-2 text-gray-500">{{ $review['review_text'] }}</p>
                        </div>
                        <!-- End Review Card -->
                    </div>
                @endforeach
            </div>
        </div>        
</div>
