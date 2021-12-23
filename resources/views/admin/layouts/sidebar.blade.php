<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
	<a href="/admin" class="brand-link">
		<img src="/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-header">EXAMPLES</li>
				<li class="nav-item">
					<a href="/admin" class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}">
						<i class="nav-icon fas fa-chart-line"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/admin/categories" class="nav-link {{ $title === 'Categories' ? 'active' : '' }}">
						<i class="nav-icon fas fa-boxes"></i>
						<p>
							Categories
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/admin/products" class="nav-link {{ $title === 'Products' ? 'active' : '' }}">
						<i class="nav-icon fab fa-battle-net"></i>
						<p>
							Products
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/admin/bills" class="nav-link {{ $title === 'Bills' ? 'active' : '' }}">
						<i class="nav-icon fas fa-file-invoice"></i>
						<p>
							Bills
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/admin/messages" class="nav-link {{ $title === 'Messages' ? 'active' : '' }}">
						<i class="nav-icon fas fa-mail-bulk"></i>
						<p>
							Messages
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/admin/logout" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>