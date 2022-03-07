<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/mobilememnu.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
    <!-- <link rel="stylesheet" href="css/nav_style.scss" /> -->

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{asset('frontend/img/babel_logo_transparent.png')}}"
    />
    <title>
      Babel - The Company has created tradition on accounts of its treatment
      expertise and approach.
    </title>
  </head>
  <body>
    <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="{{asset('frontend/img/newlogo.PNG')}}" alt="" class="img-fluid logoimg" />

            <div class="wrapper">
              <!-- First mobile menu design -->
              <div class="section sectionOne">
                <div class="mobile">
                  <div class="hamburger-menu">
                    <div class="bar"></div>
                  </div>
                </div>
              </div>

              <!-- section one -->

              <div class="mobile-nav hide">
                <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">New Settlement</a></li>
                  <li><a href=""> - Upcoming Events</a></li>
                  <li><a href="">- Complete Events</a></li>
                  <li><a href="">Products</a></li>
                  <li><a href="">- Medical Equipment’s</a></li>
                  <li><a href="">- Furniture Equipment’s</a></li>
                  <li><a href="">Others Equipment’s</a></li>
                  <li><a href="">Our Partners</a></li>
                  <li><a href="">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <!-- wrapper -->
          </div>
          <div class="col-md-9">
            <nav class="navbar navbar-expand-lg mobile-off">
              <div class="container-fluid">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#"
                        >Home</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        class="nav-link"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        >New Settlement</a
                      >
                      <ul
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdownMenuLink"
                      >
                        <li>
                          <a class="dropdown-item" href="#">Upcoming Events</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Complete Events</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        class="nav-link"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Products
                      </a>
                      <ul
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdownMenuLink"
                      >
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Our Partners</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">
                        <i class="fa fa-search"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <!-- Carousel wrapper -->
    <section id="slider">
      <div class="">
        <div id="carouselExampleCaptions" class="carousel slide"  data-bs-ride="carousel">
          <div class="carousel-indicators">
          @foreach($slider as $key=>$sliders)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$key++}}" class="active" aria-current="true" aria-label="Slide {{$key++}}"
            ></button>
            @endforeach
            <!-- <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button> -->
          </div>
          <div class="carousel-inner">
          @foreach($slider as $key=>$sliders)
            <div class="carousel-item @if($key=='0') active @endif">
              <img
                src="{{asset('assets/images/slider')}}/{{$sliders->image}}"
                class="img-fluid d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-md-block">
                <h5>{{$sliders->title1}}</h5>
                <div class="caption-prg">
                  <p>
                    {{$sliders->title2}}
                  </p>
                </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="carousel-item">
              <img
                src="{{asset('frontend/img/img-3.jpg')}}"
                class="img-fluid d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-md-block">
                <h5>BABEL</h5>
                <div class="caption-prg">
                  <p>
                    The company was established in 1986. The Company has created
                    tradition on accounts of its treatment expertise and
                    approach. Our country, Babel Corporation became a limited
                    (joint stock) company on 28-02-2002 and has given a giant
                    step in this trade of business.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="{{asset('frontend/img/img-1.jpg')}}"
                class="img-fluid d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-md-block">
                <h5>BABEL</h5>
                <div class="caption-prg">
                  <p>
                    The company was established in 1986. The Company has created
                    tradition on accounts of its treatment expertise and
                    approach. Our country, Babel Corporation became a limited
                    (joint stock) company on 28-02-2002 and has given a giant
                    step in this trade of business.
                  </p>
                </div>
              </div>
            </div> -->
          </div>
          <div class="carousel-control-prev">
            <button
              class="carousel-control-prev-btn"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <div class="carousel-control-prev-bag">
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </div>
            </button>
          </div>
          <div class="carousel-control-next">
            <button
              class="carousel-control-next-btn"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row equipment">
          <div class="col-md-4 medical-equ">
            <p>Medical Equipment</p>
          </div>
          <div class="col-md-4 furniture-equ">
            <p>Furniture/Accrosories</p>
          </div>
          <div class="col-md-4 other-equ">
            <p>Others Equipment</p>
          </div>
        </div>
      </div>
    </section>
    <br />

    <section id="services">
      <div class="container services">
        <h3 class="services-header p-5">Services</h3>
        <div class="row d-flex justify-content-between">
          <div class="col-md services-item">
            <div>
              <img src="{{asset('frontend/img/service-1.png')}}" alt="" />
            </div>
            <p>Product Maintaince</p>
          </div>
          <div class="col-md services-item">
            <div>
              <img src="{{asset('frontend/img/service-2.png')}}" alt="" />
            </div>
            <p>Workshop</p>
          </div>
          <div class="col-md services-item">
            <div>
              <img src="{{asset('frontend/img/service-3.png')}}" alt="" />
            </div>
            <p>Customer Charter</p>
          </div>
          <div class="col-md services-item">
            <div>
              <img src="{{asset('frontend/img/service-4.png')}}" alt="" />
            </div>
            <p>Repair & Installation</p>
          </div>
        </div>
      </div>
    </section>
    <br /><br />
    <section id="selling_brand">
      <div class="container selling_brand p-5">
        <h3>Best Selling Brands</h3>
      </div>
    </section>
    <br />
    <br />
    <section id="history">
      <div class="container history">
        <h3 class="history-header">More than 35 years of history</h3>

        <div class="row d-flex justify-content-between history-list">
          <div class="col-md history-item history-img">
            <img src="{{asset('frontend/img/history.png')}}" class="img-fluid" alt="gurrently-img" />
          </div>
          <div class="col-md mt-5 history-item history-padding">
            <h3 class="mb-3">Our Company</h3>
            <p>
              The company was established in 1986. The Company has created
              tradition on accounts of its treatment expertise and approach. Our
              country, Babel Corporation became a limited (joint stock) company
              on 28-02-2002 and has given a giant step in this trade of
              business. Now our company headed by a Chairman Engr.<br /><br />
              Jennur Hossain who is a graduate Engineer from BUET of the batch
              1984. An Electro-Medical Engineer Nazrul Islam retired CTM (Chief
              Technical Manager) of NEMEW, Mohakhali, Dhaka advises the MD on
              technical matters relating to planning, preparation of technical
              specifications, installation & management of after sales service
              for medical equipment.
            </p>
          </div>
          <div class="col-md mt-5 history-item history-padding">
            <h3 class="mb-3">Contact Info</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi
              dolor, sodales ac suscipit vitae, rutrum viverra massa
            </p>
            <p>Call Us: +8801789456123</p>
            <p>Mail Us: info@babel.com</p>
            <a class="btn history-btn-msg" href=""
              >Send a message
              <i
                style="padding: 0 5px; font-size: 14px"
                class="fa fa-envelope"
                aria-hidden="true"
              ></i
            ></a>
          </div>
        </div>
      </div>
    </section>
    <br />
    <br />

    <!-- Achivements section -->
    <section id="achivement">
      <div class="container">
        <div class="row achivement">
          <div class="col-md-12">
            <h3>Our Achivements so Far</h3>
          </div>

          <div class="row">
            <div class="col-sm-5">
              <div class="achivement-icon">
                <span style="display: inline-block"
                  ><i class="fa fa-book"></i
                ></span>
                <p style="display: inline-block">000</p>
              </div>
              <p class="achivement-pre">Realistions</p>
            </div>
            <div class="col-sm-5">
              <div class="achivement-icon">
                <span style="display: inline-block"
                  ><i class="fa fa-file"></i
                ></span>
                <p style="display: inline-block">000</p>
              </div>
              <p class="achivement-pre">Hand made elements</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br /><br />

    <section id="testimonial">
      <div class="container testimonial">
        <div class="row">
          <h3 class="col-12 testmonial-header">Testmonials</h3>
          <div
            id="carouselExampleControls"
            class="carousel slide col-12"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-body">
                  <p>
                    Donec sit amet dolor lobortis, commodo nunc in, tincidunt
                    tortor. Mauris ullamcorper, diam vitae blandit volutpat, mi
                    mauris mattis est, eu porta turpis leo sed urna. Sed
                    pulvinar enim pharetra rutrum convallis. Cras elementum est
                    quis dolor facilisis, vel scelerisque mauris posuere.
                    Quisque convallis rutrum risus, iaculis feugiat erat aliquet
                    eu. Vivamus ipsum magna, pulvinar quis metus at, interdum
                    malesuada lorem.
                  </p>
                  <div class="tesimonial-atr">
                    <img src="{{asset('frontend/img/index.jpg')}}" alt="" />
                    <h4>Jhone Deo</h4>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
              </span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"
                ><i class="fa fa-angle-right"></i
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    <br /><br />
    <section id="partners">
      <div class="container">
        <h3>Our Partners</h3>
        <div class="row d-flex justify-content-between">
          <div class="col-md pb-3 partner-spns">
            <img src="{{asset('frontend/img/parent1.png')}}" class="" alt="" />
          </div>
          <div class="col-md pb-3 partner-spns">
            <img src="{{asset('frontend/img/parent2.png')}}" class="" alt="" />
          </div>
          <div class="col-md pb-3 partner-spns">
            <img src="{{asset('frontend/img/parent3.png')}}" class="" alt="" />
          </div>
          <div class="col-md pb-3 partner-spns">
            <img src="{{asset('frontend/img/parent4.png')}}" class="" alt="" />
          </div>
          <div class="col-md pb-3 partner-spns">
            <img src="{{asset('frontend/img/parent5.png')}}" class="" alt="" />
          </div>
        </div>
      </div>
    </section>
    <br /><br /><br />

    <!-- footer -->
    <section id="footer">
      <div class="container pb-5 footer">
        <div class="row">
          <div class="col-md-4 footer-about">
            <h3 class="footer-about-header">About Us</h3>
            <p class="footer-about-prg">
              About Us The company was established in 1986. The Company has
              created tradition on accounts of its treatment expertise and
              approach. Our country, Babel Corporation became a limited (joint
              stock) company on 28-02-2002 and has given a giant step in this
              trade of business. Now our company headed by a Chairman Engr.
            </p>
            <a href="">Read More</a>
          </div>
          <div class="col-md-2 footer-link">
            <h3 class="footer-link-header">Quick Links</h3>
            <div>
              <ul class="footer-list">
                <li class="footer-item"><a href="">About</a></li>
                <li class="footer-item"><a href="">New Settlement</a></li>
                <li class="footer-item"><a href="">Products</a></li>
                <li class="footer-item"><a href="">Terms and Conditions</a></li>
                <li class="footer-item"><a href="">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 footer-products">
            <h3 class="footer-products-header">Products</h3>
            <div>
              <ul class="footer-list">
                <li class="footer-item"><a href="">Medical Equipment’s</a></li>
                <li class="footer-item">
                  <a href="">Furniture Equipment’s</a>
                </li>
                <li class="footer-item"><a href="">Others Equipment’s</a></li>
              </ul>
            </div>
            <h3 class="footer-settlement-header">New Settlement</h3>
            <ul class="footer-list">
              <li class="footer-item"><a href="">Complete Events</a></li>
              <li class="footer-item"><a href="">Upcoming Events</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-contact">
            <h3 class="footer-contact-header">Contact Us</h3>
            <p class="footer-contact-prg">
              BABEL CORPORATION LTD. 12/1, Sangsad Avenue, Monipuripara (1st
              floor) Dhaka-1215, Bangladesh. Phone : +880-2-58151658, 58151663
              Fax : ++880-2-9122548 E-mail: babelbd@gmail.com,
              sales@babel.com.bd Web: www.babelbd.com Area: 3000 sq. ft
              (Approx).
            </p>
          </div>
        </div>
      </div>
      <hr />
      <div class="container">
        <ul class="footer-down-nav ">
          <li class="footer-nav-item">© 2008-2019</li>
          <li class="footer-nav-item">All Righs Reserved</li>
          <li class="footer-nav-item">Powered by <a href="">Unlocklive</a></li>
          <li class="footer-nav-item"><a href="">Terms & Conditions </a></li>
          <li class="footer-nav-item"><a href="">Privacy Policy</a></li>
        </ul>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/js/mobilemenu.js')}}"></script>
    
    <script>
      const $dropdown = $(".dropdown");
      const $dropdownToggle = $(".dropdown-toggle");
      const $dropdownMenu = $(".dropdown-menu");
      const showClass = "show";

      $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 768px)").matches) {
          $dropdown.hover(
            function () {
              const $this = $(this);
              $this.addClass(showClass);
              $this.find($dropdownToggle).attr("aria-expanded", "true");
              $this.find($dropdownMenu).addClass(showClass);
            },
            function () {
              const $this = $(this);
              $this.removeClass(showClass);
              $this.find($dropdownToggle).attr("aria-expanded", "false");
              $this.find($dropdownMenu).removeClass(showClass);
            }
          );
        } else {
          $dropdown.off("mouseenter mouseleave");
        }
      });
    </script>
  </body>
</html>
