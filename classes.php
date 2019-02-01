<?php if (isset($_SESSION['u_id'])) {
	include_once 'includes/dbh.inc.php';

class chat {
	private $chatid,$chatuserid,$chatText;

	public function getchatid(){
		return $this->chatid;

	}
	public function setchatid($chatid){
		$this->chatid =$chatid;
	}
	public function getchatuserid(){
		return $this->chatuserid;

	}
	public function setchatuserid($chatuserid){
		$this->chatuserid =$chatuserid;
	}
	public function getchatText(){
		return $this->chatText;

	}
	public function setchatText($chatText){
		$this->chatText =$chatText;
	}

	public function insertmessage(){
		include_once 'includes/dbh.inc.php';
		$req=$conn->prepare("INSERT INTO chats (chatuserid,chatText) VALUES ('$chatuserid', '$chatText');");
		$req->execute(array(
			'chatuserid'=>$this->getchatuserid(),
			'chatText'=>$this->getchatText()
		));
	}
	public function displaymessage(){
		include "includes/dbh.inc.php";
		$chatreq= $conn->prepare("SELECT * FROM chats ORDER BY chatid");
		$chatreq-> execute();

		while($Datachat= $chatreq->fetch()){
			$userreq= $conn->prepare("SELECT * FROM users WHERE userid=userid");
			$userreq->execute(array(
				'userid'=>$Datachat['chatuserid']
			));
			$Datauser = $userreq->fetch();
			?>
			<span class="username"><?php echo $Datauser['u_uid'] ?></span><br>
			<span class="usermessage" style="color: black; background-color: lightblue; border-radius: 5px; padding: 
			2px; margin: 10px;"><?php echo htmlspecialchars($Datachat['chatText']); ?></span><br><br>
			
		}
	}
}

}
<?php?>