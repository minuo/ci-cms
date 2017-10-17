@extends('default.layouts.home')

@section('title')
{{ $post->post_title }} - {{ APPLICATION_NAME }}
@endsection

@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ base_url('uploads/' . $post->guid . '.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{ $post->post_title }}</h1>
                    @if($post->post_type == 'post')                
                        <span class="meta">Posted by <a href="{{ base_url('posts/' . $post->author_name ) }}">{{ $post->author_name }}</a> in <a href="{{ base_url('posts/' . $post->category_name ) }}">{{ $post->category_name }}</a> on {{ date_format(date_create($post->created_at), 'F d, Y') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<!-- Main Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {{ $post->post_body }}
            </div>
        </div>
    </div>
</article>
@endsection