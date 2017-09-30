@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Roles
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Roles</li>
    </ol>
</section>
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">All Roles</h3>
        <a href="{{ base_url('ci-admin/roles/create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        @if(count($roles) > 0)
            @php $count = 0; @endphp
            @foreach($roles as $role)

                @if($count == 0)
                    <div class="row">
                @endif
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h4><strong>{{ $role->type_name }}</strong></h4>

                                <p>{{ $role->type_description }}</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-ban"></i>
                            </div>
                            <a href="{{ base_url('ci-admin/roles/' . $role->id . '/edit') }}" class="small-box-footer">
                                View <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->                

                @if($count == 3)
                    </div>
                @endif
                
                @php 
                    if($count >= 3) {
                        $count = 0;
                    } else {
                        $count++; 
                    }
                @endphp
            @endforeach
        @else
            <div class="pad margin no-print">
                <div class="callout callout-warning" style="margin-bottom: 0!important;">
                    <h4><i class="fa fa-info-circle"></i> Reminder:</h4>
                    You have not added any user roles yet, create a new one <a href="{{ base_url('ci-admin/roles/create') }}">here</a>
                </div>
            </div>        
        @endif
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