<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Article::factory()->count(2)->create();
        DB::table('articles')->insert([
            'title' => 'Actions done after feedback',
            'excerpt'=> 'What I have changed in the website since the pitch',
            'body' => '<article class="blog-article">
        <h2 class="blog-Post"> The Feedback Actions Points I have changed since My Pitch:</h2>
        <br>
              <ol class="blog-post">
           <li> Cleaned up my style sheet,Cancelled repetitions (managed to narrow it down from 838 lines to 610). </li>
           <li>Making my footer not sticky but instead that it will stay at the bottom of the page.</li>
           <li>Added a logo of my name in all the pages of the website.</li>
           <li>Adjusted the design more, (mainly worked on the dashboard and FAQ to match the other pages).</li>
           <li>Added some information in the website and edited different passages to
            be more relevant, for example my goal and motivation. Added the
             connection between me wanting to work at HackerOne and my desire to help the world.</li>

        </ol>

      </article>',
            'class' => 'blog-pos3',
            'link' => 'changes-after-pitch',
        ]);

        DB::table('articles')->insert([
            'title' => 'ICT Field of Work',
            'excerpt'=> 'knowledge from the Company Safari',
            'body' => '<main class="main-ict-blog">

        <article>
            <h2 class="blog-post"> ICT Field of Work:</h2>
            <br>
            <p class="blog-post">
                Last week we got introduced to some companies, they explained to us what they do and how in order to
                give us
                a glimpse of the day-to-day life in the industry of ICT.
                In this page I will introduce two companies I enjoyed and maybe am thinking of working at in the future,
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
            <p> After watching the presentation by HackerOnes representative Dirk staff, I completly fell in love with
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
    I would love to join that team one day if ill get a chance I think it fits perfectly
    with my desire to improve the world however I can
                by using my passion and knowledge of programming. </p>
                <h3> Cons in the company:</h3>
                <p> The only con I find currently is that they are so exclusive, and almost impossible to work at in
                    an internship. But it is giving me a lot of motivation to be successful
                     and good enough for them to want to hire me as well.
                </p>
            </div>

              <div>  <a  href="/pdf/HackerOne-Poster.pdf" target="_blank">
              <img class="hackerone-poster-pos" alt="Picture of Poster HackerOne"
              src="/img/HackerOne.png" > </a> </div>
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
    They impressed me because they strive to reduce carbon emissions, and like that reduce the worlds
                    pollution levels to help Earth.
                    They help and are part of so many different fields like the healthcare industry, space
                    programs, media entertainment and so much more.
                    Its exciting to me and I believe if I ever were to work there
                    it will give me a chance to be a part of a large company that serves a wide range of clients. </p>
                </div>

                  <div>  <a  href="/pdf/Atos-Poster.pdf" target="_blank">
                   <img class="atos-poster-pos" alt="Picture of Poster Atos"  src="/img/Atos.png" > </a> </div>

                </article>
    </main>',
            'class' => 'blog-pos1',
            'link' => 'ict-field-of-work',
        ]);

        DB::table('articles')->insert([
            'title' => 'First Feedback',
            'excerpt'=> 'Feedback on My "Who Am I?" assignment...',
            'body' => '<article class="blog-article">
        <h2 class="blog-Post"> First Feedback on my "Who Am I?" assignment:</h2>
        <br>
          <p class="blog-post">
            I received Daphnes feedback in person last week.
    Her feedback divided into two parts, one about my motivation for the studies and one about my personal development.
    About my motivation she told me it is better to focus on the story behind my love for programming and coding, which
    for me it is the creation of something new that did not exist before,
    something I can see as a product and as a result for
    for my effort.
    She said my personal development will be to focus on my stress and overthinking.
     She said it will be good for me to practice
    how to take breaks at certain hours and limit my work hours so I can enjoy other things too and not worn myself out.
    We disscussed that maybe together with my fellow students we will send a message at
    a certain hour obliging ourselves to take a break
            and stop working.
    I am looking forward to managing and helping myself to be more relaxed and laid back
     then I am right now, so I will be able to produce
            good results and succeed in my studies together with having fun and leisure time as well.
          </p>
      </article>',
            'class' => 'blog-pos2',
            'link' => 'first-feedback',
        ]);

        DB::table('articles')->insert([
            'title' => 'Programming experience',
            'excerpt'=> 'Do I have experience in programming, from where and what kind of experience?',
            'body' => '<article class="blog-article">
        <h2 class="blog-post"> My experiance with programming:</h2>
        <br>
        <section>
            <h3 class="blog-post">Do you have any programming experience? This may be due to you prior education, your
                hobbies and interests, job or any other kind of experience.</h3>
               <p class="blog-post"> Yes </p>
        </section>
        <br> <br>
       <section>
            <h3 class="blog-post">You stated that you have some programming experience.
            Can you tell us where you had this
                 experience?</h3>
               <p class="blog-post">Prior education </p>
        </section>
        <br> <br>
       <section>
            <h3 class="blog-post">Motivate your programming experience.
            What kind of experience did you had? Which language(s)
                or platform(s)? Etc. </h3>
               <p class="blog-post">Basic knowledge in JAVA ,Assembler and a bit of c#
                programing languages, together with knowledge working with
                databases of Microsoft Access. Have basic knowledge about servers,
                 computer hardware and network protocols as well </p>
        </section>
      </article>',
            'class' => 'blog-pos3',
            'link' => 'programming-experience',
        ]);

        DB::table('articles')->insert([
            'title' => 'Personal SWOT Analysis',
            'excerpt'=> 'My personal Strenghts, weaknesses,Opportunities and Threats for the upcoming studies',
            'body' => '<article class="blog-article">
        <h2 class="blog-post"> Personal SWOT analysis:</h2>

        <section>
          <h3 class="blog-post">Strenghts:</h3>
          <br>
               <ol class="blog-post">
                <li> Curious - I love to explore and research different subjects from computers to psychology etc. </li>
                <br>
                <li> Social - I love getting to know people and other cultures </li>
                <br>
                <li> Detail oriented and good at problem solving - my previous experience with
                 programming made me think in algorithms
                and pay attention to small details in general, life situations and in tasks.</li>
               </ol>

        </section>
        <br>
        <section>
            <h3 class="blog-post">Weaknesses:</h3>
            <ol class="blog-post">
               <li> Insecure - I sometimes feel like I am not qualified enough for certain positions or that I am
                less good than others. </li>
                <br>
                <li>Too detail oriented - it can be a strength sometimes, but also a weakness because
                I tend to focus too much on the
                    small details rather than the big picture.</li>
                 <br>
                <li>Anxious and nervous - I tend to get stressed and want to complete a lot in a short
                 period of time, which sometimes
                    results in me putting a lot on myself. </li>
            </ol>
        </section>
        <br>
        <section>
             <h3 class="blog-post">Opportunities:</h3>
                <p class="blog-post">Because of my insecurities in combination with me being very
                studious and self disciplined, I will spend extra time on studying and perfecting my
                 projects. My curiosity leads me to explore and learn further than needed. Being social
                  helps me get along with my teammates, colleagues and fellow students, and to be able to
                   properly contribute in group tasks. My strong attention to details helps me to
                   encounter and solve problems in my personal and career life. And my anxiety helps me
                   pay extra attention to things around me,it pushes me to finish tasks in the right
                   deadline and because I am aware I suffer from this I know to plan my schedule and
                    divide my time for all my projects.
                </p>
         </section>
         <br>
        <section>
             <h3 class="blog-post">Threats:</h3>
                <p class="blog-post">I will need as well to combine my integration exams to the Netherlands
                 alongside my studies and get used to a different country since I moved here only this month,
                 but I do not think it will cause a problem or be an obstacle.
                 I do not think my weaknesses will prevent me from succeeding since I am very motivated
                  and I will work hard to get passed them and use them as much as I can for my advantage
                   like I wrote in the "Opportunities" section.
                </p>
         </section>


      </article>',
            'class' => 'blog-pos1',
            'link' => 'personal-swot-analysis',
        ]);

        DB::table('articles')->insert([
            'title' => 'Study Choice',
            'excerpt'=> 'Study Choice Activities Motivate Your Study Choice After completing the Study',
            'body' => '<article  class="blog-article">
        <h2 class="blog-post"> Study Choice:</h2>
        <br>
        <section>
          <h3 class="blog-post">Study Choice Activities </h3>
             <p class="blog-post">I have read about my options and different paths I can take
              and took my time to understand
               what I want to do in my career. I sadly missed the webinars but I watched the recordings uploaded on the
                forum and maybe I will speak to ambassador students before the start of the semester. The background of
                my experiance with computers and IT I already explained before.
             </p>
        </section>
        <br> <br>
        <section>
            <h3 class="blog-post">Motivate Your Study Choice</h3>
              <p class="blog-post"> Computers always interested me, at school,
               I choose to focus on programming (I studies Java, assembler and visual
                basic which we used to build a database). Later when I entered the military
                 service which is obligatory in my country,
                 I did exams to enter the computer subjects, there I was sent to a course
                  where I studied to become a Network manager,
                  so I was introduced more towards the hardware part of computers.
                   I ended up serving in the rest of my service as a
                  deputy commander of a computer center, project manager and as an
                   infrastructure manager in a Data Center. Since my
                   release I have been working in IT support where I assisted clients with problems.
                  I am looking forward to get back into programming which is what made
                   me fall in love with computers in the first place,
                  learning more languages and about all the other possibilities of IT.
                   My main reason for enjoying programming is the
                  possibility of creating something new, writing a code from scratch and
                   tailor it to be able to do what we need it to
                  or what is required
              </p>
        </section>
        <br> <br>
        <section>
             <h3 class="blog-post">After completing the Study</h3>
                <p class="blog-post">After graduating, I will either enter a high-tech
                 company where I can be a programmer,
                    a data analysis or a  software tester all of them interest me for now so I am not sure which I will
                    focus on. Or I will continue my studies further either into a masters degree in software engineering
    or to study psychology and cognitive science which are subjects that in the end, I am hoping to combine
                     with the IT degree and knowledge ill earn in HZ to be able to create an advanced
                      artificial intelligence
                     being or a smart program to help people who have no access to psychologists or who
                      cannot afford a proper
                     treatment. I have many fields of interest and my goal is to be able to combine
                      them to create something
                     useful for humanity.
                </p>
         </section>
      </article>',
            'class' => 'blog-pos2',
            'link' => 'study-choice-blog-post',
        ]);

        DB::table('articles')->insert([
            'title' => 'Nesting Article in Section or Vice Versa?',
            'excerpt'=> 'In my opinion the Section element should be inside of the Article element...',
            'body' => '<article class="blog-article">
        <h2 class="blog-post"> Nesting Article in Section or Vice Versa?</h2>
        <br>
          <p class="blog-post"> In my opinion the Section element should be
          inside of the Article element. Article is meant
            to represent individiual parts of text that dont necessary have
            a connection between them in terms of structure of text,
             in contrast to Sections which are meant to define parts of the same
              text such as "Description","content","contact" etc. so they should appear in a certain order.
            Therfore, in my opinion an Article will be built by a number of Sections to form a proper text.
          </p>
      </article>',
            'class' => 'blog-pos3',
            'link' => 'article-section-blog-post',
        ]);
    }
}
