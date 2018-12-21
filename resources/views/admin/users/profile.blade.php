@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-default">
    
    <div class="panel-body">
        <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="avatar">Upload new avatar</label>
                <input type="file" name="avatar" class="form-control">
            </div>

           
            <div class="form-group">
                <label for="about">About You</label>
                <textarea name="about" value="{{$user->profile->about}}" id="about" cols="5" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-warning" type="submit">Edit Profile</button>
                </div>
            </div>
        </form>
    </div>
</div>



@stop