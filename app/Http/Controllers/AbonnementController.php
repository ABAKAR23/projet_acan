<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;

class AbonnementController extends Controller
{
    public function abonnementsActifs()
    {
        // Récupérez les abonnements actifs depuis le modèle Abonnement
        $abonnementsActifs = Abonnement::where('statut', 'actif')->get();

        // Retournez les données sous forme de réponse JSON
        return response()->json($abonnementsActifs);
    }

    public function getAbonnementsActifs()
    {
       $abonnementsActifs = Abonnement::where('statut', 'actif')->get();
       return response()->json($abonnementsActifs);
    }

}
