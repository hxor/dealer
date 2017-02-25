<div class="site-footer-top">
    <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 footer_widget widget text_widget">
              <h4 class="widgettitle">Naga Mas Motor</h4>
                <p>Temukan motor Honda yang sesuai dengan Anda di sini. Dengan penawaran menarik dan DP ringan yang bisa Anda dapatkan. Hanya di Naga Mas Motor. Dealer resmi Honda</p>
            </div>
            <div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                <h4 class="widgettitle">Kategori Motor</h4>
                  <ul>
                    <li><a href="{{ route('motor')}}">All</a></li>
                    @foreach (App\Models\Category::all() as $category)
                      <li><a href="{{ route('motor.cat', $category->slug)}}">{{ $category->title }}</a></li>
                    @endforeach
                  </ul>
              </div>
            <div class="col-md-3 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                <h4 class="widgettitle">Layanan &amp; Bantuan</h4>
                  <ul>
                    <li><a href="{{ route('about-us') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                  </ul>
              </div>

              <div class="col-md-3 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                <h4 class="widgettitle">Kontak &amp; Kami</h4>
                    <i class="fa fa-home"></i></span> <b>Naga Mas Motor</b><br>
                    Jl. Brigjend Dharsono <br>
                    No.8 By Pass Cirebon, Indonesia<br><br>
                    <i class="fa fa-phone"></i> <b>0853 5382 8776</b><br>
                    <i class="fa fa-envelope"></i> <a href="mailto:example@info.com">imamsyarifudin321@gmail.com</a><br><br>
              </div>

          </div>
      </div>
</div>
<div class="site-footer-bottom">
  <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 copyrights-left">
              <p>&copy; {{ date('Y') }} Develop by <a href="https://facebook.com/O1O1OO11O">Hakim</a>. All Rights Reserved</p>
            </div>
            <div class="col-md-6 col-sm-6 copyrights-right">
                <ul class="social-icons social-icons-colored pull-right">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                    <li class="vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                    <li class="digg"><a href="#"><i class="fa fa-digg"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
