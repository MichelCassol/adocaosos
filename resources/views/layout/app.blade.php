<!DOCTYPE html>
<html lang="en">
<!-- Mirrored by: HTTrack Website Copier/3.x. Site: coderthemes.com. File: /greeva/vertical/default/pages-starter.html. Date: Wed, 26 Sep 2018 18:00:30 GMT -->

<head>
    <meta charset="utf-8">
    <title>Adoção SOS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Icons css -->
    <link href="{{ asset('libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('libs/dripicons/webfont/webfont.css" rel="stylesheet') }}" type="text/css">
    <link href="{{ asset('libs/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Navigation Bar-->
        <header id="topnav">
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-info noti-icon-badge">21</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0"><span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small></a> </span>Notification</h5>
                            </div>
                            <div class="slimscroll noti-scroll">
                                <!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small
                                            class="text-muted">1 min ago</small></p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours
                                            ago</small></p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="{{ asset('images/users/avatar-2.jpg') }}"
                                            class="img-fluid rounded-circle" alt=""></div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next
                                        meeting</p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small
                                            class="text-muted">4 days ago</small></p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="{{ asset('images/users/avatar-4.jpg') }}"
                                            class="img-fluid rounded-circle" alt=""></div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small
                                            class="text-muted">13 days ago</small></p>
                                </a></div><!-- All--> <a href="javascript:void(0);"
                                class="dropdown-item text-centephpr text-primary notify-item notify-all">View all <i
                                    class="fi-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="dropdown notification-list"><a class="nav-link dropdown-toggle nav-user"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false"><img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user"
                                class="rounded-circle"> <span class="ml-1">Agnes K <i
                                    class="mdi mdi-chevron-down"></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item"><i
                                    class="dripicons-user"></i> <span>My Account</span> </a><!-- item--> <a
                                href="javascript:void(0);" class="dropdown-item notify-item"><i
                                    class="dripicons-gear"></i> <span>Settings</span> </a><!-- item--> <a
                                href="javascript:void(0);" class="dropdown-item notify-item"><i
                                    class="dripicons-help"></i> <span>Support</span> </a><!-- item--> <a
                                href="javascript:void(0);" class="dropdown-item notify-item"><i
                                    class="dripicons-lock"></i> <span>Lock Screen</span> </a><!-- item--> <a
                                href="javascript:void(0);" class="dropdown-item notify-item"><i
                                    class="dripicons-power"></i> <span>Logout</span></a>
                        </div>
                    </li>
                    <li class="dropdown notification-list"><a href="javascript:void(0);"
                            class="nav-link right-bar-toggle"><i class="dripicons-gear noti-icon"></i></a></li>
                </ul>
                <ul class="list-unstyled menu-left mb-0">
                    <li class="float-left">
                        <a href="index.html" class="logo">
                            <span class="logo-lg">
                                <img src="{{ asset('images/adocaosos_logo.png') }}" alt="" height="80">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('images/logo_sm.png') }}" alt="" height="30">
                            </span>
                        </a>
                    </li>
                    <li class="float-left"><a class="button-menu-mobile open-left navbar-toggle">
                            <div class="lines"><span></span> <span></span> <span></span></div>
                        </a></li>
                    <li class="app-search">
                        <form><input type="text" placeholder="Search..." class="form-control"> <button type="submit"
                                class="sr-only"></button></form>
                    </li>
                </ul>
            </nav><!-- end navbar-custom -->
        </header><!-- End Navigation Bar-->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            <div class="slimscroll-menu">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Navigation</li>
                        <li><a href="lista"><i class="mdi mdi-view-dashboard"></i> <span>Lista de Animais</span></a></li>


                        <li><a href="javascript: void(0);"><i class="mdi mdi-file-document-box"></i><span
                                    class="badge badge-danger float-right"></span> <span>Cadastro</span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="animal">Cadastro de Animais</a></li>
                                <li><a href="dono">Cadastro de Dono</a></li>
                            </ul>
                        </li>
                        <!-- <li>
                                    <a href="javascript: void(0);"><i class="mdi mdi-multiplication"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                                        <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                                            <ul class="nav-third-level nav" aria-expanded="false">
                                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                    </ul>
                </div><!-- Sidebar -->
                <div class="clearfix"></div>
            </div><!-- Sidebar -left -->
        </div><!-- Left Sidebar End -->

        @yield('conteudo')

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">2018 © Greeva. - Coderthemes.com</div>
                </div>
            </div>
        </footer><!-- End Footer -->
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title"><a href="javascript:void(0);" class="right-bar-toggle float-right"><i
                        class="dripicons-cross noti-icon"></i></a>
                <h5 class="m-0">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img"><img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme"
                            class="rounded-circle img-fluid"> <a href="#" class="user-edit"><i
                                class="mdi mdi-pencil"></i></a></div>
                    <h5><a href="#">Agnes Kennedy</a></h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div><!-- Settings -->
                <hr class="mt-0">
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0">
                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2"><input id="checkbox1" type="checkbox" checked="checked">
                        <label for="checkbox1">Notifications</label></div>
                    <div class="checkbox checkbox-primary mb-2"><input id="checkbox2" type="checkbox" checked="checked">
                        <label for="checkbox2">API Access</label></div>
                    <div class="checkbox checkbox-primary mb-2"><input id="checkbox3" type="checkbox"> <label
                            for="checkbox3">Auto Updates</label></div>
                    <div class="checkbox checkbox-primary mb-2"><input id="checkbox4" type="checkbox" checked="checked">
                        <label for="checkbox4">Online Status</label></div>
                    <div class="checkbox checkbox-primary mb-0"><input id="checkbox5" type="checkbox" checked="checked">
                        <label for="checkbox5">Auto Payout</label></div>
                </div><!-- Timeline -->
                <hr class="mt-0">
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0">
                <div class="p-3">
                    <div class="inbox-widget"><a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-1.jpg') }}"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Chadengle</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">13:40 PM</p>
                            </div>
                        </a><a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-2.jpg') }}"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">13:34 PM</p>
                            </div>
                        </a><a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-3.jpg') }}"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">13:17 PM</p>
                            </div>
                        </a><a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-4.jpg') }}"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Kurafire</p>
                                <p class="inbox-item-text">Nice to meet you</p>
                                <p class="inbox-item-date">12:20 PM</p>
                            </div>
                        </a><a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="{{ asset('images/users/avatar-5.jpg') }}"
                                        class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author">Shahedk</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">10:15 AM</p>
                            </div>
                        </a></div><!-- end inbox-widget -->
                </div><!-- end .p-3-->
            </div><!-- end slimscroll-menu-->
        </div><!-- /Right-bar -->
    </div><!-- End #wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/jquery.core.js') }}"></script>
    <script src="{{ asset('js/jquery.app.js') }}"></script>
</body>
<!-- Mirrored by: HTTrack Website Copier/3.x. Site: coderthemes.com. File: /greeva/vertical/default/pages-starter.html. Date: Wed, 26 Sep 2018 18:00:30 GMT -->

</html>