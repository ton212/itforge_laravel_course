@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <form action="{{ route('post.update', $post->id) }}" method="post">
                        {{ method_field('put') }}
                        {{ csrf_field() }}

                        <div class="panel-heading">
                            {{ $post->title }}
                        </div>

                        <div class="panel-body">
                            <textarea name="body" class="form-control">{{ $post->body }}</textarea>
                        </div>

                        <div class="panel-footer">
                            <button class="btn btn-primary">บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection