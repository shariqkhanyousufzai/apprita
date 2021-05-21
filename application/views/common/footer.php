<!-- Msg Modal-->
<div class="modal fade " id="msgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Type Your Message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<input type="hidden" name="user_id" class="user_id" value="">
			<div class="modal-body"><textarea class="form-control border-0 p-0 textareamsg" rows="2" placeholder="Type a message"></textarea></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
				<button type="button"  class="btn btn-primary font-weight-bold send_msg">Send Message</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade " id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body announcement_msg"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade " id="allMsgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Messages</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<input type="hidden" name="user_id" class="user_id" value="">
			<div class="modal-body previousmsgs"></div>
			<input type="hidden" name="user_id" class="user_id" value="">
			<div class="modal-body"><textarea class="form-control border-0 p-0 textareamsgchat" rows="2" placeholder="Type a message"></textarea></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
				<button type="button"  class="btn btn-primary font-weight-bold send_msg">Send Message</button>
			</div>
		</div>
	</div>
</div>
<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">My Profile
				<!-- <small class="text-muted font-size-sm ml-2">15 messages</small></h3> -->
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label" style="background-image:url('<?=$assets?>/uploads/<?=callsession('avatar')?>')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?=callsession('first_name')?> <?=callsession('last_name')?></a>
						<div class="text-muted mt-1"><?=group_description_name()?></div>
						<div class="navi mt-1">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary"><?=callsession('email')?></span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>
				<!--end::Separator-->
				<!--begin::Nav-->
				<div class="navi navi-spacer-x-0 p-0">
					<!--begin::Item-->
					<a href="<?=base_url('users/profile')?>" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-danger">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3" />
												<path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Account</div>
								<div class="text-muted">Profile info
								<span class="label label-light-danger label-inline font-weight-bold">update</span></div>
							</div>
						</div>
					</a>
					<!--end:Item-->
					<!--end:Item-->
					<!--begin::Item-->
					<span class="navi-item mt-2">
						<span class="navi-link">
							<a href="<?=base_url('auth/logout')?>" class="btn btn-sm btn-light-primary font-weight-bolder py-3 px-6">Sign Out</a>
						</span>
					</span>
					<!--end:Item-->
				</div>
				<!--end::Nav-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-7"></div>
				<!--end::Separator-->
				<!--begin::Notifications-->
				<div class="pt-5">
					<!--begin:Heading-->
					<h5 class="mb-7">Recent Announcements</h5>
					<?php
					$colorArray = array(
						"danger",
						"primary",
						"success",
						"info",
						"seconday",
						"warning",
					);
					foreach (get_latest_annoucements() as $get_latest_annoucement) {
						$selectedColor = array_rand($colorArray);
					?>
					<a href="<?=base_url('announcement/list')?>">
						<div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">
						<!--begin::Icon-->
						<div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
							<span class="svg-icon svg-icon-4x svg-icon-<?=$colorArray[$selectedColor]?> position-absolute opacity-15">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
									<g stroke="none" stroke-width="1" fill-rule="evenodd">
										<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="svg-icon svg-icon-lg svg-icon-<?=$colorArray[$selectedColor]?> position-absolute">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-done.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Icon-->
						<!--begin::Description-->
						<div class="ml-1">
							<h3 class="text-dark-75 font-weight-bolder font-size-lg"><?=$get_latest_annoucement->categoryname?></h3>
							<p class="m-0 text-dark-50 font-weight-bold"><?=$get_latest_annoucement->name?></p>
						</div>
						<!--end::Description-->
					</div>
					</a>
					<?php
					}
					?>
					<!--end::Item-->
				</div>
				<!--end::Notifications-->
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->
<!--begin::Footer-->
						
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
		<!--end::Chat Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Demo Panel-->
		<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
				<h4 class="font-weight-bold m-0">Select A Demo</h4>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Wrapper-->
				<div class="offcanvas-wrapper mb-5 scroll-pull">
					<h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo1.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo1/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">HTML</a>
							<a href="https://preview.keenthemes.com/keen-v2/demo1/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo2.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo3.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo4.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo5.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo6.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo7.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo8.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo9.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo10.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo11.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo12.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo13.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="<?=$assets?>/media/demos/demo14.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
				</div>
				<!--end::Wrapper-->
				<!--begin::Purchase-->
				<div class="offcanvas-footer">
					<a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Keen Now!</a>
				</div>
				<!--end::Purchase-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3E97FF", "secondary": "#E5EAEE", "success": "#08D1AD", "info": "#844AFF", "warning": "#F5CE01", "danger": "#FF3D60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#DEEDFF", "secondary": "#EBEDF3", "success": "#D6FBF4", "info": "#6125E1", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		
		<?php
        if($this->session->flashdata('message')){
        ?>
        <script type="text/javascript">
            Swal.fire({
                  html: '<?=$this->session->flashdata('message')?>',
                })
        </script>
        <?php
        unset($_SESSION['message']);
        }
        ?>
        <script type="text/javascript">
        	$(document).ready(()=>{
        		$(".alert_msg").show().delay(3000).fadeOut();
        	});
        </script>

        <?php
        if($this->uri->segment(2) == 'edit'){
        ?>
        <script type="text/javascript">
		    $(document).ready(()=>{
		        $('#exampleSelect1').val('<?=$users->group_name?>');
		    });
		</script>
		<?php
		}
		?>
		<!--end::Page Scripts-->

		<!-- send msg script -->
		
		<script type="text/javascript">
			$(document).ready(function(){
				$(document).on('click','.send_msg',()=>{
					var getRecieverId = $('.user_id').val();
					var getMsg = $('.textareamsg').val();
					if(getMsg == ''){
						getMsg = $('.textareamsgchat').val();
						var makeHTML = `<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="<?=$assets?>/uploads/<?=$this->session->userdata('avatar')?>">
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6"><?=$this->session->userdata('first_name')?></a>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">${getMsg}</div>
									</div>`;
						$('.previousmsgs').append(makeHTML);
						setTimeout(function(){
								$('.previousmsgs').scrollTop($('.previousmsgs')[0].scrollHeight);
							},200);

					}
					$.ajax({
						url : '<?=base_url("users/sendmessage")?>',
						type : 'post',
						data : {
							reciever_id : getRecieverId,
							msg : getMsg
						},
						success: function(data){
		                  var res = JSON.parse(data);
		                  jQuery("#msgModal").modal('hide');
		                  if(res == 'success'){
		                  	Swal.fire({
				                  html: 'Message Has Been Send!',
				                })
		                  }else{
		                  	Swal.fire({
				                  html: 'Failed Try Again Later!',
				                })
		                  }
		                 },
		                 error: function(data){
		                  console.log("error!");
		                 }
					});
				})
				// call once when page load
				$.getJSON( "<?=base_url('users/getmessages')?>", function(data) {
						var HTML = '';
						var BASEURL = '<?=$assets?>/uploads/';
						var TimeDiff = '';
						for(i in data){
							if(data[i].diff < 60){
								TimeDiff = data[i].diff + ' Minutes ago';
							}else if(data[i].diff >= 60 && data[i].diff <= 1440){
								TimeDiff = Math.round(parseFloat(data[i].diff / 60)) + ' Hours ago' ;
							}else{
								TimeDiff = Math.round(parseFloat(data[i].diff / 1440)) + ' Days ago' ;
							}
							HTML += `<div class="d-flex align-items-center mt-2">
										<div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
											<img src = ${BASEURL+data[i].avatar}>
										</div>
										<div class="d-flex flex-wrap flex-row-fluid">
											<div class="d-flex flex-column pr-5 flex-grow-1">
												<a href="<?=base_url('users/messages')?>" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">${data[i].first_name}</a>
												<span class="text-muted font-weight-bold">${TimeDiff}</span>
											</div>
											<div class="d-flex align-items-center py-2">
												<a href="<?=base_url('users/messages')?>" class="btn btn-icon btn-light btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
															</g>
														</svg>
													</span>
												</a>
											</div>
										</div>
									</div>`

						}
						if(HTML == ''){
							HTML = 'No Message Found';
						}
						$('.headermessages').html(HTML);
					});
				var currentMsgCount = 0;
				$.getJSON( "<?=base_url('users/getactivemessages')?>", function(data) {
						$('.notifymsgnumber').html(data);
						currentMsgCount = data;
					});
				// call every 20 messages limit 10
				setInterval(()=>{
					$.getJSON( "<?=base_url('users/getmessages')?>", function(data) {
						var HTML = '';
						var BASEURL = '<?=$assets?>/uploads/';
						var TimeDiff = '';
						for(i in data){
							if(data[i].diff < 60){
								TimeDiff = data[i].diff + ' Minutes ago';
							}else if(data[i].diff >= 60 && data[i].diff <= 1440){
								TimeDiff = Math.round(parseFloat(data[i].diff / 60)) + ' Hours ago' ;
							}else{
								TimeDiff = Math.round(parseFloat(data[i].diff / 1440)) + ' Days ago' ;
							}
							HTML += `<div class="d-flex align-items-center mt-2">
										<div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
											<img src = ${BASEURL+data[i].avatar}>
										</div>
										<div class="d-flex flex-wrap flex-row-fluid">
											<div class="d-flex flex-column pr-5 flex-grow-1">
												<a href="<?=base_url('users/messages')?>" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">${data[i].first_name}</a>
												<span class="text-muted font-weight-bold">${TimeDiff} </span>
											</div>
											<div class="d-flex align-items-center py-2">
												<a href="<?=base_url('users/messages')?>" class="btn btn-icon btn-light btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
															</g>
														</svg>
													</span>
												</a>
											</div>
										</div>
									</div>`

						}
						if(HTML == ''){
							HTML = 'No Message Found';
						}
						$('.headermessages').html(HTML);
					});
				},10000);
				// call get active messages
				setInterval(()=>{
					$.getJSON( "<?=base_url('users/getactivemessages')?>", function(data) {
						$('.notifymsgnumber').html(data);
						
						if(currentMsgCount < data){
							toastr.options = {
								  "closeButton": true,
								  "debug": false,
								  "newestOnTop": false,
								  "progressBar": true,
								  "positionClass": "toast-top-right",
								  "preventDuplicates": false,
								  "onclick": null,
								  "showDuration": "300",
								  "hideDuration": "5000",
								  "timeOut": "6000",
								  "extendedTimeOut": "5000",
								  "showEasing": "swing",
								  "hideEasing": "linear",
								  "showMethod": "fadeIn",
								  "hideMethod": "fadeOut"
								};

								toastr.success("Your Received New Message!", "Hi,");
						}
						currentMsgCount = data;
					});
				},10000);




				// when click on message
				$(document).on('click','.headermessage',function(){
					$('.notifymsgnumber').html('0');
					$.ajax({
						url : '<?=base_url('users/updatemessagenumber')?>',
						type : 'post',
						success: function(data){
						}

					});
				});
				$(document).on('click','.inboxmsg',function(){
					var getInboxUser = $(this).data('userid');
					$('.user_id').val(getInboxUser);
					$.ajax({
						url : '<?=base_url('users/inboxmsgs')?>',
						type : 'post',
						data : {
							getInboxUser : getInboxUser
						},
						success: function(data){
							var res = JSON.parse(data);
							var setClassMsg = '';
							var HTML = '';
							for(i in res){
								if(res[i].sender_id == '<?=$this->session->userdata('user_id')?>'){
									setClassMsg = 'align-items-end';
								}else{
									setClassMsg = 'align-items-start';
								}
								HTML += `<div class="d-flex flex-column mb-5 ${setClassMsg}">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="<?=$assets?>/uploads/${res[i].avatar}">
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">${res[i].first_name}</a>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">${res[i].body}</div>
									</div>`
							}
							$('.previousmsgs').html(HTML);
							$("#allMsgModal").modal('show');
							setTimeout(function(){
								$('.previousmsgs').scrollTop($('.previousmsgs')[0].scrollHeight);
							},500);
						}

					});
				});
				var currentAnnouncementCount = 0;
				// anouncemnet count 
				$.getJSON( "<?=base_url('announcement/getunreadannouncement')?>", function(data) {
						$('.notifyannouncement').html(data);
						currentAnnouncementCount = data;
				});

				// call get active messages
				// setInterval(()=>{
				// 	$.getJSON( "<?=base_url('announcement/getunreadannouncement')?>", function(data) {
				// 		$('.notifyannouncement').html(data);
				// 		if(currentAnnouncementCount < data){
							
				// 		}
				// 		currentAnnouncementCount = data;
				// 	});
				// },10000);

			});


		</script>
		<!-- //firebase hit url -->
		<script>
			var firebaseConfig = {
				apiKey: "AIzaSyDzIIy78Kc1Da9vJYwpjhu8L1xGS05abiM",
				authDomain: "test-app-ce7c9.firebaseapp.com",
				projectId: "test-app-ce7c9",
				storageBucket: "test-app-ce7c9.appspot.com",
				messagingSenderId: "1008318661047",
				appId: "1:1008318661047:web:60013725f1b192ea9d2832",
				measurementId: "G-LKG09GQCFM"
			};
			firebase.initializeApp(firebaseConfig);
			const messaging=firebase.messaging();

			function IntitalizeFireBaseMessaging() {
				messaging
				.requestPermission()
				.then(function () {
					console.log("Notification Permission");
					return messaging.getToken();
				})
				.then(function (token) {
					console.log("Token : "+token);
					$.ajax({
						url : '<?=base_url('firebase/add_token')?>',
						type : 'post',
						data :{
							token : token
						},
						success: function(data){
						}

					});
				})
				.catch(function (reason) {
					console.log(reason);
				});
			}

			messaging.onMessage(function (payload) {
				console.log(payload);
				toastr.options = {
					"closeButton": true,
					"debug": false,
					"newestOnTop": false,
					"progressBar": true,
					"positionClass": "toast-top-right",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "5000",
					"timeOut": "6000",
					"extendedTimeOut": "5000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};

				toastr.success("One New Announcement", "Hi,");

				$.getJSON( "<?=base_url('announcement/getunreadannouncement')?>", function(data) {
						$('.notifyannouncement').html(data);
						currentAnnouncementCount = data;
				});
				const notificationOption={
					body:payload.notification.body,
					icon:payload.notification.icon
				};

				if(Notification.permission==="granted"){
					var notification=new Notification(payload.notification.title,notificationOption);

					notification.onclick=function (ev) {
						ev.preventDefault();
						window.open(payload.notification.click_action,'_blank');
						notification.close();
					}
				}

			});
			messaging.onTokenRefresh(function () {
				messaging.getToken()
				.then(function (newtoken) {
					console.log("New Token : "+ newtoken);
				})
				.catch(function (reason) {
					console.log(reason);
				})
			})
			IntitalizeFireBaseMessaging();

			document.addEventListener("visibilitychange", function() {
			  if(document.visibilityState == 'visible'){
			  	$.getJSON( "<?=base_url('announcement/getunreadannouncement')?>", function(data) {
						$('.notifyannouncement').html(data);
						currentAnnouncementCount = data;
				});
			  }
			});
		</script>
	</body>
	<!--end::Body-->
</html>