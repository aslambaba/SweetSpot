<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messeges - SweetSpot</title>
    <!-- Styles -->
    <link rel='stylesheet' href="{{asset('css/commonstyle/common.css')}}" />
    <link rel='stylesheet' href="{{asset('css/messeges.css')}}" />
</head>

<body>
    @include('common.header')
    <div class="mainbody">
        @include('common.adminNav')
        <div class="MainMessegePage">
            <h1>Messeges</h1>
            <div class="MessgesBody">
                <div class="singleMessege">
                    <h5>Aslam</h5>
                    <h6>aslam91r@gmail.com</h6>
                    <p>Hello Sir, I Love your products and want to but these cakes in bulk for my buinsess in United States</p>
                    <sub>12-May-2020</sub>
                </div>
                <div class="singleMessege">
                    <h5>Aslam</h5>
                    <h6>aslam91r@gmail.com</h6>
                    <p>Hello Sir, I Love your products and want to but these cakes in bulk for my buinsess in United States</p>
                    <sub>12-May-2020</sub>
                </div>
            </div>
        </div>
    </div>
</body>

</html>