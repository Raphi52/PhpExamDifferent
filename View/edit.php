<?php require '../Controller/editController.php' ?>
<!DOCTYPE html>
<html lang="en">

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
                <h3>Edition</h3>
                <p>

            </div>
            <p>



                <br />
                <div class="form-horizontal">

                    <br />
                    <div class="control-group">
                        <label class="control-label">Name</label>

                        <br />
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['name']; ?>
                            </label>
                        </div>
                        <p>

                    </div>
                    <p>


                        <br />
                        <div class="control-group">
                            <label class="control-label">Firstname</label>

                            <br />
                            <div class="controls">
                                <label class="checkbox">
                                    <?php echo $data['firstname']; ?>
                                </label>
                            </div>
                            <p>

                        </div>
                        <p>


                            <br />
                            <div class="control-group">
                                <label class="control-label">Email Address</label>

                                <br />
                                <div class="controls">
                                    <label class="checkbox">
                                        <?php echo $data['email']; ?>
                                    </label>
                                </div>
                                <p>

                            </div>
                            <p>


                                <br />
                                <div class="control-group">
                                    <label class="control-label">Phone</label>

                                    <br />
                                    <div class="controls">
                                        <label class="checkbox">
                                            <?php echo $data['tel']; ?>
                                        </label>
                                    </div>
                                    <p>

                                </div>
                                <p>


                                    <br />
                                    <div class="control-group">
                                        <label class="control-label">Pays</label>

                                        <br />
                                        <div class="controls">
                                            <label class="checkbox">
                                                <?php echo $data['pays']; ?>
                                            </label>
                                        </div>
                                        <p>

                                    </div>
                                    <p>


                                        <br />
                                        <div class="control-group">
                                            <label class="control-label">Metier</label>

                                            <br />
                                            <div class="controls">
                                                <label class="checkbox">
                                                    <?php echo $data['metier']; ?>
                                                </label>
                                            </div>
                                            <p>

                                        </div>
                                        <p>


                                            <br />
                                            <div class="control-group">
                                                <label class="control-label">Url</label>

                                                <br />
                                                <div class="controls">
                                                    <label class="checkbox">
                                                        <?php echo $data['url']; ?>
                                                    </label>
                                                </div>
                                                <p>

                                            </div>
                                            <p>


                                                <br />
                                                <div class="control-group">
                                                    <label class="control-label">Comment</label>

                                                    <br />
                                                    <div class="controls">
                                                        <label class="checkbox">
                                                            <?php echo $data['comment']; ?>
                                                        </label>
                                                    </div>
                                                    <p>

                                                </div>
                                                <p>


                                                    <br />
                                                    <div class="form-actions">
                                                        <a class="btn" href="index.php">Back</a>
                                                    </div>
                                                    <p>



                </div>
                <p>

        </div>
        <p>


    </div>
    <p>
        <!-- /container -->
</body>

</html>