<div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
    <div class="inner">
        <div class="content-item-content">

            <div class="rbt-default-sidebar-wrapper">
                <div class="section-title mb--20">
                    <h6 class="rbt-title-style-2">Welcome, Jone Due</h6>
                </div>
                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('instructor.dashboard') }}" {!! getRoute('instructor.dashboard') !!}><i class="feather-home"></i><span>Dashboard</span></a></li>
                        <li><a href="{{ route('instructor.profile') }}" {!! getRoute('instructor.profile') !!}><i class="feather-user"></i><span>My Profile</span></a></li>
                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">Instructor</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('instructor.mycourse') }}" {!! getRoute('instructor.mycourse') !!}><i class="feather-monitor"></i><span>My Courses</span></a></li>
                        <li><a href="{{ route('instructor.quiz') }}" {!! getRoute('instructor.quiz') !!}><i class="feather-message-square"></i><span>Quiz</span></a></li>
                        <li><a href="{{ route('instructor.assignment') }}" {!! getRoute('instructor.assignment') !!}><i class="feather-list"></i><span>Assignments</span></a></li>
                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">User</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('instructor.setting') }}" {!! getRoute('instructor.setting') !!}><i class="feather-settings"></i><span>Settings</span></a></li>
                        <li><a href="index.html"><i class="feather-log-out"></i><span>Logout</span></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>