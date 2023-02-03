@extends('masterPage')

@section('title','Detail Data Pelanggan')
@section('isi')
<div class="pt-3"></div>
@foreach ($dataById as $d)
<?php $idEncryp = base64_encode('RouteAir'.$d->id); ?>
@endforeach
<div class="container">
    <div class="card">
    <form action="/admin/data-pelanggan/editSimpan/{{$idEncryp}}" method="POST">
    {{ csrf_field() }}
    <div class="card-body">
        @foreach ($dataById as $d)
        <div class="form-group">
            <label class="form-label" for="in_kodePelanggan">Kode Pelanggan</label>
            <input class="form-control" id="in_kodePelanggan" name="in_kodePelanggan" type="text" value="{{$d->kode}}" placeholder="Kode Pelanggan">
        </div>
        <div class="form-group">
            <label class="form-label" for="in_namaPelanggan">Nama Lengkap</label>
            <input class="form-control" id="in_namaPelanggan" name="in_namaPelanggan" value="{{$d->nama}}" type="text" placeholder="Nama Pelanggan">
        </div>
        <div class="form-group">
            <label class="form-label" for="in_nomorWA">Nomor WhatsApp</label>
            <input class="form-control" id="in_nomorWA" name="in_nomorWA" type="number" placeholder="62..." value="{{$d->whatsapp}}">
            <p class="mt-1">Wajib diawali dengan 62</p>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_Password">Password</label>
            <input class="form-control" id="in_Password" name="in_Password" type="text" placeholder="Password">
            <p class="mt-1">** Biarkan KOSONG Jika Tidak Ingin Merubah Password!</p>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_golongan">Golongan Pelanggan</label>
            <select class="form-select" id="in_golongan" name="in_golongan" aria-label="Default select example">
                @foreach ($dataGol as $dg)
                
                @if($d->golongan == $dg->id)
                    <option value="{{$dg->id}}" selected="" >{{$dg->nama}} ({{$dg->kode}})</option>
                @else
                    <option value="{{$dg->id}}">{{$dg->nama}} ({{$dg->kode}})</option>
                @endif
                @endforeach
              
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_status">Status</label>
            <select class="form-select" id="in_status" name="in_status" aria-label="Default select example">
                @if($d->status == 1)
                    <option value="1" selected="" >Aktif</option>              
                    <option value="0">NonAktif</option>    
                @elseif($d->status == 0)
                    <option value="1">Aktif</option>              
                    <option value="0" selected="">NonAktif</option>    
                @endif
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_alamat">Alamat</label>
            <textarea class="form-control" id="in_alamat" name="in_alamat" cols="2" rows="2" placeholder="Write something...">{{$d->alamat}}</textarea>
        </div>
        <div class="row">
            <div class="col-6">
                <button class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">Hapus Pelanggan</button>
            </div>
            <div class="col-6">
                <button class="btn btn-primary w-100" type="submit">Simpan Perubahan</button>
            </div>
        </div>
        @endforeach
    </div>
    </form>
    </div>
</div>

<!-- Static Backdrop Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="staticBackdropLabel">Hapus Data Pelanggan</h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Apakah anda yakin akan menghapus data pelanggan ini?</p>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-light w-100" data-bs-dismiss="modal" aria-label="Close" type="button">Batal</button>
                </div>
                <div class="col-6">
                    <a href="/admin/data-pelanggan/hapus/{{$idEncryp}}"><button class="btn btn-danger w-100" type="submit">Hapus</button></a>
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