@extends('layouts.master')

@section('header', 'Category Dashboard')

@section('breadcrumb', 'Category')

@section('content')

<div class="box">
    <div class="box-header">
        <button type = "button" class="btn btn-primary" data-toggle = "modal" data-target = "#category-add">
            Add Category
        </button>
    </div>

    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc"tabindex = "0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Browsers popularity: activate to sort column descending">ID</th>
                                <th class="sorting" tabindex = "0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Category name: activate to sort column ascending">Category name</th>
                                <th class="sorting" tabindex = "0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                                <th class="sorting" tabindex = "0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Timestamp: activate to sort column ascending">Created at</th>
                                <th class="sorting" tabindex = "0" aria-controls="example2" rowspan="1" colspan="1" aria-label="edit or delete: activate to sort column ascending">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                            <tr role = "row"class="odd">
                                <td class="sorting_1">#{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    @if ($category->status == true)
                                        <span class="label label-success">Active</span>
                                    @elseif($category->status == false)
                                        <span class="label label-danger">Block</span>
                                    @endif
                                </td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-primary" type="button" onclick="editCategory({{ $category->id }})">Edit</button>
                                        <a href="{{route('category.delete', $category->id)}}" class="btn btn-danger">Del</a>
                                    </div>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id ="category-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create category</h4>
            </div>
            
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="modal-body">
                <form role = "form" action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputCategory">Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="inputCategory">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="category-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Edit category</h4>
            </div>
            @include('flash_message')
            <div class="modal-body">
               <form role="form" action="{{route('category.update')}}" method="POST">
                    <input type="hidden" id="category_id" name="category_id">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="category_edit">Category name</label>
                            <input type="text" class="form-control" name="category_name" id="cateegory_edit" placeholder="Enter the name">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="status" name="status">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

@endsection

@push('extra_script')

<script type="text/javascript">
    @if(count($errors) > 0)
        $('#category-add').modal('show');
    @endif
</script>
<script>
    function editCategory(id){
        var category_id = id;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url:'{{ route("category.update") }}',
            data:{
                id:category_id
            },
            success:function(data) {
                $("#category_id").val(data.id);
                $("#category_edit").val(data.category_name);
                $("#status").val(data.status);
                $("#category-edit").modal('show');
            }
        });
    }
</script>

@endpush