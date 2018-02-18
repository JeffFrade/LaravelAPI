<?php

namespace App\Services;

use App\Support\Charts\Chart as SupChart;

class Chart extends SupChart
{
    public function __construct()
    {
        // Repositories
    }

    // Chart example
    public function someChart()
    {
        // Create a Chartjs dataset
        $dataset = $this->createDataset('Values', [44, 54, 32, 35, 53]);

        // Create a chart
        $chart = $this->createChart('Chart', 'line', ['width' => 400, 'height' => 100], [1, 2, 3, 4, 5], $dataset);

        return $chart;
    }
}