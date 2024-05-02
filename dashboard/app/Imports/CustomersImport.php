<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CustomersImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Customer::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'image' => $row['image'],
                'address' => $row['address'],
                'phone' => $row['phone'],
                'age' => $row['age'],
            ]);
        }
    }
}

