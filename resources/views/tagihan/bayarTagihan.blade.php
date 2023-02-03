@extends('master')

@section('title','Bayar Tagihan')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card image-gallery-card direction-rtl">
      <div class="card-body">
        <div class="text-center">
            <img class="mx-auto mb-4 d-block" width="40%" src="https://img.freepik.com/free-vector/magnifying-glass-with-file-searching_52683-22967.jpg?w=1060&t=st=1673241903~exp=1673242503~hmac=cb03acbe588ae502b779f5ce148cc94f9b25ff225fb255c79745eeb848efec7a" alt="">
            <h3>Kode Pelanggan</h3>
            <p>Masukkan kode pelanggan untuk membayar tagihan</p>
        </div>
        <!-- OTP Send Form -->
        <div class="otp-form mt-4">
            @if(Session::has('dataTidakAda'))
              {!! Session::get('dataTidakAda') !!}
            @endif
            <form action="{{ route('bayar-tagihan-detail')}}" method="POST">
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