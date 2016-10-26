@extends('layouts.master')
@section('title')
	{{ Auth::user()->name }}
	@endsection
@section('styles')
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/bootstrap.css?1422792965') }}" />
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/materialadmin.css?1425466319') }}" />
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/font-awesome.min.css?1422529194') }}" />
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/material-design-iconic-font.min.css?1421434286') }}" />
		@endsection

@section('content')
				<!-- BEGIN PROFILE HEADER -->
				<section class="full-bleed">
					<div class="section-body style-default-dark force-padding text-shadow">
						<div class="img-backdrop" style="background-image: url('{{ Auth::user()->banner }}')"></div>
						<div class="overlay overlay-shade-top stick-top-left height-3"></div>
						<div class="row">
							<div class="col-md-2 col-sm-2 col-xs-3">
								<img class="img-circle text-center border-white border-xl img-responsive auto-width" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" />
								<h3 class="text-center">{{ Auth::user()->name }}<br/>
									<small class="text-center">Consultant at CodeCovers</small></h3>
							</div><!--end .col -->
							<div class="col-md-10 col-xs-9 col-sm-10">
								<div class="width-3 text-center pull-right">
									<strong class="text-xl">643</strong><br/>
									<span class="text-light opacity-75">followers</span>
								</div>
								<div class="width-3 text-center pull-right">
									<strong class="text-xl">108</strong><br/>
									<span class="text-light opacity-75">following</span>
								</div>
							</div><!--end .col -->
						</div><!--end .row -->
						<div class="overlay overlay-shade-bottom stick-bottom-left force-padding text-right">
							<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Contact me"><i class="fa fa-envelope"></i></a>
							<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Follow me"><i class="fa fa-twitter"></i></a>
							<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Personal info"><i class="fa fa-facebook"></i></a>
						</div>
					</div><!--end .section-body -->
				</section>
				<!-- END PROFILE HEADER  -->

				<section>
					<div class="section-body no-margin">
						<div class="row">
							<div class="col-md-8">
								<h2>Timeline</h2>

								<!-- BEGIN ENTER MESSAGE -->
								<form class="form">
									<div class="card no-margin">
										<div class="card-body">
											<div class="form-group floating-label">
												<textarea name="status" id="status" class="form-control autosize" rows="1"></textarea>
												<label for="status">What's on your mind?</label>
											</div>
										</div><!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<div class="pull-left">
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-camera-alt"></i></a>
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-location-on"></i></a>
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-attach-file"></i></a>
												</div>
												<a href="javascript:void(0);" class="btn btn-flat btn-accent ink-reaction">Post</a>
											</div><!--end .card-actionbar-row -->
										</div><!--end .card-actionbar -->
									</div><!--end .card -->
								</form>

								<!-- BEGIN ENTER MESSAGE -->

								<!-- BEGIN MESSAGE ACTIVITY -->
								<div class="tab-pane" id="activity">
									@include('includes.timeline')
								</div><!--end #activity -->
							</div><!--end .col -->
							      <!-- END MESSAGE ACTIVITY -->

							      <!-- BEGIN PROFILE MENUBAR -->
							<div class="col-lg-4 col-md-4">
								@include('includes.friends')
								@include('includes.personal-info')
							</div><!--end .col -->
							      <!-- END PROFILE MENUBAR -->

						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
@endsection

@section('js')
		<!-- BEGIN JAVASCRIPT -->
		<script src="{{ url('public/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ url('public/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
		<script src="{{ url('public/js/libs/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{ url('public/js/libs/spin.js/spin.min.js') }}"></script>
		<script src="{{ url('public/js/libs/autosize/jquery.autosize.min.js') }}"></script>
		<script src="{{ url('public/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
		<script src="{{ url('public/js/core/source/App.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppNavigation.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppOffcanvas.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppCard.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppForm.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppNavSearch.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppVendor.js') }}"></script>
		<script src="{{ url('public/js/core/demo/Demo.js') }}"></script>
		<!-- END JAVASCRIPT -->
	@endsection