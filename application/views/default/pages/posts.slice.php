<div class="container">
    <div class="divider-new">
        <h2 class="h2-responsive wow fadeIn">Section Title</h2>
    </div>


    <div class="col-lg-12">
        <div class="row">

            @if(count($posts) > 0)

                @foreach($posts as $post)
                    <div class="col-lg-3">
                        <!--Card-->
                        <div class="card wow fadeIn">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(25).jpg" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block text-center">
                                <!--Title-->
                                <h4 class="card-title">{{ $post->post_title }}</h4>
                                <hr>
                                <!--Text-->
                                <p class="card-text">{{ substr($post->post_body, 0, 150) . '...' }}</p>
                                <a href="" class="btn btn-primary">Read More</a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                @endforeach

            @endif
            

        </div>        
    </div>

</div>