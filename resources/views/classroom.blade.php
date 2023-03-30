@extends('layout.master')
@section('content')
{{-- not responsive --}}
<div class="hed">
    <h3>Your Courses</h3>
    <hr class="new5">
</div>
    <div class="classroom">
            <div class="course">
                <div class="course-preview">
                    <h6 style="color:white">Course</h6>
                    <h2 style="color:white">Computer Networks</h2>
                    <a href="#"> </a>
                </div>
                <div class="course-info">
                    <div class="progress-container">
                        <div class="progress"></div>
                        <span class="progress-text">
                            Progress
                        </span>
                    </div>
                    <h6>Instructor</h6>
                    <h2>Risala Tasin Khan</h2>
                    <button class="btn" onclick = "window.location.href='{{url('/')}}/course-task';">Continue</button>
                </div>
            </div>
            <div class="course">
                <div class="course-preview">
                    <h6 style="color:white">Course</h6>
                    <h2 style="color:white">Computer Networks</h2>
                    <a href="#">Archive This Course <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="course-info">
                    <div class="progress-container">
                        <div class="progress"></div>
                        <span class="progress-text">
                            Progress
                        </span>
                    </div>
                    <h6>Instructor</h6>
                    <h2>Risala Tasin Khan</h2>
                    <button class="btn">Continue</button>
                </div>
            </div>
            {{-- <div class="course">
                <div class="course-preview">
                    <h6 style="color:white">Course</h6>
                    <h2 style="color:white">Computer Networks</h2>
                    <a href="#">Archive This Course <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="course-info">
                    <div class="progress-container">
                        <div class="progress"></div>
                        <span class="progress-text">
                            Progress
                        </span>
                    </div>
                    <h6>Instructor</h6>
                    <h2>Risala Tasin Khan</h2>
                    <button class="btn">Continue</button>
                </div>
            </div> --}}
            
    </div>
@endsection
