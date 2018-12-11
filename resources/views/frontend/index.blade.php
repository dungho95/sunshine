{{-- View này sẽ kế thừa giao diện từ `frontend.layout.index` --}}
@extends('frontend.layout.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layout.index` --}}
@section('title')
Shop Hoa tươi - Sunshine
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layout.index` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layout.index` --}}
@section('main-content')
<!-- Slider -->
@include('frontend.widgets.homepage-slider')

<!-- Banner -->
@include('frontend.widgets.homepage-banner', [$data = $ds_top3_newest_loaisanpham])

<!-- Product -->
@include('frontend.widgets.product-list', [$data = $danhsachsanpham])

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layout.index` --}}
@section('custom-scripts')
@endsection