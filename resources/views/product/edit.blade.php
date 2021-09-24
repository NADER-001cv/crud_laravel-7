@extends('product.layout')

@section('product_content')
<div class="container">
    <div class="row mt-5">
        <h1 class="display-2"  >
             product name is: {{$product->title}}
        </h1>
        <form   action="{{route('products.update', $product->id)}}"   method="POST"
            
        style="padding-top: 2%">
        @csrf 
        @method('PUT') 

                             {{-- {{method_field('PUT') }}  
                             @csrf   --}}
            <div class="mb-3">
              <label for="exampleformcontrolInput"   class="form-label">name</label>
              <input 
                   name="title"
                   value="{{$product->title}}"
              type="text"
               class="form-control"
                id="exampleInputEmail1"
                 aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="exampleformcontrolInput" class="form-label">price</label>
              <input
                 name="price"
                 value="{{$product->price}}"
               type="text" 
               class="form-control" 
               id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleformcontroltextarial" >details</label> <br/>
              <textarea 
                 name="bio"
              type="text" 
              class="form-control" 
              cols="150" rows="10"   > 

                      {{$product->bio}}
              </textarea>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
          </form>
    </div>
</div>

@endsection