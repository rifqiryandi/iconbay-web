<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
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
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('image/icon_bay.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-light" style="font-family: Rubik;font-size: 20px;letter-spacing: 0.1em;line-height: 24px;color: #FFFFFF;margin: 0px 15px;">ICONBAY</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div> --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="{{ url('/admin') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="{{ url('gambar') }}" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Icon
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="{{ url('kategori') }}" class="nav-link active">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>
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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gambar Per Kategori</h1>
                            <button class="btn btn-info btn-rounded" id="btnBack"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </button>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Gambar
                            {{-- <button class="btn btn-outline-primary btn-sm plus"><i class="fas fa-plus"></i></button> --}}
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table tableUnit">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Icon</th>
                                    <th>Icon Name</th>
                                    <th>Style</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

                <!-- Modal -->
                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form name="formGambar" id="formGambar" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id" class="form-control">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori</label>
                                        <select name="kategori_id" id="kategori" class="form-control" style="width: 100%">
                                            <option selected></option>
                                            @foreach ($kat as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Style</label>
                                        <select name="style_id" id="style" class="form-control" style="width: 100%">
                                            <option selected></option>
                                            @foreach ($style as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Gambar</label>
                                        <input type="file" class="form-control image" name="filepath">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2@11.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(function(){
            window.history.pushState(null, "", window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, "", window.location.href);
            };


            var url = window.location.pathname;
            var id = url.substring(url.lastIndexOf('/') + 1);

            $('#btnBack').click(function(){
                window.location.href = '{{ url('kategori')}}'
            })
            // console.log(id);
            $('.tableUnit').DataTable({
                ordering: false,
                processing: true,
                destroy: true,
                ajax: {
                    url: "{{ url('/api/image/data') }}",
                    type: "post",
                    data: {katid: id}
                },
                columns: [{
                        data: 'DT_RowIndex'
                    },
                    {
                        data: 'icon'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'style'
                    },
                    {
                        data: 'kategori'
                    },
                    {
                        data: 'aksi'
                    }
                ]
            })
            $(document).on('click', '.edit', function () {
                // $('#modalLabel').html('Edit Gambar');
                let id = $(this).data('id')
                $.ajax({
                    url: "{{ url('/api/image/show-data') }}",
                    type: "post",
                    data: {id: id},
                    success: function(res) {
                        // console.log(res);
                        $('#modalLabel').html('Edit Gambar ' + '<b>' + res.data.nama + '</b>');
                        $('#nama').val(res.data.nama);
                        $('#id').val(res.data.id);
                        $('#kategori').val(res.data.kategori_id);
                        $('#kategori').select2().trigger('change');
                        $('#style').val(res.data.style_id);
                        $('#style').select2().trigger('change');
                        $('.image').val(res.data.filepath);
                    }
                })
                $('#modalEdit').modal('show')
            })

            $(document).on('click', '.plus', function () {
                $('#formGambar').trigger("reset");
                $('#modalLabel').html('Tambah Gambar');
                $('#modalEdit').modal('show')
            })

            $(document).on('click', '.hapus', function () {
                let id = $(this).data('id')
                console.log(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('gambar.delete') }}",
                            type: "post",
                            data: {id: id},
                            success: function(res){
                                console.log(res);
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                ).then(() => {
                                    location.reload()
                                })
                            }
                        })
                    }
                })
            })

            $('body').on('submit', '#formGambar', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('gambar.store') }}",
                    type: "post",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire(
                            'Saved!',
                            'Your file has been saved.',
                            'success'
                        ).then(() => {
                            location.reload()
                        })
                    }
                })
            })
        })
    </script>
</body>

</html>
