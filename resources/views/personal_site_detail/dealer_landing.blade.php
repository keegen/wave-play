<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ $personalDealerSite->name }}</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <link rel="icon" href="{{ setting('site.favicon', '/wave/favicon.png') }}" type="image/x-icon">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    <meta name="description" content="This is a PersonalDealer.Site for {{ $personalDealerSite->name }}">

    <link href="{{ asset('themes/' . $theme->folder . '/css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="flex flex-col min-h-screen">
    <!-- [Body content] -->

<!-- Hero -->
<div class="relative isolate overflow-hidden bg-white">
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
        <img class="inline-block h-20 w-20 rounded-full" src="{{ asset('storage/' . $personalDealerSite->photo) }}" alt="{{ $personalDealerSite->name }} profile photo">
        <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Hi! I'm {{ $personalDealerSite->name }}!</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">{{ $personalDealerSite->about }}</p>
        <div class="mt-10 flex items-center gap-x-6">
          <a href="#contact" class="rounded-md bg-{{ $dealerTheme->pd_theme_primary_color }} px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-{{ $dealerTheme->pd_theme_primary_color }} focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-{{ $dealerTheme->pd_theme_secondary_color }}">Contact me</a>
          <a href="#inventory" class="text-sm font-semibold leading-6 text-gray-900">See inventory <span aria-hidden="true">→</span></a>
        </div>


        <div class="flex space-x-6 pt-8">
          @if (!empty($personalDealerSite->facebook_link))
              <a href="https://{{ $personalDealerSite->facebook_link }}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
  </svg>
              </a>
          @endif
      
          @if (!empty($personalDealerSite->instagram_link))
              <a href="https://{{ $personalDealerSite->instagram_link }}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
  </svg>
              </a>
          @endif
      
          @if (!empty($personalDealerSite->twitter_link))
              <a href="https://{{ $personalDealerSite->twitter_link }}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
  </svg>
              </a>
          @endif
      
          @if (!empty($personalDealerSite->youtube_link))
              <a href="https://{{ $personalDealerSite->youtube_link }}" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">YouTube</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd"></path>
  </svg>
              </a>
          @endif
      </div>
      </div>
      <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
        <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
          <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
            <img src="{{ asset('storage/' . $personalDealerSite->cover_photo) }}" alt="Personal Dealer Site Cover Photo" width="900" height="534" class="w-[38rem] rounded-md shadow-2xl ring-1" style="--tw-ring-shadow: 0 0 #35383b, 0 0 0 2px #e6e6e6;">
          </div>
        </div>
      </div>
    </div>
</div>


@if($reviewsAvailable)
<div>
  @livewire('review-slider', ['personalSiteDetailId' => $personalDealerSite->id])
</div>
@else
@endif
<div>
  @livewire('review-form', [
    'personalSiteDetailId' => $personalDealerSite->id,
    'dealerTheme' => $dealerTheme
])
</div>




<!-- Endo of Testimonials -->

