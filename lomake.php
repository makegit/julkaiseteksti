<?php
require_once "public_text.php";

$lomake_valid;

if(isset($_POST['ready'])) {
  //print_r($_POST);
  $julkaisu = new Public_text($_POST);
  print_r($julkaisu->getvalidError());
  $lomake_valid = $julkaisu->getvalidError();
} elseif (isset($_POST['cancel'])) {
  header ( "location:  lomake.php" );
	exit ();
} else{

}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>lomake</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">etusivu</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="lomake.php">Julkaise oma artikkeli</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control  mr-sm-2" type="search" placeholder="Hae artikkeleita..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

<?php
//print_r($_POST);


 ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <H1>Julkaise tekstisi muiden joukossa</H1>
          <form action="" method="post">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Kokonimi</span>
                <div class="input-group-text">
                  <input type="checkbox" name="public_text_author_name_show">
                </div>
              </div>
              <input type="text" class="form-control" name="public_text_author_name_first" value="<?PHP echo $julkaisu->getFirstName()?>" placeholder="Etunimi" />
              <input type="text" class="form-control" name="public_text_author_name_last" placeholder="Sukunimi" />
            </div>
            <?php
              if(isset($lomake_valid['public_text_author_name_first'])){
                echo '<div class="alert alert-danger" role="alert">';
                  foreach ($lomake_valid['public_text_author_name_first'] as $key => $value) {
                    echo $value;
                  }
                echo '</div>';
              }
            ?>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Kirjoittajan taiteilija nimi</span>
                <div class="input-group-text">
                  <input type="checkbox" name="public_text_author_show">
                </div>
              </div>
              <input type="text" name="public_text_author" class="form-control" id="public_text_author"></input>
            </div>
              <div class="alert alert-danger" role="alert"></div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Kirjoittajan sähköposti</span>
                <div class="input-group-text">
                  <input type="checkbox" name="public_text_email_show">
                </div>
              </div>
              <input type="text" name="public_text_author_email" class="form-control" id="public_text_author_email" aria-describedby="emailHelp" placeholder=""></input>
            </div>
              <div class="alert alert-danger" role="alert"></div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tekstin otsikko</span>
              </div>
              <input type="text" name="public_text_header" class="form-control" id="public_text_header"></input>
            </div>
              <div class="alert alert-danger" role="alert"></div>

            <div class="form-group">
              <label for="public_text_content">Julkaistava teksti</label>
              <textarea class="form-control" id="public_text_content" rows="3" name="public_text_content"></textarea>
              <script>
          			CKEDITOR.replace( 'public_text_content' );
          		</script>
            </div>
              <div class="alert alert-danger" role="alert"></div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tekstin tag</span>
              </div>
              <input type="text" name="public_text_tag" class="form-control" id="public_text_header"></input>
            </div>
              <div class="alert alert-danger" role="alert"></div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Tekstin katoamis päivä</span>
              </div>
              <input type="date" name="public_text_date_end" class="form-control" id="public_text_date_end"></input>
            </div>
              <div class="alert alert-danger" role="alert"></div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Kielit joilla julkaistava teksti on kirjoitettu</span>
              </div>
              <input type="text" name="public_text_language" class="form-control" id="public_text_language"></input>
            </div>
              <div class="alert alert-danger" role="alert"></div>


              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">hyväksyn julkaisu ehdot</span>
                  <div class="input-group-text">
                    <input type="checkbox" name="public_text_agreed">
                  </div>
                </div>
                    <input class="form-control" type="text" placeholder="Hyväksymällä ehdot on ainostaan oikeellisuus julkaisuun." readonly>
              </div>
                <div class="alert alert-danger" role="alert"></div>


              <input  type="submit" name="ready" value="send" class="btn btn-outline-primary" />
              <input type="submit" name="cancel" value="reset" class="btn btn-outline-danger" />

          </form>
        </div>
      </div>
    </div>
<br />
    <div class="copyright">
     <div class="container">
         <div class="row text-center">
         	 <p>Copyright © 2018 All rights reserved</p>
         </div>
 	   </div>
    </div>
  </body>
</html>
