
<?php 
include 'include/header.php';

$output_tasklist = shell_exec("perl C:/xampp/htdocs/perl-woDEG/script/tasklist.pl");
$tasklist_result = mb_convert_encoding($output_tasklist, "UTF-8", "CP850");




?>

<?php echo htmlspecialchars($output_tasklist);?>





<?php include 'include/footer.php';?>