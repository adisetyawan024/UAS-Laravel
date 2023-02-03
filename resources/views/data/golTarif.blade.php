@extends('masterPage')

@section('title','Data Golongan dan Tarif')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card">
      <div class="card-body p-2">
        <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Tambah Golongan dan Tarif</small>
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
            <th>Kode</th>
            <th>Golongan</th>
            <th>Tarif/M<sup>3</sup></th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $a)
            <tr>
                <td>{{$a->kode}}</td>
                <td>{{$a->nama}}</td>
                <td>Rp. {{$a->tarif}}</td>
                <td>
                    <?php $idEncryp = base64_encode('RouteAir'.$a->id); ?>
                    <a class="btn m-1 btn-creative btn-warning btn-sm" href="/admin/data-golongan-tarif/edit/{{$idEncryp}}"><i class="bi bi-pencil"></i></a>
                    <button class="btn m-1 btn-creative btn-danger btn-sm" onclick="hapusdata('<?php echo $idEncryp; ?>')"><i class="bi bi-trash"></i></button>
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
          <h6 class="modal-title" id="staticBackdropLabel">Tambah Golongan & Tarif</h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('data-golongan-tarif-tambah')}}" method="POST">
        <div class="modal-body">
            {{ csrf_field() }}
            <div class="alert alert-primary" role="alert">Isilah Data Dengan Benar!</div>
            <div class="form-group">
                <label class="form-label" for="in_kodeGol">Kode Golongan</label>
                <input class="form-control" id="in_kodeGol" name="in_kodeGol" type="text" placeholder="Kode Golongan">
            </div>
            <div class="form-group">
                <label class="form-label" for="in_namaGol">Nama Golongan</label>
                <input class="form-control" id="in_namaGol" name="in_namaGol" type="text" placeholder="Nama Golongan">
            </div>
            <div class="form-group">
                <label class="form-label" for="in_tarif">Tarif/M<sup>3</sup></label>
                <input class="form-control" id="in_tarif" name="in_tarif" type="number" placeholder="500">
            </div>
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-sm btn-success" type="submit">Simpan</button>
        </div>
         </form>
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
                    <div id="btn_download-id"></div>
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
});
function hapusdata(id){
    $('#btn_download-id').html('<a href="/admin/data-golongan-tarif/hapus/'+id+'"><button class="btn btn-danger w-100" type="submit">Hapus</button></a>')
    $('#hapusModal').modal('show');
}
</script>
@endsection