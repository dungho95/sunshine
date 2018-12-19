{{-- View này sẽ kế thừa giao diện từ `frontend.layout.index` --}}
@extends('frontend.layout.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layout.index` --}}
@section('title')
Danh sách sản phẩm Shop Hoa tươi - Sunshine
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layout.index` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layout.index` --}}
@section('main-content')

@include('frontend.widgets.product-list', [$data = $danhsachsanpham])

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layout.index` --}}
@section('custom-scripts')
@endsection