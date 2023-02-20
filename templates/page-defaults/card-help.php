<!DOCTYPE html>
<html>
<head>
    <?php template('includes/header'); ?>
    <title><?php echo $company['name'] ?> Card Help</title>
</head>

<body>

<div class="container container-vsl mx-auto py-2">
  <div class="content  px-2 md:px-0">
    <table cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
      <tbody>
      <tr>
          <td bgcolor="#e9e9e9">
              <table cellspacing="0" cellpadding="3" width="100%" border="0">
                  <tbody>
                  <tr>
                      <td bgcolor="#ffffff">

                          <br/>
                          <br/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <center>
                              <font face="Arial" size="3"><b>Card Verification Number</b></font>

                          </center>
                      </td>
                  </tr>
                  </tbody>
              </table>
              <table cellspacing="2" cellpadding="3" width="100%" border="0">
                  <tbody>
                  <tr>
                      <td bgcolor="#ffffff">

                          <center>
                              <font face="Arial" size="2">For your safety and security, we require that you enter
                                  your card's verification number.</font>
                          </center>
                      </td>
                  </tr>
                  </tbody>
              </table>
              <table cellspacing="0" cellpadding="3" width="100%" border="0">

                  <tbody>
                  <tr>
                      <td width="50%">
                          <center>
                              <font face="Arial" size="2"><b>Visa/MasterCard/Discover</b></font>
                          </center>
                      </td>
                      <td width="50%">

                          <center>
                              <font face="Arial" size="2"><b>American Express</b></font>
                          </center>
                      </td>
                  </tr>
                  </tbody>
              </table>
              <table cellspacing="2" cellpadding="5" width="100%" border="0">

                  <tbody>
                  <tr valign="top" bgcolor="#ffffff">
                      <td width="100%">
                          <p align="justify">
                              <font face="Arial" size="2">The verification number is a 3-digit number printed on the
                                  back of your card. It appears after and to the right of your card number.</font></p>
                          <p align="center">
                              <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/cvv2vmc.gif" border="0"><br>
                          </p>
                      </td>
                  </tr>
                  <tr valign="top" bgcolor="#ffffff">
                      <td width="100%">
                          <p align="justify">
                              <font face="Arial" size="2">The verification number is a 4-digit number printed on the
                                  front of your card. It appears after and to the right of your card number.</font></p>
                          <p align="center">
                              <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/cvv2amex.gif" border="0"></p>
                      </td>
                  </tr>

                  </tbody>
              </table>
          </td>
      </tr>
    </tbody>
  </table>
		
	</div>

</div><!-- end .container -->

    <?php if ($site['debug'] == true) {
        template('debug', null, null, 'debug');
    } ?>
</body>

</html>