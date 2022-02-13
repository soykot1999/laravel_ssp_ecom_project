@extends('master')
@section("content")
    <div class=" custom-product">
    <div class="col-sm-11 soykot">
    <table class="table">
  
  <tbody>
    <tr>
     
      <td>Amount</td>
      <td>{{$total}}  BDT</td>
      
    </tr>
    <tr>
      
      <td>Tax</td>
      <td> 0  BDT</td>
      
    </tr>
    <tr>
     
      <td>Delivery charges</td>
      <td>120  BDT</td>
     
    </tr>
    <tr>
     
      <td>Total Amount</td>
      <td>{{$total+120}}  BDT</td>
     
    </tr>
  </tbody>
</table>

<br><br><br>
<div>
<form action="/orderplace" method="POST">
  @csrf
  <div class="form-group">
    <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
  </div>
  <div class="form-group payment">
    <label for="pwd">Payment Method</label>
    <p>
    <input type="radio" value="cash" name="payment"> <span>Bkash payment</span><br>
    <input type="radio" value="cash" name="payment"> <span>Nagad payment</span><br>
    <input type="radio" value="cash" name="payment"> <span>Payment on delivery</span><br>
    </p>
   
  </div>
  
  <button type="submit" class="btn btn-success">Order Now</button>
  <br> <br> <br><a href="/cartlist"class="btn btn-warning">Go Back</a>
</form>
</div>
</div>
</div>
        
@endsection
                     
                     


    


  
  