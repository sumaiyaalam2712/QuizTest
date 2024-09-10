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

      label{
           color:#5c5c8a;
        }
        input[type=text]{
            background-color:#c2c2d6;
            border:3px solid #5c5c8a;
            border-radius:10px;
        }
     

        input[type=text]:focus{
            background-color:#f0f0f5;
            border:3px solid #7575a3;
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
  <h2>Update Quiz question</h2>
  <form action="/updatequiz" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <input type="hidden" class="form-control" id="id" value="{{$info['id']}}" name="id">
    </div>
    
    <div class="form-group">
      <label for="quizserial">Serial no</label>
      <input type="text" class="form-control" id="quizserial" value="{{$info['quizserial']}}" placeholder="Serial no" name="quizserial">
    </div>
    <div class="form-group">
      <label for="quiz">Quiz</label>
      <input type="text" class="form-control" id="quiz" value="{{$info['quiz']}}" placeholder="Quiz Question" name="quiz">
    </div>
    <div class="form-group">
      <label for="option1">Option 1</label>
      <input type="text" class="form-control" id="option1" value="{{$info['option1']}}" placeholder="Create 1st option" name="option1">
    </div>
    <div class="form-group">
      <label for="option2">Option 2</label>
      <input type="text" class="form-control" id="option2" value="{{$info['option2']}}" placeholder="Create 2nd option" name="option2">
    </div>
    <div class="form-group">
      <label for="option3">Option 3</label>
      <input type="text" class="form-control" id="option3" value="{{$info['option3']}}" placeholder="Create 3rd option" name="option3">
    </div>
    <div class="form-group">
      <label for="option4">Option 1</label>
      <input type="text" class="form-control" id="option4" value="{{$info['option4']}}" placeholder="Create 4th option" name="option4">
    </div>
    <div class="form-group">
      <label for="answer">Answer</label>
      <input type="text" class="form-control" id="answer" value="{{$info['answer']}}" placeholder="Answer" name="answer">
    </div>
    <div class="form-group">
      <label for="mark">Mark</label>
      <input type="text" class="form-control" id="mark" value="{{$info['mark']}}" placeholder="Mark.." name="mark">
    </div>
    
    <button type="submit" class="btn btn-primary btn-clr">SAVE</button>
  </form>
    
</body>
</html>