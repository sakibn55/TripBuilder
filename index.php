<!DOCTYPE html>
<html lang="en">

<head>
  <title>Trip Builder</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Bootstrap 4 Template For Software Startups">
  <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- FontAwesome JS-->
  <script defer src="assets/fontawesome/js/all.min.js"></script>

  <!-- Plugins CSS -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
  <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">

  <!-- Theme CSS -->
  <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">

</head>

<body class="docs-page">
  <header class="header fixed-top">
    <div class="branding docs-branding">
      <div class="container-fluid position-relative py-2">
        <div class="docs-logo-wrapper">
          <button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none" type="button">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="site-logo"><a class="navbar-brand" href="index.html"><img class="logo-icon me-2" src="assets/images/coderdocs-logo.svg" alt="logo"><span class="logo-text">Trip<span class="text-alt">Builder</span></span></a></div>
        </div>
        <!--//docs-logo-wrapper-->
        <div class="docs-top-utilities d-flex justify-content-end align-items-center">


          <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
            <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
          </ul>
          <!--//social-list-->

        </div>
        <!--//docs-top-utilities-->
      </div>
      <!--//container-->
    </div>
    <!--//branding-->
  </header>
  <!--//header-->


  <div class="docs-wrapper">
    <div id="docs-sidebar" class="docs-sidebar">
      <div class="top-search-box d-lg-none p-3">
        <form class="search-form">
          <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
          <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
        </form>
      </div>
      <nav id="docs-nav" class="docs-nav navbar">
        <ul class="section-items list-unstyled nav flex-column pb-3">

          <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span class="theme-icon-holder me-2"><i class="fas fa-box"></i></span>APIs</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="#item-3-1">Airline</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="#item-3-2">Airport</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="#item-3-3">Flight</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="#item-4-1">Request</a></li>

        </ul>

      </nav>
      <!--//docs-nav-->
    </div>
    <!--//docs-sidebar-->
    <div class="docs-content">
      <div class="container">

        <article class="docs-article" id="section-1">
          <header class="docs-header">
            <h1 class="docs-heading">Introduction <span class="docs-time">Last updated: 2022-04-07</span></h1>
            <section class="docs-intro">

            </section>
            <!--//docs-intro-->

            <h5>Initialize diretory :</h5>

            <div class="docs-code-block">
              <!-- ** Embed github code starts ** -->
              <script src="https://gist.github.com/sakibn55/f0f2f25d9a79a88872e86514762a4d8a.js"></script>
              <!-- ** Embed github code ends ** -->
            </div>

            </section>
            <!--//section-->

        </article>

        <article class="docs-article" id="section-3">
          <header class="docs-header">
            <h1 class="docs-heading">APIs</h1>
            <section class="docs-intro">

            </section>
            <!--//docs-intro-->
          </header>
          <section class="docs-section" id="item-3-1">
            <div class="docs-code-block">
              <h2 class="section-heading">Airline Model APIs</h2>
              <pre class="shadow-lg rounded"><code class="json hljs">
GET/api/airline/all.php                              
[
  {
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Air Canada"</span>, 
  },
    {
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"QA"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Qatar Airways"</span>, 
  }
]

POST/api/airline/store.php                              
  {
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Air Canada"</span>, 
  }

GET/api/airline/show.php?code=AC                   
  {
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Air Canada"</span>, 
  }

PUT/api/airline/update.php                              
  {
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Air Canada"</span>, 
  }

DELETE/api/airline/delete.php                              
  {
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"AC"</span>
  }

</code></pre>
            </div>
            <!--//docs-code-block-->
          </section>
          <!--//section-->

          <section class="docs-section" id="item-3-2">
            <h2 class="section-heading">Airport Model APIs</h2>
            <div class="docs-code-block">
              <pre class="shadow-lg rounded"><code class="json hljs">
GET/api/airport/all.php                              
[
  {
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"YUL"</span>,
    <span class="hljs-attr">"city_code"</span>: <span class="hljs-number">"YMQ"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Pierre Elliott Trudeau International"</span>,
    <span class="hljs-attr">"city"</span>: <span class="hljs-number">"Montreal"</span>,
    <span class="hljs-attr">"country_code"</span>: <span class="hljs-number">"CA"</span>,
    <span class="hljs-attr">"region_code"</span>: <span class="hljs-number">"QC"</span>,
    <span class="hljs-attr">"latitude"</span>: <span class="hljs-number">"45.457714"</span>,
    <span class="hljs-attr">"longitude"</span>: <span class="hljs-number">"-73.749908"</span>,
    <span class="hljs-attr">"timezone"</span>: <span class="hljs-number">"America/Montreal"</span>,
  },
  {
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"YVR"</span>,
    <span class="hljs-attr">"city_code"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Vancouver International"</span>,
    <span class="hljs-attr">"city"</span>: <span class="hljs-number">"Vancouver"</span>,
    <span class="hljs-attr">"country_code"</span>: <span class="hljs-number">"CA"</span>,
    <span class="hljs-attr">"region_code"</span>: <span class="hljs-number">"BC"</span>,
    <span class="hljs-attr">"latitude"</span>: <span class="hljs-number">"49.194698"</span>,
    <span class="hljs-attr">"longitude"</span>: <span class="hljs-number">"-123.179192"</span>,
    <span class="hljs-attr">"timezone"</span>: <span class="hljs-number">"America/Vancouver"</span>,
  }
]

