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
        <section>
            <div class="container my-1 py-3">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-start align-items-center">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                        width="60" height="60" />
                                    <div>
                                        <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                        <p class="text-muted small mb-0">
                                            Shared publicly - Jan 2020
                                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                        </p>
                                        
                                    </div>
                                </div>

                                <p class="mt-3 mb-4 pb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                                </p>

                                <div class="small d-flex justify-content-start">
                                    <a href="#!" class="d-flex align-items-center me-3">
                                        <i class="far fa-comment-dots me-2"></i>
                                        <p class="mb-0">32 Comments</p>
                                    </a>
                                </div>
                            </div>
                            <section id="none" >

                                  <div class="row d-flex justify-content-center">
                                    <div class="col-md-12 col-lg-10">
                                      <div class="card text-dark">
                                        <div class="card-body p-4">

                                          <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                                              height="60" />
                                            <div>
                                              <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                                              <div class="d-flex align-items-center mb-3">
                                                <p class="mb-0">
                                                  March 07, 2021
                                                 
                                                </p>
                                                
                                              </div>
                                              <p class="mb-0">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it.
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                              
                                        <hr class="my-0" />
                              
                                        <div class="card-body p-4">
                                          <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60"
                                              height="60" />
                                            <div>
                                              <h6 class="fw-bold mb-1">Lara Stewart</h6>
                                              <div class="d-flex align-items-center mb-3">
                                                <p class="mb-0">
                                                  March 15, 2021
                                                 
                                                </p>
                                                
                                              </div>
                                              <p class="mb-0">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites.
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        
                                       
                                      </div>
                                    </div>
                                  </div>

                              </section>
                            <div class="card-footer py-3 border-0" style="background-color: #e9f1f7;">
                                <div class="d-flex flex-start w-100">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                        width="40" height="40" />
                                    <div class="form-outline w-100">
                                        <textarea class="form-control" id="textAreaExample" rows="2" style="background: #fff;"></textarea>
                                        <label class="form-label" for="textAreaExample">Your comment</label>
                                    </div>
                                </div>
                                <div class="float-end mt-1 pt-1">
                                    <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section >
            <div class="container my-1 py-3">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-start align-items-center">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                        width="60" height="60" />
                                    <div>
                                        <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                        <p class="text-muted small mb-0">
                                            Shared publicly - Jan 2020
                                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                        </p>
                                        
                                    </div>
                                </div>

                                <p class="mt-3 mb-4 pb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                                </p>

                                <div class="small d-flex justify-content-start">
                                    <a href="#!" class="d-flex align-items-center me-3">
                                        <i class="far fa-comment-dots me-2"></i>
                                        <p class="mb-0">32 Comments</p>
                                    </a>
                                </div>
                            </div>
                            <section id="none" style="display:none">

                                  <div class="row d-flex justify-content-center">
                                    <div class="col-md-12 col-lg-10">
                                      <div class="card text-dark">
                                        <div class="card-body p-4">

                                          <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                                              height="60" />
                                            <div>
                                              <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                                              <div class="d-flex align-items-center mb-3">
                                                <p class="mb-0">
                                                  March 07, 2021
                                                 
                                                </p>
                                                
                                              </div>
                                              <p class="mb-0">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it.
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                              
                                        <hr class="my-0" />
                              
                                        <div class="card-body p-4">
                                          <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60"
                                              height="60" />
                                            <div>
                                              <h6 class="fw-bold mb-1">Lara Stewart</h6>
                                              <div class="d-flex align-items-center mb-3">
                                                <p class="mb-0">
                                                  March 15, 2021
                                                 
                                                </p>
                                                
                                              </div>
                                              <p class="mb-0">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites.
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        
                                       
                                      </div>
                                    </div>
                                  </div>

                              </section>
                            <div class="card-footer py-3 border-0" style="background-color: #e9f1f7;">
                                <div class="d-flex flex-start w-100">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                        width="40" height="40" />
                                    <div class="form-outline w-100">
                                        <textarea class="form-control" id="textAreaExample" rows="2" style="background: #fff;"></textarea>
                                        <label class="form-label" for="textAreaExample">Your comment</label>
                                    </div>
                                </div>
                                <div class="float-end mt-1 pt-1">
                                    <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
