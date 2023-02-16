<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background: url(img/anhbia.png) no-repeat 0px 0px;
            background-size: cover;
            display:flex;
        }
        .modal-content{
            background-color:transparent;

        }
        .modal1{
            margin-top: 120px;
        }
        .color1{
            color: whitesmoke;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="modal1" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="justify-content-center d-flex text-white   ">
                    <h2 class="color1">Đăng nhập</h2>
                    </div>
                    <div class="modal-body">
                        <form >
                            <div class="form-group">
                                <label for="usernameInput" class="color1"> TÀI KHOẢN
                                </label>
                                <input class="form-control" placeholder="Nhập vào tài khoản" id="usernameInput"></input>
                            </div>
                            <div class="form-group">
                                <label for="passwordInput" class="color1">
                                     MẬT KHẨU
                                </label>
                                <input class="form-control" placeholder="Nhập vào Mật Khẩu" id="passwordInput"></input>
                            </div>
                            <div class="d-flex justify-content-around">
                            <div class="d-flex justify-content-center">
                            <button class="btn btn-warning">
                                 Đăng Nhập
                            </button></div>
                            <div class="d-flex justify-content-center">
                            <button class="btn btn-warning">
                                 Đăng Ký
                            </button>
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