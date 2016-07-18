<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>
<head>
    <title>Havana youth</title>

    <link href="<?=base_url()?>css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
   
</head>
<body class="background-dark">
        <div class="landing" ">
        <?php  
         require_once 'telerivet/telerivet.php';
         $tr = new Telerivet_API('RVmAAS2XaH3XodDwc1rIzFCyP9R2Bl0a ');
         $project = $tr->initProjectById('PJ610ad49ba7a0c3542ba8d7e9ac4f535a');
       //  var_dump($student);
         
         foreach ($student as $data) {
            // $name = $value->region;
             $message = "Hi sir/madam. We just want to update you on your childs ".$data->region." , ".$data->district." progress of "
                        . "the past week math assesments"
                        . " for test 1 he got ".$data->total5." for test 2 he got ".$data->total6." for test 3 he got ".$data->total7." please keep encouraging your child to study hard";
             $to = $data->rescode;
             
             $sent_msg = $project->sendMessage(array(
            'content' => $message, 
            'to_number' => $to
        ));
        }
       
/*      
                $name = $data->region;
                $to = $data->num;
                $message = "Hi sir/madam. We just want to update you on your childs ".$data->region." , ".$data->district." progress of "
                        . "the past week math assesments"
                        . " for test 1 he got ".$data->total5."for test 2 he got ".$data->total6." for test 3 he got ".$data->total7." ";
               
        
         $sent_msg = $project->sendMessage(array(
            'content' => $message, 
            'to_number' => $to
        ));
        
         echo '<script>alert("Your request has been sent successful");
                window.location = "/havanayouth/youthsearch";
                </script>';
        */ 
      
        ?>
            <button class="btn btn-default btn-large"><a href="<?php echo base_url('stat_charts');?>">your message has successfully been sent. click to return</button>
         </div>
<!-- common libraries. required for every page-->


<!-- common application js -->

<!-- common templates -->

    <!-- page specific scripts -->
</body>

</html>