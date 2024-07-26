<?php
  include 'head.php'
?>
  <div class="homesec11">
    <div></div>
    <div class="grid">
      <br>
      <div class="heading-black">Contact Us</div>
      <div class="sectional9 gap20h">
        <div class="grid">
          <script type="text/javascript" src="https://form.jotform.com/jsform/222414482379257"></script>
        </div>
        <div class="grid">
          <iframe id="gmap" class="center" width="80%" height="90%" id="gmap_canvas" src="https://maps.google.com/maps?q=Brampton&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
      </div>
    </div>
    <div></div>
  </div>

  <br><br><br>
<?php
  include 'footer.php'
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
