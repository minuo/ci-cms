@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Posts
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Posts</li>
    </ol>
</section>
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">All Posts</h3>
        <a href="{{ base_url('ci-admin/posts/create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <div class="clear-25"></div>

        <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Category</th>
                    <th>Created</th>
                    <th>Draft</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($posts))
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->post_title }}</td>
                            <td>{{ $post->post_guid }}</td>
                            <td>{{ $post->post_category }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->post_status }}</td>
                            <td></td>
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