@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Create Tag
        </div>
        <div class="panel-body">
            <form action="{{route('tag.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" name="tag" class="form-control">
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Save</button> 
                </div>
            </div>
            </form>
        </div>
    </div>

@stop