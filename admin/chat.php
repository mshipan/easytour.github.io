<?php
session_start();
if ($_SESSION['user']!=1) {
	header('location:login.php');
}
require 'master/header.php';
require'../vendor/autoload.php';

$id=$_SESSION['user_id'];

if (isset($_GET['client_id'])) {

	$cid=$_GET['client_id'];
}else{
	$cid=0;
}

if (isset($_POST['send'])) {
   if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $create_message=ChatMessage::create([
      'chat_id'=>$_POST['chatId'],
      'user_id' =>$_SESSION['user_id'],
      'text' =>$_POST['text']
    ]);
   }
}


if (isset($_POST['create'])) {
   if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $create_chat=Chat::create([
      'user_1'=>$_POST['user_1'],
      'user_2' =>$_SESSION['user_id']
    ]);
   }
}

?>




<style>
	.container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  /*display: inline-block;*/
  width: 100%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #00b96c ;
  border-radius: 3px;
  color: white;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
	padding: 5px 5px 0px 5px;
  max-height: 597px;
  overflow-y: auto;
}
</style>

<div style="" class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <button class="btn btn-info" style="color: white;"  type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">New Message</button>
              
            </div>
<!--             <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div> -->
          </div>
          <div class="collapse" id="collapseExample">
                <div class="card card-body" style="width: 100%;">
                  <form action="" class="form-group" method="post">
                    
                  <label for="user_1">Select User</label>
                  <select name="user_1" id="user_1" class="form-control">
                    <option value="" disabled="" selected="">--Select User--</option>
                    <?php 
                    foreach (User::where('role_id',2)->get() as $key => $user) { ?>
                      <option value="<?php echo $user->id; ?>"><?php echo $user->name; ?></option>
                   <?php }

                     ?>
                    
                  </select>
                  <br>
                  <input class="btn btn-success" type="submit" name="create" value="Create">
                  </form>
                </div>
              </div>
          <div class="inbox_chat">
          	<?php 
          		$allChat=Chat::orderBy('created_at','DESC')->get();
          		foreach ($allChat as $key => $chat) { ?>
          			<a href="chat.php?client_id=<?php echo $chat->user_1; ?>"><div class="chat_list active_chat">
		              <div class="chat_people">
		                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		                <div class="chat_ib">
		                  <h5> <?php echo User::where('id',$chat->user_1)->value('name') ; ?><span class="chat_date"><?php $timestamp = strtotime($chat->created_at); echo date("d M, Y", $timestamp); ?> </span></h5>
		                  <!-- <p>Test, which is a new approach to have all solutions 
		                    astrology under one roof.</p> -->
		                </div>
		              </div>
		            </div></a>
          		<?php }

          	 ?>
            
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <div class="mesgs" style="width: 100%;padding: unset;background: #a5c8dc87;">
          <div class="msg_history" style="position: relative;">
            <div class="incoming_msg">
              

              <?php 
              $chat=Chat::where('user_2',$id)->where('user_1',$cid)->value('id');
              $userName=User::where('id',$cid)->value('name');
               ?>

              <div class="incoming_msg_img"> <img height="100" width="100" src="https://ptetutorials.com/images/user-profile.png" alt="sunil"><h3><?php echo $userName; ?></h3> </div><br>

             <?php $ms=ChatMessage::where('chat_id',$chat)->orderBy('created_at','ASC')->get();
              foreach ($ms as $key => $chatMsg) { 
                if ($chatMsg->user_id==$id) { ?>
                  
                  <div class="outgoing_msg">
                  <div class="sent_msg">
                    <p><?php echo $chatMsg->text; ?></p>
                    <span class="time_date"> <?php $timestamp = strtotime($chatMsg->created_at); echo date("h.i A", $timestamp);?>    |   <?php echo date("d M, Y", $timestamp); ?> </span> 
                  </div>
                </div>


                <?php }else{ ?>
                    
                    <div class="received_msg">
                      <div class="received_withd_msg">
                        <p><?php echo $chatMsg->text; ?></p>
                        <span class="time_date"> <?php $timestamp = strtotime($chatMsg->created_at); echo date("h.i A", $timestamp);?>    |   <?php echo date("d M, Y", $timestamp); ?> </span>
                      </div>
                    </div>

               <?php }}
              ?>
          </div>
          <div class="type_msg" style="position: sticky;bottom: 0;background: #f9d98d;">
            <div class="input_msg_write">
              <form action="" method="post">
                <input type="hidden" name="chatId" value=" <?php echo $chat; ?>">
                <input type="text"  name="text" class="write_msg" placeholder="Type a message" />
                <button class="msg_send_btn" name="send" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                </button>
              </form>
              
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      
    </div>
    <br>








<?php
	require 'master/footer.php';
?>