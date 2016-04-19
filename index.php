<?php
include 'top.php';
?>



    <div class="homeSlides">
        <style>
            .slides {display:none;}
        </style>
        <img class="slides" src="img/1.png">
        <img class="slides" src="img/2.png">
        <img class="slides" src="img/3.png">
        <a class="btn-left" onclick="plusDivs(-1)">❮</a>
        <a class="btn-right" onclick="plusDivs(1)">❯</a>
        <span class="dot" onclick="currentDiv(1)"></span>
        <span class="dot" onclick="currentDiv(2)"></span>
        <span class="dot" onclick="currentDiv(3)"></span>
    </div>
    <script>
            var index = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("slides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                index++;
                if (index > x.length) {
                    index = 1;
                }
                x[index - 1].style.display = "block";
                setTimeout(carousel, 4000);
            }
        </script>
</body>

<?php
include 'footer.php';
?>
