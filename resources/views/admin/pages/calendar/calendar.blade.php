@extends('admin.layouts.main') 
@section('main')  
      <!--app-content open-->
      <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Default Calender</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Default Calender</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW OPEN-->
                        <div class="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="cal1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW CLOSE-->
                    </div>
                    <!-- CONTAINER CLOSE-->
                </div>
            </div>
            <!--app-content closed-->

@endsection


@section('jsAdmin')  
    <!-- DEFAULT CALENDAR JS-->
    <script src="{{asset('themes/admin/assets/plugins/calendar/underscore-min.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/calendar/moment.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/calendar/calendar.js')}}"></script>
    <script src="{{asset('themes/admin/assets/plugins/calendar/defaultcalendar.js')}}"></script>
    <script>

    </script>
@endsection


