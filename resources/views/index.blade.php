@extends('layouts.app1')
@include('inc.navbar')

@section('content')

<section class="hero-container hide-on-small-only">
    <video id="video" autoplay class="responsive-video"  loop>
      <source src="./vid/banner.mp4" type="video/mp4">
    </video>
    <div class="overlay">
      <div class="inner">
        <h2 class="center">Accelerating Climate Resilience Among Agricultural Value Chain Players</h2>
        <a href="{{ route('register') }}" class="waves-effect blue darken-1 waves-light btn-large" style="margin-left: 35%; margin-top: 5%; border-radius: 20px;"><i class="material-icons right">keyboard_arrow_right</i>sign up</a>
        
      </div>
  </div>
</section>

<div class="backx">
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block ">
            <!-- <h2 class="brown-text"><i class="material-icons">flash_on</i></h2> -->
            <h2 class="new-blue-text" style="margin-top: 100px; ">Our Work</h2>

              <p class="new-blue-text">Founded in 2016, AgricConnect International is a social venture working to eradicate poverty and improve food security by leveraging technology to connect smallholder farmers to ready markets while promoting climate-smart and sustainable agriculture. Our international agri-business community and platform supports rural and agri-market development in Ghana and beyond. 
                Agriculture is known to be highly vulnerable to the negative impacts of climate change. Evidently global food production has been disrupted over recent years with continuous reduction in crop yields. This has impacted food availability and affordability, leading to food insecurity.
                For food systems to withstand the global challenges and its threat to livelihoods, there is the need to ensure a sustainable agriculture system while maintaining a healthy environment for future generations. This is the role AgricConnect plays. 
              </p>
          </div>
          <div class="row">
            <div class="col s5"> <a href="#!" class="btn waves-effect waves-teal">Play Climate Game</a></div>
            <div class="col s5"> <a href="#!" class="btn waves-effect waves-teal">Join Forum</a></div>
          </div>
        </div>
          <div class="col s6 m3" style="margin-top: 100px;">
            <img style="width: 110%;" src="/img/diagram/calculator.png" alt="">
          </div>
          <div class="col s6 m3" style="margin-top: 100px;">
            <img style="width: 80%;" src="/img/diagram/reduce.png" alt="">
          </div>
          <div class="col s6 m3">
            <img style="width: 90%;" src="/img/diagram/offset.png" alt="">
          </div>
          <div class="col s6 m3">
            <img style="width: 90%;" src="/img/diagram/advocacy-icon-1.png" alt="">
          </div>
          <div class="col s6 m3">
            <img style="width: 90%;" src="/img/diagram/collaborate.png" alt="">
          </div>
      </div>
    </div>
  </div>
