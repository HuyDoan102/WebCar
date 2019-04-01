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
            <li><a href="{{ route('contact') }}">Contatc</a></li>
            <li><a href="#"><span class="fa fa-shopping-cart"></span></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="#">New</a></li>
            <li><a href="#">Contact</a></li>
            <li>
                <a href="{{ route('carts.shoppingCart') }}">
                    <span class="fa fa-shopping-cart"></span>
                    <span class="badge">{{ session()->has('cart') ? session()->get('cart')->getTotalQuantity() : '' }}</span>
                </a>
            </li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
        <div class="clear"></div>
     </div>
</div>
