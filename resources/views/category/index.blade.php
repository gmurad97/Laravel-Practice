@extends("layouts.main")

@section("content")

<h1>Categories List</h1>
<ul>
    @foreach($categories as $category)
    <li><a href="{{ route("categories.show",["id"=>$category->id]) }}">{{ $category->name }}</a></li>
    @endforeach
</ul>

@endsection
