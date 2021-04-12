<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="">
<meta charset="utf-8" />
<title>Rita | Dashboard</title>
<meta name="description" content="Updates and statistics" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Page Vendors Styles(used by this page)-->
<link href="<?=$assets?>/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
<!--begin::Global Theme Styles(used by all pages)-->
<link href="<?=$assets?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/style.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles-->
<!--begin::Layout Themes(used by all pages)-->
<link href="<?=$assets?>/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
<link href="<?=$assets?>/css/style.css" rel="stylesheet" type="text/css" />
<!--end::Layout Themes-->
<link rel="shortcut icon" href="<?=$assets?>/media/logos/logo2.png" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
<!--begin::Logo-->
<a href="index.html">
<img alt="Logo" src="<?=$assets?>/media/logos/logo2.png" />
</a>
<!--end::Logo-->
<!--begin::Toolbar-->
<div class="d-flex align-items-center">
<!--begin::Aside Mobile Toggle-->
<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
<span></span>
</button>
<!--end::Aside Mobile Toggle-->
<!--begin::Header Menu Mobile Toggle-->
<button class="btn p-0 burger-icon ml-5" id="kt_header_mobile_toggle">
<span></span>
</button>
<!--end::Header Menu Mobile Toggle-->
<!--begin::Topbar Mobile Toggle-->
<button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
<span class="svg-icon svg-icon-xl">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/General/User.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<polygon points="0 0 24 0 24 24 0 24" />
<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
</button>
<!--end::Topbar Mobile Toggle-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
<!--begin::Page-->
<div class="d-flex flex-row flex-column-fluid page">
<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
<!--begin::Brand-->
<div class="brand flex-column-auto" id="kt_brand">
<!--begin::Logo-->
<a href="index.html" class="brand-logo">
<img alt="Logo" src="<?=$assets?>/media/logos/logo2.png" class="h-30px" />
</a>
<!--end::Logo-->
<!--begin::Toggle-->
<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
<span class="svg-icon svg-icon svg-icon-xl">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Text/Toggle.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<path d="M2 11.5C2 12.3284 2.67157 13 3.5 13H20.5C21.3284 13 22 12.3284 22 11.5V11.5C22 10.6716 21.3284 10 20.5 10H3.5C2.67157 10 2 10.6716 2 11.5V11.5Z" fill="black" />
<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M9.5 20C8.67157 20 8 19.3284 8 18.5C8 17.6716 8.67157 17 9.5 17H20.5C21.3284 17 22 17.6716 22 18.5C22 19.3284 21.3284 20 20.5 20H9.5ZM15.5 6C14.6716 6 14 5.32843 14 4.5C14 3.67157 14.6716 3 15.5 3H20.5C21.3284 3 22 3.67157 22 4.5C22 5.32843 21.3284 6 20.5 6H15.5Z" fill="black" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
</button>
<!--end::Toolbar-->
</div>
<!--end::Brand-->
<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
<!--begin::Menu Container-->
<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
<!--begin::Menu Nav-->
<ul class="menu-nav">
<li class="menu-item  <?= ($this->uri->segment(1) == 'dashboard') ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('dashboard'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	<polygon points="0 0 24 0 24 24 0 24" />
	<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
	<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Dashboard</span>
</a>
</li>

<li class="menu-item  <?= ($this->uri->segment(2) == 'add') ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('users/add'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="0" y="0" width="24" height="24"></rect>
		<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
		<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
	</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Add Member</span>
</a>
</li>

<li class="menu-item  <?= ($this->uri->segment(2) == 'list') ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
<a href="<?php echo base_url('users/list'); ?>" class="menu-link">
<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Layers.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
													<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
												</g>
											</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">List Member</span>
</a>
</li>

<li class="menu-item <?= ($this->uri->segment(2) == 'profile') ? 'menu-item-active' : ''; ?>" aria-haspopup="true">
	<a href="<?php echo base_url('users/profile'); ?>" class="menu-link ">
		<span class="svg-icon menu-icon">
			<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect x="0" y="0" width="24" height="24" />
					<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
		<span class="menu-text">Profile Settings</span>
	</a>
</li>

</ul>
<!--end::Menu Nav-->
</div>
<!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
</div>
<!--end::Aside-->
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
<!--begin::Container-->
<div class="container-fluid d-flex align-items-stretch justify-content-between">
<!--begin::Header Menu Wrapper-->
<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
<!--begin::Header Menu-->
<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
<!--begin::Header Nav-->
<ul class="menu-nav">

</ul>
<!--end::Header Nav-->
</div>
<!--end::Header Menu-->
</div>
<!--end::Header Menu Wrapper-->
<!--begin::Topbar-->
<div class="topbar">
<!--begin::Search-->

