<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Edit Data Product</h2>
      <p class="mt-2 text-center text-sm text-gray-600">Update detail produk yang ingin Anda ubah</p>
    </div>
    <form class="mt-8 space-y-6 bg-white p-8 rounded-lg shadow-lg" method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="rounded-md shadow-sm -space-y-px">
        <div class="mb-4">
          <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-700">Nama Produk</label>
          <input id="nama_produk" name="nama_produk" type="text" value="{{ $product->nama_produk }}" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nama Produk">
        </div>
        <div class="mb-4">
          <label for="harga_produk" class="block mb-2 text-sm font-medium text-gray-700">Harga Produk</label>
          <input id="harga_produk" name="harga_produk" type="number" step="0.01" value="{{ $product->harga_produk }}" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Harga Produk">
        </div>
        <div class="mb-4">
          <label for="deskripsi_produk" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi Produk</label>
          <textarea id="deskripsi_produk" name="deskripsi_produk" rows="4" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Deskripsi Produk">{{ $product->deskripsi_produk }}</textarea>
        </div>
        <div class="mb-4">
          <label for="foto_produk" class="block mb-2 text-sm font-medium text-gray-700">Foto Produk</label>
          <input id="foto_produk" name="foto_produk" type="file" class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
          @if ($product->gambar_produk)
          <div class="mt-4">

            <img src="{{ $product->gambar_produk}}" alt="Current Product Image" class="w-32 h-32 object-cover">
          </div>
          @endif
        </div>
      </div>
      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Update Product
        </button>
      </div>
    </form>
  </div>
</div>