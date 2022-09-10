<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobsController extends Controller
{
    public function create(){
        return view('Jobs/CreateJob');
    }
    public function store(Request $request){
        // return view('Jobs/CreateJob');
        // dd($request);
        $request->validate([
            'title'=>'required|min:5',
            'body'=>'required',
            'salary'=>'required',
        ]);
        Job::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'salary'=>$request->salary


        ]);
        session()->flash('done','job was creeated');
        return redirect(route('allJobs'));
    }
    public function allJobs(){
        $jobs=Job::get();
        // dd( $jobs);
        return view('Jobs/allJobs',compact('jobs'));
    }
    public function delete(Request $request){
        
        $jobs=Job::where('id',$request->jobId)->first()->delete();
        // dd($jobs);   
        session()->flash('done','the job deleted');
        return redirect(route('allJobs'));    }

}
