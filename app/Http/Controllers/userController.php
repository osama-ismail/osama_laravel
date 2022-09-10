<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\employee;

class userController extends Controller
{
    function userLogin(){
        // $data= $req->input();
        // $req->session()->put('user',$data['user']);
        return view('login/login');
     }
  
     function check(Request $req){
        // $req->validate([
        //     'user'=>'required',
        //     'password'=>'required'
            
        // ]);
        // $country_data =User->select('password','name')->get();
        $user=User::pluck('name','password');
        $employee=employee::pluck('name','password');
       $password1= $req->input('password');
       $name1= $req->input('user');

        // $user=User::find($data);
        // $req->session()->put('user',$data['password']);
        foreach ($user as $password=>$name) {  
            // echo $password1, $name;         
            if( $password==$password1&& $name1==$name )
            {
                echo "you are logged in as an Admin ",$name;
                session()->put('user', );
                return view('login/choises');
                return;
            }
            else{
               
            }

            }
            foreach ($employee as $password=>$name) { 

                if( $password==$password1 && $name1==$name )
                {
                    echo "you are logged in as an employee ",$name;
                    return view('login/employee');
                }
                else{
                    echo "false";
                    // return view('login/login');
                }
    
                }
            
    //    echo $user->name;
       
     }
     function add(){
        // $data= $req->input();
        // $req->session()->put('user',$data['user']);

        return view('choices/addEmployee');
     }
     function updatePassword(){
        // $data= $req->input();
        // $req->session()->put('user',$data['user']);

        return view('choices/updatePassword');
     }
     function editEmployee(){
        // $data= $req->input();
        // $req->session()->put('user',$data['user']);

        return view('choices/editEmployee');
     }
     function showLeaving(){
        // $data= $req->input();
        // $req->session()->put('user',$data['user']);

        return view('choices/showLeaving');
     }
     
     public function store(Request $request){
        // $request->validate([
        //     'name'=>'required|min:5',
        //     'password'=>'required'
            
        // ]);
        $leav='0';
        $reason='null';
        $duration_leave='2';
        employee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'id_admin'=>$request->id_admin,
            'leave_approve'=>$leav,
            'reason'=>$reason,
            'leave_time'=>$duration_leave,
            'duration_leave'=>$duration_leave



        ]);
        session()->flash('done','employee was added');
        return view('login/choises');
        }
        public function allEmployees(){
            $departments=employee::get();
            return view('choices.editEmployee',compact('departments'));

        }

        public function delete(Request $request){
            // $request->validate([
            //         'department_id'=>'required|exists:departments,id']);
            employee::where('id',$request->id)->delete();
                session()->flash('done','employee was deleted');
                return redirect()->back();

        }

        

        public function edit($department_id){

            $department=$this->getDepartment($department_id);

            return view('choices.edit',compact('department'));
        }
        public function update(Request $request){
            // $request->validate([
            //     'name'=>'required|min:3',
            //     'description'=>'required|min:3',
            //     'department_id'=>'required|exists:departments,id'
            
            
            // ]);
            $department=$this->getDepartment($request->id);
            $department->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'id_admin'=>$request->id_admin,
            ]);

             session()->flash('done','employee information was updated');
             return redirect(route('choices.editEmployee'));
            // return view('department.edit');



        }
        public function edit1($department_id){

            $department=User::find($departmentId);

            return view('choices.updatePassword',compact('department'));
        }
        private function getDepartment($departmentId){
            return employee::find($departmentId);
    

        }
}
