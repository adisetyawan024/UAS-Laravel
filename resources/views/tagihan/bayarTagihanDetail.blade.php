@extends('masterPage')

@section('title','Detail Bayar Tagihan')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card user-info-card mb-3">
        <div class="card-body d-flex align-items-center">
          <div class="user-profile me-3"><img src="{{ asset('assets/img/bg-img/2.jpg') }}" alt="">
          </div>
          <div class="user-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-1">{{$data[0]->nama}}</h5>@if($data[0]->status==1)<span class="badge bg-success ms-2 rounded-pill">Aktif</span>@elseif($data[0]->status==0)<span class="badge bg-danger ms-2 rounded-pill">Nonaktif</span>@endif
            </div>
            <p class="mb-0">Nomor Pelanggan: {{$data[0]->kode}}</p>
          </div>
        </div>
    </div>
    @php
        $no = 0;
    @endphp
    <div class="affan-element-item mt-4">
        <div class="element-heading-wrapper"><i class="bi bi-list"></i>
          <div class="heading-text">
            <h6 class="mb-1">Tagihan</h6><span>Data tagihan yang belum dibayar</span>
          </div>
        </div>
    </div>

    @foreach($dataPmk as $dp)
    <div class="card"> 
        <div class="card-body">
          <h5>Tagihan Bulan 
            @if ($dp->bulan == '01')
            Januari
            @elseif($dp->bulan == '02')
            Februari
            @elseif($dp->bulan == '03')
            Maret
            @elseif($dp->bulan == '04')
            April
            @elseif($dp->bulan == '05')
            Mei
            @elseif($dp->bulan == '06')
            Juni
            @elseif($dp->bulan == '07')
            Juli
            @elseif($dp->bulan == '08')
            Agustus
            @elseif($dp->bulan == '09')
            September
            @elseif($dp->bulan == '10')
            Oktober
            @elseif($dp->bulan == '11')
            November
            @elseif($dp->bulan == '12')
            Desember
            @endif {{$dp->tahun}}
          </h5>
          <h2>
             @if($no==0)
              @if($blnSblm['isBulanSblm']==0)
                @php $pmkBlnLalu = 0; @endphp 
              @elseif($blnSblm['isBulanSblm']==1)
                @php $pmkBlnLalu = $blnSblm['data']['0']->pemakaianBlnIni; @endphp 
              @endif
             @elseif($no>0) 
              @php 
              $pmkBlnLalu = $dataPmk[$no-1]->pemakaianBlnIni; 
              @endphp 
             @endif 
             @rupiah((($dp->pemakaianBlnIni-$pmkBlnLalu)*$dp->tarif_gol))
          </h2>
          <p>Pilih metode pembayaran untuk melakukan pembayaran tagihan ini.</p>
          <form action="{{route('bayar-tagihan-sukses')}}" method="POST">
            {{ csrf_field() }}
            <input type="text" value="{{$dp->kodeTagihan}}" name="in_kodeTagihan" hidden>
          <select class="form-select mb-3" id="in_metode" name="in_metode" aria-label="Default select example" required>
            <option value="Tunai">Tunai</option>
            <option value="BCA">BCA</option>
            <option value="BRI">BRI</option>
          </select>
          <button class="btn btn-primary w-100" type="submit">
            Bayar Tagihan</button>
          </form>
        </div>
      </div><br>
      @php
          $no++;
      @endphp
      @endforeach
      
</div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    
@endsection