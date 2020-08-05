<template>
  <div id="app">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Page Top</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services" >Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading">ONE PAGE</div>
          <div class="intro-lead-in">MULTI-PURPOSE THEME</div>
          <p>Premiun one-page multi-purpose theme perfect for everyone - start using Moxie today!</p>
          <br/><br/>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">GET STARTED</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container" style="background-color:#f8f9fa">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="section-subheading text-muted">BRINDING YOU PROVEN RESULTS</p>
            <h1 class="section-heading text-uppercase" style="color:#0DB7C4">Our Services</h1>
            <p class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</p>
            <br/>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <img class="img-fluid d-block mx-auto" src="../src/assets/icons/flow-children.svg" alt="">
            <h4 class="service-heading">Marketing</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt eos, tempore, quibusdam magnam ab ex neque commodi ipsum consequatur earum animi inventore quisquam perferendis illum recusandae tempora? Iusto, delectus molestias.<p/>
          </div>
          <div class="col-md-4">
            <img class="img-fluid d-block mx-auto" src="../src/assets/icons/plane-outline.svg" alt="">
            <h4 class="service-heading">Advertising</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt eos, tempore, quibusdam magnam ab ex neque commodi ipsum consequatur earum animi inventore quisquam perferendis illum recusandae tempora? Iusto, delectus molestias.<p/>
          </div>
          <div class="col-md-4">
            <img class="img-fluid d-block mx-auto" src="../src/assets/icons/cloud-storage-outline.svg" alt="">
            <h4 class="service-heading">Cloud Storage</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt eos, tempore, quibusdam magnam ab ex neque commodi ipsum consequatur earum animi inventore quisquam perferendis illum recusandae tempora? Iusto, delectus molestias.<p/>
          </div>
          <div class="col-md-4">
            <img class="img-fluid d-block mx-auto" src="../src/assets/icons/group-outline.svg" alt="">
            <h4 class="service-heading">Consulting</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt eos, tempore, quibusdam magnam ab ex neque commodi ipsum consequatur earum animi inventore quisquam perferendis illum recusandae tempora? Iusto, delectus molestias.<p/>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="section-heading text-muted text-uppercase">Some of our accomplishments</p>
            <h1 class="section-subheading text-uppercase">About us</h1>
            <br/><br/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-panel">
                  <div>
                    <img src="../src/assets/icons/briefcase.svg" alt=""/>
                    <h4>AUG 2014</h4>
                    <p>'Inventors welcome'</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-panel">
                  <div>
                    <h6 class="text-uppercase">Investment deal inked - pulsar media stocks skyrocket</h6>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <Portfolio></Portfolio>

    <!-- Test -->
    <Test></Test>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="section-heading text-uppercase text-muted" >Have a questions?.</p>
            <h1 class="section-subheading text-uppercase" style="color:#0DB7C4">Contact Us</h1>
            <br/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
              <img class="img-fluid d-block mx-auto" src="../src/assets/icons/location.svg" alt="">
              <p class="text-muted" style="text-align: center;">toronto. Canada L4K9JW</p>
          </div>
          <div class="col-md-4 col-sm-6">
              <img class="img-fluid d-block mx-auto" src="../src/assets/icons/phone.svg" alt="">
              <p class="text-muted" style="text-align: center;">1-888-555-5584</p>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="../src/assets/icons/mail.svg" alt="">
              <p style="text-align: center;">info@info.com</p>
            </a>
            <br/>
          </div>
          <img class="img-fluid d-block mx-auto" src="../src/assets/img/google-map.jpg" alt="">
        </div>
        <br/> <br/>
        <div class="row">
          <div class="col-lg-12 ">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <input class="form-control" id="first_name" type="text" placeholder="First Name *" required="required" data-validation-required-message="Please enter your first name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <input class="form-control" id="last_name" type="text" placeholder="Last Name *" required="required" data-validation-required-message="Please enter your last name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container" >
        <div class="row">
          <div class="col-md-12">
            <ul class="list-inline social-buttons" >
              <li class="list-inline-item" >
                <a href="#" style="background:#fed136">
                  <img src="../src/assets/icons/social-twitter.svg"/>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" style="background:#fed136">
                  <img src="../src/assets/icons/social-facebook.svg"/>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" style="background:#fed136">
                  <img src="../src/assets/icons/social-instagram.svg"/>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" style="background:#fed136">
                  <img src="../src/assets/icons/social-linkedin.svg"/>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Explore</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="../src/assets/img/explore.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: Aug 2020</li>
                    <li>Client: Company</li>
                    <li>Category: Explore</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times">
                    </i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Finish</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="../src/assets/img/finish.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: Aug 2020</li>
                    <li>Client: Company</li>
                    <li>Category: Finish</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Lines</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="../src/assets/img/lines.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: Aug 2020</li>
                    <li>Client: Company</li>
                    <li>Category: Lines</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Southwest</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="../src/assets/img/southwest.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: Aug 2020</li>
                    <li>Client: Company</li>
                    <li>Category: Southwest</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Window</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="../src/assets/img/window.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: Aug 2020</li>
                    <li>Client: Company</li>
                    <li>Category: Window</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Coffe</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="../src/assets/img/coffee.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: Aug 2020</li>
                    <li>Client: Company</li>
                    <li>Category: Coffe</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

import Portfolio from './components/Portfolio'
import Test from './components/Test'

export default {
  name: 'app',
  components: {
    Portfolio,
    Test
  }
}
</script>