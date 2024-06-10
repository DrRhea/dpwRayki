<div class="bg-gray-50" x-data="
      { basePrice: {{ $product->harga_produk }}, 
        quantity: 1, 
        showNotification: false, 
        get price() { return this.basePrice * this.quantity; } }">
  <div class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Checkout</h2>

    <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16" method="POST" action="{{ route('transaksi.store', ['id' => $product->id]) }}">
      @csrf

      <input required type="hidden" name="user_id" value="{{ $user->id }}">
      <input required type="hidden" name="produks_id" value="{{ $product->id }}">

      <div>email</label>
        <div class="mt-1">
          <div>
            <h2 class="text-lg font-medium text-gray-900">Informasi Kontak</h2>

            <div class="mt-4">
              <label for="email-address" class="block text-sm font-medium text-gray-700">Alamat
                <input required type="email" id="email-address" name="email_penyewa" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
          </div>
        </div>

        <div class="mt-10 border-t border-gray-200 pt-10">
          <h2 class="text-lg font-medium text-gray-900">Informasi Pengiriman</h2>

          <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-1 sm:gap-x-4">
            <div class="sm:col-span-2">
              <label for="address" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
              <div class="mt-1">
                <input required type="text" name="nama_penyewa" id="nama_penyewa" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>


            <div class="sm:col-span-2">
              <label for="address" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
              <div class="mt-1">
                <input required type="text" name="alamat_penyewa" id="alamat_penyewa" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
              <div class="mt-1">
                <input required type="text" name="no_hp_penyewa" id="phone" autocomplete="tel" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
          </div>
        </div>


        <!-- Payment -->
        <div class="mt-10 border-t border-gray-200 pt-10">
          <h2 class="text-lg font-medium text-gray-900">Pembayaran</h2>

          <fieldset class="mt-4">
            <legend class="sr-only">Tipe pembayaran</legend>
            <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
              <div class="flex items-center">
                <input required id="credit-card" name="metode_pembayaran" type="radio" checked class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" value="transfer">
                <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-700">Transfer Bank</label>
              </div>
              <div class="flex items-center">
                <input required id="paypal" name="metode_pembayaran" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" value="e-wallet">
                <label for="paypal" class="ml-3 block text-sm font-medium text-gray-700">E-Wallet</label>
              </div>
            </div>
          </fieldset>

        </div>
      </div>

      <!-- Order summary -->
      <div class="mt-10 lg:mt-0">
        <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

        <div class="mt-4 rounded-lg border border-gray-200 bg-white shadow-sm">
          <h3 class="sr-only">Items in your cart</h3>
          <ul role="list" class="divide-y divide-gray-200">
            <li class="flex px-4 py-6 sm:px-6">
              <div class="flex-shrink-0">
                <img src="{{ $product->gambar_produk }}" class="w-20 rounded-md">
              </div>

              <div class="ml-6 flex flex-1 flex-col">
                <div class="flex">
                  <div class="min-w-0 flex-1">
                    <h4 class="text-sm">
                      <a href="#" class="font-medium text-gray-700 hover:text-gray-800">{{ $product->nama_produk }}</a>
                    </h4>
                    <p class="mt-1 text-sm text-gray-500">{{ $product->deskripsi_produk }}</p>
                  </div>

                  <div class="ml-4 flow-root flex-shrink-0">
                  </div>
                </div>

                <div class="flex flex-1 items-end justify-between pt-2">
                  <p x-text="price.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })" class="mt-1 text-sm font-medium text-gray-900"></p>

                  <div class="ml-4">
                    <label for="quantity" class="sr-only">Duration</label>
                    <label for="quantity" class="text-sm mr-4 text-gray-500">Duration</label>
                    <select name="lama_sewa" x-model="quantity" class="rounded-md border border-gray-300 text-left text-base font-medium text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select>
                  </div>
                </div>
              </div>
            </li>

          </ul>
          <dl class="space-y-6 border-t border-gray-200 px-4 py-6 sm:px-6">
            <div class="flex items-center justify-between">
              <dt class="text-sm">Subtotal</dt>
              <dd class="text-sm font-medium text-gray-900" x-text="price.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })"></dd>
            </div>
            <div class="flex items-center justify-between">
              <dt class="text-sm">Pengiriman</dt>
              <dd class="text-sm font-medium text-gray-900">Rp20.000,00</dd>
            </div>
            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
              <dt class="text-base font-medium">Total</dt>
              <dd class="text-base font-medium text-gray-900" x-text="(price + 20000).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })"></dd>
            </div>
          </dl>


          <input required type="hidden" name="total_harga" :value="price + 20000">

          <div class=" border-t border-gray-200 px-4 py-6 sm:px-6">
            <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50" @click="showNotification = true">Confirm order</button>
          </div>
        </div>
      </div>
    </form>

    <template x-if="showNotification">
      <div>
        @include('components.notification')
      </div>
    </template>
  </div>
</div>