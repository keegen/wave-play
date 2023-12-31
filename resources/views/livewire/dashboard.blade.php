<div>
    <!-- Tabs -->
    <nav class="-mb-px flex space-x-8 mt-6" aria-label="Tabs">
        <a wire:click.prevent="switchTab('leads')" href="#" class="{{ $activeTab === 'leads' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700' }} whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">
            Leads
            <span class="bg-indigo-100 text-indigo-600 ml-3 rounded-full py-0.5 px-2.5 text-xs font-medium md:inline-block">{{ $leadCount }}</span>
        </a>
        <a wire:click.prevent="switchTab('contacts')" href="#" class="{{ $activeTab === 'contacts' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700' }} whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">
            Contacts
            <span class="bg-indigo-100 text-indigo-600 ml-3 rounded-full py-0.5 px-2.5 text-xs font-medium md:inline-block">{{ $contactCount }}</span>
        </a>
        <a wire:click.prevent="switchTab('reviews')" href="#" class="{{ $activeTab === 'reviews' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700' }} whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">
            Reviews
            <span class="bg-indigo-100 text-indigo-600 ml-3 rounded-full py-0.5 px-2.5 text-xs font-medium md:inline-block">{{ $reviewCount }}</span>
        </a>
    </nav>

    <!-- Tab Content -->
    <div class="tab-content mt-4">
        @if ($activeTab === 'leads')
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                <h1 id="leads" class="text-base font-semibold leading-6 text-gray-900 mt-6">Leads</h1>
              </div>
            </div>
            <div class="mt-8 flow-root">
              <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                      <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Name</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date Received</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Stock #</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Phone</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Preferred Contact By and Time</th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-3">
                          <span class="sr-only">View</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white">
                      @foreach($data as $lead)
                      <tr class="even:bg-gray-50">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">{{ $lead->name }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->created_at->format('n-j-Y') }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->status }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->stock_number }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->email }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->number }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lead->contact_preference }} / {{ $lead->contact_time }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-3">
                          <a href="/lead/{{$lead->id}}/details" class="text-indigo-600 hover:text-indigo-900">View<span class="sr-only">, {{ $lead->name }}</span></a>
                        </td>
                      </tr>
                      @endforeach
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        @elseif ($activeTab === 'contacts')
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                <h1 id="contacts" class="text-base font-semibold leading-6 text-gray-900 mt-6">Contacts</h1>
              </div>
            </div>
            <div class="mt-8 flow-root">
              <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                      <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Name</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Phone</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Message</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white">
                      @foreach($data as $contact)
                      <tr class="even:bg-gray-50">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">{{ $contact->first_name }} {{ $contact->last_name }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $contact->created_at->format('n-j-Y g:i:s A') }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $contact->status }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $contact->email }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $contact->phone }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $contact->message }}</td>
                      </tr>
                      @endforeach
                      <!-- More contacts... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        @elseif ($activeTab === 'reviews')
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 id="reviews" class="text-base font-semibold leading-6 text-gray-900 mt-6">Reviews</h1>
                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Rating</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Review Text</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Guest Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Approve Review</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach($data as $review)
                                <tr class="even:bg-gray-50">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">{{ $review->rating }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $review->review_text }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $review->guest_name }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <form method="POST" action="{{ route('dashboard.reviews.toggleStatus', ['id' => $review->id]) }}">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" 
                                            class="{{ $review->is_approved ? 'bg-green-500' : 'bg-gray-200' }} relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2"
                                            role="switch" 
                                            aria-checked="{{ $review->is_approved ? 'true' : 'false' }}">
                                        <span class="sr-only">Approve Status</span>
                                        <span aria-hidden="true" class="translate-x-{{ $review->is_approved ? '5' : '0' }} pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                    </form>
                                  </td>                          
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
