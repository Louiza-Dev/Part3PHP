<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Part3</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-12 text-center border border-dark">Part3</h1>
        <!-- EXooooooooooo11111111111111111111111111111111111111111111111111111 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo1</h2>
          <div class=" d-flex justify-content-between">
            <div class="">
              <p>RandBool</p>
              <?php
              function SmaTch() {
                return true;
              }
              function NoSmatch() {
                return false;
              }
                $lang = array('PHP', 'JS', 'JQuery', 'CSS', 'SQL', 'HTML', 'C++');
                $langchoix = $lang[rand(0,6)];
                echo 'Lang choisi: ', $langchoix, '<br>';
                if($langchoix == 'PHP'){
                  echo SmaTch();
                  } else {
                  echo NoSmatch();
                  }
              ?>
            </div>
            <div class="">
              <p>While</p>
            </div>
            <div class="">
              <p>Tabl</p>
            </div>
          </div>
        </div>
        <!-- EXooooooooooooooooooo222222222222222222222222222222222 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo2 - Exo3</h2>
          <div class=" d-flex justify-content-between">
            <div class="">
              <p>RandString</p>
              <?php
                function ActLouiza() {
                  echo 'Bonjour, chere moi !!';
                }
                function ActDescodeuse() {
                  echo 'Bonjour, DesCodeuses !!';
                }
                function ActJp() {
                  echo 'Bonjour, JP !!';
                }
                $bnjr = 'Bonjour, ';
                $monde = 'tout le monde !';
                function ActLzaDeCod($strng1, $strng2) {
                  $message = $strng1. ' '. $strng2;
                  return $message;
                }
                function ActAutre() {
                  echo 'Hola, inconnu!';
                }
                $person = array('Louiza', 'DesCodeuses', 'JP', 'LouizaDeCod', 'Autre');
                $perschoix = $person[rand(0,4)];
                echo 'Persn choisi: '. $perschoix, '<br>';
                switch ($perschoix) {
                  case 'Louiza':
                      ActLouiza();
                      break;
                  case 'DesCodeuses':
                      ActDescodeuse();
                      break;
                  case 'JP':
                      ActJp();
                      break;
                    case 'LouizaDeCod':
                        echo ActLzaDeCod($bnjr, $monde);
                        break;
                    case 'Autre':
                        ActAutre();
                        break;
                }

              ?>
            </div>
            <div class="">
              <p>For</p>
            </div>
          </div>
        </div>
        <!-- EXooooooooooooo33333333333333333333333333333333 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo3</h2>
          <div class="d-flex justify-content-between">
            <div class="">
              <p>StringString</p>
              <!-- <form action="index.php" method="post">
                <input type="submit" name="someAction" value="GO" />
              </form> -->
              <?php
              // $bnjr = 'Bonjour, ';
              // $monde = 'tout le monde !';
              // function MeSsage() {
              //   echo $bnjr . $monde;
              // }
              // if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction'])) {
              //     echo "Izzzaane";
              // }
              ?>
            </div>
            <div class="">
              <p>Wile</p>
            </div>
          </div>
        </div>
        <!-- EXooooooooooo444444444444444444444444444444 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo4</h2>
          <div class="d-flex justify-content-between">
            <div class="">
              <p>Wile</p>
              <?php
              $nmbA = rand(1,15);
              $nmbB = rand(1,15);
              ?>
              <p><?= 'ChoixA: '. $nmbA?></p>
              <p><?= 'ChoixB: '. $nmbB ?></p>
              <?php
              function randCompar($val1, $val2) {
                if ($val1 < $val2) {
                  return "$val1 plus petit que $val2";
                }
                if ($val1 > $val2) {
                  return "$val1 plus grand que $val2";
                }
                return "$val1 égal à $val2";
              }
              echo randCompar($nmbA, $nmbB);
              ?>
            </div>
            <div class="">
              <!-- <p>For</p> -->
            </div>
            <div class="">
              <!-- <p>Tabl</p> -->
            </div>
          </div>
        </div>
          <!-- EXoooooooooo5555555555555555555555555555555555555  -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo5</h2>
          <!-- <div class="d-flex justify-content-between"> -->
              <?php
              $numbr = rand(1,15);
              $msg1 = ' est à un chiffre !!';
              $msg2 = ' est à deux chiffres !!';
              ?>
              <p><?= 'Nombre est: '. $numbr ?></p>
              <?php
              function randChfr($int, $stng, $strng1) {
                if ($int < 10) {
                  return  $int. $stng;
                }
                if ($int >= 10) {
                  return  $int. $strng1;
                }
              }
              echo randChfr($numbr, $msg1, $msg2);
              ?>
          <!-- </div> -->
        </div>
        <!-- BONUUUUUUUUUUUUUUUUUSSSSSSSSSSSSSS -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Bonus</h2>
          <div>
            <?php
            $nmbrA = rand(1,15);
            $nmbrB = rand(1,15);
            $nmbrC = rand(1,15);
            ?>
            <p><?= 'ChoixA: '. $nmbrA?></p>
            <p><?= 'ChoixB: '. $nmbrB ?></p>
            <p><?= 'ChoixC: '. $nmbrC ?></p>
            <?php
            function randCalc($vale1, $vale2, $vale3) {
                return $vale1 + $vale2 + $vale3;
            }
            echo randCalc($nmbrA, $nmbrB, $nmbrC);
            ?>
          </div>
          <div>

          </div>
        </div>
      </div>
    </div>
    <!-- <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  </body>
</html>
