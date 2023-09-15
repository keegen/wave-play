@extends('theme::layouts.app3')

@section('content')
<h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">{{ $lead->name }} Details</h2>
<div class="text-sm leading-6 text-gray-600"><span class="text-gray-700 font-semibold">Submitted:</span> {{ $lead->created_at->format('n-j-Y') }}</div>
<div class="text-sm leading-6 text-gray-600">Prefers to be contacted by {{ $lead->contact_preference }} between {{ $lead->contact_time }}</div>
<form action="{{ route('lead.update', ['lead' => $lead->id]) }}" method="POST">
    @csrf
<div class="radio-group flex overflow-x-scroll no-scrollbar text-xs mt-12">
    <!-- New -->
    <input type="radio" name="status" id="statusNew" value="New" class="hidden" @if($lead->status == 'New') checked @endif>
    <label for="statusNew" class="bg-gray-100 hover:bg-gray-300 rounded-l-lg px-4 py-2 cursor-pointer">
        New
    </label>
    <!-- Contacted -->
    <input type="radio" name="status" id="statusContacted" value="Contacted" class="hidden" @if($lead->status == 'Contacted') checked @endif>
    <label for="statusContacted" class="bg-gray-100 hover:bg-gray-300 border-l border-r px-4 py-2 cursor-pointer">
        Contacted
    </label>
    <!-- Attempted Contact -->
    <input type="radio" name="status" id="statusAttempted_contact" value="Attempted_contact" class="hidden" @if($lead->status == 'Attempted_contact') checked @endif>
    <label for="statusAttempted_contact" class="bg-gray-100 hover:bg-gray-300 border-l border-r px-4 py-2 cursor-pointer">
        Attempted Contact
    </label>
    <!-- Working -->
    <input type="radio" name="status" id="statusWorking" value="Working" class="hidden" @if($lead->status == 'Working') checked @endif>
    <label for="statusWorking" class="bg-gray-100 hover:bg-gray-300 border-l border-r px-4 py-2 cursor-pointer">
        Working
    </label>
    <!-- Closed-Won -->
    <input type="radio" name="status" id="statusClosed_won" value="Closed_won" class="hidden" @if($lead->status == 'Closed_won') checked @endif>
    <label for="statusClosed_won" class="bg-gray-100 hover:bg-gray-300 border-l border-r px-4 py-2 cursor-pointer">
        Closed Won
    </label>
    <!-- Closed-Lost -->
    <input type="radio" name="status" id="statusClosed_lost" value="Closed_lost" class="hidden" @if($lead->status == 'Closed_lost') checked @endif>
    <label for="statusClosed_lost" class="bg-gray-100 hover:bg-gray-300 rounded-r-lg px-4 py-2 cursor-pointer">
        Closed Lost
    </label>
</div>

  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="name" id="name" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $lead->name }}">
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="number" id="number" autocomplete="number" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $lead->number }}">
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="email" id="email" autocomplete="email" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $lead->email }}">
              </div>
            </div>
          </div>
  
          <div class="col-span-full">
            <label for="notes" class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
            <div class="mt-2">
              <textarea id="notes" name="notes" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $lead->notes ?? '' }}</textarea>
            </div>
          </div>
  
        </div>
    
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update Lead</button>
    </div>
  </form>
</div>
</div>
  
@endsection
