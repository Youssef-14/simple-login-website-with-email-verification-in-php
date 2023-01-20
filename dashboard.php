<!DOCTYPE html>
<html style="font-size: 16px;" lang="en-TN">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​IT Company, ​The backbone for internet business, Company Services, ​Large payments volume or unique business model?, ​What’s included, What We Do, Custom software solutions">
    <meta name="description" content="">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Cambay:400,400i,700,700i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700|Cambay:400,400i,700,700i">
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/3d1cb46b-c73f-44c9-a49f-f830531c72dd.png"
}
</script>
    <meta name="theme-color" content="#5595e8">
    <meta property="og:title" content="Accueil">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Accueil.html" data-home-page-title="Accueil" class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-d9ff"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1">
          <img src="images/3d1cb46b-c73f-44c9-a49f-f830531c72dd.png" class="u-logo-image u-logo-image-1">
        </a>
        <?php    include 'connect/connect_db.php'; ?>
        <?php session_start();
        if (!isset ($_SESSION['email'])){
            header("Location: index.php ");
        }
        echo $_SESSION['email'];
        if (isset ($_GET['logout'])){
          session_destroy();
          header("Location: index.php");
        }
        ?>

         <a href="?logout">logout</a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Accueil.html" style="padding: 10px 0px;">Accueil</a>
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="About.html" style="padding: 10px 0px;">About</a>
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Contact.html" style="padding: 10px 0px;">Contact</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login/myaccount.php" style="padding: 10px 20px;">MyAccount</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    <section class="u-clearfix u-palette-1-base u-section-1" id="carousel_b93f">
      <div class="u-clearfix u-sheet u-sheet-1">
        
        <br><br><br><br><br><br><br>
        <div id="ab" class="u-align-left u-container-style u-expanded-width-xs u-group u-palette-1-light-3 u-radius-10 u-shape-round u-group-1">
          <?php
            $mail=$_SESSION['email'];
            $sql="select email FROM clients WHERE (email='$mail')AND(verified=1)";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              echo 'verified' ;
            }else{
              echo"not verified <br> 
              <a href='login/verif.php'>
									<button type='submit' class='btn btn-primary btn-block'>
										Verifie
									</button></a>
								  </div>
							</form>";
            }
            $conn->close();
          ?>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-base u-section-2" id="carousel_f1f0">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-left u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-text u-text-1"> The backbone for internet business </h2>
            <p class="u-text u-text-2">Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus <a href="https://nicepage.com/static-site-generator" class="u-border-1 u-border-active-palette-1-light-3 u-border-hover-palette-1-light-3 u-border-white u-btn u-button-link u-button-style u-none u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">quis elementum</a>. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur.
                Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet. 
            </p>
            <a href="https://nicepage.com/website-builder" class="u-active-palette-1-light-3 u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-3 u-radius-6 u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-white u-btn-2">Learn more</a>
          </div>
        </div>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h3 class="u-text u-text-default u-text-3">150m+</h3>
                <p class="u-text u-text-default u-text-palette-1-light-3 u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h3 class="u-text u-text-default u-text-5">90%</h3>
                <p class="u-text u-text-default u-text-palette-1-light-3 u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <h3 class="u-text u-text-default u-text-7">35+</h3>
                <p class="u-text u-text-default u-text-palette-1-light-3 u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <h3 class="u-text u-text-default u-text-9">148+</h3>
                <p class="u-text u-text-default u-text-palette-1-light-3 u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-light-3 u-valign-middle u-section-3" id="carousel_2df3">
      <h2 class="u-text u-text-default u-text-1">Company Services</h2>
      <p class="u-text u-text-default-lg u-text-default-xl u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
              <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="700" data-image-height="500" src="images/11.png">
              <h4 class="u-text u-text-default u-text-palette-1-base u-text-3">Prototyping</h4>
              <p class="u-text u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              <a href="https://nicepage.com/fr/modeles-joomla" class="u-active-palette-1-light-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-3-base u-radius-6 u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-1">learn more</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2">
              <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-2" data-image-width="700" data-image-height="500" src="images/2.png">
              <h4 class="u-text u-text-default u-text-palette-1-base u-text-5">Development</h4>
              <p class="u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              <a href="https://nicepage.cc" class="u-active-palette-1-light-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-3-base u-radius-6 u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-2">learn more</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
              <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-3" data-image-width="700" data-image-height="500" src="images/6c7decbc-d9d3-4316-5906-19d76e6c84f3.png">
              <h4 class="u-text u-text-default u-text-palette-1-base u-text-7">Innovations</h4>
              <p class="u-text u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              <a href="https://nicepage.com/website-builder" class="u-active-palette-1-light-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-3-base u-radius-6 u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-3">learn more</a>
            </div>
          </div>
        </div>
      </div>
      <p class="u-text u-text-9">Images from&nbsp;<b>
          <a href="https://www.freepik.com/vectors/technology" class="u-border-1 u-border-black u-btn u-button-link u-button-style u-none u-text-body-color u-btn-4" target="_blank">Freepik</a></b>
      </p>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-base u-section-4" id="sec-dc96">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-text u-text-1"> Large payments volume or unique business model? </h2>
            <p class="u-text u-text-2">Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus <a href="https://nicepage.com/fr/themes-wordpress" class="u-border-1 u-border-active-palette-1-light-3 u-border-hover-palette-1-light-3 u-border-white u-btn u-button-link u-button-style u-none u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">quis elementum</a>. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur.
                Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet. 
            </p>
            <a href="https://nicepage.best" class="u-active-palette-1-light-3 u-btn u-btn-round u-button-style u-hover-palette-1-light-3 u-radius-6 u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-white u-btn-2">Learn more</a>
          </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-2">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="300" data-image-height="90" src="images/logo-amazon.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-3">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-2" data-image-width="300" data-image-height="90" src="images/1.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-4">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-3" data-image-width="300" data-image-height="63" src="images/evga.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-5">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-4" data-image-width="300" data-image-height="39" src="images/tesla-9.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-6">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-5" data-image-width="300" data-image-height="54" src="images/sony-logo.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-7">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-6" data-image-width="300" data-image-height="65" src="images/crocs-wordmark.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-8">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-7" data-image-width="300" data-image-height="90" src="images/logo-amazon.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-9">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-8" data-image-width="300" data-image-height="87" src="images/asos-1.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-10">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-9" data-image-width="300" data-image-height="89" src="images/bergners-1.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-11">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-10" data-image-width="300" data-image-height="89" src="images/bergners-1.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-12">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-11" data-image-width="300" data-image-height="61" src="images/medium-wordmark.svg">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-13">
                <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-12" data-image-width="300" data-image-height="61" src="images/t.svg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-left-xs u-clearfix u-palette-1-light-3 u-section-5" id="sec-c321">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-custom-font u-text u-text-default u-text-palette-1-base u-text-1"> What’s included</h2>
        <p class="u-text u-text-default u-text-2"> Get 100+ features out of the box with ​ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.001 512.001" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2afa"></use></svg><svg class="u-svg-content" viewBox="0 0 512.001 512.001" id="svg-2afa"><g><path d="m497.001 482.001h-15.125v-346.5c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15v346.5h-30.25v-286.25c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15v286.25h-30.25v-226c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15v226h-30.25v-165.75c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15v165.75h-15.125c-8.284 0-15 6.716-15 15s6.716 15 15 15h482c8.284 0 15-6.716 15-15s-6.716-15-15-15z"></path><path d="m14.983 210.752c.493 0 .992-.024 1.493-.074 76.631-7.574 148.46-21.938 213.49-42.696 52.234-16.673 100.248-37.492 142.708-61.88 36.106-20.738 62.038-40.508 79.201-55.404v24.553c0 8.284 6.716 15 15 15s15-6.716 15-15v-60.25c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15s6.716 15 15 15h23.236c-16.167 13.787-40.426 32.025-73.849 51.071-63.828 36.373-175.058 83.205-342.486 99.751-8.244.815-14.267 8.158-13.452 16.402.765 7.744 7.288 13.527 14.909 13.527z"></path>
