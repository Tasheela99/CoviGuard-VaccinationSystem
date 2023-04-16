
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image/jpg">
    <title>Forget Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        .body-outer {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('images/background2.png');
            background-size: cover;
            background-position: center;
            font-family: Ubuntu, serif;
        }

        .body-inner {
            width: 1000px;
            height: 600px;
            border-radius: 25px;
            box-shadow: 0 0 10px black;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .left-side {
            width: 400px;
            height: 600px;
            background-color: lightblue;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .right-side {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 600px;
            height: 600px;

        }

        .back {
            width: 100%;
            height: 50px;
        }

        .desc {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            height: 400px;
        }

        .buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            height: 150px;
        }

        .backarrow {
            width: 30px;
            border: 2px solid black;
            border-radius: 50%;
            margin: 5px 5px;
        }

        .name h4 {
            font-size: 25px;
            font-weight: 900;
            color: blue;
        }

        .helps {
            font-weight: 900;
            color: blue;
        }

        .form-control {
            font-weight: 300;
        }

        .all {
            margin: 5px;
        }

        .title {
            color: blue;
            font-size: 45px;
            font-weight: 900;
        }

        .button-area {
            width: 100%;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }

        .exists-acc {
            text-align: center;
            font-size: 10px;
            font-weight: 900;
            color: blue;
        }

        .login-form-area {
            padding: 0 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column

        }
    </style>
</head>

<body>
<div class="body-outer">
    <div class="body-inner">
        <div class="left-side">
            <div class="back"><a href="{{ route('main_page') }}"><img src="images/backarrow.svg" alt=""
                                                                      class="backarrow"></a></div>
            <div class="desc">
                <div class="logo"><img src="images/logo.png" alt="" width="250px"></div>
                <div class="name">
                    <h4>Welcome to CoviGuard</h4>
                </div>
            </div>
            <div class="buttons">
                <div class="helps">
                    <p>Need any help?...</p>
                </div>
                <div class="help-buttons d-flex">
                    <a href="callto:+94766308272"><img src="images/phoneicon.png" alt="" width="50px"></a>
                    <a href=mailto:coviguardvac@gmail.com"><img src="images/mailicon.png" alt="" width="50px"></a>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="login-form-area">
                <x-guest-layout>

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-jet-validation-errors class="mb-4"/>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="block">
                                <x-jet-label for="email" value="{{ __('Email') }}"/>
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                             required autofocus/>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                    <button class="btn bg-primary text-light">
                                        {{ __('Email Password Reset Link') }}
                                    </button>
                            </div>
                        </form>
                </x-guest-layout>
            </div>
        </div>
    </div>
</div>
</body>

</html>

