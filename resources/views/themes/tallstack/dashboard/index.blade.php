@extends('theme::layouts.app3')


@section('content')


<div class="bg-white px-6 py-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-base font-semibold leading-7 text-blue-600">{{ auth()->user()->name }}, welcome to your</p>
      <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Personal Dealer Site</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">To get started do this.</p>
    </div>
  </div>
  

@endsection
