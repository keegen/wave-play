@extends('theme::layouts.app3')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Custom Domain Setup</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Add your custom domain to personalize your landing page URL.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <!-- Display success/error messages -->
            @if(session('success'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mb-4 text-sm font-medium text-red-600">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('custom_domain.store') }}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="domain" class="block text-sm font-medium text-gray-700">
                                Domain
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <!-- Show the current domain if set, or old input on validation error -->
                                <input type="text" name="domain" id="domain" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="www.example.com" value="{{ old('domain', $existingDomain ?? '') }}">
                            </div>
                            @error('domain')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <input type="hidden" name="personal_site_detail_id" value="{{ auth()->user()->personalSiteDetail->id ?? '' }}">

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Custom Domain
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
