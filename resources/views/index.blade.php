<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            nav {
                background-color: #293;
                color: #fff;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 30px;

            }

            nav ul {
                list-style: none;
                margin: 0;
                padding: 60;
                display: flex;

            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                color: #fff;
                text-decoration: none;
                padding: 10px;
                display: block;
                font-weight: 300;
            }

            nav ul li a:hover {
                background-color: #fff;
                color: #373;
            }
        </style>
    </head>
    <body>
        <div>
            <nav>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="services">Services</a></li>
                    <li><a href="signup">Signup</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="blog">Blog</a></li>
                </ul>
            </nav>
        </div>
    </body>
</html>
