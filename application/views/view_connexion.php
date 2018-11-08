<!DOCTYPE html>
<html>
<head>
     <title>notation region</title>
    <script type="text/javascript" src="./JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="./JS/Fonctions.js"></script>
    <script type="text/javascript">
       $
        (
            function()
            {
                $('#lstUsers').change
                (
                    function()
                    {
                        GetAllRegions);
                    }
                );
                $('#lstRegions').change
                (
                    function()
                    {
                        Get();
                    }
                );
            }
        ); */
    </script>
</head>
<body>
   Votre nom :
        <?php
            echo "<select id='lstUsers' onchange='GetAllRegions()'>";
            
            foreach($lesUsers as $user)
            {
                echo "<option value='".$user->idUser."'>".$user->nomUser."</option>";
            }
            echo "</select>";
        ?>
        

    </div><br><br>
Liste des regions :
       <?php
            echo "<select id='lstRegion' onchange=')'>";
            
            foreach($lesRegions as $region)
            {
                echo "<option value='".$region->idRegion."'>".$region->nomRegion."</option>";
            }
            echo "</select>";
        ?>
   

</body>
</html>