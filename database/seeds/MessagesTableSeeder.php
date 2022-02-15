<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            [
                'apartment_id' => 1,
                'name' => 'Flavio',
                'last_name' => 'Renzelli',
                'email' => 'flaviorenze@libero.it',
                'body_email' => 'Salve, volevo sapere se era disponbile dal 27 al 6 marzo.'
            ],
            [
                'apartment_id' => 1,
                'name' => 'Sara',
                'last_name' => 'Capitelli',
                'email' => 'saracapitelli@outlook.com',
                'body_email' => 'Ciao, è disponibile per 2 settimane ad agosto? sono ammessi gli animali?'
            ],
            [
                'apartment_id' => 2,
                'name' => 'Sandro',
                'last_name' => 'Buchet',
                'email' => 'sandrobuch@libero.it',
                'body_email' => 'Salve, vorrei prenotare per 5 giorni, per un matrimonio. Sarebbe possibile avere un maggiordomo?'
            ],
            [
                'apartment_id' => 3,
                'name' => 'Franca',
                'last_name' => 'Salmerino',
                'email' => 'salmerinofranca@libero.it',
                'body_email' => 'Il prezzo è trattabile se decidiamo di restare una mese intero? Si tratta di una cifra importante, potrebbe venirci in contro.'
            ],
        ];

        foreach ($messages as $message) {
            $newMessage = new Message();
            $newMessage->apartment_id = $message['apartment_id'];
            $newMessage->name = $message['name'];
            $newMessage->last_name = $message['last_name'];
            $newMessage->email = $message['email'];
            $newMessage->body_email = $message['body_email'];
            $newMessage->save();
        }
    }
}
