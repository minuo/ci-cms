@extends('layouts.default')

@section('title')
<title>Home | {{ APPLICATION_NAME }}</title>
@endsection

@section('content')

<div class="container">
    
    {{ $page->post_body }}

</div>

<div class="clear-45"></div>
@endsection