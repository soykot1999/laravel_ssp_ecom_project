@extends('master')
@section("content")
    <div class=" container">
          <div class="row">
                <div class="col-sm-5 soykot">
                 <img class="detail-img" src="{{$product['gallery']}}">
                </div>
                <div class="col-sm-6 soykot" >
                   
                   <h4>Category:{{$product['category']}}</h4>
                   <br>
                   <h4 >Name: {{$product['name']}}</h4>
                   <h4>Price: {{$product['price']}}</h4>
                   <h4>Description: {{$product['description']}}</h4>
                   <br> <br>
                   <form action="/add_to_cart" method="POST">
                         @csrf
                         <input type="hidden" name="product_id" value={{$product['id']}}>
                         <button class="btn btn-primary">Add To Cart</button>
                   </form>
                   <br>
                   <button class="btn btn-success">Buy Now</button>
                   <br><br>
                   <a href="/"class="btn btn-warning">Go Back</a><br><br>
                </div>
            
          </div>
   </div>
   
@endsection