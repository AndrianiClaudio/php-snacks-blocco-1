<?php
/*
CONSEGNA
========
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
========
*/
$longParagraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quisquam. Vitae consectetur id quam alias. Earum harum aliquam doloremque nulla incidunt itaque voluptate iure provident excepturi nam perferendis fuga? Veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto neque voluptatem illum distinctio libero ea officiis eaque quae, ad laborum dolorum sint itaque nemo nihil aliquid blanditiis, vero adipisci reiciendis! Lorem ipsum dolor sit amet. Consectetur adipisicing elit. Quia vitae incidunt necessitatibus optio magni dicta magnam sit voluptatum est doloremque deserunt asperiores iste dolores, neque adipisci alias aut amet et!';
$dotParagraphArray = (explode('.',$longParagraph));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack 1 - 5</title>
</head>
<body>
    <h1>Snack 5</h1>
    <ul>
        <?php
        foreach($dotParagraphArray as $phrase) {
        ?>
        <li>
            <p><?=$phrase?></p>
        <?php
        }
        ?>
        </li>
    </ul>
</body>
</html>