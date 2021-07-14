<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <span class="avatar avatar-sm mt-2">
                <img src="{{ asset('assets') }}/admin/assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin-home') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Asil</span>
                </a>
            </li>
            <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                <li class="nav-item">
                    <a class="nav-link pl-3" href="#">Logout</a>
                </li>
            </ul>
        </ul>


        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin-category') }}">
                    <i class="fe fe-list fe-16"></i>
                    <span class="ml-3 item-text">Categories</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-message-square fe-16"></i>
                    <span class="ml-3 item-text">Products</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin-create-product') }}"><span class="ml-1 item-text">New Product</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin-product') }}"><span class="ml-1 item-text">All Products</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item w-100">
                <a class="nav-link" href="#">
                    <i class="fe fe-message-circle fe-16"></i>
                    <span class="ml-3 item-text">Comments</span>
                </a>
            </li>

            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin-setting') }}">
                    <i class="fe fe-settings fe-16"></i>
                    <span class="ml-3 item-text">Setting</span>
                </a>
            </li>

        </ul>
    </nav>
</aside>
