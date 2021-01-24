@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">     
           <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a>

            <h1>Add new category </h1>
            <form  action="{{ route('store_category') }}" method="POST">
               @csrf
                <div class="form-group">
                    <label for="title">Category Title</label>
                    <input type="Title" name='title' class="form-control" id="title"  placeholder="Enter Category Title">
                </div>    
                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
    </div>
</div>
@endsection