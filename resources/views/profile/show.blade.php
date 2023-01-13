<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
    <link rel="stylesheet" href="{{ url('css/postLayout.css') }}">
    @vite('resources/css/app.css')
    <title>User Profile</title>
</head>
<body>
    @extends(($request->user()->role == 1 ? 'admin.extension.navigator_side' : 'Components.Molecule.header' ))
        <x-app-layout>
            <div style="margin-left: 300px; margin-top: 40px;">
                <div class="py-10 mx-auto max-w-full sm:px-6 lg:px-8">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')
        
                        <x-jet-section-border />
                    @endif
        
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.update-password-form')
                        </div>
        
                        <x-jet-section-border />
                    @endif
        
                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>
        
                        <x-jet-section-border />
                    @endif
                    
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>
        
                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <x-jet-section-border />
        
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.delete-user-form')
                        </div>
                    @endif
                </div>
            </div>
        </x-app-layout>
</body>
</html>