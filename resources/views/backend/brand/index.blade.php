@extends('backend.common.main')

@section('body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Brand
                                <small> Admin panel</small>
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
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Brand</li>
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
                                </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="table all-package table-category " id="editableTable">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($brand as $brand)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('uploads/brand/' . $brand->image) }}"
                                                        data-field="image" alt="">
                                                </td>

                                                <td data-field="name">{{ $brand->name }}</td>

                                                <td data-field="name">{{ $brand->slug }}</td>


                                                @if ($brand->status == '0')
                                                    <td class="order-success" data-field="status">
                                                        <span>Active</span>
                                                    </td>
                                                @endif
                                                @if ($brand->status == '1')
                                                    <td class="order-pending" data-field="status">
                                                        <span>Inactive</span>
                                                    </td>
                                                @endif




                                                <td>
                                                    <a href="#">
                                                        <i class="fa fa-edit" data-bs-toggle="modal"
                                                            data-original-title="test"
                                                            data-bs-target="#editModal{{ $brand->id }}"
                                                            title="Edit"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="fa fa-trash"data-bs-toggle="modal"
                                                        data-original-title="test"
                                                        data-bs-target="#deleteModal{{$brand->id}}" title="Delete"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                           @include('backend.brand.modal')
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
                           Brand</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="{{ url('admin/brand') }}"  method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="modal-body">


                            <div class="form">
                                <div class="form-group">
                                    <label for="validationCustom01" class="mb-1">Brand Name :</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="name"
                                        value="{{ old('name') }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom03" class="mb-1">Brand Slug :</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="slug"
                                        value="{{ old('slug') }}" required>
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="form-group mb-0">
                                    <label for="validationCustom03" class="mb-1">Brand Image :</label>
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

    <script>
        function selectValidation() {
            var selectIsValid = true;
            $('.selectcategory').each(function(){
                if($(this).val()==='') {
                    selectIsValid = false;
                } else {
                    selectIsValid = true;
                }
            });
            console.log(selectIsValid);
            if(selectIsValid) {
            }
            return false;
        }
    </script>


    
@endsection
