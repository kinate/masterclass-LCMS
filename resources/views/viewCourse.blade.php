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
              <a class="btn btn-primary btn-lg lift" href="#" target="_blank">Free ENROLL</a>
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
              <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
            </div>
          </div>
          <div class="tab-pane fade card" id="Curriculum-Course" role="tabpanel">
            <div class="card-body">
              <h5>Introduction &amp; Getting Started</h5>
              <ul class="list-group list-group-custom list-group-flush mb-4">
                <li class="list-group-item d-flex px-0">
                  <div class="me-3">Lecture 1.1</div>
                  <a class="text-truncate h6 mb-0" href="#">What will you learn in this course</a>
                  <div class="ms-auto">
                    <span class="badge bg-info me-2">Preview</span><span class="text-muted">25 min</span>
                  </div>
                </li>
                <li class="list-group-item d-flex px-0">
                  <div class="me-3">Lecture 1.2</div>
                  <a class="text-truncate h6 mb-0" href="#">Angular Overview</a>
                  <div class="ms-auto">
                    <span class="text-muted">30 min</span>
                  </div>
                </li>
                <li class="list-group-item d-flex px-0">
                  <div class="me-3">Lecture 1.3</div>
                  <a class="text-truncate h6 mb-0" href="#">Angular Product</a>
                  <div class="ms-auto">
                    <span class="text-muted">30 min</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="tab-pane fade" id="Instructor-Course" role="tabpanel">
            <div class="card">
              <div class="card-body text-center p-5">
                <img src="../assets/img/no-data.svg" class="w120" alt="No Data">
                <div class="mt-4 mb-3">
                  <span class="text-muted">No data to show</span>
                </div>
                <button type="button" class="btn btn-white border lift">Get Started</button>
                <button type="button" class="btn btn-primary border lift">Back to Home</button>
              </div>
            </div>
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


@endsection