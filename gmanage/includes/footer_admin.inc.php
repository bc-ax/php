<?php 
/**
*2012-7-30   By:NaV!
*/
//防止恶意调用
if (!defined('IN_GM')) {
	exit('Access Defined!');
}
$end_time=_time();
?>
<div id="footer">执行耗时:<span><?php echo round($end_time-$start_time,4);?></span>s<br>&copy;计算机学院</div>
</div>