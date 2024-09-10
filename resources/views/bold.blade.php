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
</head>
<body>
    <div class="container">
    <form action="/bold" method="POST">
        @csrf
        
            @foreach($datas as $index => $dat)
            
                
                {{$dat['quiz']}} 
                <div class="form-group">
      <input type="hidden" class="form-control"  value="{{$dat['quiz']}}" name="aaa[{{$index}}]">
    </div>
                
            <br>
            
            <div class="form-check">
      <input type="radio" class="form-check-input"  name="bbb[{{$index}}]" value="{{$dat['option1']}}">
     {{$dat['option1']}}
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input"  name="bbb[{{$index}}]" value="{{$dat['option2']}}">
      {{$dat['option2']}}
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input"  name="bbb[{{$index}}]" value="{{$dat['option3']}}">
      {{$dat['option3']}}
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input"  name="bbb[{{$index}}]" value="{{$dat['option4']}}">
      {{$dat['option4']}}
    </div>
            
            
                
                 <button type="submit" class="btn btn-primary">SAVE</button><br>
            
            
            @endforeach
   
 
    
    </form>
    </div>
</body>
</html>