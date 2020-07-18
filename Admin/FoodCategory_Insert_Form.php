<?php
	require("Header_Admin.php");
?>

<form name="insert" action="FoodCategory_Insert.php" method="post">
  <table align="center" width="50%" class="dispform">
      <tr>
          <td>Food Category</td>
          <td>
              <input type="text" name="food_nm" />
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