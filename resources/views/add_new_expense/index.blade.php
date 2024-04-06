@extends('menu_bar.index')
@section('content')
    @include('add_new_expense.css')
    <div class="d-flex justify-content-center">
        <div style="width: 400px; background-color: white; padding: 7px; border-radius: 7px;">
            <div>
                <div class="d-flex justify-content-between">
                    <div style="width: 50%; height: 30px; display: flex; align-items: center; justify-content: center; background-color: #D9D9D9; border-radius: 15px 0px 0px 15px;">Income</div>
                    <div style="width: 50%;">
                        <div style="height: 30px; display: flex; align-items: center; justify-content: center; background-color: #282260; color: white; border-radius: 0px 15px 15px 0px;">
                            <div>Expense</div>
                            <img src="{{ asset('image/add_new_expense/arrow_bottom.svg') }}" alt="" style="margin-left: 30px;">
                        </div>
                        <div style="position: absolute; background-color: white; width: 42%; border-radius: 0px 0px 10px 10px;">
                            <div class="txt_selection_package">Non Package</div>
                            <div class="txt_selection_package active">Package</div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="date" style="width: 100%;">
        </div>
    </div>
    <script>
        $(document).ready(function() {
            show_dashboard_header(1);
            $('#tittle_page').text('Add New Expense');

            var element = document.getElementById('home_bottom');
            element.classList.add('active');
        });
    </script>
@endsection
