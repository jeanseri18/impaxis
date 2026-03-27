<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactManager extends Controller
{
    //

    public function sendMailContactForm(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'fullname'       => 'required|string|min:3|max:255',
                'phone'          => 'required|string|max:20',
                'email'          => 'required|email:rfc,dns|max:255',
                'messageContent' => 'required|string|min:10', // Ajout d'un min pour le contenu
            ]);

            if ($validator->fails()) {
                if (ob_get_length()) ob_clean();
                return response()->json([
                    'status' => 'validation_error',
                    'errors' => $validator->errors() // <-- C'est cette clé qui est lue par le JS
                ], 422);
            }

            try {
                Mail::to($request->email)->send(new ContactFormSend(
                    $request->email, 
                    $request->fullname, 
                    $request->phone, 
                    $request->messageContent 
                ));

                if (ob_get_length()) ob_clean();
                return response()->json([
                    'status'  => 'success',
                    'message' => 'Votre message a été envoyé avec succès.'
                ], 200);

            } catch (\Exception $e) {
                if (ob_get_length()) ob_clean();
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Une erreur est survenue lors de l\'envoi du mail.',
                    'debug'   => $e->getMessage() // À retirer en production
                ], 500);
            }
        }
        
        return abort(404);  // Si la requête n'est pas AJAX, on retourne une 404 pour éviter les accès directs
    }
}
