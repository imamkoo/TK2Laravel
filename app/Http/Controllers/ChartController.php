<?php

namespace App\Http\Controllers;

use App\Charts\Chart;
use App\Charts\BarChart;
use App\Charts\LineChart;
use App\Charts\PieChart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(BarChart $chart)
    {
        return view('chart.bar', ['barChart' => $chart->build()]);
    }

    public function pieChart(Chart $chart)
    {
        return view('chart.pie', ['pieChart' => $chart->build()]);
    }

    public function lineChart(LineChart $chart)
    {
        return view('chart.line', ['lineChart' => $chart->build()]);
    }
}