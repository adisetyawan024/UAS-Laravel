@extends('masterPage')

@section('title','Edit Golongan & Tarif')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card">
    <?php $idEncryp = base64_encode('RouteAir'.$dataById->id); ?>
    <form action="/admin/data-golongan-tarif/edit-simpan/{{$idEncryp}}" method="POST">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="form-group">
            <label class="form-label" for="in_kodeGol">Kode Golongan</label>
            <input class="form-control" id="in_kodeGol" name="in_kodeGol" type="text" value="{{$dataById->kode}}" placeholder="Kode Golongan">
        </div>
        <div class="form-group">
            <label class="form-label" for="in_namaGol">Nama Golongan</label>
            <input class="form-control" id="in_namaGol" name="in_namaGol" type="text" value="{{$dataById->nama}}" placeholder="Nama Golongan">
        </div>
        <div class="form-group">
            <label class="form-label" for="in_tarif">Tarif/M<sup>3</sup></label>
            <input class="form-control" id="in_tarif" name="in_tarif" type="number" value="{{$dataById->tarif}}" placeholder="500">
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Simpan Perubahan</button>
            </div>
        </div>
    </div>
    </form>
    </div>
</div>

@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')

@endsection