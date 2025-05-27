<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Local;
use App\Models\Planning;
use App\Models\Reservation;
use App\Models\Facturation;
use App\Models\Paiement;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 👤 Création d'utilisateurs
        $admin = User::create([
            'name' => 'Admin Test',
            'email' => 'admin@test.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'qr_code' => Str::random(10),
        ]);

        $user = User::create([
            'name' => 'Utilisateur Simple',
            'email' => 'user@test.com',
            'role' => 'user',
            'password' => Hash::make('password'),
            'qr_code' => Str::random(10),
        ]);

        // 🏠 Création de locaux
        $locals = [];
        for ($i = 1; $i <= 3; $i++) {
            $locals[] = Local::create([
                'type' => 'Salle ' . $i,
                'capacite' => rand(10, 50),
                'prix' => rand(100, 300),
                'location' => 'Étage ' . rand(1, 3),
                'status' => 'disponible',
            ]);
        }

        // 📅 Création de planning
        foreach ($locals as $local) {
            for ($j = 0; $j < 5; $j++) {
                $dateDebut = Carbon::now()->addDays($j)->setTime(9, 0);
                $dateFin = $dateDebut->copy()->addHours(2);

                $planning = Planning::create([
                    'local_id' => $local->id,
                    'date_debut' => $dateDebut,
                    'date_fin' => $dateFin,
                    'isreserved' => false,
                ]);

                // 🔖 Création de réservation pour chaque planning
                $reservation = Reservation::create([
                    'user_id' => $user->id,
                    'local_id' => $local->id,
                    'date' => $dateDebut->toDateString(),
                    'heure' => $dateDebut->toTimeString(),
                    'duree' => 120, // en minutes
                    'statut' => 'confirme',
                    'planning_id' => $planning->id,
                ]);

                // 💰 Facturation
                $facture = Facturation::create([
                    'reservation_id' => $reservation->id,
                    'montant' => $local->prix * 2,
                    'date_creation' => Carbon::now()->toDateString(),
                    'file_path' => 'factures/facture_' . $reservation->id . '.pdf',
                ]);

                // 💳 Paiement
                Paiement::create([
                    'id_facture' => $facture->id,
                    'status' => 'paye',
                    'methode' => 'carte bancaire',
                    'date_paiement' => Carbon::now()->toDateString(),
                ]);

                // Marquer le planning comme réservé
                $planning->isreserved = true;
                $planning->save();
            }
        }
    }
}
