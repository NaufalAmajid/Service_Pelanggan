@extends('layouts.headfoot')

@section('content')
<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Dashboard Service </h2>			
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->
<div class="ecommerce-widget">

	<div class="row">
		<!-- ============================================================== -->
		<!-- sales  -->
		<!-- ============================================================== -->
		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<div class="card border-3 border-top border-top-primary">
				<div class="card-body">
					<h5 class="text-muted">Pelanggan</h5>
					<div class="metric-value d-inline-block">
						<h1 class="mb-1">$12099</h1>
					</div>
					<div class="metric-label d-inline-block float-right text-success font-weight-bold">
						<span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end sales  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- new customer  -->
		<!-- ============================================================== -->
		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<div class="card border-3 border-top border-top-primary">
				<div class="card-body">
					<h5 class="text-muted">Data Printer</h5>
					<div class="metric-value d-inline-block">
						<h1 class="mb-1">1245</h1>
					</div>
					<div class="metric-label d-inline-block float-right text-success font-weight-bold">
						<span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end new customer  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- visitor  -->
		<!-- ============================================================== -->
		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<div class="card border-3 border-top border-top-primary">
				<div class="card-body">
					<h5 class="text-muted">Karyawan</h5>
					<div class="metric-value d-inline-block">
						<h1 class="mb-1">13000</h1>
					</div>
					<div class="metric-label d-inline-block float-right text-success font-weight-bold">
						<span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end visitor  -->
		<!-- ============================================================== -->
	</div>

</div>
@endsection