<!--end::Search-->
<!--begin::Notifications-->
<div class="dropdown mr-1">
<!--begin::Toggle-->
<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
<div class="btn btn-icon btn-clean btn-dropdown btn-lg pulse pulse-primary">
<span class="svg-icon svg-icon-xl svg-icon-primary">
<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Code/Compiling.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<rect x="0" y="0" width="24" height="24" />
		<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
		<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
	</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="pulse-ring"></span>
</div>
</div>
<!--end::Toggle-->
<!--begin::Dropdown-->
<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
<form>
<!--begin::Header-->
<div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(<?=$assets?>/media/bg/bg-5.jpg)">
<!--begin::Title-->
<h4 class="d-flex flex-center rounded-top">
	<span class="text-white">Message Center</span>
	<span class="btn btn-success btn-sm font-weight-bold ml-2">25</span>
</h4>
<!--end::Title-->
<!--begin::Tabs-->
<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8 font-size-lg" role="tablist">
	<li class="nav-item">
		<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Reminders</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
	</li>
</ul>
<!--end::Tabs-->
</div>
<!--end::Header-->
<!--begin::Content-->
<div class="tab-content">
<!--begin::Tabpane-->
<div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
	<!--begin::Scroll-->
	<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-35 flex-shrink-0 mr-3">
				<img alt="Pic" src="<?=$assets?>/media/users/100_5.jpg" />
			</div>
			<!--end::Symbol-->
			<!--begin::Content-->
			<div class="d-flex flex-wrap flex-row-fluid">
				<!--begin::Text-->
				<div class="d-flex flex-column pr-5 flex-grow-1">
					<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Marcus Smart</a>
					<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
				</div>
				<!--end::Text-->
				<!--begin::Section-->
				<div class="d-flex align-items-center py-2">
					<!--begin::Label-->
					<span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
					<!--end::Label-->
					<!--begin::Btn-->
					<a href="#" class="btn btn-icon btn-light btn-sm">
						<span class="svg-icon svg-icon-md svg-icon-success">
							<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Angle-right.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<!--end::Btn-->
				</div>
				<!--end::Section-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
				<span class="symbol-label font-weight-bolder font-size-lg">AH</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Content-->
			<div class="d-flex flex-wrap flex-row-fluid">
				<!--begin::Text-->
				<div class="d-flex flex-column pr-5 flex-grow-1">
					<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Andreas Hawks</a>
					<span class="text-muted font-weight-bold">Python Developer</span>
				</div>
				<!--end::Text-->
				<!--begin::Section-->
				<div class="d-flex align-items-center py-2">
					<!--begin::Label-->
					<span class="text-success font-weight-bolder font-size-sm pr-6">+23%</span>
					<!--end::Label-->
					<!--begin::Btn-->
					<a href="#" class="btn btn-icon btn-light btn-sm">
						<span class="svg-icon svg-icon-md svg-icon-success">
							<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Angle-right.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<!--end::Btn-->
				</div>
				<!--end::Section-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
				<span class="symbol-label font-weight-bolder font-size-lg">SC</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Content-->
			<div class="d-flex flex-wrap flex-row-fluid">
				<!--begin::Text-->
				<div class="d-flex flex-column pr-5 flex-grow-1">
					<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sarah Connor</a>
					<span class="text-muted font-weight-bold">HTML, CSS. jQuery</span>
				</div>
				<!--end::Text-->
				<!--begin::Section-->
				<div class="d-flex align-items-center py-2">
					<!--begin::Label-->
					<span class="text-danger font-weight-bolder font-size-sm pr-6">-34%</span>
					<!--end::Label-->
					<!--begin::Btn-->
					<a href="#" class="btn btn-icon btn-light btn-sm">
						<span class="svg-icon svg-icon-md svg-icon-success">
							<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Angle-right.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<!--end::Btn-->
				</div>
				<!--end::Section-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-35 flex-shrink-0 mr-3">
				<img alt="Pic" src="<?=$assets?>/media/users/100_7.jpg" />
			</div>
			<!--end::Symbol-->
			<!--begin::Content-->
			<div class="d-flex flex-wrap flex-row-fluid">
				<!--begin::Text-->
				<div class="d-flex flex-column pr-5 flex-grow-1">
					<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Amanda Harden</a>
					<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
				</div>
				<!--end::Text-->
				<!--begin::Section-->
				<div class="d-flex align-items-center py-2">
					<!--begin::Label-->
					<span class="text-success font-weight-bolder font-size-sm pr-6">+72%</span>
					<!--end::Label-->
					<!--begin::Btn-->
					<a href="#" class="btn btn-icon btn-light btn-sm">
						<span class="svg-icon svg-icon-md svg-icon-success">
							<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Angle-right.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<!--end::Btn-->
				</div>
				<!--end::Section-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
				<span class="symbol-label font-weight-bolder font-size-lg">SR</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Content-->
			<div class="d-flex flex-wrap flex-row-fluid">
				<!--begin::Text-->
				<div class="d-flex flex-column pr-5 flex-grow-1">
					<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sean Robbins</a>
					<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
				</div>
				<!--end::Text-->
				<!--begin::Section-->
				<div class="d-flex align-items-center py-2">
					<!--begin::Label-->
					<span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
					<!--end::Label-->
					<!--begin::Btn-->
					<a href="#" class="btn btn-icon btn-light btn-sm">
						<span class="svg-icon svg-icon-md svg-icon-success">
							<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Angle-right.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<!--end::Btn-->
				</div>
				<!--end::Section-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
				<span class="symbol-label font-weight-bolder font-size-lg">SC</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Content-->
			<div class="d-flex flex-wrap flex-row-fluid">
				<!--begin::Text-->
				<div class="d-flex flex-column pr-5 flex-grow-1">
					<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Ana Stone</a>
					<span class="text-muted font-weight-bold">Figma, PSD</span>
				</div>
				<!--end::Text-->
				<!--begin::Section-->
				<div class="d-flex align-items-center py-2">
					<!--begin::Label-->
					<span class="text-info font-weight-bolder font-size-sm pr-6">+34%</span>
					<!--end::Label-->
					<!--begin::Btn-->
					<a href="#" class="btn btn-icon btn-light btn-sm">
						<span class="svg-icon svg-icon-md svg-icon-success">
							<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Angle-right.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<!--end::Btn-->
				</div>
				<!--end::Section-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center">
			<!--begin::Symbol-->
			<div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
				<span class="symbol-label font-weight-bolder font-size-lg">JT</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Content-->
			<div class="d-flex flex-wrap flex-row-fluid">
				<!--begin::Text-->
				<div class="d-flex flex-column pr-5 flex-grow-1">
					<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Jason Tatum</a>
					<span class="text-muted font-weight-bold">ASP.NET Developer</span>
				</div>
				<!--end::Text-->
				<!--begin::Section-->
				<div class="d-flex align-items-center py-2">
					<!--begin::Label-->
					<span class="text-success font-weight-bolder font-size-sm pr-6">+139%</span>
					<!--end::Label-->
					<!--begin::Btn-->
					<a href="#" class="btn btn-icon btn-light btn-sm">
						<span class="svg-icon svg-icon-md svg-icon-success">
							<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Angle-right.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</a>
					<!--end::Btn-->
				</div>
				<!--end::Section-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Item-->
	</div>
	<!--end::Scroll-->
	<!--begin::Action-->
	<div class="d-flex flex-center pt-7">
		<a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
	</div>
	<!--end::Action-->