</g></svg>
            
            
          </span>
                <h4 class="u-custom-font u-text u-text-palette-1-base u-text-3"> Manage business</h4>
                <ul class="u-custom-list u-text u-text-4">
                  <li>
                    <div class="u-list-icon u-list-icon-1">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div> Duis aute irure dolor
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-2">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Velit esse cillum dolore
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-3">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Excepteur sint occaecat
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-4">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Cupidatat non proident
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-5">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Sunt in culpa qui officia
                  </li>
                </ul>
                <a href="https://nicepage.me" class="u-active-none u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-active-palette-1-light-1 u-text-hover-palette-1-light-1 u-text-palette-1-base u-btn-1">learn more</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 469.341 469.341" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-16f1"></use></svg><svg class="u-svg-content" viewBox="0 0 469.341 469.341" x="0px" y="0px" id="svg-16f1" style="enable-background:new 0 0 469.341 469.341;"><g><g><g><path d="M437.337,384.007H362.67c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333h74.667     c5.896,0,10.667-4.771,10.667-10.667v-32c0-22.368-17.35-40.559-39.271-42.323l-61.26-107     c-5.677-9.896-14.844-16.969-25.813-19.906c-10.917-2.917-22.333-1.385-32.104,4.302L79.553,128.007H42.67     c-23.531,0-42.667,19.135-42.667,42.667v256c0,23.531,19.135,42.667,42.667,42.667h362.667c23.531,0,42.667-19.135,42.667-42.667     v-32C448.004,388.778,443.233,384.007,437.337,384.007z M360.702,87.411l23.242,40.596h-92.971L360.702,87.411z M121.953,128.007     L300.295,24.184c4.823-2.823,10.458-3.573,15.844-2.135c5.448,1.458,9.99,4.979,12.813,9.906l0.022,0.039l-164.91,96.013H121.953     z"></path><path d="M437.337,234.674H362.67c-35.292,0-64,28.708-64,64c0,35.292,28.708,64,64,64h74.667c17.646,0,32-14.354,32-32v-64     C469.337,249.028,454.983,234.674,437.337,234.674z M362.67,320.007c-11.76,0-21.333-9.573-21.333-21.333     c0-11.76,9.573-21.333,21.333-21.333c11.76,0,21.333,9.573,21.333,21.333C384.004,310.434,374.431,320.007,362.67,320.007z"></path>
