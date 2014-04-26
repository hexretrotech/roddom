<?php
#$query = $db->prepare("SELECT forum_team_title FROM forum_start WHERE id = :id");
#$query->execute(array(':id' => $_GET['id']));
#while($item = $query->fetch(PDO::FETCH_ASSOC))
#{
#$title_team = $item[forum_team_title];
#}
$title_team = $_GET['name'];
$message = "";
$query = $db->prepare("SELECT * FROM forum WHERE team_id= :id ORDER BY id DESC");
$query->execute(array(':id' => $_GET['id']));
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
		if($item[ok] == 1) {
		$message = $message . "<div class='message'>
							<div class='from_user'>
								<h4>
									<img src='http://forum.ubuntu.ru/Themes/ubuntu-portal/images/png/useron.png' >
									<span>$item[user]</span>
								</h4>
							</div>
							<p class='meta_message'>
								<img class='note' src='http://forum.ubuntu.ru/Themes/ubuntu-portal/images/png/post/xx.png'>
								<a href='#' rel='nofollow'>$title_team</a>
								<br><span>« <strong> :</strong> $item[date] »</span>
															</p>
							<div class='body_message'>$item[text] </div>
							</div>";
		}
	
}
if($message != "") {$message = $message . "<div class='add_message'>Написать сообщение</div> ";}
echo $message;
?>
