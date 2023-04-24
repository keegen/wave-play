@extends('theme::layouts.main')

@section('content')

<section class="relative px-2 py-12 bg-white sm:py-6 md:py-8 md:px-0">
    <div class="relative top-0 left-0 items-center justify-center w-full h-full md:absolute">
        <div class="relative z-20 h-full px-8 mx-auto max-w-7xl xl:px-5">
            <div class="flex flex-wrap items-center h-full sm:-mx-3">
                <div class="w-full pl-10 pr-10 sm:pl-0 md:w-1/2 xl:pr-3">
                    <div class="w-full pb-6 pl-0 space-y-4 sm:pl-10 md:max-w-md lg:max-w-lg md:space-y-5 lg:space-y-6 xl:space-y-7 sm:pr-5 lg:pr-0 md:pb-0">
                        <p class="font-medium tracking-wide text-grey-900 uppercase" data-primary="blue-600">Grow your business online</p>
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-8xl">Websites for 🚗 Sales Professionals</h1>
                        <p class="mx-auto text-base text-gray-500 lg:leading-9 md:max-w-md lg:text-xl md:max-w-3xl">Easily create your online showroom for your customers and own the complete experience.</p>
                        <div class="relative flex flex-col space-y-3 lg:flex-row lg:space-y-0 lg:space-x-4 md:pr-10 lg:pr-0">
                            <a href="/pricing" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-blue-600 rounded-md sm:mb-0 hover:bg-blue-700 sm:w-auto" data-rounded="rounded-md" data-primary="blue-600">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <!-- intentionally leaving this empty -->
                </div>
            </div>
        <div class="tails-hover-element"></div></div>
    </div>
    <div class="relative top-0 left-0 z-10 flex items-center w-full h-full py-12">
        <div class="hidden w-1/2 md:block">
            <!-- left side leaving empty so that way the laptop can span full width on the right -->
        </div>
        <div class="w-full -mr-32 2xl:-mr-64 md:w-7/12">
            <img src="themes/tallstack/images/hero_website.png" class="w-full transform scale-80 md:scale-100">
        </div>
    </div>
</section>
<section class="relative pb-12 overflow-x-hidden bg-white border-t border-b border-gray-100 pt-7">
    <p class="w-full text-xs font-bold tracking-wider text-center text-black uppercase pb-7 upercase">Custom Themes For Your Franchise</p>
    <div class="px-8 mx-auto max-w-7xl-xl">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="themes/tallstack/images/c_logo.png" alt="chevy custom theme">
                </div>
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="themes/tallstack/images/h_logo.png" alt="honda custom theme">
                </div>
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="themes/tallstack/images/f_logo.png" alt="honda custom theme">
                </div>
                <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                    <img src="themes/tallstack/images/n_logo.png" alt="nissan custom theme">
                </div>
                <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1">
                    <img src="themes/tallstack/images/t_logo.png" alt="toyota custom theme">
                </div>
            </div>
        </div>
    </div>
<div class="tails-hover-element"></div>
</section>
<section class="box-border relative block py-24 overflow-hidden leading-6 text-left bg-white">
    <div class="max-w-6xl px-4 px-16 mx-auto leading-6 text-left xl:px-12">
        <div class="box-border flex flex-col flex-wrap items-start mx-0 text-grey-900">
            <div class="pb-4 text-sm font-bold text-left text-gray-700 uppercase">Personal Dealer Site Features
            </div>
            <h3 class="relative text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-8xl">
                Powerful and Simple Features</h3>
        </div>
        <div class="grid grid-cols-3 gap-5 text-grey-900 md:grid-cols-6">
            <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                <div class="box-border flex items-center justify-start pt-12 text-grey-900">
                    <img src="themes/tallstack/images/pds_leads.png" class="leading-6 text-left align-middle border-none w-14 h-14">
                    <div class="pl-8 leading-6 text-left">
                        <div class="box-border pb-1 text-xl font-medium text-grey-900">Lead Forms</div>
                        <div class="box-border text-base leading-normal text-gray-700">
                            Contact forms and lead capture forms.</div>
                    </div>
                </div>
            </div>

            <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                <div class="box-border flex items-center justify-start pt-12 text-grey-900">
                    <img src="themes/tallstack/images/pds_inventory.png" class="leading-6 text-left align-middle border-none w-14 h-14">
                    <div class="pl-8 leading-6 text-left">
                        <div class="box-border pb-1 text-xl font-medium text-grey-900">
                            Inventory Management System</div>
                        <div class="box-border text-base leading-normal text-gray-700">
                            Daily inventory syncs and allows you to add, edit or delete inventory with details and images.</div>
                    </div>
                </div>
            </div>

            <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                <div class="box-border flex items-center justify-start pt-12 text-grey-900">
                    <img src="themes/tallstack/images/pds_search.png" class="leading-6 text-left align-middle border-none w-14 h-14">
                    <div class="pl-8 leading-6 text-left">
                        <div class="box-border pb-1 text-xl font-medium text-grey-900">
                            Vehicle Search Functionality</div>
                        <div class="box-border text-base leading-normal text-gray-700">Advanced search bar giving shoppers a great experience when searching make, model, year, mileage, or price.</div>
                    </div>
                </div>
            </div>

            <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                <div class="box-border flex items-center justify-start pt-12 text-grey-900">
                    <img src="themes/tallstack/images/pds_integrations.png" class="leading-6 text-left align-middle border-none w-14 h-14">
                    <div class="pl-8 leading-6 text-left">
                        <div class="box-border pb-1 text-xl font-medium text-grey-900">Analytics Integrations</div>
                        <div class="box-border text-base leading-normal text-gray-700">
                            Integration with Google Analytics for monitoring website and visitor data.</div>
                    </div>
                </div>
            </div>

            <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                <div class="box-border flex items-center justify-start pt-12 text-grey-900 tails-relative">
                    <img src="themes/tallstack/images/pds_web.png" class="leading-6 text-left align-middle border-none w-14 h-14">
                    <div class="pl-8 leading-6 text-left">
                        <div class="box-border pb-1 text-xl font-medium text-grey-900">
                            Responsive Design</div>
                        <div class="box-border text-base leading-normal text-gray-700">
                            Website design that is optimized for all screen sizes, including desktops, laptops, and mobile devices.</div>
                    </div>
                <div class="tails-hover-element"></div></div>
            </div>

            <div class="relative w-full col-span-3 px-4 leading-6 text-left">
                <div class="box-border flex items-center justify-start pt-12 text-grey-900">
                    <img src="themes/tallstack/images/pds_seo.png" class="leading-6 text-left align-middle border-none w-14 h-14">
                    <div class="pl-8 leading-6 text-left">
                        <div class="box-border pb-1 text-xl font-medium text-grey-900">
                            SEO Optimization</div>
                        <div class="box-border text-base leading-normal text-gray-700">
                            Optimization of website content and structure for search engine crawling and indexing.</div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<section class="py-24 bg-blue-700">
    <div class="max-w-6xl px-10 mx-auto xl:max-w-7xl">
        <div class="flex flex-col items-start justify-between lg:flex-row">
            <div class="relative">
                <h2 class="text-4xl font-extrabold text-white xl:text-5xl">Are you ready to level-up your game?</h2>
                <p class="mt-2 text-xl text-blue-400">Launch a beautiful website with Personal Dealer Site.</p>
            </div>
            <a href="/pricing" class="flex items-center justify-center px-10 py-5 mt-10 text-xl font-medium text-black bg-white rounded-full hover:bg-white lg:mt-0" data-primary="black-500" data-rounded="rounded-full">Get Started Now</a>
        </div>
    </div>
