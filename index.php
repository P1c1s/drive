<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Drive</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


<style>
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
<div class="row">
<i class="fas fa-folder text-danger fa-2x"></i>
                <h3>DRIVE</h3>
            </div>
</div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Drive</a>
                        <?php
echo '<ul class="collapse list-unstyled" id="homeSubmenu">';
                           foreach (glob('files/*') as $path){
                           $filename=explode('/', $path);
                           if(is_dir('files/'.$filename[1])){
                              echo'<a><div class="row">';
                              echo '<i class="fas fa-folder text-primary fa-2x"></i>';
                              echo'<li>'.$filename[1].'</li>';
                              echo '</div></a>';
                             }
                           }
echo '</ul>';
                        ?>
<p>Cestino</p>
<p>s</p>
<p>Impostazioni</p>


<?php

echo exec('du -sh');
echo'<meter id="disk_d" value="'.(0.1+0.3).'">60%</meter>';
$totalSpace=10*1024*1024;
echo '<div class="progress" style="height:5px; width:100px">';
echo '<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="10" style="width:'.((exec('du -s')*100)/$totalSpace).'%">';
//echo '<span class="sr-only">70% Complete</span>';

echo '</div>';
echo '</div>';

?>
<form method="post" enctype="multipart/form-data" action="">
    <input type="file" name="file" id="files" class="btn btn-success btn-user btn-block" multiple="" directory="" webkitdirectory="" mozdirectory="">
<br>
<br>

   <input name="sub" type="submit" class="btn btn-success btn-user btn-block" value="Upload"/>
</form>

        </nav>

        <!-- Page Content Holder -->
        <div id="content">
<div id="overlay" onclick="off()">
<div>
<div>
  <iframe id="frame" src=""></iframe>
<?php
//info about files
$file = stat('index.php');

echo 'Device number'.$file[0];
echo '<br>Inode number'.$file[1];
echo '<br>Inode protection mode'.$file[2];
echo '<br>Number of links'.$file[3];
echo '<br>User ID of owner'.$file[4];
echo '<br>Group ID of owner'.$file[5];
echo '<br>Inode device type'.$file[6];
echo '<br>Size in bytes'.$file[7];
echo '<br>Last access'.$file[8];
echo '<br>Last modified'.$file[9];
echo '<br>Last inode change'.$file[10];
echo '<br>Blocksize of filesystem IO'.$file[11];
echo '<br>Number of blocks allocated'.$file[12];

?>
</div>
</div>
</div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

               <div>
                 <input class="form-control" type="text" placeholder="Cerca" aria-label="Search" onkeyup="search()" id="Search">
              </div>

           </nav>
CARTELLE

            <?php
             echo '<div class="row">';
             foreach (glob('files/*') as $path){

                //Explode the path in more strings
                $filename=explode('/', $path);


//if(is_dir('f)) echo 'SIIIII';
if(is_dir('files/'.$filename[1]))
//if(is_dir('files/'.$filename[0]))
{
                echo '<div class="col-xl-2 col-md-6 mb-4">';
echo '<a href="qualcosa.php">';
                echo '<div class="card border-left-primary shadow h-100 py-2">';
                echo '<div class="card-body">';
                echo '<div class="row no-gutters align-items-center">';
                echo '<div class="col mr-2">';
                echo '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$filename[1].'</div>';
               // echo '<div class="mb-0 font-weight-bold text-gray-800">$40,000</div>';

                //Buttons
                echo '</div>';
                echo '<div class="col-auto">';
                echo '<i class="fas fa-folder text-primary fa-2x text-gray-300"></i>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
echo '</a>';
                echo '</div>';
}
             }
                // <!--END ROW-->
                echo '</div>';

            ?>
