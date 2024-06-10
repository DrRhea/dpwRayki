<div class="px-4 sm:px-6 lg:px-8">
  <div class="mt-8 overflow-x-auto bg-white rounded-lg shadow">
    <table class="w-full divide-y divide-gray-200">
      <thead class="text-white bg-indigo-600">
        <tr>
          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase">Foto</th>
          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase">Name</th>
          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase">Harga</th>
          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase">Deskripsi</th>
          <th scope="col" class="relative px-6 py-3">
            <span class="sr-only">Edit</span>
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        @forelse ($products as $product)
        <tr>
          <td class="flex justify-center px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
            <img src="{{ $product->gambar_produk }}" alt="{{ $product->nama_produk }}" class="object-cover w-16 h-16 rounded">
          </td>
          <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">{{ $product->nama_produk}}</td>
          <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ "Rp " . number_format($product->harga_produk,2,',','.') }}</td>
          <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $product->deskripsi_produk}}</td>
          <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
            <a href="{{ route('admin_edit', ['id' => $product->id]) }}" class="mr-4 text-indigo-600 hover:text-indigo-900">Ubah<span class="sr-only">, {{ $product->nama_produk }}</span></a>

            <form class="inline" method="POST" action="{{ route('admin_delete', ['id' => $product->id]) }}">
              @csrf
              @METHOD('DELETE')
              <button type="submit" class="text-red-600 hover:text-red-900">Hapus<span class="sr-only">, {{ $product->nama_produk }}</span></button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="px-6 py-4 text-sm font-medium text-center text-gray-500 whitespace-nowrap">Data Products belum Tersedia.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="justify-between mt-6 sm:flex sm:items-center">
    <div class="sm:flex-auto">
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <a href="{{route('admin_create')}}">
        <button type="button" class="block px-3 py-2 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Produk</button>
      </a>
    </div>
  </div>
</div>