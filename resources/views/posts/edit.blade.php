@extends('layout.app', ['title' => 'Update Post'])

@section('content')
    <div class="container">
        <div class="row">   
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            Update Post : {{ $post->title }}
                        </div>
                        <div class="card-body">
                            <form action="/post/{{ $post->slug }}/edit" method="post">
                                @method('patch')
                                @csrf
                                @include('posts.partials.form-control')
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@stop