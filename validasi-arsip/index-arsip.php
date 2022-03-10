<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pengelolaan Arsip Digital</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="icon"  href="../assets/img/arsip.jpg">
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./"><center>Pencarian Arsip</center></a>
    </div>
  </div>
</nav>
     
      <div class="panel-body text-center" >
      <h3 class="panel-title"><center><strong>Scan QR-Code Untuk Menemukan Arsip!</h3></center></strong>
        <canvas></canvas>
        <hr>
        <select></select>
      </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
          <center><a class="btn btn-danger" href="../">Back</a></center>
      </div>
    </div>
  </div>

</div>
</div>

<!-- Js Lib -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/qrcodelib.js"></script>
<script type="text/javascript" src="js/webcodecamjquery.js"></script>
<script type="text/javascript">
    var arg = {
        resultFunction: function(result) {
            //$('.hasilscan').append($('<input name="noijazah" value=' + result.code + ' readonly><input type="submit" value="Cek"/>'));
           // $.post("../cek.php", { noijazah: result.code} );
            var redirect = '../cek-arsip.php';
            $.redirectPost(redirect, {nomor_arsip: result.code});
        }
    };
    
    var decoder = $("canvas").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery;
    decoder.buildSelectMenu("select");
    decoder.play();
    /*  Without visible select menu
        decoder.buildSelectMenu(document.createElement('select'), 'environment|back').init(arg).play();
    */
    $('select').on('change', function(){
        decoder.stop().play();
    });

    // jquery extend function
    $.extend(
    {
        redirectPost: function(location, args)
        {
            var form = '';
            $.each( args, function( key, value ) {
                form += '<input type="hidden" name="'+key+'" value="'+value+'">';
            });
            $('<form action="'+location+'" method="POST">'+form+'</form>').appendTo('body').submit();
        }
    });

</script>
</body>
</html>