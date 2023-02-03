@extends('master')

@section('title','Setting')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card">
        <div class="card-body p-3">
          <p class="ps-2">Menu Pengaturan</p>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('admin') }}">
          <div class="icon-wrapper"><i class="bi bi-pencil"></i></div>Administrator / Pengurus<i class="bi bi-chevron-right"></i></a>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('tahun') }}">
          <div class="icon-wrapper"><i class="bi bi-calendar"></i></div>Tahun Aktif<i class="bi bi-chevron-right"></i></a>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('comingsoon') }}">
          <div class="icon-wrapper"><i class="bi bi-building"></i></div>Nama Perusahaan<i class="bi bi-chevron-right"></i></a>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('comingsoon') }}">
          <div class="icon-wrapper"><i class="bi bi-cash-coin"></i></div>Pengaturan Invoice<i class="bi bi-chevron-right"></i></a>
        </div>
      </div>
</div>
<div class="container pt-3">
    <div class="card">
        <div class="card-body p-3">
          <p class="ps-2">Akun</p>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('akun') }}">
          <div class="icon-wrapper"><i class="bi bi-person-circle"></i></div>Data Diri<i class="bi bi-chevron-right"></i></a>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('whatsapp-data') }}">
            <div class="icon-wrapper"><i class="bi bi-box-arrow-up"></i></div>Logout<i class="bi bi-chevron-right"></i></a>
        </div>
      </div>
</div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    
@endsection