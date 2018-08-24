<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">

    <title>Authorisation!</title>
  </head>
  <body class="b-page">
        <div class=authorisation>
        <form method="POST" action="{{ url('/about')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group row">
                <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label> -->
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="name" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <!-- <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label> -->
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="pass" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
        </div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
  </html>
<style>
    .b-page{
        width:100%;
        margin:0;
        background-color:#f7f7f7;
        font-family:Oswald,Tahoma;
        font-size:12px;
    }   
    .authorisation{
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        margin-top: 20%;
    }
</style>