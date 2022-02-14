@extends('layout')



@section('head')
    <title> Shirel's Profile </title>
    <meta name="description" content="Profile Page for Shirel's Snopik website for school">
@endsection

@section('header-title')
    <h1>Welcome to My Profile!</h1>
@endsection


@section('content')
    <div class="grid-profile">
        <div class="couple-pic"> <img alt="Picture of Shirel and her boyfriend" id="couple-pic"
                                      title="Me with my Boyfriend" src="/img/Couple.jpg">
        </div>

        <div class="family-pic"> <img id="family-pic" alt=" My Family and Me" title="Group Picture of my family and me"
                                      src="/img/family.png"> </div>

        <div class="cactus-pic"> <img id="cactus-pic" alt="Picture of a cactus" title="cute drawing of cactus"
                                      src="/img/cactus.png">
        </div>

        <div class="army-pic"> <img id="army-pic" alt="finishing Network Manager Course in the IDF"
                                    title="Group Picture from IDF Course" src="/img/army.jpg"> </div>

        <div class="hobbies-pic">
            <img id="hobbies-pic" alt="My hobbies Drawings" title="My hobbies" src="/img/Hobbies.png">
        </div>

        <div class="Main-grid-profile">

            <h2>Personal information</h2>
            <p> My name is Shirel Snopik I am 23 years old. I come originally from Beer-Sheva,Israel, the capital city of
                the Negev region
                in a very little country in the middle east. </p>

            <p> I speak 3.5 languages, Hebrew & Spanish from my home country and family, English from school and extra
                activities and a bit of Dutch.</p>

            <p> I moved to the Netherlands to live with my
                Partner of the past 5 and a half years, I am looking forward to become a part of the Netherlands in general
                and especially part of the community here.</p>

            <p> I believe that by studying at HZ and researching programming which is a subject that was always close to my
                heart I`ll be able to achieve all my goals in this new country.
            </p>
            <br>

            <h2>What I did before I arrived to the Netherlands? </h2>
            <p> In my country we study 6 years of primary school and 6 of high school. In the last 3 years of high school
                you choose a "specialty" - subjects you will focus on and get extra credit for, I chose the computer science department
                and physics. </p>

            <p> After I graduated from high school I entered my military service (in Israel it is obligatory to serve 2 years
                for women and 3 for men). In my service I was located at Jerusalem where I was in charge of server administration mainly.</p>

            <p>  After taking a break of a few months after getting released from the IDF, I started working as a tech support in a military base as
                a civilian and took some courses in the university in my city, to improve my high school diploma and for fun, like "Relationships
                in psychology's eyes", "Quantitative Thinking" and "Academic English". </p>

            <br>

            <h2>Extra-curricular activities</h2>
            <h3>Do you work/are you planning to work alongside your studies? What do you do in your spare time? How do you
                think
                you can combine this with studying? </h3>
            <p>Maybe I will want to work alongside my studies, but it is not certain, I will need to combine my self studies
                for the Dutch
                Ingeburg Examen I need to take by the next 3 years together with my studies, I hope to pass these tests in
                the upcoming year
                so ill be able to focus fully just on the ICT studies.
                In my spare time I enjoy mainly doing the following:</p>

            <div class="inner-grid-hobbies">
                <div>
                    <ul id="hobbies-list">
                        <li>Yoga</li>
                        <li>meditations</li>
                        <li>Cooking</li>
                        <li>Gaming</li>
                        <li>Singing and dancing</li>
                    </ul>
                </div>

                <div class="par-hobbies">
                    <p>I also love to travel and get to know new locations especially now that I moved to the Netherlands.
                        During my
                        studies I tend to focus mainly on my studies,
                        so I need to learn to combine my other interests together with them to be able to feel more relaxed. I
                        will
                        probably combine my meditations, cooking and yoga
                        before or after the study days and the rest of my hobbies more on the weekends and vacations.</p>
                </div>
            </div>

            <br>
            <h2>Extra Information About Me </h2>
            <p> My family is originally from Argentina, that is also why I speak Spanish. I have one older brother who is
                married to a lovely woman who gave him his two twin sons Itamar and Omer. Both my parents and my brother work
                in the medical
                industry. I have two amazingly adorable pets, my puppy Bamba and my BunBun Luna they are both 6 years old, and
                I miss them very much!
                currently, I am living with my partner in his parents house in Hoek until we finish fixing our own house in
                Biervliet.
            </p>
        </div>

        <div class="nephews-pic"> <img id="nephews-pic" alt="Picture of Shirel's Nephews,Brother and Sister-in-law"
                                       title="My Nephews, My Brother and My Sister-in-law" src="/img/nephews.png">
        </div>
    </div>
@endsection
