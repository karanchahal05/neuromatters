<?php
  include 'head.php';
  include_once 'database.php';

?>

<?php
  $sql1 = "SELECT * FROM projects ORDER BY id ASC";
  $qry1 = mysqli_query($conn, $sql1);
  $projects = mysqli_fetch_all($qry1, MYSQLI_ASSOC);
?>
    <div class="homesec9">
      <div></div>
      <div class="grid">
        <br>
        <div class="heading-black">Projects</div>
      </div>
      <div></div>
    </div>
    <br>

<?php
  foreach ($projects as $project) {
?>
    <div class="sectional8">
      <div class="grid backgrounddarkblue">
        <img class="img-90 img center toppadding bottompadding projectimage" src="IMG/projects/<?php echo $project['image'] ?>">
      </div>
      <div class="homesec10 grid">
        <div></div>
        <div class="grid">
          <div class="titletext-black"><?php echo $project['title']?></div>
          <div class="smalltext-black"><?php echo $project['startval']?> - <?php echo $project['endval']?></div>
          <div class="normaltext-black"><?php echo $project['description']?></div>
          <br>
          <a class="grid linkstyleremove" href="projects/<?php echo $project['link']?>" target="_blank">
            <div class="buttondark backgroundlightblue sidetosidepadding toppadding bottompadding subtitle-white center"><?php echo $project['linkname']?></div>
          </a>
        </div>
        <div></div>
      </div>
    </div>
<?php
}
?>

    <br><br><br>
<?php
  include 'footer.php';
?>

<script type="text/javascript">
  globalind2 = 0;
  globalind3 = 0
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

function projects(r) {
  if (r.matches) {
    if (globalind3 == 0){
      let projects = document.getElementsByClassName('projectimage');
      for (let i=0; i<3; i++) {
        projects[0].remove();
      }
      globalind3 = 1;
    }
  }
}

var r = window.matchMedia("(max-width:370px)");
projects(r);
r.addListener(projects);
</script>

  </div>
</div>
</body>
</html>
