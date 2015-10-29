	


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
     			<colgroup> <!-- 60-40 -->
					<col width="22%"> 
					<col width="38%">	
					<col width="20%">
					<col width="20%">			
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
					<td><span><?php echo "S".$quoteproducts_row->unit_cost?></span><span></span></td>
				  </tr>
		 		</tbody>
		 	</table>
		 		</br>

		 	<table class="table3" >
     			<colgroup><!-- 60-40 -->
					<col width="60%">
					<col width="20%">	
					<col width="20%">		
				</colgroup>

     			<tbody>
     			  <tr><th colspan="3"><span>Item Window</span></th></tr>
		     	  <tr> 
				    <th rowspan="15"><span>
				   <?php echo $this->Html->image('uploads/designs/'.$FileName,['alt' => 'CakePHP','class' => 'img-thumbnail img-responsive','width' => 500, 'height' => 500]); ?>
				     </span></th>
				    <th><span >Open Type: </span>
				    <td><?= $Opentype?></td>
				    </th>
				  </tr>
				  <tr> 
				  	<th><span > Item Type: </span></th>
					<td><?= $quoteproducts_row->itemtype->type ?></td>
				    
				  </tr>
				  <tr> 
				    <th><span> Colour: </span></th>
				    <td><?= $quoteproducts_row->colour->name ?> </td>
							
				  </tr>
				  	<th><span> BAL-Rating: </span></th>
				    <td><?= $quoteproducts_row->balrating->balrating?></td>
					
				  <tr> 
				    <th><span > Glass Types: </span></th>
				    <td><?= $glasstype?></td>
				  </tr>
				  <tr> 
				    <th><span > Composition: </span></th>
				    <td><?=$glazing->composition->name?></td>
				  </tr>

				  <tr> 
				    <th><span > Usages: </span></th>
				    <td><?=$usage?></td>
				  </tr>
				  
				  <tr> 
				    <th><span > Fly Screen Type: </span></th>
				    <td><?=$flyscreentype?></td>
				  </tr>
				  

				  <tr> 

				    
				    <th><span > Obscurity: </span></th>
				    <?php if ($quoteproducts_row->glazing->obscurity === true){
                    		echo '<td> Yes </td>';
                     		} else{
                        		echo '<td> No</td>';
                        	}?>
				    <!-- <td><?=$quoteproducts_row->glazing->obscurity?></td> -->
				  </tr>
				  <tr> 
				    
				    <th><span > Safety: </span></th>
				    <?php if ($quoteproducts_row->glazing->safety === true){
                    		echo '<td> Yes </td>';
                     		} else{
                        		echo '<td> No</td>';
                        	}?>
				  </tr>
				 
				 <tr> 
				    
				    <th><span >Quantity </span></th>
				    <td><?=$quoteproducts_row->quantity ?></td>
				 </tr>

				 <tr> 
				    
				    <th><span > Width: </span></th>
				    <td><?= $quoteproducts_row->width.' mm'?></td>
				</tr>
				<tr> 
				    
				    <th><span > Height: </span></th>
				    <td><?= $quoteproducts_row->height.' mm'?></td>
				</tr>
				 <tr> 
				    
				    <th><span > Area: </span></th>
				    <td><?= $quoteproducts_row->width*$quoteproducts_row->height.' sqm'?></td>
				</tr>

				  <tr> 
				    
				    <th><span >Total for an item (incl. GST): </span></th>
					<td><?php echo "S".$quoteproducts_row->unit_cost?></td>
				  </tr>
				  <tr> 
				    
				    <td colspan="3"><span ><b> Comments: </b><?= $quoteproducts_row->comment?></span></td>
					
				  </tr>
		 		</tbody>
		 	</table>

     		
			</br></br></br></br></br></br></br></br></br></br>
</div>

