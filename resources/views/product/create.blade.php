@extends('product.layout')

@section('product_content')

<div class="container">
    <div class="row mt-5">
        <h1 class="display-2"  >
              add new product
        </h1>
        <form   action="{{route('products.store')}}"   method="POST"
        style="padding-top: 2%">
          @csrf
            <div class="mb-3">
              <label for="exampleformcontrolInput"   class="form-label">name</label>
              <input 
                   name="title"
              type="text"
               class="form-control"
                id="exampleInputEmail1"
                 aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="exampleformcontrolInput" class="form-label">price</label>
              <input
                 name="price"
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


              </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
</div>











@endsection