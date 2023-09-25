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
  <h1 class="ml-60 ">Mon Profil</h1>
  <main class="flex flex-col md:flex-row ml-auto bg-gray-100 "> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <div class="sidebar bg-black w-1/5 p-2 h-29 mr-30 relative ">
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
  
  
  
  
  <div class=" w-full md:w-1/5  h-82 md:mt-12  md:mb-12 ml-auto mr-auto     md:bg-white md:rounded-x2 md:shadow-md md:overflow-hidden">
    <div class="bg-gray-300 h-18 flex items-center justify-center">
    <!-- Insérez ici l'image de RTS -->
       <img src="images/RTS2.png" class="mt-4" alt="Logo RTS">
    </div>
  
    <div class="flex items-center justify-center">
      <p class="mt-2 mr-10">Mes Comptes Clients</p>
    
    </div>
    <div class="flex items-center">
      
      <a role="button" href="#" class="bg-[#88cc23] px-2 py-0 ml-4 h-6 mb-2 rounded-lg">RTS</a> 
      <button class="bg-gray-200 px-2 py-0 h-6 mb-2 ml-1 rounded-lg mr-2">+</button>
    </div>
    <div class="flex items-center">
      <p class="mr-14 ml-4">Langue</p> 
      <p class="ml-4">Pays</p>
      
    </div>

    <div class="flex items-center">
      <p class="mr-14 ml-4">Francais</p> 
      <p class="ml-4">sénégal</p>
      
    </div>
    <div class="flex items-center">
      <p class=" ml-4">Fusseau horaire</p> 
      
      
    </div>
    <div class="flex items-center">
      
      <p class="ml-4">Afrique/sénégal</p>
      
    </div>
    <div class="flex items-center">
      <button type="button"  class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 ml-2 mt-16" @click="showEditModal = true">Modifier</button>
    </div>

    <!-- Modal pour la modification des options -->
    <div v-if="showEditModal" class="fixed inset-0 z-50 flex items-center justify-center">
      <div class="modal-overlay absolute inset-0 bg-black opacity-25"></div>
      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
          <h2 class="text-lg font-semibold mb-4">Modifier les options</h2>
          <!-- Option de choix du pays -->
          <label class="block mb-2">Choix du pays</label>
          <select class="w-full bg-gray-100 px-3 py-2 rounded focus:outline-none focus:ring">
            <option value="fr">France</option>
            <option value="us">États-Unis</option>
            <option value="TD">Tchad</option>

            <!-- Ajoutez d'autres options de pays ici -->
          </select>

          <!-- Option de choix de la langue -->
          <label class="block mt-4 mb-2">Choix de la langue</label>
          <select class="w-full bg-gray-100 px-3 py-2 rounded focus:outline-none focus:ring">
            <option value="fr">Français</option>
            <option value="en">Anglais</option>
            <option value="en">Arabe</option>

            <!-- Ajoutez d'autres options de langue ici -->
          </select>

          <!-- Option de choix du fuseau horaire -->
          <label class="block mt-4 mb-2">Choix du fuseau horaire</label>
          <select class="w-full bg-gray-100 px-3 py-2 rounded focus:outline-none focus:ring">
            <option value="gmt">GMT</option>
            <option value="est">EST</option>
            <!-- Ajoutez d'autres options de fuseau horaire ici -->
          </select>

          <button
            @click="showEditModal = false"
            class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold px-4 py-2 rounded mt-4 focus:outline-none focus:ring"
          >
            Fermer
          </button>
        </div>
      </div>
    </div>
  </div>

    


  



  <div class=" w-full md:w-1/2  md:h-84 ml-auto mr-auto md:mt-10 md:mb-12 md:bg-white md:rounded-x2 md:shadow-md md:overflow-hidden">
  <div class="p-6">
    <div class="flex items-center">
      <p class="">sécurité:</p> 
      <p class="text-[#129409]">forte</p>
      <a role="button" href="#" class="bg-[#88cc23] px-2 py-1 ml-auto mb-2 rounded-lg" @click="showPasswordRequirementsModal = true">VERIFIER</a>
    </div>

    <div
      v-if="showPasswordRequirementsModal"
      class="fixed inset-0 z-50 flex items-center justify-center"
    >
      <div class="modal-overlay absolute inset-0 bg-black opacity-25"></div>
      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
          <h2 class="text-lg font-semibold mb-4">Exigences du mot de passe</h2>
          <p>Votre mot de passe doit contenir :</p>
          <ul class="list-disc pl-6 mt-2">
            <li>Au moins 8 caractères</li>
            <li>Des caractères spéciaux</li>
            <li>Des chiffres</li>
            <li>Des majuscules et des minuscules</li>
          </ul>
          <button
            @click="showPasswordRequirementsModal = false"
            class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold px-4 py-2 rounded mt-4 focus:outline-none focus:ring"
          >
            Fermer
          </button>
        </div>
      </div>
    </div>
  


    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
     <div class="bg-green-600 h-2.5 rounded-full" style="width: 85%"></div>
    </div>
    <div class="flex items-center">
      <p class="mr-16">Email de connexion</p> 
      <p class="ml-2">Mot de passe de connexion</p>
      
    </div>
    <div class="flex items-center">
      <p class="mr-16">rtsnationale@rts.sn</p> <br>
      <p class="ml-2 mt-0">Dériere Modification:25/07/2023</p>
      
    </div>
    <div class="flex items-center">
       <button @click="openModal1" class="modal-button1 text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 ml-2 mt-2 mb-2">Modifier</button> 
       <button @click="openModal2" class="modal-button2 text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr- ml-24 mt-2 mb-2">Modifier</button>
    </div>

