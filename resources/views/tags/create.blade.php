@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">  
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                          
            <h1>Add new Tags </h1>
            <form  action="{{ route('store_tag') }}" method="POST">
               @csrf
                <div class="form-group">
                    <label for="title">Tags Title</label>
                    <input type="Title" name='title' class="form-control" id="title"  placeholder="Enter Tags Title">
                </div>    
                <button type="submit" class="btn btn-primary">Add Tags</button>
            </form>
        </div>
    </div>
</div>
@endsection