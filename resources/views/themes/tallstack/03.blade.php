<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Yellow Personal Dealer Site</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <link rel="icon" href="{{ setting('site.favicon', '/wave/favicon.png') }}" type="image/x-icon">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    <meta name="description" content="This is template 1 content for SEO purposes">
    <link href="{{ asset('themes/' . $theme->folder . '/css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="flex flex-col min-h-screen">

<!-- Hero -->
<div class="relative isolate overflow-hidden bg-white">
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
            <img class="inline-block h-20 w-20 rounded-full" src="http://personaldealer.site/storage/avatars/admin.png?1682294298" alt="">
        <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Hi! I'm Dan!</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">I'm a automotive sales professional at the best MB dealership in Louisiana, and I can help you buy a car and enjoy the best rates and experience. Contact me or see the inventory below to experience the best.</p>
        <div class="mt-10 flex items-center gap-x-6">
          <a href="#" class="rounded-md bg-yellow-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Contact me</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">See inventory <span aria-hidden="true">→</span></a>
        </div>
        <!-- Social Icons -->
        <div class="flex space-x-6 pt-8">
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
</svg>
            </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Instagram</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
</svg>
            </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Twitter</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
</svg>
            </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">YouTube</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
<path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd"></path>
</svg>
            </a>
          
        </div>
      </div>
      <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
        <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
          <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
            <img src="themes/tallstack/images/themes/theme_covers/yellow.jpg" alt="ferrari dealership" width="900" height="534" class="w-[38rem] rounded-md shadow-2xl ring-1 ring-gray-900/10">
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Testimonials -->
<div class="bg-white pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
  <div class="bg-yellow-400 pb-20 sm:pb-24 xl:pb-0">
    <div class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
      <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
        <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
          <img class="absolute inset-0 h-full w-full rounded-2xl bg-gray-800 object-cover shadow-2xl" src="themes/tallstack/images/testimonial_1.jpg" alt="">
        </div>
      </div>
      <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
        <figure class="relative isolate pt-6 sm:pt-12">
          <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute left-0 top-0 -z-10 h-32 stroke-white/20">
            <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
            <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
          </svg>
          <blockquote class="text-xl font-semibold leading-8 text-white sm:text-2xl sm:leading-9">
            <p>"Great experience all around. Dan Smith has taken excellent care of us every time the car goes to the dealership. I highly recommend him!"</p>
          </blockquote>
          <figcaption class="mt-8 text-base">
            <div class="font-semibold text-white">- Judith Beck</div>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>


  <!-- Products -->
  <main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
    <div class="border-b border-gray-200 pb-10 pt-24">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900">Inventory</h1>
      <p class="mt-4 text-base text-gray-500">Checkout out the current inventory </p>
    </div>

    <div class="pb-24 pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
      <aside>
        <h2 class="sr-only">Filters</h2>

        <button type="button" x-description="Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state." class="inline-flex items-center lg:hidden" @click="open = true">
          <span class="text-sm font-medium text-gray-700">Filters</span>
          <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
