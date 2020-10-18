@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card card-info">
					<div class="card-header">
						<a href="{{ url('/') }}" style="text-decoration: none">
							<h3 class="card-title" style="text-align: center">Toko Online</h3>
						</a>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<form class="form-horizontal" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="card-body">
							<div class="form-group">
								<label for="email">{{ __('E-Mail / Username') }}</label>
								<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								{{-- Pesan Eror --}}
								@error('email')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
							@enderror
							</div>
							{{-- /email --}}

							{{-- password --}}
								<div class="form-group">
									<label for="inputPassword3">
										{{ __('Password') }}
									</label>
									<input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="Password">
									{{-- Pesan Eror --}}
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
								</div>

							{{-- Remember me --}}
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="form-check-label" for="remember">
									{{ __('Remember Me') }}
								</label>
							</div>

						</div>
						{{-- /card-body --}}

						{{-- Card Footer --}}
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">
								{{ __('Login') }}
							</button>
							{{-- Forgot Password --}}
							@if (Route::has('password.request'))
									<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
									</a>
								@endif
						</div>
						<!-- /.card-footer -->

					</form>
				</div>
				<!-- /.card -->

			</div>
			{{-- /col --}}

		</div>
		{{-- /row --}}

	</div>
	{{-- container --}}
@endsection
