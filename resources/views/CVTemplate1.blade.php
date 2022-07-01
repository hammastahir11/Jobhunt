<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/CVTemplate1/Template1.css') }}" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>  
    <div class="resume">
        <div class="resume_left">
          <div class="resume_profile">
            <!-- <img src="{{asset('/storage/images/'.$cvdata->image) }}" alt="Profile"/> -->
            <img src='{{$cvdata->image}}' alt="" title="" />
          </div>
          <div class="resume_content">
            <div class="resume_item resume_info">
              <div class="title">
                <p class="bold">{{$cvdata->fname}} {{$cvdata->lname}}</p>
                <p class="regular">{{$cvdata->Field}}</p>
              </div>
              <ul>
                <li>
                  <div class="icon">
                    <i class="fas fa-address-card"></i>
                  </div>
                  <div class="data">
                    
                    {{$cvdata->address}}, {{$cvdata->country}}
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                  <div class="data">
                  {{$cvdata->phone}}
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="data">
                  {{$cvdata->email}}
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fab fa-weebly"></i>
                  </div>
                  <div class="data">
                  {{$cvdata->website}}
                  </div>
                </li>
              </ul>
            </div>
            <div class="resume_item resume_skills">
              <div class="title">
                <p class="bold">skill's</p>
              </div>
              <ul>
                <li>
                  <div class="skill_name">
                    HTML
                  </div>
                  <div class="skill_progress">
                    <span style="width: 80%;"></span>
                  </div>
                  <div class="skill_per">80%</div>
                </li>
                <li>

                  
                  <div class="skill_name">
                    CSS
                  </div>
                  <div class="skill_progress">
                    <span style="width: 70%;"></span>
                  </div>
                  <div class="skill_per">70%</div>
                </li>
                <li>
                  <div class="skill_name">
                    SASS
                  </div>
                  <div class="skill_progress">
                    <span style="width: 90%;"></span>
                  </div>
                  <div class="skill_per">90%</div>
                </li>
                <li>
                  <div class="skill_name">
                    JS
                  </div>
                  <div class="skill_progress">
                    <span style="width: 60%;"></span>
                  </div>
                  <div class="skill_per">60%</div>
                </li>
                <li>
                  <div class="skill_name">
                    JQUERY
                  </div>
                  <div class="skill_progress">
                    <span style="width: 88%;"></span>
                  </div>
                  <div class="skill_per">88%</div>
                </li>
              </ul>
            </div>
            <div class="resume_item resume_social">
              <div class="title">
                <p class="bold">Social</p>
              </div>
              <ul>
                <li>
                  <div class="icon">
                    <i class="fab fa-facebook-square"></i>
                  </div>
                  <div class="data">
                    <p class="semi-bold">Facebook</p>
                    <p>{{$cvdata->facebook}}</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fab fa-twitter-square"></i>
                  </div>
                  <div class="data">
                    <p class="semi-bold">Twitter</p>
                    <p>{{$cvdata->twitter}}</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fab fa-github" aria-hidden="true"></i>
                  </div>
                  <div class="data">
                    <p class="semi-bold">GitHub</p>
                    <p>{{$cvdata->github}}</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fab fa-linkedin"></i>
                  </div>
                  <div class="data">
                    <p class="semi-bold">Linkedin</p>
                    <p>{{$cvdata->linkedin}}</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
       </div>
       <div class="resume_right">
         <div class="resume_item resume_about">
             <div class="title">
                <p class="bold">About us</p>
              </div>
             <p>{{$cvdata->aboutus}}</p>
         </div>
         <div class="resume_item resume_work">
             <div class="title">
                <p class="bold">Work Experience</p>
              </div>
             <ul>

                 <li>
                     <div class="date">{{$cvdata->sy}} - {{$cvdata->ey}}></div> 
                     <div class="info">
                          <p class="semi-bold">{{$cvdata->jobname}}</p> 
                       <p>{{$cvdata->jobdesc}}</p>
                     </div>
                 </li>
                 @if($cvdata->jobname2 != null)
                    <li>
                      <div class="date">{{$cvdata->sy2}} - {{$cvdata->ey}}</div>
                      <div class="info">
                              <p class="semi-bold">{{$cvdata->jobname2}}</p> 
                          <p>{{$cvdata->jobdesc2}}</p>
                        </div>
                    </li>
                    @if($cvdata->jobname3 != null)
                    <li>
                      <div class="date">{{$cvdata->sy3}} - {{$cvdata->ey3}}</div>
                      <div class="info">
                              <p class="semi-bold">{{$cvdata->jobname3}}</p> 
                          <p>{{$cvdata->jobdesc3}}</p>
                        </div>
                    </li>
                    @endif
                  @endif
             </ul>
         </div>


         <div class="resume_item resume_education">
           <div class="title">
                <p class="bold">Education</p>
              </div>
           <ul>
                 <li>
                     <div class="date">{{$cvdata->esy}} - {{$cvdata->eey}}</div> 
                     <div class="info">
                          <p class="semi-bold">{{$cvdata->instname}}</p> 
                       <p>{{$cvdata->coursedesc}}</p>
                     </div>
                 </li>
                 @if($cvdata->instname2 != null)
                    <li>
                      <div class="date">{{$cvdata->esy2}} - {{$cvdata->eey2}}</div>
                      <div class="info">
                              <p class="semi-bold">{{$cvdata->instname2}}</p> 
                          <p>{{$cvdata->coursedesc2}}</p>
                        </div>
                    </li>
                      @if($cvdata->instname3 != null)
                      <li>
                        <div class="date">{{$cvdata->esy3}} - {{$cvdata->eey3}}</div>
                        <div class="info">
                                <p class="semi-bold">{{$cvdata->instname3}}</p> 
                            <p>{{$cvdata->coursedesc3}}</p>
                          </div>
                      </li>
                      @endif
                  @endif
             </ul>
         </div>
         <div class="resume_item resume_hobby">
           <div class="title">
                <p class="bold">Hobby</p>
              </div>
            <ul>
              <li><i class="fas fa-book"></i></li>
              <li><i class="fas fa-gamepad"></i></li>
              <li><i class="fas fa-music"></i></li>
              <li><i class="fab fa-pagelines"></i></li>
           </ul>
         </div>
       </div>
     </div> 
</body>
</html>