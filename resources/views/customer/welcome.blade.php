@extends('customer.layout')

@section('content')
<!--
    <head>
        <title></title>
        <script type="text/javascript">
            var picPaths = ['dist/img/avatar3.png','dist/img/avatar2.png'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,5000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
        </script>

    </head>
    <body>

    <div>
        <img id="imgBanner" src="" alt="" />
    </div>

    </body>-->


    <div class="container-full">
        <div class="row target" style=""><img src="dist/img/headerLeft.png">

                    <div class="col-lg-12 text-center v-center">
                <h1 class="" style="font-size:39pt;">Welcome to Ceylon Electricity Board</h1>

                <p class="lead">We light up your future</p>
                <br class="">
            </div><div class="container"></div>
            <div class="row">
                <div class="container">
                    <img src="dist/img/wall.png" class="img-responsive" id="C3 logo" style="" contenteditable="false">
                </div>
            </div>
        </div>
        <!-- /row -->

        <br class="">
        <br class="">
        <br class="">
    </div>
    <!-- /container full -->
    <div class="container">
        <hr class="">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="">Contact Us</h3>
                    </div>
                    <div class="panel-body">24 HOURS CALL CENTER<br>DIAL 1987</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="">SMS</h3>
                    </div>
                    <div class="panel-body">KNOW YOUR BILLS BY SMS</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="">For Your Residence</h3>
                    </div>
                    <div class="panel-body">INFORMATION ON CONNECTIONS, CONSUMPTION & PAYMENTS</div>
                </div>
            </div>
        </div>

    </div>

@endsection