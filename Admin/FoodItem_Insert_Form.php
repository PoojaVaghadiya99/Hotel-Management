<link type="text/css" rel="stylesheet" href="../Style.css"/>

<?php
	require("../connection.php");
	require("Header_Admin.php");
?>

<form name="insert" action="FoodItem_Insert.php" method="post">
  <table  align="center" width="50%" class="dispform">
      <tr>
          <td>Food name</td>
          <td>
              <input type="text" name="food_nm" />
          </td>
      </tr>
      <tr>
          <td>Price</td>
          <td>
              <input type="text" name="price" />
          </td>
      </tr>
      <tr>
          <td>Id</td>
          <td>
              <input type="text" name="id" />
          </td>
      </tr>
      

      <tr>
          <td colspan="2" align="center">
              <input type="submit" name="submit"  value="save" />
          </td>
      </tr>
  </table>
</form>



<?php       
	require("Footer_Admin.php");
?>