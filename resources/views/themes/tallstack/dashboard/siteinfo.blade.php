@extends('theme::layouts.app3')


@section('content')

<div class="bg-white px-6 py-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
        <p class="text-base font-semibold leading-7 text-blue-600">{{ auth()->user()->name }}, welcome to your</p>
        <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Site Info</h2>
        <p class="mt-6 text-lg leading-8 text-gray-600">To get started do this.</p>
    </div>

    <!--
  This example requires some changes to your config:
  
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

<form action="{{ Auth::user()->personalSiteDetail ? route('personal_site_detail.update', Auth::user()->personalSiteDetail->id) : route('personal_site_detail.store') }}" method="post" enctype="multipart/form-data">

    @csrf
    @if(isset($detail) && $detail->id)
        @method('PUT')
    @endif
        <div class="space-y-12 sm:space-y-16 mt-16">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Tell your story</h2>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-600">This information will be displayed publicly on
                    your Personal Dealer Site.</p>

                <div
                    class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Your
                            Name</label>

                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                
                                <input type="text" name="name" id="name" autocomplete="name"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="@if (Auth::user()->personalSiteDetail){{ Auth::user()->personalSiteDetail->name }}@endif">
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">This will be used to introduce yourself to
                                visitors.</p>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="about"
                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">About</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <textarea name="about" rows="3" class="block w-full max-w-2xl rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">@if (Auth::user()->personalSiteDetail){{ Auth::user()->personalSiteDetail->about }}@endif</textarea>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-center sm:gap-4 sm:py-6">
                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Your Photo</label>

                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <div class="flex items-center gap-x-3"> 
                            @if (Auth::user()->personalSiteDetail && Auth::user()->personalSiteDetail->photo)
                            <img class="w-8 h-8 rounded-full" src="../{{ Auth::user()->personalSiteDetail->photo }}" alt="{{ Auth::user()->personalSiteDetail->name}} photo">
                            @else
                            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd" />
                            </svg>
                            @endif

                            <input class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" type="file" id="photo" name="photo">
                            </div>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="cover-photo"
                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Cover photo</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <div
                                class="flex max-w-2xl justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <input class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" type="file" id="cover_photo" name="cover_photo">
                                        </label>
                                    
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    @if (Auth::user()->personalSiteDetail && Auth::user()->personalSiteDetail->cover_photo)
                                    <p class="text-xs leading-5 text-indigo-600"><a target="_blank" href="../{{ Auth::user()->personalSiteDetail->cover_photo }}">See Current Cover Photo</a></p>
                                            @else 

                                    @endif
                                </div>

                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">We suggest a picture of the dealership you
                                work at or you in the community.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Social Links</h2>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-600">Link to your social accounts so your visitors
                    can follow you.</p>

                <div
                    class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="facebook_link"
                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Facebook</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="facebook_link" id="facebook_link" autocomplete="facebook"
                            @if (Auth::user()->personalSiteDetail && Auth::user()->personalSiteDetail->facebook_link)
                                value="{{ Auth::user()->personalSiteDetail->facebook_link }}"
                            @else 
                            @endif 
                            placeholder="facebook.com/name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="last-name"
                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Instagram</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="instagram_link" name="instagram_link" id="instagram_link"
                            @if (Auth::user()->personalSiteDetail && Auth::user()->personalSiteDetail->facebook_link)
                            value="{{ Auth::user()->personalSiteDetail->instagram_link }}"    
                            @else 
                            @endif
                            placeholder="instagram.com/name"
                                autocomplete="instagram"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-2.5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>


                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="city"
                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Twitter</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="twitter_link" name="twitter_link" id="twitter_link" autocomplete="twitter"
                            @if (Auth::user()->personalSiteDetail && Auth::user()->personalSiteDetail->twitter_link)
                            value=" {{ Auth::user()->personalSiteDetail->twitter_link }}"    
                            @else
                            @endif                            
                            placeholder="twitter.com/name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="region"
                            class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Youtube</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="youtube_link" name="youtube_link" id="youtube_link" autocomplete="youtube"
                            @if (Auth::user()->personalSiteDetail && Auth::user()->personalSiteDetail->youtube_link)
                            value=" {{ Auth::user()->personalSiteDetail->youtube_link }}"
                            @else
                            @endif
                            placeholder="youtube.com/name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Testimonial</h2>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-600">Share a story of a happy customer.</p>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                    <label for="Testimonial Photo"
                        class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Testimonial Photo</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0">
                        <div
                            class="flex max-w-2xl justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <input class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" type="file" id="customer_testimonial_photo" name="customer_testimonial_photo" class="text-center">
                                    </label>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                @if (Auth::user()->personalSiteDetail && Auth::user()->personalSiteDetail->customer_testimonial_photo)
                                <p class="text-xs leading-5 text-indigo-600"><a target="_blank" href="../{{ Auth::user()->personalSiteDetail->customer_testimonial_photo }}">See Current Testimonial  Photo</a></p>
                                        @else 

                                @endif

                            </div>

                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Don't have a customer photo? Use unsplash to
                            find a "happy customer" <a href="https://unsplash.com/s/photos/happy-customer"
                                target="_blank" class="text-blue-500">photo</a>.</p>
                    </div>
                    <label for="testimonial_text"
                        class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Testimonial Quote</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0">
                        <textarea id="testimonial_text" name="customer_testimonial" rows="3"
                            class="block w-full max-w-2xl rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">@if (Auth::user()->personalSiteDetail){{ Auth::user()->personalSiteDetail->customer_testimonial }}@endif</textarea>
                        </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-2 sm:py-4">
                    <label for="testimonial_by"
                        class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Testimonial By</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0">
                        <input type="text" name="customer_testimonial_name" id="testimonial_by" autocomplete="testimonial_by"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                            value="{{ Auth::user()->personalSiteDetail ? Auth::user()->personalSiteDetail->customer_testimonial_name : 'Enter a customer testimonial name' }}">

                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit"
                    class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ isset($detail) && $detail->id ? 'Update' : 'Create' }}</button>
            </div>
    </form>
</div>


@endsection
