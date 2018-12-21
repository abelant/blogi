@extends('layouts.frontend')

@section('content')

<!-- <div class="heading" style="background-image: url('')">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto ">
                <div class="post">
                    <img src="{{asset($post->featured)}}" alt="">
                    <h1>{{$post->title}}</h1>
                    <span class="subheading">{{$post->created_at->diffForHumans()}}</span><br><br>
                    <p>{{$post->content}}</p>
                </div>
            </div>
            <div class="col-lg-4">
            

            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class=" heading" style="background-image: url('{{ asset($post->featured) }}')">
    
    </div>
    <div class="container">
        <div class=" front row"> <!-- TRANSLATE Y ( 100PX ) -->
            <h1>{{$post->title}}</h1>
            <p>{{$post->created_at->diffForHumans()}}</p>
            <p>{{$post->content}}</p>
            @foreach($tags as $tag)
                    
                        
                        <span class="tag">{{$tag->tag}} </span>
                        
                    
            @endforeach
        </div>
    </div>
</div>
@endsection









