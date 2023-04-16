<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image/jpg">
    <title>Citizen Login</title>
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
            s
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
            <div class="back"><a href="<?php echo e(route('main_page')); ?>"><img src="images/backarrow.svg" alt=""
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
                <div class="help-buttons">
                    <a href="callto:+94766308272"><img src="images/phoneicon.png" alt="" width="50px"></a>
                    <a href=mailto:coviguardvac@gmail.com"><img src="images/mailicon.png" alt="" width="50px"></a>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="login-form-area">
                <?php if(session('status')): ?>
                    <div class="mb-4 font-medium text-sm text-green-600">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <h2 class="text-center title">Login</h2> <br>

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="identity" class="form-label">Your Identity Here</label>
                            <input type="text" class="form-control" id="identity" placeholder="Identity"
                                   name="nic">
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Your Password Here</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                   name="password">
                        </div>
                        <div class="col-12 text-underline ml-2">
                            <a href="<?php echo e(route('password.email')); ?>">Forgot Password</a>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                        <div class="exists-acc">
                            dont have an account?
                        </div>
                        <div class="col-12">
                            <a href="<?php echo e(route('register')); ?>">
                                <button type="button"
                                        class="btn btn-primary">Register
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>
<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/auth/login.blade.php ENDPATH**/ ?>