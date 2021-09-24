<!DOCTYPE html>
<!--
Template Name: Foxclore
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Foxclore</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{asset('template/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body id="top">

<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  @yield('content')


  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ##########################  end header###################################################################### -->
  <section id="navwrapper" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav">
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        
       
        <li><a href="{{url('/posts')}}">
          Posts
        </a></li>
       
         

        <li><a href="{{url('/create')}}">
          create post
        </a></li>

        

        <li><a href="{{route('register')}}">
          register
        </a></li>

        <li><a href="{{route('login')}}">
          login
        </a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ -->
  </section>
  <!-- ######################################################## ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>welcome laravel</p>
      <h3 class="heading">xampp && php</h3>
      <p>At dapibus ac velit cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus maecenas ut</p>
      <footer><a class="btn" href="#">Learn more ...</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>






<pre>




</pre>

<div class="container">
  <p class="display-2">
    all list of users
   </p>
   <div claas="row">
     <div class="col-8">
       @yield('middle-content')
       
     </div>
     
</div>






@yield('paginate')





@yield('details')

@include('include/messageerror')
@yield('getform')

@yield('editshowform')

<script src="{{asset('template/layout/scripts/jquery.min.js')}}"></script>
<script src="{{asset('template/layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{asset('template/layout/scripts/jquery.mobilemenu.js')}}
"></script>
</body>
</html>