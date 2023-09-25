
 <template>
  <header class="header flex justify-between  items-center px-4 md:px-8 top-fixed ">
    <div class="logo">
      <img src="images/Group (3).png" alt="Logo Acan" class="w-auto h-12 right-10">
    </div>
    <div class="search flex-grow ml-20">
      <input type="text" placeholder="Rechercher" class="p-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="logo-rts flex items-center">
       
      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="38"   fill="currentColor" class="bi bi-grid-3x3-gap mb-2 mt-4 mr-1 bg-[#88cc23] " viewBox="0 0 16 16">
       <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
      </svg>
      <img src="images/RTS2.png " alt="Logo RTS" class="w-auto h-12 right-8 mt-4">
     
    </div>
  </header>
  <hr>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <div class="flex">
    <div class="sidebar bg-black w-56 h-screen  top-16 bottom-0 left-0 p-4">
      <header class="font-bold text-white mb-4">
        Bienvenue RTS!
      </header>
      <ul class="text-white">
         <li class="menu-item  mr-2   mb-4">
            <i class="fas fa-user mr-2 ml-2"></i>
            <a href="/MonProfil">Mon profil</a>
          </li>
          <li class="menu-item     mb-4 ">
            <i class="fas fa-cart-plus mr-2 ml-1"></i>
            <a href="/Commandes" class="mr-4">Commandes</a>
          </li>
          <li class="menu-item   mb-4">
            <i class="fas fa-file-invoice-dollar mr-2 ml-2"></i>
            <a href="/Historique">Historique de factures</a>
          </li>
          <li class="menu-item flex items-center  mb-4">
            <i class="fas fa-user-friends mr-4 ml-2"></i>
            <a href="Gestion">Gestion des Utilisateurs</a>
          </li>
          <li class="menu-item flex items-center  mb-4">
            <i class="fas fa-envelope-open-text mr-4 ml-2"></i>
            <a href="Support">Support</a>
          </li>
          <li class="menu-item flex items-center  ">
            <a href="#"><i class="fas fa-chevron-right mr-2 ml-2"></i> Déconnexion</a>
          </li>
      </ul>
    </div>

    <div class="flex flex-col flex-grow ml-1 mr-2 p-4">
      <img src="images/pibi.png" class="w-full h-40 mx-auto mb-4" alt="Bannière">
      <div class="grid grid-cols-5 gap-4 mt-0 ml-2">
        <div class="rounded-lg border p-4 text-center mb-1 "   > 
          <svg  class="w-6 h-4  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
          </svg> 
          
            <img src="images/Group 591.png " class="ml-12  ">
            <p class="text-center  ml-2  ">aCAN VOD</p>
            <p class="text-center ml-20 text-xs text-[#078f1e] ">Abonné</p>
    
        </div>

        <div class="rounded-lg border p-4 text-center mb-1">
          <svg class="w-6 h-4 ml-2 text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
          </svg>
          <img src="images/Group 590 (1).png" class="ml-12 ">
          <p class="ml-2 mt-2">aCAN Pro</p>
          <p class="text-center ml-20 text-xs text-[#078f1e] ">Abonné</p>
          
        </div>
        <div class="rounded-lg border p-4 text-center mb-1">
          <svg class="w-6 h-4  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
          <img src="images/Group 592 (1).png" class="ml-12"><p class="ml-2 ">aCAN Lite</p>
        </div>
        <div class="rounded-lg border p-4 text-center">
          <svg class="w-6 h-4  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
          <img src="images/Group 597 (1).png" class="ml-12">
          <p class="ml-2 ">Go Live</p>
          <p class="text-center ml-20 text-xs text-[#078f1e] ">Abonné</p>
        </div>
        <div class="rounded-lg border p-4 text-center mb-1">
          <svg class="w-6 h-4  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
          <img src="images/Group 596 (3).png" class="ml-12">
           <p class="ml-2 ">aCAN AOD</p>
           <p class="text-center ml-20 text-xs text-[#078f1e] ">Abonné</p>
        </div>
      </div>
       
      <div class="grid grid-cols-5 gap-4 mt-8 ml-2 mb-2">
        <div class="rounded-lg border p-4 text-center mb-8 ">
          <svg class="w-6 h-4  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
          <img src="images/fm.png " class="ml-12"><p class="ml-2 ">My Fm</p>
        </div>
        <div class="rounded-lg border p-4 text-center mb-8">
          <svg class="w-6 h-4  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
          <img src="images/vector (1).png" class="ml-12">
           <p class="ml-2 ">aCAN Ads</p>
           <p class="text-center ml-20 text-xs text-[#f03747] ">Nouveau</p>
        </div>
        <div class="rounded-lg border p-4 text-center mb-8">
          <svg class="w-6 h-4  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
          <img src="images/Group (4).png" class="ml-12"> <p class="ml-2 ">aCAN Cloud</p>
        </div>
        <div class="rounded-lg border p-4 text-center mb-8">
          <svg class="w-6 h-4  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
          <img src="images/Group 598 (1).png" class="ml-12"> <p class="ml-2 mb-2 ">aCAN Meet</p>
        </div>
        <div class="rounded-lg border text-center mb-8">
          <svg class="w-6 h-4 mt-2  text-gray-800 dark:text-white ml-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
              <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
          <img src="images/Group 595 (1).png " class="ml-12 mt-4">
           <p class="ml-2 ">aCAN Mentor</p>
        </div>
        
      </div>
      
      
    </div>
  </div>

</template>

<script>
  


  
</script>




<style scoped>

</style>

