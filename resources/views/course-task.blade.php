@extends('layout.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/course-task.css') }}">
    <div class="course-task" id="ok">
        <div class="headerr">
            <ul class="nav nav-pills">
                <li id="d"><a id="discussion" href="#ok">Discussions</a></li>
                <li id="r"><a id="resource" href="#ok">Resources</a></li>
                <li id="e"><a id="exam" href="#ok">Exams</a></li>
                <li id="a"><a href="#ok">Announcement</a></li>
            </ul>
        </div>
        <div id="rr" class="ag-format-container">
            <h2>Course Resources</h2>
            <div class="ag-courses_box">
                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Class Records
                        </div>

                        <div class="ag-courses-item_date-box">
                            Total class record:
                            <span class="ag-courses-item_date">
                                985
                            </span>
                        </div>
                    </a>
                </div>

                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Books
                        </div>

                        <div class="ag-courses-item_date-box">
                            Total Books:
                            <span class="ag-courses-item_date">
                                125
                            </span>
                        </div>
                    </a>
                </div>


                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Slides
                        </div>

                        <div class="ag-courses-item_date-box">
                            Total slides:
                            <span class="ag-courses-item_date">
                                04
                            </span>
                        </div>
                    </a>
                </div>
                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Classworks
                        </div>

                        <div class="ag-courses-item_date-box">
                            Total classworks:
                            <span class="ag-courses-item_date">
                                125
                            </span>
                        </div>
                    </a>
                </div>




            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#resource").click(function() {
                $("#r").addClass("active");
                $("#d, #e, #a").removeClass("active");
                $("#rr").addClass("show");
                $("#rr").removeClass("hide");
            });
            $("#discussion").click(function() {
                $("#d").addClass("active");
                $("#r, #e, #a").removeClass("active");
                $("#rr").addClass("hide");
                // $("#rr").removeClass("hide");
            });

        });
    </script>
@endsection