<!-- Modal 1 -->
  <div v-if="showModal1" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
   <div class="bg-white p-4 w-96 rounded-lg">
    <label for="email">Votre ancien e-mail :</label>
    <input v-model="email" type="email" id="email" class="border p-2 mb-4 w-full">

    <label for="motDePasse">Nouvel e-mail :</label>
    <input v-model="motDePasse" type="password" id="motDePasse" class="border p-2 mb-4 w-full">

    <button @click="validerModal1" class="bg-green-500 text-white px-4 py-2 rounded">Confirmer</button>
    <!-- Contenu du premier modal (options email, mot de passe de récupération) -->
    <!-- ... -->
       <button @click="closeModal1" class="bg-red-500 text-white px-4 py-2 rounded ml-4">Annuler</button>
   </div>
  </div>





    
    <hr class="h-1">
    <div class="flex items-center">
      <p class="mr-16 mt-2">Télephone portable</p> 
      <p class="ml-2">Email de recuperation</p>
      
    </div>
    <div class="flex items-center">
      <p class="mr-16">+221774572018</p>  
       <p class="ml-10">laskaridial@gmail.com</p>
      
    </div>
    <div class="flex items-center">
      <button @click="openModifyModal('Ancien numéro', 'Nouveau numéro')" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 ml-2  mt-2 mb-2">Modifier</button>
      
      <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 ml-24  mt-2 mb-2">Modifier</button>  
      
    </div>

     <div v-if="isModifyModalOpen" class="fixed inset-0 flex items-center justify-center z-50">
      <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-semibold mb-2">Modifier le numéro de téléphone</h2>
        <form @submit.prevent="submitForm">
          <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2" for="oldNumberInput">Ancien numéro</label>
            <input v-model="oldNumber" id="oldNumberInput" type="text" class="border rounded-lg w-full p-2" />
          </div>
          <div class="mb-4">
            <label class="block text-gray-600 font-medium mb-2" for="newNumberInput">Nouveau numéro</label>
            <input v-model="newNumber" id="newNumberInput" type="text" class="border rounded-lg w-full p-2" />
          </div>
          <div class="flex justify-between">
            <button @click="validateAndOpenModifyModal" class="bg-lime-500 hover:bg-lime-600 text-white rounded px-4 py-2">Valider</button>
            <button @click="closeModifyModal"  class="bg-red-500 hover:bg-red-600 text-white rounded px-4 py-2">Fermer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    
    
    <hr class="h-1">
    <div class="flex items-center">
      <p class="mr-16 ml-4">validation en deux etapes</p> 
      <p class="ml-6 w-12"><img id="osImage" src="images/os.png " ></p>
      
    </div>
    
    <div class="flex items-center">
      <p class="mr-16 ml-4 text-[#db3257]">Desactivé</p> 
      <p class="mr-10 ml-12 text-[#3ddb32]">Appareil Acctuel</p> 
      
    </div>
    <div class="flex items-center">
      <button type="button" class="text-gray-900 ml-4 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 ml-1  mt-2 mb-2" @click="showConfigureModal = true" >Configurer</button>
      
      
      
      
      <button type="button" class="text-gray-900 mr-4 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 ml-24  mt-2 mb-2" @click="examineFunction">Examiner</button>
      
      
      
    </div>
    <div v-if="showConfigureModal" class="fixed inset-0 z-50 flex items-center justify-center">
      <div class="modal-overlay absolute inset-0 bg-black opacity-25"></div>
      
      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
          <h2 class="text-lg font-semibold mb-4">Configuration de la validation en deux étapes</h2>
          
          <!-- Contenu du modal -->
          <button
            @click="disableTwoStepValidation"
            class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded focus:outline-none focus:ring"
          >
            Désactiver la validation en deux étapes
          </button>
          
          <button
            @click="showConfigureModal = false"
            class="bg-gray-300 hover:bg-gray-400 mt-4 text-gray-700 font-semibold px-4 py-2 rounded ml-2 focus:outline-none focus:ring"
          >
            Annuler
          </button>
        </div>
      </div>
    </div>

    <hr class="h-1">
    <div class="flex items-center">
      <p class="ml-4 text-[#eb4034] ">Supprimer ce compte utilisateur</p> 
      
    </div>
    <div class="flex items-center">
      <p class="ml-4 ">la suppression de l'utilisateur RTS est definitive et vous ne pourrez plus accedez à cette console et au compte auxquels vous appartenez. </p> 
      
    </div>
    <div>
    <button @click="openDeleteModal" class="bg-red-500 mb-2 ml-4 hover:bg-red-600 text-white rounded px-4 py-2">Supprimer ce compte utilisateur</button>

    <div v-if="isDeleteModalOpen" class="fixed inset-0 flex items-center justify-center z-50">
      <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-semibold mb-2">Raison de la suppression du compte</h2>
        <textarea v-model="deleteReason" class="border rounded-lg w-full p-2 mb-4" rows="4" placeholder="Veuillez saisir la raison de la suppression "></textarea>
        <div class="flex justify-between">
          <button @click="sendDeleteReason" class="bg-lime-500 hover:bg-lime-600 text-white rounded px-4 py-2">Envoyer</button>
          <button @click="closeDeleteModal" class="bg-red-500 hover:bg-red-600 text-white rounded px-4 py-2">Fermer</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Le reste du contenu de la carte va ici -->
  

 
 <br>
 
