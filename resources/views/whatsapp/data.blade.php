@extends('masterPage')

@section('title','Pengaturan WhatsApp')
@section('isi')
<div class="pt-3"></div>

<div class="container">
    <div class="card">
      <div class="card-body p-2">
        <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Login WhatsApp Notifikasi</small>
            <a class="btn m-1 btn-creative btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus me-2"></i>Login</a>
        </div>
      </div>
    </div>
</div>

<div class="container pt-3">
    <div class="card">
      <div class="card-body p-2">
        <div class="d-flex align-items-center justify-content-between">
            <small class="ms-1">Pilih Akun WhatsApp untuk Bot</small>
            <select style="width: 30%;" class="form-select form-control-clicked" id="defaultSelect" name="defaultSelect" aria-label="Default select example">
                <option disabled selected="">Pilih Akun</option>
                <option value="2">Two</option>
            </select>
            {{-- <a class="btn m-1 btn-creative btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus me-2"></i>Login</a> --}}
        </div>
      </div>
    </div>
</div>

<div class="pt-3"></div>
<div class="container">
    <div class="card">
    <div class="card-body">
        <table class="w-100" id="dataTable">
        <thead>
            <tr>
            <th>No. Wa</th>
            <th>Nama</th>
            <th>Tgl. Scan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>6281339988746</td>
                <td>AdminBot</td>
                <td>20 Januari 2022</td>
                <td>
                    <a class="btn m-1 btn-creative btn-danger btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
</div>

<!-- Static Backdrop Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="staticBackdropLabel">Tambah Data WhatsApp</h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="alert alert-primary" role="alert">Isilah Data Dengan Benar!</div>
            <div class="form-group">
                <label class="form-label" for="in_nomorWA">Nomor WhatsApp</label>
                <input class="form-control" id="in_nomorWA" name="in_nomorWA" type="number" placeholder="62..." value="62">
                <p class="mt-1">*Wajib diawali dengan 62</p>
            </div>
            <div id="warningNomor"></div>
            <div class="form-group">
                <label class="form-label" for="in_namaSess">Nama Session</label>
                <input class="form-control" id="in_namaSess" name="in_namaSess" type="text" placeholder="Nama Golongan">
                <p class="mt-1">*Jangan gunakan SPASI</p>
            </div>
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-sm btn-success" type="button">Simpan</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="hapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="staticBackdropLabel">Hapus Data Golongan</h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Apakah anda yakin akan menghapus data Golongan & Tarif ini?</p>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-light w-100" data-bs-dismiss="modal" aria-label="Close" type="button">Batal</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-danger w-100" type="submit">Hapus</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    $("#in_nomorWA").keyup(function(){
        var noWa = $("#in_nomorWA").val();
        if(noWa.substring(0,2) != "62"){
            $("#warningNomor").html('<div class="alert alert-danger" role="alert">No. WhatsApp Wajib Diawali 62 tanpa 0 <b>di depan!</b></div>');
        }else{
            $("#warningNomor").html("");
        }
    });
    $("#in_namaSess").on({
        keydown: function(e) {
            if (e.which === 32)
            return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
    });
});
</script>
@endsection