<?php
use App\models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains=[
            [
                'partenza' => 'roma',
                'destinazione' => 'gubbio'
            ],
            
        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain->partenza = $elem['partenza'];
            $newTrain->destinazione = $elem['destinazione'];
            $newTrain->save();


        }
    }
}
