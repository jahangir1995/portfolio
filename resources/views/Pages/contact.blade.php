@extends('index')
@section('content')
<section>
      <div class="container pt-5 pb-5"> 
        <div class="row">
          <div class="col-md-6">
           <div class="card bg-success card-form text-center">
                <div class="card-body">
                  <h3>Send me Message</h3>
                  
                  <form action="{{route('save_message')}}" method="POST">@csrf
                    <div class="row form-group">
                      <div class="col">
                        <input type="text" class="form-control" name="First_Name" placeholder="First name">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="last_Name" placeholder="Last name">
                      </div>
                      
                    </div>
                     <div class="form-group">
                      <input type="text" name="email" placeholder="Fnter your Email" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="text" name="subject" placeholder="Subject" class="form-control">
                    </div>
                     <div class="form-group">
                      <textarea placeholder="write your message here" name="message" rows="10" class="form-control"></textarea>
                      </div>
                    
                    <input type="submit" name="submit" value="Send message" class="btn btn-outline-light btn-block">
                  </form>

                </div>
              </div> 
          </div>
          <div class="col-md-6">
            <div class="row">
              <h4>Email Address:</h4><br/>
              <p>jahangirkpi1995@gmail.com</p>
            </div>
            <div class="row">
              <h4>Phnone number:</h4><br/>
              <p>01947661208</p>
            </div>

          </div>
        </div>
       
      </div>
      
    </section>



@endsection()
