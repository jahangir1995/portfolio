@extends('index')
@section('content')
 <div class="container mb-4">
        <div class="row pt-5">
          <div class="col text-center">
          <h1>About My Self</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 rounded-sm">
            <div class="row border border-dark rounded-sm">
              <img src="{{asset('frontend/images/ja.jpg')}}" class="img-fluid" alt="image">
            </div>
          </div>
          <div class="col-md-8 pt-2">
            <div class="row pl-3 pb-2">
              <p>
                <button class="btn btn-muted" type="button" data-toggle="collapse" data-target="#MySpeach" aria-expanded="false" aria-controls="collapseExample">
                 My speach
                </button>

              </p>
              <div class="collapse" id="MySpeach">
                <div class="card card-body">
                  <li>If you don’t design your life, then someone else may just design it for you, and you may not like their idea of balance.</li>

                     <li>Want to get someone all over your life. If you do not love with friendship, keep it aside. Because love will be lost one day, but friendship never loses.</li>

                      <li>If people die when they die if they survive, change, due to non-casual change.
                      </li>
                </div>
              </div>
              
            </div>

              <div class="row pl-3 pb-2">
              <p>
                <button class="btn btn-muted" type="button" data-toggle="collapse" data-target="#personal" aria-expanded="false" aria-controls="collapseExample">
                 My Personal Information
                </button>

              </p>
              <div class="collapse" id="personal">
                <div class="card card-body">
                 <table class="m-3"> 
                  <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>Md Jahangir Alam</td>
                  </tr>
                     <tr>
                    <td>Father’s Name</td>
                    <td>:</td>
                    <td>Md Haris Uddin</td>
                  </tr>
                     <tr>
                    <td>Mother’s Name</td>
                    <td>:</td>
                    <td>Mena BEgum</td>
                  </tr>
                     <tr>
                    <td>Present Address</td>
                    <td>:</td>
                    <td>16/2/1, Kollaynpur, Mirpur , Dhaka</td>
                  </tr>
                  <tr>
                    <td>Permanent Address</td>
                    <td>:</td>
                    <td>Vill: Purabaria P.O: Purbo Narindia, Thana: Pakundia,Dist: Kishoreganj</td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>:</td>
                    <td>December 25, 1995</td>
                  </tr>
                  <tr>
                    <td>Nationality</td>
                    <td>:</td>
                    <td>Bangladeshi</td>
                  </tr>
                  <tr>
                    <td>National ID</td>
                    <td>:</td>
                    <td>19954817966000138</td>
                  </tr>
                  <tr>
                    <td>Marital Status</td>
                    <td>:</td>
                    <td>Unmaried</td>
                  </tr>
                  <tr>
                    <td>Religion</td>
                    <td>:</td>
                    <td>Islam</td>
                  </tr>
                </table>
                </div>
              </div>
              
            </div>
             <div class="row pl-3 pb-2">
              <p>
                <button class="btn btn-muted" type="button" data-toggle="collapse" data-target="#education" aria-expanded="false" aria-controls="collapseExample">
                 Educational Background
                </button>
              
              </p>
              <div class="collapse" id="education">
                <div class="card card-body">
                  <div class="row">
                     <table class="table">
                <thead>
                  <tr>
                  <th>Degree</th>
                  <th>Institution</th>
                  <th>Grade</th>
                  <th>Passing Year</th>
                  <th>Board/University</th>
                </tr>
                  
                </thead>
                <tbody>
                  <tr>
                    <td>B.Sc. in CSE</td>
                    <td>Daffodil International University</td>
                    <td>3.67</td>
                    <td>Running(8th semi)</td>
                    <td>Private University</td>
                  </tr>
                   <tr>
                    <td>Diploma in computer technology</td>
                    <td>Kishoreganj Polytechnic Institute</td>
                    <td>3.26</td>
                    <td>2016</td>
                    <td>BTEB</td>
                  </tr>
                  
                   <tr>
                    <td>S.S.C (Science)</td>
                    <td>Mamdee Mollah High School</td>
                    <td>4.44</td>
                    <td>2012</td>
                    <td>Dhaka</td>
                  </tr>
                  
                </tbody>
              </table>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="row pl-3 pb-2">
              <p>
                <button class="btn btn-muted" type="button" data-toggle="collapse" data-target="#contact" aria-expanded="false" aria-controls="collapseExample">
                  Professional Tranning
                </button>
              
              </p>
              <div class="collapse" id="contact">
                <div class="card card-body">
                  <div class="row">
                    <table class="m-3"> 
                  <tr>
                    <td>Course Name</td>
                    <td>:</td>
                    <td>Web Design and Development</td>
                  </tr>
                     <tr>
                    <td>Institute Name</td>
                    <td>:</td>
                    <td>SOFTMAX Learning and Development Canter, Abdullapur, Uttra, Dhaka</td>
                  </tr>
                     <tr>
                    <td>Course Duration</td>
                    <td>:</td>
                    <td>3 Months</td>
                  </tr>
                     <tr>
                    <td>Key Learning</td>
                    <td>:</td>
                    <td>HTML5, CSS3, Bootstrap, PHP(OOP), JavaScript, MySQL Etc.</td>
                  </tr>
                
                </table>
                  <hr/>

                <table class="m-3 pb-2"> 
                  <tr>
                    <td>Course Name</td>
                    <td>:</td>
                    <td>Professional Customer Service (PCS) </td>
                  </tr>
                     <tr>
                    <td>Institute Name</td>
                    <td>:</td>
                    <td>ASK Telecom Limited, Shyamoli, Dhaka-1207</td>
                  </tr>
                     <tr>
                    <td>Course Duration</td>
                    <td>:</td>
                    <td>2.5 Months</td>
                  </tr>
                    
                
                </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

@endsection()
