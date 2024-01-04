@extends('back.dashboard')

@section('dash__body')

<div class="p-3">
    <h3>Dashboard</h3>
</div>
    
<div class="mt-2">

    <div class="row m-0">

        <div class="col-md-2">
            <div class="card p-2 text-dark" style="font-size: 14px;">
                <div class="d-flex">
                    <div class="px-1">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <div>
                        <a href="#" class="stretched-link">
                            {{env('DB_DATABASE')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection