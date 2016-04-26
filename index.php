<?php
include 'top.php';
include 'nav.php';
?>

<!--########################slide pictures##################################-->
<div class="homeSlide" >
    
    <img class="slides" src="img/Slideshow gallery/News 1/IEEE arduino workshop 2015.jpg" alt="">
    <img class="slides" src="img/Slideshow gallery/News 5/IEEE_Conference.jpg" alt="">
    <img class="slides" src="img/Slideshow gallery/News 3/IEEE seminars.jpg" alt="">

    <div class="leftArrow" onclick="plusDivs(-1)"><img class="left-arrow" src="img/left-arrow.png" alt="left arrow"></div>
    <div class="rightArrow" onclick="plusDivs(1)"><img class="right-arrow" src="img/right-arrow.png" alt="right arrow"></div>
    <div class="center section text-white display-bottomleft" style="width:100%">
        <span class="badge demo border transparent hover-white" onclick="currentDiv(1)"></span>
        <span class="badge demo border transparent hover-white" onclick="currentDiv(2)"></span>
        <span class="badge demo border transparent hover-white" onclick="currentDiv(3)"></span>
    </div>
</div>
<script>
    var index = 0;
    carousel();
    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

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
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("slides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = x.length;
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }
</script>
<!--######################## end slide pictures ##################################-->
<article>
    <h1 class="center">Welcome to the UVM IEEE</h1>
    <p>The Institute of Electrical and Electronics Engineers at the University of 
        Vermont is a resource that provides support for electrical engineering 
        students outside the classroom. We conduct a lecture series throughout 
        the academic year as well facilitate student projects and sponsor career 
        networking events.</p>
</article>
</body>
<?php
include 'footer.php';
?>
