@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Create a new Post
    </div>
    <div class="panel-body">
        <form action="{{route('post.update',['id' => $post->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Select Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($post->category->id == $category->id)
                        selected
                        @endif
                        >{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                @foreach($tags as $tag)
                <div class="checkbox">
                    <label><input type="checkbox" name="tags[]" value="{{$tag->id}}" @foreach($post->tags as $t)
                        @if($tag->id == $t->id)
                        checked
                        @endif
                        @endforeach
                        >{{$tag->tag}}</label>
                </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="featured"></label>
                <input name="featured" type="file" class="form-control"></input>
            </div>
            <div class="form-group">
                <label for="content"></label>
                <textarea name="content" id="content" value=" {{$post->content}}" cols="5" rows="5" class="form-control"></textarea>
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