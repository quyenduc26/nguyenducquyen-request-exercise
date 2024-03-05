<div>
<form method="POST" action="/register">
    @csrf

    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="username">Username</label>
        <input id="username" type="text" name="username" value="{{ old('username') }}" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>


</div>
