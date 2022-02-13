@extends('master')
@section("content")
    <div class=" custom-product s">
    
    <div class="col-sm-11 cart-design">
         <div class="trending-wrapper">
             <h4>Your Cart List</h4><br> <br>
             <a class="btn btn-danger" href="ordernow">Order Here</a>
             <br> <br> <br>
             @foreach($products as $item)
             <div class="row searched-item cart-list-divider">
                 <div class="col-sm-3">
                 <a href="detail/{{$item->id}}">
                 <img class="trending-image" src="{{$item->gallery}}">
                 </a>
                 </div>
             <div class="col-sm-4">
                     <div class="">
                     <h2>{{$item->name}}</h2>
                     <h5>{{$item->description}}</h5 >
                   </div>
                     </div>

                 <div class="col-sm-3">
                     <a href="/removecart/{{$item->cart_id}}"class="btn btn-success">Remove from cart</a>
                    </div>
                     </div>
                 
                
                     @endforeach
                     <a class="btn btn-danger" href="ordernow">Order Here</a>
                     <br> <br> <br><a href="/"class="btn btn-warning">Go Back</a>
                     </div>
                     </div>
                     </div>
                     @endsection
                     
                     


    


  
  