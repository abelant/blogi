@extends('layouts.app')

@section('content')


<div class="panel panel-default">
    <div class="panel-heading">
        Create a new category
    </div>
    <div class="panel-body">
        <form action="{{route('category.update', ['id' => $category->id ])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control">
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop

