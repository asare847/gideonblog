			
			
<footer id="footer">
    <div class="container">
        <section class="links">
            <div class="row">
                <section class="3u 6u(medium) 12u$(small)">
                    <h3>Recent Articles</h3>
                        
                
                    <ul class="unstyled">
                     @foreach($footer_post as $post)
                   <li><a href="#">{{$post->title}}</a></li>
                      @endforeach
                    </ul>
                    
                </section>
                <section class="3u 6u$(medium) 12u$(small)">
                    <h3>Recent Portfolio</h3>
                    <ul class="unstyled">
                        <li><a href="#">Lorem ipsum dolor sit</a></li>
                        <li><a href="#">Reiciendis dicta laboriosam enim</a></li>
                        <li><a href="#">Corporis, non aut rerum</a></li>
                        <li><a href="#">Laboriosam nulla voluptas, harum</a></li>
                        <li><a href="#">Facere eligendi, inventore dolor</a></li>
                    </ul>
                </section>
                <section class="3u 6u(medium) 12u$(small)">
                    <h3>Recent articles </h3>
                    <ul class="unstyled">
                        <li><a href="#">Lorem ipsum dolor sit</a></li>
                        <li><a href="#">Distinctio, inventore quidem nesciunt</a></li>
                        <li><a href="#">Explicabo inventore itaque autem</a></li>
                        <li><a href="#">Aperiam harum, sint quibusdam</a></li>
                        <li><a href="#">Labore excepturi assumenda</a></li>
                    </ul>
                </section>
                <section class="3u$ 6u$(medium) 12u$(small)">
                    <h3>Contact</h3>
                    <ul class="unstyled">
                        <li><a href="#">info@gideonasare.info</a></li>
                        
                    </ul>
                </section>
            </div>
        </section>
        <div class="row">
            <div class="8u 12u$(medium)">
                <ul class="copyright">
                <li>&copy; {{date('Y')}}Untitled. All rights reserved.</li>
                    <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                    <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
                </ul>
            </div>
            <div class="4u$ 12u$(medium)">
                <ul class="icons">
                    <li>
                        <a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
                    </li>
                    <li>
                        <a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
                    </li>
                    <li>
                        <a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
                    </li>
                    <li>
                        <a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>			
			
			
