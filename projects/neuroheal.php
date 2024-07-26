<?php
  session_start();
  include 'head1.php';
  include_once '../database.php';


  function randomnum($result) {
    $size = sizeOf($result) - 1;
    $y = rand(0, $size);
    return $y;
  }

  function checker($y, $arrayofobjects) {
    $size = sizeOf($arrayofobjects);
    for ($x=0; $x<$size; $x++) {
      if ($arrayofobjects[$x] == $y) {
        return 'repeat';
      }
    }
    return 'good';
  }
?>

<div class="homesec12">
  <!--
- Neurhela will be a slide deck of 2-3 games that alternate
- Cross Word puzzles, objects (where objects are shown in an order and then they dissappear and the person has to guess, another game (maybe Rubus puzzles))
 -->
<div></div>
<div class="grid">
  <br>
  <div class="heading-black">Instructions</div>
  <div class="normaltext-black">Once you click the start button, a timer of 10 seconds will start and there will be 5 objects on your screen. Your task will be to memorize what objects were present. After the 10 second timer, you will be instructed to put in your answers of what object there was for each object number. You can continue playing as many times as you please. When you want to stop, click “End” and this will show you your score. </div>
  <br>
  <?php
    if ($_SESSION["continue"] == 'true') {
  ?>
    <form method="POST" class="doublegrid">
      <button id="start" name="start" type="submit" class="center buttondark background-light subtitle-white toppadding sidetosidepadding bottompadding" style="border:0px;">Continue</button>
      <button id="end" name="end" type="submit" class="center buttondark background-light subtitle-white toppadding sidetosidepadding bottompadding" style="border:0px;">End</button>
    </form>
  <?php
    }
    else {
  ?>
  <form method="POST" class="grid">
      <button id="start" name="start" type="submit" class="center buttondark background-light subtitle-white toppadding sidetosidepadding bottompadding" style="border:0px;">Start</button>
  </form>
  <?php
  }
  ?>


  <br><br>
  <div class="gamegrid">
    <div></div>
    <div class="grid">
      <?php
          function loadobjects($result, $arrayofobjects) {
      ?>
      <div id="timer" class="titletext-white center backgrounddarkblue toppadding bottompadding sidetosidepadding">Timer:</div>
      <br>
      <div class="objectsgrid">
        <?php
            for ($x=0; $x<5; $x++) {
              $srcname = $result[$arrayofobjects[$x]]['srcname'];
              $namearray = explode(".", $srcname);
              $name = $namearray[0];
              $name = ucfirst($name);
        ?>
        <div class="indobjectgrid">
          <div class="subtitle-black center">Object <?php echo $x+1; ?>: <?php echo $name; ?></div>
          <img class="center objectimg" src="Objects/<?php echo $srcname; ?>">
        </div>
        <?php
          }
          return $namesarray;
        }
        ?>
        <script type="text/javascript">

        function sleep(milliseconds) {
          const date = Date.now();
          let currentDate = null;
          do {
            currentDate = Date.now();
          } while (currentDate - date < milliseconds);
        }


          function starttakeout() {
            var startbutton = document.getElementById('start');
            startbutton.remove();
          }

          function endtakeout() {
            var endbutton = document.getElementById('end');
            endbutton.remove();
          }

          function timer(){
            var sec = 10;
            var timer = setInterval(function(){
              document.getElementById('timer').innerHTML='Timer: '+sec+ ' seconds';
              sec--;
              if (sec < 0) {
                deleteobjects();
                clearInterval(timer);
                var typean = document.querySelectorAll('.typean');
                var length = typean.length;
                for (let i=0; i<length; i++){
                  typean[i].classList.remove('hidden');
                }
              }
            }, 1000);
          }

          function deleteobjects() {
            var objects = document.querySelectorAll('.indobjectgrid');
            var length = objects.length;

            for (let i=0; i<length; i++) {
              objects[i].remove();
            }
          }

        </script>
        <?php
        if(isset($_POST['start'])) {
          echo "<script type='text/javascript'>starttakeout();</script>";

          if ($_SESSION["continue"] == 'true') {
            echo "<script type='text/javascript'>endtakeout();</script>";
          }

          $sql = "SELECT * FROM objects";
          $qry = mysqli_query($conn, $sql);
          $result = mysqli_fetch_all($qry, MYSQLI_ASSOC);

          $arrayofobjects = array();

          for ($x=0; $x<5; $x++) {
            $y = randomnum($result);
            $arg = checker($y, $arrayofobjects);
            if ($arg == 'good') {
              array_push($arrayofobjects, $y);
            }
            else {
              $x = $x-1;
            }
          }

          $_SESSION["result"] = $result;
          $_SESSION["arrayofobjects"] = $arrayofobjects;

          loadobjects($result, $arrayofobjects);
          echo "<script type='text/javascript'>timer();</script>";
        ?>

      </div>
      <div class="grid">
        <?php
          form();
        }
        if ($_SESSION["scorem"] != 'on') {
          $_SESSION["score"] = 0;
        }
        if ($_SESSION["possiblescorem"] != 'on') {
          $_SESSION["possiblescore"] = 0;
        }
        if ($_SESSION["continue"] != 'true') {
          $_SESSION["continue"] = 'false';
        }
        ?>
        <?php
          function form() {
        ?>

        <div class="titletext-black hidden typean">Type your Answers</div>
        <br>
        <form class="grid" action="processneuroheal.php" method="POST">
          <div class="inputgridneuro">
            <?php
                for ($x=1;$x<6;$x++) {
            ?>
            <div class="normaltext-black center hidden typean">Object <?php echo $x?></div>
            <input name="<?php echo 'object'.$x?>" class="inputfield hidden typean">
            <?php
                }
            ?>
          </div>
          <br>
          <button name="answers" type="submit" class="center buttondark background-light subtitle-white toppadding sidetosidepadding bottompadding hidden typean" style="border:0px;">Submit</button>
        </form>
        <?php
          }
        ?>
        <br>
        <?php
          if (isset($_POST['end'])) {
            echo "<script type='text/javascript'>starttakeout()</script>";
            echo "<script type='text/javascript'>endtakeout()</script>";
        ?>
        <div class="subtitle-black">Session Score: <?php echo $_SESSION["score"]; ?></div>
        <div class="subtitle-black">Potential Score: <?php echo $_SESSION["possiblescore"]; ?></div>
        <div class="subtitle-black">Good Job!</div>
        <?php
            session_destroy();
          }
        ?>
      </div>

    </div>
    <div></div>
  </div>
</div>
<div></div>
</div>

<script type="text/javascript">
  globalind2 = 0;
  function insta(f) {
    if (f.matches) {
      if (globalind2 == 0){
        menusymb = document.getElementById('menubars');
        menusymb.classList.remove('fa-2x');
        menusymb.classList.add('fa-0.5x');
        globalind2 = 1;
      }
    }
  }

  var f = window.matchMedia("(max-width:340px)");
  insta(f);
  f.addListener(insta);
</script>

<!-- good link - https://stackoverflow.com/questions/19497583/converting-a-php-variable-to-a-javascript-variable-->
