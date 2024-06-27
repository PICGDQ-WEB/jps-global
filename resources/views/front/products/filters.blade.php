<div style="position: sticky; top: 150px;">
    <div style="font-size: 1.2rem; font-weight: 700;" class="mb-3">Category</div>
    <div class="mb-2">
        <a href="{{route('products')}}">
            <i class="fa-regular fa-folder-open"></i> All Products
        </a>
    </div>
    @php
        $folders = DB::table('products')->groupBy('folder')->get();
    @endphp
    @foreach ($folders as $folder)
        <div class="mb-2">
            <a href="{{route('category', ['category'=>$folder->folder])}}">
                <i class="fa-regular fa-folder-open"></i> {{$folder->folder}}
            </a>
        </div>
    @endforeach
</div>