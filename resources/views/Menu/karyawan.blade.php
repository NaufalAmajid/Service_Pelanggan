@extends('layouts.headfoot')

@section('content')
<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Menu Petugas/Karyawan </h2>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Data Petugas</li>
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

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
			<div class="section-block">
				<h5 class="section-title">Data Petugas/Karyawan</h5>
				<p>berikut informasi mengenai petugas, penambahan petugas.</p>
			</div>
			<div class="tab-regular">
				<ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Tabel Petugas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">Tambahkan Petugas</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent7">
					<div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card shadow p-3 mb-5">
								<h5 class="card-header">Petugas/Karyawan</h5>
								<div class="card-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th scope="col"></th>
												<th scope="col">Nama Petugas</th>
												<th scope="col">No Hp</th>
												<th scope="col">Printer</th>
												<th scope="col">Merk dan Tipe</th>
												<th scope="col"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Rian</td>
												<td>08301221235</td>
												<td>Asus</td>
												<td>Ada - P021</td>
												<td>
													<a href="#" class="btn btn-rounded btn-primary"><i class="fas fa-eye"></i></a>
													<a href="#" class="btn btn-rounded btn-warning"><i class="fas fa-edit"></i></a>
													<a href="#" class="btn btn-rounded btn-danger"><i class="fas fa-eraser"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="card shadow p-3 mb-5">
									<div class="card-body">
										<form action="" method="POST">
											<div class="form-group row">
												<div class="col-sm-6">
													<label for="inputText1" class="col-form-label">Nama Pelanggan</label>
													<input id="inputText1" type="text" class="form-control" placeholder="nama pelanggan..." name="nama_pelanggan">
												</div>
												<div class="col-sm-6">
													<label for="inputText2" class="col-form-label">No Hp</label>
													<input id="inputText2" type="number" class="form-control" placeholder="no whatapps..." name="no_hp">
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-6">
													<label for="inputText3" class="col-form-label">Tanggal Masuk</label>
													<input id="inputText3" type="date" class="form-control" placeholder="tanggal masuk..." name="tanggal_masuk">
												</div>
												<div class="col-sm-6">
													<label for="kode_printer" class="col-form-label">Printer</label>
													<select id="kode_printer" name="kode_printer" class="form-control">
														<option value="">---</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-6">
													<label for="inputText4" class="col-form-label">Biaya</label>
													<input id="inputText4" type="number" class="form-control" placeholder="biaya service..." name="biaya">
												</div>
												<div class="col-sm-6">
													<label for="kode_karyawan" class="col-form-label">Petugas</label>
													<select id="kode_karyawan" name="kode_karyawan" class="form-control">
														<option value="">---</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-6">
													<label for="exampleFormControlTextarea1">Alamat</label>
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
												</div>
												<div class="col-sm-6">
													<label for="exampleFormControlTextarea2">Kerusakan</label>
													<textarea class="form-control" id="exampleFormControlTextarea2" rows="3" name="kerusakan"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<a href="#" class="btn btn-info col col-md-12">Submit</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
@endsection