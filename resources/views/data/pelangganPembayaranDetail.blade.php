@extends('masterPage')

@section('title','Data Pembayaran Pelanggan')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card user-info-card mb-3">
        <div class="card-body d-flex align-items-center">
          <div class="user-profile me-3"><img src="{{ asset('assets/img/bg-img/2.jpg') }}" alt="">
          </div>
          <div class="user-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-1">{{$dataPel[0]->nama}}</h5>@if($dataPel[0]->status==1)<span class="badge bg-success ms-2 rounded-pill">Aktif</span>@elseif($dataPel[0]->status==0)<span class="badge bg-danger ms-2 rounded-pill">Nonaktif</span>@endif
            </div>
            <p class="mb-0">Kode Pelanggan: {{$dataPel[0]->kode}}</p>
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
            <th>Periode</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach($dataPmk as $dp)
            <tr>
                <td>
                    @if ($dp->bulan == '01')
                    Jan
                    @elseif($dp->bulan == '02')
                    Feb
                    @elseif($dp->bulan == '03')
                    Mar
                    @elseif($dp->bulan == '04')
                    Apr
                    @elseif($dp->bulan == '05')
                    Mei
                    @elseif($dp->bulan == '06')
                    Jun
                    @elseif($dp->bulan == '07')
                    Jul
                    @elseif($dp->bulan == '08')
                    Ags
                    @elseif($dp->bulan == '09')
                    Sep
                    @elseif($dp->bulan == '10')
                    Okt
                    @elseif($dp->bulan == '11')
                    Nov
                    @elseif($dp->bulan == '12')
                    Des
                    @endif {{$dp->tahun}}
                </td>
                <td>@if($no==0) @php $pmkBlnLalu = 0; @endphp @elseif($no>0) @php $pmkBlnLalu = $dataPmk[$no-1]->pemakaianBlnIni; @endphp @endif @rupiah((($dp->pemakaianBlnIni-$pmkBlnLalu)*$dp->tarif_gol))</td>
                <td>
                    @if($dp->status == 0 )
                        <span class="m-1 badge bg-danger">Belum</span>
                    @elseif($dp->status == 1 )
                        <span class="m-1 badge bg-success">Lunas</span>
                    @endif
                </td>
                <td>
                    <?php $idEncryp = base64_encode('RouteAir'.$dp->id); ?>
                    <button class="btn m-1 btn-creative @if($dp->status == 0) btn-success @else btn-secondary @endif btn-sm" @if($dp->status == 0) onclick="modal('{{$dp->kodeTagihan}}','{{$dp->bulan}}','{{$dp->tahun}}','@rupiah((($dp->pemakaianBlnIni-$pmkBlnLalu)*$dp->tarif_gol))')" @endif><i class="bi bi-cash-coin"></i></button>
                    <a class="btn m-1 btn-creative @if($dp->status == 1) btn-warning @else btn-secondary @endif btn-sm" @if($dp->status == 1) href="/admin/data-pelanggan/pembayaran/{{$idEncryp}}/invoice"@endif><i class="bi bi-file-richtext-fill"></i></a>
                    <a class="btn m-1 btn-creative btn-primary btn-sm" href="/admin/data-pelanggan/pembayaran/{{$idEncryp}}/edit"><i class="bi bi-pencil"></i></a>
                </td>
                @php
                    $no++;
                @endphp
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
          <div id="mod_judul"></div>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('bayar-tagihan-sukses')}}" method="POST">
            {{ csrf_field() }}
        <div class="modal-body">
            <h2 id="mod_harga"></h2>
            <div id="mod_kdtagihan"></div>
            <select class="form-select mb-3" id="in_metode" name="in_metode" aria-label="Default select example">
                <option value="Tunai">Tunai</option>
                <option value="BCA">BCA</option>
                <option value="BRI">BRI</option>
            </select>
        </div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-sm btn-success" type="submit">Bayar</button>
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
        }else{
            $("#warningNomor").html("");
        }
    });
});
function modal(id,bln,thn,harga){
    $('#mod_judul').html('<h6 class="modal-title" id="staticBackdropLabel">Bayar Tagihan Bulan '+bln+' Tahun '+thn+'</h6>');
    $('#mod_harga').html(harga);
    $('#mod_kdtagihan').html('<input type="text" name="in_kodeTagihan" value="'+id+'" hidden>')
    $('#aksiBayar').modal('show');
}
</script>
@endsection