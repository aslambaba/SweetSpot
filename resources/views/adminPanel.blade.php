<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SweetSpot</title>

    <!-- Styles -->
    <link rel='stylesheet' href="{{asset('css/commonstyle/common.css')}}" />
    <link rel='stylesheet' href="{{asset('css/productView.css')}}" />

</head>

<body>
    @include("common.header")
    <div class="mainbody">
        <div class="heading" style="text-align: center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <h1>Your Products</h1>
        </div>
        @include('common.adminNav')
        <div class="productsec">
            <div class="singleProduct">
                <img src="{{url('/images/cake1.png')}}" alt="Image" />
                <h5>$24.00</h5>
                <h3>Full Chocolaty CupCake with Berry</h3>
                <div class="singleProductBTN">
                    <button>Update</button>
                    <button>Delete</button>
                </div>
            </div>
            <div class="singleProduct">
                <img src="{{url('/images/cake2.png')}}" alt="Image" />
                <h5>$24.00</h5>
                <h3>Full Chocolaty CupCake with Berry</h3>
                <div class="singleProductBTN">
                    <button>Update</button>
                    <button>Delete</button>
                </div>
            </div>
            <div class="singleProduct">
                <img src="{{url('/images/cake3.jpg')}}" alt="Image" />
                <h5>$24.00</h5>
                <h3>Full Chocolaty CupCake with Berry</h3>
                <div class="singleProductBTN">
                    <button>Update</button>
                    <button>Delete</button>
                </div>
            </div>
            <div class="singleProduct">
                <img src="{{url('/images/cake4.png')}}" alt="Image" />
                <h5>$24.00</h5>
                <h3>Full Chocolaty CupCake with Berry</h3>
                <div class="singleProductBTN">
                    <button>Update</button>
                    <button>Delete</button>
                </div>
            </div>
            <div class="singleProduct">
                <img src="{{url('/images/cake5.png')}}" alt="Image" />
                <h5>$24.00</h5>
                <h3>Full Chocolaty CupCake with Berry</h3>
                <div class="singleProductBTN">
                    <button>Update</button>
                    <button>Delete</button>
                </div>
            </div>
            <div class="singleProduct">
                <img src="{{url('/images/cake6.png')}}" alt="Image" />
                <h5>$24.00</h5>
                <h3>Full Chocolaty CupCake with Berry</h3>
                <div class="singleProductBTN">
                    <button>Update</button>
                    <button>Delete</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>