</div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">An End-to-End Climate Adaptation Empowering Smallholder Farmers</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="./img/agric3.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container" style="margin-top: 50px; margin-bottom: 100px;">
    <div class="section">

      <div class="row">
        <h2 class="new-blue-text">our impact</h2>
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="./img/13.PNG">
            </div>
            <!-- <div class="card-action">
              <a href="#">Climate Action</a>
            </div> -->
          </div>
        </div>

        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="./img/1.PNG">
            </div>
            <!-- <div class="card-action">
              <a href="#">No poverty</a>
            </div> -->
          </div>
        </div>

        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="./img/2.PNG">
            </div>
            <!-- <div class="card-action">
              <a href="#">Zero Hunger</a>
            </div> -->
          </div>
        </div>

        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="./img/5.png">
            </div>
            <!-- <div class="card-action">
              <a href="#">Gender Equality</a>
            </div> -->
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="backx">
    <div class="container">
      <div class="section">
  
        <!--   Icon Section   -->
        <div class="row" style="margin-top: 50px; margin-bottom: 100px;">
          <div class="col s12 m12">
            <div class="icon-block">
              <h2 class="new-blue-text" style="margin-bottom: 100px;">Our partners</h2>
              <!-- <a class="waves-effect waves-light btn">Meet our clients</a> -->
  
             <div class="row">
                <div class="col s6 m4">
                      <div class="col s12 m4">
                        <img src="./img/p.jpg" alt="peterpan" class="circle responsive-img"> <!-- notice the "circle" class -->
                      </div>
                </div>
                <div class="col s6 m4">
                  <div class="col s12 m4">
                    <img src="./img/sweet roses.jpg" alt="sweet roses" class="circle responsive-img"> <!-- notice the "circle" class -->
                  </div>
                </div>
                <div class="col s6 m4">
                  <div class="col s12 m4">
                    <img src="./img/eu.png" alt="eu" class="circle responsive-img"> <!-- notice the "circle" class -->
                  </div>
                </div>
             </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 50px; margin-bottom: 100px;">
    <div class="section">

      <div class="row">
        <h2 class="new-blue-text">News</h2>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-action">
              <a href="https://agricconnectghana.wordpress.com/2017/08/14/8-reasons-why-you-should-add-more-fruits-and-vegetables-to-your-diet/">Read more</a>
            </div>
            <div class="card-content new-blue-text">
              <p class="truncate">Take a random guess, when was the last time you had vegetables and fruits in your diet? Generally, Ghanaians rarely consume vegetables in their meals. The reasons being vegetables are either expensive or getting fresh ones are hard to come by.</p>
            </div>
            <div class="card-image">
              <img src="./img/8reason.jpg">
              <!-- <span class="card-title">8 REASONS WHY YOU SHOULD ADD MORE FRUITS AND VEGETABLES TO YOUR DIET</span> -->
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-action">
              <a href="https://agricconnectghana.wordpress.com/2017/06/19/combating-pests-and-diseases-with-the-law/">Read more</a>
            </div>
            <div class="card-content new-blue-text">
              <p class="truncate">It is almost criminal when we as a people realize the amount of food we lose to pests and diseases each year. Hundreds of millions worth of produce are lost worldwide to pests and diseases; so much that the effect of such loses is felt both socially and economically.</p>
            </div>
            <div class="card-image">
              <img src="./img/combat.jpg">
              <!-- <span class="card-title">COMBATING PESTS AND DISEASES WITH THE LAW</span> -->
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-action">
              <a href="https://agricconnectghana.wordpress.com/2017/06/05/agriculture-in-ghana-the-neglected-green-gold/">Read more</a>
            </div>
            <div class="card-content new-blue-text">
              <p class="truncate">Agriculture is the backbone of the Ghanaian economy. However, the steady decline of the sector in the last seven (7) years in terms of its contribution to Gross Domestic Product (GDP) is a worrying trend. According to the 2016 budget by Ministry of Finance.</p>
            </div>
            <div class="card-image">
              <img src="./img/neg.jpg">
              <!-- <span class="card-title">AGRICULTURE IN GHANA; THE NEGLECTED GREEN GOLD</span> -->
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="backx">
    <div class="container">
      <div class="section">
  
        <!--   Icon Section   -->
        <div class="row" style="margin-top: 50px; margin-bottom: 100px;">
          <div class="col s12 m12">
            <div class="icon-block">
              <h2 class="new-blue-text">Our Team</h2>
  
             <div class="row">
              
                <div class="col s12 m4">
                      <div class="col s12 m12">
                        <div class="card hoverable">
                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="./img/team/nas.JPG">
                          </div>
                          <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Nassif Dauda<i class="material-icons right">more_vert</i></span>
                            <p class="center"><a href="#">Co-Founder</a></p>
                            <p class="center">Global Technology Officer</p>
                          </div>
                          <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Nassif Dauda<i class="material-icons right">close</i></span>
                            <p style="font-size: 15px; text-align: justify;">Nassif is a highly skilled professional with over 6 years of experience in using technology to address food security issues. He has a background in information technology and agribusiness which has equipped him with a unique skill set to tackle complex problems in the agriculture sector.
                              Through is career, he has worked with over 2000 smallholder farmers both in Ghana and Uganda designing and building tailor-made user-friendly software products including Uganda’s credit scoring application system for smallholder farmers to meet their logistics and financial needs.
                              With his passion for agriculture and technology, Nassif has made a significant impact in the industry and has become a sought-after speaker at conferences and workshops. He continues to stay up-to-date on the latest developments in both fields, constantly seeking new and effective ways to address food security issues.</p>
                          </div>
                        </div>
                      </div>
                </div>
                
                <div class="col s12 m4">
                  <div class="col s12 m12">
                    <div class="card hoverable">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="./img/team/shaibu.jpg">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 center">Shaibu Fuseini<i class="material-icons right">more_vert</i></span>
                        <p class="center"><a href="#">Co-Founder</a></p>
                        <p class="center">Director, Global Operations</p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Shaibu Fuseini<i class="material-icons right">close</i></span>
                        <p style="font-size: 15px; text-align: justify;">Shaibu is an experienced international rural development specialist and agri-entrepreneur with a decade of experience working with both local and international organisations. He has led several strategic interventions aimed at empowering the youth especially women and smallholder farmers. He has worked with SOS Children’s Villages in Ghana on the No Business as Usual (NBU) Project and the Boosting Green Employment and Enterprise Opportunities in Ghana (GrEEn) Project with funding from the European Union. Shaibu has deep experience conducting nation-wide data collection in the agri and livestock space and has a deep network and knowledge of the agricultural sector. He is presently the Co-founder and Operations Officer of AgricConnect, a national agri-business community and platform supporting rural and agri. market development.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m4">
                  <div class="col s12 m12">
                    <div class="card hoverable">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="./img/team/jamal.jpg">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Jamal Musah<i class="material-icons right">more_vert</i></span>
                        <p class="center"><a href="#">Co-Founder</a></p>
                        <p class="center">Director, Global Data Analytics</p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Jamal Musah<i class="material-icons right">close</i></span>
                        <p style="font-size: 15px; text-align: justify;">Jamal Musah has over a decade of experience in climate change advocacy and sustainable agriculture initiatives. He is highly skilled in using advanced analytics and econometrics techniques to analyze the impact of climate change on global food systems. He is passionate about using data and advanced analytics techniques to help develop and implement business strategies, analytic tools, and models that empower farmers adapt better to the negative impacts of climate change.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m4">
                  <div class="col s12 m12">
                    <div class="card hoverable">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="./img/team/Stev.jpg">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Steven Ofori<i class="material-icons right">more_vert</i></span>
                        <p class="center"><a href="#">Global Environmental Scientist </a></p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Steven Ofori<i class="material-icons right">close</i></span>
                        <p style="font-size: 15px; text-align: justify;">Ofori is a nature-based project developer, passionate about climate change, and agroecology, sustainable environment and food security. His strategic goal with the team is to use sound scientific and nature-based solutions to drive human-nature co-coexistence while strengthening ecological and economic resilience.</p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col s12 m4">
              <div class="col s12 m12">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="./img/team/vic.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Victoria G. Tanoh<i class="material-icons right">more_vert</i></span>
                    <p class="center"><a href="#">Head of Finance</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Victoria G. Tanoh<i class="material-icons right">close</i></span>
                    <p style="font-size: 15px; text-align: justify;">Victoria Tanoh is an experienced Chartered Accountant with a demonstrated history of working in the Finance industry. Skilled in Accounting, Budgeting, Project management, International and Domestic Tax regulations. She has a strong accounting and audit background certified by the Institute of Chartered Accountants-Ghana, a master of science with a concentration in Agricultural business and Applied Economics. She is focused on the application of data science in agriculture through Climate Smart Agriculture.</p>
                  </div>
                </div>
              </div>
              </div>
             </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>


@endsection