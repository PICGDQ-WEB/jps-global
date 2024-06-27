@extends('back.dashboard')

@section('dash__body')
<style>
    table a:hover{
        text-decoration: none !important;
    }
    .table td
    {
        vertical-align: middle !important;
    }
</style>

<div class="p-4">
    <div class="d-flex align-items-center">
        <div>
            <h3 class="m-0 p-0">Posts</h3>
        </div>
        <div class="px-3">
            <a href="/master/posts/add">
                <button class="btn btn-primary btn-sm">Add new</button>
            </a>
        </div>
    </div>
    <nav aria-label="breadcrumb p-0">
        <ol class="breadcrumb m-0 px-0 py-1">
        <li class="breadcrumb-item"><a href="/master">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Posts</li>
        </ol>
    </nav>
    
    <div class="card border-0 p-3 my-3" id="overflowCard">
    
        <table class="mt-3 table table-sm table-hover" id="myDataTable">
            <thead>
                <tr>
                    <th width="40px">ID</th>
                    <th width="40px">Banner</th>
                    <th>Post_Title</th>
                    <th>Slug</th>
                    <th>Date_Added</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($posts as $post)
                <tr>
                    <td>{{$i++}}</td>
                    <td class="text-center">
                        <img src="/assets/images/blogs/{{$post->post_featured}}" alt="" style="height: 50px; width: 50px; object-fit: cover; border-radius: 4px;">
                    </td>
                    <td class="col-4">
                        <a href="/master/posts/edit?pid={{$post->id}}" style="text-decoration: underline; color: inherit;">
                            <span title="{{$post->post_title}}">{{$post->post_title}}</span>
                        </a>
                    </td>
                    <td>{{$post->post_url}}</td>
                    <td>{{$post->post_added}}</td>
                    <td>
                        <a href="/master/posts/edit?pid={{$post->id}}">
                            <button class="btn btn-primary btn-sm"><i class="fa-solid fa-edit"></i></button>
                        </a>
                        <a href="/master/posts/delete?pid={{$post->id}}" onclick="return confirm('Are you sure to delete this post?');">
                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
    </div>
</div>

@endsection
