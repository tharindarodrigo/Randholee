<nav id="mainnav-container">
    <div id="mainnav">

        <!--Shortcut buttons-->
        <!--================================-->
        <div id="mainnav-shortcut">
            <ul class="list-unstyled">
                <li class="col-xs-4" data-content="Additional Sidebar">
                    <a id="demo-toggle-aside" class="shortcut-grid" href="#">
                        <i class="fa fa-magic"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Notification">
                    <a id="demo-alert" class="shortcut-grid" href="#">
                        <i class="fa fa-bullhorn"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Page Alerts">
                    <a id="demo-page-alert" class="shortcut-grid" href="#">
                        <i class="fa fa-bell"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!--================================-->
        <!--End shortcut buttons-->


        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li>
                            <a href="{{route('control-panel.home-contents.index')}}">
                                <i class="fa fa-dashboard"></i>
                                <span class="menu-title">
                                    <strong>Home </strong>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('control-panel.about-us.index')}}">
                                <i class="fa fa-dashboard"></i>
                                <span class="menu-title">
                                    <strong>About Us</strong>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('control-panel.menu-categories.index')}}">
                                <i class="fa fa-dashboard"></i>
                                <span class="menu-title">
                                    <strong>Menu Categories</strong>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('control-panel.menu-items.index')}}">
                                <i class="fa fa-dashboard"></i>
                        <span class="menu-title">
                            <strong>Menu Items</strong>
                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('control-panel.gallery-images.index')}}">
                                <i class="fa fa-dashboard"></i>
                        <span class="menu-title">
                            <strong>Gallery</strong>
                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('control-panel.contact.index')}}">
                                <i class="fa fa-dashboard"></i>
                        <span class="menu-title">
                            <strong>Contact</strong>
                        </span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
