<form method="POST" action="{{ route('login') }}">
    @csrf
    <input name="email" type="email" placeholder="Email">
    <input name="password" type="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
