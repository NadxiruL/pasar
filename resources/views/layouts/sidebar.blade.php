<aside class="left-sidebar" data-sidebarbg="skin6">
    <base href="{{ \URL::to('/') }}">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html" aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Overview</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="hide-menu">Orders</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('product.index') }}" aria-expanded="false">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        <span class="hide-menu">Products</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="hide-menu">Customers</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('category.index') }}" aria-expanded="false">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                        <span class="hide-menu">Category</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('store.create') }}" aria-expanded="false">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <span class="hide-menu">My Store</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('kedai.index') }}" aria-expanded="false">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <span class="hide-menu">View Website</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html" aria-expanded="false">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span class="hide-menu">Settings</span>
                    </a>
                </li>
                <li class="text-center p-20 upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/ampleadmin/" class="btn d-grid btn-danger text-white" target="_blank">
                        Upgrade to Pro</a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