</svg>
        </button>

        <div class="hidden lg:block">
          <form class="space-y-10 divide-y divide-gray-200">
            <div>
                <fieldset>
                  <legend class="block text-sm font-medium text-gray-900">Body Style</legend>
                  <div class="space-y-3 pt-6">
                    <div class="flex items-center">
                        <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="color-0" class="ml-3 text-sm text-gray-600">Cargo Van</label>
                      </div>
                    <div class="flex items-center">
                        <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="color-1" class="ml-3 text-sm text-gray-600">Convertible</label>
                      </div>
                    <div class="flex items-center">
                        <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="color-2" class="ml-3 text-sm text-gray-600">Coupe</label>
                      </div>
                    <div class="flex items-center">
                        <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="color-3" class="ml-3 text-sm text-gray-600">Sedan</label>
                      </div>
                    <div class="flex items-center">
                        <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="color-4" class="ml-3 text-sm text-gray-600">SUV</label>
                      </div>
                  </div>
                </fieldset>
              </div>
            <div class="pt-10">
                <fieldset>
                  <legend class="block text-sm font-medium text-gray-900">Exterior Color</legend>
                  <div class="space-y-3 pt-6">
                    <div class="flex items-center">
                        <input id="category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="category-0" class="ml-3 text-sm text-gray-600">Black</label>
                      </div>
                    <div class="flex items-center">
                        <input id="category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="category-1" class="ml-3 text-sm text-gray-600">Blue</label>
                      </div>
                    <div class="flex items-center">
                        <input id="category-2" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="category-2" class="ml-3 text-sm text-gray-600">Brown</label>
                      </div>
                    <div class="flex items-center">
                        <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="category-3" class="ml-3 text-sm text-gray-600">Gray</label>
                      </div>
                    <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600">Red</label>
                      </div>
                      <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600">Silver</label>
                      </div>
                      <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600">White</label>
                      </div>
                      <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600">Other</label>
                      </div>

                  </div>
                </fieldset>
              </div>
            
          </form>
        </div>
      </aside>

      <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
        <h2 id="product-heading" class="sr-only">Products</h2>

        <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
          <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://images.dealer.com/ddc/vehicles/2023/Mercedes-Benz/AMG%20G%2063/SUV/trim_Base_1d016a/color/MANUFAKTUR%20Signature%20China%20Blue-934-82%2C134%2C173-640-en_US.jpg?impolicy=downsize_bkpt&imdensity=1&w=520" alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Blue 2023 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8
                  .</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2023</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
          <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
          
        </div>
        <nav class="flex items-center justify-between border-t border-gray-200 px-4 pt-4 sm:px-0">
          <div class="-mt-px flex w-0 flex-1">
            <a href="#" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
              <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
              </svg>
              Previous
            </a>
          </div>
          <div class="hidden md:-mt-px md:flex">
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">1</a>
            <!-- Current: "border-indigo-500 text-sky-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
            <a href="#" class="inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-sky-600" aria-current="page">2</a>
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">3</a>
            <span class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500">...</span>
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">8</a>
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">9</a>
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">10</a>
          </div>
          <div class="-mt-px flex w-0 flex-1 justify-end">
            <a href="#" class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
              Next
              <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </nav>
        
      </section>
      
    </div>
  </main>

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
    <img class="h-64 w-full bg-gray-50 object-cover sm:h-80 lg:absolute lg:h-full" src="themes/tallstack/images/contact_stock.jpg" alt="">
  </div>
  <div class="pb-24 pt-16 sm:pb-32 sm:pt-24 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-32">
    <div class="px-6 lg:px-8">
      <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900">Contact</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">I'm looking forward to helping you.</p>
        <form action="#" method="POST" class="mt-16">
          <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
              <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
              <div class="mt-2.5">
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div>
              <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
              <div class="mt-2.5">
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
              <div class="mt-2.5">
                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <div class="flex justify-between text-sm leading-6">
                <label for="phone" class="block font-semibold text-gray-900">Phone</label>
                <p id="phone-description" class="text-gray-400">Optional</p>
              </div>
              <div class="mt-2.5">
                <input type="tel" name="phone" id="phone" autocomplete="tel" aria-describedby="phone-description" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <div class="flex justify-between text-sm leading-6">
                <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">How can I help you?</label>
                <p id="message-description" class="text-gray-400">Max 500 characters</p>
              </div>
              <div class="mt-2.5">
                <textarea id="message" name="message" rows="4" aria-describedby="message-description" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6"></textarea>
              </div>
            </div>
          </div>
          <div class="mt-10 flex justify-end border-t border-gray-900/10 pt-8">
            <button type="submit" class="rounded-md bg-yellow-400 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-yellow-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-400">Send message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

 
  

  @livewireScripts
  @if(!auth()->guest() && auth()->user()->hasAnnouncements())
  @include('theme::partials.announcements')
@endif

<!-- Scripts -->
<script src="{{ asset('themes/' . $theme->folder . '/js/app.js') }}"></script>

@yield('javascript')

@if(setting('site.google_analytics_tracking_id', ''))
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '{{ setting("site.google_analytics_tracking_id") }}');
  </script>

@endif


  <!-- Full Screen Loader -->
  <div id="fullscreenLoader" class="fixed inset-0 top-0 left-0 z-50 flex flex-col items-center justify-center hidden w-full h-full bg-gray-900 opacity-50">
      <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
      <p id="fullscreenLoaderMessage" class="mt-4 text-sm font-medium text-white uppercase"></p>
  </div>
  <!-- End Full Loader -->


  @include('theme::partials.toast')
  @if(session('message'))
      <script>setTimeout(function(){ popToast("{{ session('message_type') }}", "{{ session('message') }}"); }, 10);</script>
  @endif
  @waveCheckout



</body>
</html>