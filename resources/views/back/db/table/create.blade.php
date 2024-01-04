@extends('back.dashboard')

@section('dash__body')

<div class="p-3">
    <h5>Create Table</h5>

    <div class="border-top mt-3">
        
        <form action="" class="mt-3">
            @csrf
            <div class="row m-0">
                <div class="col-md-3 mb-3">
                    <label for="">Table name</label>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="col-md-9 mb-3"></div>

                <div class="col-md-2 mb-3">
                    <label for="">Table name</label>
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>
        </form>

    </div>

</div>

@endsection