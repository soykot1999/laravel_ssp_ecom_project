@extends('master')
@section("content")
    <div class=" custom-product">
    <div class="col-sm-4">
        <a href="/">Go back</a>
    </div>
    <div class="col-sm-4">
         <div class="trending-wrapper">
             <h4>Results for products</h4>
             @foreach($products as $item)
             <div class="searched-item">
                 <a href="detail/{{$item['id']}}">
                 <img class="searching-image" src="{{$item['gallery']}}">
                 <div class="">
                     <h3>Name:{{$item['name']}}</h3>
                     <h3>Description:{{$item['description']}}</h3>
                     <h3>Price:{{$item['price']}}</h3>
                     <a href="/"class="btn btn-warning">Go Back</a>
                     </div>
                     </a>
                     </div>
                     @endforeach
                     </div>
                     </div>
                     </div>
@endsection


    


  
  