<?php
session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);

?>

<style type="text/css">
<!--

.fails {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 11px;
	color: #F00;
}
-->
</style>
<table width="600" border="0" align="center">
  <tr>
    <td><fieldset>
        <legend><span class="style12">Tracking Information</span></legend>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><form method="POST" name="tracking" id="tracking" action="tracking-exec.php">
                                <table width="100%" border="0" cellspacing="3" cellpadding="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<table width="100%" class="fails">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<tr><td>',$msg . '</td></tr>'; 
		}
		echo '</table>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td width="12%">&nbsp;</td>
                                    <td width="24%"><span class="style24">Enter tracking number </span></td>
                                    <td width="64%"><label>
                                      <input name="tracknumber" type="text" id="tracknumber" size="34">
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><label>
                                      <input type="submit" name="button" id="button" value="Track">
                                      
                                    </label></td>
                                  </tr>
                                </table>
                            </form></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table>
                      </fieldset></td>
  </tr>
</table>

