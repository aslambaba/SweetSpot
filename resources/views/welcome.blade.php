<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SweetSpot</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel='stylesheet' href="{{asset('css/commonstyle/common.css')}}"/>
        <link rel='stylesheet' href="{{asset('css/commonstyle/FS.css')}}"/>
        <link rel='stylesheet' href="{{asset('css/welcome.css')}}"/>

    </head>
    <body>
        @include("common.header")
        <div class="mainbody">
            @include("common.mainslider")
        </div>
        <div class="aboutusSection">
            <div class="aboutusImg">
            
            </div>
            <div class="aboutusTxt">
                <h3>About Us</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In atque perspiciatis veniam molestiae laudantium iusto rerum debitis nisi porro, ipsa laborum dignissimos, neque natus recusandae veritatis aperiam dolore pariatur eos?</p>
                <button>Contact Us</button>
            </div>
        </div>
        <div class="Sweets">
            <h3>Our Sweets</h3>
            <div class="sweet">
                <h4>Pastries</h4>
            </div>
            <div class="sweet">
                <h4>Cup Cakes</h4>
            </div>
            <div class="sweet">
                <h4>Brownies</h4>
            </div>
        </div>
    </body>
</html>
