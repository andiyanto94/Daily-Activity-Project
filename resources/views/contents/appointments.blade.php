@extends('layouts.master')
@section('title')
	My Appointments
	@endsection
@section('styles')
		<!-- BEGIN STYLESHEETS -->
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/bootstrap.css?1422792965') }}" />
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/materialadmin.css?1425466319') }}" />
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/font-awesome.min.css?1422529194') }}" />
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/material-design-iconic-font.min.css?1421434286') }}" />
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/libs/jquery-ui/jquery-ui-theme.css?1423393666') }}" />
		<link type="text/css" rel="stylesheet" href="{{ url('public/css/theme-default/libs/fullcalendar/fullcalendar.css?1425466619') }}" />
		<!-- END STYLESHEETS -->
@endsection
	@section('content')
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li class="active">Calendar</li>
						</ol>
					</div>
					<div class="section-body">
						<div class="row">

							<!-- BEGIN CALENDAR EVENTS -->
							<div class="col-sm-3">
								<h2>Upcoming events</h2>
								<p class="opacity-75">Please plan your upcomming events by dragging them on the calendar.</p>
								<br/>
								<div class="checkbox checkbox-styled">
									<label>
										<input id="drop-remove" type="checkbox" checked>
										<span>Remove after drop</span>
									</label>
								</div>
								<br/>
								<ul class="list divider-full-bleed list-events">
									<li class="tile">
										<div class="tile-content">
											<div class="tile-text">Call clients for follow-up</div>
											<div class="tile-icon"><i class="fa fa-circle-thin text-primary"></i></div>
										</div>
									</li>
									<li class="tile" data-class-name="event-warning">
										<div class="tile-content">
											<div class="tile-text">Schedule meeting</div>
											<div class="tile-icon"><i class="fa fa-circle-thin text-warning"></i></div>
										</div>
									</li>
									<li class="tile" data-class-name="event-info">
										<div class="tile-content">
											<div class="tile-text">Upload files to server</div>
											<div class="tile-icon"><i class="fa fa-circle-thin text-info"></i></div>
										</div>
									</li>
									<li class="tile" data-class-name="event-success">
										<div class="tile-content">
											<div class="tile-text">Book flight for holiday</div>
											<div class="tile-icon"><i class="fa fa-circle-thin text-success"></i></div>
										</div>
									</li>
									<li class="tile" data-class-name="event-danger">
										<div class="tile-content">
											<div class="tile-text">Receive shipment</div>
											<div class="tile-icon"><i class="fa fa-circle-thin text-danger"></i></div>
										</div>
									</li>
									<li class="tile" data-class-name="event-default">
										<div class="tile-content">
											<div class="tile-text">Go to concert</div>
											<div class="tile-icon"><i class="fa fa-circle-thin text-default"></i></div>
										</div>
									</li>
								</ul>
							</div><!--end .col -->
							<!-- END CALENDAR EVENTS -->

							<!-- BEGIN CALENDAR -->
							<div class="col-sm-9">
								<div class="card">
									<div class="card-head style-primary">
										<header>
											<span class="selected-day">&nbsp;</span> &nbsp;<small class="selected-date">&nbsp;</small>
										</header>
										<div class="tools">
											<div class="btn-group">
												<a id="calender-prev" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-angle-left"></i></a>
												<a id="calender-next" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-angle-right"></i></a>
											</div>
											<div class="btn-group pull-right">
											</div>
										</div>
										<ul class="nav nav-tabs tabs-text-contrast tabs-accent" data-toggle="tabs">
											<li data-mode="month" class="active"><a href="#">Month</a></li>
											<li data-mode="agendaWeek"><a href="#">Week</a></li>
											<li data-mode="agendaDay"><a href="#">Day</a></li>
										</ul>
									</div><!--end .card-head -->
									<div class="card-body no-padding">
										<div id="calendar"></div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END CALENDAR -->

						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
		@endsection

		<!-- BEGIN JAVASCRIPT -->
		@section('js')
		<script src="{{ url('public/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ url('public/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
		<script src="{{ url('public/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
		<script src="{{ url('public/js/libs/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{ url('public/js/libs/spin.js/spin.min.js') }}"></script>
		<script src="{{ url('public/js/libs/autosize/jquery.autosize.min.js') }}"></script>
		<script src="{{ url('public/js/libs/moment/moment.min.js') }}"></script>
		<script src="{{ url('public/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
		<script src="{{ url('public/js/libs/fullcalendar/fullcalendar.min.js') }}"></script>
		<script src="{{ url('public/js/core/source/App.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppNavigation.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppOffcanvas.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppCard.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppForm.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppNavSearch.js') }}"></script>
		<script src="{{ url('public/js/core/source/AppVendor.js') }}"></script>
		<script src="{{ url('public/js/core/demo/Demo.js') }}"></script>
		<script src="{{ url('public/js/core/demo/DemoCalendar.js') }}"></script>
		@endsection
		<!-- END JAVASCRIPT -->