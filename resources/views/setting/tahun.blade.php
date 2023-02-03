@extends('masterPage')

@section('title','Setting Tahun')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card">
      <div class="card-body p-2">
        <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Tambah Tahun</small>
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
            <th>Tahun</th>
            <th>Status</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          @foreach($data as $d)
            <tr>
                <td>{{$d->tahun}}</td>
                <td>
                  @if($d->status == 0 )
                      <span class="m-1 badge bg-danger">Nonaktif</span>
                  @elseif($d->status == 1 )
                      <span class="m-1 badge bg-success">Aktif</span>
                  @endif
                </td>
                <td>
                    <?php $idEncryp = base64_encode('RouteAir'.$d->tahun); ?>
                    <a class="btn m-1 btn-creative btn-primary btn-sm" href="/admin/setting-tahun/detail/{{$idEncryp}}"><i class="bi bi-pencil"></i></a>
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
          <h6 class="modal-title" id="staticBackdropLabel">Tambah Tahun</h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('tahun-tambah')}}" method="POST">
          {{ csrf_field() }}
        <div class="modal-body">
            <div class="alert alert-primary" role="alert">Isilah Data Dengan Benar!</div>
            <div class="form-group">
                <label class="form-label" for="in_namaPelanggan">Tahun</label>
                <input class="form-control" id="in_namaPelanggan" name="in_namaPelanggan" type="number" placeholder="Tahun">
            </div>
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

@endsection