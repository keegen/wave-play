<div>
    

    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white mt-4">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input wire:model="search" type="text" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Vehicles, model, trim and color" required>
        <button wire:click="clearSearch" type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-400 bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Clear</button>
    </div>
    
    <!-- Display New Vehicles -->
    <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
        @foreach($newVehicles as $vehicle)
        <div class="group relative">
            <div class="w-full overflow-hidden bg-gray-200 group-hover:opacity-75 mt-10">
                <img src="{{ $vehicle['Image'] }}" 
                     class="h-full w-full object-cover object-center" 
                     onerror="this.onerror=null;this.src='/themes/tallstack/images/inventory_placeholder.png';"
                     alt="{{ $vehicle['Vehicle'] }}" />
            </div>            
            <h3 class="mt-4 font-medium text-sm text-gray-700">
                {{ $vehicle['Vehicle'] }}
            </h3>
            <p class="mt-1 text-sm font-medium text-gray-900">{{ $vehicle['Color'] }}</p>
            <p class="mt-1 text-sm text-gray-500">Stock Number: {{ $vehicle['Stock'] }}</p>
            <p class="mt-1 text-sm text-gray-500">MSRP: {{ $vehicle['MSRP'] }}</p>
            <button class="interestButton px-3 py-2 text-xs font-medium text-center text-white bg-{{ $dealerTheme->pd_theme_secondary_color }} rounded-lg hover:bg-{{ $dealerTheme->pd_theme_secondary_color }} focus:ring-4 focus:outline-none focus:ring-{{ $dealerTheme->pd_theme_primary_color }} dark:bg-{{ $dealerTheme->pd_theme_primary_color }} dark:hover:bg-{{ $dealerTheme->pd_theme_primary_color }} dark:focus:ring-{{ $dealerTheme->pd_theme_secondary_color }} mt-4" data-modal="{{ $vehicle['Stock'] }}">
                I'm Interested
            </button>
        </div>
        @endforeach
    </div>
    
    <!-- You can similarly add the section for used vehicles -->
</div>

