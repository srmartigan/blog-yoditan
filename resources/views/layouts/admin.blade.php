<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo') blog yoditan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('css/all.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
  <!-- personalizacion personal -->
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
  @toastr_css
  @yield('head') {{--Añadirmos js,css,img necesarias para la pagina--}}


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="{{url('/')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>AD</b>V</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Panel Admin</b></span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top " role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only ">Navegación</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <ul class="nav nav-pills">

            </ul>



            <!-- User Account: style can be found in dropdown.less -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"role="button" aria-haspopup="true" aria-expanded="false">
                <small class="bg-green">Online</small>
                <span class="menu-texto">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="dropdown-item">

                  <p>
                    www.yoditan.com - Tutienda de colecciones y regalos
                    <small>www.yoditan.com</small>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="dropdown-item user-footer">

                  <div class="dropdown-item pull-left">
                    <form action="{{url('logout')}}" method="post">
                        @csrf
                        <input class="btn btn-default btn-flat"type="submit" value="Cerrar sesion">
                    </form>

                  </div>
                  <div class="dropdown-item pull-right">
                    <a href="{{url('/')}}" class="btn btn-default btn-flat">Home</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header"></li>
          <li class="treeview">
            <a href="#">
              <i class="fas fa-tachometer-alt fa-lg"></i>
              <span class="menu-texto">Escritorio</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('/blog-admin')}}"><i class="far fa-circle fa-sm"></i>
                <span class="submenu-texto">Inicio</span>
              </a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fas fa-pen-fancy fa-lg"></i>
              <span class="menu-texto">Entradas</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('blog-admin/listado-entradas')}}"><i class="far fa-circle fa-sm"></i>
                <span class="submenu-texto">Todas las entradas</span>
              </a></li>
              <li><a href="{{url('blog-admin/nueva-entrada')}}"><i class="far fa-circle fa-sm"></i>
                <span class="submenu-texto"> Nueva entrada</span>
              </a></li>
              <li><a href="#"><i class="far fa-circle fa-sm"></i>
                  <span class="submenu-texto">Categorías</span>
                </a></li>
              <li><a href="#"><i class="far fa-circle fa-sm"></i>
                  <span class="submenu-texto">Etiquetas</span>
                </a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fas fa-icons fa-lg"></i>
              <span class="menu-texto"> Medios</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="compras/ingreso"><i class="far fa-circle fa-sm"></i>
                <span class="submenu-texto">Biblioteca</span>
              </a></li>
              <li><a href="compras/proveedor"><i class="far fa-circle fa-sm"></i>
                <span class="submenu-texto">Añadir nuevo</span>
              </a></li>
            </ul>
          </li>

          <li>
            <a href="#">
              <i class="far fa-comment fa-lg"></i> <span class="menu-texto">Comentarios</span>
              <small class="label pull-right bg-red">PDF</small>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-cogs fa-lg"></i> <span class="menu-texto">Ajustes</span>
              <small class="label pull-right bg-red">PDF</small>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-info-circle fa-lg"></i> <span class="menu-texto"> Acerca De...</span>
              <small class="label pull-right bg-yellow">IT</small>
            </a>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>





    <!--Contenido-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">@yield('titulo_ventana')</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <!--Contenido-->
                    @yield('contenido')
                    <!--Fin Contenido-->
                  </div>
                </div>

              </div>
            </div><!-- /.row -->
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </section><!-- /.col -->
  </div><!-- /.row -->

  </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="www.yoditan.com">Yoditan</a>.</strong> Todos los derechos reservados.
  </footer>


  <!-- jQuery 2.1.4 -->
  <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('js/app.min.js')}}"></script>

</body>
@toastr_js
@toastr_render
</html>
