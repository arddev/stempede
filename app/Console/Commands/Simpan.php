<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;
use Auth,DB, Config;

class Simpan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'simpan:simpan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info('Cronjob berhasil dijalankan');
//kirim whatsapp
$curl = curl_init();
$token = "DdRQTKH2lnT6WV0oqYpsfNakhzgAVm9V6eZx0bYFYHrgNED1WbWQSzS3TAFMrjGr";
$data = [
    'phone' => '085782790819',
    'message' => 'tes crown job',
    'secret' => false, // or true
    'priority' => false, // or true
];

curl_setopt($curl, CURLOPT_HTTPHEADER,
    array(
        "Authorization: $token",
    )
);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_URL, "http://172.105.127.244/api/send-message");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r($result);
//kirim whatsapp
        return 0;
    }
}
