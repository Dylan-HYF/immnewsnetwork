<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/immnewsnetwork/css/reset.css">
    <style>
        /* h1 {
            color: red;
        } */

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        @font-face {
            font-family: 'iconfont';
            /* Project id 2905634 */
            src: url('//at.alicdn.com/t/font_2905634_ce74i9b6edd.woff2?t=1635734158740') format('woff2'),
                url('//at.alicdn.com/t/font_2905634_ce74i9b6edd.woff?t=1635734158740') format('woff'),
                url('//at.alicdn.com/t/font_2905634_ce74i9b6edd.ttf?t=1635734158740') format('truetype');
        }

        .iconfont {
            font-family: "iconfont" !important;
            font-size: 16px;
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -webkit-text-stroke-width: 0.2px;
            -moz-osx-font-smoothing: grayscale;
        }

        #content {
            padding: 0 20px;
        }

        h1 {
            font-size: 30px;
            font-weight: bold;
        }

        p {
            margin: 15px 0;
            text-indent: 2em;
        }

        a {
            text-decoration: none;
        }

        #nav {
            /* position: fixed; */
            /* top: 0; */
            width: 100%;
            min-height: 50px;
            line-height: 50px;
            /* height: 7vh; */
            background: rgb(12, 122, 196);
            margin-bottom: 20px;
            /* display: flex;
            justify-content: flex-end;
            align-items: center; */
        }

        #nav ul {
            padding: 0 8px;
            height: 100%;
            display: flex;
            /* align-items: center; */
            /* justify-content: center; */
        }


        #nav ul li a {
            color: white;
            display: block;
            padding: 0 15px;
        }

        #nav ul li a:hover {
            background-color: #006fc4;
        }

        #nav ul li:last-child {
            margin-left: auto;
            align-self: flex-end;
        }

        .btn {
            color: white;
            display: inline-block;
            /* width: 30px; */
            height: 30px;
            padding: 0 10px;
            background: rgb(12, 122, 196);
            border-radius: 5px;
            margin-right: 5px;
            line-height: 30px;
        }

        .btn:hover {
            background: #006fc4;

        }
    </style>
</head>

<body>
    <nav id="nav">
        <ul>
            <li><a href="/immnewsnetwork/index.php">Index</a></li>

            <li><a href="/immnewsnetwork/about.php">About</a></li>
            <li><a href="/immnewsnetwork/contact-form.php">Contact Info</a></li>
            <?php
            if ($_SESSION["personId"] == 1) {
            ?>
                <li><a href="/immnewsnetwork/user-info.php">User Info</a></li>
                <li>
                    <a href="/immnewsnetwork/content-management.php">Content Management</a>

                </li>
            <?php
            }
            ?>
            <li><a href="/immnewsnetwork/logout.php">Logout</a></li>

        </ul>
    </nav>
    <main id="content">