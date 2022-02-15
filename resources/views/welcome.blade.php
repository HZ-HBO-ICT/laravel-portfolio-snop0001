@extends ('layout');

@section('head')
    <title> Shirel's Home Page</title>
    <meta name="description" content="Home page for Shirel's Snopik website for school">
@endsection

@section('header-title')
    <h1 class="home">Welcome to the Home Page!</h1>
@endsection

@section('content')
        <div class="grid-home-page">
            <div class="Main-home-page">
                <h2> Why did I choose ICT for my studies and future profession?</h2>
                <br>
                <p>
                    I am looking forward to getting back into <strong> programming which is what made me fall in love with computers </strong> in the
                    first place, learning more languages and about all the other possibilities of IT. </p>

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
                <br>

                <h2> Why do I believe I will succeed in this study field?</h2>
                <br>
                <p> Because of my passion for computers in general for both professional reasons and fun and for programing
                    in particular, I believe I will put a lot of effort and invest a lot of my time to achieve the goals I want in
                    this field. </p>
                <br>
                <p> I know I am very committed and hardworking so even if I will struggle I will do my best to improve and learn
                    more and better. </p>
                <br>
                <p> <strong> I have different experience in the field  </strong> at school, I choose to
                    focus
                    on programming <strong> (I studied Java, assembler and
                        visual basic which we used to build a database).</strong></p>
                <br>

                <p>Later when I entered the military service, I was sent to a course where I studied to become a
                    <strong> Network
                        manager </strong>, so I was introduced more towards the hardware part of computers. I ended up serving in the rest of my
                    service
                    as a <strong> deputy commander, project manager and as an infrastructure manager in a Data Center.</strong>
                </p>
                <br>

                <p> Since my release I have been working in <strong> IT support where I assisted clients with problems.</strong>
                    I am looking forward to programing and working in teams with other students and encounter more of the social
                    view of coding which I still did not have experience with.
                </p>
                <br>
                <h2> What do I wish to achieve in My Studies?</h2>

                <ul class="goals-list">
                    <li> professional confidence</li>
                    <li> Knowledge</li>
                    <li> Practical Skills</li>
                </ul>

            </div>

            <div class = "blogposts">
                <br>
                <div class= "posts">
                <h2>Recent Blog Posts:</h2>
                @foreach($articles as $article)
                    <article id = "article">
                 <h3> {{$article->title}}</h3>
                 <p>{{$article->excerpt}}<a class="read-me" href=/blog/{{$article->link}}> Read
                         more.</a></p>
                    </article>
                    <hr>
                @endforeach
                </div>
                <br>
                <div> <img alt="Picture of Shirel and Remco" class="pic-border" id="couple" title="Shirel&Remco" src="/img/coupleHome.jpg">
                </div>
                <br>
                <div> <img alt="Picture of Shirel and Luna" class="pic-border" id="luna" title="My Bunny and Me" src="/img/luna.jpg">
                </div>
            </div>

            <div class="social-media-grid">
                <div class="title-social-media">
                    <h2> Contact Me Here For Further Information!</h2>
                </div>

                <div class="facebook"> <a href="/img/Totally-My-Facebook.jpeg" target="_blank"> <img id="facebook" alt="My Facebook"
                                                                                                     src="/img/facebook.png"> </a> </div>

                <div class="instagram"> <a href="/img/mah-butefol-instegram.mp4" target="_blank"> <img id="instagram" alt="My Instagram"
                                                                                                       src="/img/instagram.png"> </a> </div>
            </div>

            <div id = 'images'>
            <div> <img alt="Picture of Shirel" class="pic-border" id="me" title="Me" src="/img/me.jpg" >
            </div>
            <br>
            <div> <img alt="Picture of Shirel and Bamba" class="pic-border" id="bamba" title="My Puppy and Me" src="/img/Bamba.png">
            </div>
            </div>
            <br>
            <div class="old-web"> <a id="old-web" href="/img/old-page.png" target="_blank"> How this website looked like in the beginning  </a> </div>
        </div>

@endsection

