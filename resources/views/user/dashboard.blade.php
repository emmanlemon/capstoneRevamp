<form method="POST" action="{{ route('logout') }}" class="inline">
    @csrf

    <button type="submit" class="ml-2 text-sm text-gray-600 underline hover:text-gray-900">
        {{ __('Log Out') }}
    </button>
</form>
@if(session()->has('key'))
{
    <p>meon</p>
}
@else
{
    <p>wala</p>
}
@endif