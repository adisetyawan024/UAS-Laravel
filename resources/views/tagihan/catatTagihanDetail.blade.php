@extends('masterPage')

@section('title','Detail Catat Tagihan')
@section('isi')
<?php
  $currentMonth = date('n');
  $currentYear = date('Y');
?>
<div class="pt-3"></div>
<div class="container">
    <div class="card user-info-card mb-3">
        <div class="card-body d-flex align-items-center">
          <div class="user-profile me-3"><img src="{{ asset('assets/img/bg-img/2.jpg') }}" alt="">
          </div>
          <div class="user-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-1">{{$data[0]->nama}}</h5>@if($data[0]->status==1)<span class="badge bg-success ms-2 rounded-pill">Aktif</span>@elseif($data[0]->status==0)<span class="badge bg-danger ms-2 rounded-pill">Nonaktif</span>@endif
            </div>
            <p class="mb-0">Kode Pelanggan: {{$data[0]->kode}}</p>
          </div>
        </div>
    </div>

    <div class="affan-element-item mt-4">
        <div class="element-heading-wrapper"><i class="bi bi-list"></i>
          <div class="heading-text">
            <h6 class="mb-1">Catat Tagihan</h6><span>Catat pemakaian air terbaru</span>
          </div>
        </div>
    </div>
    @if($data[0]->status==1)
    <div class="card"> 
        <div class="card-body">
             <form action="{{ route('catat-tagihan-sukses') }}" method="POST">
              {{ csrf_field() }}
              <?php $idEncryp = base64_encode('RouteAir'.$data[0]->id); ?>
              <input type="text" value="{{$idEncryp}}" name="in_idPel" hidden>
                <div class="form-group">
                    <label class="form-label" for="in_tahun">Tahun</label>
                    <select class="form-select form-control-clicked" id="in_tahun" name="in_tahun" aria-label="Default select example">
                      <option value="2022" <?php if ($currentYear == 2022) echo 'selected=""'; ?>>2022</option>
                      <option value="2023" <?php if ($currentYear == 2023) echo 'selected=""'; ?>>2023</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="in_bln">Bulan</label>
                    <select class="form-select form-control-clicked" id="in_bln" name="in_bln" aria-label="Default select example">
                      <option value="01" <?php if ($currentMonth == 1) echo 'selected=""'; ?>>Januari</option>
                      <option value="02" <?php if ($currentMonth == 2) echo 'selected=""'; ?>>Februari</option>
                      <option value="03" <?php if ($currentMonth == 3) echo 'selected=""'; ?>>Maret</option>
                      <option value="04" <?php if ($currentMonth == 4) echo 'selected=""'; ?>>April</option>
                      <option value="05" <?php if ($currentMonth == 5) echo 'selected=""'; ?>>Mei</option>
                      <option value="06" <?php if ($currentMonth == 6) echo 'selected=""'; ?>>Juni</option>
                      <option value="07" <?php if ($currentMonth == 7) echo 'selected=""'; ?>>Juli</option>
                      <option value="08" <?php if ($currentMonth == 8) echo 'selected=""'; ?>>Agustus</option>
                      <option value="09" <?php if ($currentMonth == 9) echo 'selected=""'; ?>>September</option>
                      <option value="010" <?php if ($currentMonth == 10) echo 'selected=""'; ?>>Oktober</option>
                      <option value="011" <?php if ($currentMonth == 11) echo 'selected=""'; ?>>November</option>
                      <option value="012" <?php if ($currentMonth == 12) echo 'selected=""'; ?>>Desember</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleInputReadonly">Pemakaian Bulan Sebelumnya (@if($dataPemakaian['isBulanSblm']==1)Bulan {{$dataPemakaian['data']->bulan}}-{{$dataPemakaian['data']->tahun}}@else Tidak Ada Pembayaran Sebelumnya @endif)</label>
                    <input class="form-control" id="exampleInputReadonly" type="text" value="@if($dataPemakaian['isBulanSblm']==1){{$dataPemakaian['data']->pemakaianBlnIni}}@else 0 @endif" readonly="">
                  </div>
                <div class="form-group">
                  <label class="form-label" for="in_BlnIni">Pemakaian Bulan Ini</label>
                  <input class="form-control" id="in_BlnIni" name="in_BlnIni" type="number" placeholder="Masukkan Angka Pada Meteran">
                </div>
                <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center" type="submit">Simpan Pemakaian
                  <svg class="bi bi-arrow-right-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                  </svg>
                </button>
              </form>
        </div>
    </div><br>
    @elseif($data[0]->status==0)
    <div class="card image-gallery-card direction-rtl">
      <div class="card-body">
        <div class="text-center">
            <img class="mx-auto mb-4 d-block" width="40%" src="https://img.freepik.com/free-vector/tiny-people-standing-near-stop-sign-flat-vector-illustration-huge-red-sign-with-hand-symbolizing-ban-entry-danger-warning-caution-prohibited-actions-alert-risk-gesture-concept_74855-23219.jpg?w=1800&t=st=1674742802~exp=1674743402~hmac=c6474ea5ba73d5872298bf2263c27312bb7528ce4392ff70d83e99c6d708adc5" alt="">
            <h3>Pelanggan Berstatus Non Aktif</h3>
            <p>Pelanggan dengan status nonaktif tidak dapat di catat pemakaiannya.</p>
        </div>
      </div>
    </div><br>
    @endif
</div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    
@endsection