<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UVM IEEE</title>
        <meta name="author" content="Maxfield Valentine Davis, Emily Smith, Neal Zhu">
        <meta description="The Institute of Electrical and Electronics Engineers at the
              University of Vermont is a resource that provides support for electrical 
              engineering students outside the classroom.">
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <link rel='icon' type='img/x-icon' href='icon.ico' property='stylesheet'>
        <link rel='stylesheet' href='stylesheet.css' type='text/css' media='screen'>

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->

        <!--########################slide pictures##################################-->


        <!--######################## end slide pictures##################################-->



    </head>

    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("slides");
                if (n > x.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = x.length;
                }
                ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
            }
        </script>
        