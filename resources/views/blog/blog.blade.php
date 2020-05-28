
@extends('layout.app')
@section('content')
<section id="two" class="wrapper style2 special">
    <div class="container">
        <header class="major">
            <h2>Lorem ipsum dolor sit</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p>
        </header>
        <section class="container">
            <div class="row"> 
                <section class=" major 6u 6u(large) 12u$(xsmall) "> 
                    @foreach ($articles as $article)
                <h4><a href="{{route('article.show',$article)}}">{{strtoupper($article->title)}}</a></h4>
                    <small><em>Posted on:{{$article->created_at}}</em></small>
                <hr>
                 @endforeach 
                </section>
            </div>
        </section>
        
    </div>
</section> 

@endsection