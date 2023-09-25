<template>
    <header class="header flex justify-between items-center px-4 md:px-8 ">
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
  <h1 class="ml-60 ">Commandes</h1>
  <main class="flex flex-col md:flex-row bg-gray-100 h-auto ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <div class="sidebar bg-black w-full md:w-1/5 p-2 h-auto  md:mr-3 md:mr-3/5 mb-0  relative ">
    <header class="font-bold text-white mb-4">
      Bienvenue RTS!
    </header>
    <ul class="text-white">
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-user mr-2 ml-2"></i>
        <a href="MonProfil">Mon profil</a>
      </li>
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-cart-plus mr-2 ml-1"></i>
        <a href="Commandes">Commandes</a>
      </li>
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-file-invoice-dollar mr-2 ml-2"></i>
        <a href="Historique">Historique de factures</a>
      </li>
      <li class="menu-item flex items-center mb-4">
        <i class="fas fa-user-friends mr-2 ml-1"></i>
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
  
  
<div class=" w-full md:w-4/5 mt-10 mb-8  ml-auto mr-2 h-screen mb-1  p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
    <div class="flex items-center mb-4">
      <u><p class="mr-14 ml-2 mb-4">Tous Les états</p></u>
      
      <div class="search flex-grow ml-20 mt-0" >
           
       <input type="text" placeholder="Rechercher" class="p-2    border-none ml-64 mr-2/3" > 
       
      </div>
      
      
      
    </div>
    
    
 <table class="table w-full mb-8 ">
  <thead>
    <tr>
      <th scope="col" class="border p-4">NUMERO</th>
      <th scope="col" class="border p-4">DATE</th>
      <th scope="col" class="border p-4">ETAT</th>
      <th scope="col" class="border p-4">TYPE</th>
      <th scope="col" class="border p-4 ml-auto">MONTANT TTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border p-4">1052454</td>
      <td class="border p-4">10/05/2020</td>
      <td class="border p-4 text-[#34eb7d]">Términée</td>
      <td class="border p-4">Changement d'offre acan VOD</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    <tr>
      <td class="border p-4">1052254</td>
      <td class="border p-4">11/05/2020</td>
      <td class="border p-4">encours</td>
      <td class="border p-4">Commande des nouveaux service Fm</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    <tr>
      <td class="border p-4">1052654</td>
      <td class="border p-4">12/05/2020</td>
      <td class="border p-4 text-[#34eb7d]">Términée</td>
      <td class="border p-4">Changement d'offre aCAN Meet</td>
      <td class="border p-4">0fcfa</td>
    </tr>
    <tr>
      <td class="border p-4">1052754</td>
      <td class="border p-4">13/05/2020</td>
      <td class="border p-4">encours</td>
      <td class="border p-4">Changement d'offre aCAN AOD</td>
      <td class="border p-4">0fcfa</td>
    </tr>
     <tr>
      
    
    </tr>
   

  </tbody>
</table>
<div>
    <!-- Bouton Commander en dehors du tableau -->
    <button @click="openModal" class="bg-blue-500 text-white px-4 py-2 rounded">Commander</button>

    <!-- Modal pour les options -->
    <div v-if="modalVisible" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
      <div class="bg-white p-6 w-96 rounded-lg">
        <label for="typeOffre">Type d'offre:</label>
        <select v-model="selectedTypeOffre" id="typeOffre" class="border p-2 mb-4 w-full">
          <option value="Changement d'offre aCAN VOD">Changement d'offre aCAN VOD</option>
          <option value="Commande de nouveaux services My FM">Commande de nouveaux services My FM</option>
          <option value="Changement doffre aCAN Meet">Changement doffre aCAN Meet</option>
          <option value="Commande de nouveaux produits Go live">Commande de nouveaux produits Go live</option>
        </select>

        <label for="typePaiement">Mode de paiement:</label>
        <select v-model="selectedTypePaiement" id="typePaiement" class="border p-2 mb-4 w-full">
          <option value="PayPal">PayPal</option>
          <option value="Carte bancaire">Carte bancaire</option>
          <option value="Espèce">Espèce</option>
          <option value="Chèque">Chèque</option>
        </select>

        <button @click="validerCommande" class="bg-green-500 text-white px-4 py-2 rounded">Valider</button>
        <button @click="closeModal" class="bg-black text-white px-4 py-2 rounded ml-4">Annuler</button>
      </div>
  </div>

      
</div>
</div>



  </main>

  

</template>

<script>

export default {
  data() {
    return {
      modalVisible: false,
      selectedTypeOffre: '',
      selectedTypePaiement: ''
    };
  },
  methods: {
    openModal() {
      this.modalVisible = true;
    },
    closeModal() {
      this.modalVisible = false;
    },
    validerCommande() {
      // Envoyer les données sélectionnées au backend pour enregistrement dans la base de données
       const commande = {
        typeOffre: this.selectedTypeOffre,
         typePaiement: this.selectedTypePaiement
       };

       
      
      // Exemple d'appel au backend (à adapter à votre architecture)
       axios.post('/api/enregistrer-commande', commande)
        .then(response => {
           console.log(response.data);
           this.closeModal();
        })
         .catch(error => {
           console.error(error);
         });

      // Traitements locaux pour la validation de la commande
      // Par exemple, afficher un message de confirmation ou réinitialiser les sélections
      this.closeModal();
    }
  }
};

</script>


