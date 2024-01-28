@extends('theme::layouts.app3')

@section('content')

<div class="py-20 mx-auto text-center max-w-7xl">
    <div class="w-full space-y-2">
        <h1 class="mb-5 text-5xl font-medium">Welcome Aboard!</h1>
        <p class="py-0 my-0">Thanks for subscribing and welcome aboard.
            @if(Request::get('complete')){{ 'Please finish completing your profile information below.' }} @endif</p>
        <p class="py-0 my-0">This file can be modified inside of your <code class="px-2 py-1 font-mono text-base font-medium text-gray-600 bg-indigo-100 rounded-md">resources/views/{{ theme_folder('/welcome.blade.php') }}</code> file ✌️</p>
    </div>

    <!-- Welcome Section -->
    <div class="mt-10">
        <img src="/path-to-your-welcome-image.png" alt="Welcome Image" class="mx-auto mb-8 w-64 h-64">
        <p class="text-lg text-gray-600 mb-6">
            Congratulations on taking the next step in your professional journey! You're now part of a community dedicated to excellence and growth.
        </p>
        <div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md mb-6" role="alert">
            <div class="flex">
                <div class="py-1">
                    <!-- Include an icon here if you want -->
                </div>
                <div>
                    <p class="font-bold">Here's what you can look forward to:</p>
                    <p class="text-sm">Exclusive tools, priority support, and empowering connections.</p>
                    <p class="text-sm mt-2">
                        Need a hand? Chat support is ready, or reach out at 
                        <a href="mailto:personaldealer@gmail.com" class="underline text-blue-600 hover:text-blue-800">personaldealer@gmail.com</a> 
                        for a direct response.
                    </p>
                </div>
            </div>
        </div>
        <p class="text-gray-600">We're excited to see the waves you'll make! - The Team at [Your Company Name]</p>
    </div>

        @if(Request::get('complete'))
            <div class="flex flex-col justify-center py-10 sm:py-5 sm:px-6 lg:px-8">
                <div class="mt-8 text-left sm:mx-auto sm:w-full sm:max-w-md">
                    <div class="px-4 py-8 bg-white border shadow border-gray-50 sm:rounded-lg sm:px-10">
                        <form role="form" method="POST" action="{{ route('wave.register-complete') }}">
                            @csrf
                            <!-- If we want the user to purchase before they can create an account -->

                            <div class="pb-3 sm:border-b sm:border-gray-200">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    Profile
                                </h3>
                                <p class="max-w-2xl mt-1 text-sm leading-5 text-gray-500">
                                    Finish filling out your profile information.
                                </p>
                            </div>

                            @csrf

                            <div class="mt-6">
                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                                    Name
                                </label>
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="name" type="text" name="name" required class="w-full form-input" value="{{ old('name') }}" autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <div class="mt-1 text-red-500">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            @if(setting('auth.username_in_registration') && setting('auth.username_in_registration') == 'yes')
                                <div class="mt-6">
                                    <label for="username" class="block text-sm font-medium leading-5 text-gray-700">
                                        Username
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="username" type="text" name="username" value="@if(old('username')){{ old('username') }}@else{{ auth()->user()->username }}@endif" required class="w-full form-input">
                                    </div>
                                    @if ($errors->has('username'))
                                        <div class="mt-1 text-red-500">
                                            {{ $errors->first('username') }}
                                        </div>
                                    @endif
                                </div>
                            @endif

                            <div class="mt-6">
                                <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                                    Password
                                </label>
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="password" type="password" name="password" required class="w-full form-input">
                                </div>
                                @if ($errors->has('password'))
                                    <div class="mt-1 text-red-500">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <div class="flex flex-col items-center justify-center text-sm leading-5">
                                <span class="block w-full mt-5 rounded-md shadow-sm">
                                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave active:bg-wave-700">
                                        Submit
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        @else
            <div class="items-center justify-center w-full mt-12 text-center">
                <a href="{{ route('wave.dashboard') }}" class="inline-block w-auto px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave active:bg-wave-700">
                    Go to my Dashboard
                </a>
            </div>
        @endif

	</div>

@endsection
