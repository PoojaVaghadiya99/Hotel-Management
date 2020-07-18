<?php
	require("Header_Admin.php");
?>

<form name="insert" action="Hall_Insert.php" method="post" enctype="multipart/form-data">
  <table align="center" width="50%" class="dispform">
      <tr>
          <td>Hall Category</td>
          <td>
              <input type="text" name="hall_nm" />
          </td>
      </tr>
      <tr>
          <td>Price</td>
          <td>
              <input type="text" name="price" />
          </td>
      </tr>
      <tr>
          <td>Description</td>
          <td>
              <textarea name="info"></textarea>
          </td>
      </tr>
      <tr>
          <td>Upload Image</td>
          <td>
              <input type="File" name="img" />
          </td>
      </tr>

      <tr>
          <td colspan="2" align="center">
              <input type="submit" name="submit"  value="Save" />
          </td>
      </tr>
  </table>
</form>


<?php       
	require("Footer_Admin.php");
?>