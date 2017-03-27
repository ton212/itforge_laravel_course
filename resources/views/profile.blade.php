@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>ID</td>
                                <td>{{ $currentUser->id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $currentUser->name }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ $currentUser->username }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $currentUser->email }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
