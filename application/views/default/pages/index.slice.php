@extends('default.layouts.home')

@section('title')
Clean Blog - Start Bootstrap Theme
@endsection

@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ base_url('assets/default/img/home-bg.jpg') }}')">
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
        </div>
    </div>
    </div>
</header>
@endsection

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="col-sm-12">                      
                        <img src="{{ base_url('uploads/' . $post->guid . '.jpg') }}" class="img-responsive" width="100%" height="100%" />
                    
                        <div class="post-preview">
                            <a href="{{ base_url('posts/' . $post->guid ) }}">
                                <h2 class="post-title">{{ $post->post_title }}</h2>
                                <h3 class="post-subtitle">{{ substr($post->post_body, 0, 150) . '...' }}</h3>
                            </a>
                            <p class="post-meta">Posted by <a href="#">{{ $post->author_name }}</a> in <a href="#">{{ $post->category_name }}</a> on {{ date_format(date_create($post->created_at), 'F d, Y') }}</p>
                        </div>              
                    </div>
                    <hr>
                @endforeach
            @endif
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection