<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad Viera</title>
    <link rel="stylesheet" href="./src/estilos.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body class="mx-10" >

  <header class="px-3     lg:p-auto lg:m-auto h-20 rounded bg-teal-800 md:flex  md:items-center md:justify-between ">

    <div class="flex justify-between items-center pl-0 lg:pl-20">
      <span class="text-xl md:text-2xl  font-Bold">
        <img class="h-16 inline" src="imgs/Logo.png" alt="">
        Ropa de seguridad Viera
      </span>

      <!-- <span class=" text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"> </ion-icon>
      </span> -->
    </div>
    

       <ul class="flex items-center justify-center"  >
          <li class="mx-1 ml-5  lg:mx-3 text-center  my-5 md:my-0"> 
           <a href="#" class="text-lg text-center  hover:text-cyan-300 duration-200">Inicio</a>
          </li>

          <li class="mx-1  lg:mx-3 text-center  my-5 md:my-0">
            <a href="#" class="text-lg  hover:text-cyan-300 duration-200">Contacto</a>
          </li >

          <li class="mx-1  lg:mx-3 text-center  my-5 md:my-0">
            <a href="#" class="textlg  hover:text-cyan-300 duration-200">Nosotros</a>
          </li>

          <li class="mx-1  lg:mx-3 text-center  my-5 md:my-0">
            <a href="./segunda_ent/dise/loginSigin.php" class="bg-cyan-500  text-white font-semibold duration-500 px-4 py-1
                mx-3 hover:bg-cyan-500 rounded ">
              iniciar sesion
            </a>
          </li>
          

   
        </ul>
      
   
    
  </header>


  <div x-data="{ open: false }">
    <button class="flex md:hidden" @click="open = true"><ion-icon name="menu"> </ion-icon></button>
    <span >
      <nav class="mt-2">
        <div class="  flex justify-center  id="menuCategorias">
          <ul x-show="open" class=" hidden md:flex  items-center bg-slate-800 rounded">
            <li><a href=""><img class="h-12 px-5 m-2 mt-2" src="imgs/casco.png" alt=""><p class="flex text-white justify-center">Cascos</p></a></li>
            <li><a href=""><img class="h-12 px-5 m-2 mt-2" src="imgs/Chaleco.png" alt=""><p class="flex text-white justify-center">Chalecos</p></a></li>
            <li><a href=""><img class="h-12 px-5 m-2 mt-2" src="imgs/Uniforme.png" alt=""><p class="flex text-white justify-center">Uniformes</p></a></li>
            <li><input class="h-6" type="text"></li>
            <li><img class="h-6 p-1 border"src="imgs/Lupa2.png" alt=""></li>            
            <li><a href=""><img class="h-12 px-5 m-2 mt-2" src="imgs/Combos.png" alt=""><p class="flex text-white justify-center">Combos</p></a></li>
            <li><a href=""><img class="h-14 px-5 m-2 mt-2" src="imgs/Ofertas.png" alt=""><p class="flex text-white justify-center">Ofertas</p></a></li>
            <li><a href=""><img class="h-12 px-5 m-2 mt-2" src="imgs/Botas.png" alt=""><p class="flex text-white justify-center">Botas</p></a></li>


          </ul>
        </div>
      </span>
   </nav> 
  </div>
  
  <!-- <div class="flex relative ml-3 flex-row-reverse">
    <div>
      <button type="button" class="felx  rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
        <span class="sr-only">Open user menu</span>
        <ion-icon name="menu" onclick="Menu(this)"> </ion-icon>

      </button>
    </div>

    <div class="absolute   mt-8 w-auto origin-top-right rounded-md bg-red-900 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
     <ul class="flex flex-col justify-center py-5">
      <li><a href=""><img class="h-10 my-2" src="imgs/casco.png" alt=""></a></li>
      <li><a href=""><img class="h-10 my-2" src="imgs/Chaleco.png" alt=""></a></li>        
      <li><a href=""><img class="h-10 my-2" src="imgs/Uniforme.png" alt=""></a></li>
      <li><a href=""><img class="h-10 my-2" src="imgs/Ofertas.png" alt=""></a></li>        
      <li><a href=""><img class="h-10 my-2" src="imgs/Combos.png" alt=""></a></li>
      <li><a href=""><img class="h-10 my-2" src="imgs/Botas.png" alt=""></a></li>
     </ul>
    </div>
  </div> -->






    
    
    <div class="flex  my-10 ">

      <div class=" mx-4 lg:mx-8 pr-5 lg:pr-14 border-r border-gray-400 flex-row">
        <div class="flex flex-grow">
          <ul class="flex-col text-center  mx-auto ">

          <li class=" p-1 w-44 rounded-md mt-2  bg-buenas"><a href="">Categorias</a></li>

  
          </ul>
        </div>
        
       
      </div>
      
      <div class="Contenido border-b border-red-900 py-5 mr-5 flex h-screen w-auto">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 place-items-center 
        py-5    flex-grow rounded ">


        <div class="  h-64 w-48 bg-slate-900 mb-5 rounded">

        </div>

        <div class="  h-64 w-48 bg-slate-900 mb-5 rounded">

        </div>

        <div class="  h-64 w-48 bg-slate-900 mb-5 rounded">

        </div>

        <div class="  h-64 w-48 bg-slate-900 mb-5 rounded">

        </div>

        <div class="  h-64 w-48 bg-slate-900 mb-5 rounded">

        </div>



        <div class="  h-64 w-48 bg-slate-900 mb-5 rounded">

        </div>

        <div class="  h-64 w-48 bg-slate-900 mb-5 rounded">

        </div>

        <div class="  h-64 w-48 bg-slate-900 mb-5 rounded">

        </div>