</main>  


</template>

<script>
export default {
  data() {
    return {
      
      

      showModal1: false, // État du premier modal
      showModal2: false, // État du second modal
      // showopenModifyModa: false,  État du second modal


      

      isModifyModalOpen: false,
      oldNumber: "",
      newNumber: "",

      isDeleteModalOpen: false,
      deleteReason: "",

      showConfigureModal: false,

      showPasswordRequirementsModal: false,

      showEditModal: false,
      
    };
  },
  
  methods: {
    openModal1() {
      this.showModal1 = true;
    },
    closeModal1() {
      this.showModal1 = false;
    },

    openModal2() {
      this.showModal2 = true;
    },
    closeModal2() {
      this.showModal2 = false;
    },

    openModal() {
      this.modalVisible = true;
    },

    openModifyModal(oldNumber, newNumber) {
      this.oldNumber = oldNumber;
      this.newNumber = newNumber;
      this.isModifyModalOpen = true;

       
      
    },

    

    closeModifyModal() {
      this.isModifyModalOpen = false; // Fermer le modal de modification
    },

    openDeleteModal() {
      this.isDeleteModalOpen = true;
    },

    closeDeleteModal() {
      this.isDeleteModalOpen = false;
      this.deleteReason = ""; // Réinitialiser la raison après la fermeture
    },

    
    disableTwoStepValidation() {
      axios.post('/api/disable-two-step-validation')
    .then(response => {
      // Traiter la réponse du backend
      if (response.data.success) {
        this.$toast.success('Validation en deux étapes désactivée avec succès.');
        // Ici, vous pouvez également actualiser la page si nécessaire
        
        // Fermer le modal après la désactivation réussie
        this.showConfigureModal = false;
      } else {
        this.$toast.error('Échec de la désactivation de la validation en deux étapes.');
      }
    })
    .catch(_ => {
      this.$toast.error('Erreur lors de la communication avec le serveur.');

    });
  },
    
  

    



  
    confirmModal() {
      
      this.modalVisible = false;
      //  Fermer le modal après la confirmation
       if (this.oldNumber !== "" && this.newNumber !== "") {
        // Effectuer les modifications nécessaires avec les numéros
        // ...

        this.closeModifyModal(); // Utilisez la nouvelle méthode pour fermer le modal
      } else {
        // Afficher un message d'erreur ou autre logique de validation
      }
    },

    validateAndOpenModifyModal() {
      // Ici, vous pouvez ajouter la logique pour valider les numéros et ouvrir le modal de modification
      // Une fois que les modifications sont faites, vous pouvez appeler openModifyModal
      this.openModifyModal('Ancien numéro', 'Nouveau numéro');
    },

    sendDeleteReason() {
      // Envoyer la raison de la suppression du compte (this.deleteReason)
      // Ici, vous pouvez implémenter la logique pour envoyer le message
      // Après avoir envoyé, fermez la boîte de dialogue
      this.closeDeleteModal();
    },

    

    
       
      
    

    
  },

  mounted() {
    const userAgent = navigator.userAgent;
    const osImage = document.getElementById('osImage');

    if (userAgent.match(/Android/i)) {
      osImage.src = 'images/android.jpg';
    } else if (userAgent.match(/iPhone|iPad|iPod/i)) {
      osImage.src = 'images/ios.jpg';
    } else if (userAgent.match(/Windows/i)) {
      osImage.src = 'images/windows.jpg';
    } else if (userAgent.match(/Mac/i)) {
      osImage.src = 'images/mac.jpg';
    } else if (userAgent.match(/Linux/i)) {
      osImage.src = 'images/linux.jpg';
    } else {
      osImage.src = 'chemin/vers/autre.png';
    }
  },


};

  
</script>













   











