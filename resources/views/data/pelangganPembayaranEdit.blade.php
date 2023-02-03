@extends('masterPage')

@section('title','Edit Data Pembayaran')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    @if(Session::has('simpanData'))
    {!! Session::get('simpanData') !!}
    @endif
    <div class="card">
    <?php $idEncryp = base64_encode('RouteAir'.$data[0]->id); ?>
    <form action="/admin/data-pelanggan/pembayaran/{{$idEncryp}}/edit/simpan" method="POST">
        {{ csrf_field() }}
    @foreach ($data as $d)
    <div class="card-body">
        <div class="form-group">
            <label class="form-label" for="in_kodeTagihan">Kode Tagihan</label>
            <input class="form-control" id="in_kodeTagihan" name="in_kodeTagihan" value="{{$d->kodeTagihan}}" type="text" readonly placeholder="Kode Tagihan">
        </div>
        <div class="form-group">
            <label class="form-label" for="in_bln">Bulan Tagihan</label>
            <div class="row">
                <div class="col-6">
                    <select class="form-select form-control-clicked" id="in_bln" name="in_bln" aria-label="Default select example">
                        <option value="01" @if($d->bulan=="01") selected="" @endif >Januari</option>
                        <option value="02" @if($d->bulan=="02") selected="" @endif>Februari</option>
                        <option value="03" @if($d->bulan=="03") selected="" @endif>Maret</option>
                        <option value="04" @if($d->bulan=="04") selected="" @endif>April</option>
                        <option value="05" @if($d->bulan=="05") selected="" @endif>Mei</option>
                        <option value="06" @if($d->bulan=="06") selected="" @endif>Juni</option>
                        <option value="07" @if($d->bulan=="07") selected="" @endif>Juli</option>
                        <option value="08" @if($d->bulan=="08") selected="" @endif>Agustus</option>
                        <option value="09" @if($d->bulan=="09") selected="" @endif>September</option>
                        <option value="10" @if($d->bulan=="10") selected="" @endif>Oktober</option>
                        <option value="11" @if($d->bulan=="11") selected="" @endif>November</option>
                        <option value="12" @if($d->bulan=="12") selected="" @endif>Desember</option>
                    </select>
                </div>
                <div class="col-6">
                    <select class="form-select form-control-clicked" id="in_tahun" name="in_tahun" aria-label="Default select example">
                        @foreach ($tahun as $t)
                            <option value="{{$t->tahun}}" @if($t->tahun == $d->tahun) selected="" @endif>{{$t->tahun}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_nomorWA">Pemakaian Bulan Sebelumnya</label>
            <input class="form-control" id="in_nomorWA" name="in_nomorWA" value="{{$dataBlnSebelum}}" type="text" readonly>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_pmkBlnIni">Pemakaian Bulan Ini</label>
            <input class="form-control" id="in_pmkBlnIni" name="in_pmkBlnIni" value="{{$d->pemakaianBlnIni}}" type="number">
        </div>
        <div class="form-group">
            <label class="form-label" for="in_nomorWA">Biaya</label>
            <input class="form-control" id="in_nomorWA" name="in_nomorWA" type="text" value="@rupiah(($d->pemakaianBlnIni-$dataBlnSebelum)*$d->tarif_gol)" readonly>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_metode">Metode Pembayaran</label>
            <select class="form-select" id="in_metode" name="in_metode" aria-label="Default select example">
              <option value="Tunai" @if($d->metode == 'Tunai') selected="" @endif>Tunai</option>
              <option value="BCA" @if($d->metode == 'BCA') selected="" @endif>BCA</option>
              <option value="BRI" @if($d->metode == 'BRI') selected="" @endif>BRI</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_status">Status</label>
            <select class="form-select" id="in_status" name="in_status" aria-label="Default select example">
              <option value="0" @if($d->status == '0') selected="" @endif>Belum Lunas</option>
              <option value="1" @if($d->status == '1') selected="" @endif>Lunas</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_nomorWA">Admin Pembayaran</label>
            <input class="form-control" id="in_nomorWA" name="in_nomorWA" type="text" value="{{$d->nama_admin}}" readonly>
        </div>
        <div class="row">
            <div class="col-6">
                <button class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">Hapus Tagihan</button>
            </div>
            <div class="col-6">
                <button class="btn btn-primary w-100" type="submit">Simpan Perubahan</button>
            </div>
        </div>
    </div>
    </div>
    @endforeach
    </form>
</div>
<br>
<!-- Static Backdrop Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="staticBackdropLabel">Hapus Tagihan Pelanggan</h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Apakah anda yakin akan menghapus data tagihan ini?</p>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-light w-100" data-bs-dismiss="modal" aria-label="Close" type="button">Batal</button>
                </div>
                <div class="col-6">
                    <a href="/admin/data-pelanggan/pembayaran/{{$idEncryp}}/hapus"><button class="btn btn-danger w-100" type="button">Hapus</button></a>
                </div>
            </div>
        </div>
        
      </div>
    </div>
</div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')

@endsection