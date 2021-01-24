@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a>        
            <h1>Add new post </h1>
            <form  action="{{ route('store_post') }}" method="POST">
               @csrf
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="Title" name='title' class="form-control" id="title"  placeholder="Enter Post Title">
                </div>
               
                <div class="form-group">
                    <label for="des">Post Desctiption</label>
                    <textarea class="form-control" name='description' id="des"  placeholder="Enter Post" rows="7">  </textarea>
                </div>

                <div class="form-group">
                    <h6> Categories </h6>
                    @foreach($categories as $category)
                        <label class="checkbox-inline">
                            <input type="checkbox" id="category" name="categories[]" value="{{$category->id}}"> {{$category->title}}
                        </label>
                    @endforeach  
                </div>
               


                <div class="form-group">
                    <h6> Tags </h6>
                    @foreach($tags as $tag)
                        <label class="checkbox-inline">
                            <input type="checkbox" id="tags" name="tags[]" value="{{$tag->id}}"> {{$tag->title}}
                        </label>
                    @endforeach  
                </div>       
                
                         
                
                <button type="submit" class="btn btn-primary">Add Post</button>
            </form>
        </div>
    </div>
</div>
@endsection