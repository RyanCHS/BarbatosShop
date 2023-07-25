@extends('Component.navbar')

@section('page_title', 'Cart')

@section('body')
    @php
        $total = 0;
        $item = 0;
    @endphp
    <div class="bg-light d-flex justify-content-center">
        <div class="bg-light" style="width: 50rem; margin-bottom: 10rem;">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success')}}
            </div>
            @endif

            
            @foreach ($carts as $cart)
                <div class="shadow d-flex bg-white mt-3" style="height: auto;">
                    <div class="" style="">
                        <img src={{ url('storage/assets/'.$cart->image) }} class="" style="height: 15rem; width: 15rem;">
                    </div>
                    <div class="ms-3 mt-3" style="margin-right: 12rem;">
                        <div class="text-ellipsis--1">
                            <h4 class="" style="">{{$cart->name}}</h4>
                        </div>
                        <div class="mt-3">
                            <p class="" style="">Quantity : {{$cart->quantity}}</p>
                        </div>
                        <div class="">
                            <p class="" style="">Total Price: IDR {{$cart->subtotal}}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-fill justify-content-end mt-3 me-3">
                        <form action={{route('delete_cart')}} method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="hidden", name="cart_id" value={{$cart->cartId}}>
                            <button class="btn border-danger text-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </div>
                </div>    
                @php
                    $total += $cart->subtotal;
                    $item += $cart->quantity;
                @endphp       
            @endforeach
        </div>
  
    </div>
    
    @if ($total != 0)
        <div class="bg-white fixed-bottom d-flex justify-content-evenly align-items-center" style="height: 5rem;">
            <form method="POST" action={{route('purchaseCart')}}>
                <div class="d-flex">
                    @csrf
                    <div class="me-3 mt-1">
                        <p>Total Price: IDR {{$total}}</p>
                    </div>

                    <div class="ms-3">
                        <button type="submit" class="btn btn-outline-success">Purchase</button>
                    </div>
                </div>
            </form> 
        </div>     
    @endif
@endsection