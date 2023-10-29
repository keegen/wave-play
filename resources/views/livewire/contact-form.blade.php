<form wire:submit.prevent="submitForm" class="mt-16">
  <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
          <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
          <div class="mt-2.5">
              <input type="text" wire:model="first_name" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-{{ $dealerTheme->pd_theme_primary_color }} sm:text-sm sm:leading-6">
              @error('first_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
          </div>
      </div>
      <div>
          <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
          <div class="mt-2.5">
              <input type="text" wire:model="last_name" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-{{ $dealerTheme->pd_theme_primary_color }} sm:text-sm sm:leading-6">
              @error('last_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
          </div>
      </div>
      <div class="sm:col-span-2">
          <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
          <div class="mt-2.5">
              <input id="email" wire:model="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-{{ $dealerTheme->pd_theme_primary_color }} sm:text-sm sm:leading-6">
              @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
          </div>
      </div>
      <div class="sm:col-span-2">
          <div class="flex justify-between text-sm leading-6">
              <label for="phone" class="block font-semibold text-gray-900">Phone</label>
              <p id="phone-description" class="text-gray-400">Optional</p>
          </div>
          <div class="mt-2.5">
              <input type="tel" wire:model="phone" name="phone" id="phone" autocomplete="tel" aria-describedby="phone-description" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-{{ $dealerTheme->pd_theme_primary_color }} sm:text-sm sm:leading-6">
              @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
          </div>
      </div>
      <div class="sm:col-span-2">
          <div class="flex justify-between text-sm leading-6">
              <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">How can I help you?</label>
              <p id="message-description" class="text-gray-400">Max 500 characters</p>
          </div>
          <div class="mt-2.5">
              <textarea id="message" wire:model="message" name="message" rows="4" aria-describedby="message-description" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-{{ $dealerTheme->pd_theme_primary_color }} sm:text-sm sm:leading-6"></textarea>
              @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
          </div>
      </div>
  </div>
  <div class="mt-10 flex justify-end border-t border-gray-900/10 pt-8">
      <button type="submit" class="rounded-md bg-{{ $dealerTheme->pd_theme_primary_color }} px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-{{ $dealerTheme->pd_theme_secondary_color }} focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-{{ $dealerTheme->pd_theme_primary_color }}" style="outline-color: {{ $dealerTheme->pd_theme_primary_color }}">
          Send message
      </button>
  </div>
</form>
@if (session()->has('message'))
  <div class="alert alert-success" aria-live="polite">
      {{ session('message') }}
  </div>
@endif
