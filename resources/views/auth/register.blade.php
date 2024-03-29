<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Register</title>
		<meta charset="utf-8" />
		<meta name="description" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta name="keywords" content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/products/saul-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Saul HTML Free" />
		<link rel="canonical" href="https://preview.keenthemes.com/saul-html-free" />
		<link rel="shortcut icon" href="{{asset('assets_admin')}}/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{asset('assets_admin')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets_admin')}}/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="app-blank">
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
							<a href="home" class="py-2 py-lg-20">
								<img alt="Logo" src="{{asset('assets_admin')}}/media/logos/mail.svg" class="h-40px h-lg-50px" />
							</a>
							<h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Welcome to Saul HTML Free</h1>
							<p class="d-none d-lg-block fw-semibold fs-2 text-white">Plan your blog post by choosing a topic creating
							<br/>an outline and checking facts</p>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-600px p-10 p-lg-15 mx-auto">
							<form class="form w-100" novalidate="novalidate" data-kt-redirect-url="{{ route('login') }}" id="kt_sign_up_form" action="{{ route('register.process') }}" method="POST">
								@csrf
								<div class="mb-10 text-center">
									<h1 class="text-dark mb-3">Create an Account</h1>
									<div class="text-gray-400 fw-semibold fs-4">Already have an account?
									<a href="login" class="link-primary fw-bold">Sign in here</a></div>
								</div>
								<button type="button" class="btn btn-light-primary fw-bold w-100 mb-10">
								<img alt="Logo" src="{{asset('assets_admin')}}/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Sign in with Google</button>
								<div class="d-flex align-items-center mb-10">
									<div class="border-bottom border-gray-300 mw-50 w-100"></div>
									<span class="fw-semibold text-gray-400 fs-7 mx-2">OR</span>
									<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								</div>
								<div class="row fv-row mb-7">
									<div class="col-xl-12">
										<label class="form-label fw-bold text-dark fs-6">Full Name</label>
										<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="name" autocomplete="off" />
									</div>
								</div>
								<div class="fv-row mb-7">
									<label class="form-label fw-bold text-dark fs-6">Email</label>
									<input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
								</div>
								<div class="mb-10 fv-row" data-kt-password-meter="true">
									<div class="mb-1">
										<label class="form-label fw-bold text-dark fs-6">Password</label>
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
										</div>
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
									</div>
									<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
								</div>
								<div class="fv-row mb-5">
									<label class="form-label fw-bold text-dark fs-6">Confirm Password</label>
									<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirmPassword" autocomplete="off" />
								</div>
								<div class="fv-row mb-10">
									<label class="form-check form-check-custom form-check-solid form-check-inline">
										<input class="form-check-input" type="checkbox" name="toc" value="1" />
										<span class="form-check-label fw-semibold text-gray-700 fs-6">I Agree
										<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
									</label>
								</div>
								<div class="text-center">
									<button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
						<div class="d-flex flex-center fw-semibold fs-6">
							<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">About</a>
							<a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
							<a href="https://keenthemes.com/products/saul-html-pro" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{asset('assets_admin')}}/plugins/global/plugins.bundle.js"></script>
		<script src="{{asset('assets_admin')}}/js/scripts.bundle.js"></script>
		<script src="{{asset('assets_admin')}}/js/custom/authentication/sign-up/general.js"></script>
	</body>
</html>