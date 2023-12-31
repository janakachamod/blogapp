@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->description}}</td>
      <td>
        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary-success" >Edit</a>
        <a href="" class="btn btn-primary-danger">Delete</a>
      </td>
    </tr>
    @endforeach
   
     </tbody>
</table>


        </div>
     </div>
</div>
      
@endsection
