<html>   
    <body>  
    <form method="POST" action="">
      <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Naam" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="Telefoonnummer" type="text" required>
        </div> 
          <div class="col-sm-12 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="msg" name="msg" placeholder="Bericht" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
         <button class="btn btn-default pull-right" id="submit" name="submit" type="submit">Verstuur</button>
        </div>
      </div>
    </div>
  </div>
</div> 
        </div>
    </form> 

<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='infosyncdevelopment@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
             header("Refresh: 3; url=contact.html");
 
			echo "<h1>Bedankt voor uw bericht!"." ".$name.", Wij nemen zo snel mogelijk contact met u op.</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
</body>
</html>
