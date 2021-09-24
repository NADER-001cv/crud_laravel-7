@extends('product.layout')

@section('product_content')
    <div class="container">
               <div class="row">
                    <div class="col-md-7">
                         <h2 class="display-1" >
                             welcome app laravel 

                         </h2>
                         <p>
                           {{__('messages.hy')}}
                         </p>
                    </div>
                    <div class="col-md-5  mt-5">
                       <p class="text-muted">
                                  this is me
                       </p>
                    </div>
                    <div class="row">
                      <div class="col">
                           <a href={{route('products.create')}} class="btn btn-primary" >
                              Add  new product 
                           </a>
                      </div>

                      <div class="row">
                  
                                @if ($message = Session::get('success'))
                                <div class="alert alert-info" role="alert">
                                  {{$message}}
                                </div>
                                @endif
                        </div>
                   
                   
                      <div  class="row">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">name product</th>
                                <th scope="col">price</th>
                                <th scope="col">details</th>
                                <th scope="col" style="width: 500px">action</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($product as $item)
                                       
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->bio}}</td>
                                        <td>
                                          <div class="row">
                                               <div class="col-sm">
                                                <a href="{{route('products.edit',$item->id)}}"  class="btn btn-dark "> edit</a>
                                               </div>
                                               <div class="col-sm">
                                                <a href="{{route('products.show',$item->id)}}" class="btn btn-info"> show</a>
                                               </div>
                                               <div class="col-sm">
                                              
                                            <form action="{{route('products.destroy',$item->id)}}"  method="Post"  >
                                              @csrf
                                              @method('DELETE')
                                                   <button   type="submit" class="btn btn-danger"  >
                                                       delete
                                                   </button>
                                            </form>
                                               </div>

                                               <div class="col-sm">
                                              
                                                <a href="{{route('product.softdelete',$item->id)}}"   class="btn btn-danger"   >
                                                
                                                    
                                                         soft  delete
                                                       
                                                </a>
                                                   </div>
                                          </div>
                                          
                                         

                                        </td>
                                      </tr>
                                    @endforeach
                         
                            </tbody>
                          </table>
                        
                       </div>
               </div>
              
               <div class="row">
                {{$product->links()}}
               </div>
    </div>
@endsection