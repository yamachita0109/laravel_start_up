@section('header')
<header>
    <span class="title">
        Header
    </span>
    @auth
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth
</header>
@endsection