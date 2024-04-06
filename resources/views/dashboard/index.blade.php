@extends('menu_bar.index')
@section('content')
    @include('dashboard.css')
    <div class="d-flex justify-content-center" style="position: absolute; z-index: -1;">
        <img src="{{ asset('image/dashboard/saldo_balance.svg') }}" alt="" style="width: 95vw; max-width: 430px;">
    </div>
    <div style="margin-left: 20px; position: relative; z-index: 1;">
        <div class="balance_text">Balance</div>
        <div class="val_balance_text">100.000.000</div>
        <div class="detail_balance_text">See details</div>
    </div>
    <div style="content: ''; height: 70px;"></div>
    <div class="transaction_txt">Transactions</div>
    <div class="today_txt">Today</div>
    <div class="d-flex justify-content-between align-items-center" style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px;">
        <div class="d-flex justify-content-start align-items-center">
            <div class="transaction_box_icon d-flex justify-content-center align-items-center">
                <i class="fas fa-gas-pump"></i>
            </div>
            <div style="margin-left: 15px;">
                <div class="transaction_name_txt">SPBU Tanggulangin</div>
                <div class="transaction_date_txt">01-07-2024</div>
            </div>
        </div>
        <div class="transaction_val_txt">-20.000</div>
    </div>
    <div class="d-flex justify-content-between align-items-center" style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px;">
        <div class="d-flex justify-content-start align-items-center">
            <div class="transaction_box_icon d-flex justify-content-center align-items-center">
                <i class="fas fa-car-side"></i>
            </div>
            <div style="margin-left: 15px;">
                <div class="transaction_name_txt">GoCar</div>
                <div class="transaction_date_txt">01-07-2024</div>
            </div>
        </div>
        <div class="transaction_val_txt">-21.000</div>
    </div>
    <div class="d-flex justify-content-between align-items-center" style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px;">
        <div class="d-flex justify-content-start align-items-center">
            <div class="transaction_box_icon d-flex justify-content-center align-items-center">
                <i class="fas fa-utensils"></i>
            </div>
            <div style="margin-left: 15px;">
                <div class="transaction_name_txt">Mie Gacoan</div>
                <div class="transaction_date_txt">01-07-2024</div>
            </div>
        </div>
        <div class="transaction_val_txt">-21.000</div>
    </div>
    <div class="d-flex justify-content-between align-items-center" style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px;">
        <div class="d-flex justify-content-start align-items-center">
            <div class="transaction_box_icon active d-flex justify-content-center align-items-center">
                <i class="fas fa-car-side"></i>
            </div>
            <div style="margin-left: 15px;">
                <div class="transaction_name_txt">Klaim JHT YS</div>
                <div class="transaction_date_txt">01-07-2024</div>
            </div>
        </div>
        <div class="transaction_val_txt active">+3.500.000</div>
    </div>
    <div class="d-flex justify-content-between align-items-center" style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px;">
        <div class="d-flex justify-content-start align-items-center">
            <div class="transaction_box_icon d-flex justify-content-center align-items-center">
                <i class="fas fa-utensils"></i>
            </div>
            <div style="margin-left: 15px;">
                <div class="transaction_name_txt">Cokelat Impian</div>
                <div class="transaction_date_txt">01-07-2024</div>
            </div>
        </div>
        <div class="transaction_val_txt">-21.000</div>
    </div>
    <script>
        $(document).ready(function() {
            var element = document.getElementById('home_bottom');
            element.classList.add('active');

            show_dashboard_header(0);
        });
    </script>
@endsection
