@include ('components.header')
<main class="pb-24">
  <div class="px-4 py-16 text-center sm:px-6 lg:px-8">
    <h1 class="text-4xl font-bold tracking-tight text-gray-900">Produk Kami</h1>
    <p class="mx-auto mt-4 max-w-xl text-base text-gray-500">Temukan berbagai pilihan barang sewa berkualitas untuk memenuhi kebutuhan Anda, dengan proses mudah dan cepat.</p>
  </div>

  <!-- Product grid -->
  <section aria-labelledby="products-heading" class="mx-auto max-w-7xl overflow-hidden sm:px-6 lg:px-8">
    <h2 id="products-heading" class="sr-only">Products</h2>

    <div class="-mx-px grid grid-cols-2 border-gray-200 sm:mx-0 md:grid-cols-3 lg:grid-cols-4">


      <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 class="sr-only">Products</h2>

          <div class="grid grid-cols-1 gap-x-6 gap-y-10 xl:gap-x-8">
            @forelse ($products as $product)
            <a href="produk/detail/{{ $product->id }}" class="group">
              <div class="h-[300px] aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="{{ $product->gambar_produk }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <h3 class="mt-4 text-sm text-gray-700">{{ $product->nama_produk }}</h3>
              <p class="mt-1 text-lg font-medium text-gray-900">Rp{{ $product->harga_produk }}</p>
            </a>

            <!-- More products... -->
            @empty
            <div class="alert alert-danger">
              Data Products belum Tersedia.
            </div>
            @endforelse
          </div>
        </div>
      </div>

      <!-- More products... -->
    </div>
  </section>


</main>
@include ('components.footer')