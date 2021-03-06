
@extends('layout.app')

@section('content')
<!-- Three -->
<!-- Banner -->

<section id="three" class="wrapper style3 special">
    <div class="container">
        <header class="major">
            <h2>Consectetur adipisicing elit</h2>
            <p>Lorem ipsum dolor sit amet. Delectus consequatur, similique quia!</p>
        </header>
    </div>
    <div class="container 50%">
        <form action="#" method="post">
            <div class="row uniform">
                <div class="6u 12u$(small)">
                    <input name="name" id="name" value="" placeholder="Name" type="text">
                </div>
                <div class="6u$ 12u$(small)">
                    <input name="email" id="email" value="" placeholder="Email" type="email">
                </div>
                <div class="12u$">
                    <textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
                </div>
                <div class="12u$">
                    <ul class="actions">
                        <li><input value="Send Message" class="special big" type="submit"></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>
@include('inc.footer')
@endsection