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


  <title>Reel Free Download</title>
<!--


-->
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/bootstrap.min.css">                                            <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">                                      <!-- Font awesome -->
  <link rel="stylesheet" href="css/tooplate-style.css">                                           <!-- style -->

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
                <li class="nav-item active">
                  <a href="index.php" class="nav-link tm-nav-link tm-text-white active">Home</a>
                </li>
                <li class="nav-item">
                  <a href="about.php" class="nav-link tm-nav-link tm-text-white">About</a>
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
          <h1 class="text-uppercase mb-3 tm-site-name">Reel</h1>
          <p class="tm-site-description">Free download of Reel Videos</p>
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














      <div class="row tm-albums-container grid">
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="img/1img.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <h2></h2>
              <p>A beautiful woman delights the eye; a wise woman, the understanding; a pure one, the soul</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="img/2-img.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <h2></h2>
              <p>  You are beautiful because you say you are, and you hold yourself that way.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="img/2img.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <h2></h2>
              <p>Social media is not a media. The key is to listen, engage, and build relationships..</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="img/3img.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <h2></h2>
              <p>Content is fire. Social media is gasoline.</p>
            </figcaption>
          </figure>
        </div>


          </div> <!-- media-boxes -->
        </div>
      </div>

      <div class="row tm-mb-big tm-subscribe-row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 tm-bg-gray tm-subscribe-form">
          <h3 class="tm-text-pink tm-mb-30">Subscribe our updates!</h3>
          <p class="tm-mb-30"><b>It's absolute <u>Free to use</u> Be just Need Your Love and Support</b>. Being a programmer my first priority is to automate the things for me and the other people <strong>FOR FREE </strong>to <strong>HELP</strong> people and save their precious time.</p>
          <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://nhihai.us20.list-manage.com/subscribe/post?u=ebd166610fd89ca7d9fe2cb7d&amp;id=5aa27a3633" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ebd166610fd89ca7d9fe2cb7d_5aa27a3633" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 img-fluid pl-0 tm-subscribe-img"></div>
      </div>


      <footer class="row">
        <div class="col-xl-12">
          <p class="text-center p-4">Copyright &copy; <span class="tm-current-year">2020</span> Made By:<strong> Prabal </strong> and <strong>Nikhil</strong>

          </p>
        </div>



                   <div class="row">
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