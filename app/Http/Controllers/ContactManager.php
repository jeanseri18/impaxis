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
        if($request->ajax()){

            try {
                $validator = Validator::make($request->all(), [
                    'fullname' => 'required|string|min:3|max:255',
                    'phone' => 'required|string|max:20',
                    'email' => 'required|email|max:255',
                    'messageContent' => 'required|string',
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'errors' => $validator->errors(), // On retourne l'objet d'erreurs complet
                    ], 422); // <-- Statut HTTP 422 Unprocessable Entity
                }
                
                Mail::to($request->email)->send(new ContactFormSend($request->email, $request->fullname, $request->phone, $request->messageContent));
                
                return response()->json(['status' => 'success', 'message' => 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.'], 200);

            } catch (\Exception $e) {
                // En cas d'échec de Mail ou autre erreur interne
                return response()->json([
                    'message' => 'Une erreur interne est survenue. Veuillez réessayer.',
                    'exception' => $e->getMessage() // Optionnel pour le débogage
                ], 500); // Statut HTTP 500 Internal Server Error
            }
        }
    }
}
