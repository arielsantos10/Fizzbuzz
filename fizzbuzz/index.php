
<html>

    <link rel="stylesheet" type="text/css" href="style.css">
    
    <body>
        <div class="container">
            <div class="resultado">
                <?php 
                    for ($i = 1; $i <= 100; $i++) {
                        $numeros = array(
                            $i,
                        );

                        foreach ($numeros as $v) {
                            if((($v % 3) == 0) && (($v % 5) == 0))
                            {
                                echo "fizzbuzz, ";
                            }
                            else if(($v % 3) == 0)
                            {
                                echo "fizz, ";
                            } 
                            else if(($v % 5) == 0)
                            {
                                echo "buzz, ";
                            } else {
                                echo "$v, ";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>