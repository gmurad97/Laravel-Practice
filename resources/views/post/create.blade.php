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
                                        <h4>Add Post</h4>
                                    </div>
                                    {{ now()->year() }}
                                </div>
                                <div class="panel-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="text-muted">We'll never share your email with
                                                anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="text-muted">We'll never share your email with
                                                anyone else.</small>
                                        </div>
                                    </form>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-success w-md m-b-5">Success</button>
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
