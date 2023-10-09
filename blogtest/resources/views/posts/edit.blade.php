@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{route('posts.update',$post->id)}}">
                        @csrf
  <div class="form-group">
    <label >Post title</label>
    <input type="text" name="title"  class="form-control"  placeholder="Enter Post Title">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Post description</label>
    <textarea class="form-control" rows="10" name="description" placeholder="Enter Your Post Description"></textarea>
    
  </div>
  <button type="submit" class="btn btn-primary my-3">Update</button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
