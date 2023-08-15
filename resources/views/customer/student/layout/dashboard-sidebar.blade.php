<div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
    <div class="inner">
        <div class="content-item-content">

            <div class="rbt-default-sidebar-wrapper">
                <div class="section-title mb--20">
                    <h6 class="rbt-title-style-2">Welcome, Jone Due</h6>
                </div>
                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('student.dashboard') }}" {!! getRoute('student.dashboard') !!}><i class="feather-home"></i><span>Dashboard</span></a></li>
                        <li><a href="{{ route('student.profile') }}" {!! getRoute('student.profile') !!}><i class="feather-user"></i><span>My Profile</span></a></li>
                        <li><a href="{{ route('student.course') }}" {!! getRoute('student.course') !!}><i class="feather-book-open"></i><span>Enrolled Courses</span></a></li>
                        <li><a href="{{ route('student.wishlist') }}" {!! getRoute('student.wishlist') !!}><i class="feather-bookmark"></i><span>Wishlist</span></a></li>
                        <li><a href="{{ route('student.reviews') }}" {!! getRoute('student.reviews') !!}><i class="feather-star"></i><span>Reviews</span></a></li>
                        <li><a href="{{ route('student.quiz-attempt') }}" {!! getRoute('student.quiz-attempt') !!}><i class="feather-help-circle"></i><span>My Quiz Attempts</span></a></li>
                        <li><a href="{{ route('student.order-history') }}" {!! getRoute('student.order-history') !!}><i class="feather-shopping-bag"></i><span>Order History</span></a></li>
                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">User</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('student.settings') }}" {!! getRoute('student.settings') !!}><i class="feather-settings"></i><span>Settings</span></a></li>
                        <li><a href="index.html"><i class="feather-log-out"></i><span>Logout</span></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>