POST/api/airport/store.php                            
{
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"YVR"</span>,
    <span class="hljs-attr">"city_code"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Vancouver International"</span>,
    <span class="hljs-attr">"city"</span>: <span class="hljs-number">"Vancouver"</span>,
    <span class="hljs-attr">"country_code"</span>: <span class="hljs-number">"CA"</span>,
    <span class="hljs-attr">"region_code"</span>: <span class="hljs-number">"BC"</span>,
    <span class="hljs-attr">"latitude"</span>: <span class="hljs-number">"49.194698"</span>,
    <span class="hljs-attr">"longitude"</span>: <span class="hljs-number">"-123.179192"</span>,
    <span class="hljs-attr">"timezone"</span>: <span class="hljs-number">"America/Vancouver"</span>,
  }

GET/api/airport/show.php?code=YVR                            
{
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"YVR"</span>,
    <span class="hljs-attr">"city_code"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Vancouver International"</span>,
    <span class="hljs-attr">"city"</span>: <span class="hljs-number">"Vancouver"</span>,
    <span class="hljs-attr">"country_code"</span>: <span class="hljs-number">"CA"</span>,
    <span class="hljs-attr">"region_code"</span>: <span class="hljs-number">"BC"</span>,
    <span class="hljs-attr">"latitude"</span>: <span class="hljs-number">"49.194698"</span>,
    <span class="hljs-attr">"longitude"</span>: <span class="hljs-number">"-123.179192"</span>,
    <span class="hljs-attr">"timezone"</span>: <span class="hljs-number">"America/Vancouver"</span>,
  }

PUT/api/airport/update.php                         
{
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"YVR"</span>,
    <span class="hljs-attr">"city_code"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-number">"Vancouver International"</span>,
    <span class="hljs-attr">"city"</span>: <span class="hljs-number">"Vancouver"</span>,
    <span class="hljs-attr">"country_code"</span>: <span class="hljs-number">"CA"</span>,
    <span class="hljs-attr">"region_code"</span>: <span class="hljs-number">"BC"</span>,
    <span class="hljs-attr">"latitude"</span>: <span class="hljs-number">"49.194698"</span>,
    <span class="hljs-attr">"longitude"</span>: <span class="hljs-number">"-123.179192"</span>,
    <span class="hljs-attr">"timezone"</span>: <span class="hljs-number">"America/Vancouver"</span>,
  }

DELETE/api/airport/delete.php                         
{
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">"YVR"</span>
  }


</code></pre>
            </div>
            <!--//docs-code-block-->
          </section>
          <!--//section-->

          <section class="docs-section" id="item-3-3">
            <h2 class="section-heading">Flight Model APIs</h2>
            <div class="docs-code-block">
              <pre class="shadow-lg rounded"><code class="json hljs">
GET/api/flight/all.php                              
[
  {
    <span class="hljs-attr">"airline"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"301"</span>,
    <span class="hljs-attr">"departure_airport"</span>: <span class="hljs-number">"YUL"</span>,
    <span class="hljs-attr">"departure_time"</span>: <span class="hljs-number">"07:35:00"</span>,
    <span class="hljs-attr">"arrival_airport"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"arrival_time"</span>: <span class="hljs-number">"10:05:00"</span>,
    <span class="hljs-attr">"price"</span>: <span class="hljs-number">"273.23"</span>,
  },
  {
    <span class="hljs-attr">"airline"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"302"</span>,
    <span class="hljs-attr">"departure_airport"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"departure_time"</span>: <span class="hljs-number">"11:30:00"</span>,
    <span class="hljs-attr">"arrival_airport"</span>: <span class="hljs-number">"YUL"</span>,
    <span class="hljs-attr">"arrival_time"</span>: <span class="hljs-number">"19:11:00"</span>,
    <span class="hljs-attr">"price"</span>: <span class="hljs-number">"220.63"</span>,
  }
]

POST/api/flight/store.php                              
{
    <span class="hljs-attr">"airline"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"301"</span>,
    <span class="hljs-attr">"departure_airport"</span>: <span class="hljs-number">"YUL"</span>,
    <span class="hljs-attr">"departure_time"</span>: <span class="hljs-number">"07:35:00"</span>,
    <span class="hljs-attr">"arrival_airport"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"arrival_time"</span>: <span class="hljs-number">"10:05:00"</span>,
    <span class="hljs-attr">"price"</span>: <span class="hljs-number">"273.23"</span>,
}

