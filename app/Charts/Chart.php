<?php

namespace App\Charts;

use App\Models\Mahasiswa;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->pieChart()
            ->setTitle('Graph Grade Mahasiswa')
            ->addData([
                Mahasiswa::where('GPA', '=', 'A')->count(),
                Mahasiswa::where('GPA', '=', 'B')->count(),
                Mahasiswa::where('GPA', '=', 'C')->count(),
                Mahasiswa::where('GPA', '=', 'D')->count(),
                Mahasiswa::where('GPA', '=', NULL)->count()
            ])
            ->setColors(['#17BEBB', '#F2E863', '#F17105', '#D11149', '#333'])
            ->setLabels(['Grade A', 'Grade B', 'Grade C', 'Grade D', 'Tidak Punya Nilai']);
    }
}