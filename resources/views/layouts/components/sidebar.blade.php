<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('') }}assets/index3.html" class="brand-link">
        <img src="{{ asset('image/icon_bay.png') }}" alt="AdminLTE Logo"
            class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-family: Rubik;font-size: 20px;letter-spacing: 0.1em;line-height: 24px;color: #FFFFFF;margin: 0px 15px;">ICONBAY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header" style="font-family: Rubik;font-size: 12px">TYPE</li>

            <li class="nav-item">
                <a href="{{ url('line') }}" class="nav-link line {{ Request::is('line') ? 'active' : '' }}">
                    <i class="float-right">
                        <img src="{{ asset('image/line.svg') }}" alt="" id="ll_color">
                    </i>
                    <p style="font-family: Rubik;font-size: 14px">
                        Line
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('line-color') }}" class="nav-link line_color {{ Request::is('line-color') ? 'active' : '' }}">
                    <i class="float-right">
                        <img src="{{ asset('image/line color.svg') }}" alt="" id="ll_color">
                    </i>
                    <p style="font-family: Rubik;font-size: 14px">
                        Line Color
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('solid') }}" class="nav-link {{ Request::is('solid') ? 'active' : '' }}" id="solid">
                    <i class="float-right">
                        <img src="{{ asset('image/solid.svg') }}" alt="" id="ll_color" class="img-rounded-sm">
                    </i>
                    <p style="font-family: Rubik;font-size: 14px">
                        Solid
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('solid-color') }}" class="nav-link {{ Request::is('solid-color') ? 'active' : '' }}" id="solid_color">
                    <i class="float-right">
                        <img src="{{ asset('image/solid color.svg') }}" alt="" id="ll_color">
                    </i>
                    <p style="font-family: Rubik;font-size: 14px">
                        Solid Color
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('multi') }}" class="nav-link {{ Request::is('multi') ? 'active' : '' }}" id="multi_color">
                    <i class="float-right">
                        <img src="{{ asset('image/multi color.svg') }}" alt="" id="ll_color">
                    </i>
                    <p style="font-family: Rubik;font-size: 14px">
                        Multi Color
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
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div class="btn-group">
                                <input label="0.5" type="radio" id="option05" name="stroke" value="0.5" checked>
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
                            <label class="input-label">Contoh</label>
                        </span>
                    </div>
                </div>

                <div id="two">
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
