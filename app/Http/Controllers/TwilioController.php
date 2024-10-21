<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Twilio\Rest\Client;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Twilio\TwiML\VoiceResponse;

class TwilioController extends Controller
{
    public function makeCall()
    {

        $currentTime =  Carbon::now('Africa/Kinshasa')->format('H:i'.':00');

        $tasks = Prescription::where('heure', $currentTime)->get();
        $pres = Prescription::where('heure','13:49:00')->get();
        $taskArray = [];
        
        if($tasks->isEmpty()){
            return response()->json(['message' => 'Aucun appel non passe ']);
        }else{
            $sid = env('TWILIO_ACCOUNT_SID');
            $token = env('TWILIO_AUTH_TOKEN');
            $twilio_number = env('TWILIO_PHONE_NUMBER');

            $client = new Client($sid, $token);

            $response = new VoiceResponse();
            $response->say("Ahoy, monde! Comment ça va ?", ['voice' => 'alice', 'language' => 'fr-FR']);

            // Passer l'appel
            $call = $client->calls->create(
                '+243854721056', // Numéro du destinataire (format international)
                $twilio_number,  // Numéro Twilio enregistré
                ['twiml' => $response]
            );

            return response()->json(['message' => 'Appel passé avec succès', 'call_sid' => $call->sid]);
        }
    }
}
