<nav class="navbar navbar-expand-lg position-fixed top-0 w-100 nav__bar">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/front/media/JPS Global Logo.svg" class="brand__logo" alt="JPS Global Logo">
      </a>
      <button class="navbar-toggler btn-light rounded-0 border-success py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars text-light"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('intro')}}">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
            @php
                $folders = DB::table('products')->groupBy('folder')->get();
            @endphp
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('products')}}">All Products</a></li>  
              @foreach ($folders as $item)
                <li class="pe-2"><a class="dropdown-item" href="{{route('category', ['category'=>$item->folder])}}">{{$item->folder}}</a></li>  
              @endforeach
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('products')}}">Our Products</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('infrastructure')}}">Infrastructure</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('media')}}">Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('blog')}}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" aria-current="page" href="{{route('contact')}}">Contact Us</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#" style="color: orange !important;">e-Brochure</a>
          </li> --}}
        </ul>
      </div>
    </div>
</nav>