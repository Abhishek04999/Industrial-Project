<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid" style="margin-left: 5rem;">
          <a class="navbar-brand" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/showques">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/user">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/course">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/result">Ranking</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quiz
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/addquiz">Add Quiz</a></li>
                  <li><a class="dropdown-item" href="/removequiz">Remove Quiz</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <!-- x -->
              <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
      </nav>


