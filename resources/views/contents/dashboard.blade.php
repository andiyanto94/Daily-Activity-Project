@extends('layouts.master')
@section('title')
	Home
	@endsection

@section('styles')
	<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/bootstrap.css?1422792965') }}" />
	<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/materialadmin.css?1425466319') }}" />
	<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/font-awesome.min.css?1422529194') }}" />
	<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/material-design-iconic-font.min.css?1421434286') }}" />
	<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/libs/rickshaw/rickshaw.css?1422792967') }}" />
	<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/libs/morris/morris.core.css?1420463396') }}'" />
	@endsection

@section('content')
<section>
	<div class="section-body">
		<div class="row">
			<!-- BEGIN ALERT - REVENUE -->
			@include('contents.charts.revenue')
			<!-- END ALERT - REVENUE -->

			<!-- BEGIN ALERT - VISITS -->
			@include('contents.charts.visits')
			<!-- END ALERT - VISITS -->
			<!-- BEGIN ALERT - BOUNCE RATES -->
			@include('contents.charts.bounce')
			<!-- END ALERT - BOUNCE RATES -->

			<!-- BEGIN ALERT - TIME ON SITE -->
			@include('contents.charts.time')
			<!-- END ALERT - TIME ON SITE -->

		</div><!--end .row -->
		<div class="row">

			<!-- BEGIN TODOS -->
			@include('contents.charts.todos')
			<!-- END TODOS -->

			<!-- BEGIN REGISTRATION HISTORY -->
		@include('contents.charts.registration')
		<!-- END REGISTRATION HISTORY -->

			<!-- BEGIN NEW REGISTRATIONS -->
		@include('contents.charts.new-registration')
		<!-- END NEW REGISTRATIONS -->
			</div><!--end .row -->
	</div><!--end .section-body -->
</section>
	@endsection

@section('js')
	<script src="{{ url('public/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ url('public/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ url('public/js/libs/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ url('public/js/libs/spin.js/spin.min.js') }}"></script>
	<script src="{{ url('public/js/libs/autosize/jquery.autosize.min.js') }}"></script>
	<script src="{{ url('public/js/libs/moment/moment.min.js') }}"></script>
	<script src="{{ url('public/js/libs/flot/jquery.flot.min.js') }}"></script>
	<script src="{{ url('public/js/libs/flot/jquery.flot.time.min.js') }}"></script>
	<script src="{{ url('public/js/libs/flot/jquery.flot.resize.min.js') }}"></script>
	<script src="{{ url('public/js/libs/flot/jquery.flot.orderBars.js') }}"></script>
	<script src="{{ url('public/js/libs/flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ url('public/js/libs/flot/curvedLines.js') }}"></script>
	<script src="{{ url('public/js/libs/jquery-knob/jquery.knob.min.js') }}"></script>
	<script src="{{ url('public/js/libs/sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ url('public/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
	<script src="{{ url('public/js/libs/d3/d3.min.js') }}"></script>
	<script src="{{ url('public/js/libs/d3/d3.v3.js') }}"></script>
	<script src="{{ url('public/js/libs/rickshaw/rickshaw.min.js') }}"></script>
	<script src="{{ url('public/js/core/source/App.js') }}"></script>
	<script src="{{ url('public/js/core/source/AppNavigation.js') }}"></script>
	<script src="{{ url('public/js/core/source/AppOffcanvas.js') }}"></script>
	<script src="{{ url('public/js/core/source/AppCard.js') }}"></script>
	<script src="{{ url('public/js/core/source/AppForm.js') }}"></script>
	<script src="{{ url('public/js/core/source/AppNavSearch.js') }}"></script>
	<script src="{{ url('public/js/core/source/AppVendor.js') }}"></script>
	<script src="{{ url('public/js/core/demo/Demo.js') }}"></script>
	<script src="{{ url('public/js/core/demo/DemoDashboard.js') }}"></script>
	@endsection