</g>
</g>
</g></svg>
            
            
          </span>
                <h4 class="u-custom-font u-text u-text-palette-1-base u-text-5"> Global payments</h4>
                <ul class="u-custom-list u-text u-text-6">
                  <li>
                    <div class="u-list-icon u-list-icon-6">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div> Duis aute irure dolorIn
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-7">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Velit esse cillum dolore
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-8">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Excepteur sint occaecat
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-9">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Cupidatat non proident
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-10">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Sunt in culpa qui officia
                  </li>
                </ul>
                <a href="https://nicepage.com/k/love-html-templates" class="u-active-none u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-text-active-palette-1-light-1 u-text-hover-palette-1-light-1 u-text-palette-1-base u-btn-2">learn more</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e648"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-e648"><g><circle cx="166" cy="300" r="15"></circle><g><path d="m246 277c0-24.813 20.187-45 45-45 7.632 0 14.226-4.075 17.639-10.901l2.112-4.224c1.273-2.546 2.777-4.915 4.449-7.124-6.291-6.032-14.817-9.751-24.2-9.751h-250c-19.299 0-35 15.701-35 35v160c0 19.299 15.701 35 35 35h217.629c-8.324-21.279-12.629-44.017-12.629-67.403zm-65 65.42v17.58c0 8.284-6.716 15-15 15s-15-6.716-15-15v-17.58c-17.459-6.192-30-22.865-30-42.42 0-24.813 20.187-45 45-45s45 20.187 45 45c0 19.555-12.541 36.228-30 42.42z"></path>
