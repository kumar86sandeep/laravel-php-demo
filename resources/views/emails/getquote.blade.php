
<html>
	<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<title>email-template</title>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
	</head>
	<body style='margin:0; padding:0; font-family:helvetica'>
	
	<table style='width:100%; max-width:600px; margin:0 auto;' border='1' cellpadding='0' cellspacing='0'>
		<tr>
			<td>
				<table width='100%' cellpadding='0' cellspacing='0'>
					  <tr>
						  <td style='padding-left:8px; background:#fff; padding-top:10px; padding-bottom:6px; border-bottom:1px solid #ccc; text-align:center;'><a href="{{url('/')}}"><img style='width:150px;' src="{{asset('assets/img/final-logo.png')}}" alt='ContainIt'></a></td>
					  </tr>
					  
				</table>
		
				<table width='100%' style='padding:0 10px;'>
					<tr>
					  <td>
						 <h3 style='margin-bottom:20px;'>Dear <?php echo $dataObject['getquote_first_name']. ' ' .$dataObject['getquote_last_name']; ?>,</h3>
						 <?php if(isset($dataObject['getquote_containertype']) && !empty($dataObject['getquote_containertype'])){ ?>
						 
						 <p style='color:#000; font-size:12px; font-family:arial; margin-bottom:20px;'>
						 Thank you for submitting your quotation inquiry for item: <?php echo $dataObject['getquote_containertype']; ?>. Our team of experts will carefully go through the requirement and send you quote within 24 hours.</p>

						<?php } ?>	
						 <?php if(isset($dataObject['getquote_interested_in']) && !empty($dataObject['getquote_interested_in'])){ ?>
						 
						 <p style='color:#000; font-size:12px; font-family:arial; margin-bottom:20px;'>
						 Thank you for your valuable inquiry. Our sales expert will get in touch with you shortly.</p>

						<?php  } ?>	
						 <p style='font-size:12px;'>Regards,</p>
						 <p style='font-size:12px; font-weight:bold; color:#1876a5;'>Team ContainIt</p>
					  </td>

					</tr>
				</table>
				<table style='width:100%; padding:20px 0; margin-top:20px; border-top:1px solid #ccc;'>
					<tr>
						<td style='font-size:12px; line-height:18px; padding:0 10px;'>
							This email was sent by <a style='color:#1876a5;' href="{{url('/')}}"> {{url('/')}}</a>
						</td>
					</tr>
				</table>
				
			</td>
		</tr>
	</table>
	</body>
</html>