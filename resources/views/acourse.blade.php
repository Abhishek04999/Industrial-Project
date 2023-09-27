@extends('layouts.main')

@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="margin-left: 76vw ; margin-top: 10vw;">Add Course</button>
    </div>
 <div class="card-body" >
    <table class="table table-bordered" style="width: 75vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224);  margin-left: 10vw; margin-top: 1vw; text-shadow: 200px;">
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
                              <input type="text" name="Cname" class="form-control"  value="{{$view->Cname}}">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Video Url</label>
                                <input type="text" name="Curl" class="form-control"  value="{{$view->Curl}}">
                              </div>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Notes</label>
                                <input type="file" name="Cfilename" class="form-control"  value="{{$view->Cfilename}}">
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
                  <input type="text" name="Cname" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Video Url</label>
                    <input type="text" name="Curl" class="form-control" id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Notes</label>
                    <input type="file" name="Cfilename" class="form-control" id="recipient-name">
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

@endsection
