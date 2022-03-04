@extends('layout.app')
@section('content')
@if(session()->has('success'))
<div class="success_message">
    {{session()->get('success')}}
</div>
@endif
<div class="header"> 
    <h2>{{$employee->name}} Profile</h2>
    <a href="{{route('employee.index')}}"><input type="button" name="" class="create_student" Value="Home" ></a>

    {{-- <input type="submit" name="submit" class="delete_student" value="Delete"> --}}
</div>
<table>
    <tr>
      <th>name</th>
      <td>{{$employee->name}}</td>
      <td>
    </tr>
    <tr>
        <th>Fathere Name</th>
        <td>{{$employee->fname}}</td>
      </tr>
      <tr>
        <th>Phone</th>
        <td>{{$employee->phone}}</td>
      </tr>
      <tr>
        <th>Profile image</th>
        <td> 
            <img  src="{{asset('/images/'.$employee->image)}}" height="200px" width="200px" >
        </td>
      </tr>
  
   

  
  </table>
  

@endsection