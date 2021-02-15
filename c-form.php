<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
    <title>Hello, world!</title>
    <style>
        html{
            overflow-x:hidden;
        }
        body{
            margin:0;
            padding: 0;
            box-sizing:border-box;
            font-family: Open Sans,Arial,sans-serif;
            height:100%;
            overflow-x:hidden;
            
        }
        .bg-image{
            background-size: cover;
            background-image:linear-gradient(to bottom, rgba(100, 100, 50, 0.52), rgba(20, 0, 50,  0.5)),
           url('images/img1.jpg');
            /*background-image:url('images/bg1.png');*/
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height:95vh;
        }
        
        nav ul li a{
             margin-left:40px;
/*             color: white !important;*/
             font-size:1em !important;
             font-weight: 500;
             line-height:normal;
             letter-spacing:0.5px;
             
          }
          
          a{
/*              color:white !important;*/
              font-size:1em !important;
              font-weight: bold;
          }
          .logo{
              margin-left:30px;
              font-weight: bold;
          }
          form{
                  border: solid;
                border-color: #f29108;
                border-radius: 30px;
          }
          .proline{
            font-family: 'Raleway',Helvetica,Arial,Lucida,sans-serif;
    
            font-size: 3.3vw;
            color: #ffffff!important;
            letter-spacing: 6px;
            line-height: 1.2em;
            text-align: center;
          }
            
          .button{
              
          }
          
          
    </style>
  </head>
  <body>
    
      <div class="main" >
                            <div>
                                <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                                    <div class="container-fluid">
                                      <a class="navbar-brand logo text-white" href="#">LOGO</a>
                                      <button class="navbar-toggler  navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon" ></span>
                                      </button>
                                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link active text-white" aria-current="page" href="#">Services</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-white" href="#">Samples</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-white" href="#">Grade proofs</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-white" href="#">Courses</a>
                                          </li>

                                        </ul>
                                        
                                      </div>
                                    </div>
                                </nav>
                            </div>


                        </div>
      
      
      <div class="container-fluid bg-image" >
          <div class="container" style="height:100%;">
              <div class="parallax">
              <div class="row align-middle">
                  <div class="col-md-6 col-sm-12 p-4 font-weight-bold align-self-end" > <!-- style='font-size:2.9vw;color:white;' -->
                      <div class="justify-content-center text-center proline"  > <!-- style="position:relative;top:35%;" -->
                          Get <span color="#ff2299" style="color: #f29108;font-weight:900;">Help</span> From </br> The <span color="#ff2299" style="color: #f29108;font-weight:900;">World</span> Class </br> Subject <span color="#ff2299" style="color: #f29108;font-weight:900;">Experts</span>
                          
                      </div>
                      <div class="text-center" style="font-size:3vw;color:white;font-family:'Raleway';">An Easiest Way to Get An “A” Grade.</div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                      
                      <form action="" class="bg-light main-form needs-validation p-4" novalidate style='font-size:1vw;font-weight:bold;position:relative;top:10%;background-color: gray;'>
                          
                          <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="p-2" for="name">Name</label>
                                        <input type="text" name="name" id="name" placeholder="Your name" class="form-control" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="p-2" for="lastname">Email Address</label>
                                        <input type="text" name="lastname" id="lastname" placeholder="Your email" class="form-control" required>

                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <div class="form-group pd-telephone-input">
                                        
                                        
                                        <label  class="p-2" for="name">Contact No.</label>
                                        <!--<input type="text" name="name" id="name" placeholder="Your contact no" class="form-control" required>-->
                                        <input class="form-control" type="tel" id="mobile-number" placeholder="e.g. +1 702 123 4567">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="p-2" for="lastname">Upload Files:</label>
                                        <!--<input type="text" name="lastname" id="lastname" placeholder="Add files" class="form-control" required>-->
                                        <input type="file" name="file[]" id="file" multiple>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label  class="p-2" for="name">Remarks</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="btn button text-center mt-3"><button type="submit" class=" btn-primary">Get a free quote</button></div>
                        </form>
                  </div>
              </div>
              </div>
          </div>
      </div>
      
      
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>