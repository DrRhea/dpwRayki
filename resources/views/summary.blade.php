@include ('components.header')
<div class="bg-white">
  <div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <div class="max-w-xl">
      <h1 class="text-base font-medium text-indigo-600">Terima kasih!</h1>
      <p class="mt-2 text-4xl font-bold tracking-tight sm:text-5xl">Terimakasih sudah menyewa di tempat kami!</p>

      @php
      $user = Auth::user();
      $jumlahTransaksi = \App\Models\Transaksi::where('user_id', $user->id)->count();
      @endphp

      <p class="mt-2 text-base text-gray-500">Pesanan Anda #{{ $jumlahTransaksi }} telah berhasil diproses.</p>

      <dl class="mt-12 text-sm font-medium">
        <dt class="text-gray-900">Nomor Pelacakan</dt>
        <dd class="mt-2 text-indigo-600">51547878755545848512</dd>
      </dl>
    </div>

    <div class="mt-10 border-t border-gray-200">
      <h2 class="sr-only">Pesanan Anda</h2>

      <h3 class="sr-only">Barang</h3>
      <div class="flex space-x-6 border-b border-gray-200 py-10">
        <img src="{{ $transaksi->produk->gambar_produk}}" alt="Gambar Produk" class="h-20 w-20 flex-none rounded-lg bg-gray-100 object-cover object-center sm:h-40 sm:w-40">
        <div class="flex flex-auto flex-col">
          <div>
            <h4 class="font-medium text-gray-900">
              <a href="#">{{ $transaksi->produk->nama_produk }}</a>
            </h4>
            <p class="mt-2 text-sm text-gray-600">{{ $transaksi->produk->deskripsi_produk}}</p>
          </div>
          <div class="mt-6 flex flex-1 items-end">
            <dl class="flex space-x-4 divide-x divide-gray-200 text-sm sm:space-x-6">
              <div class="flex">
                <dt class="font-medium text-gray-900">Lama Sewa</dt>
                <dd class="ml-2 text-gray-700">{{ $transaksi->lama_sewa}} Hari</dd>
              </div>
              <div class="flex pl-4 sm:pl-6">
                <dt class="font-medium text-gray-900">Harga</dt>
                <dd class="ml-2 text-gray-700">Rp{{ number_format($transaksi->total_harga - 20000, 0, ',', '.') }}</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>

      <div class="sm:ml-40 sm:pl-6">
        <h3 class="sr-only">Informasi Anda</h3>

        <h4 class="sr-only">Alamat</h4>
        <dl class="grid grid-cols-2 gap-x-6 py-10 text-sm">
          <div>
            <dt class="font-medium text-gray-900">Alamat Pengiriman</dt>
            <dd class="mt-2 text-gray-700">
              <address class="not-italic">
                <span class="block"> {{ $transaksi->alamat_penyewa }} </span>
              </address>
            </dd>
          </div>
        </dl>

        <h4 class="sr-only">Pembayaran</h4>
        <dl class="grid grid-cols-2 gap-x-6 border-t border-gray-200 py-10 text-sm">
          <div>
            <dt class="font-medium text-gray-900">Metode Pembayaran</dt>
            <dd class="mt-2 text-gray-700">
              <p>{{ $transaksi->metode_pembayaran }}</p>
            </dd>
          </div>
        </dl>

        <h3 class="sr-only">Ringkasan</h3>

        <dl class="space-y-6 border-t border-gray-200 pt-10 text-sm">
          <div class="flex justify-between">
            <dt class="font-medium text-gray-900">Subtotal</dt>
            <dd class="text-gray-700">Rp{{ number_format($transaksi->total_harga, 0, ',', '.') }}</dd>
          </div>
          <div class="flex justify-between">
            <dt class="font-medium text-gray-900">Pengiriman</dt>
            <dd class="text-gray-700">Rp20.000</dd>
          </div>
          <div class="flex justify-between">
            <dt class="font-medium text-gray-900">Total</dt>
            <dd class="text-gray-900">Rp{{ number_format($transaksi->total_harga, 0, ',', '.') }}</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
</div>

@include ('components.footer')