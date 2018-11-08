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
                        GetAllRegions();
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
        );
    </script>
</head>
<body>
<body>
Votre nom
    <br>
    <br>
	<input type="text" id="nom">
    <br>
    <br>
	<input type="button" value="connexion" id="connexion">
	<div id="region"></div><br>
	<div id="ville"></div><br>
</body>
</html>
  
      
      
      
          
      
      
      
      
      
      
  <?php
            /*echo "<select id='lstUsers' onchange='GetAllRegions()'>";
            
            foreach($lesUsers as $user)
            {
                echo "<option value='".$user->idUser."'>".$user->nomUser."</option>";
            }
            echo "</select>";
        ?>
        

    </div><br><br>
Liste des regions :
       <?php
            echo "<select id='lstRegions' onchange=')'>";
            
            foreach($lesRegions as $region)
            {
                echo "<option value='".$region->idRegion."'>".$region->nomRegion."</option>";
            }
            echo "</select>";
        ?>
   

</body>
</html>