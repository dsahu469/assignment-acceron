<?php

namespace App\Imports;

use App\Models\UserModel;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserModel([
            'employee_id'     => $row[0],
            'name'    => $row[1], 
            'job_title'    => $row[2], 
            'department'    => $row[3], 
            'business_unit'    => $row[4], 
            'gender'    => $row[5], 
            'ethnicity'    => $row[6], 
            'age'    => $row[7], 
            'hire_date'    => date('Y-m-d', strtotime(implode("-", explode("/", $row[8])))), 
            'anual_salary'    => $row[9], 
            'bonus'    => $row[10], 
            'country'    => $row[11], 
            'city'    => $row[12], 
            'exit_date'    => date('Y-m-d', strtotime(implode("-", explode("/", $row[13])))), 
        ]);
    }
}
