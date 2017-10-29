@extends('users.app')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=872806406208613";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@section('bg-img', asset('users/img/home-bg.jpg'))

@section('heading',  $post->title )
@section('sub-heading', $post->subtitle)

@section('content')
        
   <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    
                   <small class="pull-left"><strong>Created at:</strong> {{ $post->created_at->diffForHumans() }}</small><br>
                   
                       @foreach ($post->categories as $category)
                         <strong>Category:</strong>

                           <a href="" class="btn btn-primary"><small>{{$category->name}} </small></a>

                            
                        @endforeach
                  
                    
                  <p>{!! htmlspecialchars($post->body) !!}</p>
                    
                    @foreach ($post->tags as $tag)
                         <strong>Tags:</strong>

                          <a href="" class="btn btn-primary"> <small> {{$tag->name}}  </small></a>

                           
                        @endforeach

                </div>

                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
            </div>

        </div>

    </article>


@endsection