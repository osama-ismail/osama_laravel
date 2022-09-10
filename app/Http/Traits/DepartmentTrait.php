<?php



namespace App\Http\Traits;
trait DepartmentTrait{

    private function getDepartment($departmentId){
        return Department::find($departmentId);


    }
}