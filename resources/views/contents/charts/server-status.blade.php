<div class="col-md-3">
								<div class="card">
									<div class="card-head">
										<header class="text-primary">Server status</header>
									</div><!--end .card-head -->
									<div class="card-body height-4">
										<div class="pull-right text-center">
											<em class="text-primary">Temperature</em>
											<br/>
											<div id="serverStatusKnob" class="knob knob-shadow knob-primary knob-body-track size-2">
												<input type="text" class="dial" data-min="0" data-max="100" data-thickness=".09" value="50" data-readOnly=true>
											</div>
										</div>
									</div><!--end .card-body -->
									<div class="card-body height-4 no-padding">
										<div class="stick-bottom-left-right">
											<div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->