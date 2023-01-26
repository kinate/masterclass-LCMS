<div class="section">
    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
      <div class="container">
        <div class="row g-3">
            <div class="col-12">
                <span class="chart-color3 px-2 py-1 color-fff">Latest Couses</span>
                <h3 class="mb-1 mt-4 color-900">Engage more on high income skills 💰</h3>
                {{-- <p class="lead">It was popularised in the 1960s with the release of Letraset sheets containing.</p> --}}
              </div>

          @foreach ($courses as $course)
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="../assets/img/gallery/1.jpg" alt="" class="card-img-top">
              <div class="card-body">
                <h6 class="mb-4 fw-bold">{{ $course->title }}</h6>
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Duration:</label>
                    <span>{{ $course->duration }}</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Fees:</label>
                    <span class="text-danger">$315.60</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Professor:</label>
                    <span>Kinate soap</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Students:</label>
                    <span>115+</span>
                  </li>
                </ul>
                <a href="{{ URL::to('viewLandingCourse',['id_encoded'=>\base64_encode($course->id)]) }}" class="btn px-4 btn-outline-secondary" role="button">Read more</a>
              </div>
            </div>
          </div>
          @endforeach 
          {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="../assets/img/gallery/2.jpg" alt="" class="card-img-top">
              <div class="card-body">
                <h6 class="mb-4 fw-bold">Angular Programmer Course</h6>
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Duration:</label>
                    <span>6 Months</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Fees:</label>
                    <span class="text-danger">$80.00</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Professor:</label>
                    <span>Fidel Tonn</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Students:</label>
                    <span>50+</span>
                  </li>
                </ul>
                <a href="course-info.html" class="btn px-4 btn-outline-secondary" role="button">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card">
              <img src="../assets/img/gallery/3.jpg" alt="" class="card-img-top">
              <div class="card-body">
                <h6 class="mb-4 fw-bold">Account Management Course</h6>
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Duration:</label>
                    <span>6 Months</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Fees:</label>
                    <span class="text-danger">$458.00</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Professor:</label>
                    <span>Gary Camara</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <label class="mb-2 text-muted">Students:</label>
                    <span>200+</span>
                  </li>
                </ul>
                <a href="course-info.html" class="btn px-4 btn-outline-secondary" role="button">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img src="../assets/img/gallery/3.jpg" alt="" class="card-img-top">
                <div class="card-body">
                  <h6 class="mb-4 fw-bold">Account Management Course</h6>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <label class="mb-2 text-muted">Duration:</label>
                      <span>6 Months</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <label class="mb-2 text-muted">Fees:</label>
                      <span class="text-danger">$458.00</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <label class="mb-2 text-muted">Professor:</label>
                      <span>Gary Camara</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <label class="mb-2 text-muted">Students:</label>
                      <span>200+</span>
                    </li>
                  </ul>
                  <a href="course-info.html" class="btn px-4 btn-outline-secondary" role="button">Read more</a>
                </div>
              </div>
            </div>
        </div> --}}
         <!-- .row end -->
      </div>
    </div>
  </div>