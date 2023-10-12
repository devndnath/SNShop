

 <!-- edit Modal -->
 <div class="modal fade" id="editModal{{ $subcategory->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Update Category</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('admin/subcategory/'.$subcategory->id)}}"
                method="post" enctype="multipart/form-data">
                @csrf
                @method('put')


                <div class="modal-body">


                    <div class="form">
                        <div class="form-group">
                            <label for="validationCustom01"
                                class="mb-1">Category Name :</label>
                            <input class="form-control" id="validationCustom01"
                                type="text" name="name"
                                value="{{ $subcategory->name }}">
                            @error('name')
                                <small
                                    class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="validationCustom03"
                                class="mb-1">Category Slug :</label>
                            <input class="form-control" id="validationCustom01"
                                type="text" name="slug"
                                value="{{ $subcategory->slug }}">
                            @error('slug')
                                <small
                                    class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-0">
                            <label for="validationCustom03"
                                class="mb-1">Category Image :</label>
                            <input class="form-control" id="validationCustom02"
                                type="file" name="image">
                                @if($subcategory->image)
                                <img src="{{asset('uploads/category/'.$subcategory->image)}}" width="60px" height="60px" alt=""/>
                                @endif
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit"
                        value="Save">Update</button>
                    <button class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$subcategory->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Category</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
              <div class="modal-body">
                   <div class="">
                    Are You Sure?

                   </div>
              </div>
                <div class="modal-footer">
                    <a href="{{url('admin/subcategory/'.$subcategory->id.'/delete')}}">
                        <button class="btn btn-primary" type="submit" value="Save">Yes!</button>
                    </a>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
           
        </div>
    </div>
</div>
