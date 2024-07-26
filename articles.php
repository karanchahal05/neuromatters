<?php
  include 'head.php';
  include_once 'database.php';
?>
  <br>
  <div class="homesec8">
    <div></div>
    <div class="grid">
      <br>
      <div class="heading-black">Articles</div>
      <br>
      <div class="sectional7">
        <?php
          $sql = "SELECT * FROM articles ORDER BY id ASC";
          $qry = mysqli_query($conn, $sql);
          $articlesresult = mysqli_fetch_all($qry, MYSQLI_ASSOC);

          foreach ($articlesresult as $article) {

        ?>

        <div class="grid">
          <img class="img-100" src="IMG/articles/<?php echo $article['image'].".png" ?>">
          <div class="subtitle-black center"><?php echo $article['title'] ?></div>
          <div class="normaltext-black"><?php echo $article['summary'] ?></div>
          <br>
          <a class="linkstyleremove grid" href="<?php echo $article['link'] ?>">
            <div class="backgrounddarkblue normaltext-white textcenter bottompadding toppadding buttonlight">Read More</div>
          </a>
        </div>

        <?php
          }
        ?>


      </div>
    </div>
    <div></div>
  </div>
<br><br><br><br>
<?php
  include 'footer.php';
?>

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

  </div>
</div>
</body>
