<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
  </head>
  <body style="font-family: poppins;">
    <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-light" href="/home">
                    <img src="{{asset ("css/image/nazi.png") }}" alt="logo" width="40" heigth="40" class="me-3">
                    <strong>PT. NAZI</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controll="navbarNav" aria-expended="false" aria-label="toggle-navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto" style="text-transform: capitalize;">
                        <li class="nav-item">
                            <a href="/home" class="nav-link active text-light fs-5" aria-current="page">home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/jabatan" class="nav-link active text-light fs-5" aria-current="page">jabatan</a>
                        </li>
                        <li class="nav-item">
                            <a href="/karyawan" class="nav-link active text-light fs-5" aria-current="page">karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a href="/gaji" class="nav-link active text-light fs-5" aria-current="page">gaji</a>
                        </li>
                        <li class="nav-item">
                            <a href="/laporan" class="nav-link active text-light fs-5" aria-current="page">laporan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- CONTENT -->
        <div class="div container">
            <div class="row m-4">
                <div class="col">
                    @yield("content")
                </div>
            </div>
        </div>

        <!-- JAVA -->
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>