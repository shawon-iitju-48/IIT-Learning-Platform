<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>MAIN MENU</span>
                </li>

                <li class="{{ set_active(['home']) }}">
                    <a href="{{url('/')}}/home"><i class="feather-grid"></i>
                        <span> Dashboard</span>
                    </a>
                </li>

                <li class="{{ set_active(['profile']) }}">
                    <a href="{{url('/')}}/profile"><i class="fa fa-user"></i>
                        <span> Profile</span> 
                    </a>
                </li>

                <li>
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i>
                        <span> Searching</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="teachers.html">Searching Teacher</a></li>
                        <li><a href="teacher-details.html">Searching Student</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-table"></i>
                        <span>Schedule</span>
                    </a>
                </li>


                <li class="menu-title">
                    <span>MANAGEMENT</span>
                </li>

                <li class="{{ set_active(['courses']) }}">
                    <a href="{{url('/')}}/courses"><i class="fa-solid fa-chalkboard-user"></i> <span>Classroom</span></a>
                </li>

                <li>
                    <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Examination</span></a>
                </li>
                <li>
                    <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                </li>
                <li>
                    <a href="{{url('/')}}/logout"><i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
