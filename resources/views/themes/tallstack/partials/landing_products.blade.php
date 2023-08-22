  <!-- Products -->
  <main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
    <div class="border-b border-gray-200 pb-10 pt-24">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900" id="inventory">Inventory</h1>
      <p class="mt-4 text-base text-gray-500">Checkout out the current inventory </p>
    </div>

    <div class="pb-24 pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
      <aside>
        <h2 class="sr-only">Filters</h2>

        <button type="button" x-description="Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state." class="inline-flex items-center lg:hidden" @click="open = true">
          <span class="text-sm font-medium text-gray-700">Filters</span>
          <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
          </svg>
        </button>

        <div class="hidden lg:block">
          <form class="space-y-10 divide-y divide-gray-200">
            <div>
                <fieldset>
                  <legend class="block text-sm font-medium text-gray-900">Body Style</legend>
                  <div class="space-y-3 pt-6">
                    <div class="flex items-center">
                        <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="color-0" class="ml-3 text-sm text-gray-600">Cargo Van</label>
                      </div>
                    <div class="flex items-center">
                        <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="color-1" class="ml-3 text-sm text-gray-600">Convertible</label>
                      </div>
                    <div class="flex items-center">
                        <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="color-2" class="ml-3 text-sm text-gray-600">Coupe</label>
                      </div>
                    <div class="flex items-center">
                        <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="color-3" class="ml-3 text-sm text-gray-600">Sedan</label>
                      </div>
                    <div class="flex items-center">
                        <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="color-4" class="ml-3 text-sm text-gray-600">SUV</label>
                      </div>
                  </div>
                </fieldset>
              </div>
            <div class="pt-10">
                <fieldset>
                  <legend class="block text-sm font-medium text-gray-900">Exterior Color</legend>
                  <div class="space-y-3 pt-6">
                    <div class="flex items-center">
                        <input id="category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-0" class="ml-3 text-sm text-gray-600">Black</label>
                      </div>
                    <div class="flex items-center">
                        <input id="category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-1" class="ml-3 text-sm text-gray-600">Blue</label>
                      </div>
                    <div class="flex items-center">
                        <input id="category-2" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-2" class="ml-3 text-sm text-gray-600">Brown</label>
                      </div>
                    <div class="flex items-center">
                        <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-3" class="ml-3 text-sm text-gray-600">Gray</label>
                      </div>
                    <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600">Red</label>
                      </div>
                      <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600">Silver</label>
                      </div>
                      <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600">White</label>
                      </div>
                      <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600">Other</label>
                      </div>

                  </div>
                </fieldset>
              </div>
            
          </form>
        </div>
      </aside>

      <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
        <h2 id="product-heading" class="sr-only">Products</h2>

        <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
          <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://images.dealer.com/ddc/vehicles/2023/Mercedes-Benz/AMG%20G%2063/SUV/trim_Base_1d016a/color/MANUFAKTUR%20Signature%20China%20Blue-934-82%2C134%2C173-640-en_US.jpg?impolicy=downsize_bkpt&imdensity=1&w=520" alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Blue 2023 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8
                  .</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2023</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
          <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-3 aspect-w-4 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-50">
                <img src="https://pictures.dealer.com/m/mercedesbenzofcovingtonmb/0962/fc90cb09be5e7f1239316e7af9d12bdbx.jpg?impolicy=resize&w=768" alt="Front of plain black t-shirt." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    AMG G 63 4x4 Squared G 63 AMGÂ® SUV
                  </a>
                </h3>
                <p class="text-sm text-gray-500">Brown 2022 Mercedes-Benz G-Class G 63 AMGÂ® 4MATICÂ® 4MATICÂ® 9-Speed Automatic V8</p>
                <div class="flex flex-1 flex-col justify-end">
                  <p class="text-sm italic text-gray-500">2022</p>
                  <p class="text-base font-medium text-gray-900">Contact for pricing</p>
                </div>
              </div>
            </div>
          
        </div>
        <nav class="flex items-center justify-between border-t border-gray-200 px-4 pt-4 sm:px-0">
          <div class="-mt-px flex w-0 flex-1">
            <a href="#" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
              <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
              </svg>
              Previous
            </a>
          </div>
          <div class="hidden md:-mt-px md:flex">
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">1</a>
            <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
            <a href="#" class="inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-indigo-600" aria-current="page">2</a>
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">3</a>
            <span class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500">...</span>
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">8</a>
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">9</a>
            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">10</a>
          </div>
          <div class="-mt-px flex w-0 flex-1 justify-end">
            <a href="#" class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
              Next
              <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </nav>
        
      </section>
      
    </div>
  </main>