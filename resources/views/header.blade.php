<head>
    @php $menusHtml = \App\Helpers\Helper::menus($menus);
    @endphp
<div class="container-menu-desktop">
    <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop container">

            <!-- Logo desktop -->
            <a href="/" style="font-size: 30pt" class="logo">
                <p style="font-style: italic; font-size: 30pt; color: #0C1021">ĐẬM SÂU SHOP</p>
{{--                <img src=""/>--}}
            </a>



            <!-- Menu desktop -->
            <div class="menu-desktop">
                <ul class="main-menu">
                    <li class="active-menu"><a href="/" style="font-size: 20pt">Trang Chủ</a> </li>
                    {!! $menusHtml !!}
                </ul>
            </div>
            <li>
                <a href="lien-he.html" style="color: #002512"><b >☻Liên hệ</b></a>
            </li>
            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Header Mobile -->
<div class="wrap-header-mobile">
    <!-- Logo moblie -->
    <div class="logo-mobile">
        <a HREF="/" style="font-size: 90pt"><h1>ĐẬM SÂU SHOP</h1></a>
    </div>

    <!-- Icon header -->
    <div class="wrap-icon-header flex-w flex-r-m m-r-15">
        <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
        </div>

        <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
            <i class="zmdi zmdi-shopping-cart"></i>
        </div>
    </div>

    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
    </div>
</div>


<!-- Menu Mobile -->
<div class="menu-mobile">
    <ul class="main-menu-m">
        <li class="active-menu"><a href="/">Trang Chủ</a> </li>
        {!! $menusHtml!!}
    </ul>
</div>
    <li>
        <a href="lien-he.html" style="color: #143b00"><b>☻Liên hệ</b></a>
    </li>

<!-- Modal Search -->
<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
    <div class="container-search-header">
        <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
            <img src="/template/images/icons/icon-close2.png" alt="CLOSE">
        </button>

        <form class="wrap-search-header flex-w p-l-15">
            <button class="flex-c-m trans-04">
                <i class="zmdi zmdi-search"></i>
            </button>
            <input class="plh3" type="text" name="search" placeholder="Search...">
        </form>
    </div>
</div>
</head>
