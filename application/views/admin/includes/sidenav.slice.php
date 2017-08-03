<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ base_url('ci-admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ base_url('ci-admin/pages') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
        <li><a href="{{ base_url('ci-admin/posts') }}"><i class="fa fa-pencil-square-o"></i> <span>Posts</span></a></li>
        <li><a href="{{ base_url('ci-admin/comments') }}"><i class="fa fa-comments"></i><span> Comments</span> @php if(isset($pending)): if(count($pending) > 0): echo '<span class="label pull-right bg-green">' . count($pending) . ' New</span>'; endif; endif; @endphp</a></li>
        
    </ul>
    
</section>
<!-- /.sidebar -->