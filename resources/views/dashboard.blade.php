<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>

    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/app.css">
    <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/favicon.svg" type="image/x-icon">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('admin') }}/assets/images/logo/logo.png" alt="Logo"
                                    srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><em class="bi bi-x bi-middle"></em></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="{{ route('index') }}" class='sidebar-link'>
                                <em class="bi bi-grid-fill"></em>
                                <span>Data Mahasiswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{ route('nilai') }}" class='sidebar-link'>
                                <em class="bi bi-pen-fill"></em>
                                <span>Nilai Mahasiswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Graph</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ route('chart.pie') }}">Pie Graph</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('chart.bar') }}">Bar Graph</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('chart.line') }}">Line Graph</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><em data-feather="x"></em></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <em class="bi bi-justify fs-3"></em>
                </a>
            </header>

            <div class="page-heading">
                {{-- <h3>Data Mahasiswa</h3> --}}
            </div>
            <div class="page-content">
                @yield('content')


            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Binus</p>
                    </div>
                    <div class="float-end">
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{ asset('admin') }}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('admin') }}/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="{{ asset('admin') }}/assets/js/pages/dashboard.js"></script>

    <script src="{{ asset('admin') }}/assets/js/main.js"></script>
</body>

</html>