<!-- product loop -->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <div class="md:flex md:items-center md:justify-between">
          <h2 id="inventory" class="text-2xl font-bold tracking-tight text-gray-900 mb-4">Inventory</h2>
      </div>

      @if (empty($newVehicles['records']) && empty($usedVehicles['records']))
          <p class="mt-1 text-sm font-medium text-gray-900">Sorry, there are no vehicles available at the moment.</p>
      @else
      <livewire:vehicle-search :personal-dealer-site="$personalDealerSite" :dealer-theme="$dealerTheme" />

          <!-- Modals (outside the grid) -->
          @foreach($newVehicles['records'] as $vehicle)
          <div class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50" id="modal-{{ $vehicle->fields->{'Stock'} }}">
              <div class="bg-white p-6 rounded-lg w-3/4 max-w-xl relative">
                  <!-- Close Button -->
                  <span class="closeModal absolute top-4 right-4 cursor-pointer text-xl">&times;</span>
                  <!-- Modal Content (The Form) -->
                  <form action="{{ route('store-lead') }}" method="POST">
                      @csrf
                      <div class="mb-4">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">I'm intested in the {{ $vehicle->fields->{'Vehicle'} }}.</h3>
                          <label for="name" class="block text-gray-700 font-medium mt-2">Name</label>
                          <input type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Your Name" required>
                          <label for="name" class="block text-gray-700 font-medium mt-2">Email</label>
                          <input type="text" id="email" name="email" class="form-input mt-1 block w-full" placeholder="Your Email" required>
                          <label for="name" class="block text-gray-700 font-medium mt-2">Phone Number</label>
                          <input type="text" id="number" name="number" class="form-input mt-1 block w-full" placeholder="Your Phone Number" required>
                          <label for="contact_preference" class="block text-gray-700 font-medium mt-2">Contact Preference</label>
                          <select id="contact_preference" name="contact_preference" class="form-input mt-1 block w-full">
                              <option value="phone">Phone</option>
                              <option value="email">Email</option>
                          </select>
                          <label for="contact_time" class="block text-gray-700 font-medium mt-2">Preferred Contact Time:</label>
                          <select id="contact_time" name="contact_time" class="form-input mt-1 block w-full">
                              <option value="8am - 12pm" class="form-option mt-1 block w-full">8am - 12pm</option>
                              <option value="12pm - 5pm" class="form-option mt-1 block w-full">12pm - 5pm</option>
                              <option value="5pm - 7:30pm" class="form-option mt-1 block w-full">5pm - 7:30pm</option>
                          </select>
                          <input type="hidden" name="stock_number" value="{{ $vehicle->fields->{'Stock'} }}">
                          <input type="hidden" name="personal_dealer_site_id" value="{{ $personalDealerSite->id }}">
                          <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-{{ $dealerTheme->pd_theme_primary_color }} rounded-lg hover:bg-{{ $dealerTheme->pd_theme_secondary_color }} focus:ring-4 focus:outline-none focus:ring-{{ $dealerTheme->pd_theme_primary_color }} dark:bg-{{ $dealerTheme->pd_theme_secondary_color }} dark:hover:bg-{{ $dealerTheme->pd_theme_secondary_color }} dark:focus:ring-{{ $dealerTheme->pd_theme_secondary_color }} mt-4">
                              Submit
                          </button>
                      </div>
                  </form>
              </div>
          </div>
          @endforeach
      @endif
  </div>
</div>

        
        <!-- More products... -->
      </div>
    </div>
  </div>


  <!--
  Contact Information
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="relative bg-white">
  <div class="lg:absolute lg:inset-0 lg:left-1/2">
    <img class="h-64 w-full bg-gray-50 object-cover sm:h-80 lg:absolute lg:h-full" src="{{ asset('storage/' . $personalDealerSite -> photo) }}" alt="Profile Photo">
  </div>
  <div class="pb-24 pt-16 sm:pb-32 sm:pt-24 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-32">
    <div class="px-6 lg:px-8">
      <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900" id="contact">Contact</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">I'm looking forward to helping you.</p>
        @livewire('contact-form', ['dealerId' => $personalDealerSite->id, 'dealerTheme' => $dealerTheme])
      </div>
    </div>
  </div>
</div>
<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
  <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://personaldealer.site" class="hover:underline">PersonalDealerSite™</a>. All Rights Reserved.
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
          <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
      </li>
      <li>
          <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
      </li>
      <li>
          <a href="#" class="hover:underline">Get Your Own</a>
      </li>
  </ul>
  </div>
</footer>
 




  <!-- Full Screen Loader -->
  <div id="fullscreenLoader" class="fixed inset-0 top-0 left-0 z-50 flex flex-col items-center justify-center hidden w-full h-full bg-gray-900 opacity-50">
      <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
      <p id="fullscreenLoaderMessage" class="mt-4 text-sm font-medium text-white uppercase"></p>
  </div>
  <!-- End Full Loader -->

  @livewireScripts
  @include('theme::partials.toast')
  @if(session('message'))
      <script>setTimeout(function(){ popToast("{{ session('message_type') }}", "{{ session('message') }}"); }, 10);</script>
  @endif
  @waveCheckout

  <script type="module" src="{{ asset('themes/' . $theme->folder . '/js/app.js') }}"></script>
</body>
</html>