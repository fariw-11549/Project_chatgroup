<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">


<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<link rel="stylesheet" href="css/chatpage.css">
</head>


<div class="container">
    <center>
        <h2>Welcome <span style="color:#dd7ff3;"><?php echo $_SESSION['name']; ?> !</span></h2>
        <label>Join the chat</label>
    </center></br>
    <div class="display-chat">
        <?php
	
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
        <div class="message">
            <p>
                <span><?php echo $row['name']; ?> :</span>
                <?php echo $row['message']; ?>
                <div>
                    <font size="2"><?php echo $row['created_on']; ?></font>
                </div>

                <font size="1"><a href="delete.php?del_id=<?=$row['id']?>" class="delete_form">delete</a></font>



            </p>
        </div>

        <?php
		}
	}
	else
	{
?>
        <div class="message">
            <p>
                No previous chat available.
            </p>
        </div>
        <?php
	} 
?>

    </div>
    <form class="form-horizontal" method="post" action="sendMessage.php">
        <div class="form-group">
            <div class="col-sm-10">
                <textarea name="msg" class="form-control" placeholder="Type your message here..."></textarea>
            </div>

            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>

        </div>
    </form>
</div>
<script>
$(document).ready(function() {
    $('.delete_form').click(function() {
        if (confirm("เมื่อลบแล้วจะไม่สามารถกู้คืนได้ ต้องการลบหรือไม่?")) {
            return true;
        } else {
            return false;
        }
    });
});
</script>
</body>

</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>