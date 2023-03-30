@extends('layout.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/course-task.css') }}">
    <div class="exam">
        <div class="headerr">
            <ul class="nav nav-pills">
                <li id="d"><a id="discussion" href="#ok">Discussions</a></li>
                <li id="r"><a id="resource" href="#ok">Resources</a></li>
                <li id="e"><a id="exam" href="#ok">Exams</a></li>
                <li id="a"><a href="#ok">Announcement</a></li>
            </ul>
        </div>
        <div class="row py-3">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Labtest - 01</h5>
                        <p class="card-text">Due time: <span style="color:orange">1:48PM- 29 March, 2023</span></p>
                        <div style="display:flex;justify-content:space-between"><a href="#" class="btn btn-success">Continue</a><p>Marks obtained: <span style="color:blue;font-weight:bolder">..../100</span></p></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Labtest - 01</h5>
                        <p class="card-text">Due time: <span style="color:orange">1:48PM- 29 March, 2023</span></p>
                        <div style="display:flex;justify-content:space-between"><a href="#" class="btn btn-success">Continue</a><p>Marks obtained: <span style="color:blue;font-weight:bolder">..../100</span></p></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
