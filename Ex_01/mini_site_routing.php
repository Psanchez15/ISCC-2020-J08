<html>
    <head>
<title> Mini site routing </title>
<? 
$page = array (1);
?>
<div class=navigation>
    
</div>

<h1> 
    <?php 
        if ($_Get ['page']=1) {echo "Accueil !";}
        if ($_Get ['page']=2) {echo "Page 2 !";}
        if ($_Get ['page']=3) {echo "Page 3 !";}
    
    ?>
</h1>
</head>

</html>