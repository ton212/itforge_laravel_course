@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">

                        <form action="/profile/edit" method="post">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <table class="table table-bordered">
                                <tr>
                                    <td>ID</td>
                                    <td>
                                        <input type="text" class="form-control" name="id" value="{{ $currentUser->id }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <input type="text" class="form-control" name="name" value="{{ $currentUser->name }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>
                                        <input type="text" class="form-control" name="username" value="{{ $currentUser->username }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="text" class="form-control" name="email" value="{{ $currentUser->email }}">
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
