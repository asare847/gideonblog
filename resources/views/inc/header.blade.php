<header id="header" style="background-color:rgba(46, 49, 49, 0.51)">
            <h1><a href="{{route('pages.index')}}">#GideonAsare </a></h1>
            <nav id="nav">
                <ul>
                <li><a class="{{Request::is('/')?'button special':''}}" href="{{route('pages.index')}}" accesskey="1" title="home">Home</a></li>
                <li><a class="{{Request::is('project*')?'button special':''}}" href="project" accesskey="2" title="project">Project</a></li>   
                <li><a class="{{Request::is('blog*')?'button special':''}}" href="blog" accesskey="3" title="blog">Blog</a></li>
                <li><a class="{{Request::is('contact*')?'button special':''}}" href="contact" accesskey="4" title="contact">Contact</a></li>
                </ul>
            </nav>
        </header>