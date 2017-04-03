@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(auth()->check())
                            @if(auth()->user()->id == $post->user_id)
                                <a class="pull-right btn btn-primary btn-xs" href="{{ route('post.edit', $post->id) }}">แก้ไข</a>
                            @endif
                        @endif
                        {{ $post->title }}
                    </div>

                    <div class="panel-body">
                        {{ $post->body }}
                    </div>

                    <div class="panel-footer">
                        <span class="pull-right">
                            {{ $post->created_at }}
                        </span>
                        ผู้เขียน: {{ $post->user->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection