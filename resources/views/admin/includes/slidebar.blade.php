<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="active">
                    <a href="{{route('/')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-user"></i> <span> Doctors</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('request-doctor') }}">Requests</a></li>
                        <li><a href="{{ route('list-doctor') }}">Current Doctors</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-user"></i> <span> Blogs</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('request-blog') }}">Blog Requests</a></li>
                        <li><a href="{{ route('list-blog') }}">Current Blogs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="patients.html"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                </li>
                <li>
                    <a href="appointments.html"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                </li>
                <li>
                    <a href="schedule.html"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
