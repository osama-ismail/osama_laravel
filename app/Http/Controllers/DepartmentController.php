<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    
    public function create(){
        return view('department.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:5',
            'description'=>'required'
            
        ]);
        Department::create([
            'name'=>$request->name,
            'description'=>$request->description


        ]);
        session()->flash('done','department was creeated');
        return redirect(route('department.create'));
        }

        public function allDepartments(){
            $departments=Department::get();
            return view('department.allDepartments',compact('departments'));

        }

        public function delete(Request $request){
            $request->validate([
                    'department_id'=>'required|exists:departments,id']);
                Department::where('id',$request->department_id)->delete();
                session()->flash('done','department was deleted');
                return redirect()->back();

        }

        // public function delete($department_id){
           
        //        $department =Department::where('id',$department_id)->first();
        //        if($department){
        //         $department->delete();
        //         session()->flash('done','department was deleted');
        //         return redirect()->back();
        //        }
              
        //         return redirect()->back()->withError(['department not found']);

        // }

        public function edit($department_id){

            $department=$this->getDepartment($department_id);

            return view('department.edit',compact('department'));
        }
        public function update(Request $request){
            $request->validate([
                'name'=>'required|min:3',
                'description'=>'required|min:3',
                'department_id'=>'required|exists:departments,id'
            
            
            ]);
            $department=$this->getDepartment($request->department_id);
            $department->update([
                'name'=>$request->name,
                'description'=>$request->description

            ]);

             session()->flash('done','department was updated');
             return redirect(route('departments.all'));
            // return view('department.edit');



        }

        private function getDepartment($departmentId){
            return Department::find($departmentId);
    

        }

}
