<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="active">
                    <a href="{{route('doctor-home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-book"></i> <span> Education</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('education') }}">View Educations</a></li>
                        <li><a href="{{ route('new-education') }}">Add Education Info</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-stack-overflow"></i> <span> Experience</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('doctorExperience.index') }}">View Experiences</a></li>
                        <li><a href="{{ route('doctorExperience.create') }}">Add Experience</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-user-times"></i> <span> Schedule</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('doctorSchedule.index') }}">View Schedule</a></li>
                        <li><a href="{{ route('doctorSchedule.create') }}">Add To Schedule</a></li>
                    </ul>
                </li>
                
                <li class="submenu">
                    <a href="#"><i class="fa fa-user-times"></i> <span> Add Information</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="">View Information</a></li>
                        <li><a href="{{route('blogInformation.create')}}">Add To Information</a></li>
                    </ul>
                </li>
                


                <li>
                    <a href="departments.html"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
