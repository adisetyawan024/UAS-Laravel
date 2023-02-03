@extends('masterPage')

@section('title','Detail Data Administrator')
@section('isi')
<div class="pt-3"></div>
@foreach($dataAdminById as $da)
<?php $idEncryp = base64_encode('RouteAir'.$da->id); ?>
@endforeach
<div class="container">
    <form action="/admin/setting-admin/detail-save/{{$idEncryp}}" method="POST">
    <div class="card">
    <div class="card-body">
        {{ csrf_field() }}
        @foreach($dataAdminById as $da)
            <div class="form-group">
                <label class="form-label" for="in_namaPelanggan">Nama Admin</label>
                <input class="form-control" id="in_namaPelanggan" name="in_namaPelanggan" type="text"  value="{{$da->nama}}" placeholder="Nama Pelanggan">
            </div>
            <div class="form-group">
                <label class="form-label" for="in_nomorWA">Nomor WhatsApp</label>
                <input class="form-control" id="in_nomorWA" name="in_nomorWA" type="number" placeholder="62..." value="{{$da->whatsapp}}">
                <p class="mt-1">* Wajib diawali dengan 62</p>
            </div>
            <div id="warningNomor"></div>
            <div class="form-group">
                <label class="form-label" for="in_jabatan">Jabatan</label>
                <select class="form-select" id="in_jabatan" name="in_jabatan" aria-label="Default select example">
                <?php
                    if($da->role == "3"){
                        echo '<option value="3" selected="">Pencatat Air</option><option value="2">Kasir</option><option value="1">Super Admin</option>';
                    }else if($da->role == "2"){
                        echo '<option value="3">Pencatat Air</option><option value="2" selected="">Kasir</option><option value="1">Super Admin</option>';
                    }else if($da->role == "1"){
                        echo '<option value="3">Pencatat Air</option><option value="2">Kasir</option><option value="1" selected="">Super Admin</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="in_pass">Password</label>
                <input class="form-control" id="in_pass" name="in_pass" type="text" placeholder="Password">
                <p class="mt-1">** Biarkan Kosong Jika Tidak Ingin Merubah Password!</p>
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
    </div>
    </form>
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
                    <a class="btn btn-danger w-100" href="/admin/setting-admin/hapus/{{$idEncryp}}">Hapus</a>
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