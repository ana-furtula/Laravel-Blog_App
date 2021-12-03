<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" style="padding-left: 1rem;" href="{{ route('blog.index') }}">Home</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('other.about') }}">About</a>
            </li>
        </ul>
    </div>
</nav>