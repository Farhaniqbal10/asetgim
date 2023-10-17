  @extends('Tamplate.dashboard.main')

  @section('content_dashboard')
      <!--start wrapper-->
      <div class="wrapper">

          @include('Tamplate.dashboard.sidebar')

          @include('Tamplate.dashboard.header')


          <!-- start page content wrapper-->
          <div class="page-content-wrapper">
              <!-- start page content-->
              <div class="page-content">

                  <!--start breadcrumb-->
                  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                      <div class="breadcrumb-title pe-3">Dashboard</div>
                  </div>
                  <!--end breadcrumb-->


                  <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
                      <div class="col">
                          <div class="card radius-10">
                              <div class="card-body">
                                  <div class="d-flex align-items-start gap-2">
                                      <div>
                                          <p class="mb-0 fs-6">Selamat Datang, di Gana !</p>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center mt-2 mb-3">
                                      <div>
                                          <h4 class="mb-0">{{ auth()->user()->username }}</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @if (Auth::user()->type == 'admin')
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Total Asset</p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                              <ion-icon name="wallet-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $assetCount }}</h4>
                                          </div>
                                          <div class="ms-auto">+6.32%</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @else
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Total Point</p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                              <ion-icon name="wallet-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">992</h4>
                                          </div>
                                          <div class="ms-auto">+6.32%</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif
                      @if (Auth::user()->type == 'admin')
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Total Creator </p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                                              <ion-icon name="people-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $users }}</h4>
                                          </div>
                                          <div class="ms-auto">+12.45%</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @else
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Asset 3D </p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                                              <ion-icon name="dice-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $assetCount3D }}</h4>
                                          </div>
                                          <div class="ms-auto">+12.45%</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif

                      @if (Auth::user()->type == 'admin')
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Your Asset</p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                                              <ion-icon name="layers-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $assetCount }}</h4>
                                          </div>
                                          <div class="ms-auto">+8.52%</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @else
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Asset 2D</p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                                              <ion-icon name="images-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $assetCount2D }}</h4>
                                          </div>
                                          <div class="ms-auto">+8.52%</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif
                  </div>
                  <!--end row-->



                  <div class="card radius-10 w-100">
                      <div class="card-body">
                          <div class="d-flex align-items-center">
                              <h6 class="mb-0">Detail Assets Post</h6>
                              <div class="fs-5 ms-auto dropdown">
                                  <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                      data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li>
                                          <hr class="dropdown-divider">
                                      </li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="table-responsive mt-2">
                              <table class="table align-middle mb-0">
                                  <thead class="table-light">
                                      <tr>
                                          <th>No.</th>
                                          <th>Asset Name</th>
                                          <th>Status</th>
                                          <th>Description</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($assets as $asset)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>
                                                  <div class="d-flex align-items-center gap-3">
                                                      <div class="product-info">
                                                          <h6 class="product-name mb-1">{{ $asset->name }}</h6>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="badge bg-success">{{ $asset->status }}</span></td>
                                              <td>{{ $asset->description }}</td>
                                              <td>
                                                  <div class="d-flex align-items-center gap-3 fs-6">
                                                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom" title=""
                                                          data-bs-original-title="View detail" aria-label="Views">
                                                          <ion-icon name="eye-outline"></ion-icon>
                                                      </a>
                                                      <a href="javascript:;" class="text-warning"
                                                          data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                          title="" data-bs-original-title="Edit info"
                                                          aria-label="Edit">
                                                          <ion-icon name="pencil-outline"></ion-icon>
                                                      </a>
                                                      <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom" title=""
                                                          data-bs-original-title="Delete" aria-label="Delete">
                                                          <ion-icon name="trash-outline"></ion-icon>
                                                      </a>
                                                  </div>
                                              </td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- end page content-->
          </div>
          <!--end page content wrapper-->


          <!--start footer-->
          <footer class="footer">
              <div class="footer-text">
                  Copyright © 2023. All right reserved.
              </div>
          </footer>
          <!--end footer-->


          <!--Start Back To Top Button-->
          <a href="javaScript:;" class="back-to-top">
              <ion-icon name="arrow-up-outline"></ion-icon>
          </a>
          <!--End Back To Top Button-->

          <!--start switcher-->
          <div class="switcher-body">
              <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                  <ion-icon name="color-palette-outline" class="me-0"></ion-icon>
              </button>
              <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                  data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                  <div class="offcanvas-header border-bottom">
                      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                  </div>
                  <div class="offcanvas-body">
                      <h6 class="mb-0">Theme Variation</h6>
                      <hr>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                              value="option1" checked>
                          <label class="form-check-label" for="LightTheme">Light</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                              value="option2">
                          <label class="form-check-label" for="DarkTheme">Dark</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark"
                              value="option3">
                          <label class="form-check-label" for="SemiDark">Semi Dark</label>
                      </div>
                      <hr />
                      <h6 class="mb-0">Header Colors</h6>
                      <hr />
                      <div class="header-colors-indigators">
                          <div class="row row-cols-auto g-3">
                              <div class="col">
                                  <div class="indigator headercolor1" id="headercolor1"></div>
                              </div>
                              <div class="col">
                                  <div class="indigator headercolor2" id="headercolor2"></div>
                              </div>
                              <div class="col">
                                  <div class="indigator headercolor3" id="headercolor3"></div>
                              </div>
                              <div class="col">
                                  <div class="indigator headercolor4" id="headercolor4"></div>
                              </div>
                              <div class="col">
                                  <div class="indigator headercolor5" id="headercolor5"></div>
                              </div>
                              <div class="col">
                                  <div class="indigator headercolor6" id="headercolor6"></div>
                              </div>
                              <div class="col">
                                  <div class="indigator headercolor7" id="headercolor7"></div>
                              </div>
                              <div class="col">
                                  <div class="indigator headercolor8" id="headercolor8"></div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <!--end switcher-->


          <!--start overlay-->
          <div class="overlay nav-toggle-icon"></div>
          <!--end overlay-->

      </div>
      <!--end wrapper-->
  @endsection
