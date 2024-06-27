@extends('back.layout')
    
@section('head')
    <title>Dashboard - Admin | {{env('APP_NAME')}}</title>
@endsection

@section('body')

@php
    $tables = DB::select('SHOW TABLES');
@endphp

<div class="p-0" style="height: 100vh;">
    <div class="d-flex" style="height: 100%;">
        {{-- side-navbar --}}
        <div class="col-lg-2" style="">
            <div class="d-flex flex-column bg-dark p-4" style="height: 100%;">
                <div class="flex-fill">
                    <div>
                        <img src="/front/media/images/picgdq.svg" alt="" class="w-100">
                    </div>
        
                    <div class="mt-4 nav__items">
                        <ul style="color: #a3a3a3;">
                            <li>
                                <a href="{{route('masterDashboard')}}"><i class="px-2 fa-brands fa-hive"></i> Dashboard</a>
                            </li>
                            
                            <li>
                                <a href="/master/posts"><i class="px-2 fa-regular fa-newspaper"></i> Posts</a>
                            </li>
                            {{-- <li>
                                <a href="{{route('adminProducts')}}"><i class="px-2 fa-solid fa-cube"></i> Products</a>
                            </li> --}}
                        </ul>
        
                    </div>
                </div>
                <div class="nav__items">
                    <ul>
                        <li>
                            <a href="{{route('logout')}}" class="text-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- end of side-navbar --}}

        <div class="col-lg-10 p-0" style="height: 100vh; overflow-y: auto;">

            @yield('dash__body')

        </div>

    </div>
</div>

    
@endsection