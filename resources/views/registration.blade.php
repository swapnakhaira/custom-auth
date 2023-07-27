@extends('layout')
@section('title','Registration')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Login Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
  <body>
  <div class="container">
    <div class="row justify-content-center">
      <div class ="col-md-4 col-md-offset-4" style="margin-top:20px;">
        <h4>Registration</h4>

        <div class="mt-5">
          @if($errors->any())
          <div class ="col-12">
          @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
          @endforeach
        </div>
          @endif
          
          @if (session()->has('error'))
          <div class="alert alert-danger">{session('error')}</div>
          @endif

           @if (session()->has('success'))  
          <div class="alert alert-success">{session('success')}</div>
          @endif
        </div>

        <form action = "{{route('registration.post')}}" method="POST">
         @csrf
          <div class="form-group">
          <label for ="name">Full Name</label>
          <input type="text" class="form-control" placeholder="Enter Full Name"
          name="name" value="">
          </div>
          <div class="form-group">
            <label for ="email">Email</label>
            <input type="text" class="form-control" placeholder="Enter Email"
            name="email" value="">
          </div>
          <div class="form-group">
          <label for ="password">Password</label>
          <input type="text" class="form-control" placeholder="Enter Password"
            name="password" value="">
          </div>
          <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">Submit
            </button>
        </form>
      </div>
    </div>
  </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
@endsection