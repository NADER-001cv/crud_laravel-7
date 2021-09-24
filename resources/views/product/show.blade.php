@extends('product.layout')

@section('product_content')


     <div  class="container">
               <div class="row  mt-5">
                <div class="card" style="width: 18rem;padding:5%">
                  
                   
                      <h5 class="card-title">  {{$product->title}}   </h5>
                      <span  class="mb-3">
                        <strong>
                          {{$product->price}}
                        </strong>
                      </span>
                      <p class="card-text mb-3">

                        {{$product->bio}}
                        .</p>
                      <a href="{{route('products.index')}}" class="btn btn-primary">Go back</a>
                    
                  </div>
               </div>
     </div>
@endsection