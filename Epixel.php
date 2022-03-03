<?php include 'connection.php' ?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <div style="width: 200px;">
    <h1>Create Account</h1>
    <form>
    <input  type="text" placeholder="Enter Your Name" />
    <input type="text" placeholder="Enter Your Email Id"/>
    <input type="number" placeholder="Enter Your Mobile No" />

        <label>Gender : </label><br>
		<label>Male</label>
		<input type="radio" name="gender" value="male">
		<label>Female</label>
		<input type="radio" name="gender" value="female">
        <label>Other</label>
        <input type="radio" name="gender" value="other" />
    <select id="state" >
        <option disabled selected>
            Select Your State
        </option>
        <option>
            <?php 
            $stmt = "SELECT * FROM `tbl_states` ";
            $result = $conn->query($stmt);

            $rows = mysqli_num_rows($result);

            while ($rows) {
                $result_fetch = mysqli_fetch_assoc($result);
            ?>
            <option value="<?php echo $result_fetch['name']  ?>"><?php echo $result_fetch["name"] ?></option>
            <?php 
            $rows--;
                } ?>
        </option>

    </select>
    <input type="password" placeholder="Enter Your Password ">
    </form>
    </div>
</body>
</html>