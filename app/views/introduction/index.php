<?php
include_once "/Template/template.php";
$output_data['page_title'] = 'Homepage';
printMainPage($output_data);

function printContentRegion1()
{
?>
<div class="container h1 lead text-center">
	<br /><br /><br />
	<?php echo HTML::image('Images/Introduction/Index/Image01.jpg','', array('class' => 'img-responsive')); ?>
	<p>Since the beginning of time, questions are not created equal.</p>
	<p>Who, what, when, how are mortal cousins. They describe the world that we know. They bring us knowledge and wealth. They enlight the ignorances, unveil mysteries, and destroy tyrants.</p>
	<br />
	<?php echo HTML::image('Images/Introduction/Index/Image01.jpg','', array('class' => 'img-responsive')); ?>
	<p>But the why spreads like forrest fire. It consumes us, wakes us up in the night, and burns us alive until we can find its answer. Only then, we are allowed to live. Only then, can we be human.</p>
	<br />
	<?php echo HTML::image('Images/Introduction/Index/Image01.jpg','', array('class' => 'img-responsive')); ?>
	<p>Why do you fight ? Do you fight to be the best ? Do you fight to mark you name to history ? And when people talk about you, marvel before your successes, you know that your life is completed ?</p>
	<br />
	<?php echo HTML::image('Images/Introduction/Index/Image01.jpg','', array('class' => 'img-responsive')); ?>
	<p>Why do you fight ? Is your family the best thing ever happen to you ? Do you put their safety and well-being above your own life ? And when you can provide them the best thing you have, you know that your life is fulfilled ?</p>
	<br />
	<?php echo HTML::image('Images/Introduction/Index/Image01.jpg','', array('class' => 'img-responsive')); ?>
	<p>Why do you fight ? Do you long to see tomorrow ? You dream of a future with life experience far beyond current reality ? And when you do every thing to make that dream come true, yo find the meaning of your life ?</p>
	<br />
	<?php echo HTML::image('Images/Introduction/Index/Image01.jpg','', array('class' => 'img-responsive')); ?>
	<p>And why, why, why...</p>
	<p>Are you ready to walk into the fire to fight for what you treasure most ? You don’t have to fight alone ! I’m not a silver bullet to win your fight imediatly, but a powerfull weapon helping you to win it ! Together, we will taste victory !</p>
	<br />
	<div class="text-left">
		<p>For web development service, <a href="<?php echo URL::to('website_developing_service') ?>">click here.</a></p>
		<p>For hiring web developer, <a href="<?php echo URL::to('developers_for_hire') ?>">click here.</a></p>
	</div>
	<br /><br /><br />
</div>
<?php
}
?>