<?php

namespace App\Charts;

use ConsoleTVs\Charts\Basechart;
use Illuminate\Htttp\Request;
use Chartisan\php\Chartisan;
class KuisionerChart extends Chart
{
    public function handler(Request $request):Chartisan
    {
        return Chartisan::build()
        ->labels(['sangat tidak setuju','tidak setuju','agak setuju','setuju','sangat setuju'])
        ->labels('Perkuliahaan dimulai dan diakhiri tepat waktu',[1,2,3,4,5])
        ->labels('Dosen menguasai dan menyampaikan meterai dengan baik',[1,2,3,4,5])
        ->labels('diskusi materi & pembahasan tugas kuliah/ujian berjalan baik, didalam/luar kelas',[1,2,3,4,5]);
    }
    /**
     * Initializes the chart.
     *
     * @return void
     */
   /*  public function __construct()
    {
        parent::__construct();
    } */
}
