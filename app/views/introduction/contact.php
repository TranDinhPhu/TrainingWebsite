<?php
include_once "/Template/template.php";
$output_data['page_title'] = 'Contact information';
printMainPage($output_data);

function printContentRegion1()
{
?>
<div class="container h3">
	<br /><br /><br />
	<address>
		<strong>Lalala, web development</strong><br />
		14/13/55 Thân Nhân Trung, 13rd ward, Tân Bình district, Hồ Chí Minh city, Vietnam<br />
		Email : <a href="mailto:tran.dinh.phu.tb@gmail.com?subject=feedback">tran.dinh.phu.tb@gmail.com</a><br />
		Skype ID : tran.dinh.phu.tb<br />
		Mobile phone number : +84908078123<br />
	</address>
	<br /><br /><br />
	<br /><br /><br />
</div>
<?php	
}
?>