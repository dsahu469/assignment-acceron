<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function import(Request $request) 
    {
        $path = $request->file('file')->store('file');
        
        Excel::import(new UsersImport, $path);
        
        return redirect('/')->with('success', 'All good!');
    }
    
    function search(Request $request){
        $result = UserModel::select('*');
        
        if($request->search != ''){
            $result->where('employeed_id', $request->search);
        }
        
        if($request->search != ''){
            $result->where('job_title', $request->job_title);
        }
        
        if($request->department != ''){
            $result->where('department', $request->department);
        }
        
        if($request->gender != ''){
            $result->where('gender', $request->gender);
        }
        
        if($request->City != ''){
            $result->where('country', $request->Country);
        }
        
        if($request->City != ''){
            $result->where('city', $request->City);
        }
        if($request->from_hiring_date != ''){
            $result->where('hire_date', '>=',$request->from_hiring_date);
        }
        if($request->to_hiring_date != ''){
            $result->where('hire_date', '<',$request->to_hiring_date);
        }
        if($request->to_hiring_date != ''){
            $result->where('hire_date', '<',$request->to_hiring_date);
        }
        
        if($request->sort_by != ''){
            $result->sortBy($request->sort_by);
        }
        
        $result->get();
        
        return response()->json([
            'success' => true,
            'response' => $result
        ]);
    }
}