<hr>
<br><br>FILE
            <?php
             echo '<div class="row">';
             foreach (glob('files/*') as $path) {
                //Explode the path in more strings
                $filename=explode('/', $path);
if(!(is_dir('files/'.$filename[1]))){
                echo '<div class="col-md-2 target">';
                echo '<div class="card mb-2 box-shadow">';

switch ($filename[1]) {
        //Archive
        case (preg_match('/(\.)(7z|g?zip|gz|iso|rar|tar)$/i', $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-archive.svg" data-holder-rendered="true">';
            break;
        //Code
        case (preg_match('/(\.)(asd|asp|bat|cmd|btm|bas|c|cel|cpp|cs|h|java|js|nsi|pars|py|php|pl|ps|sh|sql|vb)$/i', $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-code.svg" data-holder-rendered="true">';
            break;
        //Excel
        case (preg_match('/(\.)(xlsb|xlsm|xlsx?|xltm?|xml)$/i', $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-excel.svg" data-holder-rendered="true">';
            break;
        //Movie
        case (preg_match('/(\.)(avi|divx|mov|mp3|mp4|mpe?g|)$/i', $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-audio.svg" data-holder-rendered="true">';
            break;
        //Pdf
        case (preg_match('/(\.)(pdf)$/i', $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-pdf.svg" data-holder-rendered="true">';
            break;
        //Picuters
        case (preg_match('/(\.)(bmp|gif|heic|jpe?g|png|svg|tiff)$/i', $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="'.$path.'" data-holder-rendered="true">';
            break;
        //Plain Text
        case (preg_match("/(\.)(rts|txt)$/", $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-alt.svg" data-holder-rendered="true">';
            break;
        //Powepoint
        case (preg_match('/(\.)(potm|potx?|ppsm|ppsx?|pptm|pptx?)$/i', $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-powerpoint.svg" data-holder-rendered="true">';
            break;
        //Word
        case (preg_match('/(\.)(docm|docx?|dotm|dotx?|odt)$/i', $filename[1]) ? true : false ):
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-word.svg" data-holder-rendered="true">';
            break;
        default:
               echo '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Resource not avaible [100%x225]" style="height: 225px; width: 100%; display: block;" src="icons/file-signature.svg" data-holder-rendered="true">';
            break;
    }

                echo '<div class="card-body">';
                echo '<h6>'.$filename[1].'</h6>';
                echo '<p class="card-text">Descrizione</p>';
                echo '<div class="d-flex justify-content-between align-items-center">';
                echo '<div class="btn-group">';

                //Buttons
                echo '<button type="button" class="btn btn-sm btn-outline-secondary" onclick="on(this.value)" value="'.$path.'">Apri</button>';
                echo '<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>';
                echo '<button type="button" class="btn btn-sm btn-outline-secondary">Details</button>';

                echo '</div>';
//                echo '<small class="text-muted">9 mins</small>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
}
             }
                // <!--END ROW-->
                echo '</div>';

            ?>
      






        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <!--SIDE NAVBAR-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

   <!--SEARCH FUNCTION-->
   <script>
function search() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('target');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
    </script>



<!--OVERLAY-->
<script>
function on(srcPath) {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("frame").src = srcPath;
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>



</body>

</html>



<?php
//SERVER UPLOAD

// per prima cosa verifico che il file sia stato effettivamente caricato

if (!isset($_FILES['file']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
  echo 'Non hai inviato nessun file...';
}

//percorso della cartella dove mettere i file caricati dagli utenti
$uploaddir = 'files/';

//Recupero il percorso temporaneo del file
$userfile_tmp = $_FILES['file']['tmp_name'];

//recupero il nome originale del file caricato
$userfile_name = $_FILES['file']['name'];

//copio il file dalla sua posizione temporanea alla mia cartella upload
if (move_uploaded_file($userfile_tmp, $uploaddir . $userfile_name)) {
  //Se l'operazione è andata a buon fine...
  echo 'File inviato con successo.';
header('Location: index.php');
}else{
  //Se l'operazione è fallta...
  echo 'Upload NON valido!'; 
}



?>
