@extends('layouts.main')

@section('main-section')

<head>
    @push('title')
    <title>Courses</title>
    @endpush
</head>
<div class="home-content">
    <div class="searchh-bar">
        <input class="  form-control" type="text" placeholder="Search" aria-label="Search">
        <div class="btn-wrapperr">
        <button class=" btn btn-primary">Search</button>
        <button class=" btn btn-resett">Reset</button>
        </div>
        </div>
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="margin-left: 69vw ; ">Add Course</button>
    </div>
 <div class="card-body" style="margin-top: 1em">
    <table class="table table-bordered" style="width: 75vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224);  margin-left: 1vw;  text-shadow: 200px;">
        <thead>

            <tr style="text-align: center;">
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Url</th>
              <th scope="col">Notes</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($courseview as $view)
            <tr>
              <th scope="row">{{$view->course_id}}</th>
              <td>{{$view->Cname}}</td>
              <td>{{$view->Curl}}</td>
              <td>{{$view->Cfilename}}</td>
              <td style="width: 18rem;">
                <a href="{{route('course.delete',['id'=>$view->course_id])}}">
                <button class="btn btn-danger">Delete</button></a>&nbsp;
                <button class="btn btn-success" type="button"  data-bs-toggle="modal" data-bs-target="#modal{{$view->course_id}}" data-bs-whatever="@mdo">Edit</button>

                <div class="modal fade" id="modal{{$view->course_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Course</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" enctype="multipart/form-data" action="{{route('course.edit',['id'=>$view->course_id])}}">
                            @csrf
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Course Name</label>
                              <input type="text" style="width: 100%" name="Cname" class="form-control"  value="{{$view->Cname}}">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Video Url</label>
                                <input type="text" style="width: 100%" name="Curl" class="form-control"  value="https://youtu.be/{{$view->Curl}}">
                              </div>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Notes</label>
                                <input type="file" style="width: 100%" name="Cfilename" class="form-control"  value="{{$view->Cfilename}}">
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                      </div>
                    </div>
                  </div>

            </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Course</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" enctype="multipart/form-data" action="{{url('/addcourse')}}">
                @csrf
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Course Name</label>
                  <input type="text" style="width: 100%" name="Cname" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Video Url</label>
                    <input type="text" style="width: 100%" name="Curl" class="form-control" id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Notes</label>
                    <input type="file" style="width: 100%" name="Cfilename" class="form-control" id="recipient-name">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
          </div>
        </div>
      </div>
</div>
@endsection
