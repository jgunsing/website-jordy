<header>
    <nav>
    <div class="float-end mt-1">
        <label class="switch">
            <input type="checkbox" onclick="darkMode()" unchecked>
            <span class="slider round"></span>
        </label>
        <script>
            function darkMode() {
                var element = document.body;
                element.classList.toggle("dark-mode");
            }
            function scrolldivOvermij() {
                var elem = document.getElementById("overmij");
                elem.scrollIntoView();
            }
            function scrolldivOpleiding() {
                var elem = document.getElementById("opleidingen");
                elem.scrollIntoView();
            }
            function scrolldivErvaring() {
                var elem = document.getElementById("werkervaring");
                elem.scrollIntoView();
            }
        </script>
    </div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a style="color: #b3b3b3" class="nav-link" onclick="scrolldivOvermij()">wie ben ik?</a>
        </li>
        <li class="nav-item">
            <a style="color: #b3b3b3" class="nav-link" onclick="scrolldivOpleiding()">vaardigheden & opleiding</a>
        </li>
        <li class="nav-item">
            <a style="color: #b3b3b3" class="nav-link" onclick="scrolldivErvaring()">werkervaring</a>
        </li>
    </ul>
    </nav>
</header>