</section><section class="py-16 bg-white md:py-20 lg:py-24" data-tails-scripts="//unpkg.com/alpinejs">
    <div class="max-w-5xl px-12 mx-auto xl:px-0">

        <h2 class="text-3xl font-black md:text-4xl lg:text-6xl xl:text-7xl">Frequently Asked Questions</h2>
        <p class="mt-4 text-xl font-thin text-gray-700 lg:text-2xl">Here are some of the most common frequently asked questions</p>

        <div class="relative mt-12 space-y-3">

            <!-- Question 1 -->
            <div x-data="{ show: false }" class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 @click="show=!show" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                    <span>How does the inventory management system work?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p class="px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7"
                    x-transition:enter="transition-all ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform -translate-y-0"
                    x-transition:leave="transition-all ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform -translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-4"
                    x-show="show"
                    x-cloak>Personal Dealer Site does a sync with your dealership's website every night to update the inventory details such as new vehicles, sold vehicles, vehicle information changes etc.</p>
            </div>

            <!-- Question 2 -->
            <div x-data="{ show: false }" class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 @click="show=!show" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                    <span>Is there a limit to the number of vehicles that can be added to the inventory?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p class="px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7"
                    x-transition:enter="transition-all ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform -translate-y-0"
                    x-transition:leave="transition-all ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform -translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-4"
                    x-show="show"
                    x-cloak>No, there is no limit to the number of vehicles that can be added to the inventory on Personal Dealer Site.</p>
            </div>

            <!-- Question 3 -->
            <div x-data="{ show: false }" class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 @click="show=!show" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                    <span>Can I customize the lead capture forms?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p class="px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7"
                    x-transition:enter="transition-all ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform -translate-y-0"
                    x-transition:leave="transition-all ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform -translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-4"
                    x-show="show"
                    x-cloak> Not at this time.</p>
            </div>

            <!-- Question 4 -->
            <div x-data="{ show: false }" class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 @click="show=!show" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                    <span>Can I track website visitor data and analytics?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p class="px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7"
                    x-transition:enter="transition-all ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform -translate-y-0"
                    x-transition:leave="transition-all ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform -translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-4"
                    x-show="show"
                    x-cloak>Yes, we have an easy place to install analytics code to your website.</p>
            </div>

            <!-- Question 5 -->
            <div x-data="{ show: false }" class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 @click="show=!show" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                    <span>Is the website design optimized for mobile devices?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p class="px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7"
                    x-transition:enter="transition-all ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform -translate-y-0"
                    x-transition:leave="transition-all ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform -translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-4"
                    x-show="show"
                    x-cloak>Yes!</p>
            </div>

        </div>

    </div>
</section>

    <!-- BEGINNING OF PRICING SECTION -->
    <div id="pricing" class="relative">

        <div class="relative z-20 px-8 pb-8 mx-auto max-w-7xl xl:px-5">
            <div class="w-full text-left sm:text-center">
                <h2 class="pt-12 text-4xl font-extrabold text-gray-900 lg:text-5xl">Pricing</h2>
                <p class="w-full my-1 text-base text-left text-gray-900 opacity-75 sm:my-2 sm:text-center sm:text-xl">You're a few clicks away from your new online showroom.</p>
            </div>

            @livewire('wave.settings.plans')
        </div>
    </div>
    <!-- END OF PRICING SECTION -->

@endsection
