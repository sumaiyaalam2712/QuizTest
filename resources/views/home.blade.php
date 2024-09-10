@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{url('/quizcreation')}}">Quiz Creation </a><br>
                    <a href="{{url('/quiz')}}">View Quizes</a><br>
                    <a href="{{url('/test')}}">Quiz Test Paper</a><br>
                    <a href="{{url('/testview')}}">QuizTest PerformanceSheet</a><br>
                    <a href="{{url('/testresult')}}">QuizTest RESULT</a><br>
                    <a href="{{url('/testfeedback')}}">See Your ScoreBoard</a><br>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection