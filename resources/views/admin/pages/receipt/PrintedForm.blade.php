@extends('admin.layouts.main') 
@section('main')  
<!--app-content open-->
<div class="main-content app-content mt-0">

    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Quản lý mẫu in </h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mẫu in</li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->
            <div class="row row-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="search">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info btn-block" id="btn_search">Tra cứu</button>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success btn-block" id="open" type="button">Tạo mới</button>
                </div>
                </div>
                </div>
            </div>
            </div>
            <!-- Row -->
            <div class="row row-sm">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin mẫu in</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-hover mb-0" id="sell-datatable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Samantha May</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>$43,198</td>
                                                    </tr>
                                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- End Row -->

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content closed-->

@endsection


@section('jsAdmin')  
    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('themes/admin/assets/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('themes/admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
@endsection


