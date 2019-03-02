<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Glo Board Manager</title>

    <!-- Styles -->
    <!-- Bootstrap 4.2.1 -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jq-scroller-plugin.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">

        @section('sidebar')
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-times"></i>
            </div>

            <div class="sidebar-header">
                <h3>GBM</h3>
            </div>

            <ul class="list-unstyled components">
                <!-- <p>User Name</p> -->
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <!-- <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a> -->
                </li>
                <li>
                    <!-- <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="download">Back to article</a> -->
                </li>
            </ul>
        </nav>
        @show

        @section('content')
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg gbm-navbar">
                <div class="container-fluid">

                  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                      <ul class="navbar-nav mr-auto">
                        <button type="button" id="sidebarCollapse" class="btn gbm-btn-menu">
                            <i class="fas fa-align-left"></i>
                            <span>Menu</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                      </ul>
                  </div>

                  <div class="mx-auto order-0">
                      <a class="navbar-brand mx-auto" href="#">Glo Board Manager</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                  </div>

                  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-cog"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="{{ asset('images/img_avatar.png') }}" alt="Avatar" class="gbm-avatar"></a>
                        </li>
                    </ul>
                  </div>

                </div>
            </nav>

            <div class="container-fluid">
              <h2>Collapsible Sidebar Using Bootstrap 4</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <div class="line"></div>

              <h2>Lorem Ipsum Dolor</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <div class="line"></div>

              <h2>Lorem Ipsum Dolor</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <div class="line"></div>

              <h3>Lorem Ipsum Dolor</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

        </div>
        @show

    </div>

    <div class="overlay"></div>

    <!-- jQuery CDN - Slim 3.3.1 -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Bootstrap 4.2.1 -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery Custom Scroller Plugin 3.1.5 -->
    <script src="{{ asset('js/jq-scroller-plugin.js') }}"></script>
    <!-- Custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
