@extends('layouts.main_layout')

@section('main.layout')
    <div class="wrapper animsition">
        {{-- <x-header /> --}}







        <!-- /.content-wrapper -->
        <div class="content-wrapper">
            <div class="container">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon"><i class="pe-7s-close"></i></div>
                        <div class="header-title">
                            <h1>Blank page</h1>
                            <small>it all starts here</small>
                            <ol class="breadcrumb">
                                <li><a href="index.html">This is</a></li>
                                <li class="active">Breadcrumb</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>This is page content</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>You can create here any grid layout you want. And any variation layout you imagine:)
                                        Check out main dashboard and other site. It use many different layout. </p>
                                </div>
                                <div class="panel-footer">
                                    This is standard panel footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.main content -->
            </div> <!-- /.container -->
        </div> <!-- /.content-wrapper -->














        {{-- <x-footer /> --}}
    </div> <!-- ./wrapper -->
@endsection
