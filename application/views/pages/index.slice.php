@extends('layouts.default')

@section('title')
<title>Home | {{ APPLICATION_NAME }}</title>
@endsection

@section('content')

{{ $page->post_body }}

<div class="clear-45"></div>
@endsection