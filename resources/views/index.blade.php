@extends('layouts.app')

@section('content')

<div class="content_index">

    <div class="posts">
    @foreach($posts as $post)
        <div class="post">
            <div class="card">
                <div class="post-image">
                    <img src="{{ asset("storage/images/$post->image_path")}}">
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <p class="card-text">{{ Str::limit($post->body, 300) }}</p>
                    <a href="#" class="btn btn-primary btn-sm">المزيد</a>
                </div>
                <div class="card-footer text-muted">
                    <a href="#">{{ $post->user->name}}</a>
                    <a href="#">{{ $post->created_at->diffForHumans()}}</a>
                </div>
            </div>
        </div>
    @endforeach 
    </div>

    @include('partials.sidebar')

</div>

@endsection