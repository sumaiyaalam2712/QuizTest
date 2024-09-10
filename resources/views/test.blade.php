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
      <h6>Give answer of the following questions</h6><br>

    <form action="/test" method="POST">
    @csrf
   
     @foreach($datas as $index => $dat)
     <div class="form-group">
      <input type="hidden" class="form-control"  name="name[{{$index}}]" value="{{$qq}}">
    </div>
          
     {{$dat['quizserial']}} no.
      <div class="form-group">
      <input type="hidden" class="form-control"  value="{{$dat['quizserial']}}" name="quizserial[{{$index}}]">
    </div>
    {{$dat['quiz']}} 
    <div class="form-group">
      <input type="hidden" class="form-control"  name="quiz[{{$index}}]" value="{{$dat['quiz']}}">
    </div>
                
            <br>
            @if(!empty($dat['option1']) && !empty($dat['option2']) && !empty($dat['option3']) && !empty($dat['option4']))
    <div class="form-check">
        <input type="radio" class="form-check-input" name="anssubmit[{{$index}}]" value="{{$dat['option1']}}">
        {{$dat['option1']}}
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" name="anssubmit[{{$index}}]" value="{{$dat['option2']}}">
        {{$dat['option2']}}
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" name="anssubmit[{{$index}}]" value="{{$dat['option3']}}">
        {{$dat['option3']}}
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" name="anssubmit[{{$index}}]" value="{{$dat['option4']}}">
        {{$dat['option4']}}
    </div>
@else
    
    <div class="form-group">
        <textarea class="form-control" name="anssubmit[{{$index}}]" rows="3" placeholder="Write your answer here..."></textarea>
    </div>
@endif
            <br>
                <div class="form-group">
      <input type="hidden" class="form-control"  name="correctanswer[{{$index}}]" value="{{$dat['answer']}}">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control"  value="{{$dat['mark']}}" name="mark[{{$index}}]">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control"  name="markobtained[{{$index}}]">
    </div>

     @endforeach
     
     <button type="submit" class="btn btn-primary btn-clr">Submit Answer</button>
    
    </form>
    </div>
</body>
</html>