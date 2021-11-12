<html>
  <body>
    <div id=”r-output” id=”width: 100%; padding: 25px;”>
      <?php
        exec("Rscript sample.R");
      ?>
      <img src="test.jpg" alt="R Graph" />
    </div>
  </body>
</html>
