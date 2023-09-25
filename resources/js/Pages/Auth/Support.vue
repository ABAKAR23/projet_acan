<template>
    <header class="header flex justify-between items-center">
    <div class="logo">
      <img src="images/Group (3).png" alt="Logo Acan" class="w-auto h-12 right-10">
    </div>
    <div class="search flex-grow ml-20">
      <input type="text" placeholder="Rechercher" class="p-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
      
    </div>
    <div class="logo-rts flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="38"   fill="currentColor" class="bi bi-grid-3x3-gap mb-2 mt-1 mr-1 bg-[#88cc23] " viewBox="0 0 16 16">
       <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
      </svg>
      <img src="images/RTS2.png " alt="Logo RTS" class="w-auto h-12 right-8 mt-2">
      
      
    </div>
    </header>
    <hr>
    <main class="flex ml-auto h-full  bg-gray-100 ">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div class="sidebar bg-black w-96 p-4 h-screen mr-14 relative ">
      <header class="font-bold text-white mb-4">
        Bienvenue RTS!
      </header>
      <ul class="text-white">
        <li class="menu-item flex items-center mb-4">
          <i class="fas fa-user mr-2 ml-1"></i>
          <a href="/MonProfil">Mon profil</a>
        </li>
        <li class="menu-item flex items-center mb-4">
          <i class="fas fa-cart-plus mr-2 ml-0"></i>
          <a href="Commandes">Commandes</a>
        </li>
        <li class="menu-item flex items-center mb-4">
          <i class="fas fa-file-invoice-dollar mr-2 ml-1"></i>
          <a href="Historique">Historique de factures</a>
        </li>
        <li class="menu-item flex items-center mb-4">
          <i class="fas fa-user-friends mr-2"></i>
          <a href="Gestion">Gestion des Utilisateurs</a>
        </li>
        <li class="menu-item flex items-center left-0 w-full mb-4">
          <i class="fas fa-envelope-open-text mr-2 ml-1"></i>
          <a href="Support">Support</a>
        </li>
        <li class="logout absolute bottom-0 left-4 w-full">
          <a href="#"><i class="fas fa-chevron-right mr-2"></i> Déconnexion</a>
        </li>
      </ul>
    </div>
    
    <div class="border rounded-lg p-4 mt-2  h-84 mb-4  w-full mr-12  ml-3/5 bg-[#4aa832]">
        <div class="card-body">
    
          <h1 class="text-white ml-8">Contactez-Nous</h1>

          <div class="relative mt-2 ml-8">
            <svg class="absolute w-6 h-6 text-white z-0 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
            </svg>
            <a href="mailto:acan@acan.email" class="text-white pl-8 ml-2">acan@acan.email</a>
          </div>

          <div class="relative mt-2 ml-8">
            <svg class="absolute w-6 h-6  mr-2  text-white z-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z"/>
            </svg>
            <h3 class="text-white pl-8 ml-2">(+221)338420506</h3>
          </div>

          <div class="relative ml-8 mt-2">
             <svg class="absolute w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
             <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
             </svg>
             <a href="https://www.google.com/maps/place/KM1+Avenue+Cheikh+Anta+Diop,+immeuble+Barsalam+3ème+Etage+Porte+C-+BP+27286,+Dakar" target="_blank" class="text-white mt-4 pl-8">KM1 Avenue Cheikh Anta Diop,<br> immeuble Barsalam 3ème Etage Porte C- BP 27286 <br>Dakar</a>
         </div>

         <div class="relative ml-8">
            <svg class="absolute w-6 h-6 text-white z-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 19">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.013 7.962a3.519 3.519 0 0 0-4.975 0l-3.554 3.554a3.518 3.518 0 0 0 4.975 4.975l.461-.46m-.461-4.515a3.518 3.518 0 0 0 4.975 0l3.553-3.554a3.518 3.518 0 0 0-4.974-4.975L10.3 3.7"/>
            </svg>
            <p class="text-white mt-4 pl-8">pour plus d'information, Visitez notre plateforme Web</p>
          </div>
          <br>
           
        </div> 
        <hr > 
        <p class="text-white ml-8">Contactez nos equipes par chat, e-mail ou telephone</p>
        <p class="text-white ml-8">Besoin d'aide? Nous sommes là pour vous</p>
        <div class="flex items-center ml-auto">
          <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 ml-8  mt-2 mb-2">Contacter le support</button>  
        </div>
        
        <hr class="">
        <div class="flex items-center">
           <p class="mr-8 ml-4 text-white">Tiket .  </p> <h3 class="text-white">Centrale ouverte</h3>
          <p class="ml-32 text-white">Appel .</p> <h4 class="text-white ml-2">Centrale ouverte </h4>
      
        </div>
        <div class="flex items-center">
          <p class="mr-8 ml-4 text-white">7j/7</p><h5 class="text-white">de 08h00 à 18h00</h5>
          <p class="mr-8 ml-32 text-white">5j/7</p><h6 class="text-white">de 08h00 à 18h00</h6>
        </div>
        <div class="flex items-center">
          <p class="mr-8 ml-4 text-white">Temps de réponse dans les meilleurs delais</p><h5 class="text-white">Temps d'attente estimé: 9minutes</h5>
          
        </div>

    </div>
    
    </main>

   

    
</template>