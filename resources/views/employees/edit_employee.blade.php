@extends('layout.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="header"> 
    <h2>Update {{$employee->name}}</h2>
    <a href="{{route('employee.index')}}"><input type="button" name="" class="create_student" Value="Home" ></a>
    {{-- <a href="#"><input type="button" name="" class="create_student" Value="Add Student" ></a> --}}
</div>
<form action="{{route('employee.update',$employee->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT');
    <label for="fname">First Name</label>
    <input type="text" id="name" name="name" value="{{$employee->name}}" >

    <label for="lname">Father Name</label>
    <input type="text" id="fname" name="fname" value="{{$employee->fname}}" >

    <label for="lname">Phone</label>
    <input type="text" id="phone" name="phone" value="{{$employee->phone}}" >

    <label for="lname">Profile image</label>
    <input type="file" id="image" name="image" >

    {{-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select> --}}



    <input type="submit" value="Update">
  </form>

@endsection