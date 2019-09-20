@extends('layouts.site')

@section('sidebar')
    <a href="{{ url('/admin') }}">section 'sidebar'</a>
@endsection


@section('content')
	lang: {{ $lang }}
	<br>
	<h2>books:</h2>
	@foreach ($books as $book)
    	<p>Name: {{ $book->name }}</p>
	@endforeach
@endsection

