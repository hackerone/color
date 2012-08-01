<?php
// test.php for color

require_once('Color.php');

$c = new Color('F00');
?>

<div style="width: 100px; height: 100px; background:<?php echo $c;?>"><?php echo implode(',', $c->hsl); ?></div>
<div style="width: 100px; height: 100px; background:<?php echo $c->mix('#0F0');?>"><?php echo implode(',', $c->hsl); ?></div>
<div style="width: 100px; height: 100px; background:<?php echo $c->mix('#00F');?>"><?php echo implode(',', $c->hsl); ?></div>