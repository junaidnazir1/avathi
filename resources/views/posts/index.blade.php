@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">    
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a>

            <h3> All Posts </h3>
            <div class="container-fluid"> 
            <table class="table table-dark table-hovered">
                <tr>
                    <th>Title</th>
                    <th>Desctiption</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>View</th>
                </tr>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{!! $post->description !!}</td>
                    <td>{{ $post->categories }}</td>
                    <td>{{ $post->tags }}</td>
                    <td>  <a class="btn btn-info" href="{{ route('get_post',$post->slug) }}">View</a><td>  
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
</div>
@endsection