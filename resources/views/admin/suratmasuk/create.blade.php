@extends ('layouts.app')

@section ('content')
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Forms layout</strong><span class="small ms-1">Gutters</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">By adding<a href="https://coreui.io/docs/layout/gutters/">gutter modifier classes</a>, you can have control over the gutter width in as well the inline as block direction.<strong>Also requires the <code>$enable-grid-classes</code> Sass variable to be enabled</strong> (on by default).</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1036" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/layout/#gutters" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1036">
                        <div class="row g-3">
                          <div class="col">
                            <input class="form-control" type="text" placeholder="First name" aria-label="First name">
                          </div>
                          <div class="col">
                            <input class="form-control" type="text" placeholder="Last name" aria-label="Last name">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="text-medium-emphasis small">More complex layouts can also be created with the grid system.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-267" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/layout/#gutters" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-267">
                        <form class="row g-3">
                          <div class="col-md-6">
                            <label class="form-label" for="inputEmail4">Email</label>
                            <input class="form-control" id="inputEmail4" type="email">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="inputPassword4">Password</label>
                            <input class="form-control" id="inputPassword4" type="password">
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="inputAddress">Address</label>
                            <input class="form-control" id="inputAddress" type="text" placeholder="1234 Main St">
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="inputAddress2">Address 2</label>
                            <input class="form-control" id="inputAddress2" type="text" placeholder="Apartment, studio, or floor">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="inputCity">City</label>
                            <input class="form-control" id="inputCity" type="text">
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="inputState">State</label>
                            <select class="form-select" id="inputState">
                              <option selected="">Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="col-md-2">
                            <label class="form-label" for="inputZip">Zip</label>
                            <input class="form-control" id="inputZip" type="text">
                          </div>
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" id="gridCheck" type="checkbox">
                              <label class="form-check-label" for="gridCheck">Check me out</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Sign in</button>
                          </div>
                        </form>
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