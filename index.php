<?php
include 'include/header.php'; 

$perl_script_result = shell_exec("perl C:/xampp/htdocs/perl-woDEG/script/validar_conexao.pl");
$ip = shell_exec("perl C:/xampp/htdocs/perl-woDEG/script/buscar_ipv4.pl");

$output_ipconfig_windows = shell_exec(" perl C:/xampp/htdocs/perl-woDEG/script/ipconfig_windows.pl");
$cmd_ipconfig_result = mb_convert_encoding($output_ipconfig_windows, "UTF-8", "CP850");

$output_buscar_MAC = shell_exec("perl C:/xampp/htdocs/perl-woDEG/script/buscar_MAC.pl");
$buscar_MAC_result = mb_convert_encoding($output_buscar_MAC, "UTF-8", "CP850");





?>

<link rel="stylesheet" href="css/index.css">

<div class="index-view">
    <header class="index-grid-topbar">
        <h1>Monitor de recursos</h1>
        <p><?php echo htmlspecialchars($perl_script_result); ?> <?php echo htmlspecialchars($ip);?></p>
        

    </header>

    <div class="index-grid-box-1">
        <div class="index-grid-inside-1-box-1">
        
            

        </div>

        <div class="index-grid-inside-1-box-2">

        </div>

        <div class="index-grid-inside-1-box-3">

        </div>

        <div class="index-grid-inside-1-box-4">

        </div>

        

    </div>

    <div class="index-grid-box-2">
        
        


    </div>

    <div class="index-grid-box-3">
        


    </div>

    <div class="index-grid-box-4">
        <h1>4</h1>

    </div>

    <div class="index-grid-box-5">

        <div class="index-grid-inside-2-box-1">
            <h1>IPCONFIG:</h1>
            <p><?php echo htmlspecialchars($cmd_ipconfig_result)?></p>

        </div>

        <div class="index-grid-inside-2-box-2">
            <h1>MAC:</h1>
            <p><?php echo htmlspecialchars($buscar_MAC_result)?></p>

        </div>
        
    </div>

    <div class="index-grid-box-6">
        <form
            action="tasklist.php"
            method="POST">

            <h1></h1>
            <button type="submit" class="submit_button">TASKLIST</button>

        </form>


    </div>
    


</div>





<?php include 'include/footer.php';?>