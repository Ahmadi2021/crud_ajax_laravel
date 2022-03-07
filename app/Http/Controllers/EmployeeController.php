<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Environment\Console;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $employees = Employee::paginate(2);
        $employees = Employee::all();
        // return response()->json(['data'=>$employees]); 
        return view('employees.index')->with('employees',$employees);
    }
    public function ajax_index(){
        $employees = Employee::latest('created_at')->get();
        return response()->json(['data'=>$employees]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('employees.create_employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated =$request->validate([
            'name'   => 'required',
            'fname' => 'required',
            'phone'  => 'required',
            'image'  => 'mimes:jpg,png,gif,jpeg|required',
        ]);

        if(!is_array($validated) && $validated->fails()){
            return response()->json([
                'status'=>400,
                 'error' => $validated->errors(),
                ]);
            }

         $input = $request->all();
        $image = $request->image;
        $extension = $image->getClientOriginalExtension();
        $file_name = strtolower(Str::random(10));
        $file = $file_name . '.'. $extension;
        $image->move(public_path('images'),$file);
        $input['image'] = $file;
        $employee = Employee::create($input);
         if(!$employee){
             return response()->json(['error'=>'Employee doesnt created']); 
         }
          return response()->json([
              'status'=>200,
              'success'=>'successfully created'
            ]);
            
         
        // }
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        if(!$employee){
           return Redirect::back()->with('error','Employee Not Found');
        }
        return view('employees.show_one_employee')->with('employee',$employee);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if($request()->ajax()){
            $employee = Employee::findOrFail($id);
            return response()->json(['data'=>$employee]);
        // }
        
        // return view('employees.edit_employee')->with('employee',$employee);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $validated =$request->validate([
            'name'   => 'required',
            'fname' => 'required',
            'phone'  => 'required',
            // 'image'  => 'mimes:jpg,png,gif,jpeg|required',
        ]);

        if(!is_array($validated) && $validated->fails()){
            return response()->json([
                'status'=>400,
                 'error' => $validated->errors(),
                ]);
            }
        $employee = Employee::find($id);
        if($request->hasFile('image')){
            $validated= $request->validate([
             'image'  => 'mimes:jpg,png,gif,jpeg|required',
            ]);
            if(!is_array($validated) && $validated->fails()){
            return response()->json([
                'status'=>400,
                 'error' => $validated->errors(),
                ]);
            }
            $input = $request->all();
             $image = $request->image;
             $extension = $image->getClientOriginalExtension();
             $file_name = strtolower(Str::random(10));
             $file = $file_name. '.' . $extension;
             $image->move(public_path('images'),$file);
             $input['image'] = $file;
             $employee->update([
                'name'=>$request->name,
                'fname'=>$request->fname,
                'phone'=>$request->phone,
                 'image'=>$request->$file,
             ]);
            //  return Redirect::back()->with('success','successfully Updated');

        }else{
           $update = $employee->update([
                'name'=>$request->name,
                'fname'=>$request->fname,
                'phone'=>$request->phone
            ]);
            return response()->json(['success'=>'successfully Updated']);
   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $employee = Employee::find($id);
       $employee->delete();
       return response()->json(['success'=>'Successfully Deleted']);
    //    return Redirect::back()->with('success','Successfully Deleted');
    }
}
