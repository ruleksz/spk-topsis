<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
		<div class="sidebar-brand-icon">
			<i class="fas fa-car"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SPK Mobil</div>
	</a>

	<hr class="sidebar-divider my-0">

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('dashboard') ?>">
			<i class="fas fa-home"></i>
			<span>Dashboard</span>
		</a>
	</li>

	<hr class="sidebar-divider">

	<div class="sidebar-heading">Data</div>

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('mobil') ?>">
			<i class="fas fa-car-side"></i>
			<span>Data Mobil</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('kriteria') ?>">
			<i class="fas fa-list"></i>
			<span>Data Kriteria</span>
		</a>
	</li>

	<hr class="sidebar-divider">

	<div class="sidebar-heading">Perhitungan</div>

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('machinelearning') ?>">
			<i class="fas fa-brain"></i>
			<span>Machine Learning</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('topsis') ?>">
			<i class="fas fa-calculator"></i>
			<span>TOPSIS</span>
		</a>
	</li>

	<hr class="sidebar-divider d-none d-md-block">

	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
