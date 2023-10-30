<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="img/menu.png"  class="menu-icono" alt="menu">
            </label>
         <nav class="navbar">
            <ul>
                <li><a href="#">inicio</a></li>
                <li><a href="#">nosotros</a></li>
                <li><a href="#">servicios</a></li>
                <li><a href="#">contacto</a></li>
            </ul>
         </nav>
        </div>

        <div class="head-content container">
            <div class="header-txt">
                <h1>medical center</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque earum beatae fugiat. 
                    Laudantium voluptatum ipsam tempore voluptate alias eveniet inventore impedit accusamus explicabo.
                     Quo, inventore corrupti alias eveniet pariatur sapiente.
                </p>
                <a href="#" class="btn-1">informacion</a>
            </div>

            <div class="header-img">
               <img src="img/left.png" alt="">

            </div>

        </div>

    </header>

    <section class="about container">
        <img src="img/about (1).png" alt="">
        <div class="about-txt">
            <h2>nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ex consequatur, officiis optio illum aut tempora fugit, 
                distinctio minus eveniet repudiandae esse, et expedita porro eum dolore? Aperiam saepe aut corrupti?
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ex consequatur, officiis optio illum aut tempora fugit, 
                distinctio minus eveniet repudiandae esse, et expedita porro eum dolore? Aperiam saepe aut corrupti?
            </p>

        </div>

    </section>

    <main class="servicios">

    <h2>Servicios</h2>
    <div class="servicios-content container">
        
        <div class="Servicio-1">
            <i class="fa-sharp fa-solid fa-hospital-user"></i>
            <h3>pediatria</h3>
        </div>

        <div class="Servicio-1">
            <i class="fa-sharp fa-solid fa-stethoscope"></i>
            <h3>Ginecologia</h3>
        </div>

        <div class="Servicio-1">
            <i class="fa-solid fa-bed pulse "></i>
            <h3>Dermatologia</h3>
        </div>
        
        <div class="Servicio-1">
            <i class="fa-solid fa-hospital "></i>
            <h3>Cardiologia</h3>
        </div>
    </div>
</main>

    

      <section class="formulario container">

        <form method="post" autocomplete="off">

           <h2>Agenda tu consulta</h2> 

           <div class="input-group">

            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido">
                <i class="fa-solid fa-user"></i>
            </div>
             

            <div class="input-container">
                <input type="tel" name="phone" placeholder="Telefono Celular">
                <i class="fa-solid fa-phone"></i>
            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <textarea name="message" placeholder="Detalles de la consulta"></textarea>
            </div>

            <input type="submit" name="send" class="btn" onClick="myFunction()">
           </div>

        </form>
</section>


   <footer class="footer">

    <div class="footer-content container">

        <div  class="link">
            <a href="#">logo</a>

        </div>

        <div class="link">

            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>

        </div>

    </div>

   </footer>

     <?php
     include("send.php");
     ?>

    <script>
        function myFunction() {
            window.location.href="htpp://localhost/pagina"
        }
    </script>

</body>
</html>