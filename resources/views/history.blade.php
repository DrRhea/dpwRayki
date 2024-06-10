@include ('components.header')

<div class="bg-white">
  <div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-24">
    <div class="max-w-xl">
      <h1 id="your-orders-heading" class="text-3xl font-bold tracking-tight text-gray-900">Pesanan Anda</h1>
      <p class="mt-2 text-sm text-gray-500">Periksa status pesanan terbaru, kelola pengembalian, dan temukan produk serupa.</p>
    </div>

    <div class="mt-12 space-y-16 sm:mt-16">

      @php
      $user = Auth::user();
      $jumlahTransaksi = \App\Models\Transaksi::where('user_id', $user->id)->count() ;

      $counter = 0;
      @endphp

      @forelse ($booking as $book)
      <section aria-labelledby="4376-heading">
        <div class="space-y-1 md:flex md:items-baseline md:space-x-4 md:space-y-0">


          <h2 id="4376-heading" class="text-lg font-medium text-gray-900 md:flex-shrink-0 mr-4">Pesanan #{{ $jumlahTransaksi - $counter}}</h2>

          @php
          $counter++;
          @endphp
          <div class="space-y-5 sm:flex sm:items-baseline sm:justify-between sm:space-y-0 md:min-w-0 md:flex-1">
            <p class="text-sm font-medium text-gray-500">Dikirim pada {{ \Carbon\Carbon::parse($book->tanggal_mulai)->translatedFormat('d F Y') }}</p>
          </div>
        </div>

        <div class="-mb-6 mt-6 flow-root divide-y divide-gray-200 border-t border-gray-200">
          <div class="py-6 sm:flex">
            <div class="flex space-x-4 sm:min-w-0 sm:flex-1 sm:space-x-6 lg:space-x-8">
              <img src="{{ $book->produk->gambar_produk }}" alt="Puzzle tembaga berbentuk jack dengan tiang bulat yang tumpang tindih." class="h-20 w-20 flex-none rounded-md object-cover object-center sm:h-48 sm:w-48">
              <div class="min-w-0 flex-1 pt-1.5 sm:pt-0">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">{{ $book->produk->nama_produk }}</a>
                </h3>
                <p class="truncate text-sm text-gray-500">
                  <span>{{ $book->produk->deskripsi_produk }}</span>
                </p>
                <p class="mt-1 font-medium text-gray-900">{{ "Rp" . number_format($book->produk->harga_produk,2,',','.') }}</p>
                <p class="mt-12 font-medium text-sm text-gray-500">Harus dikembalikan pada</p>
                <p class="mt-1 font-medium text-gray-900">{{ \Carbon\Carbon::parse($book->tanggal_selesai)->translatedFormat('d F Y') }}</p>
              </div>
            </div>
            <div class="mt-6 space-y-4 sm:ml-6 sm:mt-0 sm:w-40 sm:flex-none">
              <a href="/produk/rental/{{$book->produk->id}}" type="button" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-2.5 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-full sm:flex-grow-0">Sewa Lagi</a>
              @if ($book->status == 'booked')
              <form action="{{ route('pengembalian', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-2.5 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-full sm:flex-grow-0">Kembalikan</button>
              </form>
              @elseif ('completed')
              <span type="button" class="flex w-full items-center justify-center px-2.5 py-2 text-sm font-medium text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-full sm:flex-grow-0" disabled>Sudah Dikembalikan</span>
              @endif
            </div>
          </div>

          <!-- Produk lainnya... -->
        </div>
      </section>
      @empty
      <div class="alert alert-danger">
        Data Products belum Tersedia.
      </div>
      @endforelse

      <!-- Pesanan lainnya... -->
    </div>
  </div>
</div>


<!-- Modal -->

<!-- end Modal -->

@include ('components.footer')