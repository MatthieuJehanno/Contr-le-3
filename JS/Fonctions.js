
function GetAllRegions()
{  
    $.ajax
    (
        {
            type:"GET",
            url:"index.php/Ctrl_connexion/GetAllRegions",
            data:"idUser="+$("#lstUsers").val(),
            success:function(data)
            {
                $("#divRegion").empty();
                $("#divRegion").append(data);
            },
        }
    );
    
}



