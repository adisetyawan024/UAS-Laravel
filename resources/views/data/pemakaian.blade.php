@extends('masterPage')

@section('title','Data Pemakaian')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card">
    <div class="card-body">
        <table class="w-100" id="dataTable">
        <thead>
            <tr>
            <th>No. Pelanggan</th>
            <th>Periode</th>
            <th>Status</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPemakaian as $d)
            <tr>
                <td>{{$d->kode_pelanggan}} <br>({{$d->nama_pelanggan}})</td>
                <td>@if ($d->bulan == '01')
                    Jan
                    @elseif($d->bulan == '02')
                    Feb
                    @elseif($d->bulan == '03')
                    Mar
                    @elseif($d->bulan == '04')
                    Apr
                    @elseif($d->bulan == '05')
                    Mei
                    @elseif($d->bulan == '06')
                    Jun
                    @elseif($d->bulan == '07')
                    Jul
                    @elseif($d->bulan == '08')
                    Ags
                    @elseif($d->bulan == '09')
                    Sep
                    @elseif($d->bulan == '10')
                    Okt
                    @elseif($d->bulan == '11')
                    Nov
                    @elseif($d->bulan == '12')
                    Des
                @endif {{$d->tahun}}</td>
                <td>
                    @if($d->status == 0 )
                        <span class="m-1 badge bg-danger">Belum</span>
                    @elseif($d->status == 1 )
                        <span class="m-1 badge bg-success">Lunas</span>
                    @endif
                </td>
                <td>
                    <?php $idEncryp = base64_encode('RouteAir'.$d->id); ?>
                    <a class="btn m-1 btn-creative @if($d->status == 1)btn-warning @else btn-secondary @endif btn-sm"  @if($d->status == 1) href="/admin/data-pelanggan/pembayaran/{{$idEncryp}}/invoice"@endif ><i class="bi bi-file-richtext-fill"></i></a>
                    <a class="btn m-1 btn-creative btn-primary btn-sm" href="/admin/data-pelanggan/pembayaran/{{$idEncryp}}/edit"><i class="bi bi-pencil"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>

<!-- Static Backdrop Modal -->
<div class="modal fade" id="aksiBayar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="staticBackdropLabel">Bayar Tagihan Januari 2023</h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h2>Rp. 50.000</h2>
            <select class="form-select mb-3" id="chooseSize" name="chooseSize" aria-label="Default select example">
                <option disabled="" selected="">Pilih Metode</option>
                <option value="tunai">Tunai</option>
                <option value="BCA">BCA</option>
                <option value="BRI">BRI</option>
            </select>
        </div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-sm btn-success" type="button">Bayar</button>
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
</script>
@endsection