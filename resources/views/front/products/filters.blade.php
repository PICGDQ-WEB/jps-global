<div style="position: sticky; top: 150px;">
    <div style="font-size: 1.2rem; font-weight: 700;" class="mb-3">Category</div>
    @php
        $folders = DB::table('products')->groupBy('folder')->get();
    @endphp
    @foreach ($folders as $folder)
        <div class="mb-2">
            <a href="{{route('category', ['category'=>$folder->folder])}}">
                <button class="btn btn-light rounded-0 w-100 py-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            {{$folder->folder}}
                        </div>
                        <div>
                            <i class="fa-solid fa-caret-right"></i>
                        </div>
                    </div>
                </button>
            </a>
        </div>
    @endforeach
</div>