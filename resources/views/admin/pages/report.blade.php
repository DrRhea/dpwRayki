<p class="text-lg font-semibold text-gray-900">
  <span class="font-medium">
    Total Pendapatan:
  </span>
  Rp{{ number_format($totalPendapatan, 0, ',', '.') }}
</p>

<h1 class="text-2xl font-semibold text-gray-900 mt-8">Top 10 Transaksi</h1>
<ul class="divide-y divide-gray-100">
  @foreach($topTransactions as $transaction)
  <li class="flex justify-between py-4">
    <div class="flex items-center gap-x-4">
      <!-- Placeholder image -->
      <!-- <img class="h-12 w-12 rounded-full bg-gray-200" src="https://via.placeholder.com/50" alt=""> -->
      <div>
        <p class="text-sm font-semibold text-gray-900">Id Transaksi : {{ $transaction->id }}</p>
        <p class="mt-1 text-sm leading-5 text-gray-500">Rp{{ number_format($transaction->total_harga, 0, ',', '.') }}</p>
      </div>
    </div>
  </li>
  @endforeach
</ul>

<h1 class="text-2xl font-semibold text-gray-900 mt-8">Laporan Pelanggan</h1>
<ul class="divide-y divide-gray-100">
  @foreach($customers as $customer)
  <li class="flex justify-between py-4">
    <div class="flex items-center gap-x-4">
      <!-- Placeholder image -->
      <img class="h-12 w-12 rounded-full bg-gray-200" src="https://via.placeholder.com/50" alt="">
      <div>
        <p class="text-sm font-semibold text-gray-900">{{ $customer->name }}</p>
        <p class="mt-1 text-sm leading-5 text-gray-500">Total Transaksi:
          {{ $customer->transaksi_count }}
        </p>
      </div>
    </div>
  </li>
  @endforeach
</ul>