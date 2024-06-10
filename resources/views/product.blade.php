@include ('components.header')
<main class="pb-24">
  <div class="px-4 py-16 text-center sm:px-6 lg:px-8">
    <h1 class="text-4xl font-bold tracking-tight text-gray-900">Produk Kami</h1>
    <p class="mx-auto mt-4 max-w-xl text-base text-gray-500">Temukan berbagai pilihan barang sewa berkualitas untuk memenuhi kebutuhan Anda, dengan proses mudah dan cepat.</p>
  </div>

  <!-- Filters -->
  <section x-data="{ filterOpen: false }" aria-labelledby=" filter-heading" class="grid items-center border-b border-t border-gray-200">
    <h2 id="filter-heading" class="sr-only">Filters</h2>
    <div class="relative col-start-1 row-start-1 py-4">
      <div class="mx-auto flex max-w-7xl space-x-6 divide-x divide-gray-200 px-4 text-sm sm:px-6 lg:px-8">
        <div>
          <button type="button" class="group flex items-center font-medium text-gray-700" aria-controls="disclosure-1" aria-expanded="false" @click="filterOpen = !filterOpen">
            <svg class="mr-2 h-5 w-5 flex-none text-gray-400 group-hover:text-gray-500" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
            </svg>
            2 Filters
          </button>
        </div>
        <div class="pl-6">
          <button type="button" class="text-gray-500">Clear all</button>
        </div>
      </div>
    </div>
    <div x-show="filterOpen" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class=" border-t border-gray-200 py-10" id="disclosure-1">
      <div class="mx-auto grid max-w-7xl grid-cols-2 gap-x-4 px-4 text-sm sm:px-6 md:gap-x-6 lg:px-8">
        <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
          <fieldset>
            <legend class="block font-medium">Price</legend>
            <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="price-0" name="price[]" value="0" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="price-0" class="ml-3 min-w-0 flex-1 text-gray-600">$0 - $25</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="price-1" name="price[]" value="25" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="price-1" class="ml-3 min-w-0 flex-1 text-gray-600">$25 - $50</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="price-2" name="price[]" value="50" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="price-2" class="ml-3 min-w-0 flex-1 text-gray-600">$50 - $75</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="price-3" name="price[]" value="75" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="price-3" class="ml-3 min-w-0 flex-1 text-gray-600">$75+</label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">Color</legend>
            <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">White</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="color-1" class="ml-3 min-w-0 flex-1 text-gray-600">Beige</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" checked>
                <label for="color-2" class="ml-3 min-w-0 flex-1 text-gray-600">Blue</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="color-3" class="ml-3 min-w-0 flex-1 text-gray-600">Brown</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="color-4" class="ml-3 min-w-0 flex-1 text-gray-600">Green</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="color-5" class="ml-3 min-w-0 flex-1 text-gray-600">Purple</label>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
          <fieldset>
            <legend class="block font-medium">Size</legend>
            <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="size-0" name="size[]" value="xs" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="size-0" class="ml-3 min-w-0 flex-1 text-gray-600">XS</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="size-1" name="size[]" value="s" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" checked>
                <label for="size-1" class="ml-3 min-w-0 flex-1 text-gray-600">S</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="size-2" name="size[]" value="m" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="size-2" class="ml-3 min-w-0 flex-1 text-gray-600">M</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="size-3" name="size[]" value="l" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="size-3" class="ml-3 min-w-0 flex-1 text-gray-600">L</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="size-4" name="size[]" value="xl" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="size-4" class="ml-3 min-w-0 flex-1 text-gray-600">XL</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="size-5" name="size[]" value="2xl" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="size-5" class="ml-3 min-w-0 flex-1 text-gray-600">2XL</label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">Category</legend>
            <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-0" name="category[]" value="all-new-arrivals" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="category-0" class="ml-3 min-w-0 flex-1 text-gray-600">All New Arrivals</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="category-1" class="ml-3 min-w-0 flex-1 text-gray-600">Tees</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-2" name="category[]" value="objects" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="category-2" class="ml-3 min-w-0 flex-1 text-gray-600">Objects</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="category-3" class="ml-3 min-w-0 flex-1 text-gray-600">Sweatshirts</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-4" name="category[]" value="pants-and-shorts" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="category-4" class="ml-3 min-w-0 flex-1 text-gray-600">Pants &amp; Shorts</label>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
    <div x-data="{sortOpen : false}" class="col-start-1 row-start-1 py-4">
      <div class="mx-auto flex max-w-7xl justify-end px-4 sm:px-6 lg:px-8">
        <div class="relative inline-block">
          <div class="flex">
            <button @click="sortOpen = !sortOpen" type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
              Sort
              <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div x-show="sortOpen" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
              <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
              <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
              <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
              <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
              <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Product grid -->
  <section aria-labelledby="products-heading" class="mx-auto max-w-7xl overflow-hidden sm:px-6 lg:px-8">
    <h2 id="products-heading" class="sr-only">Products</h2>

    <div class="-mx-px grid grid-cols-2 border-l border-gray-200 sm:mx-0 md:grid-cols-3 lg:grid-cols-4">


      @forelse ($products as $product)
      <div class="group relative border-b border-r border-gray-200 p-4 sm:p-6">
        <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-200 group-hover:opacity-75">
          <img src="{{ $product->gambar_produk }}" alt="{{ $product->nama_produk }}" alt="TODO" class="h-full w-full object-cover object-center">
        </div>
        <div class="pb-4 pt-10 text-center">
          <h3 class="text-sm font-medium text-gray-900">
            <a href="/produk/detail/{{ $product->id }}">
              <span aria-hidden="true" class="absolute inset-0"></span>
              {{ $product->nama_produk }}
            </a>
          </h3>
          <div class="mt-3 flex flex-col items-center">
            <p class="sr-only">4 out of 5 stars</p>
            <div class="flex items-center">
              <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
              <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
              <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
              <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
              <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
            </div>
            <p class="mt-1 text-sm text-gray-500">21 reviews</p>
          </div>
          <p class="mt-4 text-base font-medium text-gray-900">{{ "Rp" . number_format($product->harga_produk,2,',','.') }}</p>
        </div>
      </div>
      @empty
      <div class="alert alert-danger">
        Data Products belum Tersedia.
      </div>
      @endforelse

      <!-- More products... -->
    </div>
  </section>


</main>
@include ('components.footer')