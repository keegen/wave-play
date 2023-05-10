<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  @if(isset($seo->title))
        <title>{{ $seo->title }}</title>
    @else
        <title>{{ setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built on Laravel & Voyager') }}</title>
    @endif

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <link rel="icon" href="{{ setting('site.favicon', '/wave/favicon.png') }}" type="image/x-icon">
     {{-- Social Share Open Graph Meta Tags --}}
     @if(isset($seo->title) && isset($seo->description) && isset($seo->image))
     <meta property="og:title" content="{{ $seo->title }}">
     <meta property="og:url" content="{{ Request::url() }}">
     <meta property="og:image" content="{{ $seo->image }}">
     <meta property="og:type" content="@if(isset($seo->type)){{ $seo->type }}@else{{ 'article' }}@endif">
     <meta property="og:description" content="{{ $seo->description }}">
     <meta property="og:site_name" content="{{ setting('site.title') }}">

     <meta itemprop="name" content="{{ $seo->title }}">
     <meta itemprop="description" content="{{ $seo->description }}">
     <meta itemprop="image" content="{{ $seo->image }}">

     @if(isset($seo->image_w) && isset($seo->image_h))
         <meta property="og:image:width" content="{{ $seo->image_w }}">
         <meta property="og:image:height" content="{{ $seo->image_h }}">
     @endif
 @endif

 <meta name="robots" content="index,follow">
 <meta name="googlebot" content="index,follow">

 @if(isset($seo->description))
     <meta name="description" content="{{ $seo->description }}">
 @endif

 <!-- Styles -->
 <link href="{{ asset('themes/' . $theme->folder . '/css/app.css') }}" rel="stylesheet">
 @livewireStyles
  </head>

  <body data-new-gr-c-s-check-loaded="14.1107.0" data-gr-ext-installed="">
  <div class="min-h-[712px] bg-gray-100">
  @yeild('content')
</div>
<!-- End Full Loader -->


@include('theme::partials.toast')
@if(session('message'))
    <script>setTimeout(function(){ popToast("{{ session('message_type') }}", "{{ session('message') }}"); }, 10);</script>
@endif
@waveCheckout
</body>
</html>