</div>
       

      </div>

    </div>
    
   
  
    <footer class="flex h-auto ">
      

        <div class=" md:pl-0 grid grid-cols-1 md:grid-cols-3    w-full bg-teal-900">

          <div class="flex col-span-1  sm:col-span-3   justify-center  items-center">
            <!-- quiero que no se achique -->
            <img class="h-28  lg:h-32 inline  " src="imgs/Logo.png" alt="">
            <span class="font-semibold  text-2xl text-white tracking-tight">
              Ropa de Seguridad
            </span>
          </div>

          <div class="mb-5   sm:mt-0 mt-10 md:mt-0 m-auto p-auto h-44 ">
            <h4 class="mb-2 md:pt-14 sm:w-40 w-auto font-semibold text-teal-400 border-b mr-3 hover:text-white">
              Cuenta
            </h4> 
            <a href="" class=" text-teal-300 hover:text-white">Mi cuenta</a> <br>
            <a href="" class=" text-teal-300 hover:text-white">Favoritos</a> <br>
            <a href="" class=" text-teal-300 hover:text-white">Carrito</a>  <br>
            <a href="" class=" text-teal-300 hover:text-white">Cerrar/Iniciar Sesión</a>
          </div>

          <div class="mb-5  sm:mt-0 mt-10 md:mt-0 m-auto p-auto h-44 ">
            <h4 class="mb-2 md:pt-14 sm:w-40 w-auto font-semibold text-teal-400 border-b mr-3 hover:text-white">
              Empresa
            </h4>
            <a href="" class=" text-teal-300 hover:text-white">Envios</a> <br>
            <a href="" class=" text-teal-300 hover:text-white">Metodos de pago</a>  <br>
            <a href="" class=" text-teal-300 hover:text-white">Politicas de garantía</a> 
          </div>
           
          <div class="mb-5  sm:mt-0 mt-10 md:mt-0 m-auto p-auto h-44  ">
            <h4 class="mb-2 md:pt-14 sm:w-40 w-auto font-semibold text-teal-400 border-b mr-3 hover:text-white">
              Redes y contactos
              </h4>
              <ul class="mt-auto flex justify-center hover:text-white">
    
                <li><a href=""><img class="w-12 rounded-full mx-2 mb-1" src="imgs/Instagram_logo_2022.svg" alt=""></a></li>
                <li><a href=""><img class="w-12 rounded-full mx-2 mb-1" src="imgs/Instagram_logo_2022.svg" alt=""></a></li>
                <li><a href=""><img class="w-12 rounded-full mx-2 mb-1" src="imgs/Instagram_logo_2022.svg" alt=""></a></li>
      
              </ul>
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

      <h2 class="text-2xl flex  mx-auto ">Cuenta</h2> 