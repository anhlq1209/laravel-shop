<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="template/img/logo.jpg" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="/likes"><i class="fa fa-heart"></i> <span>{{ isset($cart) ? $cart['count_items'] : 0; }}</span></a></li>
            <li><a href="/checkout"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>{{ isset($cart) ? $cart['total'] : '0.00'; }}</span> 💳</div>
    </div>
    <div class="humberger__menu__widget">
        @if ($logged)
            <div class="header__top__right__auth__register">
                <a href="/profile">Profile</a>
            </div>
            <div class="header__top__right__auth">
                <a href="/logout">Logout</a>
            </div>
        @else
            <div class="header__top__right__auth__register">
                <a href="/register">Register</a>
            </div>
            <div class="header__top__right__auth">
                <a href="/login">Login</a>
            </div>
        @endif
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        @if ($logged)
                            <div class="header__top__right__auth__register">
                                <a href="/profile">Profile</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="/logout">Logout</a>
                            </div>
                        @else
                            <div class="header__top__right__auth__register">
                                <a href="/register">Register</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="/login">Login</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./template/index.html"><img src="./template/img/logo.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="/product">Shop Details</a></li>
                                <li><a href="/cart">Shoping Cart</a></li>
                                <li><a href="/checkout">Check Out</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="/likes"><i class="fa fa-heart"></i> <span>0</span></a></li>
                        <li><a href="/checkout"><i class="fa fa-shopping-bag"></i> <span>{{ isset($cart) ? $cart['count_items'] : 0; }}</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>{{ isset($cart) ? $cart['total'] : '0.00'; }}</span> 💳</div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->