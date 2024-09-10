

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
  <h2>Create Quiz question</h2>
  @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  <form action="/quizcreation" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group">
      <label for="quizserial">Serial no</label>
      <input type="text" class="form-control" id="quizserial" placeholder="Serial no" name="quizserial">
      @error('quizserial')
                <div class="text-danger">{{ $message }}</div>
            @enderror</div>
            <div class="form-group">
      <label for="quiz">Quiz</label>
      <input type="text" class="form-control" id="quiz" placeholder="Question" name="quiz">
      @error('quiz')
                <div class="text-danger">{{ $message }}</div>
            @enderror</div>
    <div class="form-group">
      <label for="option1">Option 1</label>
      <input type="text" class="form-control" id="option1" placeholder="Create 1st option" name="option1">
    </div>
    <div class="form-group">
      <label for="option2">Option 2</label>
      <input type="text" class="form-control" id="option2" placeholder="Create 2nd option" name="option2">
    </div>
    <div class="form-group">
      <label for="option3">Option 3</label>
      <input type="text" class="form-control" id="option3" placeholder="Create 3rd option" name="option3">
    </div>
    <div class="form-group">
      <label for="option4">Option 1</label>
      <input type="text" class="form-control" id="option4" placeholder="Create 4th option" name="option4">
    </div>
    <div class="form-group">
      <label for="answer">Answer</label>
      <input type="text" class="form-control" id="answer" placeholder="Answer" name="answer">
      @error('answer')
                <div class="text-danger">{{ $message }}</div>
            @enderror</div>
    <div class="form-group">
      <label for="mark">Mark</label>
      <input type="text" class="form-control" id="mark" placeholder="Mark.." name="mark">
      @error('mark')
                <div class="text-danger">{{ $message }}</div>
            @enderror</div>
    
    <button type="submit" class="btn btn-primary btn-clr">SAVE</button>
  </form>
    
</body>
</html>