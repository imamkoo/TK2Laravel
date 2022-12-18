<?php

namespace App\Charts;

use App\Models\Mahasiswa;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LineChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->lineChart()
            ->addData('Mahasiswa', [
                Mahasiswa::where('GPA', '=', 'A')->count(),
                Mahasiswa::where('GPA', '=', 'B')->count(),
                Mahasiswa::where('GPA', '=', 'C')->count(),
                Mahasiswa::where('GPA', '=', 'D')->count(),
                Mahasiswa::where('GPA', '=', null)->count()
            ])->setXAxis(['A', 'B', 'C', 'D', 'Tidak Punya Nilai']);
    }
}