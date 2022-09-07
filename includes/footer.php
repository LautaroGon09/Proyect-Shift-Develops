</div>
  </div>
    
   
  
  <footer class="flex h-auto ">
    
    <div class="grid  w-full bg-teal-900">

      <div class="flex  justify-center  items-center">
        <img class="h-20  md:h-28 inline  " src="../src/imgs/Logo.png" alt="">
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
              <li><a href=""><img class="w-12 rounded-full mx-1 mb-1" src=../src/imgs/Instagram_logo_2022.svg" alt=""></a></li>
              <li><a href=""><img class="w-12 rounded-full mx-1 mb-1" src="imgs/Instagram_logo_2022.svg" alt=""></a></li>
              <li><a href=""><img class="w-12 rounded-full mx-1 mb-1" src="imgs/Instagram_logo_2022.svg" alt=""></a></li>
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
