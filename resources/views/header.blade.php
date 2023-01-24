<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light p-2">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="#wiebenik">over mij</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#opleidingen">opleiding</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#werkervaring">ervaring</a>
                </li>
            </ul>
        </div>
        <button class="btn btn-outline-dark" onclick="darkMode()">dark mode</button>
        <script>
            function darkMode() {
                var element = document.body;
                element.classList.toggle("dark-mode");

            }
        </script>
    </nav>
</header>
