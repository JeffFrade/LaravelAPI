<?php

namespace App\Support\Charts;

abstract class Chart
{
    protected function createDataset(string $label, array $data, string $bgColor = 'rgba(0, 115, 183, 0.7)', string $borderColor = 'rgba(0, 115, 183, 1)')
    {
        return [
            "label" => $label,
            'backgroundColor' => $bgColor,
            'borderColor' => $borderColor,
            "pointBorderColor" => $bgColor,
            "pointBackgroundColor" => $bgColor,
            "pointHoverBackgroundColor" => $bgColor,
            "pointHoverBorderColor" => $borderColor,
            'data' => $data,
        ];
    }

    protected function createChart(string $name, string $type, array $size, array $labels, array  $datasets, array $options = [])
    {
        return app()->chartjs
            ->name($name)
            ->type($type)
            ->size($size)
            ->labels($labels)
            ->datasets([$datasets])
            ->options($options);
    }
}