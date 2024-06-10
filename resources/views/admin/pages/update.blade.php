@include ('admin.components.header')

@if (Route::currentRouteName() == 'admin_edit')
@include('admin.update.update_product')
@else
Dashboard
@endif