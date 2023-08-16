<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}" srcset="./images/logo2x.png 2x"
                    alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}"
                    srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('images/logo-small.png') }}"
                    srcset="./images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item {!! adminRoute('admin.dashboard') !!}">
                        <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute([
                        'admin.courses',
                        'admin.course-detail',
                        'admin.lesson-detail',
                        'admin.course-category',
                        'admin.course-orders',
                        'admin.create-course'
                    ]) !!}">
                        <a href="{{ route('admin.courses') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-property"></em></span>
                            <span class="nk-menu-text">Courses</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute(['admin.books', 'admin.book-detail', 'admin.book-orders', 'admin.book-order-detail']) !!}">
                        <a href="{{ route('admin.books') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                            <span class="nk-menu-text">Books</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute(['admin.customers', 'admin.customer-detail']) !!}">
                        <a href="{{ route('admin.customers') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">All Customer</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute([
                        'admin.instructors',
                        'admin.instructor-detail',
                        'admin.instructor-request',
                        'admin.instructor-request-test',
                        'admin.instructor-payment',
                        'admin.instructor-payment-detail',
                    ]) !!}">
                        <a href="{{ route('admin.instructors') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span>
                            <span class="nk-menu-text">Instructors</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute(['admin.student.main', 'admin.student.detail']) !!}">
                        <a href="{{ route('admin.student.main') }}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-user-alt-fill"></em>
                            </span>
                            <span class="nk-menu-text">Students</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute(['admin.blog.main', 'admin.blog.add']) !!}">
                        <a href="{{ route('admin.blog.main') }}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-article"></em>
                            </span>
                            <span class="nk-menu-text">Blog</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute(['admin.event.main', 'admin.event.detail', 'admin.event.orders', 'admin.event.orders.detail']) !!}">
                        <a href="{{ route('admin.event.main') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                            <span class="nk-menu-text">Events</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute(['admin.faq.main']) !!}">
                        <a href="{{ route('admin.faq.main') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-help"></em></span>
                            <span class="nk-menu-text">FAQs</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Admin</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item {!! adminRoute('admin.setting') !!}">
                        <a href="{{ route('admin.setting') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/components.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                            <span class="nk-menu-text">Sign Out</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