</g><g><path d="m491 262c-18.955 0-35.996-10.532-44.472-27.484l-2.111-4.223c-2.541-5.083-7.735-8.293-13.417-8.293h-80c-5.682 0-10.876 3.21-13.417 8.292l-2.111 4.222c-8.476 16.954-25.517 27.486-44.472 27.486-8.284 0-15 6.716-15 15v85.597c0 33.654 10.619 65.715 30.708 92.716 20.089 27 47.747 46.384 79.982 56.054 1.406.422 2.858.633 4.31.633s2.904-.211 4.31-.633c32.235-9.67 59.893-29.054 79.982-56.054 20.089-27.001 30.708-59.062 30.708-92.716v-85.597c0-8.284-6.716-15-15-15zm-46.967 87.322-56.568 56.568c-2.929 2.929-6.768 4.394-10.606 4.394s-7.678-1.464-10.606-4.394l-28.284-28.284c-5.858-5.858-5.858-15.355 0-21.213 5.857-5.858 15.355-5.858 21.213 0l17.678 17.677 45.962-45.961c5.857-5.858 15.355-5.858 21.213 0 5.856 5.858 5.856 15.355-.002 21.213z"></path>
</g><g><path d="m106 120c0-33.137 26.863-60 60-60 33.137 0 60 26.863 60 60v50h60v-50c0-66.274-53.726-120-120-120-66.274 0-120 53.726-120 120v50h60z"></path>
</g>
</g></svg>
            
            
          </span>
                <h4 class="u-custom-font u-text u-text-palette-1-base u-text-7"> Comprehensive security</h4>
                <ul class="u-custom-list u-text u-text-8">
                  <li>
                    <div class="u-list-icon u-list-icon-11">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div> Duis aute irure dolorIn
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-12">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Velit esse cillum dolore
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-13">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Excepteur sint occaecat
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-14">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Cupidatat non proident
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-15">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Sunt in culpa qui officia
                  </li>
                </ul>
                <a href="https://nicepage.com/c/industrial-website-templates" class="u-active-none u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-text-active-palette-1-light-1 u-text-hover-palette-1-light-1 u-text-palette-1-base u-btn-3">learn more</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ff56"></use></svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-ff56"><path d="m17.27 5.009-2.123-3.637c-.101-.173-.267-.299-.461-.349-.193-.048-.4-.02-.572.083l-6.49 3.894z"></path><path d="m3 6c-.55 0-1-.45-1-1s.45-1 1-1h3.37l3.34-2h-6.71c-1.48 0-2.71 1.08-2.95 2.5-.02.08-.05.16-.05.25v15.25c0 1.65 1.35 3 3 3h17c1.1 0 2-.9 2-2v-2h-2.5c-2.48 0-4.5-2.02-4.5-4.5s2.02-4.5 4.5-4.5h2.5v-2c0-1.1-.9-2-2-2zm16-2c0-1.01-.75-1.85-1.73-1.98l1.73 2.98z"></path><path d="m23.25 11.5h-3.75c-1.654 0-3 1.346-3 3s1.346 3 3 3h3.75c.414 0 .75-.336.75-.75v-4.5c0-.414-.336-.75-.75-.75zm-3.75 4c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z"></path></svg>
            
            
          </span>
                <h4 class="u-custom-font u-text u-text-palette-1-base u-text-9"> Predictable payout</h4>
                <ul class="u-custom-list u-text u-text-10">
                  <li>
                    <div class="u-list-icon u-list-icon-16">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-02b3"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div> Duis aute irure dolorIn
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-17">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-02b3"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Velit esse cillum dolore
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-18">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-02b3"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Excepteur sint occaecat
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-19">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-02b3"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Cupidatat non proident
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-20">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-02b3"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Sunt in culpa qui officia
                  </li>
                </ul>
                <a href="https://nicepage.com/html-templates" class="u-active-none u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-active-palette-1-light-1 u-text-hover-palette-1-light-1 u-text-palette-1-base u-btn-4">learn more</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c6b9"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-c6b9" style="enable-background:new 0 0 512 512;"><g><g><path d="M496.093,189.613c-18.643-15.674-47.168-13.807-63.354,5.493l-9.727,11.508l68.945,57.849l9.288-11.466    C517.22,233.997,515.199,205.621,496.093,189.613z"></path>
