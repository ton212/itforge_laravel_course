@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(auth()->check())
                            @if(auth()->user()->id == $post->user_id or auth()->user()->id == 1)
                                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="pull-right btn btn-danger btn-xs">ลบกระทู้</button>
                                </form>
                                @if(auth()->user()->id != 1)
                                <a class="pull-right btn btn-primary btn-xs" href="{{ route('post.edit', $post->id) }}">แก้ไข</a>
                                @endif
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

                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>

                    <div class="panel-body">

                    </div>

                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection