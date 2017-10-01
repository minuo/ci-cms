<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand" href="{{ base_url() }}">{{ APPLICATION_NAME }}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            @if(count($pages) > 0)
                @foreach($pages as $page)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ base_url('pages/' . $page->guid) }}">{{ $page->post_title }}</a>
                    </li>                    
                @endforeach
            @endif
        </ul>
    </div>
    </div>
</nav>