@extends('layouts.blog')

@section('content')
<div class="row">
    <div class="h4"></div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$post->title}}</h4>
            <p class="card-text">{{$post->body}}</p>
            <dl class="row">
                <dt class="col-sm-2">Name</dt><dd class="col-sm-9">{{$author->name}}</dd>
                <dt class="col-sm-2">Email</dt><dd class="col-sm-9">{{$author->email}}</dd>
                <dt class="col-sm-2">City</dt><dd class="col-sm-9">{{$author->address->city}}</dd>
                <dt class="col-sm-2">Website</dt><dd class="col-sm-9">{{$author->website}}</dd>
                <dt class="col-sm-2">Company</dt><dd class="col-sm-9">{{$author->company->name}}</dd>
            </dl>
        </div>
    </div>
</div>


@endsection