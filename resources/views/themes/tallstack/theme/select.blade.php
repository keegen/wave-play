@extends('theme::layouts.app3')


@section('content')

<div x-data="{ selectedTheme: null }" class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-6 w-full">
        <h1 class="text-2xl font-semibold mb-4">Select a Theme</h1>

        <form action="{{ route('theme.store') }}" method="POST">
            @csrf

            <!-- Loop over themes and display them -->
            <div class="grid grid-cols-2 gap-4">
                @foreach($themes as $theme)
                <div @click="selectedTheme = {{ $theme->id }}" x-data="{ selectedTheme: {{ $selectedTheme }} }" class="cursor-pointer border p-4 rounded-md" :class="selectedTheme === {{ $theme->id }} ? 'border-blue-500' : 'border-gray-200'">
                    <img src="{{ $theme->image_path }}" alt="{{ $theme->name }}" class="mb-2">
                    <h2 class="text-md font-medium mb-2">{{ $theme->name }}</h2>
                    <p class="text-sm">{{ $theme->description }}</p>
                    <input 
    type="radio" 
    name="selected_theme" 
    value="{{ $theme->id }}" 
    x-ref="selectedTheme" 
    class="hidden" 
    :checked="selectedTheme == {{ $theme->id }}"
>

                </div>
                @endforeach
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-indigo-500 text-white p-2 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Ensure that when the form submits, the correct theme is selected
    document.querySelector('form').addEventListener('submit', function(e) {
        let selectedThemeInput = this.querySelector('input[type="radio"][x-ref="selectedTheme"]:checked');
        if (!selectedThemeInput) {
            e.preventDefault();
            alert('Please select a theme.');
        }
    });
</script>

@endsection
