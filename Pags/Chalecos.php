<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad Viera</title>
    <link rel="stylesheet" href="../src/estilos.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" type="imgs" href="./imgs/favicon.png.png">
</head>
<body class="" >


  

  <header class="flex items-center justify-center flex-wrap bg-blue-900 rounded ">

    <div class="flex items-center flex-shrink-0 text-white mx-10 ">
      <img class="h-14 inline" src="../src/imgs/Logo.png" alt="">
      <span class="text-base sm:text-lg md:tex-2xl  font-semibold"> Ropa de seguridad Viera</span>

    </div><link rel="stylesheet" href="">
    <div class="block ml-16 sm:ml-52 md:ml-0 md:hidden ">
      <button id='boton' class="flex  items-center  px-3 py-2 md:mr-5 border 
      rounded text-white font-semibold border-whiteS hover:text-white
       hover:border-white md:hidden">
       <ion-icon name="menu"></ion-icon>
      </button>

    </div>
    <div id="menu" class="w-full mt-5 hidden flex-grow md:flex md:items-center md:w-auto text-end mr-10">
      <div  class="text-md md:flex-grow text-center items-cenetr mb-5  md:text-end justify-center items-cenetr ">

        <a href="#responsive-header" class="block w-full md:w-auto mt-4 md:inline-block md:mt-0 text-white hover:text-white mr-4">
          Inicio
        </a>
        <a href="#responsive-header" class="block w-full md:w-auto mt-4 md:inline-block md:mt-0 text-white hover:text-white mr-4">
          Contacto
        </a>
        <a href="" class="block w-full md:w-auto mt-4 md:inline-block md:mt-0 text-white hover:text-white">
          Nosotros
        </a>
        <a href="../segunda_ent/negocio/usuario/login.php" class="block w-full md:w-auto mt-4 md:inline-block md:mt-0 text-white hover:text-white">
          iniciar sesion
        </a>  
      </div>
      
    </div>

   
      
   
    
  </header>

  
      <nav class="mt-2 hidden md:flex md:justify-center">
        <div class="  flex justify-center  id="menuCategorias">
          <ul x-show="open" class=" hidden md:flex  items-center bg-slate-800 rounded">
            <li><a href="../Pags/Cascos.php"><img class="h-10 px-5 m-2 mt-2" src="../src/imgs/casco.png" alt=""><p class="flex text-white justify-center">Cascos</p></a></li>
            <li><a href="../Pags/Chalecos.php"><img class="h-10 px-5 m-2 mt-2" src="../src/imgs/Chaleco.png" alt=""><p class="flex text-white justify-center">Chalecos</p></a></li>
            <li><a href="../Pags/Uniformes.php"><img class="h-10 px-5 m-2 mt-2" src="../src/imgs/Uniforme.png" alt=""><p class="flex text-white justify-center">Uniformes</p></a></li>
            <li><input class="h-6" type="text"></li>
            <li><img class="h-6 p-1 border"src="imgs/Lupa2.png" alt=""></li>            
            <li><a href="../Pags/Combos.php"><img class="h-11 px-5 m-2 mt-2" src="../src/imgs/Combos.png" alt=""><p class="flex text-white justify-center">Combos</p></a></li>
            <li><a href="../Pags/Ofertas.php"><img class="h-11 px-5 m-2 mt-2" src="../src/imgs/Ofertas.png" alt=""><p class="flex text-white justify-center">Ofertas</p></a></li>
            <li><a href=../Pags/Botas.php""><img class="h-10 px-5 m-2 mt-2" src="../src/imgs/Botas.png" alt=""><p class="flex text-white justify-center">Botas</p></a></li>


          </ul>
        </div>
      </nav> 
  

  
  
 






    
    
    <div class="flex mb-10">
     
      
      
      <div  class=" flex-col md:hidden absolute my-3 lg:left-0 w-full mr-5
                   overflow-y-auto text-center bg-slate-800 rounded h-auto mb-10">
        <button id="boton2" class=" flex my-3 m-auto">
          <span class=" text-white text-4xl  left-4 cursor-pointer md:hidden" >
            <i class="bi bi-filter-left px-2 left-4 cursor-pointer rounded-md"></i>
          </span>
        </button> 

        <div id="menu2" class="flex-col">
          <div class="text-gray-100  text-xl">
            <div class="p-2.5  flex items-center">
            </div> 
          </div>
          <div class="p-2.5 mt-3 flex items rounded-md px-4 duration-300
                      cursor-pointer bg-gray-700 text-white">
            <i class="bi bi-search font-bold text-sm " ></i>        
            <input type="text" class="text-[15px] ml-4 w-full bg-transparent
                focus:outline-none" placeholder="Buscar...">    
          </div>
          
          <div class="p-2.5  flex items-center justify-between rounded-md px-4 duration-300
                      cursor-pointer hover:bg-blue-700 text-white" >
                      <a href="../Pags/Cascos.php"><img class="h-6 m-2 p-auto inline" src="../src/imgs/casco.png" alt=""></a>  
                      <p class=" m-auto p-auto text-sm md:text-lg text-white justify-between">Cascos</p>
                    <span class="text-sm m-auto p-auto" id="arrow">
                       <i class="bi bi-chevron-down"></i>    
                    </span>
          </div>
          
  
          <div class="p-2.5  flex items rounded-md px-4 duration-300
                      cursor-pointer hover:bg-blue-700 text-white">
                      <a href="../Pags/Chalecos.php"><img class="h-6 m-2 p-auto inline" src="../src/imgs/Chaleco.png" alt=""></a>  
                      <p class=" m-auto p-auto text-sm md:text-lg text-white justify-between">Chalecos</p>        
                      <span class="text-sm m-auto p-auto" id="arrow">
                        <i class="bi bi-chevron-down"></i>    
                     </span>
          </div>
          <div class="p-2.5  flex items rounded-md px-4 duration-300
                      cursor-pointer hover:bg-blue-700 text-white">
                      <a href="../Pags/Uniformes.php"><img class="h-6 m-2 p-auto inline" src="../src/imgs/Uniforme.png" alt=""></a>  
                      <p class=" m-auto p-auto text-sm md:text-lg text-white justify-between">Uniformes</p>        
                      <span class="text-sm m-auto p-auto" id="arrow">
                        <i class="bi bi-chevron-down"></i>    
                     </span>
          </div>
          <div class="p-2.5  flex items rounded-md px-4 duration-300
                      cursor-pointer hover:bg-blue-700 text-white">
                      <a href="../Pags/Botas.php"><img class="h-6 m-2 p-auto inline" src="../src/imgs/Botas.png" alt=""></a>  
                      <p class=" m-auto p-auto text-sm md:text-lg text-white justify-center">Botas</p>        
                      <span class="text-sm m-auto p-auto" id="arrow">
                        <i class="bi bi-chevron-down"></i>    
                     </span>
          </div>
          <div class="p-2.5  flex items rounded-md px-4 duration-300
                      cursor-pointer hover:bg-blue-700 text-white">
                      <a href=""><img class="h-7 m-2 p-auto inline" src="imgs/Ofertas.png" alt=""></a>  
                      <p class=" m-auto p-auto text-sm md:text-lg text-white justify-between">Ofertas</p>        
                      <span class="text-sm m-auto p-auto" id="arrow">
                        <i class="bi bi-chevron-down"></i>    
                     </span>
          </div>
          <div class="p-2.5  flex items-center justify-between rounded-md px-4 duration-300
                      cursor-pointer hover:bg-blue-700 text-white">
                      <a href="../Pags/Combos.php"><img class="h-7 m-2 p-auto inline" src="../src/imgs/Combos.png" alt=""></a>  
                      <p class=" m-auto p-auto text-sm md:text-lg text-white justify-between">Combos</p>        
                      <span class="text-sm m-auto p-auto" id="arrow">
                        <i class="bi bi-chevron-down"></i>    
                     </span>
          </div>
  
        </div>           
                 

      </div>



      
        
        
       
      
      
      
        <div class="flex flex-col w-full">
          <div class="flex  w-full mt-20">
            <h2 class="text-lg md:text-3xl mx-auto pb-10  w-full text-center border-b border-gray-300">Chalecos</h2>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 place-items-center 
          py-5  border-b border-gray-400 flex-grow rounded ">

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
      <div class="flex flex-col w-full bg-blue-900 rounded">

        <div class="contFoot ">
          <div class=" md:pl-0 grid grid-cols-1 md:grid-cols-3    w-full ">

            <div class="flex col-span-1  sm:col-span-3   justify-center  items-center">
              <!-- quiero que no se achique -->
              <img class="h-28  lg:h-32 inline" src="../src/imgs/Logo.png" alt="">
              <span class="font-semibold  text-2xl text-white tracking-tight">
                Ropa de Seguridad
              </span>
            </div>
  
            <div class="mb-5   sm:mt-0 mt-10 md:mt-0 m-auto p-auto h-44 ">
              <h4 class="mb-2 md:pt-14 sm:w-40 w-auto font-semibold border-b mr-3 text-white">
                Cuenta
              </h4> 
              <a href="" class="text-white">Mi cuenta</a> <br>
              <a href="" class="text-white">Favoritos</a> <br>
              <a href="" class="text-white">Carrito</a>  <br>
              <a href="" class="text-white">Cerrar/Iniciar Sesión</a>
            </div>
  
            <div class="mb-5  sm:mt-0 mt-10 md:mt-0 m-auto p-auto h-44 ">
              <h4 class="mb-2 md:pt-14 sm:w-40 w-auto font-semibold border-b mr-3 text-white">
                Empresa
              </h4>
              <a href="" class="text-white">Envios</a> <br>
              <a href="" class="text-white">Metodos de pago</a>  <br>
              <a href="" class="text-white">Politicas de garantía</a> 
            </div>
             
            <div class="mb-5  sm:mt-0 mt-10 md:mt-0 m-auto p-auto h-44  ">
              <h4 class="mb-2 md:pt-14 sm:w-40 w-auto font-semibold text-white border-b mr-3 ">
                Redes y contactos
                </h4>
                <ul class="mt-auto flex justify-center hover:text-white">
      
                  <li><a href=""><img class="w-12 rounded-full mx-2 mb-1" src="../src/imgs/Instagram_logo_2022.svg" alt=""></a></li>
                  <li><a href=""><img class="w-12 rounded-full mx-2 mb-1" src="../src/imgs/Instagram_logo_2022.svg" alt=""></a></li>
                  <li><a href=""><img class="w-12 rounded-full mx-2 mb-1" src="../src/imgs/Instagram_logo_2022.svg" alt=""></a></li>
        
                </ul>
              </div>
  
              
                       
          </div>
          <div class="w-full h-5 my-1 ">
            &copy; Copyrigth
         </div>
        </div>



      </div>

       
      
    </footer>
   

 
 


  
  
    <script src="../src/app.js"></script>
    <script src="../src/jquer.js"></script>
    
</body>
</html>


<!--<npx tailwindcss -i ./src/input.css -o ./src/estilos.css --watch>  -->
