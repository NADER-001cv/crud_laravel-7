@extends('welcome')

@section('details')
    <div class="container">
       <div  class="row"  >
           <div class="col-md-6">
               <h1 class="display-3">
                   Details
               </h1>
             
             

                <div class="card" style="width: 18rem;">
                   
                    <div class="card-body">
                      <h5 class="card-title">
                        {{  $posts->name }}
                      </h5>
                      <p class="card-text">
                        {{  $posts->description  }}
                        </p>
                        <small class="text-muted">
                          <p>
                            {{$posts->created_at}}
                          </p>
                        </small>
                      {{-- <a href="{{'/'. $posts->id.'/edit'}}" class="btn btn-primary">Edit</a> --}}
                      <a href="{{'/edit'.'/' . $posts->id}}" class="btn btn-primary">Edit</a>
                      <a href="{{route('post.delete' ,$posts->id)}}" class="btn btn-danger">Delete</a>
                    </div>
                  </div>
           </div>
       </div>

    </div>

@endsection


{{-- 
  
  https://theprogrammedwords.hashnode.dev/skills-you-need-to-become-a-front-end-developer
  --}}