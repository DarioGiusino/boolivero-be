<header>
  <div class="bkg-b">
    <div class="container">
      <div class="row align-items-center">

        <!-- logo -->

        <div class="col-2 col-sm-4 col-md-3 col-lg-5 col-xl-6">
          <a class="navbar-brand d-flex align-items-center" href="{{ url('/admin') }}">
            <div class="logo m-0">
              <img
                src="https://media.discordapp.net/attachments/1090194914433839158/1092735923176882276/Logo-BOOLIVEROO-WHITE.png?width=1440&height=490"
                alt="logo-deliveroo" class="img-fluid">
            </div>
          </a>
        </div>


        <!-- navbar-menu -->
        <div class="col-8 col-sm-8 col-md-9 col-lg-7 col-xl-6">
          <ul class="row text-end mb-0">

            <!-- PARTNER WITH US -->
            <li class="d-none d-md-block col-md-4">
              <div class="partner-with-us">
                <div class="dropdown">
                  <button class="btn nav-but" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" id="partner-dropdown">
                    <span style="font-size:0.75rem;"><i class="lg fa-solid fa-chevron-down"></i>Partner with us</span>
                  </button>

                  <!-- SUB-MENU -->
                  <ul class="dropdown-menu" aria-labelledby="partner-dropdown">
                    <li><a class="dropdown-item sub-menu-item" href="#"><span><i
                            class=" lg fa-solid fa-bicycle"></i>Riders</span></a></li>
                    <li><a class="dropdown-item sub-menu-item" href="#"><span><i
                            class="lg fa-solid fa-utensils"></i>Restaurants</span></a>
                    </li>
                    <li><a class="dropdown-item sub-menu-item" href="#"><span><i
                            class="lg fa-solid fa-briefcase"></i>Riders</span></a>
                    </li>
                    <li><a class="dropdown-item sub-menu-item" href="#"><span><i
                            class="lg fa-solid fa-shop"></i>Riders</span></a></li>
                  </ul>
                </div>
              </div>
            </li>

            <!-- CART -->
            <li class="d-none d-sm-block col-sm-3 col-md-2">
              <button class="btn nav-but" aria-current="page" href="#">
                <span style="font-size:0.63rem;"><i class="lg fa-solid fa-cart-shopping"></i>$0.00</span>
              </button>
            </li>

            <!-- SIGN UP -->
            <li class=" col-8  col-sm-5 col-md-3">
              <a href="http://127.0.0.1:8000/login">
                <button class="btn nav-but" href="#">
                  <span style="font-size:0.63rem;"><i class="lg fa-solid fa-house"></i>Sign up or
                    login</span>
                </button>
              </a>
            </li>


            <!-- MENU -->

            <li class="col-4 col-sm-3  col-md-2">
              <button class="btn nav-but" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"><span style="font-size:0.63rem;"><i
                    class="lg fa-solid fa-bars"></i>Menu</span></button>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header ">
                  <!-- LOGO AND CLOSE UP BUTTON-->

                  <div class="logo d-flex align-items-center">
                    <img
                      src="https://media.discordapp.net/attachments/1090194914433839158/1092736001354518528/Logo-COLORATO-BOOLEVEROO-.png?width=1440&height=490"
                      alt="logo-deliveroo" class="img-fluid ">

                    <button type="button" class="btn-close ms-5 " data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>


                </div>

                <div class="offcanvas-body">
                  <hr>
                  <!-- OFFCANVAS SIGN UP BUTTON -->

                  @guest
                    <div class="text-start my-5">
                      <a href="{{ route('login') }}" class=" sign-up-button">Sign up or login</a>
                    </div>
                  @else
                    <div class="text-start my-5">
                      <a class="sign-up-button" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>

                  @endguest




                  <!-- OFFCANVAS MENU -->
                  <div class="container off-canvas-menu">
                    <div class="row text-start ms-4">

                      <!-- CART -->
                      <div class="col-12 mb-3">
                        <a href="#"><span><i
                              class="fa-solid fa-cart-shopping text-secondary pe-3"></i>$0.00</span></a>
                      </div>

                      <!-- RIDER -->
                      <div class="col-12 mb-3">
                        <a href="#"><span><i class="fa-solid fa-bicycle pe-3 text-secondary"></i>Become a
                            Rider</span></a>
                      </div>

                      <!-- RESTAURANT -->
                      <div class="col-12 mb-3">
                        <a href="#"><span><i class="fa-solid fa-utensils pe-3 text-secondary"></i>Add your
                            restaurant</span></a>
                      </div>

                      <!-- OFFICE -->
                      <div class="col-12 mb-3">
                        <a href="#"><span><i class="fa-solid fa-briefcase pe-3 text-secondary"></i>Sign up
                            your
                            office</span></a>
                      </div>

                      <!-- FAQS -->
                      <div class="col-12">
                        <a href="#"><span><i
                              class="fa-solid fa-circle-question pe-3 text-secondary"></i>FAQs</span></a>
                      </div>

                    </div>

                    <!-- region LANGUAGE  -->

                    <div class="region ms-4">
                      <div class="languages">
                        <select name="languages" id="languages" class="choose-your-button mx-auto">
                          <option value="">English</option>
                        </select>
                      </div>

                      <div class="country mt-4">
                        <select name="country" id="country" class="choose-your-button mx-auto">
                          <option value="">United Kingdom</option>
                          <option value="">Australia</option>
                          <option value="">Belgium</option>
                          <option value="">France</option>
                          <option value="">Fermany</option>
                          <option value="">Hong Kong</option>
                          <option value="">Ireland</option>
                          <option value="" selected>Italy</option>
                          <option value="">Kuwait</option>
                          <option value="">Netherlands</option>
                          <option value="">Qatar</option>
                          <option value="">Singapore</option>
                          <option value="">Spain</option>
                          <option value="">Taiwan</option>
                          <option value="">United Arab Emirates</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
