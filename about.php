<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173303513-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-173303513-1');
  </script>


  <title>Insertion - About Page</title>
<!--





-->
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/bootstrap.min.css">                                            <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">                                      <!-- Font awesome -->
  <link rel="stylesheet" href="css/tooplate-style.css">                                           <!--  style -->

  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">

    <div class="tm-welcome-section">
      <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-xl-12">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="index.php" class="nav-link tm-nav-link tm-text-white">Home</a>
                </li>
                <li class="nav-item active">
                  <a href="about.php" class="nav-link tm-nav-link tm-text-white active">About</a>
                </li>
                <li class="nav-item">
                  <a href="contact.php" class="nav-link tm-nav-link tm-text-white">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <i class="fas tm-fa-big fa-music tm-fa-mb-big"></i>
          <h1 class="text-uppercase mb-3 tm-site-name">REEL</h1>
          <p class="tm-site-description">REEL Hot- New release Videos Download Free</p>
        </div>
      </div>

    </div>
     <div class="container">
      <div class="tm-search-form-container">
        <!-- brother see it is correct form action -->
        <form action="" method="POST" class="form-inline tm-search-form">
          <div class="text-uppercase tm-new-release">Reel on Fire</div>
          <div class="form-group tm-search-box">
            <input type="text" name="names" class="form-control tm-search-input" placeholder="Copy Link Of Reel Videos...">
            <input type="submit" value="Search" name="submit_btn" class="form-control tm-search-submit">
          </div>

        </form>
      </div>




<div>
<center>
<br><br>
<?php
if(isset($_POST['submit_btn']))
{
$myurl= $_POST["names"];
function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$html = file_get_contents_curl($myurl);
$doc = new DOMDocument();
@$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('title');
$title = $nodes->item(0)->nodeValue;

$metas = $doc->getElementsByTagName('meta');

for ($i = 0; $i < $metas->length; $i++)
{
    $meta = $metas->item($i);
    if($meta->getAttribute('property') == 'og:video')
        $Url = $meta->getAttribute('content');
}
echo "Title: $title". '<br/><br/>';
echo "<b>Click on three dots '⋮' on the video player to download the video.</b>". '<br/><br/>';
}
?>

<video width="320" height="240" controls autoplay>
  <source src="<?php echo $Url; ?>">
</video>

<br/><br/>
</center>
</div>
















      <div class="row tm-about-row tm-mt-big tm-mb-medium">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 tm-about-col-left">
          <div class="tm-v-center tm-bg-gray h-100 tm-about-text">
            <h2 class="tm-text-brown mb-4 tm-about-h2">Reel Videos For Status Upload</h2>
            <p class="tm-about-description mb-0">Experiencing sadness and anger can make you feel more creative, and by being creative you can get beyond your pain or negativity.</p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="tm-about-img"></div>
        </div>
      </div>

      <div class="row tm-about-row tm-mb-medium">
        <div class="tm-tab-links-container">

          <ul class="nav nav-tabs" id="tmTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link tm-bg-gray tm-media-v-center tm-tab-link active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="true">
                <i class="fas fa-2x fa-music pr-4"></i>
                <p class="media-body mb-0 tm-media-link">Reel Dance/Music</p>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link tm-bg-gray tm-media-v-center tm-tab-link" id="contact-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact" aria-selected="false">
                <i class="fab fa-2x fa-amazon-pay pr-4"></i>
                <p class="media-body mb-0 tm-media-link">Pay For Coffee</p>
              </a>
            </li>


          </ul>

        </div>

        <div class="tm-tab-content-container">
          <div class="tab-content h-100 tm-bg-gray" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
              <div class="media tm-media-2">
                <i class="fas fa-5x fa-music mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">About REEL</h2>
                  <p class="mb-4">Reels allows you to create and edit short video up to 15 seconds in the Instagram Camera. You can add effects and music to your reel or use your own original audio.</p>


                </div>
              </div>
            </div>


            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
              <div class="media tm-media-2">
                <i class="fab fa-5x fa-amazon-pay mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Donate Us Keep So Be keep you all updated with New Resources</h2>
                  <p class="mb-4"> Your Small Help Means a lot To us</p>
                  <p class="mb-4">It Help us to Motivated to work for Community Where everything is free for all of us not confined to some super rich
                    a community free from boundries .</p>
                  
                </div>
              </div>
            </div>



          </div>

        </div>
      </div>

      <div class="row tm-about-row tm-mb-medium">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EreZNkWzBAw?rel=0" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      </div>
      <footer class="row tm-about-row">
        <div class="col-xl-12">
          <p class="text-center p-4">Copyright &copy; <span class="tm-current-year">2020</span> Made By:<strong> Prabal </strong> and <strong>Nikhil</strong>

          </p>
        </div>

                   <div class=row>
                   <ul class="intend">
                          <li class="nav-item ">
                            <a href="privacy_policy.php" class="nav-link tm-nav-link tm-text-black">privacy_policy</a>
                          </li>
                          <li class="nav-item">
                            <a href="Terms_and_Condition.php" class="nav-link tm-nav-link tm-text-black">Terms_and_Condition</a>
                          </li>


                </ul>
                </div>



      </footer>
    </div> <!-- .container -->

  </div> <!-- .main -->
  <!-- load JS -->
  <script src="js/jquery-3.2.1.slim.min.js"></script> <!-- https://jquery.com/ -->
  <script src="js/bootstrap.min.js"></script>         <!-- https://getbootstrap.com/ -->
  <script>

    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });

  </script>
</body>
</html>