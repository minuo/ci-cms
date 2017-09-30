@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Pages
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Pages</li>
    </ol>
</section>
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">All Pages</h3>
        <a href="{{ base_url('ci-admin/pages/create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <div class="clear-25"></div>

        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tr>
            </thead>
            <tbody>
                 @if(count($pages) > 0)
                    @foreach($pages as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->post_title }}</td>
                            <td>{{ $post->guid }}</td>
                            <td>{{ date_format(date_create($post->created_at), 'm-d-Y h:m: a') }}</td>
                            
                            @if($post->post_status == 'published')                                
                                <td><small class="label label-success text-uppercase">{{ $post->post_status }}</small></td>
                            @elseif($post->post_status == 'draft')
                                <td><small class="label label-info text-uppercase">{{ $post->post_status }}</small></td>
                            @elseif($post->post_status == 'pending')
                                <td><small class="label label-warning text-uppercase">{{ $post->post_status }}</small></td>
                            @endif

                            <td align="center">
                                <p>
                                    <a href="{{ base_url('ci-admin/pages/' . $post->id . '/edit') }}"  class="btn btn-primary btn-xs editBtn">
                                        <span class="fa fa-fw fa-pencil"></span>
                                    </a>
                                    <a href="{{ base_url('ci-admin/pages/' . $post->id . '/delete') }}"  class="btn btn-danger btn-xs">
                                        <span class="fa fa-fw fa-times"></span>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    @endforeach
                @endif  
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('page-scripts')
<!-- DataTables -->
<script src="{{ base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ base_Url('assets/admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
        searching: false,
        order: [[ 0, "desc" ]]
    });
  });
</script>

@endsection