@extends('admin.layouts.auth')

@section('title','register')

@section('content')

	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15 overflow-hidden">
						<div class="row g-0">
							<div class="col-xl-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Create an Account</h3>
									</div>
									<div class="">
										<div class="d-grid">
											<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
											<img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
											<span>Sign Up with Google</span>
												</span>
											</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook me-1"></i>Sign Up with Facebook</a>
										</div>
										<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
											<hr>
										</div>
										<div class="form-body">
											<form method="POST" action="{{ route('admin.register.store') }}" class="row g-3">
												@csrf

												<div class="col-sm-6">
													<label class="form-label">First Name</label>
													<input type="text" name="first_name" class="form-control" placeholder="Type Your Full Name" required>
												</div>

												<div class="col-sm-6">
													<label class="form-label">User Name</label>
													<input type="text" name="username" class="form-control" placeholder="Type Your Username" required>
												</div>

												{{-- <div class="col-sm-6">
													<label class="form-label">Last Name</label>
													<input type="text" name="last_name" class="form-control" placeholder="Doe" required>
												</div> --}}

												<div class="col-12">
													<label class="form-label">Email Address</label>
													<input type="email" name="email" class="form-control" placeholder="example@admin.com" required>
												</div>

												<div class="col-12">
													<label class="form-label">Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" name="password" class="form-control border-end-0" placeholder="Enter Password" required>
														<a href="javascript:;" class="input-group-text bg-transparent">
															<i class="bx bx-hide"></i>
														</a>
													</div>
												</div>

												{{-- <div class="col-12">
													<label class="form-label">Country</label>
													<select name="country" class="form-select">
														<option value="India" selected>India</option>
														<option value="United Kingdom">United Kingdom</option>
														<option value="America">America</option>
														<option value="Dubai">Dubai</option>
													</select>
												</div> --}}

												{{-- <div class="col-12">
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" required>
														<label class="form-check-label">
															I read and agree to Terms & Conditions
														</label>
													</div>
												</div> --}}

												<div class="col-12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary">
															<i class="bx bx-user me-1"></i> Sign up
														</button>
													</div>
												</div>
												<div class="col-12 text-center">
													<p>Already have an account ?
														<a href="{{ route('admin.login') }}">Sign in here</a>
													</p>
												</div>
											</form>

										</div>
									</div>

								</div>
							</div>
							<div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
								<img src="assets/images/login-images/register-frent-img.jpg" class="img-fluid" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery.min.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>

    @endsection