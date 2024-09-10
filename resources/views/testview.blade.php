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
      .table th{
        color:#52527a;
      }

      .table td{
        color:#52527a;
      }

      .table a{
        text-decoration:none;
        background-color:#52527a;
        color:white;
      }
      </style>
</head>
<body>
  <div class="container">
       <a href="{{url('/home')}}">HOME</a>
    <h6>QuizTest View</h6>
    <table class="table">
        <tr>
        <th>
           Name of the candidate
            </th>
            <th>
            Quiz Serial
            </th>
            <th>
            Quiz
            </th>
            <th>
            Submitted Answer
            </th>
            <th>
            Correct Answer
            </th>
            <th>
            Mark
            </th>
            <th>
            Obtained Mark
            </th>
        </tr>

        @foreach($infos as $info)

        <tr>
        <td>{{$info['name']}}</td>
            <td>{{$info['quizserial']}}</td>
            <td>{{$info['quiz']}}</td>
            <td>{{$info['anssubmit']}}</td>
            <td>{{$info['correctanswer']}}</td>
            <td>{{$info['mark']}}</td>
            <td>{{$info['markobtained']}}</td>
            
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>