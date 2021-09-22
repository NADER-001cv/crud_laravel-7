@extends('welcome')

@section('editshowform')
<form  
   action="{{route('post.update' ,$post->id)}}"
 {{-- action="{{'/update'.'/'.$post->id  }}" --}}
  method="POST" >
  {{-- {{ method_field('PUT') }} --}}
    @csrf

{{-- 
     action="{{ route('route_name') }}" method="post">
      {{ method_field('PUT') }}
      {{ csrf_field() }} --}}
{{--   

       action="{{ route('route_name') }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    

      
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" 
        value="{{$post->name}}"
       name="name" class="form-control"
        id="exampleInputEmail1" 
        
        aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">description</label>
      <textarea type="text" 
      name="description" class="form-control"   rows="4" cols="50" id="exampleInputPassword1">
    {{$post->description}}

      </textarea>
    </div>

    <button type="submit" class="btn btn-primary">update</button>
  </form>
@endsection