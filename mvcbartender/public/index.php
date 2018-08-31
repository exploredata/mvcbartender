<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MVC Bartender</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1 style="text-align:center">MVC Bartender</h1>

        <center>
        <form action="display.php" method="post" >
          <label>Order a Drink</label><br>
             <select name="drink">
               <option value="drink">Margarita</option>
               <option value="Long Island">Long Island</option>
               <option value="Cuba Libre">Cuba Libre</option>
               <option value="Manhattan">Manhattan</option>
               <option value="White Russian">White Russian</option>
               <option value="Martini">Martini</option>
               <option value="Screwdriver">Srewdriver</option>
             </select>

             <input type="submit" name="submit" value="Place Order"/>
         <form>
         </center>
         <center>
            <img src="cocktails.jpg" alt="cocktails" width="100%"></img>
         </center>
    </body>
</html>
