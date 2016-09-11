<?php

    @session_start ();
    @error_reporting(0);
    include "inc/koneksi.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>IoT Indonesia Life Show</title>
    <link href="Content/css/main.css" rel="stylesheet" type="text/css" />
<!--[if It IE 6 || 7]>
	<style type="text/css">@import "/Content/css/ie6.css";</style>
	<script src="/Scripts/DD_belatedPNG.js" type="text/javascript"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('#logoorange, #logored, #logogreen, #logoblue, #logopurple, roadmap_brilliant, img, #containerholder, #columnsholder, #formholder, input, textarea, #footer');
	</script>
	<![endif]-->
    
    <!--[if It IE 8]>
	<style type="text/css">@import "/Content/css/ie8.css";</style>
	<![endif]-->
    

    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="Scripts/jquery.scrollTo-min.js" type="text/javascript"></script>
    
	<script src="Scripts/jquery-func.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="Scripts/jquery.pngFix.pack.js"></script> 
    <script type="text/javascript" src="Scripts/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
	<script type="text/javascript" src="Scripts/fancybox/jquery.fancybox-1.3.1.js"></script>


    <script type="text/javascript" src="Scripts/cufon-yui.js"></script> 
    <script type="text/javascript" src="Scripts/Hand_Of_Sean_400.font.js"></script>

	<link rel="stylesheet" type="text/css" href="Scripts/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
    

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-8852052-4']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

    <script type="text/javascript">
        Cufon.replace('h1, .title', { hover: true });

        $(document).ready(function () {
            $(document).pngFix(); 
            $("#contactSubmit").click(function () {
                $("#error").hide();
                $("#success").hide();
                $("#error").html('Υπήρξε κάποιο πρόβλημα και το μήνυμά σας δεν εστάλη. Παρακαλούμε προσπαθήστε αργότερα.');

                var hasError = false;
                var emailReg = '/^([w-.]+@([w-]+.)+[w-]{2,4})?$/';

                var emailVal = $("#email").val();
                if (emailVal == '' || emailVal == 'Email:') {
                    $("#error").html('Παρακαλούμε συμπληρώστε το email σας');
                    $("#error").show();
                    return false;
                }

                var messageVal = $("#message").val();
                if (messageVal == '') {
                    $("#error").after('Παρακαλούμε συμπληρώστε το μήνυμα σας');
                    $("#error").show();
                    return false;
                }

                if (hasError) return false;

                $("#loader").show();
                $.ajax(
                {
                    type: "POST",
                    url: "/contact/SubmitMessage",
                    data: { email: $("#email").val(), firstName: $("#firstName").val(), lastName: $("#lastName").val(), message: $("#message").val() },
                    success: function (json) {
                        $("#loader").fadeOut(function () { $("#success").fadeIn(); });
                    },
                    error: function (json) {
                        $("#loader").fadeOut(function () { $("#error").fadeIn(); });
                    }
                });

                return false;
            });
        }); 
    </script>

    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/justdot/puyT" />
</head>

<body>
<div class="row">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><center>
                <span>  Lokasi :  <br /></span>
                <span>Jakarta Convention Center<br />
                Jl. Jend. Gatot Subroto</span>
            </center></li>
        
        </div>
</div>

<div id="site">
<!-- CONTACT-->
<div id="contact">
<div id="logopurple"></div>

<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <div class="box">
    <i class="fa fa-code"></i>
        <div class="desc">

            <div id="phone"><a style="color: Black;">+6281372127136<br /> 
            (Nanda Wawan K ST, MT)</a></div>
            <div id="mail"><a href="mailto:nandawawank@gmail.com" style="color: Black;">nandawawank@gmail.com</a></div>
            <div id="address"><a style="color: Black;">IoT Indonesia Life Show<br />
	        Jl. Jend. Gatot Subroto<br/> Daerah Ibukota Jakarta</a><br />
            <br />
            </div>
        </div>
    </div>
</div>    

<div id="formholder" style="margin-top: -;">
    <form id="form1" name="form1" method="POST" action="konfirmasi.php">

        <input name="txt_nama" type="text" id="firstName" placeholder="Nama Team" maxlength="40">
        <br /> 
        <input name="txt_jumlah" type="text" id="surName" placeholder="Jumlah Anggota" maxlength="40">
        <br /> 
        <div id="jkjk">
            <label>Konfirmasi Oleh : </label><br />
            <input name="wakil[]" type="radio" id="jk" value="Ketua"> Ketua</input>
            <input name="wakil[]" type="radio" id="jk" value="Wakil"> Wakil</input>
        </div>
        <select name = "pilihan_tema">
				<option value="IoT Pendidikan">IoT Pendidikan</option>
				<option value="IoT Multimedia">IoT Multimedia</option>
				<option value="IoT Pertanian">IoT Pertanian</option> 
			    <option value="IoT Industry">IoT Industry</option>
			 	<option value="IoT Home">IoT Home</option>
	    </select> 
        <textarea class="txt" name="konfirmasi" id="message" style=" height: 141px !important; resize: none;" placeholder="Nama Team, Hadir / Tidak Hadir"></textarea>
        <br />
       <input type="submit" name="Send" value="Send" id="send1">
    </form>

</div>

</div>
</div>

<div class="footerBottomSection">
        <div class="container">
            <h2><center>&copy; 2016 IoT Indonesia Life Show</center></h2>
            <div class="pull-right"> <a href="main.php"> <H2>TOP </H2></a></div>
        </div>
</div>


</div>
</div>

</div>

<div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>
</body>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</html>