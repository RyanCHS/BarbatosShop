@extends('Component.navbar')

@section('page_title', 'Update Product')
    
@section('body')
@php
      use App\Models\category;
      $listcategories = category::all();
  @endphp
<div class="bg-light d-flex justify-content-center">
    <div style="width: 50rem; margin-top: 3rem; margin-bottom: 10rem;">
        <div class="">
            <form class="d-flex" action={{ URL::previous() }} style="width: 18rem;">
                @csrf
                <button class="btn bg-secondary text-white" type="submit"><i class="fa fa-arrow-circle-o-left" style="color: white;"></i> Back</button>
            </form>
        </div>

        <div class="card shadow-sm mt-3">
    
            <div class="bg-light">
                <p class="" style="margin-left: 2rem; padding-top: 1rem;">Update Product</p>
            </div>
            
            @foreach ($products as $product)
                <form method="POST" action={{route('update_product_logic', ["product_id"=>$product->id])}} enctype="multipart/form-data">
                    <div class="card-body mx-3 mb-3">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3 pt-3">
                            <label for="exampleInputName" class="form-label">Name</label>
                            <input name="nameInput" type="name" class="form-control" value={{$product->name}}>
                            @if ($errors->has('nameInput'))
                                <span class="text-danger">{{$errors->first('nameInput')}}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCategory" class="form-label">Category</label>
                            <select name="categoryInput" id="" class="form-control">
                                <option value="  " selected>Choose a Category</option>
                                @foreach ($listcategories as $category)
                                    <option value={{$category->id}} @if($category->id == $product->category_id) selected @endif>{{$category->name}}</option>      
                                @endforeach
                            </select>
                            @if ($errors->has('categoryInput'))
                                <span class="text-danger">{{$errors->first('categoryInput')}}</span>
                            @endif
                        </div>
            
                        <div class="mb-3">
                            <label for="exampleInputDetail" class="form-label">Detail</label>
                            <textarea name="detailInput" id="" cols="30" rows="10" class="form-control" >{{$product->detail}}</textarea>
                            @if ($errors->has('detailInput'))
                                <span class="text-danger">{{$errors->first('detailInput')}}</span>
                            @endif
                        </div>
            
                        <div class="mb-3">
                            <label for="exampleInputPrice" class="form-label">Price</label>
                            <input name="priceInput" type="price" class="form-control" value={{$product->price}} >
                            @if ($errors->has('priceInput'))
                                <span class="text-danger">{{$errors->first('priceInput')}}</span>
                            @endif
                        </div>
            
                        <div class="mb-3">
                            <label for="inputImage" class="form-label">Photo</label>
                            <input name="inputImage" class="form-control" type="file" id="formFile">
                            @if ($errors->has('inputImage'))
                                <span class="text-danger">{{$errors->first('inputImage')}}</span>
                            @endif
                        </div>
            
                        <div class="">
                            <button type="submit" class="btn btn-outline-secondary">Update</button>
                        </div>
            
                    </div>
                </form>       
            @endforeach
     
        </div>
    </div>
@endsection