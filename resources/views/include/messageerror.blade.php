@if ($errors->any())
    
<div class="alert alert-danger" role="alert">
  @foreach ($errors->all() as $errors)
      <ul>
          <li>
              {{$errors}}
          </li>
      </ul>
  @endforeach
  </div>
    
@endif
@if (session('status'))
     
<div class="alert alert-info" role="alert">
  {{session('status')}}
  </div>
@endif