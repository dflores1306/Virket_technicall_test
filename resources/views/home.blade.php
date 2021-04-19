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
            .container{
                display: table;
                min-height: 800px;
            }
            .vision{
                display: table-cell;
                padding: 12px;
                width: 60%;
            }
            .form{
                background-color: #e6f0f2;
                display: table-cell;
                padding: 12px;
                width: 40%;
                border-radius:15px;
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




        </style>
    </head>
    <body class="antialiased">
        <header>
            
            <nav class="menu">
                <a href="#" class="active"><span class="icon-home"></span>Inicio</a>
                <a href="#">Acerca de</a>
                <a href="#">Blog</a>
                <a href="#">Contacto</a>
            </nav>
        </header>
        <h1>VIRKET Support</h1>
        <div class="container">
            <div class="vision">                
                <h2>Somos expertos en soporte tecnico de sitios web</h2>
                <h3>En VIRKET Support nos enfocamos en la resolución de problemas técnicos de una manera eficiente, rapida y comoda para nuestros clientes.</h3>            
            </div>
            <script type="text/javascript">
                $(document).on('change','input[type="file"]',function(){                    
                    var fileName = this.files[0].name;
                    var fileSize = this.files[0].size;

                    if(fileSize > 2000000){
                        alert('El archivo no debe superar los 2MB');
                        this.value = '';
                        this.files[0].name = '';
                    }else{
                        var ext = fileName.split('.').pop();
                        
                        ext = ext.toLowerCase();
                    
                        switch (ext) {
                            case 'jpg':
                            case 'png':
                            break;
                            default:
                                alert('Por favor ingrese una imagen en formato jpg o png.');
                                this.value = ''; 
                                this.files[0].name = '';
                        }
                    }
                });
            </script>
            <div class="form">
                <h4>Registrate</h4>
                <form class="contactanos" id="contactanos_form" action="{{ route('add-join') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="input_text" type="text" pattern="[ a-zA-ZÁ-Zá-z]*" oninvalid="setCustomValidity('Por favor ingrese solo letras. ')" required name="nombre" placeholder="Nombre Completo">
                    <input class="input_text" type="email" name="correo" required placeholder="Correo Electrónico">
                    <input class="input_text" type="text" pattern="[0-90-9]*" oninvalid="setCustomValidity('Por favor ingresa solo los 10 digitos sin espacios. ')" name="telefono" maxlength="10" minlength="9"  required placeholder="Teléfono">
                    <input class="input_text" type="date"  name="fecha" value="2012-10-08" required placeholder="Fecha de Nacimiento dd-mm-aaaa">
                    <input class="input_text" class="inputfile" class="date" accept="image/*" type="file" required name="imagen" placeholder="Imagen de Perfil">
                    <input class="btn_enviar" type="submit" name="enviar" value="Enviar">
                </form>
            </div>            
            <div class="space"></div>
        </div>



        <footer><h5>Todos los derechos reservados VIRKET Support</h5></footer>
    </body>
</html>
