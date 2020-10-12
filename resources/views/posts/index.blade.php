@extends('layout.app', ['title' => 'All Posts'])

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                @isset($category)
                    <h4>Category: {{ $category->name }}</h4>
                @endisset
                @isset($tag)
                    <h4>Tag: {{ $tag->name }}</h4>
                @endisset

                @if(!isset($category) && !isset($tag))
                    <h4>All Posts</h4>
                @endif

                <hr>
            </div>
            <div>
                <a href="/post/create">
                    <button class="btn btn-primary">
                        New Post
                    </button>
                </a>
            </div>
        </div>
        <div class="row">
            @forelse ($posts as $post)    
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>
                                {{ $post->title }}
                            </h5>
                        </div>
                        <div class="card-body">
                            <div>
                                {{ Str::limit($post->body, 100, '.') }}
                            </div>
                            <small><a href="/post/{{ $post->slug }}">Read more</a></small>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <small class="mt-2">
                                Published on {{ $post->created_at->diffForHumans() }} &middot;
                                <a href="/categories/{{ $post->category->slug }}">
                                    {{ $post->category->name }}
                                </a>
                            </small>
                            <a href="/post/{{ $post->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-6">
                    <div class="alert alert-danger" role="alert">
                        There's no post
                    </div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@stop