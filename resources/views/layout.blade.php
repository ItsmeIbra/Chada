<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>library</title>
</head>
<style>

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background: radial-gradient(1002px at -0.1% 47%, rgb(53, 92, 125) 0%, rgb(108, 91, 123) 51.2%, rgb(192, 108, 132) 100.2%);
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  font-size: 20px;
  padding: 16px;
  text-decoration: none;
}


.sidebar a.active {
  background-color: #1209bf;
  color: white;
}


.sidebar a:hover:not(.active) {
  background-color: #1c1c1f;
  color: white;
}



div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.navbar{
  background: linear-gradient(to top, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%);
  display: flex;
  justify-content: center;
  color:white;
}

body{
  background-color: #F1EFF2;
}

</style>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                  <a class="navbar-brand d-flex justify-content-center" href="#"><h2>managment</h2></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </nav>
            </div>
        </div>
        <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <a class="" href="{{url('home.home')}}">Home</a>
                <a href="{{ route ('books.index')}} ">Book</a>
                <a href="{{ route ('student.index')}} ">Student</a>
                <a href="{{ route ('info.index')}}">...</a>
              </div>
        </div>
        <div class="col-md-9">
           
            @yield('content')
           
        </div>

        </div>
    </div>

    
</body>
</html>