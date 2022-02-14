@extends('post-layout')
@section('head')
    <title> ICT Field Of Work Blog Post</title>
    <meta name="description"
          content="ICT Field of Work Blog Post Shirel Snopik">
@endsection


<body>

@section('ict-main')
<main class="main-ict-blog">
    <article>
        <h2 class="blog-post"> ICT Field of Work:</h2>
        <br>
        <p class="blog-post">
            Last week we got introduced to some companies, they explained to us what they do and how in order to
            give us
            a glimpse of the day-to-day life in the industry of ICT.
            In this page I will introduce two companies I enjoyed, and maybe I am thinking of working at in the future,
            and explain why I liked them.
            In order to get more Info about the companies please press the posters so they will open in full size.
        </p>
    </article>
    <br>

    <article class="grid-ict" >
        <div class="hackerone-pos">
            <h2> HackerOne:</h2>
            <br>
            <h3> Why I would like to work there in the future?</h3>
            <p> After watching the presentation by HackerOnes's representative Dirk staff, I completly fell in love with
                this company
                it seems that they truly care about their workers, they want to provide an intelectual environment,
                where their workers will
                not only have everything they need in order to succeed and give the company thier 100% but also they
                provide a fun, friendly workspace
                that encourages the employees to have time for themselves, to get to know their coworkers, and relax as
                well if it is by coffee breaks, monthly
                lunches, a day out of the city, karaoke night and much more.
                Moreover than that I find what the company does so important and interesting. Helping their clients get
                the best security systems while finding
                faults in their systmes while incooperating hackers from all around the world by giving them a safe,
                legal good way to use their talents and passion
                for their hobby of hacking in order to improve and help the world.
                I would love to join that team one day if ill get a chance I think it fits perfectly with my desire to improve the world however I can
                by using my passion and knowledge of programming. </p>
            <h3> Cons in the company:</h3>
            <p> The only con I find currently is that they are so exclusive, and almost impossible to work at in
                an internship. But it is giving me a lot of motivation to be successful and good enough for them to want to hire me as well.
            </p>
        </div>

        <div>  <a  href="/pdf/HackerOne-Poster.pdf" target="_blank"> <img class="hackerone-poster-pos" alt="Picture of Poster HackerOne"  src="/img/HackerOne.png" > </a> </div>
    </article>

    <article class="grid-ict2" >
        <div class="atos-pos">
            <h2> Atos:</h2>
            <br>
            <h3> Why I would like to work there in the future?</h3>
            <p> Atos has a department in practically every field of high tech that you could possibly want, from
                quantum
                computing to building automation in industry, cloud computing, cybersecurity, analytics, artificial
                intelligence to software.
                They impressed me because they strive to reduce carbon emissions, and like that reduce the world's
                pollution levels to help Earth.
                They help and are part of so many different fields like the healthcare industry, space
                programs, media entertainment and so much more. Its exciting to me and I believe if I ever were to work there
                it will give me a chance to be a part of a large company that serves a wide range of clients. </p>
        </div>

        <div>  <a  href="/pdf/Atos-Poster.pdf" target="_blank"> <img class="atos-poster-pos" alt="Picture of Poster Atos"  src="/img/Atos.png" > </a> </div>

    </article>
</main>

@endsection
