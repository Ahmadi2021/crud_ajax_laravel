@extends('layout.app')
@section('content')
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
    <a href="{{route('employee.index')}}"><input type="button" name="" class="create_student" Value="Home" ></a>
    {{-- <a href="#"><input type="button" name="" class="create_student" Value="Add Student" ></a> --}}
</div>
<form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">First Name</label>
    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}">
    @error('name')
        <div class="errorSessions">{{$message}}</div>
    @enderror

    <label for="fname">Father Name</label>
    <input type="text" id="fname" name="fname" class="@error('fname') is-invalid @enderror" value="{{old('fname')}}" >
    @error('fname')
       <div class="errorSessions">{{$message}}</div>
    @enderror

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" class="@error('phone') is-invalid @enderror" value="{{old('phone')}}">
    @error('phone')
     <div class="errorSessions">{{$message}}</div>
    @enderror

    <label for="lname">Profile image</label>
    <input type="file" id="image" name="image"  class="@error('image') is-invalid @enderror" value="{{old('image')}}" >
    @error('image')
    <div class="errorSessions">{{$message}}</div>
   @enderror

    {{-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select> --}}



    <input type="submit" value="Submit">
  </form>

@endsection