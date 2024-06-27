@extends('back.dashboard')

@section('dash__body')

<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <form class="modal-content" method="post" enctype="multipart/form-data" actionUrl="{{route('addProducts')}}">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-plus-circle"></i> Add Product</h1>
            </div>
            <div class="modal-body row m-0">
                <div class="col-md-12 mb-2">
                    <label for="">Product Title</label>
                    <input type="text" class="form-control" name="product_title">
                </div>
                <div class="col-md-12 mb-2">
                    <label for="">Product Category</label>
                    <select name="product_category" class="form-control">
                        <option value="" selected disabled>--- Select product category ---</option>
                        @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->cat_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="">Product Description</label>
                    <textarea id="inp_editor1" style="max-width: 100%;" name="product_desc"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Select images</label>
                    <div class="mt-1">
                        <input type="file" class="form-control" name="product_images[]" multiple accept="image/*">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="submitMe(this);">Save changes</button>
            </div>
        </form>
    </div>
</div>

<div class="p-3 d-flex align-items-center">
    <div>
        <h3 class="mb-0">Products</h3>
    </div>
    <div class="px-3">
        <button class="btn btn-link btn-sm rounded-1" data-bs-toggle="modal" data-bs-target="#addProductModal">Add new</button>
    </div>
</div>
    
<div class="mt-2">

    <table class="table table-sm table-striped table-bordered">
        <thead>
            <th class="px-2">ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <td class="px-2">{{$item->id}}</td>
                <td>
                    {{$item->product_title}}
                    <div class="d-flex" style="font-size: 12px;">
                        <div class="text-primary">
                            <a href="#">Edit</a>
                        </div>
                        <div class="px-2 text-danger">
                            <a href="#">Delete</a>
                        </div>
                    </div>
                </td>
                <td>{{$item->product_category}}</td>
                <td style="font-size: 12px;">Added on {{date('d-m-Y', strtotime($item->product_date))}}</td>
            @endforeach
        </tbody>
    </table>

</div>

@endsection