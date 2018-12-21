<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>{{ $settings->site_name }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
</head>

<body>


    @include('includes.header')


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="jumbotron-heading">Recent Posts</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents.
                    </p>
                    <br>
                </div>

            </div>

        </div>
    </section>
    
    <div class="allposts">
        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="row">

                        <div class="col-md-12">
                            @if($posts[0])
                            <div class="card card-wide" style="background-image: url('{{ $posts[0]->featured}}')">
                                <div>
                                    <span class="lead">{{$posts[0]->category->name}}</span>
                                    <h4> {{$posts[0]->title}}</h4>
                                    <!-- <p>{{$posts[0]->created_at->diffForHumans()}}</p> -->
                                    <a href="{{ route('post.single', ['slug' => $posts[0]->slug]) }}" class="more">Read more</a>
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            @if($posts[1])
                            <div class="card card-thin" style="background-image: url('{{  $posts[1]->featured }}')">
                                <div>
                                    <span class="lead">{{$posts[1]->category->name}}</span>
                                    <h4>{{$posts[1]->title}}</h4>
                                    <a href="{{ route('post.single', ['slug' => $posts[1]->slug]) }}" class="more">Read more</a>
                                </div>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card card-thin" style="background-image: url('{{ $posts[2]->featured }}')">
                                <div>
                                    <span class="lead">{{$posts[2]->category->name}}</span>
                                    <h4>{{$posts[2]->title}}</h4>
                                    <a href="{{ route('post.single', ['slug' => $posts[2]->slug]) }}" class="more">Read more</a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-thin" style="background-image: url('{{ $posts[3]->featured }}')">
                                <div>
                                    <span class="lead">{{$posts[3]->category->name}}</span>
                                    <h4>{{$posts[3]->title}}</h4>
                                    <a href="{{ route('post.single', ['slug' => $posts[3]->slug]) }}" class="more">Read more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card card-thin" style="background-image: url('{{ $posts[4]->featured }}')">
                                <div>
                                    <span class="lead">{{$posts[4]->category->name}}</span>
                                    <h4>{{$posts[4]->title}}</h4>
                                    <a href="{{ route('post.single', ['slug' => $posts[4]->slug]) }}" class="more">Read more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-wide" style="background-image: url('{{ $posts[5]->featured}}')">
                                <div>
                                    <span class="lead">{{$posts[5]->category->name}}</span>
                                    <h4>{{$posts[5]->title}}</h4>
                                    <a href="{{ route('post.single', ['slug' => $posts[5]->slug]) }}" class="more">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="jumbotron-heading">{{$sport->name}}</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents.
                </p>
                <br>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($sport->post()->take(3)->get() as $post)
            <div class="col-md-4">
                
                <div class="card  card-short" style="background-image: url('{{ $post->featured}}')">
                    <div>
                        <span class="lead">{{$post->category->name}}</span>
                        <h4> {{$post->title}}</h4>
                        
                        <div class="more">
                        
                        <a href="{{ route('post.single', ['slug' => $post->slug]) }}">Read more</a>
                        </div>
                       
                    </div>
                    
                </div>
                
            </div> 
            @endforeach
        </div>
    </div>





    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting
                    started guide</a>.</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        $(function () {
            Holder.addTheme("thumb", {
                background: "#55595c",
                foreground: "#eceeef",
                text: "Thumbnail"
            });
        });
    </script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>