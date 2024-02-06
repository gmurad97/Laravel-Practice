@extends('layout.main')

@section('main_layout')
<x-navbar/>
    <div>
        <h1>Posts</h1>
        <ul type="square">
            @foreach ($posts as $post)
                <li>
                    {{ $post->title }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
