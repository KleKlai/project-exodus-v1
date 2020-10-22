<?php

namespace App\Exports;

use App\Model\Art;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class ArtExportCustom implements FromCollection, WithHeadings, ShouldAutoSize
{

    public function __construct(array $request)
    {
        $this->data = $request;
        $this->data = Arr::except($this->data, ["_token", "format"]);
    }

    public function collection()
    {
        return Art::select($this->data)->get();
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }

    public function headings(): array
    {
        return $this->data;
    }
}
