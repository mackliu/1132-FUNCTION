<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <style>
        h1 {
            text-align: center;
        }

        form {
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        form label {
            display: inline-block;
            width: 80px;
            text-align-last: justify;

        }

        form div {
            margin: 5px 0;
        }

        form input[type=text],
        form input[type=password],
        form input[type=date],
        form input[type=number] {
            padding: 5px;
            font-size: 20px;
            border: 0px;
            border-bottom: 1px solid #ccc;
        }

        form input[type=submit],
        form input[type=reset] {
            padding: 5px 10px;
            font-size: 14px;
            background-color: #6cF;
            border-radius: 5px;
            margin: 10px 10px;
            border: 1px solid #eee;
            cursor: pointer;

        }

        form input[type=submit]:hover,
        form input[type=reset]:hover {
            padding: 7px 12px;
        }

        form input[type=reset] {
            background-color: #cc6;
        }

        form div:nth-child(5) {
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 1) {
                echo "註冊成功";
            } else {
                echo "註冊失敗";
            }
        }
        ?>
    </div>
    <h1>會員註冊</h1>
    <!--form:post>(label+input:text)*4+div>input:submit+input:reset-->

    <form action="reg.php" method="post">
        <div>
            <label for="">帳號</label>：
            <input type="text" name="acc" id="">
        </div>
        <div>
            <label for="">密碼</label>：
            <input type="password" name="pw" id="">
        </div>
        <div>
            <label for="">電子郵件</label>：
            <input type="text" name="email" id="">
        </div>
        <div>
            <label for="">電話</label>：
            <input type="text" name="tel" id="">
        </div>
        <div>
            <input type="submit" value="註冊">
            <input type="reset" value="重置">
        </div>
    </form>
</body>

</html>