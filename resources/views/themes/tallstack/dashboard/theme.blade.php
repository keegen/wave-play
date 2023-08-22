@extends('theme::layouts.app3')


@section('content')


<div class="bg-white px-6 py-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-base font-semibold leading-7 text-blue-600">{{ auth()->user()->name }}, welcome to your</p>
      <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Theme</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">Choose a theme below.</p>
    </div>
  </div>

  <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
  <li class="relative">
    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100">
      <img src="/themes/tallstack/images/themes/black.jpg" alt="">
    </div>
    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">Black</p>
    <a href="/themes/001" target="_blank" class="text-sm font-semibold leading-6 text-blue-600 hover:text-indigo-blue">See Preview <span aria-hidden="true">→</span></a>
  </li>
  <li class="relative">
    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100">
      <img src="/themes/tallstack/images/themes/blue.jpg" alt="">
    </div>
    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">Blue</p>
    <a href="/themes/002" target="_blank" class="text-sm font-semibold leading-6 text-blue-600 hover:text-indigo-blue">See Preview <span aria-hidden="true">→</span></a>
  </li>
  <li class="relative">
    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100">
      <img src="/themes/tallstack/images/themes/yellow.jpg" alt="">
    </div>
    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">Blue</p>
    <a href="/themes/003" target="_blank" class="text-sm font-semibold leading-6 text-blue-600 hover:text-indigo-blue">See Preview <span aria-hidden="true">→</span></a>
  </li>
  <li class="relative">
    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100">
      <img src="/themes/tallstack/images/themes/red.jpg" alt="">
    </div>
    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">Red</p>
    <a href="/themes/004" target="_blank" class="text-sm font-semibold leading-6 text-blue-600 hover:text-indigo-blue">See Preview <span aria-hidden="true">→</span></a>
  </li>

  <li class="relative">
    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100">
      <img src="/themes/tallstack/images/themes/purple.jpg" alt="">
    </div>
    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">Purple</p>
    <a href="/themes/005" target="_blank" class="text-sm font-semibold leading-6 text-blue-600 hover:text-indigo-blue">See Preview <span aria-hidden="true">→</span></a>
  </li>
  <li class="relative">
    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100">
      <img src="/themes/tallstack/images/themes/gold.jpg" alt="">
    </div>
    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">Gold</p>
    <a href="/themes/006" target="_blank" class="text-sm font-semibold leading-6 text-blue-600 hover:text-indigo-blue">See Preview <span aria-hidden="true">→</span></a>
  </li>
  <li class="relative">
    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100">
      <img src="/themes/tallstack/images/themes/green.jpg" alt="">
    </div>
    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">Green</p>
    <a href="/themes/007" target="_blank" class="text-sm font-semibold leading-6 text-blue-600 hover:text-indigo-blue">See Preview <span aria-hidden="true">→</span></a>
  </li>

  <!-- More files... -->
</ul>

  

@endsection
