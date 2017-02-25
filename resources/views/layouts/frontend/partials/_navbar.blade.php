<div class="container sp-cont">
    <div class="search-function">

        <span><i class="fa fa-phone"></i> Hubungi kami <strong>0853 5382 8776</strong></span>
    </div>
    <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
    <!-- Main Navigation -->
    <nav class="main-navigation dd-menu toggle-menu" role="navigation">
        <ul class="sf-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="javascript:void(0)">Motor</a>
                <ul class="dropdown">
                    <li><a href="{{ route('motor')}}">All</a></li>
                    @foreach (App\Models\Category::all() as $category)
                      <li><a href="{{ route('motor.cat', $category->slug)}}">{{ $category->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Kontak</a></li>
            <li><a href="{{ route('about-us') }}">Tentang Kami</a></li>
        </ul>
    </nav>

</div>
