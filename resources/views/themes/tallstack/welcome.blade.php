@extends('theme::layouts.app3')

@section('content')
<div class="py-20 mx-auto text-center max-w-7xl">
    <div class="bg-gray-900 px-6 py-24 sm:py-32 lg:px-8 relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Welcome Aboard!</h1>
            <p class="text-xl text-gray-200 mb-6">You've taken the leap, now dive into building your very own Personal Dealer Site.</p>
            <div class="inline-block">
                <a href="#profile-setup" class="text-lg font-medium text-blue-300 hover:underline">Finish setting up your profile</a>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="space-y-4">
            <h2 class="text-3xl font-medium">Start Your Journey</h2>
            <p class="text-lg text-gray-600">You've already completed the hardest part. Let's get your site rolling!</p>
        </div>
        
        <div class="mt-8 bg-blue-100 border-l-4 border-blue-500 shadow rounded-lg p-6">
            <p class="font-bold text-blue-800">Your new journey includes:</p>
            <ul class="list-disc list-inside text-gray-700">
                <li>Customizable tools to match your unique brand</li>
                <li>Priority support whenever you need it</li>
                <li>Connections to empower your dealership</li>
            </ul>
            <p class="mt-4 text-sm">
                Need assistance? Our chat support is ready, or email 
                <a href="mailto:personaldealer@gmail.com" class="underline text-blue-600 hover:text-blue-800">personaldealer@gmail.com</a> 
                for direct help.
            </p>
        </div>

        <p class="mt-6 text-gray-600">We're thrilled to see what you create! - The Team at [Your Company Name]</p>
    </div>

    <div id="profile-setup" class="flex justify-center mt-10">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">

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
                <a href="/dashboard" class="inline-block w-auto px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave active:bg-wave-700">
                    Go to my Dashboard
                </a>
            </div>
        @endif
        </div>
    </div>

	</div>

@endsection
