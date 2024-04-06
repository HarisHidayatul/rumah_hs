@extends('main')
@section('body')
    @include('login_page.css')
    <div class="d-flex justify-content-center">
        <img class="image_logo" src="{{ asset('image/hs_logo_1.png') }}" alt="">
    </div>
    <div class="container_bottom">
        <h1>Sign in</h1>
        <h2>Please log in into your account</h2>
        <form class="form-horizontal" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Your Email" style="border-radius: 8px;">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="d-flex justify-content-start inputBox">
                    <input type="password" class="form-control" name="password" placeholder="Your Password" id="password" style="border-radius: 8px 0px 0px 8px;">
                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                    <div class="d-flex justify-content-center align-items-center img" style="border-radius: 0px 8px 8px 0px;">
                        <img src="{{ asset('image/login/eyeClose.png') }}" alt="" id="eyeicon">
                    </div>
                </div>
            </div>


            <h3>Forgot password?</h3>
            {{-- <button type="submit" class="btn" style="border-radius: 8px;">Sign in</button> --}}
            <button class="btn" style="border-radius: 8px;">Sign in</button>
            <h2 style="width: 100%; text-align: center;">or</h2>
            <button class="btn d-flex justify-content-center align-items-center" type="submit"
                style="background-color: white; color: #282260; border-radius: 8px;" disabled>
                <img src="{{ asset('image/logo_google.svg') }}" alt="" style="margin-right: 5px;">
                <div>Sign in with Google</div>
            </button>
            <div style="content: ''; height: 50px;"></div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            document.querySelector("meta[name='theme-color']").content = "white";
        });
        let eyeicon = document.getElementById("eyeicon");
        let password = document.getElementById("password");

        eyeicon.addEventListener("click", () => {
            if (password.type == "password") {
                password.type = "text";
                eyeicon.src = "{{ asset('image/login/eyeOpen.png') }}";
            } else {
                password.type = "password";
                eyeicon.src = "{{ asset('image/login/eyeClose.png') }}";

            }
        })
    </script>
@endsection
