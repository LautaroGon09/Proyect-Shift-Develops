<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad Viera</title>
    <link rel="stylesheet" href="../../src/estilos.css">    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body class="" >

  <header class="px-3  py-auto   lg:p-auto lg:m-auto h-24 rounded bg-teal-800 md:flex   md:justify-between ">

    <div class="flex justify-between items-center pl-0 lg:pl-20">
      <span class="text-base md:text-lg lg:text-2xl font-Bold">
        <img class="h-20 inline" src="imgs/Logo.png" alt="">
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
        <a href="../segunda_ent/negocio/login.php" class="text-lg hover:text-cyan-300 duration-200">Nosotros</a>
      </li>

      <li class="mx-1   text-center  my-5 md:my-0">
        <a href="../segunda_ent/negocio/login.php" class="bg-cyan-500 inline text-white font-semibold duration-500  py-1
                          px-2 hover:bg-cyan-500 rounded ">iniciar sesion </a>
      </li>
   
    </ul>
     
  </header>

  <nav class="mt-2">
          <div class="  flex justify-center" id="menuCategorias">
            <ul class="flex w-auto items-center bg-slate-800 rounded">
              <li><a href=""><img class="h-12 px-10" src="imgs/casco.png" alt=""></a></li>
              <li><a href=""><img class="h-12 px-5" src="imgs/Chaleco.png" alt=""></a></li>        
              <li><a href=""><img class="h-12 px-5" src="imgs/Uniforme.png" alt=""></a></li>
              <li><input class="h-6" type="text"></li>
              <li><img class="h-6 p-1 border"src="imgs/Lupa2.png" alt=""></li>
              <li><a href=""><img class="h-12 px-5" src="../imgs/Ofertas.png" alt=""></a></li>        
              <li><a href=""><img class="h-12 px-5" src="imgs/Combos.png" alt=""></a></li>
              <li><a href=""><img class="h-12 px-5" src="imgs/Botas.png" alt=""></a></li>
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
      
    <div class="Contenido border-b border-red-900 py-5 mr-5 w-full flex h-screen">