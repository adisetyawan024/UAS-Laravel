@extends('masterPage')

@section('title','Data Administrator')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card">
      <div class="card-body p-2">
        <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Tambah Admin</small>
            <a class="btn m-1 btn-creative btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus me-2"></i>Tambah</a>
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
            <th>Jabatan</th>
            <th>Nama</th>
            <th>No. Wa</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataAdmin as $da)
            <tr>
                <td><?php if($da->role == 1){echo "Super Admin";}else if($da->role == 2){echo "Kasir";}else if($da->role == 3){echo "Pencatat Air";}?></td>
                <td><b>{{ $da->nama }}</b></td>
                <td>{{ $da->whatsapp }}</td>
                <td>
                    <?php $idEncryp = base64_encode('RouteAir'.$da->id); ?>
                    <a class="btn m-1 btn-creative btn-primary btn-sm" href="/admin/setting-admin/detail/{{ $idEncryp }}"><i class="bi bi-pencil"></i></a>
                </td>
            </tr>
            @endforeach
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
          <h6 class="modal-title" id="staticBackdropLabel">Tambah Data Administrator</h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{route('admin-detail-tambah')}}" method="POST">
            {{ csrf_field() }}
            <div class="alert alert-primary" role="alert">Isilah Data Dengan Benar!</div>
            <div class="form-group">
                <label class="form-label" for="in_namaPelanggan">Nama Admin</label>
                <input class="form-control" id="in_namaPelanggan" name="in_namaPelanggan" type="text" placeholder="Nama Pelanggan">
            </div>
            <div class="form-group">
                <label class="form-label" for="in_nomorWA">Nomor WhatsApp</label>
                <input class="form-control" id="in_nomorWA" name="in_nomorWA" type="number" placeholder="62..." value="62">
                <p class="mt-1">Wajib diawali dengan 62</p>
            </div>
            <div id="warningNomor"></div>
            <div id="warningNomor2"></div>
            <div class="form-group">
                <label class="form-label" for="in_jabatan">Jabatan</label>
                <select class="form-select" id="in_jabatan" name="in_jabatan" aria-label="Default select example">
                  <option value="3" selected="">Pencatat Air</option>
                  <option value="2">Kasir</option>
                  <option value="1">Super Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="in_pass">Password</label>
                <input class="form-control" id="in_pass" name="in_pass" type="text" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="form-label" for="in_passConf">Tulis Ulang Password</label>
                <input class="form-control" id="in_passConf" name="in_passConf" type="text" placeholder="Tulis Ulang Password">
            </div>
            <div id="warningPassword"></div>
            
        </div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-sm btn-success" id="btn_simpan" type="submit">Simpan</button>
        </div>
        </form>
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
            $("#btn_simpan").prop('disabled', true);
        }else{
            $("#warningNomor").html("");
            $("#btn_simpan").prop('disabled', false);
        }
        if(noWa.length <= 11 && noWa.length <=15){
            $("#warningNomor2").html('<div class="alert alert-danger" role="alert">No. WhatsApp Harus diatas 11 Digit dan kurang dari 14 <b>di depan!</b></div>');
            $("#btn_simpan").prop('disabled', true);
        }else{
            $("#warningNomor2").html("");
            $("#btn_simpan").prop('disabled', false);
        }
    });
    $("#in_passConf").keyup(function(){
        var pass = $("#in_pass").val();
        var passConf = $("#in_passConf").val();
        if(pass != passConf ){
            $("#warningPassword").html('<div class="alert alert-danger" role="alert">Password harus sama!</div>');
            $("#btn_simpan").prop('disabled', true);
        }else{
            $("#warningPassword").html("");
            $("#btn_simpan").prop('disabled', false);
        }
    });
});
</script>
@endsection