GET/api/flight/show.php?number=301                              
{
    <span class="hljs-attr">"airline"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"301"</span>,
    <span class="hljs-attr">"departure_airport"</span>: <span class="hljs-number">"YUL"</span>,
    <span class="hljs-attr">"departure_time"</span>: <span class="hljs-number">"07:35:00"</span>,
    <span class="hljs-attr">"arrival_airport"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"arrival_time"</span>: <span class="hljs-number">"10:05:00"</span>,
    <span class="hljs-attr">"price"</span>: <span class="hljs-number">"273.23"</span>,
}

PUT/api/flight/update.php                        
{
    <span class="hljs-attr">"airline"</span>: <span class="hljs-string">"AC"</span>,
    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"301"</span>,
    <span class="hljs-attr">"departure_airport"</span>: <span class="hljs-number">"YUL"</span>,
    <span class="hljs-attr">"departure_time"</span>: <span class="hljs-number">"07:35:00"</span>,
    <span class="hljs-attr">"arrival_airport"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"arrival_time"</span>: <span class="hljs-number">"10:05:00"</span>,
    <span class="hljs-attr">"price"</span>: <span class="hljs-number">"273.23"</span>,
}

DELETE/api/flight/delete.php                        
{
    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"301"</span>
}


</code></pre>
            </div>
            <!--//docs-code-block-->
          </section>
          <!--//section-->

          <section class="docs-section" id="item-4-1">
            <h2 class="section-heading">Search Flights APIs</h2>
            <div class="docs-code-block">
              <pre class="shadow-lg rounded"><code class="json hljs">
POST/api/flight/search.php                              

  {
    <span class="hljs-attr">"departure_airport"</span>: <span class="hljs-string">"YUL"</span>,
    <span class="hljs-attr">"arrival_airport"</span>: <span class="hljs-number">"YVR"</span>,
    <span class="hljs-attr">"departure_date"</span>: <span class="hljs-number">"2021-02-01"</span>,
    <span class="hljs-attr">"return_date"</span>: <span class="hljs-number">"2021-02-20"</span>,
    <span class="hljs-attr">"trip_type"</span>: <span class="hljs-number">"round-trip"</span>,
  }

Response:
{
    <span class="hljs-attr">"response"</span>: <span class="hljs-string">{
            <span class="hljs-attr">"trips"</span>: <span class="hljs-string">[
                {
                    <span class="hljs-attr">"price"</span>: <span class="hljs-number">"493.86"</span>,
                    <span class="hljs-attr">"flights"</span>: 
                    <span class="hljs-string">[
                    {
                        <span class="hljs-attr">"airline"</span>: <span class="hljs-string">"AC"</span>,
                        <span class="hljs-attr">"number"</span>: <span class="hljs-number">"301"</span>,
                        <span class="hljs-attr">"departure_airport"</span>: <span class="hljs-number">"YUL"</span>,
                        <span class="hljs-attr">"departure_time"</span>: <span class="hljs-number">"07:35:00"</span>,
                        <span class="hljs-attr">"arrival_airport"</span>: <span class="hljs-number">"YVR"</span>,
                        <span class="hljs-attr">"arrival_time"</span>: <span class="hljs-number">"10:05:00"</span>,
                        <span class="hljs-attr">"price"</span>: <span class="hljs-number">"273.23"</span>
                    },
                    {
                        <span class="hljs-attr">"airline"</span>: <span class="hljs-string">"AC"</span>,
                        <span class="hljs-attr">"number"</span>: <span class="hljs-number">"302"</span>,
                        <span class="hljs-attr">"departure_airport"</span>: <span class="hljs-number">"YVR"</span>,
                        <span class="hljs-attr">"departure_time"</span>: <span class="hljs-number">"11:30:00"</span>,
                        <span class="hljs-attr">"arrival_airport"</span>: <span class="hljs-number">"YUL"</span>,
                        <span class="hljs-attr">"arrival_time"</span>: <span class="hljs-number">"19:11:00"</span>,
                        <span class="hljs-attr">"price"</span>: <span class="hljs-number">"220.63"</span>
                    }
                ]</span>,
            },
        ]</span>  
    }</span>
}

</code></pre>
            </div>
            <!--//docs-code-block-->
          </section>
          <!--//section-->
        </article>
        <!--//docs-article-->


        <footer class="footer">
          <div class="container text-center py-5">

            <ul class="social-list list-unstyled pt-4 mb-0">
              <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
            </ul>
            <!--//social-list-->
          </div>
        </footer>
      </div>
    </div>
  </div>
  <!--//docs-wrapper-->


  <!-- Javascript -->
  <script src="assets/plugins/popper.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


  <!-- Page Specific JS -->
  <script src="assets/plugins/smoothscroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
  <script src="assets/js/highlight-custom.js"></script>
  <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
  <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
  <script src="assets/js/docs.js"></script>

</body>

</html>