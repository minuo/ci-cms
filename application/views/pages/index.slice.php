@extends('layouts.default')

@section('title')
<title>{{ $page->post_title }} | {{ APPLICATION_NAME }}</title>
@endsection

@section('content')

    {{ $page->post_body }}

@endsection