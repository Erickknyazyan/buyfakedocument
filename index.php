<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <script src="//code.jivosite.com/widget/O0cyUZQQ8F" async></script>

  <title>buyfakedocument.com</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area" style="height: auto;">
    <!-- header section strats -->
    <header class="header_section" id="scrollTop">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
            <span>
              buyfakedocument.com
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">

              <li class="nav-item ">
                <a class="nav-link" href="#bank_statement_section">bank statement <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#utility_bill_section"> business bank statement</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#business_bank_statement">utility bill </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#business_utiliy_bill"> business utility bill </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#business_registration_certificate"> business registration certificate </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#passport_section"> passport </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#passport_photolook"> passport photolook </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#driving_license"> driving license </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#driving_license_photolook"> driving license photolook </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Idcard"> ID card </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#IDcard_photolook"> ID card photolook</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#carTitle">car title </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ssn_section"> SSN </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#travel_visa"> travel visa </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mix"> mix </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#certificate"> certificate </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#paystub"> paystub </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#invoice"> invoice </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reference"> reference </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#credit_card"> card </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#credit_card_photolook"> card photolook </a>
              </li>
            </ul>

          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                <div class="detail-box">
                    <div id="bank_statement_section">
                      <h1>
                        personal bank statement.
                      </h1>
                      <?php
                    $dir = 'bank-statement'; // Path to the bank-statement folder
                    $files = [];

                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Open the directory
                        if ($dh = opendir($dir)) {
                            // Read each file in the directory
                            while (($file = readdir($dh)) !== false) {
                                // Check if the file has .html extension
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                                    $files[] = $file; // Add valid files to array
                                }
                            }
                            closedir($dh); // Close the directory
                        }

                        // Sort the files alphabetically
                        sort($files);

                        // Display the sorted files
                        if (count($files) > 0) {
                            foreach ($files as $file) {
                                // Remove .html extension for display name
                                $displayName = basename($file, ".html");
                                // Replace hyphens and underscores with spaces for cleaner display name
                                $displayName = str_replace(['-', '_'], ' ', $displayName);

                                // Output the <p> and <a> tag
                                echo '<p><a style="color: white;" href="/bank-statement/' . $file . '">' . $displayName . '</a></p>';
                            }
                        } else {
                            echo '<p>No bank statement templates found.</p>';
                        }
                    } else {
                        echo '<p>No bank statement templates found.</p>';
                    }
                    ?>
                      
                    </div>
                    <div id="utility_bill_section">
                      <h1>
                        personal utility bill
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Albanian Albaniann Power Corporation utility bill
                          download
                          free</a>
                      </p>
                    </div>
                    <div id="business_bank_statement">
                      <h1>
                        business bank statement
                      </h1>
                      <?php
                    $dir = 'business-bank-statement'; // Path to the bank-statement folder
                    $files = [];

                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Open the directory
                        if ($dh = opendir($dir)) {
                            // Read each file in the directory
                            while (($file = readdir($dh)) !== false) {
                                // Check if the file has .html extension
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                                    $files[] = $file; // Add valid files to array
                                }
                            }
                            closedir($dh); // Close the directory
                        }

                        // Sort the files alphabetically
                        sort($files);

                        // Display the sorted files
                        if (count($files) > 0) {
                            foreach ($files as $file) {
                                // Remove .html extension for display name
                                $displayName = basename($file, ".html");
                                // Replace hyphens and underscores with spaces for cleaner display name
                                $displayName = str_replace(['-', '_'], ' ', $displayName);

                                // Output the <p> and <a> tag
                                echo '<p><a style="color: white;" href="/business-bank-statement/' . $file . '">' . $displayName . '</a></p>';
                            }
                        } else {
                            echo '<p>No bank statement templates found.</p>';
                        }
                    } else {
                        echo '<p>No bank statement templates found.</p>';
                    }
                    ?>
                    </div>
                    <div id="business_utiliy_bill">
                      <h1>
                        business utility bill
                      </h1>
                      <?php
                    $dir = 'business-utility-bill'; // Path to the bank-statement folder
                    $files = [];

                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Open the directory
                        if ($dh = opendir($dir)) {
                            // Read each file in the directory
                            while (($file = readdir($dh)) !== false) {
                                // Check if the file has .html extension
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                                    $files[] = $file; // Add valid files to array
                                }
                            }
                            closedir($dh); // Close the directory
                        }

                        // Sort the files alphabetically
                        sort($files);

                        // Display the sorted files
                        if (count($files) > 0) {
                            foreach ($files as $file) {
                                // Remove .html extension for display name
                                $displayName = basename($file, ".html");
                                // Replace hyphens and underscores with spaces for cleaner display name
                                $displayName = str_replace(['-', '_'], ' ', $displayName);

                                // Output the <p> and <a> tag
                                echo '<p><a style="color: white;" href="/business-utility-bill/' . $file . '">' . $displayName . '</a></p>';
                            }
                        } else {
                            echo '<p>No bank statement templates found.</p>';
                        }
                    } else {
                        echo '<p>No bank statement templates found.</p>';
                    }
                    ?>
                    </div>
                    <div id="business_registration_certificate">
                      <h1>
                        business registration certificate
                      </h1>
                      <?php
                    $dir = 'business-registration-certificate'; // Path to the bank-statement folder
                    $files = [];

                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Open the directory
                        if ($dh = opendir($dir)) {
                            // Read each file in the directory
                            while (($file = readdir($dh)) !== false) {
                                // Check if the file has .html extension
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                                    $files[] = $file; // Add valid files to array
                                }
                            }
                            closedir($dh); // Close the directory
                        }

                        // Sort the files alphabetically
                        sort($files);

                        // Display the sorted files
                        if (count($files) > 0) {
                            foreach ($files as $file) {
                                // Remove .html extension for display name
                                $displayName = basename($file, ".html");
                                // Replace hyphens and underscores with spaces for cleaner display name
                                $displayName = str_replace(['-', '_'], ' ', $displayName);

                                // Output the <p> and <a> tag
                                echo '<p><a style="color: white;" href="/business-registration-certificate/' . $file . '">' . $displayName . '</a></p>';
                            }
                        } else {
                            echo '<p>No bank statement templates found.</p>';
                        }
                    } else {
                        echo '<p>No bank statement templates found.</p>';
                    }
                    ?>
                    </div>
                    <div id="passport_section">
                      <h1>
                        passport
                      </h1>
                      <?php
                    $dir = 'passport'; // Path to the bank-statement folder
                    $files = [];

                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Open the directory
                        if ($dh = opendir($dir)) {
                            // Read each file in the directory
                            while (($file = readdir($dh)) !== false) {
                                // Check if the file has .html extension
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                                    $files[] = $file; // Add valid files to array
                                }
                            }
                            closedir($dh); // Close the directory
                        }

                        // Sort the files alphabetically
                        sort($files);

                        // Display the sorted files
                        if (count($files) > 0) {
                            foreach ($files as $file) {
                                // Remove .html extension for display name
                                $displayName = basename($file, ".html");
                                // Replace hyphens and underscores with spaces for cleaner display name
                                $displayName = str_replace(['-', '_'], ' ', $displayName);

                                // Output the <p> and <a> tag
                                echo '<p><a style="color: white;" href="/passport/' . $file . '">' . $displayName . '</a></p>';
                            }
                        } else {
                            echo '<p>No bank statement templates found.</p>';
                        }
                    } else {
                        echo '<p>No bank statement templates found.</p>';
                    }
                    ?>
                    </div>
                    <div id="passport_photolook">
                      <h1>
                        passport photolook
                      </h1>
                      <?php
                    $dir = 'passport-photolook'; // Path to the bank-statement folder
                    $files = [];

                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Open the directory
                        if ($dh = opendir($dir)) {
                            // Read each file in the directory
                            while (($file = readdir($dh)) !== false) {
                                // Check if the file has .html extension
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                                    $files[] = $file; // Add valid files to array
                                }
                            }
                            closedir($dh); // Close the directory
                        }

                        // Sort the files alphabetically
                        sort($files);

                        // Display the sorted files
                        if (count($files) > 0) {
                            foreach ($files as $file) {
                                // Remove .html extension for display name
                                $displayName = basename($file, ".html");
                                // Replace hyphens and underscores with spaces for cleaner display name
                                $displayName = str_replace(['-', '_'], ' ', $displayName);

                                // Output the <p> and <a> tag
                                echo '<p><a style="color: white;" href="/passport-photolook/' . $file . '">' . $displayName . '</a></p>';
                            }
                        } else {
                            echo '<p>No bank statement templates found.</p>';
                        }
                    } else {
                        echo '<p>No bank statement templates found.</p>';
                    }
                    ?>
                    </div>
                    <div id="driving_license">
                      <h1>
                        driving license
                      </h1>
                      <?php
                    $dir = 'driving-license'; // Path to the bank-statement folder
                    $files = [];

                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Open the directory
                        if ($dh = opendir($dir)) {
                            // Read each file in the directory
                            while (($file = readdir($dh)) !== false) {
                                // Check if the file has .html extension
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                                    $files[] = $file; // Add valid files to array
                                }
                            }
                            closedir($dh); // Close the directory
                        }

                        // Sort the files alphabetically
                        sort($files);

                        // Display the sorted files
                        if (count($files) > 0) {
                            foreach ($files as $file) {
                                // Remove .html extension for display name
                                $displayName = basename($file, ".html");
                                // Replace hyphens and underscores with spaces for cleaner display name
                                $displayName = str_replace(['-', '_'], ' ', $displayName);

                                // Output the <p> and <a> tag
                                echo '<p><a style="color: white;" href="/driving-license/' . $file . '">' . $displayName . '</a></p>';
                            }
                        } else {
                            echo '<p>No bank statement templates found.</p>';
                        }
                    } else {
                        echo '<p>No bank statement templates found.</p>';
                    }
                    ?>
                    </div>
                    <div id="driving_license_photolook">
                      <h1>
                        driving license photolook
                      </h1>
                      <?php
                    $dir = 'driving-license-photolook'; // Path to the bank-statement folder
                    $files = [];

                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Open the directory
                        if ($dh = opendir($dir)) {
                            // Read each file in the directory
                            while (($file = readdir($dh)) !== false) {
                                // Check if the file has .html extension
                                if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                                    $files[] = $file; // Add valid files to array
                                }
                            }
                            closedir($dh); // Close the directory
                        }

                        // Sort the files alphabetically
                        sort($files);

                        // Display the sorted files
                        if (count($files) > 0) {
                            foreach ($files as $file) {
                                // Remove .html extension for display name
                                $displayName = basename($file, ".html");
                                // Replace hyphens and underscores with spaces for cleaner display name
                                $displayName = str_replace(['-', '_'], ' ', $displayName);

                                // Output the <p> and <a> tag
                                echo '<p><a style="color: white;" href="/driving-license-photolook/' . $file . '">' . $displayName . '</a></p>';
                            }
                        } else {
                            echo '<p>No bank statement templates found.</p>';
                        }
                    } else {
                        echo '<p>No bank statement templates found.</p>';
                    }
                    ?>
                    </div>
                    <div id="Idcard">
                      <h1>
                        ID card
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake AFGHANISTAN identity card download
                          free</a>
                      </p>
                    </div>
                    <div id="IDcard_photolook">
                      <h1> ID photolook
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake AFGHANISTAN identity card photolook download
                          free</a>
                      </p>
                    </div>
                    <div id="carTitle">
                      <h1>
                        car title
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Alabama certificate of title of a vehicle download
                          free</a>
                      </p>
                    </div>
                    <div id="ssn_section">
                      <h1>
                        ssn
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake USA SSN (social security card, number) download
                          free</a>
                      </p>
                    </div>
                    <div id="travel_visa">
                      <h1>
                        travel visa
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Afghanistan visa download
                          free</a>
                      </p>
                    </div>
                    <div id="mix">
                      <h1>
                        mix
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Afghanistan Citizen proof of registration card download
                          free</a>
                      </p>
                    </div>
                    <div id="certificate">
                      <h1>
                        certificate
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Afghanistan marriage certificate download
                          free</a>
                      </p>
                    </div>
                    <div id="paystub">
                      <h1>
                        paystub
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Adapt Id Group pay stub download
                          free</a>
                      </p>
                    </div>
                    <div id="invoice">
                      <h1>
                        invoice
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake A4 Education Invoice template download
                          free</a>
                      </p>
                    </div>
                    <div id="reference">
                      <h1>
                        reference
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Albania Bank of Albania bank account closure reference
                          download
                          free</a>
                      </p>
                    </div>
                    <div id="credit_card">
                      <h1>
                        credit card
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Afghanistan Afghan United Bank mastercard download
                          free</a>
                      </p>
                    </div>
                    <div id="credit_card_photolook">
                      <h1>
                        card photolook
                      </h1>
                      <p>
                        <a href="#" style="color: white;">fake Afghanistan Afghan United Bank mastercard photolook
                          download
                          free</a>
                      </p>
                    </div>
                  </div>

                
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <!-- <img src="images/slider-img.png" alt=""> -->
                    <input class="searchInput" type="text" id="myInput" onkeyup="myFunction()" placeholder="search">
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

  </div>

  </section>
  <!-- end slider section -->
  </div>


  <!-- experience section -->

  <section class="experience_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/experience-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Best Experinced Freelancer Here
              </h2>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
              letters, as
            </p>
            <div class="btn-box">
              <a href="" class="btn-1">
                Read More
              </a>
              <a href="" class="btn-2">
                Hire
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end experience section -->

  <!-- category section -->

  <section class="category_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Category
        </h2>
      </div>
      <div class="category_container">
        <div class="box">
          <div class="img-box">
            <img src="images/c1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Design & Arts
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Web Development
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              SEO Markting
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Video Edting
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c5.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Logo Design
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/c6.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Game Design
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end category section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="detail-box">
        <h2>
          About buyfakedocument.com Company
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
          some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are
          many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
          by injected humour, or randomised words which don't look even slightly believable. If you
        </p>
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- freelance section -->

  <section class="freelance_section ">
    <div id="accordion">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-1">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Work Freelaner Has Done
                </h2>
              </div>
              <div class="tab_container">
                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">
                  <div class="img-box">
                    <img src="images/f1.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      $250 Million
                    </h5>
                    <h3>
                      Paid to Freelancers
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  <div class="img-box">
                    <img src="images/f2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      2 Million
                    </h5>
                    <h3>
                      Paid Invoices
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  <div class="img-box">
                    <img src="images/f3.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      700,000
                    </h5>
                    <h3>
                      Worldwide Freelancer
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="false" aria-controls="collapseFour">
                  <div class="img-box">
                    <img src="images/f4.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      98%
                    </h5>
                    <h3>
                      Customer <br>
                      Satisfaction Rate
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end freelance section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="heading_container">
            <h2>
              Testimonial
            </h2>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                    injected humour, or randomised words which don't look even slightly believable. If youThere are many
                    variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                    injected humour, or randomised words which don't look even slightly believable. If youThere are many
                    variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                    injected humour, or randomised words which don't look even slightly believable. If youThere are many
                    variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->



  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top layout_padding-bottom">
        <div class="container">
            <div class="info_top">
                <div class="info_logo">
                    <span>
                        buyfakedocument.com
                    </span>
                </div>
                <div class="social_box">
                    <a href="#">
                        <img src="images/fb.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images/twitter.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images/linkedin.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images/instagram.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images/youtube.png" alt="">
                    </a>
                </div>
            </div>

            <div class="info_main">


                <div class="col-md-12 col-lg-12" style="padding-left: 0;">
                    <h5>
                        Information
                    </h5>
                    <p>
                        A huge collection of fully editable templates in Word, Excel, PDF, and PSD formats,
                        featuring high-quality, original designs all in one place—no registration, credit card, or
                        subscription required; simply pay and download!
                    </p>
                </div>


            </div>

        </div>
    </div>
</section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved By
        buyfakedocument.com
      </p>
    </div>
  </footer>
  <a class="topButton" href="#scrollTop"><img style="width: 20px;" src="arrow_upward_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.png"></a>
  <!-- end  footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>


</body>
</body>

</html>