@extends('theme::layouts.app3')


@section('content')


<div class="bg-white px-6 py-6 sm:py-16 lg:px-8">
  <div class="flex justify-between items-center">
    <div class="max-w-xl">
      <p class="text-base font-semibold leading-7 text-blue-600">{{ auth()->user()->name }}, welcome to your</p>
      <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Dashboard</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600"></p>
    </div>
    <div class="flex items-center">
      <div class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
        <a href="https://personaldealer.site/{{ $personalSiteDetail->name }}" class="inline-flex items-center" target="_blank">
          <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z"></path>
            <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z"></path>
          </svg>
          View
        <span class="ml-1 text-xs text-gray-500">personaldealer.site/{{ $personalSiteDetail->name }}</span>
      </a>
      </div>
      
    </div>
  </div>
</div>

  <div>
    <h3 class="text-base font-semibold leading-6 text-gray-900">Last 30 days</h3>
  
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
      <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
        <dt>
          <div class="absolute rounded-md bg-indigo-500 p-3">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
          </div>
          <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Leads</p>
        </dt>
        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
          <p class="text-2xl font-semibold text-gray-900">{{ $leadsCount }}</p>
<p class="ml-2 flex items-baseline text-sm font-semibold {{ $leadsGrowthPercentage < 0 ? 'text-red-600' : 'text-green-600' }}">
    @if($leadsGrowthPercentage < 0)
        <svg class="h-5 w-5 flex-shrink-0 self-center {{ $leadsGrowthPercentage < 0 ? 'text-red-500' : 'text-green-500' }}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75V14.388l4.46-4.468a.75.75 0 011.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only"> Decreased by </span>
    @else
        <svg class="h-5 w-5 flex-shrink-0 self-center {{ $leadsGrowthPercentage < 0 ? 'text-red-500' : 'text-green-500' }}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only"> Increased by </span>
    @endif
    {{ abs($leadsGrowthPercentage) }}%
</p>

          </p>
          <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
              <a href="#leads" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span class="sr-only"> Total Leads stats</span></a>
            </div>
          </div>
        </dd>
      </div>
      <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
        <dt>
          <div class="absolute rounded-md bg-indigo-500 p-3">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
            </svg>
          </div>
          <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Contact Requests</p>
        </dt>
        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
          <p class="text-2xl font-semibold text-gray-900">{{ $contactsCount }}</p>
<p class="ml-2 flex items-baseline text-sm font-semibold {{ $contactsGrowthPercentage < 0 ? 'text-red-600' : 'text-green-600' }}">
    @if($contactsGrowthPercentage < 0)
        <svg class="h-5 w-5 flex-shrink-0 self-center {{ $contactsGrowthPercentage < 0 ? 'text-red-500' : 'text-green-500' }}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75V14.388l4.46-4.468a.75.75 0 011.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only"> Decreased by </span>
    @else
        <svg class="h-5 w-5 flex-shrink-0 self-center {{ $contactsGrowthPercentage < 0 ? 'text-red-500' : 'text-green-500' }}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only"> Increased by </span>
    @endif
    {{ abs($contactsGrowthPercentage) }}%
</p>

          <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
              <a href="#contacts" class="font-medium text-indigo-600 hover:text-indigo-500">View all<span class="sr-only"> Total Contact Requests</span></a>
            </div>
          </div>
        </dd>
      </div>
    </dl>
  </div>


<!-- resources/views/layouts/app.blade.php or your dashboard view -->
<div>
  @livewire('dashboard', ['userId' => $userId, 'personalDealerSiteId' => $personalDealerSiteId])
</div>



@endsection
