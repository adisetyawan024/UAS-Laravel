@extends('masterPage')

@section('title','Laporan Pembayaran Air')
@section('isi')
<div class="pt-3"></div>
<div class="container">
    <div class="card invoice-card shadow">
        <div class="card-body">
          <!-- Download Invoice -->
          <div class="download-invoice text-end mb-3"><a class="btn btn-sm btn-primary me-2" href="#"><i class="bi bi-file-earmark-pdf me-1"></i>PDF</a><a class="btn btn-sm btn-light" href="#" onclick="printDiv('printableArea')"><i class="bi bi-printer me-1"></i>Print</a></div>
          <!-- Invoice Info -->
          <div id="printableArea">
            <div class="invoice-info text-end mb-4">
                <h5 class="mb-1 fz-14">Laporan Tagihan Air.</h5>
                <h6 class="fz-12">Januari 2022</h6>
                {{-- <p class="mb-0 fz-12">20 Jan 2022</p> --}}
            </div>
            <!-- Invoice Table -->
            <div class="invoice-table">
                <div class="table-responsive">
                <table class="table table-bordered caption-top">
                    <caption>Detail Tagihan</caption>
                    <thead class="table-light">
                    <tr>
                        <th>No.</th>
                        <th>Deskripsi</th>
                        <th>M<sup>3</sup></th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tagihan Bln. Januari 2022</td>
                        <td>4</td>
                        <td>$480</td>
                    </tr>
                    
                    </tbody>
                    <tfoot class="table-light">
                    <tr>
                        <td class="text-end" colspan="2">Total:</td>
                        <td class="text-end">$10 M<sup>3</sup></td>
                        <td class="text-end">$740</td>
                    </tr>
                    {{-- <tr>
                        <td class="text-end" colspan="4">PPN (10%):</td>
                        <td class="text-end">$74</td>
                    </tr>
                    <tr>
                        <td class="text-end" colspan="4">Grand Total:</td>
                        <td class="text-end">$814</td>
                    </tr> --}}
                    </tfoot>
                </table>
                </div>
            </div>
            <p class="mb-0">Note: Ini adalah bukti sah telah dilakukannya pembayaran.</p>
          </div>
        </div>
    </div>
</div>

@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
@endsection