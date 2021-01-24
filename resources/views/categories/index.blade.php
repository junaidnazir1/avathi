@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">    
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a>

            <h3> All Catogories </h3>
            <div class="container-fluid"> 
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                </tr>
                @foreach ($categories as $category )
                <tr>
                    <td>{{ $category->title }}</td>  
                    <td>{{ $category->slug }}</td>                   
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
</div>
@endsection