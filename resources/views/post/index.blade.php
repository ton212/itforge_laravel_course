@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="pull-right btn btn-primary btn-xs @if(!auth()->check()) disabled @endif" href="{{ route('post.create') }}">ตั้งกระทู้</a>
                        กระทู้ทั้งหมด
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">ชื่อกระทู้</th>
                                    <th class="text-center">เจ้าของกระทู้</th>
                                    <th class="text-center">โพสเมื่อ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($posts as $post)
                                <tr>
                                    <td class="text-center">{{ $post->id }}</td>
                                    <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                </tr>
                                @empty
                                cc
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection