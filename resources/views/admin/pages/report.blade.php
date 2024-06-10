@include ('admin.components.header')

<!-- Main content -->
<div class="flex flex-col flex-1 ml-16 bg-gray-100">
  @include ('admin.components.header')

  <div class="py-10">
    <header>
      <div class="px-4 mx-auto mb-6 max-w-7xl sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold leading-tight tracking-tight text-indigo-600">
          Halaman Laporan
        </h1>
      </div>
    </header>
    <main>
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Total Pendapatan -->
        <div class="p-6 mb-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-lg">
          <p class="text-lg font-semibold text-gray-900">
            <span class="font-medium">Total Pendapatan:</span>
            Rp{{ number_format($totalPendapatan, 0, ',', '.') }}
          </p>
        </div>

        <!-- Top 10 Transaksi -->
        <div class="p-6 mb-8 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-lg">
          <h1 class="text-2xl font-semibold text-indigo-600">Top 10 Transaksi</h1>
          <ul class="mt-4 divide-y divide-gray-200">
            @foreach($topTransactions as $transaction)
            <li class="flex justify-between py-4">
              <div class="flex items-center gap-x-4">
                <div>
                  <p class="text-sm font-semibold text-gray-900">Id Transaksi: {{ $transaction->id }}</p>
                  <p class="mt-1 text-sm leading-5 text-gray-500">Rp{{ number_format($transaction->total_harga, 0, ',', '.') }}</p>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>

        <!-- Laporan Pelanggan -->
        <div class="p-6 mb-8 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-lg">
          <h1 class="text-2xl font-semibold text-indigo-600">Laporan Pelanggan</h1>
          <div class="mt-4 overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Nama</th>
                  <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Total Transaksi</th>
                  <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Foto</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach($customers as $customer)
                <tr>
                  <td class="px-6 py-4 text-sm font-semibold text-gray-900 whitespace-nowrap">{{ $customer->name }}</td>
                  <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $customer->transaksi_count }}</td>
                  <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                    <img class="w-12 h-12 bg-gray-200 rounded-full" src="https://via.placeholder.com/50" alt="{{ $customer->name }}">
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </main>
  </div>
</div>

</body>

</html>