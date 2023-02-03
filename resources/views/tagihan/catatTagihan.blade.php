@extends('master')

@section('title','Bayar Tagihan')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card image-gallery-card direction-rtl">
      <div class="card-body">
        <div class="text-center">
            <img class="mx-auto mb-4 d-block" width="40%" src="https://img.freepik.com/free-vector/fill-out-concept-illustration_114360-5560.jpg?w=1060&t=st=1673248938~exp=1673249538~hmac=d500f40890bb6d9bfbc41c8a7440beb7446bf92be463cb0017642c4ce4f713ef" alt="">
            <h3>Kode Pelanggan</h3>
            <p>Masukkan kode pelanggan untuk mencatat tagihan</p>
        </div>
        <!-- OTP Send Form -->
        <div class="otp-form mt-4">
            @if(Session::has('dataTidakAda'))
            {!! Session::get('dataTidakAda') !!}
            @endif
            <form action="{{ route('catat-tagihan-detail') }}" method="POST">
              {{ csrf_field() }}
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="kd_pel" placeholder="Masukkan Kode Pelanggan">
            </div>
            <button class="btn btn-primary w-100" type="submit">Cari</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    
@endsection