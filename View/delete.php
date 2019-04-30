<?php require '../Controller/deleteController.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Crud en php</title>

  <link href="../Librairies/bootstrap.min.css" rel="stylesheet">



</head>

<body>

  <br />
  <div class="container">


    <br />
    <div class="span10 offset1">

      <br />
      <div class="row">

        <br />
        <h3>Delete a user</h3>
        <p>

      </div>
      <p>


        <br />
        <form class="form-horizontal" action="../Controller/deleteController.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>" />

          Are you sure to delete ?

          <br />
          <div class="form-actions">
            <button type="submit" class="btn btn-danger" >Yes</button>
            <a class="btn" href="../View/index.php">No</a>
          </div>
          <p>

        </form>
        <p>
    </div>
    <p>


  </div>
  <p>
    <!-- /container -->
</body>

</html>