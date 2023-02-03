@extends('masterPage')

@section('title','Sukses Catat Tagihan')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="alert custom-alert-3 alert-primary alert-dismissible fade show" role="alert"><i class="bi bi-check-circle"></i>
        <div class="alert-text">
          <h6>Berhasil </h6><span>Data pemakaian telah berhasil tersimpan</span><span>Cek kembali data pemakaian di bawah ini!</span>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <div class="tab-pane fade show active" id="bootstrap" role="tabpanel" aria-labelledby="bootstrap-tab">
                <p class="mb-0">Nama Pelanggan</p>
                <h5>{{$data[0]->nama_pelanggan}} - {{$data[0]->kode_pelanggan}}</h5>
            </div>
            <hr>
            <div class="tab-pane fade show active" id="bootstrap" role="tabpanel" aria-labelledby="bootstrap-tab">
                <p class="mb-0">Kode Tagihan</p>
                <h5>{{$data[0]->kodeTagihan}}</h5>
            </div>
            <hr>
            <div class="tab-pane fade show active" id="bootstrap" role="tabpanel" aria-labelledby="bootstrap-tab">
                <p class="mb-0">Periode Tagihan</p>
                <h5>
                    @if ($data[0]->bulan == '01')
                        Jan
                        @elseif($data[0]->bulan == '02')
                        Feb
                        @elseif($data[0]->bulan == '03')
                        Mar
                        @elseif($data[0]->bulan == '04')
                        Apr
                        @elseif($data[0]->bulan == '05')
                        Mei
                        @elseif($data[0]->bulan == '06')
                        Jun
                        @elseif($data[0]->bulan == '07')
                        Jul
                        @elseif($data[0]->bulan == '08')
                        Ags
                        @elseif($data[0]->bulan == '09')
                        Sep
                        @elseif($data[0]->bulan == '10')
                        Okt
                        @elseif($data[0]->bulan == '11')
                        Nov
                        @elseif($data[0]->bulan == '12')
                        Des
                    @endif {{$data[0]->tahun}}
                </h5>
            </div>
            <hr>
            <div class="tab-pane fade show active" id="bootstrap" role="tabpanel" aria-labelledby="bootstrap-tab">
                <p class="mb-0">Pemakaian (Bln. Ini - Bln. Lalu)</p>
                <h5>{{$data[0]->pemakaianBlnIni}} - @if($dataSblm['isBulanSblm'] == 1) {{$dataSblm['data'][0]->pemakaianBlnIni}} @else 0 @endif</h5>
                @if($dataSblm['isBulanSblm'] == 1)
                 @php $datSebelum = $dataSblm['data'][0]->pemakaianBlnIni @endphp
                @else
                 @php $datSebelum = '0' @endphp
                @endif
                <h3><span class="badge bg-primary">{{$data[0]->pemakaianBlnIni-$datSebelum}} m3</span></h3>
            </div>
            <hr>
            <div class="tab-pane fade show active" id="bootstrap" role="tabpanel" aria-labelledby="bootstrap-tab">
                <p class="mb-0">Biaya</p>
                <h5>@rupiah((($data[0]->pemakaianBlnIni-$datSebelum)*$data[0]->tarif_gol))</h5>
            </div>
        </div>
    </div>
    <a href="{{ route('catat-tagihan') }}">
        <button class="btn btn-primary w-100 mt-3" type="submit">Selesai</button>
    </a>
</div>
<br>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    
@endsection