@include ('admin.components.header')

<div class="py-10">
  <header>
    <div class="mx-auto mb-4 max-w-7xl px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">
        @if (Request::path() === 'admin/produk')
        Halaman Produk
        @elseif(Request::path() === 'admin/laporan')
        Halaman Laporan
        @else
        Dashboard
        @endif
      </h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <!-- Your content -->
      @if (Request::path() === 'admin/produk')
      @include ('admin.pages.product')
      @elseif (Request::path() === 'admin/laporan')
      @include ('admin.pages.report')
      @endif
    </div>
  </main>
</div>
</div>

</body>

</html>