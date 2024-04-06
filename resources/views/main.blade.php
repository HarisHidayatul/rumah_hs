<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#282260">
    <link rel="apple-touch-icon" href="{{ asset('image/hs_logo_1.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/hs_logo_1.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <!-- Optional: Bootstrap JavaScript (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Tambahkan link CDN Font Awesome di bawah ini -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Tambahkan Chart.js melalui CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <title>HS Finance</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .container_body {
        content: '';
        max-width: 450px;
        height: 100%;
        width: 100%;
        margin: auto;
        /* padding: 10px; */
        box-sizing: border-box;
        /* background-color: blue; */
    }
</style>

<body>
    <div class="container_body">
        @yield('body')
    </div>
</body>

</html>
