@extends('masterPage')

@section('title','Detail Tahun')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card">
    <div class="card-body">
        <?php $idEncryp = base64_encode('RouteAir'.$data[0]->tahun); ?>
        <form action="/admin/setting-tahun/detail/{{$idEncryp}}/simpan" method="POST">
            {{ csrf_field() }}
        <div class="form-group">
                <label class="form-label" for="in_namaPelanggan">Tahun</label>
                <input class="form-control" id="in_namaPelanggan" name="in_namaPelanggan" type="text" value="{{$data[0]->tahun}}" placeholder="Tahun">
            </div>
            <div class="form-group">
                <label class="form-label" for="in_status">Status</label>
                <select class="form-select" id="in_status" name="in_status" aria-label="Default select example">
                  <option value="1" @if($data[0]->status == 1) selected="" @endif>Aktif</option>
                  <option value="0" @if($data[0]->status == 0) selected="" @endif>Nonaktif</option>
                </select>
            </div>
            
        <div class="row">
            <div class="col-6">
                <button class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">Hapus</button>
            </div>
            <div class="col-6">
                <button class="btn btn-primary w-100" type="submit">Simpan Perubahan</button>
            </div>
        </div>
        </form>
    </div>
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
            <p>Apakah anda yakin akan menghapus data ini?</p>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-light w-100" data-bs-dismiss="modal" aria-label="Close" type="button">Batal</button>
                </div>
                <div class="col-6">
                    <a href="/admin/setting-tahun/detail/{{$idEncryp}}/hapus"><button class="btn btn-danger w-100" type="submit">Hapus</button></a>
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