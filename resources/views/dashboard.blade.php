@extends('layouts.main_layout')

@section('main.layout')
    <div class="wrapper animsition">
        <x-header />
        <div class="content-wrapper">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Dashboard</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="dsds">This is Dashboard</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
    </div>
@endsection
