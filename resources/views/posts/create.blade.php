@extends('layout.app', ['title' => 'New Post'])

@section('content')
    <div class="container">
        <div class="row">   
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            New Post
                        </div>
                        <div class="card-body">
                            <form action="/post/store" method="post">
                                @csrf
                                @include('posts.partials.form-control')
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@stop