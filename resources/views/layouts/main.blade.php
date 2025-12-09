<!doctype html>
<html lang="en">
<!--begin::Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title') | Contact Manager</title>
    @include('partials.css-main')
</head>
<!--end::Head-->
<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
<!--begin::App Wrapper-->
<div class="app-wrapper">
    <!--begin::Header-->
    @include('sections.header')

    <!--beautiful green alerts-->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mx-3 mt-3">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

    <!--end::Header-->
    <!--begin::Sidebar-->
    @include('sections.sidebar')
    <!--end::Sidebar-->
    <!--begin::App Main-->

    <main class="app-main">
        @include('sections.alert')
        @yield('content')
    </main>

    <!--end::App Main-->
    <!--begin::Footer-->
    @include('sections.footer')
    <!--end::Footer-->
</div>
<!--end::App Wrapper-->
<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
@include('partials.javascript-main')
<!--end::Script-->
</body>
<!--end::Body-->
</html>
