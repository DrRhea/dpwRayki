@include ('admin.components.header')

@if (Request::path() === 'admin/produk/tambah')
@include ('admin.create.create_product')
@else
Dashboard
@endif