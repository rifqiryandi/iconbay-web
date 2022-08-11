<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'ICONBAY - Broken')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}" />
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    {{-- <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/jquery.colorpicker.bygiro.css') }}"> --}}
    <style>
        .main-sidebar {
            background-color: #0D1629;
        }

        .content-wrapper {
            background-color: #0D1629
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            /* width: 12.5%; */
            padding: 10px 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0px -25px 0px 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column-filter {
            float: left;
            width: 40%;
            display: inline;
            align-content: flex-start;
            /* padding: 10px; */
            /* height: 300px; Should be removed. Only for demonstration */
        }

        .row-filter{
            margin: 0px -5px 0px 25px;
        }

        /* Clear floats after the columns */
        .row-filter:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 80%;
                height: 160px;
                display: block;
                padding: 0%;
                margin-bottom: 20px;
            }

            .column-filter {
                width: 100%;
            }
        }

        @media screen and (min-width: 480px) {
            .inputt-search {
                width: 100%;
            }

            .header-title {
                margin: 2px;
            }
        }

        .header-title {
            width: 65%;
            max-width: 110px;
            min-width: 90px;
        }

        .form-groupp i {
            position: absolute;
            color: #FFFFFF;
            top: 9.8rem;
            left: 16.8rem;
        }

        .iconn {
            padding: 2px;
            min-width: 40px;
        }

        /* Style the counter cards */
        .card {
            aspect-ratio: 1 / 1;
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            /* min-width: 0; */
            word-wrap: break-word;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            min-width: 90px;
            height: 67.5%;
            min-height: 90px;
            padding: 5px;
            background-color: #252D3E;
            /* background-clip: border-box; */
            /* border: 0 solid rgba(0, 0, 0, .125); */
            border-radius: .25rem;

        }

        .card::after {
            content: '';
            aspect-ratio: 1 / 1;

        }

        .card:hover {
            position: static;
            height: 67.5%;
            left: 0px;
            background: #30A2FF;
            box-shadow: 0px 8px 24px 12px rgba(48, 162, 255, 0.3);
            /* border-radius: 8px; */
            border-top-left-radius: 0%;
            border-top-right-radius: 0%;
            border-bottom-left-radius: .25rem;
            border-bottom-right-radius: .25rem;
        }

        /* .icon {
            width: 100%;
        } */


        */ .inputt-search {
            /* display: block; */
            background: #252D3E;
            border-radius: 8px;
            color: #FFFFFF;

            position: static;
            /* width: 25rem; */
            height: 48px;
            left: 44px;
            top: 0px;
            border: 0px solid #30A2FF;
            padding-left: 35px;

            font-family: 'Rubik';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 16px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }

        .input-new {
            background: #252D3E;
            border-radius: 8px;
            color: #FFFFFF;
            border: 0px solid #30A2FF;
            height: 48px;
            top: 0px;
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 16px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));

        }

        .input-new:focus {
            /* outline: 1px 1px 1px 1px solid #30A2FF; */
            background: #252D3E;
            border-radius: 8px;
            color: #FFFFFF;
        }

        .icon-new {
            border: 0px solid #30A2FF;
            background: #252D3E;
            border-radius: 8px;
            color: #FFFFFF;
        }

        .inputt-search:focus {
            outline: 1px solid #30A2FF;
        }

        .btn-group {
            background: #252D3E;
            border-radius: 8px;
        }

        .btn-group input {
            background: #252D3E;
            border-radius: 8px;
            width: 40px;
            height: 24px;
            text-align: center;
            padding: 2px;
        }

        .dropdown-menu{
            margin-top: 4%;
            margin-left: -7%;
            width: 238px;
            height: auto;
            background: #252D3E;
            border-radius: 8px;
        }

        .dropdown-item{
            color: #FFF;
            height: 44px;
            padding: 4%;
        }

        .dropdown-item:hover{
            background: rgba(48, 162, 255, 0.2);
            color: #FFF;
        }

        .dropdown-toggle{
            width: 100%;
            text-align: left;
        }
        .dropdown-toggle::after{
            position: relative;
            left:70px;
            display: none;
        }


        /* .btn-group1 {
            width: 120%;
            max-width: 208px;

        } */
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
                    <a href="{{ url('light') }}" class="nav-link active"
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
                    <a href="#" class="nav-link"
                        style="font-family: Rubik;font-size: 14px; z-index: 1;">LICENSE</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px; z-index: 1;">ABOUT</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px; z-index: 1;">FAQ</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px; z-index: 1;">GIVE
                        FEEDBACK</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block" style="width: 158px;min-width: 155px;">
                    <a href="#" class="nav-link btn-iconbay" id="btnDownload" style="font-family: 'Rubik';
                        font-style: normal;
                        font-weight: 500;
                        font-size: 14px;text-transform: uppercase;letter-spacing: 0.1em;padding-left: 12%;">
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
                <img src="{{ asset('image/icon_bay.png') }}" alt="AdminLTE Logo" class="brand-image"
                    style="opacity: .8">
                <span class="brand-text font-weight-light"
                    style="font-family: Rubik;font-size: 20px;letter-spacing: 0.1em;line-height: 24px;color: #FFFFFF;margin: 0px 15px;">ICONBAY</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-header" style="font-family: Rubik;font-size: 12px">TYPE</li>

                        <li class="nav-item">
                            <a href="{{ url('light') }}"
                                class="nav-link line {{ Request::is('light') ? 'active' : '' }}">
                                <i class="float-right">
                                    <img src="{{ asset('image/Light.svg') }}" alt="" id="ll_color"
                                        class="sidebar-icon">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    LIGHT
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('broken') }}"
                                class="nav-link line_color {{ Request::is('broken') ? 'active' : '' }}">
                                <i class="float-right">
                                    <img src="{{ asset('image/Broken.svg') }}" alt="" id="ll_color">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    BROKEN
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('bold') }}" class="nav-link {{ Request::is('bold') ? 'active' : '' }}"
                                id="solid">
                                <i class="float-right">
                                    <img src="{{ asset('image/Bold.svg') }}" alt="" id="ll_color"
                                        class="img-rounded-sm">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    BOLD
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('bulk') }}"
                                class="nav-link {{ Request::is('bulk') ? 'active' : '' }}" id="solid_color">
                                <i class="float-right">
                                    <img src="{{ asset('image/Bulk.svg') }}" alt="" id="ll_color">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    BULK
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('twotones') }}"
                                class="nav-link {{ Request::is('twotones') ? 'active' : '' }}" id="multi_color">
                                <i class="float-right">
                                    <img src="{{ asset('image/Two Tones.svg') }}" alt="" id="ll_color">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    TWO TONES
                                </p>
                            </a>
                        </li>

                        <li class="nav-header"
                            style="font-family: Rubik;font-size: 12px; padding-left: 2%;padding-top: 15%;">SIZE (PX)
                        </li>
                        <div class="btn-toolbar" style="margin-left: 15px; width: 95%; max-width: 190px;"
                            role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <input label="16" type="radio" id="option16" name="size" value="16">
                                <input label="24" type="radio" id="option24" name="size" value="24">
                                <input label="32" type="radio" id="option32" name="size" value="32">
                                <input label="48" type="radio" id="option48" name="size" value="48">
                                <input label="64" type="radio" id="option64" name="size" value="64"
                                    checked>
                            </div>
                        </div>

                        <li class="nav-header"
                            style="font-family: Rubik;font-size: 12px; padding-left: 2%;padding-top: 2%;">
                            STROKE
                            (PX)</li>
                        <div class="btn-toolbar" style="margin-left: 15px;width: 95%;max-width: 190px;"
                            role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group"aria-label="First group">
                                <input label="0.5" type="radio" id="option05" name="stroke" value="0.5">
                                <input label="1" type="radio" id="option1" name="stroke" value="1">
                                <input label="1.5" type="radio" id="option15" name="stroke" value="1.5">
                                <input label="2" type="radio" id="option2" name="stroke" value="2"
                                    checked>
                                <input label="2.5" type="radio" id="option25" name="stroke" value="2.5">
                            </div>
                        </div>
                        <div>
                            <li class="nav-header"
                                style="font-family: Rubik;font-size: 12px;padding-left: 2%;padding-top: 2%;">COLORS
                            </li>
                            <div id="one" style="max-width: 190px;">
                                <div class="input-group " style="max-width: 190px;">
                                    <span class="input-color">
                                        <input type="text" class="input-pv-color clr2"
                                            style="color: #FFF;font-family: 'Rubik';
                                        font-style: normal;
                                        font-size: 0px;"
                                            id="utama">
                                        {{-- <input type="text" id="input-label" class="input-group m-2"> --}}
                                        <label class="input-label " id="l_utama">#FFFFFF</label>
                                    </span>
                                </div>
                                <div class="my-colorpicker2"></div>
                            </div>
                        </div>
                    </ul>
                    <p class="text-center text-light"
                        style="padding-top: 25%;font-family: 'Rubik';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 14px;
                        line-height: 20px;">
                        SUANGARX V1 © 2021 SUB1</p>
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
                <p class="header-text" style="margin: 0px -5px 10px 25px;">Everyone Icons</p>
                <img src="{{ asset('image/paint.png') }}" alt="" class="back-icon">
                <div class="row-filter">
                    <div class="column-filter">
                        <div class="input-group mb-3 focus-new">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-new" id="basic-addon1"><i
                                        class="fas fa-search "></i>
                                </span>
                            </div>
                            <input type="text" onclick="focus(this)" name="filter" id="filter" data-val="all"
                                class="form-control input-new" placeholder="Search {{ $countarr[0] }} icons in Broken"
                                aria-label="Search" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="column-filter">
                        <div class="dropdown form-controll" style="margin-left: -10%;width: 238px;">
                            <button class="btn btn-secondary dropdown-toggle change" style="background: none; border-color: #252D3E;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Categories </button><img src="{{ asset('image/arrowdown.png') }}" style="position: relative; right: 10px;" id="img-change">

                            @php
                                $jmlh = count($kat);
                            @endphp
                            <div class="dropdown-menu" data-count="{{$jmlh}}" aria-labelledby="dropdownMenuButton">
                                @php
                                    $i = 0;
                                @endphp
                                <a class="dropdown-item d-flex" id="filterr{{$i}}" href="#" data-val="all"><p style="width: 100%;padding-top: 1%" id="flnama{{ $i }}">All Categories</p><span class="badge" id="badge{{$i}}"
                                    style="background: rgba(48, 162, 255, 0.2);
                                    border-radius: 50px;color: #30A2FF;width: 56px;
                                    height: 28px;padding: 8px 12px;">{{$countarr[0]}}</span></a>
                                @foreach ($kat as $k)
                                @php
                                    $i++
                                @endphp
                                <a class="dropdown-item d-flex" id="filterr{{$i}}" href="#" data-val="{{ $k->id }}"><p style="width: 100%;padding-top: 1%" id="flnama{{ $i }}">{{ $k->nama }}</p><span class="badge" id="badge{{$i}}" style="background: rgba(48, 162, 255, 0.2);
                                    border-radius: 50px;color: #30A2FF;width: 56px;
                                    height: 28px;padding: 8px 12px;">{{$countarr[$i]}}</span></a>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="form-group" >
                            <select name="" id="filterr" class="form-controll">
                                <option selected value="all">All Categories</option>
                                @foreach ($kat as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                    </div>
                </div>

                <hr class="garis">
                <div class="container"></div>
                <div class="row">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($data as $d)
                        <div class="column {{ $d->kategori_id }}">
                            <div class="btn-group-vertical here">
                                <a type="submit" class="btnCopy"
                                    style="width: 100%;
                                    background-color: #30A2FF;
                                    height: 20px;
                                    font-family: 'Rubik';
                                    font-style: normal;
                                    font-weight: 400;
                                    font-size: 12px;
                                    border-top-left-radius: .25rem;
                                    border-top-right-radius: .25rem;
                                    opacity:0;
                                    color: #FFF;
                                    outline: none;
                                    outline-width: 0px;
                                    border-color: #30A2FF;"
                                    id="btn{{ $i }}" data-idbtn="{{ $i }}">
                                    <p style="padding: 5px" class="text-change{{$i}}">TAP TO COPY</p>
                                </a>
                                <div class="card" id="card{{ $i }}">
                                    <x-svg name="{{ explode('.svg', $d->filepath)[0] }}" class="card__image"
                                        id="a1" />
                                </div>
                                <p class="header-title">{{ $d->nama }}</p>
                            </div>
                        </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </div>

            </section>

        </div>

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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.0.0/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js">
        </script>
        <script>
            $(function() {
                $('.my-colorpicker2').colorpicker({
                        format: 'hex',
                        inline: true,
                        container: true,
                        template: '<div class="colorpicker cp2">' +
                            '<div class="colorpicker-saturation"><i class="colorpicker-guide"></i></div>' +
                            '<div class="colorpicker-hue"><i class="colorpicker-guide"></i></div>' +
                            '<div class="colorpicker-alpha">' +
                            '   <div class="colorpicker-alpha-color"></div>' +
                            '   <i class="colorpicker-guide"></i>' +
                            '</div>' +
                            '<div class="colorpicker-bar">' +
                            '   <div class="input-group">' +
                            '       <input class="form-control input-block color-io" />' +
                            '   </div>' +
                            '</div>' +
                            '</div>'
                    })
                    .on('colorpickerCreate', function(e) {
                        // initialize the input on colorpicker creation
                        var io = e.colorpicker.element.find('.color-io');

                        io.val(e.color.string());

                        io.on('change keyup', function() {
                            color = io.val()
                            $('#l_utama').text(color).trigger("fnLabelChanged", color);
                            $('#utama').css('background-color', color)
                            $('#utama').css("color", color)
                            e.colorpicker.setValue(io.val());
                        });
                    })
                    .on('colorpickerChange', function(e) {
                        var io = e.colorpicker.element.find('.color-io');

                        if (e.value === io.val() || !e.color || !e.color.isValid()) {
                            // do not replace the input value if the color is invalid or equals
                            return;
                        }
                        color = io.val()
                        $('#l_utama').text(color).trigger("fnLabelChanged", color);
                        $('#utama').css('background-color', color)
                        $('#utama').css("color", color)
                        io.val(e.color.string());
                    });
                $('.cp2').hide();
            });
            $(function() {
                var clipboard = new ClipboardJS('.btnCopy');


                $('#filter').on('focus', function() {
                    $('.focus-new').css({
                        'border-color': '#30A2FF #30A2FF #30A2FF #30A2FF',
                        'border-style': 'solid solid solid solid',
                        'border-width': '1px 1px 1px 1px',
                        'border-radius': '8px'
                    });
                    let id = $('#filter').attr('data-val')
                    if (id == 'all') {
                        $('.column').show();
                        return;
                    } else {
                        $('.column').hide();
                    }
                    $('.' + id).show();
                })

                $('#filter').on('focusout', function() {
                    $('.focus-new').css({
                        'border-color': '#30A2FF #30A2FF #30A2FF #30A2FF',
                        'border-style': 'solid solid solid solid',
                        'border-width': '0px 0px 0px 0px',
                        'border-radius': '8px'
                    });
                    let id = $('#filter').attr('data-val')
                    if (id == 'all') {
                        $('.column').show();
                        return;
                    } else {
                        $('.column').hide();
                    }
                    $('.' + id).show();
                })

                $('.clr2').on('click', function() {
                    if ($('.cp2').is(":visible")) {
                        $('.cp2').hide();

                    } else {
                        $('.cp2').show();

                    }
                })

                $('#btnDownload').click(function(e) {
                    e.preventDefault();
                    var zip = new JSZip();
                    // window.location = window.location.origin+'/api/image/download3/'
                    [].forEach.call($('.card > svg'), function(svg) {
                        var fileName = $(svg).attr('names') + '.svg';
                        addSVGToZip(zip, $(svg), fileName);
                    });
                    zip.generateAsync({
                            type: "blob"
                        })
                        .then(function(content) {
                            // see FileSaver.js
                            saveAs(content, "IconLineColor.zip");
                        });
                })

                function addSVGToZip(zip, element, fileName) {
                    var svg = $(element);
                    var svgString;
                    if (window.ActiveXObject) {
                        svgString = svg.xml;
                    } else {
                        var oSerializer = new XMLSerializer();
                        svgString = oSerializer.serializeToString(svg[0]);
                    }
                    var img = zip.folder("images");
                    img.file(fileName, svgString);
                }
                let size = $('input[name="size"]:checked').val();
                let sizeid;
                let stroke = $('input[name="stroke"]:checked').val();
                let strokeid;
                let svg = document.getElementsByTagName("svg");

                $.each(svg, function(index, value) {
                    let svgnew = document.getElementsByTagName("svg")[index];
                    svgnew.setAttribute('id', index);
                    svgnew.setAttribute('names', $('.header-title')[index].textContent)
                    var path = document.getElementById('' + index + '').querySelectorAll(
                        'path, line, polyline, g, circle, polygon, rect, ellipse');
                    let utama, kedua, ketiga, second, first, pertama;
                    let newsize = 0.75;

                    // console.log(path);
                    if (path[2] == undefined && path[1] == undefined) {
                        pertama = path[0].id = path[0].id + svgnew.id;
                    } else if (path[2] == undefined) {
                        first = path[1].id = path[1].id + svgnew.id;
                        second = path[0].id = path[0].id + svgnew.id;
                    } else {
                        utama = path[2].id = path[2].id + svgnew.id;
                        kedua = path[1].id = path[1].id + svgnew.id;
                        ketiga = path[0].id = path[0].id + svgnew.id;
                    }
                    // console.log(utama + 'a');
                    // console.log(first + 'b');
                    console.log(path);

                    svgnew.setAttribute("width", "64")
                    svgnew.setAttribute("height", "64")
                    $('#' + kedua).css("stroke-width", '0px')
                    $('#' + ketiga).css("stroke-width", '0px')
                    $('#' + second).css("stroke-width", '0px')

                    $('#' + second).css("stroke", "#FFF")
                    $('#' + kedua).css("stroke", "#FFF")
                    $('#' + pertama).css("stroke", "#FFF")
                    $('#' + utama).css("stroke", "#FFF")
                    $('#' + first).css("stroke", "#FFF")

                    $('#' + ketiga).css("fill", "#FFF")
                    $('#' + first).css("fill", "#FFF")

                    $('#' + utama).css("stroke-width", newsize + 'px')
                    $('#' + first).css("stroke-width", newsize + 'px')
                    // $('#' + pertama).css("stroke-width", newsize + 'px')

                    $('input[name="size"]').change(function() {
                        sizeid = $(this).val();
                        svgnew.setAttribute("width", sizeid + "px")
                        svgnew.setAttribute("height", sizeid + "px")
                    });
                    $('#card' + index).mouseover(function() {
                        $('#btn' + index).css('opacity', '1')
                        $('#card' + index).css('position', 'static')
                        $('#card' + index).css('height', '67.5%')
                        $('#card' + index).css('left', '0px')
                        $('#card' + index).css('background', '#30A2FF')
                        $('#card' + index).css('box-shadow',
                            "0px 8px 24px 12px rgba(48, 162, 255, 0.3)")
                        $('#card' + index).css('border-top-left-radius', '0%')
                        $('#card' + index).css('border-top-right-radius', '0%')
                        $('#card' + index).css('border-bottom-left-radius', '.25rem')
                        $('#card' + index).css('border-bottom-right-radius', '.25rem')
                    })
                    $('#card' + index).mouseout(function() {
                        $('#btn' + index).css('opacity', '0')
                        $('#card' + index).css('background-color', '#252D3E')
                        $('#card' + index).css('box-shadow', "none")
                        $('#card' + index).css('border-radius', '.25rem')
                    })
                    $('#btn' + index).mouseover(function() {
                        $('#btn' + index).css('opacity', '1')
                        $('#card' + index).css('position', 'static')
                        $('#card' + index).css('height', '67.5%')
                        $('#card' + index).css('left', '0px')
                        $('#card' + index).css('background', '#30A2FF')
                        $('#card' + index).css('box-shadow',
                            "0px 8px 24px 12px rgba(48, 162, 255, 0.3)")
                        $('#card' + index).css('border-top-left-radius', '0%')
                        $('#card' + index).css('border-top-right-radius', '0%')
                        $('#card' + index).css('border-bottom-left-radius', '.25rem')
                        $('#card' + index).css('border-bottom-right-radius', '.25rem')
                    })
                    $('#btn' + index).mouseout(function() {
                        $('#btn' + index).css('opacity', '0')
                        $('#btn' + index).css('opacity', '0')
                        $('#card' + index).css('background-color', '#252D3E')
                        $('#card' + index).css('box-shadow', "none")
                        $('#card' + index).css('border-radius', '.25rem')
                    })
                    $('#btn' + index).click(function() {
                        $('#btn' + index).css('outline', 'none')
                        $('#btn' + index).css('outline-width', 'none')
                        var $this = $('.text-change'+index);
                        var originalText = $this.text();
                        $this.text('COPIED!');
                        console.log(index);
                        navigator.clipboard.writeText(svgnew.outerHTML)
                        console.log(svgnew);
                        setTimeout(function() {
                            $this.text(originalText)
                        }, 2000);
                    })
                    $("#l_utama").on('fnLabelChanged', function(e, color) {
                        console.log(color)
                        $('#' + utama).css("stroke", "" + color + "")
                        // $('#' + first).css("stroke", "" + color + "")
                        $('#' + first).css("fill", "" + color + "")
                        $('#' + pertama).css("stroke", "" + color + "")
                        $('#' + ketiga).css("fill", "" + color + "")
                        $('#' + second).css("stroke", "" + color + "")
                        $('#' + ketiga).css("stroke", "" + color + "")
                        $('#' + pertama).css("fill", "" + color + "")
                    })
                    $('#utama').change(function() {
                        let color = $(this).val()



                        $('#l_utama').text(color)
                        $(this).css('background-color', color)
                        $(this).css("color", color)
                        // console.log(color);
                    })

                    $('input[name="stroke"]').change(function() {
                        if (this.checked) {
                            let newsize, sizeid;
                            newsize = $(this).val();
                            //0.563 -> 1.5 0.186 -> 0.5 0.375 -> 1 0.75 -> 2 0.936 -> 2.5
                            if (newsize == 0.5) {
                                console.log(newsize);
                                sizeid = 0.186 + 'px';
                                $('#' + first).css("stroke-width", '' + sizeid + '')
                                $('#' + pertama).css("stroke-width", '' + sizeid + '')
                                $('#' + utama).css("stroke-width", '' + sizeid + '')
                            } else if (newsize == 1) {
                                console.log(newsize);
                                sizeid = 0.375 + 'px';
                                $('#' + first).css("stroke-width", '' + sizeid + '')
                                $('#' + pertama).css("stroke-width", '' + sizeid + '')
                                $('#' + utama).css("stroke-width", '' + sizeid + '')
                            } else if (newsize == 1.5) {
                                console.log(newsize);
                                sizeid = 0.563 + 'px';
                                $('#' + first).css("stroke-width", '' + sizeid + '')
                                $('#' + pertama).css("stroke-width", '' + sizeid + '')
                                $('#' + utama).css("stroke-width", '' + sizeid + '')
                            } else if (newsize == 2) {
                                console.log(newsize);
                                sizeid = 0.75 + 'px';
                                $('#' + first).css("stroke-width", '' + sizeid + '')
                                $('#' + pertama).css("stroke-width", '' + sizeid + '')
                                $('#' + utama).css("stroke-width", '' + sizeid + '')
                            } else if (newsize == 2.5) {
                                console.log(newsize);
                                sizeid = 0.936 + 'px';
                                $('#' + first).css("stroke-width", '' + sizeid + '')
                                $('#' + pertama).css("stroke-width", '' + sizeid + '')
                                $('#' + utama).css("stroke-width", '' + sizeid + '')
                            }

                            // $('#' + kedua).css("stroke-width", '' + sizeid + '')
                            // $('#' + ketiga).css("stroke-width", '' + sizeid + '')
                            // $('#' + second).css("stroke-width", '' + sizeid + '')

                        }

                    });
                });


                $('#filter').on('keyup focus focusout', function() {
                    var keyword = $('#filter').val().toLowerCase();
                    console.log(keyword);
                    let id = $('#filter').attr('data-val')
                    if (id == 'all') {
                        $('.column').show();
                        $('.column').filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1)
                        })
                        return;
                    } else {
                        $('.column').hide();
                    }
                    $('.' + id).show();
                    $('.' + id).filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1)
                    });
                })
                let panjang = $('.dropdown-menu').attr('data-count');
                $('.dropdown-toggle').click(function() {
                    if ( $('#img-change').attr('src') == "{{asset('image/arrowdown.png')}}" ) {
                        $('.dropdown-toggle').css('color','grey');
                        $('.form-controll').css('box-shadow','0px 0px 0px 4px rgba(48, 162, 255, 0.2)');
                        $('.form-controll').css('border','1px solid rgba(48, 162, 255, 0.7)');
                        $('#img-change').attr('src',"{{asset('image/arrowup.png')}}")
                    } else {
                        $('.dropdown-toggle').css('color','white');
                        $('.form-controll').css('box-shadow','none');
                        $('.form-controll').css('border','none');
                        $('#img-change').attr('src',"{{asset('image/arrowdown.png')}}")
                    }

                })
                for (let i = 0; i <= panjang; i++) {
                    $('#filterr'+i).mouseover(function() {
                    $('#badge'+i).css('background','#30A2FF')
                    $('#badge'+i).css('color','#FFF')
                    })
                    $('#filterr'+i).mouseout(function() {
                        $('#badge'+i).css('background','rgba(48, 162, 255, 0.2)')
                        $('#badge'+i).css('color','#30A2FF')
                    })
                    $('#filterr'+i).click(function() {
                        // style
                        $('.dropdown-toggle').css('color','white');
                        $('.form-controll').css('box-shadow','none');
                        $('.form-controll').css('border','none');
                        //style
                        $('#img-change').attr('src',"{{asset('image/arrowdown.png')}}")
                        let nama = $('#flnama' + i).text()
                        $('.change').text(nama)
                        let id = $('#filterr'+i).attr('data-val');
                        $('#filter').attr('data-val', id);
                        // $('.dropdown-toggle').text($('#filterr'+i).text());
                        if (id=='all') {
                            $('.column').show();
                            return;
                        }else{
                            $('.column').hide();
                        }
                        $('.' + id).show();
                    })
                }
            })
        </script>
        @stack('js')
</body>

</html>
