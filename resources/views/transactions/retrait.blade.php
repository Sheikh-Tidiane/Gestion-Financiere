@extends('front.layouts.app')
@section('content')
<html lang="fr" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pteam_tranfert</title>
        <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/pteam/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/pteam/public/dist/css/adminlte.min.css">

    <style>
        .text-center {
    text-align: center !important;
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -7.5px;
    margin-left: -7.5px;
}
    </style>
</head>
<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse" style="height: auto;">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
        <img class="animation__shake" src="/pteam/public/dist/img/Pteam.png" alt="pteamLogo" height="60" width="60" style="display: none;">
    </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 632.4px;">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2 class="text-center display-4">Rechercher une Transaction</h2>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <form class="mt-3" action="" method="GET">
              <div class="input-group">
                <input type="search" class="form-control form-control-lg" name="search_term" placeholder="Entrer le tel / code retrait ou le nom et prenom du beneficiare">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright © 2023-2024 <a href="#">GèreTonCash</a>.</strong>
        Tout droit reservé.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 2.0.1
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
<div id="sidebar-overlay"></div></div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js"></script>
<script src="/pteam/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/pteam/public/dist/js/adminlte.js"></script>



</body></html>
@endsection
