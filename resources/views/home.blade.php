@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                
                </div>
            </div>
        </div>
        

        <div class="btn-group-vertical">
            <a class="btn btn-primary" href="{{ route('create_post') }}"> Add New Post</a><br><br>           
            <a class="btn btn-primary" href="{{ route('create_category') }}"> Add New Category</a><br><br>           
            <a class="btn btn-primary" href="{{ route('create_tag') }}"> Add New Tag</a><br><br>           
            <a class="btn btn-primary" href="{{ route('get_posts') }}"> View All Posts</a><br><br>           
            <a class="btn btn-primary" href="{{ route('view_category') }}"> View All Category</a><br><br>           
            <a class="btn btn-primary" href="{{ route('view_tag') }}"> View All tags</a><br><br>           
            
         </div>
           
        
        
    
</div>
@endsection
