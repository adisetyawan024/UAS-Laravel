@extends('masterPage')

@section('title', 'Data Pelanggan')
@section('isi')
    <div class="pt-3"></div>
    <div class="container">
        <div class="card">
            <div class="card-body p-2">
                <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Data Pelanggan</small>
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
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->kode }}</td>
                                <td><b>{{ $d->nama }} ({{ $d->kode_gol }})</b></td>
                                <td><b>{{ $d->alamat }}</b></td>
                                <td><?php if ($d->status == '1') {
                                    echo '<span class="m-1 badge bg-success">Aktif</span>';
                                } elseif ($d->status == '0') {
                                    echo '<span class="m-1 badge bg-danger">Nonaktif</span>';
                                } ?></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Static Backdrop Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">Tambah Data Pelanggan</h6>
                    <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('data-pelanggan-detail-tambah') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="alert alert-primary" role="alert">Isilah Data Pelanggan Dengan Benar!</div>
                        <div class="form-group">
                            <label class="form-label" for="in_kodePelanggan">Kode Pelanggan</label>
                            <input class="form-control" id="in_kodePelanggan" name="in_kodePelanggan" type="text"
                                placeholder="Kode Pelanggan">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="in_namaPelanggan">Nama Lengkap</label>
                            <input class="form-control" id="in_namaPelanggan" name="in_namaPelanggan" type="text"
                                placeholder="Nama Pelanggan">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="in_nomorWA">Nomor WhatsApp</label>
                            <input class="form-control" id="in_nomorWA" name="in_nomorWA" type="number" placeholder="62..."
                                value="62">
                            <p class="mt-1">Wajib diawali dengan 62</p>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="in_password">Password</label>
                            <input class="form-control" id="in_password" name="in_password" type="text"
                                placeholder="Nama Pelanggan">
                        </div>
                        <div id="warningNomor"></div>
                        <div class="form-group">
                            <label class="form-label" for="in_golongan">Golongan Pelanggan</label>
                            <select class="form-select" id="in_golongan" name="in_golongan"
                                aria-label="Default select example">
                                <option selected="" disabled="">Pilih Golongan</option>
                                @foreach ($dataGol as $dg)
                                    <option value="{{ $dg->id }}">{{ $dg->nama }} ({{ $dg->kode }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="in_alamat">Alamat</label>
                            <textarea class="form-control" id="in_alamat" name="in_alamat" cols="2" rows="2"
                                placeholder="Write something..."></textarea>
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
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#in_nomorWA").keyup(function() {
                var noWa = $("#in_nomorWA").val();
                if (noWa.substring(0, 2) != "62") {
                    $("#warningNomor").html(
                        '<div class="alert alert-danger" role="alert">No. WhatsApp Wajib Diawali 62 tanpa 0 <b>di depan!</b></div>'
                    );
                } else {
                    $("#warningNomor").html("");
                }
            });
        });
    </script>
@endsection
