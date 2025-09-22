<!doctype html>
<html lang="en" dir="ltr">

<!--{ Head }-->
@include('admin.body.head')
<!--{ Head End }-->

<body class="app sidebar-mini ltr light-mode">

    <!--{ Switcher Start }-->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="p-4 m-0 lh-1 border-start template-customizer-header position-relative py-3 d-flex align-items-center justify-content-between">
                <div>
                    <h3 class="template-customizer-t-panel_header mb-2">Template Customizer</h3>
                    <p class="template-customizer-t-panel_sub_header mb-0">Customize and preview in real time</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <a href="javascript:void(0)" id="ThemeReset" class="text-danger"><i class="fe fe-refresh-ccw fs-17 text-danger"></i></a>
                </div>
            </div>
            <div class="form_holder sidebar-right1 ps ps--active-y">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft">
                            <h4 class="mt-0"><i class="zmdi zmdi-invert-colors"></i> Color palette</h4>
                            <div class="skin-body theme-colors">
                                <div class="switch_section">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <div class="form-check p-0">
                                            <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary1">
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary2">
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary3">
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary4">
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4> <i class="ti ti-directions"></i> LTR and RTL VERSIONS</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex"> <span class="me-auto">LTR Version</span>
                                        <label for="myonoffswitch23" class="switch switch-square">
                                            <input type="radio" name="onoffswitch7" id="myonoffswitch23"
                                                   class="switch-input" checked="">
                                            <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                        </label>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL Version</span>
                                        <label for="myonoffswitch24" class="switch switch-square">
                                            <input type="radio" name="onoffswitch7" id="myonoffswitch24"
                                                   class="switch-input">
                                            <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4> <i class="fe fe-sun"></i> Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex"> <span class="me-auto">Light Theme</span>
                                        <label for="myonoffswitch1"  class="switch switch-square">
                                            <input type="radio" name="onoffswitch1" id="myonoffswitch1" class="switch-input" checked="">
                                            <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4> <i class="ti ti-moon-stars"></i> Dark Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Dark Theme</span>
                                        <label for="myonoffswitch2" class="switch switch-square">
                                            <input type="radio" name="onoffswitch1" id="myonoffswitch2" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swichermainleft">
                            <h4>Menu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightMenu d-flex"> <span class="me-auto">Light Menu</span>
                                        <label for="myonoffswitch3" class="switch switch-square">
                                            <input type="radio" name="onoffswitch2" id="myonoffswitch3" class="switch-input" checked="">
                                            <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                        </label>
                                    </div>
                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <label for="myonoffswitch5" class="switch switch-square">
                                            <input type="radio" name="onoffswitch2" id="myonoffswitch5"
                                                   class="switch-input">
                                            <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4> <i class="ti ti-brush"></i> Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightHeader d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <label for="myonoffswitch6" class="switch switch-square">
                                            <input type="radio" name="onoffswitch3" id="myonoffswitch6" class="switch-input" checked="">
                                            <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                        </label>
                                    </div>
                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <label for="myonoffswitch8" class="switch switch-square">
                                            <input type="radio" name="onoffswitch3" id="myonoffswitch8" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--{ Switcher End }-->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--{ app header start }-->
            @include('admin.body.header')
            <!--{ app header end }-->


            <!--{ app sidebar start }-->
            @include('admin.body.sidebar')
            <!--{ app sidebar end }-->

            <!--{ app content start }-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <!--{ container start }-->

                    <div class="main-container container-fluid">

                        <!--{ PAGE HEADER START }-->
                        <div class="page-header">
                            <h1 class="page-title">@yield('page-title','LFL-USA')</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb-item','lfl-usa')</li>
                                </ol>
                            </div>
                        </div>
                        <!--{ PAGE HEADER END }-->

                        <!--{ INDIVIDUAL PAGE CONTENT }-->
                        @yield('content')
                        <!--{ INDIVIDUAL PAGE CONTENT END }-->


                    </div>
                    <!--{ container end }-->
                </div>
            </div>
            <!--{ app content end }-->
        </div>
    </div>



    <!-- FOOTER -->
    <footer class="footer">
        @include('admin.body.footer')
    </footer>
    <!-- FOOTER END -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JAVASCRIPT PRE-MADE SCRIPTS -->
    @include('admin.body.scripts')
    <!-- CUSTOM JAVASCRIPT -->
    @yield('scripts')


</body>

</html>