</div>
<!--end::Tabpane-->
<!--begin::Tabpane-->
<div class="tab-pane p-8" id="topbar_notifications_events" role="tabpanel">
	<!--begin::Scroll-->
	<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-40 symbol-light-primary mr-5">
				<span class="symbol-label">
					<span class="svg-icon svg-icon-lg svg-icon-primary">
						<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Color-profile.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<circle fill="#000000" cx="12" cy="9" r="5" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Text-->
			<div class="d-flex flex-column font-weight-bold">
				<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Project Launch</a>
				<span class="text-muted">Project campaign planning</span>
			</div>
			<!--end::Text-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-40 symbol-light-warning mr-5">
				<span class="symbol-label">
					<span class="svg-icon svg-icon-lg svg-icon-warning">
						<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Communication/Write.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
								<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Text-->
			<div class="d-flex flex-column font-weight-bold">
				<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Report Generation</a>
				<span class="text-muted">Annual report generation</span>
			</div>
			<!--end::Text-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-40 symbol-light-success mr-5">
				<span class="symbol-label">
					<span class="svg-icon svg-icon-lg svg-icon-success">
						<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Communication/Share.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M10.9,2 C11.4522847,2 11.9,2.44771525 11.9,3 C11.9,3.55228475 11.4522847,4 10.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,16 C20,15.4477153 20.4477153,15 21,15 C21.5522847,15 22,15.4477153 22,16 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L10.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M24.0690576,13.8973499 C24.0690576,13.1346331 24.2324969,10.1246259 21.8580869,7.73659596 C20.2600137,6.12944276 17.8683518,5.85068794 15.0081639,5.72356847 L15.0081639,1.83791555 C15.0081639,1.42370199 14.6723775,1.08791555 14.2581639,1.08791555 C14.0718537,1.08791555 13.892213,1.15726043 13.7542266,1.28244533 L7.24606818,7.18681951 C6.93929045,7.46513642 6.9162184,7.93944934 7.1945353,8.24622707 C7.20914339,8.26232899 7.22444472,8.27778811 7.24039592,8.29256062 L13.7485543,14.3198102 C14.0524605,14.6012598 14.5269852,14.5830551 14.8084348,14.2791489 C14.9368329,14.140506 15.0081639,13.9585047 15.0081639,13.7695393 L15.0081639,9.90761477 C16.8241562,9.95755456 18.1177196,10.0730665 19.2929978,10.4469645 C20.9778605,10.9829796 22.2816185,12.4994368 23.2042718,14.996336 L23.2043032,14.9963244 C23.313119,15.2908036 23.5938372,15.4863432 23.9077781,15.4863432 L24.0735976,15.4863432 C24.0735976,15.0278051 24.0690576,14.3014082 24.0690576,13.8973499 Z" fill="#000000" fill-rule="nonzero" transform="translate(15.536799, 8.287129) scale(-1, 1) translate(-15.536799, -8.287129)" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Text-->
			<div class="d-flex flex-column font-weight-bold">
				<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Smart App</a>
				<span class="text-muted">Project Managemnt &amp; Design</span>
			</div>
			<!--end::Text-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-40 symbol-light-danger mr-5">
				<span class="symbol-label">
					<span class="svg-icon svg-icon-lg svg-icon-danger">
						<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/General/Thunder-move.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
								<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Text-->
			<div class="d-flex flex-column font-weight-bold">
				<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Volume Service App</a>
				<span class="text-muted">Analytics &amp; Requirement Study</span>
			</div>
			<!--end::Text-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-40 symbol-light-info mr-5">
				<span class="symbol-label">
					<span class="svg-icon svg-icon-lg svg-icon-info">
						<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Communication/Shield-user.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
								<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
								<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Text-->
			<div class="d-flex flex-column font-weight-bold">
				<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Reportio App</a>
				<span class="text-muted">Reporting Dashboard App Planning</span>
			</div>
			<!--end::Text-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-40 symbol-light-primary mr-5">
				<span class="symbol-label">
					<span class="svg-icon svg-icon-lg svg-icon-primary">
						<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Communication/Mail-notification.svg-->
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
			</div>
			<!--end::Symbol-->
			<!--begin::Text-->
			<div class="d-flex flex-column font-weight-bold">
				<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Expo Loop</a>
				<span class="text-muted">System Analytics &amp; Development</span>
			</div>
			<!--end::Text-->
		</div>
		<!--end::Item-->
		<!--begin::Item-->
		<div class="d-flex align-items-center mb-6">
			<!--begin::Symbol-->
			<div class="symbol symbol-40 symbol-light-info mr-5">
				<span class="symbol-label">
					<span class="svg-icon svg-icon-lg svg-icon-info">
						<!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Design/Bucket.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />
								<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</span>
			</div>
			<!--end::Symbol-->
			<!--begin::Text-->
			<div class="d-flex flex-column font-weight-bold">
				<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Klup App</a>
				<span class="text-muted">App Design &amp; Development</span>
			</div>
			<!--end::Text-->
		</div>
		<!--end::Item-->
	</div>
	<!--end::Scroll-->
</div>
<!--end::Tabpane-->
<!--begin::Tabpane-->
<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
	<!--begin::Nav-->
	<div class="d-flex flex-center font-weight-bold text-center text-muted min-h-250px">All caught up!
	<br />No new messages.</div>
	<!--end::Nav-->
</div>
<!--end::Tabpane-->
</div>
<!--end::Content-->
</form>
</div>
<!--end::Dropdown-->
</div>
<!--end::Notifications-->
<!--end::Quick panel-->
<!--begin::Languages-->

<!--end::Languages-->
<!--begin::User-->
<div class="topbar-item ml-4" id="kt_quick_user_toggle">
	<div data-toggle="tooltip" class="btn btn-icon btn-light-primary h-40px w-40px p-0" id="kt_quick_user_toggle">
		<img src="<?=$assets?>/media/svg/avatars/004-boy-1.svg" class="h-30px align-self-end" alt="" />
	</div>

	<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" >
		<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
		<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?=callsession('first_name')?></span>

	</div>

</div>
<!--end::User-->
</div>
<!--end::Topbar-->
</div>
<!--end::Container-->
</div>
<!--end::Header-->