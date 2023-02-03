@extends('master')

@section('title','Laporan WhatsApp')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="alert custom-alert-3 alert-primary alert-dismissible fade show" role="alert"><i class="bi bi-whatsapp"></i>
      <div class="alert-text">
        <h6>WhatsApp Bot & Notification</h6><span> Fitur ini digunakan untuk menjalankan whatapp bot pembayaran air dan mengirim pemberitahuan kepada pelanggan.</span>
      </div>
    </div>
    <div class="card">
        <div class="card-body p-3">
          <p class="ps-2">Menu Pengaturan Bot WhatsApp</p>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('whatsapp-data') }}">
          <div class="icon-wrapper"><i class="bi bi-pencil"></i></div>Login WhatsApp<i class="bi bi-chevron-right"></i></a>
          <!-- Page Item --><a class="affan-page-item" href="{{ route('comingsoon') }}">
          <div class="icon-wrapper"><i class="bi bi-cash-coin"></i></div>Setting Bot<i class="bi bi-chevron-right"></i></a>
         
        </div>
      </div>
</div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    
@endsection