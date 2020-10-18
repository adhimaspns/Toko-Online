@extends('template.app')

@section('pagetitle', 'Dashboard')
    

{{-- Digunakan jika ingin menambahkan custom css --}}
{{-- @push('customcss')
  <style>
    p{
      color: red;
    }
  </style>
@endpush --}}

@section('content')
  {{-- Menampilkan data penjualan bulan ini --}}
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3>{{ $transactions }}</h3>
            <p>Penjualan Bulan ini</p>
        </div>
        <div class="icon">
            <i class="fa fa-shopping-cart"></i>
        </div>
    </div>
  </div>
  <!-- ./col -->
  {{-- Menampilkan data Unit yang sudah terjual --}}
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
        <div class="inner">
            <h3>{{ $productSale }}</h3>
            <p>Unit Terjual Bulan ini</p>
        </div>
        <div class="icon">
            <i class="fa fa-shopping-cart"></i>
        </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
        <div class="inner">
            <h3>{{ $customers }}</h3>
            <p>Customers</p>
        </div>
        <div class="icon">
            <i class="fa fa-users"></i>
        </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
        <div class="inner">
            <h3>{{ $products}}</h3>
            <p>Produk</p>
        </div>
        <div class="icon">
            <i class="fa fa-dropbox"></i>
        </div>
    </div>
  </div>
@endsection