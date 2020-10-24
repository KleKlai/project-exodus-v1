<?php

namespace App\Imports;

use App\Model\Art;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArtsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row)
        {
            Art::create([
                'user_id'       => $row['user_id'],
                'title'         => $row['title'],
                'subject'       => $row['subject'],
                'city'          => $row['city'],
                'category'      => $row['category'],
                'style'         => $row['style'],
                'medium'        => $row['medium'],
                'material'      => $row['material'],
                'size'          => $row['size'],
                'height'        => $row['height'],
                'width'         => $row['width'],
                'depth'         => $row['depth'],
                'price'         => $row['price'],
                'description'   => $row['description'],
                'attachment'    => $row['attachment'],
                'status'        => $row['status'],
                'remark'        => $row['remarks']
            ]);
        }
    }
}
