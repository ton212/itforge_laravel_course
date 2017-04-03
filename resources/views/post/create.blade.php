@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <form action="{{ route('post.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="panel-heading">
                            ชื่อกระทู้: <input type="text" class="form-control" name="title">
                        </div>

                        <div class="panel-body">
                            <textarea name="body" class="form-control">

                            </textarea>
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