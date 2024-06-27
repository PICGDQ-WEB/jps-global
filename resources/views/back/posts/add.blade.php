@extends('back.dashboard')

@section('dash__body')
<link rel="stylesheet" href="/richtexteditor/rte_theme_default.css">
<script src="/richtexteditor/rte.js"></script>
<script src="/richtexteditor/plugins/all_plugins.js"></script>

<style>
    .rte-modern.rte-desktop.rte-toolbar-default
    {
        height: 80vh !important;
        width: 100% auto;
    }
</style>

<div class="p-4">
    <a href="/master/posts"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
    <h3 class="m-0 p-0 mt-3">Add Post</h3>
    <nav aria-label="breadcrumb p-0">
        <ol class="breadcrumb m-0 px-0 py-1">
        <li class="breadcrumb-item"><a href="/master">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/master/posts">Posts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>
    
    <form actionUrl="/master/posts/add-post-form" method="post" id="addNewPost">
        @csrf
        <div class="row m-0">
        
            <div class="col-md-9 p-0 pt-3">
                <textarea id="inp_editor1" name="post_desc"></textarea>  
            </div>
        
            <div class="col-md-3 px-md-3">
                <div class="mb-3">
                    <label for="" class="form-label">Post Title</label>
                    <input type="text" class="form-control" placeholder="Post Title" name="post_title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Slug</label>
                    <input type="text" class="form-control" placeholder="Enter URL" name="p_slug">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Banner Image (Width: 1200px)</label>
                    {{-- <div class="border text-center bg-white rounded" style="height: 120px;">
                        <img src="/assets/images/used/add-image-icon.png" alt="" style="height: 118px; width: 100%; object-fit: contain;" id="serviceBanner">
                    </div> --}}
                    <div class="input-group mt-2 mb-3">
                        <label for="bannerInp" class="btn bg-white border w-100">Select Banner</label>
                        <input type="file" class="form-control" id="bannerInp" name="p_banner" style="display: ;">
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" id="save">Add new post</button>
                </div>
            </div>
        
        </div>
    
    </form>
    
    @php
        $statement  = DB::table("posts")->orderBy('id', 'desc')->first();
        $nextID = $statement->id+1;
    @endphp
    
    <script>
    
        $("#addNewPost").submit(function(e)
        {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('actionUrl');
            $('#save').prop('disabled', true);
            $('#save').html('<div class="spinner-border spinner-sm text-light spinner-border-sm" role="status"><span class="visually-hidden"></span></div>');
            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                processData: false,
                contentType: false,
                // cache: false,
                success: function(data)
                {
                    $('#save').prop('disabled', false);
                    if(data == true)
                    {
                        $('#save').html('Add new course');
                        window.location.replace('/master/posts/edit?pid='+{{$nextID}})
                    }
                    else
                    {
                        $('#save').html('Add new course');
                    }
                }
            });
        });
    
    </script>
</div>
@endsection

