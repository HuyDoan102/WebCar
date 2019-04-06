<div class="header">
    <div class="header-bot">
        <div class="logo">
            <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""/></a>
        </div>
        <div class="search">
            <input type="text" class="textbox" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
            <button class="gray-button"><span>Search</span></button>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="menu">
    <div class="top-nav">
        <ul>
            <li class="active"><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('specials') }}">Specials</a></li>
            <li><a href="{{ route('new') }}">New</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li>
                <a href="{{ route('carts.shoppingCart') }}">
                    <span class="fa fa-shopping-cart"></span>
                    <span class="badge">{{ session()->has('cart') ? session()->get('cart')->getTotalQuantity() : '' }}</span>
                </a>
            </li>
            @if (empty(Auth::guard()->user()->name))
                <li><a href="{{ route('customers.login') }}">Login</a></li>

            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::guard()->user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" style="color: #000000" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endif
        </ul>
        <div class="clear"></div>
     </div>
</div>
