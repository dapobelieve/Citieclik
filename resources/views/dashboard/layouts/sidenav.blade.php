<nav class="pcoded-navbar">
		<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
		<div class="pcoded-inner-navbar main-menu">
			<div class="pcoded-navigation-label">Navigation</div>
			<ul class="pcoded-item pcoded-left-item">
					<li class="pcoded-hasmenu active pcoded-trigger">
						<a href="{{ route('admin.home') }}">
							<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
							<span class="pcoded-mtext">Dashboard</span>
						</a>
					</li>
					<li class="pcoded-hasmenu pcoded-trigger">
						<a href="{{ route('admin.users') }}">
							<span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
							<span class="pcoded-mtext">Users</span>
						</a>
					</li>
                    <li class="pcoded-hasmenu pcoded-trigger">
                        <a href="{{ route('admin.agents') }}">
                            <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                            <span class="pcoded-mtext">Agents</span>
                        </a>
                    </li>
					{{-- <li class="pcoded-hasmenu pcoded-trigger">
						<a href="javascript:void(0)">
							<span class="pcoded-micon"><i class="ti-settings"></i><b>P</b></span>
							<span class="pcoded-mtext">Settings</span>
							<span class="pcoded-mcaret"></span>
						</a>
						<ul class="pcoded-submenu">
                            <li class="active">
                                <a href="{{ route('admin.settings.site') }}">
                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                <span class="pcoded-mtext">Site Settings</span>
                                <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="box-layout.html" target="_blank">
                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                <span class="pcoded-mtext">Box Layout</span>
                                <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="menu-rtl.html" target="_blank">
                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                <span class="pcoded-mtext">RTL</span>
                                <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
					</li> --}}
				</ul>
		</div>
	</nav>