<header>
         <!-- header inner -->
         <div class="header">
            <div class="header_top d_none1">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <ul class="conta_icon ">
                           <li><a href="#"><img src="{{ asset('frontend/images/call.png')}}" alt="#"/>Call us: 0126 - 922 - 0162</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <ul class="social_icon">
                           <li> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li> <a href="https://twitter.com/home" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="https://www.linkedin.com/" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <div class="se_fonr1">
                           <form action="#" >
                              <div class="select-box">
                                 <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                                 <!-- <select id="select-box1" class="select">
                                    <option value="Choice 1">English</option>
                                    <option value="Choice 1">Falkla</option>
                                    <option value="Choice 2">Germa</option>
                                    <option value="Choice 3">Neverl</option>
                                 </select> -->

                                 <select class="select form-select changeLang" id="select-box1">
                                 <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                 <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                                 <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                              </select>
                              </div>
                           </form>
                           <span class="time_o"> Open hour: 8.00 - 18.00</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4">
                        <ul class="conta_icon d_none1">
                           <li><a href="#"><img src="{{ asset('frontend/images/email.png')}}" alt="#"/> romofyicollection@gmail.com</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <a class="logo" href="#"><img src="{{ asset('frontend/images/logo.png')}}" alt="#"/></a>
                     </div>
                     <div class="col-md-4">
                        <ul class="right_icon d_none1">
                           <li><a href="{{ url('cart') }}"><img src="{{ asset('frontend/images/shopping.png')}}" alt="#"/></a> </li>
                           <a href="{{ url('#project') }}" class="order">Order Now</a> 
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('shopping')}}">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{url('about-us')}}">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="news.html">News</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact-us')}}">Contact Us</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                           <form action="/action_page.php">
                              <input class="form_sea" type="text" placeholder="Search" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>


                  </div>
               </div>
            </div>
         </div>
      </header>