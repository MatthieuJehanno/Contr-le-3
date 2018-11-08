
function GetAllRegion()
{  
    $.ajax
    (
        {
            type:"GET",
            url:"index.php/Ctrl_connexion/GetAllRegions",
            data:"idUser="+$("#lstUsers").val(),
            success:function(data)
            {
                $("#divRegions").empty();
                $("#divRegions").append(data);
            },
        }
    );
    
}



