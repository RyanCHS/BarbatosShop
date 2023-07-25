@extends('Component.navbar')

@section('page_title', 'Product Detail')

@section('body')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success')}}
        </div>
    @endif
    <div class="bg-light d-flex justify-content-center align-items-center" style="height: 90vh">
        
        @foreach ($products as $product)
            <div class="shadow bg-white" style="width: 63rem; height: auto;">
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-end align-items-center" style="height: 20rem;">
                        <img src={{ url('storage/assets/'.$product->image) }} class="" style="height: 12rem; width: 19rem;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="mt-4 ms-1">{{$product->name}}</h3>
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="">
                                    <td scope="row">Detail</td>
                                    <td>{{$product->detail}}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Price</td>
                                    <td>IDR {{$product->price}}</td>
                                </tr>
                            </tbody>
                        </table>

                        @if (Auth::check() && Auth::user()->role == '0')
                            <form method="POST" action={{route('purchase', ["product_id"=>$product->id])}}>
                                <div class="card-body mx-2 mb-3">
                                    @csrf
                                    <div class="d-flex">
                                        <label for="exampleInputName" class="">QTY</label>
                                        <input name="quantityInput" type="name" class="form-control ms-4" >
                                    </div>
                                    @if ($errors->has('quantityInput'))
                                        <p class="text-danger m" style="margin-left: 3.4rem;">{{$errors->first('quantityInput')}}</p>
                                    @endif
                        
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-outline-success">Purchase</button>
                                    </div>
                                </div>
                            </form>      
                        @endif
                    </div>
                </div>
            </div>      
        @endforeach   
    </div>

@endsection
