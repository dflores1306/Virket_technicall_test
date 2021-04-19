<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Virket Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .menu{
                display: flex;
                justify-content: space-between;
                background: #0f7989;
                border-bottom: 1px solid #0c6775;
                height: 45px; 
            }

            .menu a{
                flex: 1;
                font-family: arial;
                display: flex;
                color: #ffffff;
                text-decoration: none;
                font-size: 12px;
                font-weight: bold;    
                justify-content: center;
                align-items: center;
            }
            .menu a:hover{
                background: rgba(0,0,0, .1);
            }

            .menu a.active{
                background-color: #0c6775;
            }

            @media (max-width: 500px) {
                
                .menu{
                    height: auto;
                    border-bottom: 0px;
                    display: block;

                }
                
                .menu a{
                    height: 45px;
                    border-bottom: 1px solid #0c6775;
                }


                .vision,.form{
                    display: inline-block;
                }

            }            

            body {
                font-family: 'Nunito', sans-serif;

                background-image: url("../resources/images/fondo1.jpg");
                background-repeat: no-repeat, repeat;
                background-size: 100% 100%;
                min-height: 900px;
            }

            h2{
                color: #074751;
                text-decoration: none;
                font-size: 25px;
                text-align: center;
                margin-bottom: 10%;
            }

            h1{
                color: #074751;
                text-decoration: none;
                font-size: 35px;
                text-align: center;
                margin-bottom: 10%;
            }

            h3{
                color: #074751;
                text-decoration: none;
                font-size: 20px;
                text-align: center;
                margin-top: : 10%;
            }

            .vision{
                padding: 12px;
                width: 60%;
            }

            h4{
                color: #074751;
                text-decoration: none;
                font-size: 24px;
                text-align: center;
            }
            form{
                display: table;
                border-radius:10px;
            }
            .input_text{
                display: table-row;
                width: 80%;
                margin: 8px;
                margin-left: 10%;
                border-radius: 4px;
                height: 30px;
                align-content: center;
            }
            .btn_enviar{
                display: table-row;
                width: 40%;
                margin: 8px;
                margin-left: 10%;
                border-radius: 8px;
                height: 30px;
                background-color: #1590a3;
                color: white;
            }

            .btn_enviar:hover{
                background-color: #074751;
            }

            h5{
                color: #074751;
                text-decoration: none;
                font-size: 15px;
                text-align: center;
                align-content: center;
            }

            .inputfile {
                width: 0.1px;
                height: 0.1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }
            .container{
                min-height: 800px;
            }




        </style>
    </head>
    <body class="antialiased">
        <header>
            
            <nav class="menu">
                <a href="home"><span class="icon-home"></span>Inicio</a>
                <a href="#">Acerca de</a>
                <a href="#">Blog</a>
                <a href="#">Contacto</a>
            </nav>
        </header>
        <h1>VIRKET Support</h1>
        <div class="container">
            <div class="vision">                
                <h2>Gracias por tu registro!</h2>     
            </div>
            <div class="form">
            </div>            

        </div>



        <footer><h5>Todos los derechos reservados VIRKET Support</h5></footer>
    </body>
</html>
