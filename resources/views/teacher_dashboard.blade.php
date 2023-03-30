
@extends('layout.master')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Welcome Risala Tasin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item active">Teacher</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Total Courses</h6>
                                    <h3>04</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/teacher-icon-01.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Course in Progress</h6>
                                    <h3>60</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/teacher-icon-02.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Course Completed</h6>
                                    <h3>50</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/student-icon-01.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Ongoing Events</h6>
                                    <h3>20</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/teacher-icon-03.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-8">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Courses You're Taking</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
    
                                            <li class="lesson-view-all"><a href="#">View All</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-circle">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 dash-widget1">
                                        <div class="circle-bar circle-bar2">
                                            <div class="circle-graph2" data-percent="80">
                                                <b>80%</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="dash-details">
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{URL::to('assets/img/icons/lesson-icon-02.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Course Code</h5>
                                                    <h4>ICT-3205</h4>
                                                </div>
                                            </div>
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{URL::to('assets/img/icons/lesson-icon-01.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Course Title</h5>
                                                    <h4>Computer Networks</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{URL::to('assets/img/icons/lesson-icon-03.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Semester</h5>
                                                    <h4>3rd year 1st semester</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="dash-details">
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{URL::to('assets/img/icons/lesson-icon-05.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Instructor</h5>
                                                    <h4>You</h4>
                                                </div>
                                            </div>
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{URL::to('assets/img/icons/lesson-icon-04.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Assignment Evaluated</h5>
                                                    <h4>05/20</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{URL::to('assets/img/icons/lesson-icon-06.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Exam Evaluated</h5>
                                                    <h4>10/50</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-center">
                                        <div class="skip-group">
                                            <button type="submit" class="btn btn-info skip-btn">Next</button>
                                            <button type="submit" class="btn btn-info continue-btn">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                                <div class="card flex-fill comman-shadow">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title">Course History</h5>
                                        <ul class="chart-list-out student-ellips">
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="teaching-card">
                                            <ul class="steps-history">
                                                <li>Sep22</li>
                                                <li>Sep23</li>
                                                <li>Sep24</li>
                                            </ul>
                                            <ul class="activity-feed">
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Mathematics</a></span>
                                                        <ul class="teacher-date-list">
                                                            <li><i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022</li>
                                                            <li>|</li>
                                                            <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60
                                                                Minutes)</li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns ms-auto">
                                                        <button type="submit" class="btn btn-info">In Progress</button>
                                                    </div>
                                                </li>
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Geography </a></span>
                                                        <ul class="teacher-date-list">
                                                            <li><i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022</li>
                                                            <li>|</li>
                                                            <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60
                                                                Minutes)</li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns complete ms-auto">
                                                        <button type="submit" class="btn btn-info">Completed</button>
                                                    </div>
                                                </li>
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Botony</a></span>
                                                        <ul class="teacher-date-list">
                                                            <li><i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022</li>
                                                            <li>|</li>
                                                            <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60
                                                                Minutes)</li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns ms-auto">
                                                        <button type="submit" class="btn btn-info">In Progress</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-4 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-body">
                                <div id="calendar-doctor" class="calendar-container"></div>
                                <div class="calendar-info calendar-info1">
                                    <div class="up-come-header">
                                        <h2>Upcoming Events</h2>
                                        <span><a href="javascript:;"><i class="feather-plus"></i></a></span>
                                    </div>
                                    <div class="upcome-event-date">
                                        <h3>10 Jan</h3>
                                        <span><i class="fas fa-ellipsis-h"></i></span>
                                    </div>
                                    <div class="calendar-details">
                                        <p>08:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>08:00 - 09:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>09:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>09:00 - 10:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>10:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>10:00 - 11:00 am</span>
                                        </div>
                                    </div>
                                    <div class="upcome-event-date">
                                        <h3>10 Jan</h3>
                                        <span><i class="fas fa-ellipsis-h"></i></span>
                                    </div>
                                    <div class="calendar-details">
                                        <p>08:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>English</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>08:00 - 09:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>09:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Mathematics </h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>09:00 - 10:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>10:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>History</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>10:00 - 11:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>11:00 am</p>
                                        <div class="calendar-box break-bg">
                                            <div class="calandar-event-name">
                                                <h4>Break</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>11:00 - 12:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>11:30 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>History</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>11:30 - 12:00 am</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection
