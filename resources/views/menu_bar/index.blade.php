@extends('main')
@section('body')
    @include('menu_bar.css')
    <div id="dashboard_header_1">
        <div class="fixed-top d-flex justify-content-between" style="position: relative; z-index: 2; padding: 5px;">
            <img src="{{ asset('image/menu_bar/menu_icon.svg') }}" alt="" onclick="openMenu()">
            <div></div>
            <div class="d-flex justify-content-start align-items-center">
                <h6>Hi, Syafira!</h6>
                <img src="" alt=""
                    style="height: 40px; width: 40px; border-radius: 40px; background-color:aqua">
            </div>
        </div>
    </div>
    <div id="dashboard_header_2">
        <div class="fixed-top d-flex justify-content-between" style="position: relative; z-index: 2; padding: 5px;">
            <img src="{{ asset('image/menu_bar/back_left.svg') }}" alt=""
                style="margin-left: 10px; margin-top: 10px;">
            <div id="tittle_page" class="tittle_page"></div>
            <div class="d-flex justify-content-start align-items-center">
                <img src="{{ asset('image/menu_bar/gotosetting.svg') }}" alt=""
                    style="height: 20px; width: 20px; border-radius: 40px; margin-right: 5px; margin-top: 10px;">
            </div>
        </div>
    </div>
    <div class="fixed-top d-flex justify-content-center" style="position: relative; z-index: 1; margin-top: -50px;">
        <div style="width: 100%; max-width: 450px;">
            <img src="{{ asset('image/menu_bar/top.svg') }}" alt="" style="width: 100%; max-width: 450px;">
        </div>
    </div>
    <div name="content"
        style="width: 100%; max-width: 450px; position: relative; z-index: 2; margin-top: -75px; padding: 0px 10px;">
        @yield('content')
    </div>
    <!-- Left Docked Modal -->
    <div class="modal fade" id="leftModal" tabindex="-1" role="dialog" aria-labelledby="leftModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <h5 class="modal-title" id="leftModalLabel">Left Docked Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
                <div class="modal_top">
                    <div style="padding: 15px 15px;" class="d-flex justify-content-start">
                        <img src="{{ asset('image/menu_bar/arrow_back.svg') }}" alt="" style="height: 30px;"
                            onclick="backMenu()">
                        <div style="margin-left: 15px;">
                            <img src="" alt=""
                                style="height: 75px; width: 75px; border-radius: 75px; background-color:aqua">
                            <h5>Syafira Salsabillah</h5>
                            <h5>+62 813 5733 2068</h5>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px; margin-left: 20px; margin-bottom: 70px;">
                    <div class="d-flex justify-content-start align-items-center" style="margin-top: 5px;">
                        <img src="{{ asset('image/menu_bar/icon_dashboard.svg') }}" alt="" style="height: 25px;">
                        <h5 style="color: black; margin-left: 7px;">Dashboard</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center" style="margin-top: 5px;">
                        <img src="{{ asset('image/menu_bar/icon_profile.svg') }}" alt="" style="height: 25px;">
                        <h5 style="color: black; margin-left: 7px;">Profile</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center" style="margin-top: 5px;">
                        <img src="{{ asset('image/menu_bar/icon_category.svg') }}" alt="" style="height: 25px;">
                        <h5 style="color: black; margin-left: 7px;">Category</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center" style="margin-top: 5px;">
                        <img src="{{ asset('image/menu_bar/icon_history.svg') }}" alt="" style="height: 25px;">
                        <h5 style="color: black; margin-left: 7px;">History</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center" style="margin-top: 5px;">
                        <img src="{{ asset('image/menu_bar/icon_location.svg') }}" alt="" style="height: 25px;">
                        <h5 style="color: black; margin-left: 7px;">Location</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center" style="margin-top: 5px;">
                        <img src="{{ asset('image/menu_bar/icon_setting.svg') }}" alt="" style="height: 25px;">
                        <h5 style="color: black; margin-left: 7px;">Setting</h5>
                    </div>
                    <div style="content: ''; height: 50px;"></div>
                    <div class="d-flex justify-content-start align-items-center" style="margin-top: 5px;">
                        <img src="{{ asset('image/menu_bar/logout_icon.svg') }}" alt="" style="height: 25px;">
                        <h5 style="color: black; margin-left: 7px;">Log out</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sticky Bottom Modal -->
    <div class="modal fade" id="stickyBottomModal" tabindex="-1" role="dialog" aria-labelledby="stickyBottomModalLabel"
        style="width: 250px; left: 25%; top: 25%;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="padding: 10px 10px; border-radius: 20px;">
                {{-- <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
                <div class="d-flex justify-content-start align-items-center">
                    <img src="{{ asset('image/menu_bar/menu_bottom/income_icon.svg') }}" alt=""
                        style="height: 40px;">
                    <h4>Add Income</h4>
                </div>
                <div style="content: ''; width: 100%; height: 1px; background-color: #282260; margin: 10px 0px;"></div>
                <div class="d-flex justify-content-start align-items-center">
                    <img src="{{ asset('image/menu_bar/menu_bottom/expense_icon.svg') }}" alt=""
                        style="height: 40px;">
                    <h4>Add Expense</h4>
                </div>
            </div>
        </div>
    </div>
    <style>
        .home_bottom {
            /* background-image: url("{{ asset('') }}"); */
            content: url("{{ asset('image/menu_bar/menu_bottom/icon_home.svg') }}");
        }

        .home_bottom.active {
            content: url("{{ asset('image/menu_bar/menu_bottom/icon_home_active.svg') }}")
        }

        .calendar_bottom {
            content: url("{{ asset('image/menu_bar/menu_bottom/icon_calendar.svg') }}");
        }

        .calendar_bottom.active {
            content: url("{{ asset('image/menu_bar/menu_bottom/icon_calendar_active.svg') }}");
        }

        .wallet_bottom {
            content: url("{{ asset('image/menu_bar/menu_bottom/icon_wallet.svg') }}");
        }

        .wallet_bottom.active {
            content: url("{{ asset('image/menu_bar/menu_bottom/icon_wallet_active.svg') }}");
        }

        .user_bottom {
            content: url("{{ asset('image/menu_bar/menu_bottom/icon_user.svg') }}");
        }

        .user_bottom.active {
            content: url("{{ asset('image/menu_bar/menu_bottom/icon_user_active.svg') }}");
        }
    </style>
    <div style="content: ''; height: 1500px;"></div>
    <div class="fixed-bottom d-flex justify-content-center">
        <div style="width: 100%; height: 100%; max-width: 450px; position:relative; overflow:hidden;">
            <div class="fixed-bottom d-flex justify-content-center" style="margin-bottom: 15px;">
                <div class="d-flex justify-content-between"style="width: 92%; max-width: 430px;">
                    <img src="" alt="" class="home_bottom" id="home_bottom">
                    <img src="" alt="" class="calendar_bottom" id="calendar_bottom">
                    <div></div>
                    <img src="" alt="" class="wallet_bottom" id="wallet_bottom">
                    <img src="" alt="" class="user_bottom" id="user_bottom">
                </div>
            </div>

            <div class="fixed-bottom d-flex justify-content-center" style="margin-bottom: 30px;">
                <div class="d-flex justify-content-center"style="width: 92%; max-width: 430px;">
                    <div style="content: ''; width: 60px; height: 60px; border-radius: 60px;" onclick="openAddMenu();">
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
                <img src="{{ asset('image/menu_bar/group_bottom_3.svg') }}" alt=""
                    style="width: 105%; position:absolute;">
            </div>
        </div>
    </div>
    <script>
        function openMenu() {
            $('#leftModal').modal('show');
        }

        function backMenu() {
            $('#leftModal').modal('hide');
        }

        function openAddMenu() {
            $('#stickyBottomModal').modal('show');
        }

        function show_dashboard_header(index) {
            if (index == 0) {
                var element_dashboard_1 = document.getElementById("dashboard_header_1");
                var element_dashboard_2 = document.getElementById("dashboard_header_2");

                element_dashboard_1.style.display = "block";
                element_dashboard_2.style.display = "none";
            }
            if (index == 1) {
                var element_dashboard_1 = document.getElementById("dashboard_header_1");
                var element_dashboard_2 = document.getElementById("dashboard_header_2");

                element_dashboard_1.style.display = "none";
                element_dashboard_2.style.display = "block";
            }
        }
    </script>
@endsection
