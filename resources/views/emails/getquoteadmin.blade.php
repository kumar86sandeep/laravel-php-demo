
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
						 <h3 style='margin-bottom:20px;'>Dear Admin,</h3>
						  <?php if(isset($dataObject['getquote_containertype']) && !empty($dataObject['getquote_containertype'])){ ?>
						 <p style='color:#000; font-size:12px; font-family:arial; margin-bottom:20px;'>
						 You have received a Quotation request by <?php echo $dataObject['getquote_first_name']. ' ' .$dataObject['getquote_last_name']; ?> for the product mentioned below. Please review inquiry details and do the needful as soon as possible.</p>
						<?php  } ?>	 
						
						<?php if(isset($dataObject['getquote_interested_in']) && !empty($dataObject['getquote_interested_in'])){ ?>
						 <p style='color:#000; font-size:12px; font-family:arial; margin-bottom:20px;'>
						 You have received a Contact request by <?php echo $dataObject['getquote_first_name']. ' ' .$dataObject['getquote_last_name']; ?>. Please review below details and do the needful as soon as possible.</p>
						<?php  } ?>							 
						
						 						 
						 <p style='font-size:12px;'>Email: <?php echo $dataObject['getquote_email']; ?></p>
						 
						<?php if(isset($dataObject['getquote_phone']) && !empty($dataObject['getquote_phone'])){ ?> 
							<p style='font-size:12px;'>Phone: <?php echo $dataObject['getquote_phone']; ?></p>
						<?php  } ?>
						<?php if(isset($dataObject['getquote_interested_in']) && !empty($dataObject['getquote_interested_in'])){ ?> 
							<p style='font-size:12px;'>Interested In: <?php echo $dataObject['getquote_interested_in']; ?></p>
						<?php  } ?>
						
						 <?php if(isset($dataObject['getquote_containertype']) && !empty($dataObject['getquote_containertype'])){ ?>
							<p style='font-size:12px;'>Container Type: <?php echo $dataObject['getquote_containertype']; ?></p> 
						<?php  } ?>
						 <?php if(isset($dataObject['getquote_message']) && !empty($dataObject['getquote_message'])){ ?>
							<p style='font-size:12px;'>Message: <?php echo $dataObject['getquote_message']; ?></p> 
						<?php } ?>
						
						
						 
						 <p style='font-size:12px;'>Regards,</p>
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