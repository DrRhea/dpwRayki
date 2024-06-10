<!-- file tambah data -->
<div class="flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
  <div class="w-full max-w-md p-8 space-y-8 bg-blue-600 rounded-lg shadow-lg">
    <div>
      <h2 class="text-3xl font-extrabold text-center text-white">Tambah Produk Baru</h2>
    </div>
    <form class="mt-8 space-y-6" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="space-y-4">
        <div>
          <label for="nama_produk" class="block mb-2 text-sm font-medium text-white">Nama Produk</label>
          <input id="nama_produk" name="nama_produk" type="text" required class="relative block w-full px-3 py-2 text-white placeholder-white bg-blue-500 border border-blue-500 rounded-md appearance-none focus:outline-none focus:ring-blue-300 focus:border-blue-300 sm:text-sm" placeholder="Nama Produk">
        </div>
        <div>
          <label for="harga_produk" class="block mb-2 text-sm font-medium text-white">Harga Produk</label>
          <input id="harga_produk" name="harga_produk" type="number" step="0.01" required class="relative block w-full px-3 py-2 text-white placeholder-white bg-blue-500 border border-blue-500 rounded-md appearance-none focus:outline-none focus:ring-blue-300 focus:border-blue-300 sm:text-sm" placeholder="Harga Produk">
        </div>
        <div>
          <label for="deskripsi_produk" class="block mb-2 text-sm font-medium text-white">Deskripsi Produk</label>
          <textarea id="deskripsi_produk" name="deskripsi_produk" rows="4" required class="relative block w-full px-3 py-2 text-white placeholder-white bg-blue-500 border border-blue-500 rounded-md appearance-none focus:outline-none focus:ring-blue-300 focus:border-blue-300 sm:text-sm" placeholder="Deskripsi Produk"></textarea>
        </div>
        <div>
          <label for="foto_produk" class="block mb-2 text-sm font-medium text-white">Gambar Produk</label>
          <input id="foto_produk" name="foto_produk" type="file" required class="relative block w-full px-3 py-2 text-white placeholder-white bg-blue-500 border border-blue-500 rounded-md appearance-none focus:outline-none focus:ring-blue-300 focus:border-blue-300 sm:text-sm">
        </div>
      </div>
      <div>
        <button type="submit" class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-blue-600 bg-yellow-400 border border-transparent rounded-md group hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
          Simpan Produk
        </button>
      </div>
    </form>
  </div>
</div>