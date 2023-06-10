<header class="header">
	<div class="logo-container">
		<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="header-right">

		<span class="separator"></span>

		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<figure class="profile-picture">
					@php
    					$user = Auth::user();
    					$user_picture = $user->user_picture;
					@endphp
					@if($user_picture == "")
						<img src="{{ url ('admin/assets/images/!logged-user.jpg') }}" class="img-circle" />
					@else
						<img src="{{ url('storage/profile/'.$user_picture) }}" class="img-circle" />
					@endif

				</figure>
				<div class="profile-info">
					<span class="name">{{ Auth::user()->user_name }}</span>
					    @php
						    $user = Auth::user();
						    $user_role = $user->user_role;
					    	$getUserRole = getUserRole($user_role);
					    @endphp
					<span class="role">{{ $getUserRole }}</span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled">
					<li class="divider"></li>
					<li>
						<a role="menuitem" tabindex="-1" href="{{ url('/d3ti-admin/my_profile') }}"><i class="fa fa-user"></i> Profile</a>
					</li>
					<li>
						<a role="menuitem" tabindex="-1" href="{{ url ('d3ti-logout') }}"><i class="fa fa-power-off"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>