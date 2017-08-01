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
        <a href="{{ base_url('dashboard/posts/add') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
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
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><a href="{{ base_url('dashboard/posts/' . $post->id . '/edit') }}" >{{ $post->title }} </a></td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->category }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->draft }}</td>
                            <td align="center">
                                <p>
                                    <a href="{{ base_url('dashboard/posts/' . $post->id . '/delete') }}"  class="btn btn-danger btn-xs">
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