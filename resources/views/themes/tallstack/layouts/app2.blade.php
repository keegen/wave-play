<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    @if(isset($seo->title))
        <title>{{ $seo->title }}</title>
    @else
        <title>
            {{ setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built on Laravel & Voyager') }}
        </title>
    @endif

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <link rel="icon"
        href="{{ setting('site.favicon', '/wave/favicon.png') }}"
        type="image/x-icon">
    {{-- Social Share Open Graph Meta Tags --}}
    @if(isset($seo->title) && isset($seo->description) && isset($seo->image))
        <meta property="og:title" content="{{ $seo->title }}">
        <meta property="og:url" content="{{ Request::url() }}">
        <meta property="og:image" content="{{ $seo->image }}">
        <meta property="og:type"
            content="@if(isset($seo->type)){{ $seo->type }}@else{{ 'article' }}@endif">
        <meta property="og:description" content="{{ $seo->description }}">
        <meta property="og:site_name" content="{{ setting('site.title') }}">

        <meta itemprop="name" content="{{ $seo->title }}">
        <meta itemprop="description" content="{{ $seo->description }}">
        <meta itemprop="image" content="{{ $seo->image }}">

        @if(isset($seo->image_w) && isset($seo->image_h))
            <meta property="og:image:width" content="{{ $seo->image_w }}">
            <meta property="og:image:height" content="{{ $seo->image_h }}">
        @endif
    @endif

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    @if(isset($seo->description))
        <meta name="description" content="{{ $seo->description }}">
    @endif

    <!-- Styles -->
    <link
        href="{{ asset('themes/' . $theme->folder . '/css/app.css') }}"
        rel="stylesheet">
    @livewireStyles
</head>

<body data-new-gr-c-s-check-loaded="14.1107.0" data-gr-ext-installed="">
    <div class="min-h-[712px] bg-gray-100">

        <div class="min-h-full">
            <header class="bg-indigo-600 pb-24" x-data="Components.popover({ open: false, focus: true })"
                x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="relative flex items-center justify-center py-5 lg:justify-between">
                        <!-- Logo -->
                        <div class="absolute left-0 flex-shrink-0 lg:static">
                            <a href="#">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=300"
                                    alt="Your Company">
                            </a>
                        </div>

                        <!-- Right section on desktop -->
                        <div class="hidden lg:ml-4 lg:flex lg:items-center lg:pr-0.5">
                            <button type="button"
                                class="flex-shrink-0 rounded-full p-1 text-indigo-200 hover:bg-white hover:bg-opacity-10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                                    </path>
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div x-data="Components.menu({ open: false })" x-init="init()"
                                @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)"
                                class="relative ml-4 flex-shrink-0">
                                <div>
                                    <button type="button"
                                        class="flex rounded-full bg-white text-sm ring-2 ring-white ring-opacity-20 focus:outline-none focus:ring-opacity-100"
                                        id="user-menu-button" x-ref="button" @click="onButtonClick()"
                                        @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()"
                                        aria-expanded="false" aria-haspopup="true"
                                        x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()"
                                        @keydown.arrow-down.prevent="onArrowDown()">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </button>
                                </div>

                                <div x-show="open" x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="absolute -right-2 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state."
                                    x-bind:aria-activedescendant="activeDescendant" role="menu"
                                    aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                                    @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()"
                                    @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()"
                                    @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active"
                                        x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }"
                                        role="menuitem" tabindex="-1" id="user-menu-item-0"
                                        @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)"
                                        @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Your
                                        Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active"
                                        x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 1 }"
                                        role="menuitem" tabindex="-1" id="user-menu-item-1"
                                        @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 1)"
                                        @mouseleave="onMouseLeave($event)"
                                        @click="open = false; focusButton()">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active"
                                        x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 2 }"
                                        role="menuitem" tabindex="-1" id="user-menu-item-2"
                                        @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 2)"
                                        @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Sign
                                        out</a>

                                </div>

                            </div>
                        </div>

                        <!-- Search -->
                        <div class="min-w-0 flex-1 px-12 lg:hidden">
                            <div class="mx-auto w-full max-w-xs">
                                <label for="desktop-search" class="sr-only">Search</label>
                                <div class="relative text-white focus-within:text-gray-600">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="desktop-search"
                                        class="block w-full rounded-md border-0 bg-white/20 py-1.5 pl-10 pr-3 text-white placeholder:text-white focus:bg-white focus:text-gray-900 focus:ring-0 focus:placeholder:text-gray-500 sm:text-sm sm:leading-6"
                                        placeholder="Search" type="search" name="search">
                                </div>
                            </div>
                        </div>

                        <!-- Menu button -->
                        <div class="absolute right-0 flex-shrink-0 lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button"
                                class="inline-flex items-center justify-center rounded-md bg-transparent p-2 text-indigo-200 hover:bg-white hover:bg-opacity-10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                                :aria-expanded="open.toString()">
                                <span class="sr-only">Open main menu</span>
                                <svg x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6"
                                    :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                </svg>
                                <svg x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6"
                                    :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden border-t border-white border-opacity-20 py-5 lg:block">
                        <div class="grid grid-cols-3 items-center gap-8">
                            <div class="col-span-2">
                                <nav class="flex space-x-4">
                                    <a href="#"
                                        class="text-white rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10"
                                        aria-current="page" x-state:on="Current" x-state:off="Default"
                                        x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-100&quot;">Home</a>
                                    <a href="#"
                                        class="text-indigo-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10"
                                        x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-100&quot;">Profile</a>
                                    <a href="#"
                                        class="text-indigo-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10"
                                        x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-100&quot;">Resources</a>
                                    <a href="#"
                                        class="text-indigo-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10"
                                        x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-100&quot;">Company
                                        Directory</a>
                                    <a href="#"
                                        class="text-indigo-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10"
                                        x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-indigo-100&quot;">Openings</a>

                                </nav>
                            </div>
                            <div>
                                <div class="mx-auto w-full max-w-md">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative text-white focus-within:text-gray-600">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input id="mobile-search"
                                            class="block w-full rounded-md border-0 bg-white/20 py-1.5 pl-10 pr-3 text-white placeholder:text-white focus:bg-white focus:text-gray-900 focus:ring-0 focus:placeholder:text-gray-500 sm:text-sm sm:leading-6"
                                            placeholder="Search" type="search" name="search">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="lg:hidden" x-description="Mobile menu, show/hide based on mobile menu state.">

                    <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="duration-150 ease-in"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        x-description="Mobile menu overlay, show/hide based on mobile menu state."
                        class="fixed inset-0 z-20 bg-black bg-opacity-25" @click="toggle" aria-hidden="true"
                        style="display: none;"></div>



                    <div x-show="open" x-transition:enter="duration-150 ease-out"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="duration-150 ease-in" x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        x-description="Mobile menu, show/hide based on mobile menu state."
                        class="absolute inset-x-0 top-0 z-30 mx-auto w-full max-w-3xl origin-top transform p-2 transition"
                        x-ref="panel" @click.away="open = false" style="display: none;">
                        <div
                            class="divide-y divide-gray-200 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="pb-2 pt-3">
                                <div class="flex items-center justify-between px-4">
                                    <div>
                                        <img class="h-8 w-auto"
                                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
                                            alt="Your Company">
                                    </div>
                                    <div class="-mr-2">
                                        <button type="button"
                                            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                            @click="toggle">
                                            <span class="sr-only">Close menu</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-3 space-y-1 px-2">
                                    <a href="#"
                                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Home</a>
                                    <a href="#"
                                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Profile</a>
                                    <a href="#"
                                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Resources</a>
                                    <a href="#"
                                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Company
                                        Directory</a>
                                    <a href="#"
                                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Openings</a>
                                </div>
                            </div>
                            <div class="pb-2 pt-4">
                                <div class="flex items-center px-5">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>
                                    <div class="ml-3 min-w-0 flex-1">
                                        <div class="truncate text-base font-medium text-gray-800">Tom Cook</div>
                                        <div class="truncate text-sm font-medium text-gray-500">tom@example.com</div>
                                    </div>
                                    <button type="button"
                                        class="ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        <span class="sr-only">View notifications</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mt-3 space-y-1 px-2">
                                    <a href="#"
                                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Your
                                        Profile</a>
                                    <a href="#"
                                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Settings</a>
                                    <a href="#"
                                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Sign
                                        out</a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </header>
            <main class="-mt-24 pb-8">
                <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h1 class="sr-only">Page title</h1>
                    @yield('content')
                    <!-- Main 3 column grid -->
                    <div class="grid grid-cols-1 items-start gap-4 lg:grid-cols-3 lg:gap-8">
                        <!-- Left column 
                        <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                            <section aria-labelledby="section-1-title">
                                <h2 class="sr-only" id="section-1-title">Section title</h2>
                                <div class="overflow-hidden rounded-lg bg-white shadow">
                                    <div class="p-6">
                                    </div>
                                </div>
                            </section>
                        </div>-->

                        <!-- Right column 
                        <div class="grid grid-cols-1 gap-4">
                            <section aria-labelledby="section-2-title">
                                <h2 class="sr-only" id="section-2-title">Section title</h2>
                                <div class="overflow-hidden rounded-lg bg-white shadow">
                                    <div class="p-6">
                                        <x-placeholder>
                                            <div
                                                class="relative h-96 overflow-hidden rounded border border-dashed border-gray-400 opacity-75">
                                                <svg class="absolute inset-0 h-full w-full stroke-gray-900/10"
                                                    fill="none">
                                                    <defs>
                                                        <pattern id="pattern-7a429f7f-112e-4ecd-bb4c-a0ab3ae94252" x="0"
                                                            y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                                                            <path d="M-3 13 15-5M-5 5l18-18M-1 21 17 3"></path>
                                                        </pattern>
                                                    </defs>
                                                    <rect stroke="none"
                                                        fill="url(#pattern-7a429f7f-112e-4ecd-bb4c-a0ab3ae94252)"
                                                        width="100%" height="100%"></rect>
                                                </svg>
                                            </div>
                                        </x-placeholder>
                                    </div>
                                </div>
                            </section>
                        </div> -->
                    </div>
                </div>
            </main>
            <footer>
                <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="border-t border-gray-200 py-8 text-center text-sm text-gray-500 sm:text-left"><span
                            class="block sm:inline">© 2021 Your Company, Inc.</span> <span class="block sm:inline">All
                            rights reserved.</span></div>
                </div>
            </footer>
        </div>

    </div>
    </div>
    @livewireScripts
        @if(!auth()->guest() && auth()->user()->hasAnnouncements())
            @include('theme::partials.announcements')
        @endif

        <!-- Scripts -->
        <script
            src="{{ asset('themes/' . $theme->folder . '/js/app.js') }}">
        </script>


        @yield('javascript')

        @if(setting('site.google_analytics_tracking_id', ''))
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async
                src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}">
            </script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', '{{ setting("site.google_analytics_tracking_id") }}');

            </script>

        @endif


        <!-- Full Screen Loader -->
        <div id="fullscreenLoader"
            class="fixed inset-0 top-0 left-0 z-50 flex flex-col items-center justify-center hidden w-full h-full bg-gray-900 opacity-50">
            <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <p id="fullscreenLoaderMessage" class="mt-4 text-sm font-medium text-white uppercase"></p>
        </div>
        <!-- End Full Loader -->


        @include('theme::partials.toast')
        @if(session('message'))
            <script>
                setTimeout(function () {
                    popToast("{{ session('message_type') }}",
                        "{{ session('message') }}");
                }, 10);

            </script>
        @endif
        @waveCheckout
</body>

</html>