</g>
</g><g><g><path d="M301.375,350.534l-5.131,6.072c-4.453,5.332-7.661,11.704-9.272,18.457l-13.945,58.359    c-1.318,5.522,0.601,11.323,4.951,14.971c4.234,3.558,10.206,4.591,15.601,2.285l55.063-23.877    c6.372-2.769,12.085-7.031,16.538-12.319l5.149-6.092L301.375,350.534z"></path>
</g>
</g><g><g><polygon points="403.656,229.517 320.733,327.631 389.683,385.487 472.601,287.366   "></polygon>
</g>
</g><g><g><path d="M376.02,66.504l-56.982-54.141c-5.387-5.107-12.014-8.115-18.999-10.069V90h89.052    C387.23,81.09,382.69,72.836,376.02,66.504z"></path>
</g>
</g><g><g><path d="M257.792,368.091c2.681-11.221,8.027-21.841,15.439-30.718l116.807-138.214V120h-105c-8.291,0-15-6.709-15-15V0h-225    c-24.814,0-45,20.186-45,45v422c0,24.814,20.186,45,45,45h300c24.814,0,45-20.186,45-45v-35.459l-1.948,2.305    c-7.368,8.775-16.875,15.85-27.466,20.465l-55.107,23.892c-15.532,6.707-33.511,4.331-46.816-6.812    c-13.14-11.03-18.838-28.242-14.854-44.941L257.792,368.091z M75.038,90h150c8.291,0,15,6.709,15,15s-6.709,15-15,15h-150    c-8.291,0-15-6.709-15-15S66.747,90,75.038,90z M75.038,181h240c8.291,0,15,6.709,15,15s-6.709,15-15,15h-240    c-8.291,0-15-6.709-15-15S66.747,181,75.038,181z M195.038,391h-120c-8.291,0-15-6.709-15-15c0-8.291,6.709-15,15-15h120    c8.291,0,15,6.709,15,15C210.038,384.291,203.329,391,195.038,391z M75.038,301c-8.291,0-15-6.709-15-15c0-8.291,6.709-15,15-15    h180c8.291,0,15,6.709,15,15c0,8.291-6.709,15-15,15H75.038z"></path>
</g>
</g></svg>
            
            
          </span>
                <h4 class="u-custom-font u-text u-text-palette-1-base u-text-11"> Collaboration notes</h4>
                <ul class="u-custom-list u-text u-text-12">
                  <li>
                    <div class="u-list-icon u-list-icon-21">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c88"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div> Duis aute irure dolorIn
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-22">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c88"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Velit esse cillum dolore
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-23">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c88"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Excepteur sint occaecat
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-24">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c88"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Cupidatat non proident
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-25">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c88"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Sunt in culpa qui officia
                  </li>
                </ul>
                <a href="https://nicepage.cloud" class="u-active-none u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-text-active-palette-1-light-1 u-text-hover-palette-1-light-1 u-text-palette-1-base u-btn-5">learn more</a>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2ed5"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-2ed5"><g><path d="m439.54 68.7h-367.08c-39.95 0-72.46 32.51-72.46 72.47v229.66c0 39.96 32.51 72.47 72.46 72.47h367.08c39.95 0 72.46-32.51 72.46-72.47v-229.66c0-39.96-32.51-72.47-72.46-72.47zm-253.73 115.29-76.23 76.23 67.79 67.79c5.86 5.86 5.86 15.36 0 21.21-5.85 5.86-15.35 5.86-21.21 0l-78.4-78.4c-5.86-5.86-5.86-15.35 0-21.21l86.83-86.83c5.86-5.86 15.36-5.86 21.22 0 5.85 5.85 5.85 15.35 0 21.21zm123.73-35.29-79.32 224.59c-2.76 7.82-11.33 11.91-19.14 9.15s-11.91-11.33-9.15-19.14l79.32-224.59c2.76-7.81 11.32-11.91 19.14-9.15 7.81 2.76 11.91 11.33 9.15 19.14zm124.7 113.69-86.83 86.83c-5.86 5.86-15.36 5.86-21.22 0-5.85-5.85-5.85-15.35 0-21.21l76.23-76.23-67.79-67.79c-5.86-5.86-5.86-15.36 0-21.21 5.85-5.86 15.35-5.86 21.21 0l78.4 78.4c5.86 5.86 5.86 15.35 0 21.21z"></path>
