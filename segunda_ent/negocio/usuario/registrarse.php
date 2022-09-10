
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad Viera</title>
    <link rel="stylesheet" href="../../../src/estilos.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class=" c" >

  <header class="px-3  py-auto   lg:p-auto lg:m-auto h-24 rounded bg-teal-800 md:flex   md:justify-between ">

    <div class="flex justify-between items-center pl-0 lg:pl-20">
      <span class="text-base md:text-lg lg:text-2xl font-Bold">
        <img class="h-20 inline" src="./src/imgs/Logo.png" alt="">
        Ropa de seguridad Viera
      </span>

     
      <span class=" text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"> </ion-icon>
      </span>
    </div>

    <ul class="  my-auto  md:flex md:itemes-center  z-[1] md:z-auto md:static absolute
                bg-teal-600 md:bg-teal-800 w-80 left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-6
                  md:opacity-100 opacity-0 o md:left-[-400px] transition-all ease-in
                  duration-500 pr-0 lg:pr-10">
      <li class="mx-1 ml-5  lg:mx-3 text-center  my-5 md:my-0"> 
        <a href="#" class="text-lg text-center   hover:text-cyan-300 duration-200">Inicio</a>
      </li>

      <li class="mx-1  lg:mx-3 text-center  my-5 md:my-0">
        <a href="#" class="text-lg  hover:text-cyan-300 duration-200">Contacto</a>
      </li >

      <li class="mx-1  lg:mx-3 text-center  my-5 md:my-0">
        <a href="" class="text-lg hover:text-cyan-300 duration-200">Nosotros</a>
      </li>

      <li class="mx-1   text-center  my-5 md:my-0">
        <a href="./segunda_ent/dise/loginSigin.php" class="bg-cyan-500 inline text-white font-semibold duration-500  py-1
                          px-2 hover:bg-cyan-500 rounded ">iniciar sesion ></a>
      </li>
   
    </ul>
     
  </header>

  <nav class="mt-2">
          <div class="  flex justify-center" id="menuCategorias">
            <ul class="flex w-auto items-center bg-slate-800 rounded">
              <li><a href=""><img class="h-12 px-10" src="./src/imgs/casco.png" alt=""></a></li>
              <li><a href=""><img class="h-12 px-5" src="./src/imgs/Chaleco.png" alt=""></a></li>        
              <li><a href=""><img class="h-12 px-5" src="./src/imgs/uniforme.png" alt=""></a></li>
              <li><input class="h-6" type="text"></li>
              <li><img class="h-6 p-1 border"src="./src/imgs/casco.png" alt=""></li>
              <li><a href=""><img class="h-12 px-5" src="./src/imgs/Botas.png" alt=""></a></li>        
              <li><a href=""><img class="h-12 px-5" src="./src/imgs/Ofertas.png" alt=""></a></li>
              <li><a href=""><img class="h-12 px-5" src="./src/imgs/Combos.png" alt=""></a></li>
            </ul>
          </div>
  
      

  </nav>





    
    
  <div class="flex  my-10 ">

    <div class=" mx-4 lg:mx-8 pr-5 lg:pr-14 border-r border-gray-400 flex-row">
      <div class="flex flex-grow">
        <ul class="flex-col text-center  mx-auto ">
          <li class=" p-1 w-44 rounded-md mt-2  bg-buenas"><a href="">Categorias</a></li>
        </ul>
      </div>
    </div>
      
      
    <div class="Contenido border-b border-red-900  py-5 mr-5 w-full flex h-screen">
      
    <form class="" name="formulario" method="post" action="">

      <br> <input  placeholder="Nombre" type="text" name="nom" maxlength="30" size="40"> <br>

      <br> <input placeholder="Apellido" type="text" name="ape" maxlength="30" size="40"> <br>

      <br> <input placeholder="Telefono" type="number" name="tel" maxlength="30" size="40"> <br>

      <br> <input placeholder="Email" type="email" name="mail" maxlength="30" size="40"> <br>

      <br> <input placeholder="Contraseña" type="password" name="pass" maxlength="30" size="40"> <br>

      <br> <input type="submit" value="Registrarse" name="registrarse"> <br>

    </form>
    <div class=" bg-black">
       <?php include("prueba.php")
    
    ?>
    </div>
   

    
    </div>

  </div>
  
    
   

  <footer class="flex h-auto ">
    
    <div class="grid  w-full bg-teal-900">

      <div class="flex  justify-center  items-center">
        <img class="h-20  md:h-28 inline  " src="./src/imgs/Logo.png"  alt="">
        <span class="font-semibold text-xl md:text-2xl  text-white ">
          Ropa de Seguridad
        </span>
      </div>

      <div class="grid  grid-cols-1 gap-3 md:grid-cols-3 justify-between place-items-center items-start ">
        <div class="mb-5 ml-3 h-auto w-40">
          <h4 class="mb-2   sm:w-40 w-auto font-semibold text-teal-400 border-b mr-3 hover:text-white">
              Cuenta
          </h4> 
          <a href="" class="text-teal-300 hover:text-white">Mi cuenta</a> <br>
          <a href="" class="text-teal-300 hover:text-white">Favoritos</a> <br>
          <a href="" class="text-teal-300 hover:text-white">Carrito</a>  <br>
          <a href="" class="text-teal-300 hover:text-white">Cerrar/Iniciar Sesión</a>
         </div>

        <div class="mb-5 ml-3 h-auto w-40">
          <h4 class="mb-2  sm:w-40 w-auto font-semibold text-teal-400 border-b mr-3 hover:text-white">
              Empresa
          </h4>
          <a href="" class="text-teal-300 hover:text-white">Envios</a> <br>
          <a href="" class="text-teal-300 hover:text-white">Metodos de pago</a>  <br>
          <a href="" class="  text-teal-300 hover:text-white">Politicas de garantía</a> 
        </div>
           
        <div class="mb-5 ml-3 h-auto w-40">
          <h4 class="mb-2   sm:w-40 w-auto font-semibold text-teal-400 border-b mr-3 hover:text-white">
            Redes 
          </h4>
            <ul class="mt-auto flex    hover:text-white">
              <li><a href=""><img class="w-12 rounded-full mx-1 mb-1" src=".src/imgs/Instagram_logo_2022.svg" alt=""></a></li>
              <li><a href=""><img class="w-12 rounded-full mx-1 mb-1" src=".src/imgs/Instagram_logo_2022.svg" alt=""></a></li>
              <li><a href=""><img class="w-12 rounded-full mx-1 mb-1" src=".src/imgs/Instagram_logo_2022.svg" alt=""></a></li>
            </ul>
        </div>
          
      </div>
                    
    </div>

  </footer>
      <div class="w-full h-5 bg-teal-500 items-center flex">
        &copy; Hello    
      </div>

 
 


  
    <script>
      function Menu(e){
        let list = document.querySelector('ul'); 
        e.name === 'menu' ? (e.name = "close",  list.classList.
        add('left-[25%]') , list.classList.add('opacity-100')) : 
        (e.name = "menu" , list.classList.
        remove('top-[25%]') , list.classList.remove('opacity-100'))
      }
    </script>
    <script src="app.js"></script>
    <script src="jquer.js"></script>
</body>
</html>

<!--npx tailwindcss -i ./src/input.css -o ./src/estilos.css --watch  -->






