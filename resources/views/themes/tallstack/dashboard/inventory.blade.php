@extends('theme::layouts.app3')


@section('content')

<div class="bg-white px-6 py-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
        <p class="text-base font-semibold leading-7 text-blue-600">{{ auth()->user()->name }}, let's set up your</p>
        <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Inventory</h2>
        <p class="mt-6 text-md leading-8 text-gray-600">Input the link to your New & Used car inventory on your
            dealership website. After you've saved your inventory links we will email you to let you know the initial
            inventory sync was successful, and your inventory will be available on your Personal Dealer Site. This
            process usually takes 3-4 days for the initial sync depending on volume.</p>
    </div>

    <form action="{{ route('personal_site_detail.inventory') }}" method="POST">
      @csrf
        <div class="space-y-12 mt-16">
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                <div>
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Tip</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">This link can be found by going to your dealership
                        website and clicking on the link to New inventory in the navigation. Then copy the url from the
                        address bar.</p>
                    <img class="mt-4" src="themes/tallstack/images/address_bar.png">
                </div>

                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                    <div class="sm:col-span-4">
                        <label for="new_inventory_link" class="block text-sm font-medium leading-6 text-gray-900">New
                            Inventory</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="new_inventory_link" id="new_inventory_link" value="{{ $personalSiteDetail->new_vehicle_link ?? 'https://www.yourdealership.com/new' }}"
                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                <div>
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Tip</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">This link can be found by clicking on the link to
                        Used Inventory in the navigation and then copying the link from the address bar.</p>
                </div>

                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                    <div class="sm:col-span-4">
                        <label for="used_inventory_link" class="block text-sm font-medium leading-6 text-gray-900">Used
                            Inventory</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="used_inventory_link" id="used_inventory_link" value="{{ $personalSiteDetail->used_vehicle_link ?? 'https://www.yourdealership.com/new' }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


          <div class="mt-6 flex items-center justify-end gap-x-6">
              <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
          </div>
        </div>
    </form>
  </div>
</div>


@endsection
