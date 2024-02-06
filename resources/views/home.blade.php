@extends('layout.main')

@section('main_layout')

<!-- <x-navbar :navbarData="$menuItems" /> -->

@component("components.navbar",['navbarData' => $menuItems])
<ul>
<li>1</li>
<li>2</li>
<li>3</li>
</ul>
@endcomponent


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
<x-footer :footerName="$footerName" />

@endsection
