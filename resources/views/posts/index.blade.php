@extends('welcome')

@section('middle-content')
<table class="table">
    <thead>
      <tr>
        <td scope="col">id</td>
        <td scope="col">Name</td>
        <td scope="col">Description</td>
        <td colspan="5">Action</td>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>  {{$post->id}}  </td>
            <td>  {{$post->name}}    </td>
            <td>  {{$post->description}}   </td>
              <td >
                
                  <a href="{{  'posts/' . $post->id}}"   class="btn btn-primary" >


                    Show
                  </a>

                
        
                
              </td>
              <td>
                <a href="{{route('posts.deleted',$post->id)}}" type="button" class="btn btn-danger">

                 
                  Delete
                </a>


              </td>
          </tr>
        @endforeach
  
        
      {{-- @foreach ($users as $user)
      @if ($user->type == 1)
          @continue
      @endif
  
      <li>{{ $user->name }}</li>
  
      @if ($user->number == 5)
          @break
      @endif
  @endforeach --}}
    </tbody>
  </table>
  <div claas="row">
    <div class="col-12">
      {{$post->links}}

   </div>
 </div>
@endsection

@section('paginate')
    {{$posts->links()}}
@endsection