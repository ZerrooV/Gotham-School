@extends('ppdb.layouts.app')

@section('custom-head')
    <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js"data-client-key="{{ config('services.midtrans.client_key') }}"></script>
@endsection

@section('content')
    <div class="payment container">
        <div class="cardbill">
            <p id="billhead">TAGIHAN ANDA</p>
            <div class="cardbill-content">
                <p><span>Jalur Pendaftaran</span> : Jalur Reguler</p>
                <p><span>Biaya Pendaftaran</span> : Rp. 300.000</p>
                <p><span>Diskon Bruce Wayne</span> : Rp. 297.000</p><hr>
                <p><span>Total</span> : Rp. 3.000</p>
                <p><span>Status Pembayaran</span> : {{Auth::user()->payment}}</p>
            </div>
            @if (Auth::check() && Auth::user()->payment == 'Belum Bayar')
                <button id="pay-button">Bayar Sekarang!</button>
            @endif
            @if (Auth::check() && Auth::user()->payment == 'Terbayar')
                <button id="paid-button">Terbayar</button>
            @endif


        </div>
    </div>

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function (result) {
                    console.log(result);
                    alert('Payment Success!');
                },
                // Optional
                onPending: function (result) {
                    console.log(result);
                    alert('Waiting for your payment!');
                },
                // Optional
                onError: function (result) {
                    console.log(result);
                    alert('Payment failed!');
                }
            });
        };
    </script>
@endsection
