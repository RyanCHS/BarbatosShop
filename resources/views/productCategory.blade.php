@extends('Component.navbar')

@section('page_title', 'Category')

@section('body')
    <div class="bg-light d-flex justify-content-center flex-column align-items-center">
        <div class="bg-light" style="width: 81rem; margin-bottom: 10rem;">
            @foreach ($categories as $category)
                <div class="mt-5 shadow-sm border">
                    <div class="bg-light mt-3 ms-4">
                        <p >{{$category->name}}</p> 
                    </div>
        
                    <div class="d-flex flex-wrap justify-content-start bg-white pt-3 pb-5">
                        @foreach ($products as $product)
                        @if (!$product->exists())
                            Kosong
                        @endif
                            <a href="{{ route('productdetail', ['product_id'=>$product->id]) }}" class="text-decoration-none text-dark">
                                <div class="card mt-3 ms-3" style="width: 15rem;">
                                    <div class="" style="height: 15rem;">
                                        <img src={{ url('storage/assets/'.$product->image) }}  class="card-img-top img-fluid h-100" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="text-ellipsis--1">
                                            {{$product->name}}
                                        </div>
                                        <div class="pt-2">
                                            <p class="card-title fw-bold">{{$product->price}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>     
                        @endforeach
                    </div>
                </div>  
            @endforeach
            <div class="d-flex justify-content-end mt-3" style="">
                {{$products->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
    
@endsection