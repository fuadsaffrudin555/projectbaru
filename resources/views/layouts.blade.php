<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | @yield('title')</title>
    <link href="{{asset('style/img/favicon.png')}}" rel="icon" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="{{asset('style/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('style/css/sb-admin-2.min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('style/css/datatables-bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">
    <link href="{{asset('style/vendor/bootstrap-fileinput-master/css/fileinput.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/vendor/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/vendor/select2/select2-bootstrap.min.css')}}" rel="stylesheet">
    {{-- font awesome picker --}}
    <link href="{{asset('style/vendor/fontawesome-iconpicker/fontawesome-iconpicker.min.css')}}" rel="stylesheet">


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('style/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/vendor/bootstrap-fileinput-master/js/plugins/sortable.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/vendor/bootstrap-fileinput-master/js/fileinput.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/vendor/bootstrap-fileinput-master/themes/fa/theme.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/vendor/bootstrap-fileinput-master/js/locales/id.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('style/vendor/jquery-easing/jquery.easing.min.js')}}" type="text/javascript"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('style/js/sb-admin-2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/js/jquery-datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/js/datatables-bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/vendor/select2/select2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/vendor/fontawesome-iconpicker/fontawesome-iconpicker.min.js')}}" type="text/javascript"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('komponen.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('komponen.navbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> --}}
                        {{-- <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1> --}}
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>        --}}
                    {{-- </div> --}}

                    <!-- Content Row -->
                    <div class="row">
                        @include('komponen.succes')
                        @include('komponen.error')
                        @yield('content')
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('komponen.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih tombol "Logout" untuk keluar. "Cancel" untuk batal keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@stack('scripts')

