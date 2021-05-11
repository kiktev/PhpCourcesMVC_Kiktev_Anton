<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->getBP();?>/css/main.css">
        <title><?= $this->get('title'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://kit.fontawesome.com/8c5f8983b2.js" crossorigin="anonymous"></script>
    </head>
    <body>
		
       
			<?= $this->get('menu'); ?>
			
			
			<?= $this->get('content'); ?>
						     
    </body>
</html>