</g></svg>
            
            
          </span>
                <h4 class="u-custom-font u-text u-text-palette-1-base u-text-13"> Developer Dashboard</h4>
                <ul class="u-custom-list u-text u-text-14">
                  <li>
                    <div class="u-list-icon u-list-icon-26">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-8d27"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div> Duis aute irure dolorIn
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-27">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-8d27"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Velit esse cillum dolore
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-28">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-8d27"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Excepteur sint occaecat
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-29">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-8d27"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Cupidatat non proident
                  </li>
                  <li>
                    <div class="u-list-icon u-list-icon-30">
                      <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-8d27"><g><g><polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
</g>
</g></svg>
                    </div>Sunt in culpa qui officia
                  </li>
                </ul>
                <a href="https://nicepage.studio" class="u-active-none u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-text-active-palette-1-light-1 u-text-hover-palette-1-light-1 u-text-palette-1-base u-btn-6">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-base u-section-6" id="sec-d5cf">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">What We Do</h2>
        <p class="u-text u-text-default u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/-min.png" alt="" data-image-width="1245" data-image-height="707">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-border-12 u-border-palette-3-light-2 u-container-style u-custom-item u-list-item u-radius-24 u-repeater-item u-shape-round u-video-cover u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h4 class="u-text u-text-default u-text-palette-3-base u-text-3"> App Development</h4>
                <p class="u-text u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Excepteur sint occaecat cupidatat non</p>
                <a href="https://nicepage.com/website-mockup" class="u-active-none u-border-2 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-palette-3-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-active-palette-3-base u-text-body-color u-text-hover-palette-3-base u-btn-1">more</a>
              </div>
            </div>
            <div class="u-align-left u-border-12 u-border-palette-3-base u-container-style u-custom-item u-list-item u-radius-24 u-repeater-item u-shape-round u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h4 class="u-text u-text-default u-text-palette-3-base u-text-5"> Mobility Services</h4>
                <p class="u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Excepteur sint occaecat cupidatat non</p>
                <a href="https://nicepage.com/c/art-design-html-templates" class="u-active-none u-border-2 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-palette-3-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-active-palette-3-base u-text-body-color u-text-hover-palette-3-base u-btn-2">more</a>
              </div>
            </div>
            <div class="u-align-left u-border-12 u-border-palette-3-light-2 u-container-style u-custom-item u-list-item u-radius-23 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h4 class="u-text u-text-default u-text-palette-3-base u-text-7"> Consulting</h4>
                <p class="u-text u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Excepteur sint occaecat cupidatat non</p>
                <a href="https://nicepage.app" class="u-active-none u-border-2 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-palette-3-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-active-palette-3-base u-text-body-color u-text-hover-palette-3-base u-btn-3">more</a>
              </div>
            </div>
            <div class="u-align-left u-border-12 u-border-palette-3-base u-container-style u-custom-item u-list-item u-radius-24 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <h4 class="u-text u-text-default u-text-palette-3-base u-text-9">SEO Services</h4>
                <p class="u-text u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Excepteur sint occaecat cupidatat non</p>
                <a href="https://nicepage.cc" class="u-active-none u-border-2 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-palette-3-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-active-palette-3-base u-text-body-color u-text-hover-palette-3-base u-btn-4">more</a>
              </div>
            </div>
          </div>
        </div>
        <p class="u-text u-text-body-alt-color u-text-11">Image from <a href="https://www.freepik.com/photos/travel" class="u-active-none u-border-1 u-border-active-palette-4-light-2 u-border-hover-palette-4-light-1 u-border-palette-4-base u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-5">Freepik</a>
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-7" id="carousel_4dc0">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <div class="u-shape u-shape-svg u-text-palette-3-base u-shape-1">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 150" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3752"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 150" x="0px" y="0px" id="svg-3752"><path d="M43.2,126.9c14.2,1.3,27.6,7,39.1,15.6c8.3,6.1,19.4,10.3,32.7,5.3c11.7-4.4,18.6-17.4,21-30.2c2.6-13.3,8.1-25.9,15.7-37.1
	c8.3-12.1,10.8-27.9,5.3-42.7C150.5,20.3,134.6,9,117,7.6C107.9,6.9,98.8,5,90.1,1.9C83-0.6,75-0.7,67.4,2.1
	c-9.9,3.7-17,11.6-20.1,21c-3.3,10.1-10.9,18-20.6,22.2c-0.1,0-0.1,0.1-0.2,0.1c-20.3,8.9-31,32-24.6,53.2
	C6.9,115.6,25.2,125.2,43.2,126.9z"></path></svg>
        </div>
        <img class="u-image u-image-contain u-image-default u-image-1" alt="" data-image-width="1245" data-image-height="607" src="images/5-min.png">
        <h2 class="u-custom-font u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-palette-1-base u-text-1">Custom software solutions</h2>
        <p class="u-large-text u-text u-text-font u-text-variant u-text-2"> Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit. Neque vitae tempus quam pellentesque nec nam aliquam sem. Neque ornare aenean euismod. </p>
        <a href="https://nicepage.com/k/quiz-html-templates" class="u-active-palette-1-light-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-3-base u-radius-6 u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-1">Learn more</a>
        <p class="u-text u-text-default u-text-3">Image from <a href="https://www.freepik.com/vectors/technology" class="u-active-none u-border-1 u-border-active-grey-50 u-border-grey-75 u-border-hover-grey-50 u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-2">Freepik</a>
        </p>
      </div>
    </section>
    <section class="u-clearfix u-palette-1-base u-section-8" id="carousel_87c6">
      <div class="u-shape u-shape-rectangle u-white u-shape-1"></div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-palette-1-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52 52" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-077e"></use></svg><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px" id="svg-077e" style="enable-background:new 0 0 52 52;"><path style="fill:currentColor;" d="M38.853,5.324L38.853,5.324c-7.098-7.098-18.607-7.098-25.706,0h0
	C6.751,11.72,6.031,23.763,11.459,31L26,52l14.541-21C45.969,23.763,45.249,11.72,38.853,5.324z M26.177,24c-3.314,0-6-2.686-6-6
	s2.686-6,6-6s6,2.686,6,6S29.491,24,26.177,24z"></path></svg></span>
              <h5 class="u-text u-text-default u-text-palette-1-base u-text-1">our main office</h5>
              <p class="u-text u-text-2">SoHo 94 Broadway St New York, NY 1001</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-palette-1-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 513.64 513.64" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9786"></use></svg><svg class="u-svg-content" viewBox="0 0 513.64 513.64" x="0px" y="0px" id="svg-9786" style="enable-background:new 0 0 513.64 513.64;"><g><g><path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72    c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68    c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44    l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"></path>
