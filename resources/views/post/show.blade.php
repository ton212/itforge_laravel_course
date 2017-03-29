@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>

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