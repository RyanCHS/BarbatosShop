@extends('Component.navbar')

@section('page_title', 'Search')

@section('body')
    <div class="bg-light d-flex justify-content-center flex-column align-items-center">
        <div class="bg-light" style="width: 81rem; margin-bottom: 10rem;">
            <div class="mt-5">
                <form class="d-flex" action={{route('search')}}>
                    @csrf
                    <input class="form-control" type="search" name="search"  aria-label="Search" value= {{$name}}>
                    <button class="btn bg-secondary" type="submit"><i class="fa fa-search" style="color: white;"></i></button>
                </form>
            </div>
            
            <div class="bg-light" style="width: 81rem; margin-bottom: 10rem;">
                <div class="mt-5 shadow-sm border">
                    <div class="bg-light mt-3 ms-4">
                        <p >Search Result</p> 
                    </div>
    
                    <div class="d-flex flex-wrap justify-content-start bg-white pt-3 pb-5">
                        @foreach ($products as $product)
                            <a href="{{ route('productdetail', ['product_id'=>$product->id]) }}" class="text-decoration-none text-dark">
                                <div class="card mt-3 ms-3" style="width: 15rem;">
                                    <div class="" style="height: 15rem;">
                                        <img src={{ url('storage/assets/'.$product->image) }}  class="card-img-top img-fluid h-100" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="text-ellipsis--2 fs-5">
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
            </div>
        </div>
    </div>
    
@endsection