</g>
</g></svg></span>
              <h5 class="u-text u-text-default u-text-palette-1-base u-text-3">phone number</h5>
              <p class="u-text u-text-4">234-9876-5400 <br>888-0123-4567 (Toll Free)
              </p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-palette-1-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d01e"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-d01e"><path d="m201 12.714v184.286h267v-184.286c0-7.022-5.692-12.714-12.714-12.714h-241.572c-7.022 0-12.714 5.692-12.714 12.714zm63.89 33.131h70.271c8.284 0 15 6.716 15 15s-6.716 15-15 15h-70.271c-8.284 0-15-6.716-15-15s6.715-15 15-15zm0 75.142h139.22c8.284 0 15 6.716 15 15s-6.716 15-15 15h-139.22c-8.284 0-15-6.716-15-15s6.715-15 15-15z"></path><path d="m472 227h-275c-22.091 0-40 17.909-40 40v205c0 22.091 17.909 40 40 40h275c22.091 0 40-17.909 40-40v-205c0-22.091-17.909-40-40-40zm-207.5 217.5h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm80 120h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm80 120h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15z"></path><path d="m87 227h-47c-22.091 0-40 17.909-40 40v205c0 22.091 17.909 40 40 40h47c22.091 0 40-17.909 40-40v-205c0-22.091-17.909-40-40-40z"></path></svg></span>
              <h5 class="u-text u-text-default u-text-palette-1-base u-text-5">Fax</h5>
              <p class="u-text u-text-6">1-234-567-8900</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-palette-1-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9f82"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-9f82" style="enable-background:new 0 0 512 512;"><g><g><path d="M507.49,101.721L352.211,256L507.49,410.279c2.807-5.867,4.51-12.353,4.51-19.279V121    C512,114.073,510.297,107.588,507.49,101.721z"></path>
