<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US - SweetSpot</title>
    <!-- Styles -->
    <link rel='stylesheet' href="{{asset('css/commonstyle/common.css')}}" />
    <link rel='stylesheet' href="{{asset('css/contactus.css')}}" />
</head>

<body>
    @include('common.header')
    <div class="mainbody">
        @include('common.adminNav')
        <div class="MainContactPage">
            <h2>ADD PRODUCT</h2>
            <form>
                <input  placeholder="Product Name" /><br />
                <input  placeholder="Price" /><br />
                <textarea rows="10" cols="45" placeholder="Product Description"></textarea><br />
                <button>ADD</button>
            </form>
        </div>
    </div>
</body>

</html>