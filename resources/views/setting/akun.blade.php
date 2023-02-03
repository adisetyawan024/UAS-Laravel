@extends('masterPage')

@section('title','Edit Data Diri')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card user-info-card mb-3">
        <div class="card-body d-flex align-items-center">
          <div class="user-profile me-3"><img src="{{ asset('assets/img/bg-img/2.jpg') }}" alt="">
          </div>
          <div class="user-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-1">Nama Pengguna</h5><span class="badge bg-success ms-2 rounded-pill">Aktif</span>
            </div>
            <p class="mb-0">Nomor Pelanggan</p>
          </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
    <div class="card-body">
        <div class="form-group">
            <label class="form-label" for="in_kodePelanggan">Kode Pelanggan</label>
            <input class="form-control" id="in_kodePelanggan" name="in_kodePelanggan" type="text" placeholder="Kode Pelanggan" disabled>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_namaPelanggan">Nama Lengkap</label>
            <input class="form-control" id="in_namaPelanggan" name="in_namaPelanggan" type="text" placeholder="Nama Pelanggan">
        </div>
        <div class="form-group">
            <label class="form-label" for="in_nomorWA">Nomor WhatsApp</label>
            <input class="form-control" id="in_nomorWA" name="in_nomorWA" type="number" placeholder="62..." value="62">
            <p class="mt-1">Wajib diawali dengan 62</p>
        </div>
        <div class="form-group">
            <label class="form-label" for="in_Password">Password</label>
            <input class="form-control" id="in_Password" name="in_Password" type="text" placeholder="Nama Pelanggan">
        </div>
        <div class="form-group">
            <label class="form-label" for="defaultSelect">Golongan Pelanggan</label>
            <select class="form-select" id="defaultSelect" name="defaultSelect" aria-label="Default select example" disabled>
              <option value="R1" selected="">Rumah Tangga 1 (R1)</option>
              <option value="R2">Rumah Tangga 2 (R2)</option>
            </select>
          </div>
        <div id="warningNomor"></div>
        <div class="form-group">
            <label class="form-label" for="in_alamat">Alamat</label>
            <textarea class="form-control" id="in_alamat" name="in_alamat" cols="2" rows="2" placeholder="Write something..."></textarea>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Simpan Perubahan</button>
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