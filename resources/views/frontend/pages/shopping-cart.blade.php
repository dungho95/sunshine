{{-- View này sẽ kế thừa giao diện từ `frontend.layout.index` --}}
@extends('frontend.layout.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layout.index` --}}
@section('title')
Giỏ hàng Shop Hoa tươi - Sunshine
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layout.index` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layout.index` --}}
@section('main-content')

<!-- Hiển thị giỏ hàng -->
<ngcart-cart template-url="{{ asset('vendor/ngCart/template/ngCart/cart.html') }}" ></ngcart-cart>

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layout.index` --}}
@section('custom-scripts')
@endsection