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
    <h6>Quiz Questions</h6>
    <table class="table">
        <tr>
            <th>
            quizserial
            </th>
            <th>
            quiz
            </th>
            <th>
            0ption1
            </th>
            <th>
            0ption2
            </th>
            <th>
            0ption3
            </th>
            <th>
            0ption4
            </th>
            <th>
            Answer
            </th>
            <th>
            Mark    
            </th>
            <th>
            Edit
            </th>
            <th>
            Delete   
            </th>
        </tr>

        @foreach($infos as $info)

        <tr>
            <td>{{$info['quizserial']}}</td>
            <td>{{$info['quiz']}}</td>
            <td>{{$info['option1']}}</td>
            <td>{{$info['option2']}}</td>
            <td>{{$info['option3']}}</td>
            <td>{{$info['option4']}}</td>
            <td>{{$info['answer']}}</td>
            <td>{{$info['mark']}}</td>
            <td><a href={{"updatequiz/".$info['id']}}>Update</a></td>
            <td><a href={{"deletequiz/".$info['id']}}>Delete</a></td>
            
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>