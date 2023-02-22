<?php "header.php"; ?>

<html>

<head>
    <title>Login</title>
    <style>
        body{
            background-color: #000;
        }
    h1 {
        margin-top: 48px;
        text-align: center;
        color:#Fff;
    }

    form {
        background: #fff;
        color:#000;
        max-width: 360px;
        width: 100%;
        padding: 58px 44px;
        border: 1px solid #e1e2f0;
        border-radius: 4px;
        transition: all 0.3s ease;
        margin: 0 auto;
    }

    .row {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .row label {
        font-size: 13px;
        color: #8086a9;
    }

    .row input {
        flex: 1;
        padding: 13px;
        border: 1px solid #d6d8e6;
        border-radius: 4px;
        font-size: 16px;
        transition: all 0.2s ease-out;
    }

    .row input:focus {
        outline: none;
        box-shadow: inset 2px 2px 5px 0 rgba(42, 45, 48, 0.12);
    }

    .row input::placeholder {
        color: #C8CDDF;
    }

    input[type="submit"] ,input[type="button"]{
        border: 1px solid #5268ff;
        border-radius: 1.25em;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, \.SFNSText-Regular, San Francisco, Roboto, Segoe UI, Helvetica Neue, Lucida Grande, sans-serif;
        font-size: 1em;
        font-weight: 500;
        height: 2.5em;
        left: 50%;
        outline: 0;
        transition: border-color .2s cubic-bezier(.77, 0, .175, 1), background-color .2s cubic-bezier(.77, 0, .175, 1), color .2s cubic-bezier(.77, 0, .175, 1);
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        width: 9.75em;
        background:#5268ff;
        display: flex;
        justify-content: center; 
        margin: 0 auto;
    }

    button:hover {
        background: #55D3AC;
    }
    a{
        color
        :#fff;
        text-decoration: none;
    }

    @media(max-width: 458px) {

        body {
            margin: 0 18px;
        }

        form {
            background: #f9faff;
            border: none;
            box-shadow: none;
            padding: 20px 0;

        }

    }
</style>
</head>


<body>
    <h1><a href="./index.php">Back To Home</a></h1>
    <h1>Login</h1>
    <?php
    if (isset($_GET['error']) && $_GET['error'] === 'invalidPassword') {
        echo '<p style="color:red;">Invalid password</p>';
    } elseif (isset($_GET['error']) && $_GET['error'] === 'emailNotFound') {
        echo '<p style="color:red;">Email not found</p>';
    }
    ?>
    <form action="loginAction.php" method="post">
        <div class="row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" autocomplete="off" placeholder="email@example.com">
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <input type="submit" value="Login">
    </form></br>
    <input type="button" value="Sign Up" onclick="window.location.href='register.php'">
</body>

</html>
<?php "footer.php" ?>