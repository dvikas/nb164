<?php

print_r(get_defined_functions());

if(isset($_POST['comment'])) {
  $comment = trim($_POST['comment']);
  echo ($comment);
}

?>

<form name="testData" action="" method="post">

  <textarea name="comment"></textarea>
  <input type="submit">
</form>

<!--
<script>window.location='http://google.com'</script>
-->
