@extends('admin.layouts.main') 
@section('main')  
<!--app-content open-->
<div class="main-content app-content mt-0">

    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Quản lý đơn hàng</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->
            <div class="row row-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-4 d-flex">
                                <div class="mr-2">
                                    <button class="btn btn-info" id="btn_search">Button 1</button>
                                </div>
                                <div class="mx-2">
                                    <button class="btn btn-success" id="open" type="button">Button 2</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="search">
                            </div>
                            <div class="mt-4 ">
                             <button class="btn btn-success" id="open" type="button">Display Button 3</button>
                            </div>
                            
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-order">
                                <!-- <h6 class="mb-2">Orders</h6> -->
                                <h2 class="text-end"><i class="fa fa-cart-plus icon-size float-start text-danger text-danger-shadow border-danger brround p-3"></i><span>$7,543</span></h2>
                                <p class="mb-0 pt-5">This Week Orders<span class="float-end">60%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-widget">
                                <!-- <h6 class="mb-2">Total Tax</h6> -->
                                <h2 class="text-end"><i class="mdi mdi-eye icon-size float-start text-warning text-warning-shadow border-solid border-warning brround p-3"></i><span>5,578</span></h2>
                                <p class="mb-0 pt-5">This Week Views<span class="float-end">35%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-widget">
                                <!-- <h6 class="mb-2">Total Profit</h6> -->
                                <h2 class="text-end"><i class="icon-size mdi mdi-currency-usd float-start text-primary text-primary-shadow border-solid border-primary brround p-3"></i><span>$2,987</span></h2>
                                <p class="mb-0 pt-5">This Week Earnings<span class="float-end">74%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-widget">
                                <!-- <h6 class="mb-2">Total Sales</h6> -->
                                <h2 class="text-end"><i class="mdi mdi-comment-account-outline icon-size float-start text-success text-success-shadow border-solid border-success brround p-3"></i><span>9743</span></h2>
                                <p class="mb-0 pt-5">This Week Comments<span class="float-end">789</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <!-- Row -->
              <!-- Row -->
              <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Quản lý đơn hàng</h3>
                    </div>
                    <div class="card-body">
                        <button id="table2-new-row-button" class="btn btn-primary mb-4"> Thêm một đơn hàng</button>
                        <div class="table-responsive">
                            <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                                <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bella</td>
                                        <td>Chloe</td>
                                        <td>System Developer</td>
                                        <td>2018/03/12</td>
                                        <td>$654,765</td>
                                        <td>b.Chloe@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Donna</td>
                                        <td>Bond</td>
                                        <td>Account Manager</td>
                                        <td>2012/02/21</td>
                                        <td>$543,654</td>
                                        <td>d.bond@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Harry</td>
                                        <td>Carr</td>
                                        <td>Technical Manager</td>
                                        <td>20011/02/87</td>
                                        <td>$86,000</td>
                                        <td>h.carr@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Lucas</td>
                                        <td>Dyer</td>
                                        <td>Javascript Developer</td>
                                        <td>2014/08/23</td>
                                        <td>$456,123</td>
                                        <td>l.dyer@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Karen</td>
                                        <td>Hill</td>
                                        <td>Sales Manager</td>
                                        <td>2010/7/14</td>
                                        <td>$432,230</td>
                                        <td>k.hill@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Dominic</td>
                                        <td>Hudson</td>
                                        <td>Sales Assistant</td>
                                        <td>2015/10/16</td>
                                        <td>$654,300</td>
                                        <td>d.hudson@datatables.net</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <!-- INTERNAL Edit-Table JS -->
    <script src="{{asset('themes/admin/assets/plugins/edit-table/bst-edittable.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/edit-table/edit-table.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('themes/admin/assets/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('themes/admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
@endsection


