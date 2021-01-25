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
                                <label>Description</label>
                                <textarea name="description" rows="8" cols="40" class="form-control tinymce-editor"></textarea>
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 100,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection