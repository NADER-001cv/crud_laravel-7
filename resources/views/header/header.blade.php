@extends('welcome')
@section('content')
<header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><a href="index.html">Foxclore</a></h1>
      <p>Placerat sem hendrerit</p>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Mon. - Sat.:</strong> 08.00am - 18.00pm</span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
@endsection



@section('end-footer')
<div class="bgded overlay row4" style="background-image:url('images/demo/backgrounds/01.png');">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="center btmspace-50">
        <h6 class="heading">Foxclore</h6>
        <ul class="faico clear">
          <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
        </ul>
        <p class="nospace">Sed pellentesque in nisi nulla facilisi sed pretium duis varius ut ut.</p>
      </div>
      <!-- ################################################################################################ -->
      <hr class="btmspace-50">
      <!-- ################################################################################################ -->
      <div class="one_quarter first">
        <h6 class="heading">Nunc neque pellentesque</h6>
        <p class="nospace btmspace-15">Interdum velit vitae pede aliquam mollis neque ut ullamcorper tempor dolor.</p>
        <form action="#" method="post">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Tortor varius nisi</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">Id euismod est risus ac neque aliquam erat volutpat pellentesque adipiscing.</a></p>
              <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            </article>
          </li>
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">Nunc hendrerit adipiscing nulla donec vestibulum odio quisque gravida morbi.</a></p>
              <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Vel condimentum auctor</h6>
        <ul class="nospace linklist">
          <li><a href="#">Hendrerit id lacus praesent</a></li>
          <li><a href="#">Ullamcorper risus gravida</a></li>
          <li><a href="#">Suscipit tempor turpis</a></li>
          <li><a href="#">Pede dictum ipsum vel auctor</a></li>
          <li><a href="#">Leo est tincidunt est sed</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Nunc sapien varius</h6>
        <ul class="nospace clear latestimg">
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/e.jfif')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/b.jfif')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/a.jfif')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/c.jfif')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/a.jfif')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/d.jfif')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/a.jfif')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/a.jfif')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('template/images/demo/f.jfif')}}" alt=""></a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ###########################  end footer ##################################################################### -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ###################
    ############################################################################# -->
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS
@endsection