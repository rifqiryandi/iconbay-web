<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Bulk')</title>
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

        * {
        box-sizing: border-box;
        }

        body {
        font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
        float: left;
        width: 12.5%;
        padding: 10px 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        .column-filter {
            float: left;
            width: 30%;
            /* padding: 10px; */
            /* height: 300px; Should be removed. Only for demonstration */
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
                width: 100%;
                display: block;
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

        .form-groupp i{
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
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: auto;
            height: 130px;
            padding-bottom: 10px;
            background-color: #252D3E;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem
        }

        .card:hover {
            position: static;
            height: 120px;
            left: 0px;
            background: #30A2FF;
            box-shadow: 0px 8px 24px 12px rgba(48, 162, 255, 0.3);
            border-radius: 8px;
        }

        button {
            /* position: static; */
            width: 90px;
            display: inline-block;
            /* block-size: fit-content; */
            padding: 5px;
            left: 5px;
            text-align: center;
            opacity: 0;
            background-color: #30A2FF;
            border-radius: 8px;
            transition: opacity .35s ease;
        }

        .card:hover button {
            opacity: 1;
        }

        .inputt-search {
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
            font-size: 14px;
            line-height: 16px;
            grid-template-columns: repeat( auto-fit, minmax(250px, 1fr) );
        }

        .inputt-search:focus {
            outline : 1px solid #30A2FF;
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
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px; z-index: 1;">LICENSE</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px; z-index: 1;">ABOUT</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px; z-index: 1;">FAQ</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="font-family: Rubik;font-size: 14px; z-index: 1;">GIVE FEEDBACK</a>
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

                        <li class="nav-header" style="font-family: Rubik;font-size: 12px">TYPE</li>

                        <li class="nav-item">
                            <a href="{{ url('light') }}" class="nav-link line {{ Request::is('light') ? 'active' : '' }}">
                                <i class="float-right">
                                    <img src="{{ asset('image/line.svg') }}" alt="" id="ll_color" class="sidebar-icon">
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
                                    <img src="{{ asset('image/line color.svg') }}" alt="" id="ll_color">
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
                                    <img src="{{ asset('image/solid.svg') }}" alt="" id="ll_color"
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
                                    <img src="{{ asset('image/solid color.svg') }}" alt="" id="ll_color">
                                </i>
                                <p style="font-family: Rubik;font-size: 14px">
                                    BULK
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('twotones') }}" class="nav-link {{ Request::is('twotones') ? 'active' : '' }}"
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
                                        <input label="16" type="radio" id="option16" name="size" value="16">
                                        <input label="24" type="radio" id="option24" name="size" value="24">
                                        <input label="32" type="radio" id="option32" name="size" value="32">
                                        <input label="48" type="radio" id="option48" name="size" value="48">
                                        <input label="64" type="radio" id="option64" name="size" value="64" checked>
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
                                                >
                                            <input label="1" type="radio" id="option1" name="stroke" value="1">
                                            <input label="1.5" type="radio" id="option15" name="stroke" value="1.5">
                                            <input label="2" type="radio" id="option2" name="stroke" value="2" checked>
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
                                        <input type="text" class="input-pv-color" style="color: #FFF;font-family: 'Rubik';
                                        font-style: normal;
                                        font-size: 0px;" id="utama">
                                        <label class="input-label" id="l_utama">#FFFFFF</label>
                                    </span>
                                </div>
                            </div>

                            <div id="one">
                                <div class="input-group my-colorpicker2">
                                    <span class="input-color">
                                        <input type="text" class="input-pv-color" style="color: #FFF;font-family: 'Rubik';
                                        font-style: normal;
                                        font-size: 0px;" id="kedua">
                                        <label class="input-label" id="l_kedua">#FFFFFF</label>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </ul>
                    <p class="footer-text">SUANGARX V1 © 2021 SUB1</p>
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
                <img src="{{ asset('image/paint.png') }}" alt="" class="back-icon">
                <div class="row-filter">
                    <div class="column-filter">
                        <div class="form-groupp">
                            <i class="fas fa-search iconn"></i>
                            <input type="text" name="filter" id="filter" class="inputt-search"
                                placeholder="Search 2271 icons in Bulk">
                        </div>
                    </div>

                    <div class="column-filter">
                        <div class="form-group">
                            <select name="" id="filterr" class="form-controll">
                                <option selected value="all">All Categories</option>
                                @foreach ($kat as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                @endforeach
                            </select>
                            </div>
                    </div>
                </div>

                <hr class="garis">

                <div class="row">
                    @foreach ($data as $d)
                    <div class="column {{ $d->kategori_id }}">
                      <div class="card">
                        <button class="btnCopy">Tap to Copy</button>
                        <x-svg name="{{ explode('.svg', $d->filepath)[0] }}" class="card__image" />
                      </div>
                      <p class="header-title" >{{ $d->nama }}</p>
                    </div>
                    @endforeach
                </div>

            </section>
    </div>

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
    {{-- <script src="{{ asset('assets/svg2img.js') }}"></script> --}}
    <!-- DataTables -->
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}">
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/canvg/3.0.7/umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pdfkit@0.11.0/js/pdfkit.min.js"></script>
    <script src="https://github.com/devongovett/blob-stream/releases/download/v0.1.3/blob-stream.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/svg-to-pdfkit@0.1.8/source.min.js"></script>
    <script src="https://unpkg.com/canvg@3.0.1/lib/umd.js"></script>
    <script src="https://sharonchoong.github.io/svg-exportJS/svg-export.min.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.0.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js"></script>
    <script>
        $(function () {
            var clipboard = new ClipboardJS('.btnCopy');
            $('.my-colorpicker2').colorpicker({
                format: 'hex'
            })
            // $('#btnDownload').click(function (e) {
            //     e.preventDefault();
            //     window.location = window.location.origin+'/api/image/download3/'
            // })
            let size = $('input[name="size"]:checked').val();
            let sizeid;
            let stroke = $('input[name="stroke"]:checked').val();
            let strokeid;
            let svg = document.getElementsByTagName("svg");
            $.each(svg, function (index, value) {
                let svgnew = document.getElementsByTagName("svg")[index];
                svgnew.setAttribute('id', index);
                svgnew.setAttribute('names', $('.header-title')[index].textContent)
                // var path = document.getElementById(''+index+'').querySelectorAll('path, line, polyline, g, circle, polygon, rect, ellipse');
                var path = document.getElementById(''+index+'')
                let utama, kedua, pertama, second;
                for (let index = 0; index < path.children.length; index++) {
                    const element = path.children[index];
                    if (element.id.indexOf('primary') > -1) {
                        // console.log(element.addClass('a'));
                        if (element.id.indexOf('primary-') > -1) {
                            utama = element.id = element.id+svgnew.id;
                        } else {
                            pertama = element.id = element.id+svgnew.id
                        }
                    }

                    if (element.id.indexOf('secondary') > -1) {
                        if (element.id.indexOf('secondary-') > -1) {
                            kedua = element.id = element.id+svgnew.id
                        } else {
                            second = element.id = element.id+svgnew.id
                        }
                    }
                    // console.log(element.id ,element.id.indexOf('primary-'));
                }
                $('#'+utama).css("stroke-width", '2px')
                $('#'+kedua).css("stroke-width", '2px')
                $('#'+pertama).css("stroke-width", '2px')
                $('#'+second).css("stroke-width", '2px')
                svgnew.setAttribute("width", "64")
                svgnew.setAttribute("height", "64")
                $('#'+utama).css("fill", "#FFF")
                $('#'+pertama).css("fill", "#FFF")
                $('#'+kedua).css("fill", "#FFF")
                $('#'+second).css("fill", "#FFF")
                $('#'+utama).css("stroke", "#FFF")
                $('#'+pertama).css("stroke", "#FFF")
                $('#'+kedua).css("stroke", "#FFF")
                $('#'+second).css("stroke", "#FFF")
                // console.log(path);
                $('input[name="size"]').change(function () {
                    sizeid = $(this).val();
                    // console.log(sizeid);
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
                $('#utama').change(function () {
                    let color = $(this).val()
                    $('#'+utama).css("fill", ""+color+"")
                    $('#'+pertama).css("fill", ""+color+"")
                    $('#'+utama).css("stroke", ""+color+"")
                    $('#'+pertama).css("stroke", ""+color+"")
                    $('#l_utama').text(color)
                    $(this).css('background-color', color)
                    $(this).css("color", color)
                    console.log(color);
                })
                $('#kedua').change(function () {
                    let color = $(this).val()
                    $('#'+kedua).css("fill", ""+color+"")
                    $('#'+second).css("fill", ""+color+"")
                    $('#'+kedua).css("stroke", ""+color+"")
                    $('#'+second).css("stroke", ""+color+"")
                    $('#l_kedua').text(color)
                    $(this).css('background-color', color)
                    $(this).css("color", color)
                    console.log(color);
                })
                $('input[name="stroke"]').change(function () {
                    sizeid = $(this).val();
                    console.log(sizeid);
                    $('#'+utama).css("stroke-width", ''+sizeid+'')
                    $('#'+kedua).css("stroke-width", ''+sizeid+'')
                    $('#'+pertama).css("stroke-width", ''+sizeid+'')
                    $('#'+second).css("stroke-width", ''+sizeid+'')
                });
            });
            // console.log(document.getElementsByClassName('header-title'));
            $('.header-title').each(function(){
                let nama = $(this)[0].outerText
            })
            $('#btnDownload').click(function (e) {
                e.preventDefault();
                var zip = new JSZip();
                // window.location = window.location.origin+'/api/image/download3/'
                [].forEach.call($('.card > svg'), function (svg) {
                    var fileName = $(svg).attr('names') + '.svg';
                    addSVGToZip(zip, $(svg), fileName);
                });
                zip.generateAsync({type:"blob"})
                    .then(function (content) {
                        // see FileSaver.js
                        saveAs(content, "IconSolidColor.zip");
                    }
                );
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
            $('#filter').on('keyup', function(){
                var keyword = $('#filter').val().toLowerCase();
                console.log(keyword);
                $('.column').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1)
                })
            })
            $('#filterr').change(function(){
                if($(this).val()=="all"){$('.column').show(); return;}else{$('.column').hide();}
                $('.' + $(this).val()).show();
            });
        })
    </script>
    @stack('js')
</body>

</html>
