@extends('layouts.app')
@section('content')

<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
	<!--begin::Logo-->
	<a href="index.html">
		<img alt="Logo" src="assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
	</a>
	<!--end::Logo-->
	<!--begin::Toolbar-->
	<div class="d-flex align-items-center">
		<button class="btn p-0 burger-icon burger-icon-left rounded-0" id="kt_header_mobile_toggle">
			<span></span>
		</button>
		<button class="btn btn-hover-icon-primary p-0 ml-5" id="kt_sidebar_mobile_toggle">
			<span class="svg-icon svg-icon-xl">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Substract.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24" />
						<path d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z" fill="#000000" fill-rule="nonzero" />
						<path d="M10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L10.1818182,16 C8.76751186,16 8,15.2324881 8,13.8181818 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 Z" fill="#000000" opacity="0.3" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</button>
		<button class="btn btn-hover-icon-primary p-0 ml-2" id="kt_aside_mobile_toggle">
			<span class="svg-icon svg-icon-xl">
				<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
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
	</div>
	<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">
		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
			<!--begin::Content-->
			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
				<div class="d-flex flex-column-fluid">
					<!--begin::Container-->
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<!--begin::Card-->
								<div class="card card-custom gutter-b example example-compact">
									<div class="card-header">
										<h3 class="card-title">Base Controls</h3>
										<div class="card-toolbar">
											<div class="example-tools justify-content-center">
												<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
												<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form>
										<div class="card-body">
											<div class="form-group mb-8">
												<div class="alert alert-custom alert-default" role="alert">
													<div class="alert-text">The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.</div>
												</div>
											</div>											
										</div>
									</form>
									<!--end::Form-->
								</div>
									</div>
									<div class="col-md-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Input States</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													<div class="form-group form-group-last">
														<div class="alert alert-custom alert-default" role="alert">
															<div class="alert-text">Add the
															<code>disabled</code>or
															<code>readonly</code>boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a
															<code>not-allowed</code>cursor.</div>
														</div>
													</div>
												</div>
												
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
							</div>
						</div>
					</div>
					<!--end::Container-->
				</div>
				<!--end::Entry-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::Main-->



@endsection