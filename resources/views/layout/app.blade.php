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

                <ul class="list-unstyled menu-left mb-0">
                    <li class="float-left">
                        <a href="index.html" class="logo">
                            <span class="logo-lg">
                                <img src="{{ asset('images/petspng.png') }}" alt="" height="80">
                                <img src="{{ asset('images/adocaosos_logo.png') }}" alt="" height="80">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('images/petspng.png') }}" alt="" height="30">
                            </span>
                        </a>
                    </li>
                    <li class="float-left"><a class="button-menu-mobile open-left navbar-toggle">
                            <div class="lines"><span></span> <span></span> <span></span></div>
                        </a></li>
                    <li class="app-search">
                        <form><input type="text" placeholder="Pesquisa" class="form-control"> <button type="submit"
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
                        <li class="menu-title">Menu de Opções</li>
                        <li><a href="/animal"><i class="mdi mdi-view-dashboard"></i> <span>Lista de Animais</span></a></li>
                        <li><a href="/dono"><i class="mdi mdi-view-dashboard"></i> <span>Lista de Donos</span></a></li>


                        <li><a href="javascript: void(0);"><i class="mdi mdi-file-document-box"></i><span
                                    class="badge badge-danger float-right"></span> <span>Cadastro</span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/animal/create">Cadastro de Animais</a></li>
                                <li><a href="/dono/create">Cadastro de Dono</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="mdi mdi-view-dashboard"></i>
                            <span>Sair</span></a></li>                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <!--<li>
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
                                </li>
                            -->

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
                    <div class="col-12 text-center">Eruz Vinicius Huffner Lourenço, Gabriel Vinicius Borba Constantini, Michel Cassol de Oliveira, Thalia Vitória Perin - Sistemas de Informação - Instituto Federal do Paraná - Campus Palmas </div>
                </div>
            </div>
        </footer><!-- End Footer -->


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
