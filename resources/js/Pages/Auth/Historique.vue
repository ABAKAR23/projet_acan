<template>
    <header class="header flex justify-between items-center ">
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
  <h1 class="ml-60 ">Historique des factures</h1>
  <main class="flex  bg-gray-100 h-auto ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <div class="sidebar bg-black w-1/5 p-2 h-auto  mr-30 mr-3/5 mb-0  relative ">
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
        <a href="/Commandes">Commandes</a>
      </li>
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-file-invoice-dollar mr-2 ml-1"></i>
        <a href="Historique">Historique de factures</a>
      </li>
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-user-friends mr-2 ml-0"></i>
        <a href="Gestion">Gestion des Utilisateurs</a>
      </li>
      <li class="menu-item flex items-center left-0 w-full mb-4">
        <i class="fas fa-envelope-open-text mr-2 ml-0"></i>
        <a href="Support">Support</a>
      </li>
      <li class="logout absolute bottom-0 left-4 w-full">
        <a href="#"><i class="fas fa-chevron-right mr-2"></i> Déconnexion</a>
      </li>
    </ul>
  </div>
 
  
<div class="w-3/2 mt-10 mb-8 ml-auto mr-auto h-screen mb-1/3  p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
    
    <div class="flex items-center mb-4">
      <u><p class="mr-14 ml-2 mb-4">Tous Les états</p></u>
      
      <div class="search flex-grow ml-20 mt-0" >
           
       <input type="text" placeholder="Rechercher" class="p-2    border-none ml-64 mr-2/3" > 
       
      </div>
      
      
      
    </div>
    
    
    <table class="table w-full mb-2 mt-1/2 h-30 ">
  <thead class="h-1">
    <tr>
      <th scope="col" class="border p-4">NUMERO</th>
      <th scope="col" class="border p-4">EMISSION</th>
      <th scope="col" class="border p-4">ETAT</th>
      <th scope="col" class="border p-4">MODE  DE PAIEMENT</th>
      <th scope="col" class="border p-4 ml-auto">PAIEMENT</th>
      <th scope="col" class="border p-4">MONTANT TTC</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border p-4">1052454</td>
      <td class="border p-4">10/05/2020</td>
      <td class="border p-4 text-[#34eb7d]">Payé</td>
      <td class="border p-4">paypal</td>
      <td class="border p-4">1052454</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    <tr>
      <td class="border p-4">1052254</td>
      <td class="border p-4">11/05/2020</td>
      <td class="border p-4 text-[#34eb7d]">payé</td>
      <td class="border p-4">Carte bancaire</td>
      <td class="border p-4">11/05/2020</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    <tr>
      <td class="border p-4">1052654</td>
      <td class="border p-4">12/05/2020</td>
      <td class="border p-4 text-[#34eb7d]">Payé</td>
      <td class="border p-4">chéque</td>
      <td class="border p-4">12/05/2020</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    <tr>
      <td class="border p-4">1052754</td>
      <td class="border p-4">13/05/2020</td>
      <td class="border p-4 text-[#34eb7d]">payé</td>
      <td class="border p-4">Chéque</td>
      <td class="border p-4">13/05/2020</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    <tr>
      <td class="border p-4">1052854</td>
      <td class="border p-4">14/05/2020</td>
      <td class="border p-4 text-[#34eb7d]">payé</td>
      <td class="border p-4">Chéque</td>
      <td class="border p-4">14/05/2020</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    <tr>
      <td class="border p-4">1052954</td>
      <td class="border p-4">15/05/2020</td>
      <td class="border p-4 text-[#34eb7d]">payé</td>
      <td class="border p-4">Chéque</td>
      <td class="border p-4">15/05/2020</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    
   

  </tbody>
</table>

    
    
     

    
      
</div>


    


  

  </main>

</template>