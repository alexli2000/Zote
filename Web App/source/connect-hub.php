<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
} else if(isset($_POST['submitted']))
{
   if($fgmembersite->BroadcastMessage())
   {
        $fgmembersite->RedirectToURL("broadcast-sent.html");
   }
}
?>
<?php include 'php-calendar/calendar.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home > Comunity Connect</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body style="overflow-x:scroll;">
<div id='fg_membersite_content'>
<div >
	<p class="logo">Zote Web Management</p>
</div>
<ul>
<li class="menuBar" id="connect">
	<a href="">Connect</a>
</li>
<li class="menuBar">
	<a href="channel-list.php">Channel List</a>
</li>
<li class="menuBar">
	<a href="subscriber-list.php">Subscriber List</a>
</li>
<li class="menuBar">
	<a href="add-subscriber.php">Add Subscriber</a>
</li>
<li class="menuBar">
	<a href="trends.php">Trends</a>
</li>
</ul>
<div class="clear"></div>
<div class="mainContent">
	<div class="connect-left">
		<div class="message-div">
		<form id='broadcast' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<input type='hidden' name='hashtag' id='hashtag' value='#kisii'/>
			<b>Broadcast A Message</b><br/>
			<textarea form="broadcast" name="messageText" id="messageText" class="message-text-field" rows="5" placeholder="Enter your message here"></textarea><br/>
			<span style="float:left">Channels</span><span style="float:right"><button type='submit'>Send Now</button><button type="button">Schedule</button></span><br/>
			<a href="">#kisii</a><br />
			People<br/>
			<a href="">@Oksy</a>, <a href="">@user1</a>, <a href="">@pregnantMother</a>
		</form>
		</div>
		<div class="cal-div">
			<?php
				echo draw_calendar(11,2015);
			?>
		</div>
		<div class="clear"></div>
		<div class="hub-channel-list">
		    <ul class="hub-list">
		        <li class="connect-list-item"><a href="">#infection</a></li>
		        <li class="connect-list-item"><a href="">#pregnancy</a></li>
		        <li class="connect-list-item"><a href="">#diabetes</a></li>
		        <li class="connect-list-item"><a href="">#malaria</a></li>
		        <li class="connect-list-item"><a href="">#maasai</a></li>
		        <li class="connect-list-item"><a href="">#accidents</a></li>
		        <li class="connect-list-item"><a href="">#pneumonia</a></li>
		        <li class="connect-list-item"><a href="">#kisii</a></li>
		        <li class="connect-list-item"><a href="">#expectantMothers</a></li>
		        <li class="connect-list-item"><a href="">#newMothers</a></li>
		        <li class="connect-list-item"><a href="">#kipsigis</a></li>
		        <li class="connect-list-item"><a href="">#cholera</a></li>
		        <li class="connect-list-item"><a href="">#cleanWater</a></li>
		        <li class="connect-list-item"><a href="">#safeSex</a></li>
		        <li class="connect-list-item"><a href="">#HIV</a></li>
		        <li class="connect-list-item"><a href="">#childHealth</a></li>
		        <li class="connect-list-item"><a href="">#Tuberculosis</a></li>
		    </ul>
		</div>
		<div class="hub-subscriber-list">
		    <ul class="hub-list">
		        <li class="connect-list-item"><a href="">@expectantMother</a></li>
		        <li class="connect-list-item"><a href="">@kevin</a></li>
		        <li class="connect-list-item"><a href="">@Oksana</a></li>
		        <li class="connect-list-item"><a href="">@Andrew</a></li>
		        <li class="connect-list-item"><a href="">@Arya</a></li>
		        <li class="connect-list-item"><a href="">@Vinitra</a></li>
		        <li class="connect-list-item"><a href="">@user3</a></li>
		        <li class="connect-list-item"><a href="">@johnny</a></li>
		        <li class="connect-list-item"><a href="">@toto</a></li>
		        <li class="connect-list-item"><a href="">@silva</a></li>
		        <li class="connect-list-item"><a href="">@user2</a></li>
		        <li class="connect-list-item"><a href="">@newMother</a></li>
		        <li class="connect-list-item"><a href="">@diabeticPatient</a></li>
		    </ul>
		</div>
	</div>
	
</div>
</div>
</body>
</html>
