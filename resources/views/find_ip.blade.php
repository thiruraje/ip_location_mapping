<!DOCTYPE html>
<html>
<title>find_ip</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <center><h2>Find Details</h2></center>
  
  <div class="w3-card-4">
    <div class="w3-container w3-green">
    	<center><h2>Ip Address</h2></center>
    </div>

    <form class="w3-container" action="{{ route('details') }}" method="post"><br>
    	 {{ csrf_field() }}
      <input class="w3-input w3-border w3-round-large" type="text" placeholder="ip address" name="ip_address">
      <br>
      <center>
        <button type="Submit" class="w3-btn w3-blue" value="Submit">Submit</button>
      </center>
      <br>


    </form>
  </div>
</div>

</body>
</html>
