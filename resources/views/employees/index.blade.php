@extends('layout.app')
@section('content')
<div class="delete_message ">
    
</div>   
<div class="header"> 
    <h2>Manage Employee</h2>
    {{-- <a href="{{route('employee.create')}}"> --}}
        <input type="button" name="" class="create_student " Value="Add Student" id="add_action_btn" >
    {{-- </a> --}}

    {{-- <input type="submit" name="submit" class="delete_student" value="Delete"> --}}
</div>
<table id="emp_table">
    <tr>
      <th>name</th>
      <th>Fathere Name</th>
      <th>Phone</th>
      <th>Profile image</th>
      <th>Action</th>
    </tr>
    @foreach ($employees as $employee)
    <div class="model delete" >
        <div class="model-content">
            <span class="closeM close1">&times;</span>
            <p> Are Sure Delete item?  
             </p>
            <button class="close1 cancel">cancel</button>
            <form action="{{ route('employee.destroy',$employee->id)}}" method="POST" id="delete_emp" 
                data-id="{{$employee->id}}" class="delete_form delete_emp">
               @csrf   
               @method('DELETE')
                <button type="submit" >Yes<i class="fa fa-trash" style="color:#fffff;font-size:20px;float: right; margin-right: 20px;">
               </i></button>
           </form>
            

        </div>
   </div>
        <tr>

        <td>{{$employee->name}}</td>
        <td>{{$employee->fname}}</td>
        <td>{{$employee->phone}}</td>
        <td style="text-align: center;">
            <img  src="{{asset('/images/'.$employee->image)}}" height="100px" width="100px" style="border-radius: 50%;" >
        </td>
        <td>
  
        <button  class="delete_button  action-icon"><i class="fa fa-trash" style="color:red;font-size:20px;float: right; margin-right: 20px;">
        </i></button>
          
            
            {{-- <a href="{{route('employee.edit',$employee->id)}}"><i class="fa fa-edit" style="color:green;font-size:20px;float: right;margin-right: 20px;"></i></a> --}}
            <button class="update_emp action-icon" id="update_action_btn" data-id='{{$employee->id}}'><i class="fa fa-edit" style="color:green;font-size:20px;float: right;margin-right: 20px;"></i></a>
            <a href="{{ route('employee.show',$employee->id) }}"><i class="fa fa-eye" style="color:#066a6a;font-size:20px;float: right;margin-right: 20px;"></i></a>

           
       </td>
        </tr>
        <tr>  
    @endforeach
  
  </table>

{{ $employees->links() }}

<div class="model form" >
    <div class="model-content">
        <span class="closeM close1">&times;</span>
        @if ($errors->any())
    {{-- <div class="errorSessions">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}
@endif
<div class="header"> 
    <h2>Create Employee</h2>
    {{-- <a href="#"><input type="button" name="" class="create_student" Value="Add Student" ></a> --}}
</div>
<form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data" id="create_emp" class="create_emp ">
    {{-- <div class="errorSession " id="error">
        <ul class="d-none"> </ul>
    </div> --}}
    <div class="success" id="success">
        <ul class="successSession d-none"> </ul>
    </div>
    @csrf
{{-- @method('put') --}}
    
    <label for="name">First Name</label>
    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}">
    <div class="errorSession name" id="error">
        <ul class="d-none"> </ul>
    </div>
   
    <label for="fname">Father Name</label>
    <input type="text" id="fname" name="fname" class="@error('fname') is-invalid @enderror" value="{{old('fname')}}" >
    <div class="errorSession fname" id="error">
        <ul class="d-none"> </ul>
    </div>

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" class="@error('phone') is-invalid @enderror" value="{{old('phone')}}">
    <div class="errorSession phone" id="error">
        <ul class="d-none"> </ul>
    </div>
    <label for="lname">Profile image</label>
    <span id="store_image"> </span>
    <input type="file" id="image" name="image"  class="@error('image') is-invalid @enderror" value="{{old('image')}}" >
     <span style="color: #ccc;font-size: 13px; font-weight: 200;">Allowed image Type:jpg,png,jpeg,jif, File size less then </span>
     
     <div class="errorSession image" id="error">
        <ul class="d-none"> </ul>
    </div>
    <input type="hidden" name="_method" id="method"  />
    <input type="hidden" name="action" id="action" />
    <input type="hidden" name="hidden_id" id="hidden_id" />

    <input type="submit" value="Submit">
    <button class="close1 cancel" id="cancel" >cancel</button>
  </form>
        
        

    </div>
</div>


  

@endsection