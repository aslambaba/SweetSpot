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
        <div class="MainContactPage">
            <h2>CONTACT US</h2>
            <form method="post" action="http://localhost/sweetspot/public/contactus">
                {{csrf_field()}}
                <input placeholder="Name" name="Name" /><br />
                <input placeholder="Email" name="Email" /><br />
                <textarea rows="10" cols="45" placeholder="Messege" name="Messege"></textarea><br />
                <button>Send</button>
            </form>
        </div>
    </div>
</body>

</html>