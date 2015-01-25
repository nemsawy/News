<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['txtnews'])) {
include 'islogedin.php';
include 'config.php';
	$newsid = $_GET['ID'];
	$title = $_POST['txtsubject'];
	$desc = $_POST['txtdesc'];
	$article = $_POST['txtnews'];

$up = "update Neww set `Subject` = '".$title."', `Describtion` = '".$desc."' , `News` = '".$article."' where id= ".$newsid." and username= '".$username."'";
	$done = mysqli_query($conn,$up);
	$done = mysqli_affected_rows($conn);

	if ($done >=1) {
		$msg = true;
	}else{
		$msg = false;
	}
}
?>
<?php
include 'config.php';
$newsid = $_GET['ID'];
$s = "select * from Neww where ID =".$newsid;
$result= mysqli_query ($conn, $s);
while ($res = mysqli_fetch_array($result)) {
	$title = $res ['Subject'];
	$desc = $res ['Describtion'];
	$article = $res ['News'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Edit News</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/bootstrap.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <body style="background: #95F2D9;">


    <div class="container">

      <form class="form-signup" role="form" action="editnews.php?ID=<?php echo $newsid; ?>" method="post">
      <?php
      if (isset($msg)) {
      	if ($msg) {
      	echo "saved !<br />";
      }else{
      	echo "not saved !<br />";
      }}

      ?>

        <h2 class="form-signin-heading">Edit Your News</h2>
        <label for="inputSubject" class="sr-only">Subject</label>
        <input type="text" name="txtsubject" value="<?php echo $title; ?>" id="inputUsername" class="form-control">
        <label for="inputDescribtion" class="sr-only">Describtion</label>
        <input type="text" name="txtdesc" value="<?php echo $desc; ?>" id="inputPassword" class="form-control">
        <label for="inputNews" class="sr-only">News</label>
        <textarea rows="7" cols="100" name="txtnews" id="inputUsername" class="form-control"><?php echo $article; ?></textarea>
        <div class="checkbox">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
