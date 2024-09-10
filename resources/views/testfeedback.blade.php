<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

    <style>
      body{
        margin-top:50px;
        margin-bottom:50px;
        margin-left:50px;
        margin-right:50px;

      }

      a{
          float:right;
          text-decoration:none;
          font-weight:bold;
      }

      textarea.form-control {
    border: 3px solid #5c5c8a;
}

textarea.form-control:focus {
    background-color: #f0f0f5;
    border: 3px solid #7575a3;
}
input[type="radio"]:checked{
    border-color: #a3a3c2; 
    background-color: #5c5c8a; 
}

      .btn-clr {
    background-color: #7575a3;
    border: 5px solid #52527a; 
    color: white; 
}

.btn-clr:hover {
    background-color: #a3a3c2;
}
    </style>
</head>
<body>
    
    <div class="container">
    <a href="{{url('/home')}}">HOME</a>
      <h6>See your Feedback</h6><br>

    <form action="/testfeedback" method="POST">
    @csrf
   
     <div class="form-group">
        <label>Name of the candidate</label>
      <input type="text" class="form-control" name="name">
    </div>
     
     <button type="submit" class="btn btn-primary btn-clr">See the feedback</button>
    
    </form>
    </div>
</body>
</html>