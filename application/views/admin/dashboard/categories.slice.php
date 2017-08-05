@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Categories
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Categories</li>
    </ol>
</section>
@endsection

@section('content')
<div class="col-md-4">
     <div class="box">
        <form id="categoryForm" action="{{ base_url('ci-admin/categories/store') }}" method="post" role="form">
            <div class="box-header">
                <h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
                <div class="form-group">
                    <label for="category_name" class="control-label">Name</label>
                    <input id="category_name" type="text" name="category_name" class="form-control" placeholder="Category Name">                    
                </div>
                <div class="form-group">
                    <label for="category_guid" class="control-label">Slug</label>
                    <input id="category_guid" type="text" name="category_guid" class="form-control" placeholder="Category Slug">                    
                </div>
                <div class="form-group">
                    <label for="category_description" class="control-label">Description</label>
                    <input id="category_description" type="text" name="category_description" class="form-control" placeholder="Category Description">                    
                </div>            
            </div>
            <div class="box-footer">
                <button id="formBtn" type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add
                </button>
            </div>
        </form>
    </div>
</div>

<div class="col-md-8">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Categories</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <div class="clear-25"></div>

            <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Count</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($categories) > 0)
                        @foreach($categories as $category)
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->category_guid }}</td>
                            <td>{{ $category->category_description }}</td>
                            <td>{{ $category->category_count }}</td>
                            <td align="center">
                                <p>
                                    <a href="{{ base_url('ci-admin/categories/' . $category->id . '/edit') }}"  class="btn btn-primary btn-xs editBtn">
                                        <span class="fa fa-fw fa-pencil"></span>
                                    </a>
                                    <a href="{{ base_url('ci-admin/categories/' . $category->id . '/delete') }}"  class="btn btn-danger btn-xs">
                                        <span class="fa fa-fw fa-times"></span>
                                    </a>
                                </p>
                            </td>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
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

    $('.editBtn').click(function(e) {
        e.preventDefault();

        $.get($(this).prop('href'), function(data) {
            var form = JSON.parse(data);
            var id = form.id;
            $('#category_name').val(form.category_name);
            $('#category_guid').val(form.category_guid);
            $('#category_description').val(form.category_description);
            $('#categoryForm').prop('action', "{{ base_url('ci-admin/categories/" + id + "/update') }}");
            $('#formBtn').text('Update');
        });
    })
  });
</script>

@endsection