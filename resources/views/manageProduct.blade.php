@extends('Component.navbar')

@section('page_title', 'Manage Product')

@section('body')
    <div class="bg-light d-flex justify-content-center">
        <div class="bg-light" style="width: 50rem; margin-bottom: 10rem;">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success')}}
            </div>
            @endif
            <div class="mt-5 d-flex justify-content-between">
                <form class="d-flex" action={{route('searchManage')}} style="width: 18rem;">
                    @csrf
                    <input class="form-control" type="search" name="search" placeholder="Product Name"  aria-label="Search">
                    <button class="btn bg-secondary" type="submit"><i class="fa fa-search" style="color: white;"></i></button>
                </form>

                <form class="d-flex" action='/add'>
                    @csrf
                    <button class="btn bg-secondary text-white" type="submit">Add Product <i class="fa fa-plus"></i></button>
                </form>
            </div>

            @foreach ($products as $product)
                <div class="shadow d-flex bg-white mt-3" style="height: auto;">
                    <div class="" style="">
                        <img src={{ url('storage/assets/'.$product->image) }} class="" style="height: 10rem; width: 15rem;">
                    </div>
                    <div class="flex-fill mt-3 ms-2 me-3">
                        <h4 class="" style="">{{$product->name}}</h4>
                    </div>
                    <div class="d-flex flex-fill justify-content-end mt-3 me-3">
                        <form action={{route('update_product', ["product_id" => $product->id])}} >
                            @csrf
                            <button class="btn border-warning text-warning me-1" type="submit"><i class="fa fa-pencil"></i></button>
                        </form>
                        <form action={{route('delete_product')}} method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="hidden", name="product_id" value={{$product->id}}>
                            <button class="btn border-danger text-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </div>
                </div>           
            @endforeach
            <div class="d-flex justify-content-end mt-3" style="">
                {{$products->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>

@endsection