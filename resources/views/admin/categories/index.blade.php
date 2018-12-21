@extends('layouts.app')

@section('content')
       
        <div>
            <a href="{{route('category.create')}}">Add new Category</a>
        </div>
        
        <div class="panel panel-default">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>
                         Name
                    </th>
                    <th>
                        Editing
                    </th>
                    <th>
                        Deleting
                    </th>
                </thead>
                <body>
                    @if($categories->count() > 0)
                    @foreach($categories as $category)
                    <tr><td>
                        {{$category->name}}
                    </td>
                    <td>
                        <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-xs btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('category.delete', ['id' => $category->id ])}}" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No categories yet</th>
                    </tr>
                @endif
                </body>
            </table>
        </div>
    </div>
    </div>

@stop