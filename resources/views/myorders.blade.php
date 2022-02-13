@extends('master')
@section("content")
    <div class=" custom-product myorders-div">
    
    <div class="col-sm-11 soykot">
         <div class="trending-wrapper">
             <h4>My Order List</h4><br> <br>
             
             <br> <br> <br>
             @foreach($orders as $item)
             <div class="row searched-item cart-list-divider">
                 <div class="col-sm-3">
                 <a href="detail/{{$item->id}}">
                 <img class="trending-image" src="{{$item->gallery}}">
                 </a>
                 </div>
             <div class="col-sm-4">
                     <div class="">
                     <h2>Name: {{$item->name}}</h2>
                     <h5>Delivery status: {{$item->status}}</h5>
                     <h5>Address: {{$item->address}}</h5>
                     <h5>Payment Status: {{$item->payment_status}}</h5>
                     <h5>Payment Method: {{$item->payment_method}}</h5>

                   </div>
                     </div>

                 
                     </div>
                 
                
                     @endforeach
                     
                     <br> <br> <br><a href="/"class="btn btn-warning">Go Back</a>
                     </div>
                     </div>
                     </div>
                     @endsection
                     
                     


    


  
  