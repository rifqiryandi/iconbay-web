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
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}"/>
  <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
  {{-- <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/jquery.colorpicker.bygiro.css') }}"> --}}
  <style>
      .main-sidebar {
          background-color: #0D1629
      }

      .content-wrapper {
        background-color: #0D1629
      }

      .btn-group {
        display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 4px 3px;
            background: #454857;
            /* padding: 4px; */
            border-radius: 8px;
            /* box-shadow: inset 0 0 0 3px rgba(35, 33, 45, 0.3),
                0 0 0 3px rgba(185, 185, 185, 0.3); */
            /* position: relative; */
            width: 208px;
            height: 40px;
            top: 0px;
            left: -15px;
        }

        .btn-group input {
            width: auto;
            height: 100%;
            appearance: none;
            outline: none;
            cursor: pointer;
            border-radius: 2px;
            padding: 4px 8px;
            background: #454857;
            color: #bdbdbdbd;
            font-size: 14px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            transition: all 100ms linear;
        }

        .btn-group input:checked {

            background-image: linear-gradient(180deg, #007bff, #007bff);
            color: #fff;
            border-radius: 8px;

            box-shadow: 0 1px 1px #0000002e;
            text-shadow: 0 1px 0px #79485f7a;
        }

        .btn-group input:before {
            content: attr(label);
            display: inline-block;
            text-align: center;
            width: 100%;
        }

        .card{
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
            bottom: 100px;
            /* top: 6px; */
            text-align: center;
            opacity: 0;
            border-radius: 8px;
            transition: opacity .35s ease;
        }

        .card:hover button {
            opacity: 1;
        }

        .card:hover{
            position: static;
            width: 112px;
            height: 136px;
            left: 0px;
            top: -20px;
            background: #30A2FF;
            box-shadow: 0px 8px 24px 12px rgba(48, 162, 255, 0.3);
            border-radius: 8px;
        }
  </style>
    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">

      @yield('content')
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
<script type="text/javascript" src="{{ asset('assets/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
    $(function(){
        var clipboard = new ClipboardJS('.btnCopy');
        // $('#two').hide();
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .p').css('color', event.color.toString());
            $('.my-colorpicker2 .p1').css('color', event.color.toString());
            $('.my-colorpicker2 .p2').css('color', event.color.toString());
        });

        $('#btnDownload').click(function(e){
            e.preventDefault();

            console.log('download');
        })


        let size = $('input[name="size"]:checked').val();
        let sizeid;
        let stroke = $('input[name="stroke"]:checked').val();
        let strokeid;

        $('.card-body').children('svg').each(function() {
            let svg = $(this).find("path, style")
            // console.log(svg);
            $('.my-colorpicker2').change(function() {
                let color = $(this).val()
                // svg.attr("fill", ''+color+'')
                // console.log(color);
            })
        });


        let svg = document.getElementsByTagName("svg");
        $.each(svg, function (index, value) {
            let svgnew = document.getElementsByTagName("svg")[index];
            console.log(svgnew);
            $('input[name="size"]').change(function(){
                sizeid = $(this).val();
                console.log(sizeid);
                svgnew.setAttribute("width", sizeid + "px")
                svgnew.setAttribute("height", sizeid + "px")
            });

            $('.btnCopy').click(function(){
                var $this = $(this);
                var originalText = $this.text();
                $this.text('Copied');
                navigator.clipboard.writeText(svgnew.outerHTML)
                setTimeout(function() {
                    $this.text(originalText)
                }, 3000);
            })
        });

        // $('.line').click(function(){
        //     $('#one').show()
        //     $('#two').hide()
        //     // $('#threeC').hide()
        // })

        $('.line_color').on('click', function(){
            $('#one').show();
            $('#two').show('slow');
            // $('div#threeC').hide()
        })

    })


</script>
@stack('js')
</body>
</html>
