<div class="collapse navbar-toggleable-sm" id="tmNavbar">
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a href="{{url('/')}}" class="{{Request::is('/')? 'active': ''}}">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{url('/about')}}" class="{{Request::is('about')? 'active': ''}}">About</a>
        </li>
        <li class="nav-item">
            <a href="{{url('/blog')}}" class="{{Request::is('blog')? 'active': ''}}">Blog</a>
        </li>
        <li class="nav-item">
            <a href="{{url('/contact')}}" class="{{Request::is('contact')? 'active': ''}}">Contact</a>
        </li>
    </ul>                        
</div>