@extends('welcome')

@section('editshowform')
<form   action="{{'posts/' .$post->id  }}"   method="POST">
    @csrf
    @method('PUT')
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