@extends('theme::layouts.app2')


@section('content')

<main class="-mt-24 pb-8">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h1 class="sr-only">Page title</h1>

        <!-- Main 3 column grid -->
        <div class="grid grid-cols-1 items-start gap-4 lg:grid-cols-3 lg:gap-8">
            <!-- Left column -->
            <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                <section aria-labelledby="section-1-title">
                    <h2 class="sr-only" id="section-1-title">Section title</h2>
                    <div class="overflow-hidden rounded-lg bg-white shadow">
                        <div class="p-6">
                            <div>
                                <h2 class="text-base font-semibold leading-6 text-gray-900">Welcome to your Personal
                                    Dealer Site</h2>
                                <p class="mt-1 text-sm text-gray-500">Let's get your site set up.</p>
                                <ul role="list"
                                    class="mt-6 grid grid-cols-1 gap-6 border-b border-t border-gray-200 py-6 sm:grid-cols-2">
                                    <li class="flow-root">
                                        <div
                                            class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                            <div
                                                class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-pink-500">
                                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">
                                                    <a href="#" class="focus:outline-none">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        <span>Create a List</span>
                                                        <span aria-hidden="true"> &rarr;</span>
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Another to-do system you’ll try
                                                    but eventually give up on.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flow-root">
                                        <div
                                            class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                            <div
                                                class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-yellow-500">
                                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">
                                                    <a href="#" class="focus:outline-none">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        <span>Create a Calendar</span>
                                                        <span aria-hidden="true"> &rarr;</span>
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Stay on top of your deadlines, or
                                                    don’t — it’s up to you.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flow-root">
                                        <div
                                            class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                            <div
                                                class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-green-500">
                                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">
                                                    <a href="#" class="focus:outline-none">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        <span>Create a Gallery</span>
                                                        <span aria-hidden="true"> &rarr;</span>
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Great for mood boards and
                                                    inspiration.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flow-root">
                                        <div
                                            class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                            <div
                                                class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-blue-500">
                                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">
                                                    <a href="#" class="focus:outline-none">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        <span>Create a Board</span>
                                                        <span aria-hidden="true"> &rarr;</span>
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Track tasks in different stages of
                                                    your project.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flow-root">
                                        <div
                                            class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                            <div
                                                class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-indigo-500">
                                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">
                                                    <a href="#" class="focus:outline-none">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        <span>Create a Spreadsheet</span>
                                                        <span aria-hidden="true"> &rarr;</span>
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Lots of numbers and things — good
                                                    for nerds.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flow-root">
                                        <div
                                            class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                            <div
                                                class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-purple-500">
                                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">
                                                    <a href="#" class="focus:outline-none">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        <span>Create a Timeline</span>
                                                        <span aria-hidden="true"> &rarr;</span>
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Get a birds-eye-view of your
                                                    procrastination.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4 flex">
                                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                        Or start from an empty project
                                        <span aria-hidden="true"> &rarr;</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- Right column -->
            <div class="grid grid-cols-1 gap-4">
                <section aria-labelledby="section-2-title">
                    <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
						<div class="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
						  <div class="ml-4 mt-4">
							<div class="flex items-center">
							  <div class="flex-shrink-0">
								<img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							  </div>
							  <div class="ml-4">
								<h3 class="text-base font-semibold leading-6 text-gray-900">Tom Cook</h3>
								<p class="text-sm text-gray-500">
								  <a href="#">@keegen</a>
								</p>
							  </div>
							</div>
						  </div>
						  <div class="ml-4 mt-4 flex flex-shrink-0">
							<button type="button" class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
							  <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
							  </svg>
							  <span>Phone</span>
							</button>
							<button type="button" class="relative ml-3 inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
							  <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
								<path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
							  </svg>
							  <span>Email</span>
							</button>
						  </div>
						</div>
					  </div>
					  
                </section>
            </div>
        </div>
    </div>
</main>

@endsection
