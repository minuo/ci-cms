@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Messages
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Messages</li>
    </ol>
</section>
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">All Messages</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <div class="clear-25"></div>

        <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Recieved</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($messages) > 0)
                    @foreach($messages as $message)
                     @if($message->read == 0)
                        <tr style="background-color: #fff !important">
                    @else
                        <tr style="background-color: #efefef !important">
                    @endif
                            <td>{{ $message->id }}</td>
                            <td><a href="{{ base_url('dashboard/messages/' . $message->id . '/view') }}" >{{ $message->name }} </a></td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ $message->created_at }}</td>
                            @if($message->read == 1)
                                <td>Read</td>
                            @else
                                <td>Unread</td>
                            @endif
                                              
                            <td align="center">
                                <p>
                                    <a href="{{ base_url('dashboard/messages/' . $message->id . '/delete') }}"  class="btn btn-danger btn-xs">
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