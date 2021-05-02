@extends('layouts.store_metronic')

@section('styles')
<link href="{{ asset('assets/css/demo3/pages/general/wizard/wizard-4.css') }}"
    rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @if (in_array(Auth::guard('store')->user()->category, ['groceries']))
        @include('components.add-product-admin')
    @else
        @include('components.add-product-store')
    @endif
@endsection

@section('scripts')
<!--begin::Page Vendors(used by this page) -->
<script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}"
    type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('assets/js/demo3/pages/crud/datatables/extensions/buttons.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('assets/js/demo3/pages/custom/apps/store/products.js') }}"
    type="text/javascript"></script>
<script src="{{ asset('js/image_preview.js') }}" type="text/javascript"></script>
<!--end::Page Scripts -->

@endsection
