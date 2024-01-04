@extends('back.layout')
    
@section('head')
    <title>Login - Admin | {{env('APP_NAME')}}</title>
@endsection

@section('body')
    
<div style="height: 100vh;" class="d-flex w-100 align-items-center justify-content-center">

    <div class="container col-md-4 p-3 p-md-4 shadow-sm rounded-4 bg-white">
        <h3 class="text-center mb-3"><i class="fa-solid fa-user-secret"></i> Master Access</h3>
        <form action="{{route('masterLogin')}}" method="post">
            @csrf
            <div class="form-group mb-3">
              <label for="" style="font-size: 12px;">Username</label>
              <input type="text" class="form-control" id="" placeholder="Enter username" name="username">
            </div>
            <div class="form-group mb-4">
              <label for="" style="font-size: 12px;">Password</label>
              <input type="password" class="form-control" id="" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-success btn-sm"><i class="fa-solid fa-lock"></i> Grant Access</button>
          </form>
    </div>

</div>

@endsection