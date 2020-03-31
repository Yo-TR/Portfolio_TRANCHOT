<!DOCTYPE html>
<html lang="fr">
<body>
<div class="container">
    <form method="post" action="" enctype="multipart/form-data" id="myform">
        <div >
            <input type="file" id="file" name="file" /><br>
            <input type="text" name="testx" id="" value="Maëlys-!? Tranchot"><br>
            <input type="button" class="button" value="Upload" id="but_upload">
        </div>
    </form>
</div>
  
<div class="retour"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){

    $("#but_upload").click(function(){
        var x = document.getElementById('myform');
        console.log(x);
        var fd = new FormData(x);
        $.ajax({
            url: 'server_test.php',
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
              $('.retour').html(response);
              console.log(fd);
                if(response != 0){
                    $("#img").attr("src",response); 
                    $(".preview img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });
});

</script>
</body>
</html>

