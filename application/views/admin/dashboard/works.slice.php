@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Works
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Works</li>
    </ol>
</section>
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">All Posts</h3>
        <a href="{{ base_url('dashboard/works/add') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
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
                    <th>Type</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($works) > 0)
                    @foreach($works as $work)
                        <tr>
                            <td>{{ $work->id }}</td>
                            <td><a href="{{ base_url('dashboard/works/' . $work->id . '/edit') }}" >{{ $work->title }} </a></td>
                            <td>{{ $work->slug }}</td>
                            <td>{{ $work->type }}</td>
                            <td>{{ $work->date }}</td>
                            <td align="center">
                                <p>
                                    <a href="{{ base_url('dashboard/works/' . $work->id . '/delete') }}"  class="btn btn-danger btn-xs">
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