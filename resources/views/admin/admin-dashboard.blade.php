<h1>Admin Welcome, {{ Auth::user()->name }}</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
@include('layout.header')
@include('layout.sidebar')