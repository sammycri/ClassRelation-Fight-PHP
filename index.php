<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'Lutador.php';
           require_once 'Luta.php';
           
           $l = array();
           $l[0] = new Lutador("Clevissu", "Para", 42, 1.60, 101.5, 17, 5, 92);
           $l[1] = new Lutador("Valdeci", "Bahia", 35, 1.70, 90.2, 15, 2, 6);
           $l[2] = new Lutador("Derlei", "Ceara", 29, 1.65, 56.9, 5, 0, 1);
           $l[3] = new Lutador("Claudin", "Rondonia", 33, 1.69, 65.2, 8, 2, 7);
           
           $UEC01 = new Luta();
           $UEC01->marcarLuta($l[3], $l[2]);
           $UEC01->lutar();
           $l[3]->status();
           $l[2]->status();
                      
           $UEC01->marcarLuta($l[1], $l[0]);
           $UEC01->lutar();
           $l[3]->status();
           $l[2]->status();
           
           $UEC01->marcarLuta($l[0], $l[3]);
           $UEC01->lutar();
           $l[3]->status();
           $l[2]->status();
        ?>
        </pre>
    </body>
</html>
