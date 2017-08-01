@php
    // Get all unread and pending comments and messages
    $this->load->model('comments_model');
    $this->load->model('messages_model');
    $pending = $this->comments_model->get_pending();
    $unread = $this->messages_model->get_unread();
@endphp

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ base_url('dashboard/posts') }}"><i class="fa fa-pencil-square-o"></i> Posts</a></li>
        <li><a href="{{ base_url('dashboard/comments') }}"><i class="fa fa-comments"></i><span> Comments</span> @php if(isset($pending)): if(count($pending) > 0): echo '<span class="label pull-right bg-green">' . count($pending) . ' New</span>'; endif; endif; @endphp</a></li>
        <li><a href="{{ base_url('dashboard/works') }}"><i class="fa fa-th-large"></i> Works</a></li>
        <li><a href="{{ base_url('dashboard/messages') }}"><i class="fa fa-inbox"></i><span> Messages</span> @php if(isset($unread)): if(count($unread) > 0): echo '<span class="label pull-right bg-green">' . count($unread) . ' New</span>'; endif; endif; @endphp</a></li>
    
    </ul>
    
</section>
<!-- /.sidebar -->