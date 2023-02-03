@extends('master')

@section('title', 'Tagihan')
@section('isi')
    <div class="pt-3"></div>
    <div class="container">
        <div class="card">
            <div class="card-body p-3">
                <p class="ps-2">Menu Tagihan</p>

                @if (session()->get('role') == '1' || session()->get('role') == '3')
                    <!-- Page Item --><a class="affan-page-item" href="{{ route('catat-tagihan') }}">
                        <div class="icon-wrapper"><i class="bi bi-pencil"></i></div>Catat Pemakaian<i
                            class="bi bi-chevron-right"></i>
                    </a>
                @endif

                @if (session()->get('role') == '1' || session()->get('role') == '2')
                    <!-- Page Item --><a class="affan-page-item" href="{{ route('bayar-tagihan') }}">
                        <div class="icon-wrapper"><i class="bi bi-cash-coin"></i></div>Pembayaran Tagihan<i
                            class="bi bi-chevron-right"></i>
                    </a>
                @endif

            </div>
        </div>
    </div>
@endsection

@section('additionalCSS')

@endsection
@section('additionalJS')

@endsection
