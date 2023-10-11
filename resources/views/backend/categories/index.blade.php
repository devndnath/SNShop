@extends('backend.common.main')

@section('body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Category
                                <small>Multikart Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Digital</li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <form class="form-inline search-form search-box">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search..">
                                </div>
                            </form>

                            <button type="button" class="btn btn-primary mt-md-0 mt-2" data-bs-toggle="modal"
                                data-original-title="test" data-bs-target="#exampleModal">Add
                                Category</button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="table all-package table-category " id="editableTable">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Category Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($category as $category)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('uploads/category/' . $category->image) }}"
                                                        data-field="image" alt="">
                                                </td>

                                                <td data-field="name">{{ $category->name }}</td>

                                                <td data-field="name">{{ $category->slug }}</td>


                                                @if ($category->status == '0')
                                                    <td class="order-success" data-field="status">
                                                        <span>Active</span>
                                                    </td>
                                                @endif
                                                @if ($category->status == '1')
                                                    <td class="order-pending" data-field="status">
                                                        <span>Inactive</span>
                                                    </td>
                                                @endif




                                                <td>
                                                    <a href="#">
                                                        <i class="fa fa-edit" data-bs-toggle="modal"
                                                            data-original-title="test"
                                                            data-bs-target="#editModal{{ $category->id }}"
                                                            title="Edit"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="fa fa-trash"data-bs-toggle="modal"
                                                        data-original-title="test"
                                                        data-bs-target="#deleteModal{{$category->id}}" title="Delete"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                           @include('backend.categories.modal')
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
        <!-- Create Modal -->
        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add
                            Digital Product</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="{{ url('admin/category') }}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="modal-body">


                            <div class="form">
                                <div class="form-group">
                                    <label for="validationCustom01" class="mb-1">Category Name :</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="name"
                                        value="{{ old('name') }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom03" class="mb-1">Category Slug :</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="slug"
                                        value="{{ old('slug') }}" required>
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <label for="validationCustom03" class="mb-1">Category Image :</label>
                                    <input class="form-control" id="validationCustom02" type="file" name="image">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" value="Save">Save</button>
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>


    
@endsection
