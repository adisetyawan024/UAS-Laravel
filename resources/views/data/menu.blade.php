@extends('master')

@section('title','Master Data')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card">
        <div class="card-body p-3">
          <p class="ps-2">Menu Master Data</p>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('data-pelanggan') }}">
          <div class="icon-wrapper"><i class="bi bi-people"></i></div>Pelanggan<i class="bi bi-chevron-right"></i></a>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('data-golongan-tarif') }}">
          <div class="icon-wrapper"><i class="bi bi-cash-coin"></i></div>Golongan dan Tarif<i class="bi bi-chevron-right"></i></a>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('data-pemakaian') }}">
          <div class="icon-wrapper"><i class="bi bi-list"></i></div>Pemakaian<i class="bi bi-chevron-right"></i></a>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('data-laporan') }}">
          <div class="icon-wrapper"><i class="bi bi-newspaper"></i></div>Laporan<i class="bi bi-chevron-right"></i></a>

        </div>
      </div>
</div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    
@endsection