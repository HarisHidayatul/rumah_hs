@extends('menu_bar.index')
@section('content')
    @include('detail_transaction_expense.css')
    <div class="d-flex justify-content-center txt_tittle_2">Expense</div>
    <div>
        <form class="d-flex justify-content-center" style="margin-top: 80px;">
            <div style="width: 400px; background-color: white; padding: 7px; border-radius: 7px;">
                <div>
                    <div class="d-flex justify-content-between">
                        <div
                            style="width: 50%; height: 30px; display: flex; align-items: center; justify-content: center; background-color: #D9D9D9; border-radius: 15px 0px 0px 15px;">
                            Income</div>
                        <div style="width: 50%;">
                            <div
                                style="height: 30px; display: flex; align-items: center; justify-content: center; background-color: #282260; color: white; border-radius: 0px 15px 15px 0px;">
                                <div>Expense</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center" style="margin-top: 15px;">
                    <input type="date" value="2023-11-20">
                    <div class="d-flex justify-content-center align-items-center"
                        style="height: 35px; width: 10%;background-color: #D9D9D9; border-radius: 0px 15px 15px 0px">
                        <img src="{{ asset('image/detail_transaction/calendar.svg') }}" alt=""
                            style="height: 15px;">
                    </div>
                </div>
                <div style="content: ''; height: 5px;"></div>
                <div class="d-flex justify-content-between align-items-center" style="height: 35px; width: 100%;background-color: #D9D9D9; border-radius: 15px 15px 15px 15px; border: 2px solid black">
                    <div class="category_txt">Food & Drink</div>
                    <img src="{{ asset('image/detail_transaction/arrow_down.png') }}" alt="" style="height: 7px; margin-right: 10px;">
                </div>
                <div style="content: ''; height: 5px;"></div>
                <div class="d-flex flex-wrap" style="width: 100%; background-color: white; padding: 0px 10px; border-radius: 0px 0px 15px 15px;">
                    <div style="width: 90px; margin-top: 20px;">
                        <div class="d-flex justify-content-center">
                            <div class="icon_category"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="icon_category_txt">Food & Drink</div>
                        </div>
                    </div>
                    <div style="width: 90px; margin-top: 20px;">
                        <div class="d-flex justify-content-center">
                            <div class="icon_category"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="icon_category_txt">Shooping</div>
                        </div>
                    </div>
                    <div style="width: 90px; margin-top: 20px;">
                        <div class="d-flex justify-content-center">
                            <div class="icon_category"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="icon_category_txt">Transportation</div>
                        </div>
                    </div>
                    <div style="width: 90px; margin-top: 20px;">
                        <div class="d-flex justify-content-center">
                            <div class="icon_category"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="icon_category_txt">Pulsa</div>
                        </div>
                    </div>
                    <div style="width: 90px; margin-top: 20px;">
                        <div class="d-flex justify-content-center">
                            <div class="icon_category"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="icon_category_txt">Skin Care</div>
                        </div>
                    </div>
                    <div style="width: 90px; margin-top: 20px;">
                        <div class="d-flex justify-content-center">
                            <div class="icon_category"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="icon_category_txt">Electricity Token</div>
                        </div>
                    </div>
                </div>
                <input type="text" value="Cokelat Impian">
                <div style="content: ''; height: 5px;"></div>
                <input type="text" value="Es Cokelat Medium Dan Roti Panggang">
                <div style="content: ''; height: 5px;"></div>
                <div class="d-flex justify-content-start">
                    <div style="width: 49%">
                        <input type="number" value="10">
                    </div>
                    <div style="content: ''; width: 2%"></div>
                    <div style="width: 49%">
                        <input type="text" value="Porsi">
                    </div>
                </div>
                <div style="content: ''; height: 5px;"></div>
                <div class="d-flex justify-content-start">
                    <div style="width: 49%">
                        <input type="number" value="14500">
                    </div>
                    <div style="content: ''; width: 2%"></div>
                    <div style="width: 49%">
                        <input type="number" value="29000">
                    </div>
                </div>
            </div>
        </form>
        <div style="content: ''; height: 13px;"></div>
        <div class="d-flex justify-content-start">
            <button class="d-flex justify-content-center align-items-center" style="border-color: #F60000">
                <img src="{{ asset('image/detail_transaction/edit_icon.png') }}" alt="" style="height: 20px;">
                <div style="margin-left: 5px;">Edit</div>
            </button>
            <div style="content: ''; width: 4%"></div>
            <button class="d-flex justify-content-center align-items-center" style="border-color: #00E941">
                <img src="{{ asset('image/detail_transaction/save_icon.png') }}" alt="" style="height: 20px;">
                <div style="margin-left: 5px;">Save</div>
            </button>
        </div>
    </div>
    <script>
        // Ambil semua elemen input dengan tipe "number"
        var numberInputs = document.querySelectorAll('input[type="number"]');

        // Loop melalui setiap elemen input dan tambahkan event listener
        numberInputs.forEach(function(input) {
            // Format nilai saat halaman dimuat
            formatNumber(input);

            // Format nilai setiap kali nilai berubah
            input.addEventListener('input', function() {
                formatNumber(input);
            });
        });

        function formatNumber(input) {
            // Ambil nilai input
            var value = input.value;

            // Hapus karakter selain angka
            value = value.replace(/\D/g, '');

            // Format nilai menjadi format "29.000"
            value = parseInt(value).toLocaleString('id-ID');

            // Setel kembali nilai input
            input.value = value;
        }
    </script>

    <div style="display: none;">
        <div class="d-flex justify-content-between" style="width: 100%; padding: 10px 20px; margin-top: 80px;">
            <div class="day_detail">Wednesday</div>
            <div class="date_detail">07-01-2024</div>
        </div>
        <div class="d-flex justify-content-start align-items-center">
            <div style="width: 85%">
                <div class="d-flex justify-content-between align-items-center"
                    style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
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
            </div>
            <div class="d-flex align-items-center" style="width: 15%; padding: 10px 10px; margin-top: 10px">
                <img src="{{ asset('image/detail_transaction/delete_icon.png') }}" alt="" style="height: 30px;">
                {{-- a --}}
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center">
            <div style="width: 85%">
                <div class="d-flex justify-content-between align-items-center"
                    style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
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
            </div>
            <div class="d-flex align-items-center" style="width: 15%; padding: 10px 10px; margin-top: 10px">
                <img src="{{ asset('image/detail_transaction/delete_icon.png') }}" alt="" style="height: 30px;">
                {{-- a --}}
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center">
            <div style="width: 85%">
                <div class="d-flex justify-content-between align-items-center"
                    style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="transaction_box_icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div style="margin-left: 15px;">
                            <div class="transaction_name_txt">SPBU Tanggulangin</div>
                            <div class="transaction_date_txt">01-07-2024</div>
                        </div>
                    </div>
                    <div class="transaction_val_txt">-21.000</div>
                </div>
            </div>
            <div class="d-flex align-items-center" style="width: 15%; padding: 10px 10px; margin-top: 10px">
                <img src="{{ asset('image/detail_transaction/delete_icon.png') }}" alt="" style="height: 30px;">
                {{-- a --}}
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center">
            <div style="width: 85%">
                <div class="d-flex justify-content-between align-items-center"
                    style="background-color: #DFDFDF; padding: 10px 10px; border-radius: 12px; margin-top: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="transaction_box_icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div style="margin-left: 15px;">
                            <div class="transaction_name_txt">Gocar</div>
                            <div class="transaction_date_txt">01-07-2024</div>
                        </div>
                    </div>
                    <div class="transaction_val_txt">-21.000</div>
                </div>
            </div>
            <div class="d-flex align-items-center" style="width: 15%; padding: 10px 10px; margin-top: 10px">
                <img src="{{ asset('image/detail_transaction/delete_icon.png') }}" alt="" style="height: 30px;">
                {{-- a --}}
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center">
            <div style="width: 85%">
                <div class="d-flex justify-content-between align-items-center"
                    style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
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
            </div>
            <div class="d-flex align-items-center" style="width: 15%; padding: 10px 10px; margin-top: 10px">
                <img src="{{ asset('image/detail_transaction/delete_icon.png') }}" alt="" style="height: 30px;">
                {{-- a --}}
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center">
            <div style="width: 85%">
                <div class="d-flex justify-content-between align-items-center"
                    style="background-color: white; padding: 10px 10px; border-radius: 12px; margin-top: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
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
            </div>
            <div class="d-flex align-items-center" style="width: 15%; padding: 10px 10px; margin-top: 10px">
                <img src="{{ asset('image/detail_transaction/delete_icon.png') }}" alt="" style="height: 30px;">
                {{-- a --}}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            show_dashboard_header(1);
            $('#tittle_page').text('Detail Transaction');

            var element = document.getElementById('calendar_bottom');
            element.classList.add('active');
        });
    </script>
@endsection
