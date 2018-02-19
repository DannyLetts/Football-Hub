<!doctype <html>
<html>
  <head>
  <title>Danny Letts Home</title>
  <link rel="stylesheet" type="text/css" href="commonStyle.css" />
  <link rel="stylesheet" type="text/css" href="indexstyle.css" />

  </head>
  <body>
    <header>
      <h1>Football Hub</h1>
      <p>Interactive Football Hub</p>
      <ul>
        <li><a href="index.html">Teams</a></li>
        <li><a href="litreview.html">Curent Team</a></li>
        <li><a href="Logbook.html">About</a></li>
      </ul>
    </header>
    <main>
    <p> Interactive Football Fan Application</p>
    <p><strong> Above </strong> are all of the Links to my <strong> Work! </strong> </p>
    <button type="button" name="Change Twitter" onclick="getTwitter()">changeTwitter</button>
    <div class="overlord">
      <a class="twitter-timeline" data-width="500" data-height="400" data-theme="dark" data-link-color="#19CF86" href="https://twitter.com/SwansOfficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Tweets by Arsenal</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      <div id=twitter1>

      </div>
      <div id=twitter2>

        <script src="myscripts.js"></script>
      </div>
    </div>
      <?php
      $user = 'root';
      $pass = '';
      $db = 'premier_league';
      $db = new mysqli('localhost', $user, $pass, $db) or die('Unable to connect');
      ?>
    <br />
    <br />
    <div class="fbookvid">
    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FLiverpoolFC%2Fvideos%2F10156289022782573%2F&show_text=0&width=476" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
    </div>
    <div class="data">
    <?php
    if($query = $db->query("SELECT * FROM arsenal")) {
    if($count = $query->num_rows) {
    echo '<p>', $count, '</p>';
    while($row = $query->fetch_object()) {
    echo $row->players, ' ','<br>';
    }
    }
    }
    ?>
    </div>
    </div>
    </div>
  </div>
  </div>
  </body>

</html>

<!--https://twitter.com/Arsenal?ref_src=twsrc%5Etfw-->
