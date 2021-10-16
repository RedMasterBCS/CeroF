<!DOCTYPE html>
<html>
<head>
    <title><?php echo e(__('titleResetMail')); ?></title>
</head>

<body>

<div style="width:100%; background:#fff; padding:0px; color:#333; font-family:Arial,'Century Gothic',Tahoma; margin-bottom:10px; font-size:12px;max-width:647px; margin:0 auto">								
								    
    <div>
        <h1 style="font-size:18px"><?php echo e(__('lblHello')); ?> <?php echo e($user['NOMBRE']); ?>!</h1>        
        <p style="font-size:13px"><?php echo e(__('lblResetMail1')); ?></p>
        <br><br>
        <center><b style="font-size:20px"><?php echo e($newpass); ?></b></center>
        <br><br>
        <center><a href="<?php echo e(route('login', app()->getLocale())); ?>" style="border-radius:4px; color:#333; display:inline-block; text-decoration:none; background-color:#F1C81E; border-top:10px solid #F1C81E; border-right:18px solid #F1C81E; border-bottom:10px solid #F1C81E; border-left:18px solid #F1C81E; font-size:13px"><?php echo e(__('lblResetMail2')); ?></a></center>
        <br>
        <p style="font-size:13px"><?php echo e(__('lblResetMail3')); ?></p>  
    </div>
    
    <p style="border-top:1px solid #ccc; padding-top:10px; font-size:11px; color:#999999"><?php echo e(__('lblResetMail4')); ?> <?php echo e(route('login', app()->getLocale())); ?></p> 
</div>

</body>

</html>
