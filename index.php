<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>MeetMeInTh80s.com</title>
</head>
<body>


    <a href="https://www.spreadshirt.com/shop/user/grimsical/"><h1>Visit the Grimsical Store Here!</h1></a>

    <a href="https://www.spreadshirt.com/shop/design/sos+your+face+mens+premium+t-shirt-D66f5b8306852e61ff93bf6f5?sellable=VMvJwaz4dLtBvjgN451q-812-7&appearance=804">
        <h2>Get the "So's Your Face!" shirt.</h2>
        <div><img src="./images/product_images/sos-your-face-shirt.jpg"></div>
    </a>

    <a href="https://www.spreadshirt.com/shop/design/sos+your+face+sticker-D66f5b8306852e61ff93bf6f5?sellable=VMvJwaz4dLtBvjgN451q-1459-215">
        <h2>Or sticker</h2>
        <div><img src="./images/product_images/sos-your-face-sticker.jpg"></div>
    </a>






    <h1>Go vote for the best of the best of the 70s, 80s, and 90s at<br><a href='./apps/whats-the-best/'>What's the Best?</a></h1>
    <h3>I don't know what else to do here, so I decided to plop images here on what AI thinks the 80s were all about.</h3>





    <?php
        $dir = './images/';
        $files = array_diff(scandir($dir, SCANDIR_SORT_DESCENDING), array('..', '.')); // Gets files, minus . and ..

        chdir($dir);
        array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files);

        foreach ($files as $key => $value) {
            $noext = substr($value, 0, strrpos($value,"."));
            echo $noext . '<br>';
            echo '<a href="' . $dir . $value . '" target="_blank"><img class="image" src="' . $dir . $value . '"></a><br><br><br>';
        }

    ?>

</body>
</html>