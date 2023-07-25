@extends('Component.navbar')

@section('page_title', 'Home')

@section('body')
    @php
        use App\Models\product;
    @endphp
    <div class="bg-light d-flex justify-content-center">
        <div class="bg-light" style="width: 81rem; margin-bottom: 10rem;">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success')}}
            </div>
            @endif

            <div class="mt-5">
                <form class="d-flex" action={{route('search')}}>
                    @csrf
                    <input class="form-control" type="search" name="search"  aria-label="Search">
                    <button class="btn bg-secondary" type="submit"><i class="fa fa-search" style="color: white;"></i></button>
                </form>
            </div>
            
            @foreach ($categories as $category)
                @if (product::where('category_id', '=', $category->id)->exists())
                    <div class="mt-5 shadow-sm border">
                        <div class="bg-light mt-3 ms-4">
                            <p >{{$category->name}} <a href="{{ route('productcategory', ['category_id'=>$category->id]) }}" class="text-decoration-none">View All</a></p> 
                        </div>

                        <div class="d-flex justify-content-start bg-white pt-3 pb-5">
                            <div class="d-flex justify-content-start overflow-auto mx-3">
                            @foreach ($products as $product)
                                    @if ($product->category_id == $category->id)
                                        <a href="{{ route('productdetail', ['product_id'=>$product->id]) }}" class="pb-3 text-decoration-none text-dark">
                                            <div class="card mx-3" style="width: 15rem;">
                                                <div class="" style="height: 15rem;">
                                                    <img src={{ url('storage/assets/'.$product->image) }}  class="card-img-top img-fluid h-100" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <div class="text-ellipsis--1">
                                                        {{$product->name}}
                                                    </div>
                                                    <div class="pt-2">
                                                        <p class="card-title fw-bold">IDR {{$product->price}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>    
                                    @endif
                            @endforeach

                            </div>
                
                        </div>

                    </div>  
                    
                @endif
            @endforeach
    
        </div>
    </div>

@endsection