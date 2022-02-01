@extends('layouts.blog')

@section('content')

<div class="row">
    <div class="h4">Posts</div>
</div>
<div class="row">
    @if (isset($arrayPosts))
    @foreach ($arrayPosts as $post)
    <div class="col-6">
        <div class="card border-light">
            <div class="card-body">
                <h4 class="card-title"><a href="{{ url('/posts') . '/' . $post->id }}" class="text-decoration-none">{{$post->title}}</a></h4>
                <p class="card-text">{{$post->body}}</p>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>


@endsection