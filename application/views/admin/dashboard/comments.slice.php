@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Comments
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Comments</li>
    </ol>
</section>
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">All Comments</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <div class="clear-25"></div>

        <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Post Id</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($comments) > 0)
                    @foreach($comments as $comment)
                    @if($comment->pending == 1)
                        <tr style="background-color: #fff !important">
                    @else
                        <tr style="background-color: #efefef !important">
                    @endif
                            <td>{{ $comment->id }}</td>
                            <td><a href="{{ base_url('dashboard/comments/' . $comment->id . '/edit') }}" >{{ $comment->name }} </a></td>
                            <td>{{ $comment->post_id }}</td>
                            <td>{{ $comment->created_at }}</td>

                            @if($comment->pending == 1)
                                <td>Pending</td>
                            @else
                                <td>Approved</td>
                            @endif
                                              
                            <td align="center">
                                <p>
                                    <a href="{{ base_url('dashboard/comments/' . $comment->id . '/delete') }}"  class="btn btn-danger btn-xs">
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