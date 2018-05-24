<div id="topbar">
	<div class="container">
		<div class="row">
			<div class="topbar-menus" style="width:100%;">
				<ul class="topbar-menu left">
					<li><a href="/">HOME</a></li>
					<li><a href="/about-us">ABOUT</a></li>
					<li><a href="/contact-us">CONTACT US</a></li>
					<li><a href="/blog">BLOG</a></li>
				</ul>
				<ul class="topbar-menu right" style="float:right">
					@guest
	                    <li><a href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
	                    <li><a href="{{ route('register') }}">{{ __('REGISTER') }}</a></li>
	                @else
	                    <li class="nav-item dropdown">
	                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                            {{ Auth::user()->name }} <span class="caret"></span>
	                        </a>

	                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                            <a class="dropdown-item" href="{{ route('logout') }}"
	                               onclick="event.preventDefault();
	                                             document.getElementById('logout-form').submit();">
	                                {{ __('Logout') }}
	                            </a>

	                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                @csrf
	                            </form>
	                        </div>
	                    </li>
	                @endguest
				</ul>
			</div>
		</div>
	</div>
</div>