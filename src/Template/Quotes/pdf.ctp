	<div class="green">
	      
	</div>
	</br>
	<header> 

		<div id="logo" class="pull-left">
                    <?php echo $this->Html->image('betterwindowsfinalfiles.png', ['alt' => 'CakePHP', 'class'=>'img-responsive']); ?>
        </div>
      	<h3> <strong> Better Windows </strong></h3>

        <address> 
        		<p>9A Citrus Str., Braeside, VIC 3195</p>
				<p>www.betterwindows.com.au</p>
				<p>office@blueskywindows.com.au</p>
				<p>Tel. 03 988 2198 /0450908271 </p>

        </address>
        <div class="line"> </div>
        <div class="heading"> 
        	<h1> <strong><i>Quotation</i></strong></h1>
        	<h2> <strong><?= 'NO.  '.'QN'.$this->Number->format($quote->id, ['pattern' => '000000'])?></strong> </h2>
        </div>
	</header>
	</br></br></br>

	
		
			<table class="table1">
     			<colgroup>
					<col width="20%">
					<col width="38%">	
					<col width="20%">
					<col width="22%">			
				</colgroup>

     			<tbody>
		     	  <tr> 
				    <th><span>Customer Name: </span></th>
				    <td><span> <?= $quote->customer->first_name."  ".$quote->customer->last_name ?></span></td>
				    <th><span >Quotation No: </span></th>
					<td><span><?= 'QN'.$this->Number->format($quote->id, ['pattern' => '000000'])?></span></td>
				  </tr>

				  <tr> 
				    <th><span>Address: </span></th>
				    <td><?= $quote->customer->street_address ?></td>
				    <th><span>Date Created: </span></th>
					<td><span > <?= h($quote->created) ?> </span></td>
				  </tr>

				  <tr> 
				    <th><span>Phone Number: </span></th>
				    <td><?= $quote->customer->phone_number?></td>
				    <th><span >Amount Due: </span></th>
					<td><span>$</span><span></span></td>
				  </tr>
		 		</tbody>
		 	</table>
		 		</br>


     		</br>
			</br></br></br></br></br></br></br></br></br></br>
		<table class="table2" style="width:100%">
			
 		 <!-- row 1 -->
		  <tr> 
		    <th>No</th>
		    <th>Code</th>
		    <th>Name</th>
		    <th>Colour</th>
		    <th>Quantity</th>		
		    <th>Price</th>
		  </tr>

		  <!-- row 2 -->
		  <tr>
		    <td>1</td>
		    <td>FLy Screen</td>		
		    <td>Fixed </td>
		    <td>Beige</td>
		    <td>2x2 (2.q.m)</td>
		    <td>80.00</td>
		  </tr>

		  <!-- row 3 -->
		  <tr>
		    <td></td>
		    <td></td>		
		    <td> </td>
		    <td></td>
		    <td> </td>
		    <td></td>>
		  </tr>

		</table>














</div>

