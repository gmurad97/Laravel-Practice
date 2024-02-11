@extends('layouts.main_layout')

@section('main.layout')
    <div class="wrapper animsition">
        <x-header />
        <div class="content-wrapper">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Header</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>Test1ddsds1</p>
                                </div>
                                <div class="panel-footer">
                                    This is standard panel footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
    </div> <!-- ./wrapper -->
@endsection
