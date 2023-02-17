@extends('Layouts.LandingLayout')
@section('page_title','View Course')
@section('page_contents')

<div class="container">
    <div class="row g-3">
      <div class="col-12">
        <div class="card">
          <div class="card-body d-flex align-items-center flex-column flex-lg-row">
            <img src="../assets/img/gallery/1.jpg" alt="" class="rounded" style="max-width: 420px;">
            <div class="ms-md-5 m-0 mt-4 mt-lg-0 text-lg-start text-center">
              <h4 class="fw-bold">{{ $course->title }}</h4>
              <div class="d-flex flex-wrap justify-content-center justify-content-lg-start align-items-center mb-4 mt-2">
                <div class="me-3 me-md-5">
                  <small class="text-muted">Duration</small>
                  <div class="mb-0 fw-bold">{{ $course->duration }}</div>
                </div>
                <div class="me-3 me-md-5">
                  <small class="text-muted">Lectures</small>
                  <div class="mb-0 fw-bold">12</div>
                </div>
                <div class="me-3 me-md-5">
                  <small class="text-muted">Language</small>
                  <div class="mb-0 fw-bold">{{ $course->language }}</div>
                </div>
                <div class="me-3 me-md-5">
                  <small class="text-muted">Skill level</small>
                  <div class="mb-0 fw-bold">{{ $course->skill_level }}</div>
                </div>
                <div class="me-3 me-md-5">
                  <small class="text-muted">Quizzes</small>
                  <div class="mb-0 fw-bold">{{ $course->no_quiz }}</div>
                </div>
              </div>
              {{-- <div class="h6">Earn a University of London degree in Computer Science</div> --}}
              <p>{{ $course->description }}</p>
              @if($course->fee == 0)
                <a class="btn btn-primary btn-lg lift" href="#" data-bs-toggle="modal" data-bs-target="#freeEnroll">Free ENROLL</a>
              @else
                <a class="btn btn-primary btn-lg lift" href="#" data-bs-toggle="modal" data-bs-target="#freeEnroll">ENROLL</a>
              @endif
            </div>
          </div>
          <div class="card-footer pb-0 pt-1">
            <ul class="nav nav-tabs tab-card border-bottom-0 tab-card" role="tablist">
              <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#Overview-Course" role="tab" aria-selected="true">Overview</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Curriculum-Course" role="tab" aria-selected="false" tabindex="-1">Curriculum</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Instructor-Course" role="tab" aria-selected="false" tabindex="-1">Instructor</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#Reviews-Course" role="tab" aria-selected="false" tabindex="-1">Reviews</a></li>
            </ul>
          </div>
        </div> <!-- .Card End -->
      </div>
      <div class="col-12">
        <div class="tab-content">
          <div class="tab-pane fade card active show" id="Overview-Course" role="tabpanel">
            <div class="card-body">
              <h6>Why do we use it?</h6>
              <p>{{ $course->overview }}</p>
              <!-- <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span> -->
            </div>
          </div>
          <div class="tab-pane fade card" id="Curriculum-Course" role="tabpanel">
            <div class="card-body">
              @if($course->curriculum !== null)
              @foreach ($course->curriculum as $curriculum )
              <h5>{{$curriculum->title}}</h5>
              <ul class="list-group list-group-custom list-group-flush mb-4">
                @foreach ($curriculum->content as $content )
                <li class="list-group-item d-flex px-0">
                  <div class="me-3">{{$content->lecture_no}}</div>
                  <a class="text-truncate h6 mb-0" href="#">{{$content->title}}</a>
                  
                  <div class="ms-auto">
                    <span class="text-muted">{{$content->time}}</span>
                  </div>
                </li>
               
                @endforeach
              </ul>
              @endforeach
              @else
                No Curriculum Content 
              @endif

            </div>
          </div>

          <div class="tab-pane fade" id="Instructor-Course" role="tabpanel">
            
          
            @foreach ($course->instructors as $instructor)
            <div class="card" style="padding-bottom: 20px;">
                <div class="card-body d-flex align-items-center flex-column flex-md-row">
                    
                    <img src="../assets/img/lg/avatar2.jpg" alt="" class="rounded" style="width: 210px;">
                    <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center">
                      <h4 class="mb-1 fw-light">{{  $instructor->title  }} {{  $instructor->name  }}<a href="#" class="fa fa-pencil-square-o fs-6 ms-2" data-bs-toggle="offcanvas" data-bs-target="#edit_profile" title="Edit Profile"></a></h4>
                      <p>{{  $instructor->email  }}</p>
                      <span class="text-muted">{{ $instructor->bio }}</span>
                      <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                        <div class="card py-2 px-3 me-2 mt-2">
                          <small class="text-muted">Degree</small>
                          <div class="fs-6">PHD in Mathmatics</div>
                        </div>
                        <div class="card py-2 px-3 me-2 mt-2">
                          <small class="text-muted">Awards</small>
                          <div class="fs-6">45</div>
                        </div>
                        <div class="card py-2 px-3 me-2 mt-2">
                          <small class="text-muted">Experience</small>
                          <div class="fs-6">8+</div>
                        </div>
                        <div class="card py-2 px-3 me-2 mt-2">
                          <small class="text-muted">City</small>
                          <div class="fs-6">New york</div>
                        </div>
                      </div>
                    </div>
                   
                </div>
              </div>
              @endforeach
            
          </div>
          <div class="tab-pane fade card" id="Reviews-Course" role="tabpanel">
            <ul class="list-unstyled mb-0">
              <li class="d-flex p-3 border-bottom">
                <img src="../assets/img/xs/avatar1.jpg" class="avatar rounded" alt="profile-image">
                <div class="flex-fill ms-3">
                  <h6 class="mb-0">Cameron Fox</h6>
                  <div class="mb-2">
                    <span class="badge bg-warning me-2">5</span>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                  </div>
                  <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                </div>
              </li>
              <li class="d-flex p-3 border-bottom">
                <img src="../assets/img/xs/avatar2.jpg" class="avatar rounded" alt="profile-image">
                <div class="flex-fill ms-3">
                  <h6 class="mb-0">Hossein Shams</h6>
                  <div class="mb-2">
                    <span class="badge bg-warning me-2">5</span>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                  </div>
                  <span>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure</span>
                </div>
              </li>
              <li class="d-flex p-3 border-bottom">
                <img src="../assets/img/xs/avatar3.jpg" class="avatar rounded" alt="profile-image">
                <div class="flex-fill ms-3">
                  <h6 class="mb-0">Chris Fox</h6>
                  <div class="mb-2">
                    <span class="badge bg-warning me-2">3.5</span>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star-half-o small"></i>
                    <i class="fa fa-star-o small"></i>
                  </div>
                  <span>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</span>
                </div>
              </li>
              <li class="d-flex p-3">
                <img src="../assets/img/xs/avatar4.jpg" class="avatar rounded" alt="profile-image">
                <div class="flex-fill ms-3">
                  <h6 class="mb-0">Fidel Tonn</h6>
                  <div class="mb-2">
                    <span class="badge bg-warning me-2">4.5</span>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star small"></i>
                    <i class="fa fa-star-half-o small"></i>
                  </div>
                  <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- .row end -->
  </div>

  {{-- @include('Layouts.Components.relatedCouses') --}}

  <!-- start: Flight Booking -->
  <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <!-- <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#freeEnroll" type="button">View in modals</button> -->
            <div class="modal fade" id="freeEnroll" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content text-start">

                  <div class="modal-body custom_scroll p-lg-5 ">
                    <div class="row g-3">
                    {{-- <form action="{{ URL::to('enroll_free_course') }}" method="POST"> --}}
                        @csrf
                      <div class="col-12 mb-4">
                        <h4 class="apetizer_message">Great Choice 👏🏼👏🏼👏🏼</h4>
                        <span class="text-muted instruction_message">One more step to go, Please fill in the form to enroll for the course <b>{{$course->title}}</b></span>
                      </div>
                        {{-- <form action="{{ URL::to('enroll_free_course') }}" method="POST">

                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="text" class="form-control" placeholder="Full name">
                          <label>Full Name</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="text" class="form-control" placeholder="FLYING TO">
                          <label>Email Address</label>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="form-floating">
                          <input type="text" class="form-control" placeholder="FLYING TO">
                          <label>Phone Number</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input not_student" type="radio" name="inlineRadioOptions" id="Roundtrip" value="option1" checked>
                          <label class="form-check-label" for="Roundtrip">I am NOT a student</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input student" type="radio" name="inlineRadioOptions" id="Oneway" value="option2">
                          <label class="form-check-label" for="Oneway">I am a student</label>
                        </div>
                        <!-- <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MultiCity" value="option3">
                          <label class="form-check-label" for="MultiCity">Multi-City</label>
                        </div> -->
                      </div>
                      <!-- <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="date" class="form-control" placeholder="DEPARTING">
                          <label>DEPARTING</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="date" class="form-control" placeholder="RETURNING">
                          <label>RETURNING</label>
                        </div>
                      </div> -->
                      <div class="col-lg-4 col-md-12 uni_course_element">
                      <div class="form-floating">
                          <input type="text" class="form-control uni_course" placeholder="Course">
                          <label>I am studying..</label>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12 uni_year_element">
                      <div class="form-floating">
                          <input type="text" class="form-control uni_year" placeholder="Year">
                          <label>Year</label>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12 uni_college_element">
                        <div class="form-floating">
                          <select class="form-select uni_college">
                            <option selected hidden>Open this select menu</option>
                            <option value="1">UDSM</option>
                            <option value="2">DIT</option>
                            <option value="3">IFM</option>
                            <option value="3">Other</option>
                          </select>
                          <label>University/College/School</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-lg btn-secondary text-uppercase" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-lg btn-primary text-uppercase" type="submit">Lets Go! 🚀</button>
                      </div>
                    </form> --}}

                    {{-- <form class="row g-3 maskking-form" action="{{ URL::to('enroll_free_course') }}" method="POST"> --}}
                    <form class="row g-3 maskking-form free_course_form" method="POST" id="enroll_free_course">
                        @csrf
                        <div class="col-12">
                          <span class="float-label">
                            <input type="text" name="course_id" value="{{ $course->id}}" class="form-control form-control-lg" id="" readonly hidden>
                            <input type="text" name="course" value="{{ $course->title}}" class="form-control form-control-lg" id="" readonly hidden>
                            <input type="text" name="name" class="form-control form-control-lg" id="TextInput" placeholder="Type">
                            <label class="form-label" for="TextInput">What is your name?</label>
                          </span>
                        </div>
                        <div class="col-12">
                          <span class="float-label">
                            <input type="email" name="email" class="form-control form-control-lg" id="emailInput" placeholder="Type">
                            <label class="form-label" for="emailInput">Your email address</label>
                          </span>
                        </div>
                        <div class="col-12">
                            <span class="float-label">
                              <input type="text" name="phone" class="form-control form-control-lg" id="phoneInput" placeholder="255713xxx">
                              <label class="form-label" for="phoneInput">Your phone number</label>
                            </span>
                          </div>
                        <!-- student-->
                        <div class="col-sm-6 col-12">
                            
                            <div class="form-check form-check-inline">
                              <label class="form-check-label" for="flexRadioDefault1">I am NOT a student.</label>
                              <input class="form-check-input not_student" type="radio" id="flexRadioDefault1" name="radio" required="" data-parsley-errors-container="#error-radio" data-parsley-multiple="radio" checked>
                            </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label" for="flexRadioDefault2">I am a student</label>
                              <input class="form-check-input student" type="radio" id="flexRadioDefault2" name="radio" data-parsley-multiple="radio">
                            </div>
                            <p id="error-radio"></p>
                          </div>
                        <div class="col-12 uni_course_element">
                            <span class="float-label">
                              <input type="text" name="uni_course" class="form-control form-control-lg uni_course " id="courseInput" placeholder="Type.." disabled>
                              <label class="form-label" for="courseInput">What do you study?</label>
                            </span>
                          </div>
                          <div class="col-12 uni_college_element">
                            <span class="float-label">
                              <input type="text" name="uni_college" class="form-control form-control-lg uni_college" id="uniInput" placeholder="Type.." disabled>
                              <label class="form-label" for="uniInput">Which college/University?</label>
                            </span>
                          </div>
                        <!--........-->  
                        <div class="col-12">
                          <span class="float-label">
                            <textarea name="comment" class="form-control form-control-lg" id="TextArea" rows="5" cols="30" placeholder="Comment"></textarea>
                            <label class="form-label" for="TextArea">Any comment for better lerning?</label>
                          </span>
                        </div>
                        <div class="col-12"> 
                            <button type="submit" class="btn btn-primary btn-lg">Enroll and Lets Go! ⚡️</button>
                            <span id="loading_image">Loading...</span>
                          </div>
                          <div class="col-12 enroll_error_message"> 
                            <div class="alert alert-danger">🙆🏽‍♂️ Ooops! Something went wrong, please check your information or internet connection and try again</div>
                          </div>
                        {{-- <div class="col-12">
                          <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select">
                              <option value="">India</option>
                              <option value="">US</option>
                              <option value="">UK</option>
                            </select>
                            <span>Country</span>
                          </label>
                        </div> --}}
                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          
      </div>
           
@endsection