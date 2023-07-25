@extends('Component.navbar')

@section('page_title', 'Profile')
    
@section('body')
<div class="bg-light d-flex justify-content-center">
    <div class="card shadow-sm " style="width: 40rem; margin-top: 10rem; margin-bottom: 10rem;">
        <div class="bg-light text-center">
            <p class="py-2 fw-bold">Profile</p>
        </div>
        <div class="card-body mx-3 mb-3">
            <div class="mb-3 pt-3">
                <label class="form-label">Name</label>
                <p class="form-control bg-secondary bg-opacity-10">{{Auth::user()->name}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <p class="form-control bg-secondary bg-opacity-10">{{Auth::user()->email}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <p class="form-control bg-secondary bg-opacity-10">{{Auth::user()->gender}}</p>            
            </div>
            <div class="mb-3">
                <label class="form-label">Date of Birth</label>
                <p class="form-control bg-secondary bg-opacity-10">{{Auth::user()->date_of_birth}}</p>            
            </div>
            <div class="mb-3">
                <label class="form-label">Country</label>
                <p class="form-control bg-secondary bg-opacity-10">{{Auth::user()->country}}</p>            
            </div>
        </div>
 
      </div>
@endsection