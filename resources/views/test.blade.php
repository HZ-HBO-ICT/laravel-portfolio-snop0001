<div>
    <link href="/css/home.css" rel="stylesheet" />
    <link href="/css/style2.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
    <div class="home-container">
        <div data-role="Header" class="home-navbar-container">
            <div class="home-navbar">
                <span class="card-Heading home-heading"><img id="my-logo" alt="my-logo" title="my-logo" src="/img/my-logo.png"></span>
                <div class="home-links-container">
                    <a class="home-link navbar-Link {{Request::is('/') ? 'active':''}}" href="/">Home Page</a>
                    <a class="home-link1 navbar-Link {{Request::is('profile') ? 'active':''}}" href="/profile"> Profile</a>
                    <a class="home-link2 navbar-Link {{Request::is('grade') ? 'active':''}}" href="/grade">Dashboard</a>
                    <a class="home-link1 navbar-Link {{Request::is('faq') ? 'active':''}}" href="/faq">FAQ</a>
                    <a class="home-link2 navbar-Link {{Request::is('article') ? 'active':''}}" href="/article">Blog</a>
                    <a class="home-link2 navbar-Link href="#" onclick="history.go(-1)">Back </a>
                </div>
                <div class="hz-logo">
                    <img id="hz-logo" alt="HZ logo" src="/img/logo.png">
                </div>
                <div data-type="BurgerMenu" class="home-burger-menu">
                    <svg viewBox="0 0 1024 1024" class="home-icon">
                        <path
                            d="M128 256h768v86h-768v-86zM128 554v-84h768v84h-768zM128 768v-86h768v86h-768z"
                        ></path>
                    </svg>
                </div>
                <div data-type="MobileMenu" class="home-mobile-menu">
                    <div class="home-container01">
                        <span class="card-Heading home-heading1">Logo</span>
                        <div data-type="CloseMobileMenu" class="home-close-menu">
                            <svg viewBox="0 0 1024 1024" class="home-icon02">
                                <path
                                    d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                                ></path>
                            </svg>
                        </div>
                    </div>
                    <div class="home-links-container1">
                        <span class="home-link4 navbar-Link">About</span>
                        <span class="home-link5 navbar-Link">Experience</span>
                        <span class="home-link6 navbar-Link">Portofolio</span>
                        <span class="navbar-Link">Contact</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-section-separator"></div>
        <div class="home-section-separator1"></div>
        <div class="home-container02">
            <div class="home-hero">
                <div class="home-hero-text-container">
                    <h1 class="home-heading2 section-Heading">
                        Welcome to the Home Page!
                    </h1>
                    <span class="home-text section-Text">
                        <h2> Why did I choose ICT for my studies and future profession?</h2>
            <span>
               I am looking forward to getting back into <strong> programming which is what made me fall in love with computers </strong> in the
                    first place, learning more languages and about all the other possibilities of IT.
            </span>
          </span>
                    <div class="home-cta-btn-container">
                        <button class="home-cta-btn1 button anchor"> ABOUT ME</button>
                    </div>
                </div>
                <img
                    alt="Picture of Shirel"
                    id="me"
                    title="Me"
                    src="/img/me.jpg"
                    class="home-image "
                />
            </div>
        </div>
        <div class="home-features">
            <div class="home-heading-container">
                <h2 class="home-text03 section-Heading">Why programming?</h2>
                <span class="home-text04 section-Text">
          <p> <strong> My main reason for enjoying programming</strong>
                    is the <strong>possibility of creating something new </strong>, writing a code from scratch and tailor it to be able to do what
                    we need
                    it to. </p>
                <hr> <br>
                <p> <strong>Only the thought of something I created being out there </strong> that was not there before
                    makes me so happy, I see
                    it as a way of <strong> leaving my mark in the world. Hopefully one day I want to use it to make the world a better place.</strong>
                    In my opinion each and <strong> every one of us should do at least one small thing to help others or help improve the surroundings
                        in which we live in.</strong> </p>
                <br> <hr>
                <p> I want to connect to my humanity, my compassion and to my caring side and help improve however I can even if just a little the life of someone.
                    If I will be able to use my skills and passions to do so it will be even better and greater!</p>

                <p>For example fo me, My other passion is psychology, so eventually I want to use both programming and psychology to make psychological therapy more accessible
                    to more people all over the world hopefully more affordable as well.
                    <strong>The opportunity to improve the world using computers is endless in my eyes!</strong> </p>
        </span>
            </div>
            <div class="home-cards-container">
                <div class="home-card">
                    <div class="home-icon-container">
                        <svg viewBox="0 0 1170.2857142857142 1024" class="home-icon04">
                            <path
                                d="M1170.286 877.714v73.143h-1170.286v-877.714h73.143v804.571h1097.143zM1097.143 164.571v248.571c0 16-19.429 24.571-31.429 12.571l-69.143-69.143-361.714 361.714c-7.429 7.429-18.857 7.429-26.286 0l-133.143-133.143-237.714 237.714-109.714-109.714 334.286-334.286c7.429-7.429 18.857-7.429 26.286 0l133.143 133.143 265.143-265.143-69.143-69.143c-12-12-3.429-31.429 12.571-31.429h248.571c10.286 0 18.286 8 18.286 18.286z"
                            ></path>
                        </svg>
                    </div>
                    <div class="home-content-container">
                        <span class="home-heading3 card-Heading">Diagrams</span>
                        <span class="home-text05 card-Text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
              nec odio. Praesent libero. Sed cursus ante dapibus diam.c Sed
              nisi. Nulla quis sem at nibh elementum imperdiet.
            </span>
                    </div>
                </div>
                <div class="home-card1">
                    <div class="home-icon-container1">
                        <svg viewBox="0 0 1024 1024" class="home-icon06">
                            <path
                                d="M810 128q34 0 60 26t26 60v256h-214l44-172-172 44v-214h256zM726 726l-44-172h214v256q0 34-26 60t-60 26h-256v-214zM342 554l-44 172 172-44v214h-256q-34 0-60-26t-26-60v-256h214zM128 214q0-34 26-60t60-26h256v214l-172-44 44 172h-214v-256z"
                            ></path>
                        </svg>
                    </div>
                    <div class="home-content-container1">
                        <span class="home-heading4 card-Heading">Wireframes</span>
                        <span class="home-text06 card-Text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
              nec odio. Praesent libero. Sed cursus ante dapibus diam.c Sed
              nisi. Nulla quis sem at nibh elementum imperdiet.
            </span>
                    </div>
                </div>
                <div class="home-card2">
                    <div class="home-icon-container2">
                        <svg viewBox="0 0 865.7188571428571 1024" class="home-icon08">
                            <path
                                d="M207.429 877.714l52-52-134.286-134.286-52 52v61.143h73.143v73.143h61.143zM506.286 347.429c0-7.429-5.143-12.571-12.571-12.571-3.429 0-6.857 1.143-9.714 4l-309.714 309.714c-2.857 2.857-4 6.286-4 9.714 0 7.429 5.143 12.571 12.571 12.571 3.429 0 6.857-1.143 9.714-4l309.714-309.714c2.857-2.857 4-6.286 4-9.714zM475.429 237.714l237.714 237.714-475.429 475.429h-237.714v-237.714zM865.714 292.571c0 19.429-8 38.286-21.143 51.429l-94.857 94.857-237.714-237.714 94.857-94.286c13.143-13.714 32-21.714 51.429-21.714s38.286 8 52 21.714l134.286 133.714c13.143 13.714 21.143 32.571 21.143 52z"
                            ></path>
                        </svg>
                    </div>
                    <div class="home-content-container2">
                        <span class="home-heading5 card-Heading">Design</span>
                        <span class="home-text07 card-Text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
              nec odio. Praesent libero. Sed cursus ante dapibus diam.c Sed
              nisi. Nulla quis sem at nibh elementum imperdiet.
            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-about">
            <div class="home-max-content-width-container">
                <div class="home-heading-container1">
                    <h1 class="section-Heading home-text08">Professional experience</h1>
                </div>
                <div class="home-content-container3">
                    <div class="home-about-1">
                        <div class="home-container03">
                            <svg viewBox="0 0 1024 1024" class="home-icon10">
                                <path
                                    d="M170 512q0-140 101-241t241-101 241 101 101 241-101 241-241 101-241-101-101-241z"
                                ></path>
                            </svg>
                            <span class="home-text09 card-Text">
                Lorem ipsum dolor sit amet aulla quis sem at nibh elementum
                imperdiet.
              </span>
                        </div>
                        <div class="home-container04">
                            <svg viewBox="0 0 1024 1024" class="home-icon12">
                                <path
                                    d="M170 512q0-140 101-241t241-101 241 101 101 241-101 241-241 101-241-101-101-241z"
                                ></path>
                            </svg>
                            <span class="home-text10 card-Text">
                Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
              </span>
                        </div>
                        <div class="home-container05">
                            <svg viewBox="0 0 1024 1024" class="home-icon14">
                                <path
                                    d="M170 512q0-140 101-241t241-101 241 101 101 241-101 241-241 101-241-101-101-241z"
                                ></path>
                            </svg>
                            <span class="home-text11 card-Text">
                Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
              </span>
                        </div>
                    </div>
                    <div class="home-about-11">
                        <div class="home-container06">
                            <svg viewBox="0 0 1024 1024" class="home-icon16">
                                <path
                                    d="M170 512q0-140 101-241t241-101 241 101 101 241-101 241-241 101-241-101-101-241z"
                                ></path>
                            </svg>
                            <span class="home-text12 card-Text">
                <span>
                  Lorem ipsum dolor sit amet aulla quis sem at nibh elementum
                </span>
                <br />
                <span></span>
              </span>
                        </div>
                        <div class="home-container07">
                            <svg viewBox="0 0 1024 1024" class="home-icon18">
                                <path
                                    d="M170 512q0-140 101-241t241-101 241 101 101 241-101 241-241 101-241-101-101-241z"
                                ></path>
                            </svg>
                            <span class="home-text16 card-Text">
                Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
              </span>
                        </div>
                        <div class="home-container08">
                            <svg viewBox="0 0 1024 1024" class="home-icon20">
                                <path
                                    d="M170 512q0-140 101-241t241-101 241 101 101 241-101 241-241 101-241-101-101-241z"
                                ></path>
                            </svg>
                            <span class="home-text17 card-Text">
                Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
              </span>
                        </div>
                    </div>
                </div>
                <button class="home-button anchor button">CHECK MY WORK</button>
            </div>
        </div>
        <div class="home-section-separator2"></div>
        <div class="home-clients">
            <div class="home-heading-container2">
                <h1 class="home-text18 section-Heading">Clients</h1>
                <span class="home-text19 section-Text">
          Here we will put your clients&apos; or partners&apos; logos
        </span>
            </div>
            <div class="home-logo-container">
                <img
                    alt="image"
                    src="/playground_assets/default-img.svg"
                    class="home-logo"
                />
                <img
                    alt="image"
                    src="/playground_assets/default-img.svg"
                    class="home-logo1"
                />
                <img
                    alt="image"
                    src="/playground_assets/default-img.svg"
                    class="home-logo2"
                />
                <img
                    alt="image"
                    src="/playground_assets/default-img.svg"
                    class="home-logo3"
                />
                <img
                    alt="image"
                    src="/playground_assets/default-img.svg"
                    class="home-logo4"
                />
            </div>
        </div>
        <div class="home-pricing">
            <div class="home-heading-container3">
                <h1 class="home-text20 section-Heading">Ask for a quote</h1>
                <span class="home-text21 section-Text">
          Lorme ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
          odio. Praesent libero.
        </span>
            </div>
            <div class="home-pricing-card-container">
                <div class="home-card3">
                    <div class="home-card-heading">
                        <span class="home-type anchor">Minimal</span>
                        <span class="section-Heading">Basic</span>
                    </div>
                    <div class="home-card-content">
                        <div class="home-feature">
                            <span class="card-Text">Feature one</span>
                            <span class="home-limit card-Text">TBD</span>
                        </div>
                        <div class="home-feature1">
                            <span class="card-Text">Feature two</span>
                            <span class="home-limit1 card-Text">TBD</span>
                        </div>
                        <div class="home-feature2">
                            <span class="card-Text">Feature three</span>
                            <span class="home-limit2 card-Text">UNLIMITED</span>
                        </div>
                        <div class="home-feature3">
                            <span class="card-Text">Feature four</span>
                            <span class="home-limit3 card-Text">UNLIMITED</span>
                        </div>
                        <button class="home-choose button anchor">CHOOSE</button>
                    </div>
                </div>
                <div class="home-card4">
                    <div class="home-card-heading1">
                        <span class="home-type1 anchor">medium</span>
                        <span class="section-Heading">Complex</span>
                    </div>
                    <div class="home-card-content1">
                        <div class="home-container09">
                            <span class="card-Text">Feature one</span>
                            <span class="home-text23 card-Text">TBD</span>
                        </div>
                        <div class="home-container10">
                            <span class="card-Text">Feature two</span>
                            <span class="home-text25 card-Text">TBD</span>
                        </div>
                        <div class="home-container11">
                            <span class="card-Text">Feature three</span>
                            <span class="home-text27 card-Text">UNLIMITED</span>
                        </div>
                        <div class="home-container12">
                            <span class="card-Text">Feature four</span>
                            <span class="home-text29 card-Text">UNLIMITED</span>
                        </div>
                        <button class="home-button1 anchor button">CHOOSE</button>
                    </div>
                </div>
                <div class="home-card5">
                    <div class="home-card-heading2">
                        <span class="home-type2 anchor">Premium</span>
                        <span class="section-Heading">Professional</span>
                    </div>
                    <div class="home-card-content2">
                        <div class="home-container13">
                            <span class="card-Text">Feature one</span>
                            <span class="home-text31 card-Text">TBD</span>
                        </div>
                        <div class="home-container14">
                            <span class="card-Text">Feature two</span>
                            <span class="home-text33 card-Text">TBD</span>
                        </div>
                        <div class="home-container15">
                            <span class="card-Text">Feature three</span>
                            <span class="home-text35 card-Text">UNLIMITED</span>
                        </div>
                        <div class="home-container16">
                            <span class="card-Text">Feature four</span>
                            <span class="home-text37 card-Text">UNLIMITED</span>
                        </div>
                        <button class="home-button2 anchor button">CHOOSE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-section-separator3"></div>
        <div class="home-section-separator4"></div>
        <div class="home-faqs">
            <h2 class="home-text38 section-Heading">
                Check the most common questions
            </h2>
            <div class="home-content-container4">
                <div class="home-faq">
                    <div class="home-question-container">
            <span class="home-question">
              Here you would write a frequently asked question?
            </span>
                    </div>
                    <div class="home-answer-container">
            <span class="home-answer card-Text">
              Here you would give the answer. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Integer nec odio. Praesent libero.
              Sed cursus ante dapibus diam.c Sed nisi. Nulla quis sem at nibh
              elementum imperdiet. Here you would give the answer. Lorem ipsum
              dolor sit amet, consectetur adipiscing elit. Integer nec odio.
              Praesent libero. Sed cursus ante dapibus diam.c Sed nisi. Nulla
              quis sem at nibh elementum imperdiet.
            </span>
                        <span class="card-Text">
              Here you would give the answer. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Integer nec odio. Praesent libero.
              Sed cursus ante dapibus diam.c Sed nisi. Nulla quis sem at nibh
              elementum imperdiet.
            </span>
                    </div>
                </div>
                <div class="home-faq1">
                    <div class="home-question-container1">
            <span class="home-question1">
              Here you would write a frequently asked question?
            </span>
                    </div>
                    <div class="home-answer-container1">
            <span class="home-answer2 card-Text">
              Here you would give the answer. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Integer nec odio. Praesent libero.
              Sed cursus ante dapibus diam.c Sed nisi. Nulla quis sem at nibh
              elementum imperdiet.
            </span>
                        <span class="card-Text">
              Here you would give the answer. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Integer nec odio. Praesent libero.
            </span>
                    </div>
                </div>
                <div class="home-faq2">
                    <div class="home-question-container2">
            <span class="home-question2">
              Here you would write a frequently asked question?
            </span>
                    </div>
                    <div class="home-answer-container2">
            <span class="home-answer4 card-Text">
              Here you would give the answer. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Integer nec odio. Praesent libero.
              Sed cursus ante dapibus diam.c Sed nisi. Nulla quis sem at nibh
              elementum imperdiet.
            </span>
                        <span class="card-Text">
              Here you would give the answer. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Integer nec odio. Praesent libero.
              Sed cursus ante dapibus diam.c Sed nisi. Nulla quis sem at nibh
              elementum imperdiet.
            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-section-separator5"></div>
        <div class="home-subscribe">
            <img
                alt="image"
                src="/playground_assets/default-img.svg"
                class="home-image1"
            />
            <div class="home-container17">
                <div class="home-heading-container4">
                    <h1 class="home-text39 section-Heading">
                        Get our guide to crafting digital products
                    </h1>
                    <span class="section-Text home-text40">
            We will send you our monthly freebies on your email. We will not
            share your email address or use it for promotional goals.
          </span>
                </div>
                <input
                    type="text"
                    required="true"
                    placeholder="E-mail"
                    class="home-textinput section-Text input"
                />
                <button class="home-button3 anchor button">SEND</button>
            </div>
        </div>
        <div class="home-section-separator6"></div>
        <div class="home-footer-container">
            <div class="home-footer">
                <div class="home-social-links">
                    <svg viewBox="0 0 950.8571428571428 1024" class="home-icon22">
                        <path
                            d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                        ></path></svg
                    ><svg viewBox="0 0 877.7142857142857 1024" class="home-icon24">
                        <path
                            d="M713.143 73.143c90.857 0 164.571 73.714 164.571 164.571v548.571c0 90.857-73.714 164.571-164.571 164.571h-107.429v-340h113.714l17.143-132.571h-130.857v-84.571c0-38.286 10.286-64 65.714-64l69.714-0.571v-118.286c-12-1.714-53.714-5.143-101.714-5.143-101.143 0-170.857 61.714-170.857 174.857v97.714h-114.286v132.571h114.286v340h-304c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571z"
                        ></path></svg
                    ><svg viewBox="0 0 877.7142857142857 1024" class="home-icon26">
                        <path
                            d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                        ></path>
                    </svg>
                </div>
                <div class="home-copyright-container">
                    <svg viewBox="0 0 1024 1024" class="home-icon28">
                        <path
                            d="M512 854q140 0 241-101t101-241-101-241-241-101-241 101-101 241 101 241 241 101zM512 86q176 0 301 125t125 301-125 301-301 125-301-125-125-301 125-301 301-125zM506 390q-80 0-80 116v12q0 116 80 116 30 0 50-17t20-43h76q0 50-44 88-42 36-102 36-80 0-122-48t-42-132v-12q0-82 40-128 48-54 124-54 66 0 104 38 42 42 42 98h-76q0-14-6-26-10-20-14-24-20-20-50-20z"
                        ></path>
                    </svg>
                    <span class="anchor">Copyright, 2021</span>
                </div>
            </div>
        </div>
    </div>
</div>
