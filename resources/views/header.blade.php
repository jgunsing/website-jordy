<header>
    <div>
        <div class="float-end m-3">
            <div>
                <input onclick="darkMode()" type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="label">
                    <i class="fas fa-moon"></i>
                    <i class='fas fa-sun'></i>
                    <div class='ball'>
                </label>
            </div>
        </div>
    </div>
    <div>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a style="color: #b3b3b3" class="nav-link" onclick="scrolldivOvermij()">wie ben ik?</a>
                </li>
                <li class="nav-item">
                    <a style="color: #b3b3b3" class="nav-link" onclick="scrolldivOpleiding()">vaardigheden</a>
                </li>
                <li class="nav-item">
                    <a style="color: #b3b3b3" class="nav-link" onclick="scrolldivErvaring()">werkervaring</a>
                </li>
            </ul>
        </nav>
    </div>
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
    <style>
        * {
            box-sizing: border-box;
        }

        input:hover {
            cursor: pointer;

        }

        .checkbox {
            opacity: 0;
            position: absolute;
        }

        .label {
            width: 50px;
            height: 26px;
            display: flex;
            border-radius:50px;
            justify-content: space-between;
            padding: 5px;
            position: relative;
            transform: scale(1.5);
        }

        .ball {
            width: 20px;
            height: 20px;
            background-color: #b3b3b3;
            position: absolute;
            top: 2px;
            left: 2px;
            border-radius: 50%;
            transition: transform 0.2s linear;
        }

        /*  target the elemenent after the label*/
        .checkbox:checked + .label .ball{
            transform: translateX(24px);
        }

        .fa-moon {
            color: white;
        }

        .fa-sun {
            color: black;
        }

        .float-end {
            float: right;
            text-align: center;
        }

    </style>

</header>
