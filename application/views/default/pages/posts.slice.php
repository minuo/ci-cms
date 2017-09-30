@extends('default.layouts.home')

@section('title')
<title>{{ $page->post_title }} | {{ APPLICATION_NAME }}</title>
@endsection

@section('content')
<div class="container">
    <!--Section: Blog v.1-->
    <section class="section pb-3r">

        <!--Section heading-->
        <h1 class="text-center">Recent posts</h1>
        <!--Section description-->
        <p class="text-center">Feel free to look around, stay a while.</p>

        @if(count($posts) > 0)

            @foreach($posts as $post)

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-sm-5">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight z-depth-1-half">
                            <img src="{{ base_url('uploads/' . $post->guid . '.jpg') }}" alt="{{ $post->post_title }}" class="img-fluid">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-sm-7">
                        <!--Excerpt-->                        
                        <h4><strong>{{ $post->post_title }}</strong></h4>
                        <a href="" class="green-text"><span class="lead">{{ $post->category_name }}</span></a>
                        <p>{{ substr($post->post_body, 0, 150) . '...' }}</p>
                        <p>by <a><strong>{{ $post->author_name }}</strong></a>, {{ date_format(date_create($post->created_at), 'F d, Y') }}</p>
                        <a class="btn btn-success mb-3">Read more</a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr class="hr-width mb-5 mt-5 pb-3">
            @endforeach

        @endif    

    </section>
<!--Section: Blog v.1-->
</div>
@endsection