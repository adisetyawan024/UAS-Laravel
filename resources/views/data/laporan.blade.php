@extends('master')

@section('title','Laporan Bulanan')
@section('isi')
<?php
  $currentMonth = date('n');
  $currentYear = date('Y');
?>
<div class="pt-3"></div>
<div class="container">
    <div class="card image-gallery-card direction-rtl">
      <div class="card-body">
        <div class="text-center">
            <img class="mx-auto mb-4 d-block" width="40%" src="https://img.freepik.com/free-vector/digital-presentation-abstract-concept_335657-3042.jpg?w=1060&t=st=1673351031~exp=1673351631~hmac=bedbcfe96a453456cea850a0f64fb9b660d7be361f0979f2a9dd37646fdc744b" alt="">
            <h3>Laporan Bulanan</h3>
            <p>Pilih Tahun dan Bulan untuk melihat laporan pelanggan</p>
        </div>
      </div>
    </div>
    <hr>
    <div class="card"> 
        <div class="card-body">
            <form action="{{ route('data-laporan-detail') }}" method="GET">
                <div class="form-group">
                    <label class="form-label" for="defaultSelect">Tahun</label>
                    <select class="form-select form-control-clicked" id="defaultSelect" name="defaultSelect" aria-label="Default select example">
                      <option value="2022" <?php if ($currentYear == 2022) echo 'selected=""'; ?>>2022</option>
                      <option value="2023" <?php if ($currentYear == 2023) echo 'selected=""'; ?>>2023</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="defaultSelect">Bulan</label>
                    <select class="form-select form-control-clicked" id="defaultSelect" name="defaultSelect" aria-label="Default select example">
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
                <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center" type="submit">Periksa Laporan
                  <svg class="bi bi-arrow-right-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                  </svg>
                </button>
              </form>
        </div>
      </div>
      <hr>
</div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
    
@endsection