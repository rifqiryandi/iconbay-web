<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'AdminLTE 3 | Blank Page')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}" />
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    {{-- <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/jquery.colorpicker.bygiro.css') }}">
    --}}
    <style>
        .main-sidebar {
            background-color: #0D1629
        }

        .content-wrapper {
            background-color: #0D1629
        }

        .card {
            width: 112px;
            height: 112px;
            left: 0px;
            top: 0px;

            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 32px;

            background: #252D3E;
            border-radius: 8px;

            flex: none;
            order: 0;
            align-self: stretch;
            flex-grow: 0;
            margin: 8px 0px;
        }

        button {
            position: static;
            width: 112px;
            left: 5px;
            /* bottom: 100px; */
            /* top: 6px; */
            text-align: center;
            opacity: 0;
            border-radius: 8px;
            transition: opacity .35s ease;
        }

        .card:hover button {
            opacity: 1;
        }

        .card:hover {
            position: static;
            width: 112px;
            height: 136px;
            left: 0px;
            top: -20px;
            background: #30A2FF;
            box-shadow: 0px 8px 24px 12px rgba(48, 162, 255, 0.3);
            border-radius: 8px;

        }

        button .btnCopy {
            position: static;
            width: 79px;
            height: 24px;
            left: 16.5px;
            top: 6px;

            font-family: 'Rubik';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 12px;

            /* identical to box height, or 100% */
            text-align: center;

            /* base/white/100% */
            color: #FFFFFF;
            background: #30A2FF;

            flex: none;
            order: 0;
            flex-grow: 0;
            margin: 6px 100px;
        }

        .logo-search {
            position: absolute;
            left: 4.33%;
            right: 7.03%;
            top: 21.33%;
            bottom: 1.03%;

        }

    </style>
    @stack('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-navy">
            <!-- Left navbar links -->
            <ul class="navbar-nav">

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('line') }}" class="nav-link active"
                        style="font-family: Rubik;font-size: 14px">ICON</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px">3D ICON
                        <span class="badge badge-soon" style="font-family: Rubik;font-size: 14px">SOON</span>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px">LICENSE</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px">ABOUT</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px">FAQ</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px">GIVE FEEDBACK</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link btn-iconbay" id="btnDownload">
                        {{-- <button id="btnDownload" class="btn-text"><p>DOWNLOAD ALL</p></button> --}}
                        DOWNLOAD ALL
                    </a>
                </li>
                <li class="ornament-blue">

                </li>
            </ul>
        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ asset('') }}assets/index3.html" class="brand-link">
                <img src="{{ asset('image/icon_bay.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-light" style="font-family: Rubik;font-size: 20px;letter-spacing: 0.1em;line-height: 24px;color: #FFFFFF;margin: 0px 15px;">ICONBAY</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header" style="font-family: Rubik;font-size: 12px">TYPE</li>

                        <li class="nav-item">
                            <a href="{{ url('line') }}" class="nav-link line {{ Request::is('line') ? 'active' : '' }}">
                                <i class="float-right">
                                    <img src="{{ asset('image/line.svg') }}" alt="" id="ll_color">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    lIGHT
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('line-color') }}"
                                class="nav-link line_color {{ Request::is('line-color') ? 'active' : '' }}">
                                <i class="float-right">
                                    <img src="{{ asset('image/line color.svg') }}" alt="" id="ll_color">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    BROKEN
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('solid') }}" class="nav-link {{ Request::is('solid') ? 'active' : '' }}"
                                id="solid">
                                <i class="float-right">
                                    <img src="{{ asset('image/solid.svg') }}" alt="" id="ll_color"
                                        class="img-rounded-sm">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    BOLD
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('solid-color') }}"
                                class="nav-link {{ Request::is('solid-color') ? 'active' : '' }}" id="solid_color">
                                <i class="float-right">
                                    <img src="{{ asset('image/solid color.svg') }}" alt="" id="ll_color">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    BULK
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('multi') }}" class="nav-link {{ Request::is('multi') ? 'active' : '' }}"
                                id="multi_color">
                                <i class="float-right">
                                    <img src="{{ asset('image/multi color.svg') }}" alt="" id="ll_color">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    TWO TONES
                                </p>
                            </a>
                        </li>

                        <div id="tab_size">
                            <li class="nav-header" style="font-family: Rubik;font-size: 12px">SIZE (PX)</li>
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <div class="btn-group">
                                        <input label="16" type="radio" id="option16" name="size" value="16" checked>
                                        <input label="24" type="radio" id="option24" name="size" value="24">
                                        <input label="32" type="radio" id="option32" name="size" value="32">
                                        <input label="48" type="radio" id="option48" name="size" value="48">
                                        <input label="64" type="radio" id="option64" name="size" value="64">
                                        <input label="96" type="radio" id="option96" name="size" value="96">
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                        <div id="tab_stroke">
                            <li class="nav-header" style="font-family: Rubik;font-size: 12px">STROKE (PX)</li>
                            <div class="col-12">
                                <div class="row">
                                    {{-- <div class="col-1"></div> --}}
                                    <div class="col-10">
                                        <div class="btn-group1">
                                            <input label="0.5" type="radio" id="option05" name="stroke" value="0.5"
                                                checked>
                                            <input label="1" type="radio" id="option1" name="stroke" value="1">
                                            <input label="1.5" type="radio" id="option15" name="stroke" value="1.5">
                                            <input label="2" type="radio" id="option2" name="stroke" value="2">
                                            <input label="2.5" type="radio" id="option25" name="stroke" value="2.5">
                                            <input label="3" type="radio" id="option3" name="stroke" value="3">
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div>
                            <li class="nav-header" style="font-family: Rubik;font-size: 12px">COLORS</li>
                            <div id="one">
                                <div class="input-group my-colorpicker2">
                                    <span class="input-color">
                                        <input type="text" class="input-pv-color" style="color: rgba(255, 255, 255, 0.7);font-family: 'Rubik';
                                font-style: normal;
                                font-weight: 400;
                                font-size: 14px;
                                line-height: 16px;">
                                        <label class="input-label">#FFFFFF</label>
                                    </span>
                                </div>
                            </div>

                            {{-- <div id="two">
                                <div class="input-group my-colorpicker2">
                                    <span class="input-color">
                                        <input type="text" class="input-pv-color" style="color: rgba(255, 255, 255, 0.7);font-family: 'Rubik';
                                font-style: normal;
                                font-weight: 400;
                                font-size: 14px;
                                line-height: 16px;">
                                        <label class="input-label">Contoh</label>
                                    </span>
                                </div>
                            </div>

                            <div id="three">
                                <div class="input-group my-colorpicker2">
                                    <span class="input-color">
                                        <input type="text" class="input-pv-color" style="color: rgba(255, 255, 255, 0.7);font-family: 'Rubik';
                                font-style: normal;
                                font-weight: 400;
                                font-size: 14px;
                                line-height: 16px;">
                                        <label class="input-label">Contoh</label>
                                    </span>
                                </div>
                            </div> --}}

                            {{-- <br>
                <div id="two">
                    <div class="input-group my-colorpicker2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-square-full"></i></span>
                          </div>
                        <input type="text" class="form-control my-colorpicker2" id="colorOutline">
                    </div>
                </div>

                <br>
                <div id="three">
                    <div class="input-group my-colorpicker2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-square p2"></i></span>
                          </div>
                        <input type="text" class="form-control my-colorpicker2" id="colorOutline">
                    </div>
                </div> --}}
                        </div>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

            </section>

            <!-- Main content -->
            <section class="content">

                <p class="header-text">Everyone Icons</p>
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="search" name="filter" id="filter" class="form-search"
                                        placeholder="      Search 2271 icons in Line">
                                    <img src="{{ asset('image/paint.png') }}" alt="" class="back-icon">
                                    <img src="{{ asset('image/search.png') }}" alt="" class="logo-search">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">

                                    <select name="kategori" id="kategori" data-show-content="true" class="form-select"
                                        data-live-search="true">
                                        <option selected>All Categories</option>
                                        <option >Business</option>

                                        {{-- $@foreach ($kat as $k)
                                    <option
                                        data-content="<span class='badge badge-warning mt-1 ml-2 float-right'>{{ $k->gambar_count }}</span>
                                        {{ $k->nama }}"
                                        value="{{ $k->id }}">
                                        </option>
                                        @endforeach --}}

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="garis">

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @foreach ($data as $d)
                            <div class="col-sm-1">
                                <div class="card text-center">

                                    {{-- <div class="card-header">
                                    <button class="btn btn-primary btn-xs btnCopy">Tap to Copy</button>
                                    </div> --}}
                                    <div class="card-body">
                                        {{-- <div class="button"><a href="#"> --}}
                                            <button class="btn btnCopy">Tap to Copy</button>
                                        {{-- </a></div> --}}
                                        <x-svg name="{{ $d->nama }}" class="card__image" />
                                    </div>
                                    {{-- <h5 class="card-title text-center">{{ $d->nama }}</h5> --}}
                                </div>
                                <p class="header-title">{{ $d->nama }}</p>
                            </div>
                            {{-- <ul class="row row-cols-3 row-cols-sm-12 row-cols-lg-6 row-cols-xl-8 list-unstyled list">
                        <li class="col img-cont" data-tags="numbers" data-categories="typography">
                            <a class="d-block text-dark text-decoration-none" href="#">
                                <div class="m-5 svg_data">
                                    <x-svg name="{{ $d->nama }}"/>
                            <div class="name text-muted mt-3 ml-2 col">{{ $d->nama }}</div>
                            <div class="overlay"></div>
                            <div class="button"><a href="#">
                                    <button class="btn btn-info btn-xs btnCopy">Tap to Copy</button>
                                </a></div>
                        </div>

                        </a></li>
                        </ul> --}}
                        @endforeach
                    </div>
                </div>
        </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {{-- @include('layouts.components.footer') --}}
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/jquery.colorpicker.bygiro.js') }}"></script> --}}
    <script src="{{ asset('assets/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2@11.js') }}"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}">
    </script>
    <script>
        $(function () {
            var clipboard = new ClipboardJS('.btnCopy');
            // $('#two').hide();
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function (event) {
                $('.my-colorpicker2 .p').css('color', event.color.toString());
                $('.my-colorpicker2 .p1').css('color', event.color.toString());
                $('.my-colorpicker2 .p2').css('color', event.color.toString());
            });

            $('#btnDownload').click(function (e) {
                e.preventDefault();

                console.log('download');
            })


            let size = $('input[name="size"]:checked').val();
            let sizeid;
            let stroke = $('input[name="stroke"]:checked').val();
            let strokeid;

            $('.card-body').children('svg').each(function () {
                let svg = $(this).find("path, style")
                // console.log(svg);
                $('.my-colorpicker2').change(function () {
                    let color = $(this).val()
                    // svg.attr("fill", ''+color+'')
                    // console.log(color);
                })
            });


            let svg = document.getElementsByTagName("svg");
            $.each(svg, function (index, value) {
                let svgnew = document.getElementsByTagName("svg")[index];
                console.log(svgnew);
                $('input[name="size"]').change(function () {
                    sizeid = $(this).val();
                    console.log(sizeid);
                    svgnew.setAttribute("width", sizeid + "px")
                    svgnew.setAttribute("height", sizeid + "px")
                });

                $('.btnCopy').click(function () {
                    var $this = $(this);
                    var originalText = $this.text();
                    $this.text('Copied');
                    navigator.clipboard.writeText(svgnew.outerHTML)
                    setTimeout(function () {
                        $this.text(originalText)
                    }, 3000);
                })
            });

            // $('.line').click(function(){
            //     $('#one').show()
            //     $('#two').hide()
            //     // $('#threeC').hide()
            // })

            $('.line_color').on('click', function () {
                $('#one').show();
                $('#two').show('slow');
                // $('div#threeC').hide()
            })

        })

    </script>
    @stack('js')
</body>

</html>
