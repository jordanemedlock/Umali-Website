
<?php
include_once 'settings.php';
if (!isset($_GET['loc'])){
  $blogs = array();
  if ($fh = fopen('pages/blogs.json', "r")){
    $blogs = json_decode(fread($fh, filesize("pages/blogs.json")));
    fclose($fh);
  }
  ?>
  <div class="row-fluid">
    <div class="span2 blog">
      <ul class="blog nav nav-pills nav-stacked">
        <?php
        if (count($blogs) > 0) {
          foreach ($blogs as $key => $blog) {
            if ($key == 0){
              echo '<li class="active"><a href="#'.$key.'">'.$blog->title.'</a></li>';
            } else {
              echo '<li><a href="#'.$key.'">'.$blog->title.'</a></li>';
            }
          }
        }
        ?>
      </ul>
    </div>
    <div class="span10">
      <?php
      if (count($blogs) > 0){
        foreach ($blogs as $key => $blog) {
          echo '<div class="row-fluid" id="'.$key.'"><div class="span12 blog">';
          if ($fh = fopen("pages/blogs/".$blog->loc.".php", "r")){
            $string = fread($fh, filesize("pages/blogs/".$blog->loc.".php"));
            $array = array_splice(split('</p>', $string), 0, 3);
            $newString = join("</p>", $array).'</p>';
            echo $newString;
            fclose($fh);
          }
          // echo '<a href="#blog__'.$blog->loc.'" class="btn btn-primary">Read More...</a>';
          echo linkTo("Read More...", "blogs__".$blog->loc, cls("btn-primary"), true);
          echo '</div></div>';
        }
      } else {
        echo '<h2>No blog posts at this time</h2>';
      }
      ?>
    </div>
  </div>
  <?php
} else {
  $loc = $_GET["loc"];
  $blogs = array();
  if ($fh = fopen('pages/blogs.json', "r")){
    $blogs = json_decode(fread($fh, filesize("blogs.json")));
    fclose($fh);
  }
  $next = null;
  $prev = null;
  foreach ($blogs as $key => $blog) {
    if ($blog->loc == $loc){
      if ($key < count($blog)) $next = $blogs[$key + 1];
      if ($key > 0) $prev = $blogs[$key - 1];
    }
  }
  echo '<div class="row-fluid">
          <div class="span1 blog">
            <a href="#blog" class="btn btn-primary back-btn">&lt;&lt; <span class="visible-phone">Back to blogs</span></a>
          </div>
          <div class="span10 blog">';
  require   "pages/blogs/".$loc.".php";
  
  if ($prev){
    echo '      <a href="#blog__'.$prev->loc.'" class="btn btn-primary pull-left">&lt;&lt; '.$prev->title.'</a>';
  }
  if ($next){
    echo '      <a href="#blog__'.$next->loc.'" class="btn btn-primary pull-right">'.$next->title.' &gt;&gt;</a>';
  }
  echo '  </div>
        </div>';
}
?>
