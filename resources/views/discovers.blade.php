<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/discovers" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group">
    
      <input type="text" class="form-control"  name="kk">
     </div>
            <div class="form-group">
      <input type="text" class="form-control"  name="bb">
      </div>
   
    <button type="submit" class="btn btn-primary btn-clr">SAVE</button>
  </form>
</body>
</html>