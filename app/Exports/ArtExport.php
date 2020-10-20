<?php

namespace App\Exports;

use App\Model\Art;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class ArtExport implements FromCollection, WithHeadings, ShouldAutoSize
{

    public function _construct()
    {

    }

    public function collection()
    {
        return Art::all();
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
        $table = \DB::getSchemaBuilder()->getColumnListing('art');

        //Remove Element in Array
        $table = \array_diff($table, ["password", "remember_token"]);

        return $table;
    }
}
