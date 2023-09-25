<template>
    <header class="header flex justify-between items-center px-4 md:px-8">
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
  <main class="flex flex-col md:flex-row ml-auto bg-gray-100 h-auto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <div class="sidebar bg-black w-full md:w-1/5 p-2 h-screen md:mr-3 md:mb-0 relative ">
    <header class="font-bold text-white mb-4">
      Bienvenue RTS!
    </header>
    <ul class="text-white">
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-user mr-2 ml-3"></i>
        <a href="/MonProfil">Mon profil</a>
      </li>
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-cart-plus mr-2 ml-2"></i>
        <a href="Commandes">Commandes</a>
      </li>
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-file-invoice-dollar mr-2 ml-3"></i>
        <a href="Historique">Historique de factures</a>
      </li>
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-user-friends mr-2 ml-2"></i>
        <a href="Gestion">Gestion des Utilisateurs</a>
      </li>
      <li class="menu-item flex items-center left-0 w-full mb-4">
        <i class="fas fa-envelope-open-text mr-2 ml-2"></i>
        <a href="Support">Support</a>
      </li>
      <li class="logout absolute bottom-0 left-4 w-full">
        <a href="#"><i class="fas fa-chevron-right mr-2"></i> Déconnexion</a>
      </li>
    </ul>
  </div>
  
<div class="bg-white rounded-lg shadow-md p-4 mb-96 mt-2 flex items-center">
    <p class="font-semibold flex-grow">Nom :</p>
    <p class="font-semibold flex-grow">Prénom : </p>
    <p class="font-semibold flex-grow">Adresse e-mail : </p>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
        Modifier
    </button>
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
        Supprimer
    </button>
</div>



  </main>
</template>