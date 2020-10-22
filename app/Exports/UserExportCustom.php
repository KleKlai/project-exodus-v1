<?php

namespace App\Exports;

use App\User;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class UserExportCustom implements FromCollection, WithHeadings, ShouldAutoSize
{

    public function __construct(array $request)
    {
        $this->field = $request;

        $this->field = Arr::except($this->field, ["_token", "format"]);
    }

    public function collection()
    {
        //Check if there is role key in array
        if(isset($this->field['role']))
        {
            $this->roles = $this->field['role'];
            $this->field = Arr::except($this->field, ["role"]);

            return User::role($this->roles)->select($this->field)->get();
        } else {

            $this->field = Arr::except($this->field, ["role"]);

            return User::select($this->field)->get();
        }
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
        return $this->field;
    }
}
