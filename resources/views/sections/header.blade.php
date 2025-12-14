<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">

        <!-- LEFT NAV -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('contacts.index') }}" class="nav-link">Contacts</a>
            </li>
        </ul>

        <!-- RIGHT NAV -->
        <ul class="navbar-nav ms-auto">

            <!-- USER MENU -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img
                        src="{{ asset('assets/img/user2-160x160.jpg') }}"
                        class="user-image rounded-circle shadow"
                        alt="User Image"
                    />
                    <span class="d-none d-md-inline">
                        {{ auth()->user()->name }}
                    </span>
                </a>

                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">

                    <!-- USER HEADER -->
                    <li class="user-header text-bg-primary">
                        <img
                            src="{{ asset('assets/img/user2-160x160.jpg') }}"
                            class="rounded-circle shadow"
                            alt="User Image"
                        />
                        <p>
                            {{ auth()->user()->name }}
                            <small>
                                Member since {{ auth()->user()->created_at->format('M Y') }}
                            </small>
                        </p>
                    </li>

                    <!-- USER BODY -->
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                    </li>

                    <!-- USER FOOTER -->
                    <li class="user-footer d-flex justify-content-between">

                        <div>
                            <a href="{{ route('profile.index') }}" class="btn btn-default btn-sm">
                                Profile
                            </a>

                            <a href="{{ route('profile.edit') }}" class="btn btn-default btn-sm">
                                Edit
                            </a>

                            <a href="{{ route('profile.password') }}" class="btn btn-default btn-sm">
                                Password
                            </a>
                        </div>

                        <a href="{{ route('logout') }}" class="btn btn-danger btn-sm">
                            Sign out
                        </a>
                    </li>

                </ul>
            </li>
            <!-- END USER MENU -->

        </ul>
    </div>
</nav>
