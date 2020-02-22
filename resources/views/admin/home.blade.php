@extends('layouts.template')

@section('title') Dashboard @endsection

@section('content')
		<!-- home -->
		<div class="text-center">
			<img src="{{ asset('gentella/images/logoKDCW.png') }}" alt="KeDai Computerworks" class="logos">
		</div>
		<div class="text-center">
			<img src="{{ asset('gentella/images/header-logo2.png') }}" alt="KeDai" class="image-header">
		</div>
		<!-- akhir home -->

		<!-- barang -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div>
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#inventaris" aria-controls="home" role="tab" data-toggle="tab">Inventaris</a></li>
				    <li role="presentation"><a href="#persuratan" aria-controls="profile" role="tab" data-toggle="tab">Persuratan</a></li>
				  </ul>
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="inventaris">
				    	<div class="row">
							<div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a href="{{route('data-barang.index')}}">
									<div class="tile-stats padd">
										<div class="icon"><i class="fa fa-pie-chart"></i>
										</div>
										<div class="count ico">{{$databarang}}</div>
										<h3 class="desc">Jumlah Barang Yang Ada Saat Ini</h3>
									</div>
								</a>
							</div>
							<div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a href="{{route('peminjaman.index')}}">
									<div class="tile-stats padd">
										<div class="icon"><i class="fa fa-shopping-cart"></i>
										</div>
										<div class="count ico">{{$barangpinjam}}</div>
										<h3 class="desc">Jumlah Barang Yang Di Pinjam</h3>
									</div>
								</a>
							</div>
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade" id="persuratan">
				    	<div class="row">
							<div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a href="{{route('data-barang.index')}}">
									<div class="tile-stats mail">
										<div class="icon">
											<i class="fa fa-envelope"></i>
										</div>
										<h3 class="desc">Persuratan</h3>
									</div>
								</a>
							</div>
							<div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12 ">
								<a href="{{route('peminjaman.index')}}">
									<div class="tile-stats mail">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div>
										<h3 class="desc">Data Anggota</h3>
									</div>
								</a>
							</div>
						</div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<!-- akhir barang -->
@endsection