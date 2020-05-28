
@extends('layout.app')

@section('content')
<!-- Three -->
<!-- Banner -->

<section id="three" class="wrapper style3 special">
    <div class="container">
        <header class="major">
            <h2>Create Post </h2>
            <p>Write something to post on the blog</p>
        </header>
    </div>
    <div class="container 50%">
    <form action="{{route('blog.store')}}" method="post">
        @csrf
            <div class="row uniform">
                <div class="12u 12u$(small)">
                <input name="title" id="name"   value="{{old('title')}}" placeholder="Title" type="text">
                </div>
                <div class="12u 12u$(small)">
                <input name="slug" id="slug"   value="{{old('slug')}}" placeholder="Slug" type="text">
                    </div>
                <div class="12u$ 12u$(small)">
                <textarea name="body" id="" value="{{old('body')}}" placeholder="Message" rows="6"></textarea>
                </div>
               
                <div class="12u$">
                    <ul class="actions">
                        <li><input value="Post Message" class="special big" type="submit"></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection