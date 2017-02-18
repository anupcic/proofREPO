@extends('layouts.main')

@section('content')
<style type="text/css">
.main-login{
  background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 450px;
    padding: 50px 40px;

}
    h1 {
  font-family: Raleway;
  font-size: 30px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 26.4px;
}
h2 {
  font-family: Raleway;
  font-size: 20px;
  font-style: normal;
  font-variant: normal;
  line-height: 15.4px;
  font-weight: bold;
}
.col-lg-4{
margin-top: 40px;
}

</style>
<h1 style="text-align: center;">ABOUT US</h1>

<div class="container marketing" style="margin-top: 20px">



      <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">What We Do</h2><hr>
                  <p class="lead" style="text-align: justify;font-size: 18px;">ProofRepo is an online collection of mathematical theorems and proofs. The proofRepo is designed to give mathematics students and researchers a deep insight into the mathematical theorems. ProofRepo gives a number of different proofs for every theorem in the repository. Each different proof of a theorem carries with it, a different perspective, a different learning, a different insight and a different approach to see the theorem. Thus, while exposing the user to a variety of proofs, ProofRepo gives its user a better and holistic view of the theorem. ProofRepo is designed to be an open and collaborative platform. The registered users of the proofRepo can login and modify and add the content to the repository. In this way, the proofRepo is a for the people, by the people and to the people philosophy based platform. Enjoy the different flavors of theorems with ProofRepo. Join Us Now!!</p>
              </div>
              <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="images/mathtree.jpg" alt="Generic placeholder image">
              </div>
      </div>

      
      <!-- Three columns of text below the carousel -->
         <div class="row"><hr/>
         <h1 class="featurette-heading" style="text-align: center;margin-top: 10">Team</h1></br>
              <div class="col-lg-4" style="width: 292px;">
                <img class="img-circle" src="images/Anup.jpg" alt="Generic placeholder image" width="160" height="160" style="margin-left: 40px">
                <h2 style="text-align: center; font-weight: bold; font-size: 20px">Anup Kumar Sah</h2>
                <p style="text-align: justify;text-justify: inter-word; text-align: center;">STUDENT,CIC</p>
                
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4" style="width: 292px">
                <img class="img-circle" src="images/Raghav.jpg" alt="Generic placeholder image" width="160" height="160" style="margin-left: 40px">
                <h2 style="text-align: center;font-weight: bold;font-size: 20px">Raghavendara Tripathi</h2>
                <p style="text-align: justify;text-justify: inter-word; text-align: center;">STUDENT,CIC</p>
                
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4" style="width: 292px">
                <img class="img-circle" src="images/Himanshu.jpg" alt="Generic placeholder image" width="160" height="160" style="margin-left: 40px">
                <h2 style="text-align: center;font-weight: bold;font-size: 20px">Himanshu Saini</h2>
                <p style="text-align: justify;text-justify: inter-word; text-align: center;">STUDENT,CIC</p>
                
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4" style="width: 292px">
                <img class="img-circle" src="images/Shivam.jpg" alt="Generic placeholder image" width="160" height="160" style="margin-left: 40px">
                <h2 style="text-align: center;font-weight: bold;font-size: 20px">Shivam Sharma</h2>
                <p style="text-align: justify;text-justify: inter-word;text-align: center;">STUDENT,CIC</p>
                
              </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      

      </div>
    @stop