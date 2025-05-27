<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // 🔍 Fonction pour rechercher un utilisateur par nom ou email
    public function search(Request $request)
    {
        $query = $request->input('query');

        $users = User::where('name', 'LIKE', "%{$query}%")
                    ->orWhere('email', 'LIKE', "%{$query}%")
                    ->get();

        return response()->json($users);
    }

    // 🔄 Fonction pour réinitialiser le QR Code d’un utilisateur
    public function resetQrCode($id)
    {
        $user = User::findOrFail($id);

        // Générer une nouvelle chaîne unique pour le QR code
        $uniqueToken = Str::uuid()->toString();
        $qrCodeData = route('login.qr', ['token' => $uniqueToken]);

        // Créer le QR code en format image
        $qrCodeImage = QrCode::format('png')->size(300)->generate($qrCodeData);
        $qrCodePath = "qrcodes/{$user->id}_qr.png";

        // Sauvegarder dans le storage (public)
        Storage::disk('public')->put($qrCodePath, $qrCodeImage);

        // Mettre à jour l'utilisateur
        $user->qr_code = $qrCodePath;
        $user->save();

        // Envoyer le mail avec le QR code
        Mail::raw("Voici votre nouveau QR code.", function ($message) use ($user, $qrCodePath) {
            $message->to($user->email)
                    ->subject("Votre QR Code a été réinitialisé")
                    ->attach(storage_path("app/public/{$qrCodePath}"));
        });

        return response()->json(['message' => 'QR code réinitialisé avec succès.']);
    }
}
