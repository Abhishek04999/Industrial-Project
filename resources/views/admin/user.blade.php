@extends('layouts.main')

@section('main-section')
<head>
    @push('title')
    <title>User</title>
    @endpush
</head>
<body>
    <div class="home-content">
        <div class="searchh-bar">
            <input class="  form-control" type="text" placeholder="Search" aria-label="Search">
            <div class="btn-wrapperr">
            <button class=" btn btn-primary">Search</button>
            <button class=" btn btn-resett">Reset</button>
            </div>
            </div>

       <table class="table table-bordered" style="width: 70vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224);  margin-left: 1vw; text-shadow: 200px;">
           <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">UserName</th>
                 <th scope="col">Gender</th>
                 <th scope="col">E-mail</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($users2 as $user)
               <tr>
                 <th scope="row">{{$user->user_id}}</th>
                 <td>{{$user->username}}</td>
                 <td>{{$user->gender}}</td>
                 <td>{{$user->email}}</td>
                 <td>
                   <a href="{{route('customer.delete',['id'=>$user->user_id])}}">
                   <button class="btn btn-danger">Delete</button>
               </a>
               </td>
               </tr>
               @endforeach
             </tbody>
         </table>
        </div>
         @endsection
