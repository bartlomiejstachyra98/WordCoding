<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $text= null;
        $array = preg_split("/(\w\S+\w)|(\w+)|(\s*\.{3}\s*)|(\s*[^\w\s]\s*)|\s+/", file_get_contents("text.txt"),
                -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

        $array2 = str_replace(" ", "", $array);
        foreach ($array2 as $word) {

            if (strlen($word) < 2)
                if ($word === "a" or $word === "z" or $word === "i" or $word === "o" or $word === "w") {
                    $text = $text . " " . $word;
                } else
                    $text = $text . $word;
            else
            if ($text === null)
                $text = $text . $word{0} . str_shuffle(substr($word, 1, -1)) . $word{strlen($word) - 1};
            else
                $text = $text . " " . $word{0} . str_shuffle(substr($word, 1, -1)) . $word{strlen($word) - 1};
        }


        file_put_contents('text_Coded.txt', $text);
        ?>

    </body>
</html>
