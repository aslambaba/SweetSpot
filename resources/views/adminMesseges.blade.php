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
                @foreach($messeges as $msg)
                <div class="singleMessege">
                    <h5>{{$msg->Messege_Sender_Name}}</h5>
                    <h6>{{$msg->Messege_Sender_Email}}</h6>
                    <p>{{$msg->Messege_Body}}</p>
                    <sub>{{$msg->created_at}}</sub>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>