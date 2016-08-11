<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="../js/jquery-2.2.3.js"></script>
	<script type="text/javascript" language="javascript">
 	function call() {
 	  var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: 'res.php',
          data: msg,
          success: function(data) {
            $('#results').html(data);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
 
    }
</script>
</head>
<body>
	<form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
<legend>Test From</legend>
<label for="name">Name:</label><input id="name" name="name" value="" type="text">
<label for="email">Email:</label><input id="email" name="email" value="" type="text">
<input value="Send" type="submit">
</form>
<div id="results">вывод</div>
</body>
</html>