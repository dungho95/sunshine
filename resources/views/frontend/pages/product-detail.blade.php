{{-- View này sẽ kế thừa giao diện từ `frontend.layout.index` --}}
@extends('frontend.layout.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layout.index` --}}
@section('title')
Sản phẩm Shop Hoa tươi - Sunshine
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layout.index` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layout.index` --}}
@section('main-content')

<!-- Product info -->
@include('frontend.widgets.product-info', ['sp' => $sp, 'hinhanhlienquan' => $danhsachhinhanhlienquan])

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layout.index` --}}
@section('custom-scripts')
@endsection