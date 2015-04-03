<?php
include_once "/Template/template.php";
$output_data['page_title'] = 'Website development service';
printMainPage($output_data);

function printContentRegion1()
{
?>
<div class="container">
	<br /><br /><br />
	<div>
		<?php echo HTML::image('Images/Introduction/WebsiteDevelopingService/Image01.jpg','', array('class' => 'img-responsive')); ?>
	</div>
	<div>
		<p class="lead h1 text-center">
			You want to solidify your comany’s brand on the web ? You want your customers to know your best achievements, your vision and direction ? Or you just want people having the best way to contact you ? Look no further ! An information website is what you need !
			<?php printContactMe() ?>
		</p>
	</div>
	<br /><br /><br />
	<hr />
	<br /><br /><br />
	<div>
		<?php echo HTML::image('Images/Introduction/WebsiteDevelopingService/Image01.jpg','', array('class' => 'img-responsive')); ?>
	</div>
	<div>
		<p class="lead h1 text-center">
			You want to sell goods and services on the web ? You want to reach customers in the whole country, or perhaps the entire world ? And you want to get into the game without costing an arm and a leg ? Look no further ! An online store is what you need !
			<?php printContactMe() ?>
		</p>
	</div>
	<br /><br /><br />
</div>
<?php
}

function printContactMe()
{
?>
	<a href="<?php echo URL::to('contact') ?>"> Contact me if you want one !</a>
<?php
}
?>