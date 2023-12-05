@extends('layouts.main')

@section('main-section')
<head>
    @push('title')
    <title>User</title>
    @endpush
</head>
<body>
    <div class="home-content">
    <div style="margin-left:4em; margin-bottom:2em">
        <form class="d-flex" role="search" action="{{ url('/user') }}" method="GET">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>&nbsp;
            <a href="{{ url('/user') }}" class="btn btn-resett">Reset</a>
          </form>

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
