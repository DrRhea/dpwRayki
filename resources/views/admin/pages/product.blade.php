<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center justify-between">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold leading-6 text-gray-900">Produk</h1>
      <p class="mt-2 text-sm text-gray-700">Daftar Produk.</p>
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <a href="{{route('admin_create')}}">
        <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Produk</button>
      </a>
    </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block w-full py-2 align-middle sm:px-6 lg:px-8">
        <table class="w-full divide-y divide-gray-300">
          <thead>
            <tr>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Foto</th>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Harga</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Deskripsi</th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            @forelse ($products as $product)
            <tr>
              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-500 sm:pl-0 flex justify-center">
                <img src="{{ $product->gambar_produk }}" alt="{{ $product->nama_produk }}" class="h-16 w-16 rounded object-cover">
              </td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900">{{ $product->nama_produk}}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                {{ "Rp " . number_format($product->harga_produk,2,',','.') }}
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $product->deskripsi_produk}}</td>
              <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">

                <a href="{{ route('admin_edit', ['id' => $product->id]) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Ubah<span class="sr-only">, {{ $product->nama_produk }}</span></a>


                <div x-data="{ openModal: false }" class="inline">
                  <!-- Trigger Button -->
                  <button type="button" @click="openModal = true" class="text-red-600 hover:text-red-900">
                    Hapus<span class="sr-only">, {{ $product->nama_produk }}</span>
                  </button>

                  <!-- Modal -->
                  <div x-show="openModal" class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex items-center justify-center min-h-screen px-4 text-center sm:block sm:p-0">
                      <div x-show="openModal" class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                      </div>

                      <!-- Modal Panel -->
                      <div x-show="openModal" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                          <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                              <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                              </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                Hapus Produk
                              </h3>
                              <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                  Apakah Anda yakin ingin menghapus produk ini?
                                </p>
                                <p class="text-sm text-gray-500">
                                  Tindakan ini tidak dapat dibatalkan.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                          <form action="{{ route('admin_delete', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                              Hapus
                            </button>
                          </form>
                          <button @click="openModal = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                            Batal
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </td>
            </tr>
            @empty
            <td>
              Data Products belum Tersedia.

            </td>
            @endforelse
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>