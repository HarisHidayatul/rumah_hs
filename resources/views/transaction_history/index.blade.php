@extends('menu_bar.index')
@section('content')
    @include('transaction_history.css')
    <div class="float-right">
        <div class="d-flex justify-content-start">
            <select name="month" id="" style="border-radius: 5px 0px 0px 5px; border: 1px solid white; background-color: white;">
                <option value="">January</option>
                <option value="">February</option>
                <option value="">March</option>
                <option value="">April</option>
                <option value="">May</option>
                <option value="">June</option>
                <option value="">July</option>
                <option value="">August</option>
                <option value="">September</option>
                <option value="">October</option>
                <option value="">November</option>
                <option value="">December</option>
            </select>
            <select name="year" id="" style="border-radius: 0px 5px 5px 0px; border: 1px solid white">
                <option value="">2024</option>
                <option value="">2023</option>
                <option value="">2022</option>
                <option value="">2021</option>
                <option value="">2020 </option>
            </select>
        </div>
    </div>
    <div style="content: ''; height: 40px;"></div>
    <div style="background-color: rgba(132, 129, 164, 1); border-radius: 10px 10px 0px 0px; padding-bottom: 10px; font-family: 'Inter';">
        <div class="d-flex justify-content-center" style="color: white; padding: 12px 0px; font-size: 17px;">January</div>
        <div class="d-flex justify-content-between" style="padding: 0px 10px;">
            <div class="text-center">
                <div style="color: #EF8767; font-size: 15px;">Exp</div>
                <div style="color: #B6B5B7; font-size: 17px;">25000</div>
            </div>
            <div class="text-center">
                <div style="color: #EF8767; font-size: 15px;">Bal</div>
                <div style="color: #B6B5B7; font-size: 17px;">25000</div>
            </div>
            <div class="text-center">
                <div style="color: #EF8767; font-size: 15px;">Inc</div>
                <div style="color: #B6B5B7; font-size: 17px;">25000</div>
            </div>
        </div>
    </div>
    <div style="height: 150px;">
        <canvas id="myBarChart" width="400" height="200" style="background-color: rgba(132, 129, 164, 1); padding: 0px 10px;"></canvas>    
    </div>
    <div class="d-flex justify-content-center align-items-center" style="margin-top: 15px;">
        <img src="{{ asset('image/transaction_history/transaction_history_symbol.svg') }}" alt="" style="height: 30px;">
        <div class="trx_history_txt" style="margin-left: 5px;">Transaction History</div>
    </div>
    <div style="width: 100%; height: 5px; margin-top: 5px;" class="d-flex justify-content-center">
        <div style="height: 100%; width: 33%; background-color:#7365FA;"></div>
        <div style="height: 100%; width: 33%; background-color: #5CBFC5;"></div>
        <div style="height: 100%; width: 33%; background-color: #FCAA18;"></div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px;">
        <div style="content: ''; width: 3%; height: 45px; background-color: #7365FA; border-radius: 8px 0px 0px 8px;">
        </div>
        <div class="d-flex justify-content-between align-items-center" style="content: ''; width: 97%; height: 45px; background-color: white; border-radius: 0px 8px 8px 0px;padding: 0px 5px;">
            <div>
                <div class="trx_date_detail">31/01/2024</div>
                <div class="trx_day_detail">Wednesday</div>
            </div>
            <div class="d-flex justify-content-start">
                <div class="trx_val_detail_1">732</div>
                <div class="trx_val_detail_2">.500</div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px;">
        <div style="content: ''; width: 3%; height: 45px; background-color: #5CBFC5; border-radius: 8px 0px 0px 8px;">
        </div>
        <div class="d-flex justify-content-between align-items-center" style="content: ''; width: 97%; height: 45px; background-color: white; border-radius: 0px 8px 8px 0px;padding: 0px 5px;">
            <div>
                <div class="trx_date_detail">31/01/2024</div>
                <div class="trx_day_detail">Wednesday</div>
            </div>
            <div class="d-flex justify-content-start">
                <div class="trx_val_detail_1">732</div>
                <div class="trx_val_detail_2">.500</div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px;">
        <div style="content: ''; width: 3%; height: 45px; background-color: #FCAA18; border-radius: 8px 0px 0px 8px;">
        </div>
        <div class="d-flex justify-content-between align-items-center" style="content: ''; width: 97%; height: 45px; background-color: white; border-radius: 0px 8px 8px 0px;padding: 0px 5px;">
            <div>
                <div class="trx_date_detail">31/01/2024</div>
                <div class="trx_day_detail">Wednesday</div>
            </div>
            <div class="d-flex justify-content-start">
                <div class="trx_val_detail_1">732</div>
                <div class="trx_val_detail_2">.500</div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px;">
        <div style="content: ''; width: 3%; height: 45px; background-color: #7365FA; border-radius: 8px 0px 0px 8px;">
        </div>
        <div class="d-flex justify-content-between align-items-center" style="content: ''; width: 97%; height: 45px; background-color: white; border-radius: 0px 8px 8px 0px;padding: 0px 5px;">
            <div>
                <div class="trx_date_detail">31/01/2024</div>
                <div class="trx_day_detail">Wednesday</div>
            </div>
            <div class="d-flex justify-content-start">
                <div class="trx_val_detail_1">732</div>
                <div class="trx_val_detail_2">.500</div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px;">
        <div style="content: ''; width: 3%; height: 45px; background-color: #5CBFC5; border-radius: 8px 0px 0px 8px;">
        </div>
        <div class="d-flex justify-content-between align-items-center" style="content: ''; width: 97%; height: 45px; background-color: white; border-radius: 0px 8px 8px 0px;padding: 0px 5px;">
            <div>
                <div class="trx_date_detail">31/01/2024</div>
                <div class="trx_day_detail">Wednesday</div>
            </div>
            <div class="d-flex justify-content-start">
                <div class="trx_val_detail_1">732</div>
                <div class="trx_val_detail_2">.500</div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px;">
        <div style="content: ''; width: 3%; height: 45px; background-color: #FCAA18; border-radius: 8px 0px 0px 8px;">
        </div>
        <div class="d-flex justify-content-between align-items-center" style="content: ''; width: 97%; height: 45px; background-color: white; border-radius: 0px 8px 8px 0px;padding: 0px 5px;">
            <div>
                <div class="trx_date_detail">31/01/2024</div>
                <div class="trx_day_detail">Wednesday</div>
            </div>
            <div class="d-flex justify-content-start">
                <div class="trx_val_detail_1">732</div>
                <div class="trx_val_detail_2">.500</div>
            </div>
        </div>
    </div>
    <script>
        // Data untuk grafik
        var data = {
            labels: [
                '1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
                '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',
                '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'
            ],
            datasets: [{
                label: 'Pengeluaran',
                backgroundColor: 'rgba(40, 34, 96, 1)', // Ganti warna latar belakang sesuai keinginan Anda
                borderColor: 'rgba(40, 34, 96, 1)',
                borderWidth: 1,
                borderRadius: 5, // Menambahkan border radius
                data: ['100500', '200000', '350000',
                    '150000', '450000', '600000',
                    '250000', '550000', '700000',
                    '120000', '300000', '500000',
                    '180000', '400000', '650000',
                    '300000', '480000', '720000',
                    '200000', '420000', '700000',
                    '220000', '380000', '600000',
                    '180000', '320000', '550000',
                    '130000', '280000', '450000'
                ] // Data nilai untuk setiap bar
            }]
        };

        // Konfigurasi grafik
        var options = {
            scales: {
                y: {
                    display: false,
                    beginAtZero: true,
                    title: {
                        display: false
                    }
                },
                x: {
                    title: {
                        display: true
                    },
                    ticks: {
                        font: {
                            family: 'Inter', // Ganti dengan font family yang diinginkan
                            size: 10, // Ganti dengan font size yang diinginkan
                            weight: '400', // Ganti dengan font weight yang diinginkan
                            color: 'white' // Ganti dengan warna font yang diinginkan
                        },
                        color: 'white',
                        maxRotation: 0, // Menonaktifkan rotasi teks
                        minRotation: 0 // Menonaktifkan rotasi teks
                    }
                }
            },
            // Menyembunyikan legend
            legend: {
                display: false
            },
            plugins: {
                legend: {
                    display: false,
                }
            },
            // Menyembunyikan judul di bagian atas
            maintainAspectRatio: false
        };

        // Buat bar chart
        var ctx = document.getElementById('myBarChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
    <script>
        $(document).ready(function() {
            show_dashboard_header(1);
            $('#tittle_page').text('Transaction History');

            var element = document.getElementById('calendar_bottom');
            element.classList.add('active');
        });
    </script>
@endsection