</g>
</g><g><g><path d="M467,76H45c-6.927,0-13.412,1.703-19.279,4.51l198.463,197.463c17.548,17.548,46.084,17.548,63.632,0L486.279,80.51    C480.412,77.703,473.927,76,467,76z"></path>
</g>
</g><g><g><path d="M4.51,101.721C1.703,107.588,0,114.073,0,121v270c0,6.927,1.703,13.413,4.51,19.279L159.789,256L4.51,101.721z"></path>
</g>
</g><g><g><path d="M331,277.211l-21.973,21.973c-29.239,29.239-76.816,29.239-106.055,0L181,277.211L25.721,431.49    C31.588,434.297,38.073,436,45,436h422c6.927,0,13.412-1.703,19.279-4.51L331,277.211z"></path>
</g>
</g></svg></span>
              <h5 class="u-text u-text-default u-text-palette-1-base u-text-7">Email</h5>
              <p class="u-text u-text-8">
                <a href="mailto:hello@theme.com" class="u-active-none u-border-1 u-border-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">hello@theme.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-5">
                <h3 class="u-text u-text-default u-text-9">Get in touch</h3>
                <h6 class="u-custom-font u-text u-text-font u-text-10">We can ensure reliability, low cost fares and most important, with safety and comfort in mind.</h6>
                <p class="u-text u-text-11">Etiam sit amet convallis erat – class aptent taciti sociosqu ad litora torquent per conubia! Maecenas gravida lacus. Lorem etiam sit amet convallis erat.</p>
                <div class="u-social-icons u-spacing-20 u-social-icons-1">
                  <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-5">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f107"></use></svg>
          <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f107" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>
        </span>
                  </a>
                  <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-6">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e140"></use></svg>
          <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-e140" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>
        </span>
                  </a>
                  <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-7">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4718"></use></svg>
          <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-4718" class="u-svg-content"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg>
        </span>
                  </a>
                  <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-8">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-438b"></use></svg>
          <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-438b" class="u-svg-content"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg>
        </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-top u-container-layout-6">
                <div class="u-form u-form-1">
                  <form action="" name="submit" method="POST" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
                    <div class="u-form-email u-form-group u-form-partition-factor-2">
                      <label for="email-319a" class="u-label u-text-body-alt-color u-label-1">Email</label>
                      <input type="email" placeholder="Enter a valid email address" id="email-319a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-form-name u-form-partition-factor-2">
                      <label for="name-319a" class="u-label u-text-body-alt-color u-label-2">Name</label>
                      <input type="text" placeholder="Enter your Name" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-form-message">
                      <label for="message-319a" class="u-label u-text-body-alt-color u-label-3">Message</label>
                      <textarea placeholder="Enter your message" rows="4" cols="50" id="message-319a" name="message" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required=""></textarea>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                      <a href="#" class="u-active-palette-1-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-1-light-3 u-text-palette-1-base u-white u-btn-2">Submit</a>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </body>
</html>