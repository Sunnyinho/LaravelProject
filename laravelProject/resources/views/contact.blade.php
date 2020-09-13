<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
{{--    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />--}}
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/app.css" rel="stylesheet" type="text/css" media="all" />

{{--    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->--}}
</head>
<body>
<div class="border border-dark rounded float-right col-8">
    <form action="{{route('contact')}}" method="post">
        <fieldset>
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control-plaintext"  id="email" name="email" placeholder="Your Email"><br/><br/>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control-plaintext"  id="subject" name="subject" placeholder="Your
                Subject"><br/><br/>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" class="form-control-plaintext"  id="message" name="message" placeholder="Your
                Message"><br/><br/>
            </div>
            @error('email')
                <div class="alert-danger">{{$message}}</div>
            @enderror

            @if(session('message'))
                <p class="alert-success">{{session('message')}}</p>
            @endif
            <input type="submit" name="submit" id="submit" class="btn-primary btn-lg">
        </fieldset>
    </form>
</div>
</body>
</html>
