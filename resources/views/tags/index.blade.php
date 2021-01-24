@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">    
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a>

            <h3> All Tags </h3>
            <div class="container-fluid"> 
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                </tr>
                @foreach ($tags as $tag )
                <tr>
                    <td>{{ $tag->title }}</td>  
                    <td>{{ $tag->slug }}</td>                   
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
</div>
@endsection