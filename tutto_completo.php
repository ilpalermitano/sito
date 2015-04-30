<?php


?>



<html>

    <head>

    </head>

    <body>
    <?php $id=2; ?>
            <form action="<?php $_PHP_SELF ?>" method="get">
                <input type="text" value="<?php $id; ?>" name="<?php $id;?>"  />
            </form>

            <?php echo$id; ?>

    </body>

</html>