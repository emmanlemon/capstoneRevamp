
<link rel="stylesheet" href="{{ url('css/molecule/formLogin.css') }}">
<body>
	<div id="id01" class="modal">
        <div class="modal-content">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                <div class="left-box">
                    <div class="overlay">
                    <h1>Welcome to Sepnas</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur et est sed felis aliquet sollicitudin</p>
                    </div>
                </div>
                
                
                    <div class="right">
                       <!-- Login Page for Users -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                   <h2>Login</h2>
                   <p>Please login to your account</p> 
                   <x-jet-validation-errors class="mb-4" />
                    @if (session('status'))
                        <div class="mb-4 text-sm font-medium text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
                    </div>
                    <a href="{{ route('register') }}">Create an account?</a>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </div>
                </form>
            </div> 
            </div>
	</div>
</body>

</html>

{{-- @yield('formLogin') --}}