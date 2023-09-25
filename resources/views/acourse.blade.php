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
            <tr>
              <th scope="row">1</th>
              <td>C++ L1</td>
              <td>www.youtube.com/c++</td>
              <td>C++</td>
              <td style="width: 18rem;"><button class="btn btn-danger">Delete</button>&nbsp;<button class="btn btn-success" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Edit</button>
            </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>PHP L1</td>
              <td>www.youtube.com/php</td>
              <td>PHP</td>
              <td style="width: 18rem;"><button class="btn btn-danger">Delete</button>&nbsp;<button class="btn btn-success" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Edit</button>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Java L1</td>
              <td>www.youtube.com/java</td>
              <td>Java</td>
              <td style="width: 18rem;"><button class="btn btn-danger">Delete</button>&nbsp;<button class="btn btn-success" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Edit</button>
            </tr>
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
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Course Name</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Video Url</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Notes</label>
                    <input type="file" class="form-control" id="recipient-name">
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Save</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Update Course</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Course Name</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Video Url</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Notes</label>
                    <input type="file" class="form-control" id="recipient-name">
                  </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Save</button>
            </div>
        </form>
          </div>
        </div>
      </div>
@endsection
