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
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- Styles -->
    <link
        href="{{ asset('themes/' . $theme->folder . '/css/app.css') }}"
        rel="stylesheet">
    @livewireStyles
</head>

<body data-new-gr-c-s-check-loaded="14.1107.0" data-gr-ext-installed="">
    <div class="min-h-[712px] bg-gray-100">

        <div class="min-h-full">
            <header class="bg-blue-600 pb-24" x-data="Components.popover({ open: false, focus: true })"
                x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="relative flex items-center justify-center py-5 lg:justify-between">
                        <!-- Logo -->
                        <div class="absolute left-0 flex-shrink-0 lg:static">
                            <a href="#">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=blue&amp;shade=300"
                                    alt="Your Company">
                            </a>
                        </div>

                        <!-- Right section on desktop -->
                        <div class="hidden lg:ml-4 lg:flex lg:items-center lg:pr-0.5">
                            <button type="button"
                                class="flex-shrink-0 rounded-full p-1 text-blue-200 hover:bg-white hover:bg-opacity-10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                                    </path>
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div @click.away="open = false" class="relative flex items-center h-full ml-3" x-data="{ open: false }">
                              <div>
                                  <button @click="open = !open" class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300" id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open" aria-expanded="true">
                                      <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->avatar() . '?' . time() }}" alt="{{ auth()->user()->name }}'s Avatar">
                                  </button>
                              </div>
                  
                              <div
                                  x-show="open"
                                  x-transition:enter="duration-100 ease-out scale-95"
                                  x-transition:enter-start="opacity-50 scale-95"
                                  x-transition:enter-end="opacity-100 scale-100"
                                  x-transition:leave="transition duration-50 ease-in scale-100"
                                  x-transition:leave-start="opacity-100 scale-100"
                                  x-transition:leave-end="opacity-0 scale-95"
                                  class="absolute top-0 right-0 w-56 mt-10 origin-top-right transform rounded-xl" x-cloak>
                  
                                  <div class="bg-white border border-gray-100 shadow-md rounded-xl" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                      <a href="{{ route('wave.profile', auth()->user()->username) }}" class="block px-4 py-3 text-gray-700 hover:text-gray-800">
                  
                                          <span class="block text-sm font-medium leading-tight truncate">
                                              {{ auth()->user()->name }}
                                          </span>
                                          <span class="text-xs leading-5 text-gray-600">
                                              View Profile
                                          </span>
                                      </a>
                                      @impersonating
                                              <a href="{{ route('impersonate.leave') }}" class="block px-4 py-2 text-sm leading-5 text-blue-900 border-t border-gray-100 bg-blue-50 hover:bg-blue-100 focus:outline-none focus:bg-blue-200">Leave impersonation</a>
                                      @endImpersonating
                                      <div class="border-t border-gray-100"></div>
                                      <div class="py-1">
                  
                                          <div class="block px-4 py-1">
                                              <span class="inline-block px-2 my-1 -ml-1 text-xs font-medium leading-5 text-gray-600 bg-gray-200 rounded">{{ auth()->user()->role->display_name }}</span>
                                          </div>
                                          @trial
                                              <a href="{{ route('wave.settings', 'plans') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Upgrade My Account</a>
                                          @endtrial
                                          @if( !auth()->guest() && auth()->user()->can('browse_admin') )
                                              <a href="{{ route('voyager.dashboard') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"><i class="fa fa-bolt"></i> Admin</a>
                                          @endif
                                          <a href="{{ route('wave.profile', auth()->user()->username) }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">My Profile</a>
                                          <a href="{{ route('wave.settings') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Settings</a>
                  
                                      </div>
                                      <div class="border-t border-gray-100"></div>
                                      <div class="py-1">
                                          <a href="{{ route('wave.logout') }}" class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">
                                              Sign out
                                          </a>
                                      </div>
                                  </div>
                              </div>
                  
                          </div>
                        </div>

                        <!-- Search 
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
                        </div> -->

                        <!-- Menu button -->
                        <div class="absolute right-0 flex-shrink-0 lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button"
                                class="inline-flex items-center justify-center rounded-md bg-transparent p-2 text-blue-200 hover:bg-white hover:bg-opacity-10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
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
                                        x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-blue-100&quot;">Home</a>
                                    <a href="#"
                                        class="text-blue-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10"
                                        x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-blue-100&quot;">Site Info</a>
                                    <a href="#"
                                        class="text-blue-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10"
                                        x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-blue-100&quot;">Inventory</a>
                                    <a href="#"
                                        class="text-blue-100 rounded-md bg-white bg-opacity-0 px-3 py-2 text-sm font-medium hover:bg-opacity-10"
                                        x-state-description="undefined: &quot;text-white&quot;, undefined: &quot;text-blue-100&quot;">Theme</a>

                                </nav>
                            </div>
                            <div>
                                <div class="mx-auto w-full max-w-md">
                                    <!-- <label for="mobile-search" class="sr-only">Search</label>
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
                                            placeholder="Search" type="search" name="search"> -->
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
                                            src="https://tailwindui.com/img/logos/mark.svg?color=blue&amp;shade=600"
                                            alt="Your Company">
                                    </div>
                                    <div class="-mr-2">
                                        <button type="button"
                                            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
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
                                        class="ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
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
            @yield('content')
            <footer>
                <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="border-t border-gray-200 py-8 text-center text-sm text-gray-500 sm:text-left"><span
                            class="block sm:inline">© 2023 Personal Dealer Site</span> <span class="block sm:inline">All
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
