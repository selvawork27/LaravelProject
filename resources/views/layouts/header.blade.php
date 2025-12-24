<nav style="display: flex;flex-direction:row;align-items:center;justify-content:center">
    <h1>Task Application</h1>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        @auth
            <li>
                <form method="POST" action="{{ url('/logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @else
            <li><a href="{{ url('/login') }}">Login</a></li>
        @endauth
    </ul>
</nav>