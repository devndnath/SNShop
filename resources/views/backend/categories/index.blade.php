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
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Category</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/digital-product/graphic-design.png"
                                                data-field="image" alt="">
                                        </td>

                                        <td data-field="name">Graphic Design</td>

                                        <td data-field="price">$57.00</td>

                                        <td class="order-success" data-field="status">
                                            <span>Success</span>
                                        </td>

                                        <td data-field="name">Digital</td>

                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>

                                            <a href="javascript:void(0)">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="assets/images/digital-product/ebooks.png" alt="">
                                        </td>

                                        <td data-field="name">eBook</td>

                                        <td data-field="price">$462.00</td>

                                        <td class="order-pending" data-field="status">
                                            <span>Pending</span>
                                        </td>

                                        <td data-field="name">Digital</td>

                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>

                                            <a href="javascript:void(0)">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="assets/images/digital-product/lecture-video-recorder.jpg"
                                                alt="">
                                        </td>

                                        <td data-field="name">Recorded lectures</td>

                                        <td data-field="price">$54.00</td>

                                        <td class="order-success" data-field="status">
                                            <span>Success</span>
                                        </td>

                                        <td data-field="name">Digital</td>

                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>

                                            <a href="javascript:void(0)">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="assets/images/digital-product/application.jpg" alt="">
                                        </td>

                                        <td data-field="name">Application</td>

                                        <td data-field="price">$576.00</td>

                                        <td class="order-warning" data-field="status">
                                            <span>Waiting</span>
                                        </td>

                                        <td data-field="name">Digital</td>

                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>

                                            <a href="javascript:void(0)">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="assets/images/digital-product/web-dev.jpg" alt="">
                                        </td>

                                        <td data-field="name">Websites</td>

                                        <td data-field="price">$782.00</td>

                                        <td class="order-success" data-field="status">
                                            <span>Success</span>
                                        </td>

                                        <td data-field="name">Digital</td>

                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>

                                            <a href="javascript:void(0)">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
     <!-- Modal -->
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
                <form action="{{url('admin/category')}}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="modal-body">
                        
                            
                            <div class="form">
                                <div class="form-group">
                                    <label for="validationCustom01" class="mb-1">Category Name :</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="name" required>
                                    @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div> 
                                <div class="form-group">
                                    <label for="validationCustom03" class="mb-1">Category Slug :</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="slug" required>
                                    @error('slug')
                                    <small class="text-danger">{{$message}}</small>
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
                        <button class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection