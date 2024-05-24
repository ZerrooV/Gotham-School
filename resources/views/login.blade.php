<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="icon" href="assets/images/Logo Only 1.svg" type="image/svg+xml">
    <title>Gotham School</title>

</head>
<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="{{route('register')}}" class="sign-up-form" method="POST">
                @csrf
				<h1>Buat Akun</h1>
				<span>Isi Formulir Untuk Membuat Akun</span>
				<input type="text" placeholder="Nama Lengkap" name="name"/>
				<input type="email" placeholder="Email"  name="email"/>
				<input type="password" placeholder="Password" name="password"/>
				<button>Sign Up</button>
				<p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="" class="sign-in-form" method="POST">
                @csrf
				<h1>Sign in</h1>
				<span>Silahkan Masuk ke Akun Anda</span>
				<input type="email" placeholder="Email" value="{{ old('email') }}" name="email" />
				<input type="password" placeholder="Password" name="password"/>
				<button>Sign In</button>
				<p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
                @if($errors->any())
                    <div class="alert-login">
                        <ul>
                            @foreach($errors->all() as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<img src="assets/images/logo.png" alt="">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					{{-- <img src="assets/images/login.png" alt=""> --}}
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('js/login.js')}}"></script>
</body>
</html>
