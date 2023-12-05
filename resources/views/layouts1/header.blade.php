<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Finlandica:ital@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Finlandica:ital@1&family=Splash&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="main_style.css">

<style>
#header{
    background: linear-gradient(to right,rgb(10, 37, 88),rgb(10, 37, 88));
}

.help{
    width: 50% !important;
}
#header #logo{
    width: 180px;

}
#form11{
    margin-top:5%;
}
#header li a {
    color: rgb(254, 254, 255);
    font-size: 22px;
    font-weight: bold;
    padding-left: 50px;
}
#header li a:hover{
    color: rgb(174, 255, 0);

}
#banner{
    background: linear-gradient(to right, rgb(10, 37, 88),rgb(10, 37, 88) ) ;
}
 #banner h4{
    font-size: 30px;
    color: white;
}
 #banner p{
    font-size: 12px;
    color: white;
}
 #banner #img1{
    width: 200px;
    border-radius: 50%;
 }
#footer{
    background: linear-gradient(to right, rgb(10, 37, 88),rgb(59, 85, 133) ) ;
}
#footer #description{
    width: 80px;
    padding-top: 20px;
    margin-bottom: 12px;
}
#footer #foot-dec{
    font-family: 'Finlandica', sans-serif;
    font-family: 'Splash', cursive; ;
}

#footer p{
    font-family: 'Finlandica', sans-serif;
    font-size: 14px;
    color: white;
}


.btn-reset{
    border: 1px solid #c1b8b8 !important;
    padding-left: 5px !important;
    padding-right: 5px !important;
    padding-top: 12px !important;
}

.btn-reset:hover{
    color: white !important;
    background-color: rgb(242, 68, 68) !important;
}
.btn-wrapper{
    display: flex;
    gap: 1em;
    margin-left: 1em;
}

.btn{
    width: 7em;
}

.search-bar{

    width: 25em;
    display: flex;
    justify-content: center;
    align-content: center;
    margin: auto;
    margin-top: 3em;
    margin-bottom: 3em;
}
#footer .media{
    width: 60px;
}
#footer #company{

    font-family: 'Finlandica', sans-serif;
    font-size: 20px;
    text-align: center;
    font-weight: bolder;
    padding-top: 20px;
}
#footer #footer-query{
    font-family: 'Finlandica', sans-serif;
    font-size: 20px;
    text-align: center;
    font-weight: bolder;
    padding-top: 20px;
}
 h2{
    color:rgb(114, 88, 56) ;
    text-align: center;
    font-weight: bolder;
    padding: 20px 0px;
    transition-property: font-size;
    transition-duration: 1.5s;
}
 h2:hover{

    font-size: 60px;

}
.navbar-nav{
    margin-left: -4em !important;
}
 p span{

    font-size: 17px;
    color: rgb(28, 85, 87);
    font-weight: bolder;
}
 p{

    font-size: 15px;
    color: rgb(28, 85, 87);
    font-weight: 600;
}
 #main-png{
    width: 80px;
    border-radius: 50%;
    position: relative;
    left: 30%;
}
#service .card{
    border: none;
}

 #service img{
    width: 250px;
    height: 200px;
    border-radius: 20%;
    position: relative;
    left: 35px;
    transition-property: width;
    transition-duration: 1s;
}

#service .card-title{
    text-align: center;
    font-size: 17px;
    color: rgb(28, 85, 87);
    font-weight: bolder;
}
 #service .card-text{

    font-size: 15px;
    color: rgb(28, 85, 87);
    font-weight: 600;
}
#banner #border1{
    width: 100%;
}
#footer #border2{
    width: 100%;
}
#service .btn{
    position:relative;
    left: 72px;
}
#help{
    background: rgb(70, 238, 98);
    position: fixed;
    right: 10px;
    bottom: 10px;
}
#help :hover{
    background: rgb(14, 242, 2);

}
#help #btn{
    font-size: 15px;
    font-weight:500;

}
#form {
    margin: 50px;
    padding-left: 50px;
    padding-right: 50px;

}

#form .container {
    background: linear-gradient(rgb(86, 86, 87), rgb(57, 57, 57));
    border-radius: 10%;
    max-width: 800px;
    padding: 20px 15px 30px 15px;
    margin-top: 7%;
    margin-bottom: 7%;


}

.wrapper-class{
    display: flex;
    align-items: center;
    gap: 2em;
}



label {

    font-size: large;
    font-weight: 500;
}
#form p{
    text-align: center;
    font-weight: bold;
    color: antiquewhite;
    font-size: larger;
}


#facebook #logo{
    font-size: 55px;
    font-weight: bolder;
    color: rgb(13,110,253);
    position: relative;
    top: 180px;
    left: 155px;
}
#facebook #para{
    font-family: 'Lato', sans-serif;
    font-size: 30px;
    font-weight:390;
    position: relative;
    top: 180px;
    left: 155px;
}

.login-form{
border-radius: 8px;
box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
background-color: #fff;
padding: 25px;
position: relative;
left: 800px;
}

.btn-custom{
background-color: #1877f2;
border: none;
border-radius: 6px;
font-size: 20px;
line-height: 28px;
color: #fff;
font-weight:700;
height: 48px;
}
.btn-custom{
color: #fff !important;
}
input{
height: 52px;
font-size: 18px !important;
color: #f2f2f2;
}
.form-control:focus{
box-shadow: 0 0 0 0 rgba(13,110,253,.25);
}
a{
text-decoration: none;
}

button{
    color: #1877f2;
}
#msg{
    color: #f0f2f5;
    font-size: 20px;
    padding-top: 10px;
}
#header li #logout{

    border: 2px solid blueviolet;
    padding-right: 30px;
    padding-left: 30px;
    border-radius: 80px;
    background-color: #dbd6d6;
   color: rgb(178, 29, 29);
}
</style>
</head>
<body>

    <section id="header">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav bar-->
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            {{-- <a class="navbar-brand" href="start.html"><img id="logo" src="{{asset('storage/media/cp logo.jpeg')}}" alt=""></a> --}}
                            <button class="navbar-toggler navbar-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                        <a class="nav-link" href="/uhome">Home</a>
                                      </li>';
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/ucourse">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/ushowques">Quizes</a>
                                    </li>

                                </ul>
                                <div class="wrapper-class">
                                    <div class="a-link">
                                        <a class="nav-link" style="color: white;font-size: 22px;
                                        font-weight: bold;
                                        padding-left: 50px;" href="/uhome">Welcome {{session('user_id')}}</a>
                                    </div>
                                    <div class="btn-container">

                                        <div class="d-grid gap-2 d-md-block ms-0 pt-2">
                                            <a href="{{route('user.logout')}}">
                                                <button class="btn btn-danger" type="button"> Logout<i class="bi bi-power"></i></button>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </section>
</body>
