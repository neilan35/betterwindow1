<div class="container" >
	<div class"row">
		<div class"col-lg-12">
		<h1><?php echo "Your quote price: $" . $price ?> 
			<div class="pull right" ><?php echo "QN".$this->Number->format($quoteproducts_row->quote_id, ['pattern' => '000000']) ?> </div>
		</h1>
		</div>
	</div>
	<table class="table3" >
     			<colgroup><!-- 60-40 -->
					<col width="60%">
					<col width="20%">	
					<col width="20%">		
				</colgroup>

     			<tbody>
     			  <tr><th colspan="3"><b><span>Quotation Summary</span></b></th></tr>
		     	  <tr> <th rowspan="17"><span><?php echo $this->Html->image('uploads/designs/'.$FileName,['alt' => 'CakePHP','class' => 'img-thumbnail img-responsive','width' => 500, 'height' => 500]); ?></span></th>

				  <th><span >Open Type: </span> <td>Opentype</td></th></tr>

				  <tr> 
				  <th><span > Item Type: </span></th>
				  <td><?= $quoteproducts_row->itemtype->type ?></td>
				  </tr>

				  <tr> 
				    <th><span> Colour: </span></th>
				    <td><?= $quoteproducts_row->colour->name ?></td>
							
				  </tr>
				  	<th><span> BAL-Rating: </span></th>
				    <td><?= $quoteproducts_row->balrating->balrating?></td>
					
				  <tr> 
				    <th><span > Glass Types: </span></th>
				    <td><?=$glasstype?></td>
				  </tr>
				  <tr> 

				  <tr> 
				    <th><span > Composition: </span></th>
				    <td><?=$glazing->composition->name?></td>
				  </tr>
				  <tr> 

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
				    <td><?= $quoteproducts_row->quantity ?></td>
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
				    
				    <th><span >Total price for an item (incl. GST): </span></th>
					<td><?php echo '$'.$price?></td>
				  </tr>
				  <tr> 
				    
				    <td colspan="3"><span ><b> Comments: </b><?= $quoteproducts_row->comment?> </span></td>
					
				  </tr>
		 		</tbody>
		 	</table>


		 	<div class"row">
				<div class"col-lg-12">
					<h1>
						<div class="pull right" ><?php echo $this->Html->link('<span class=fa-arrow-circle-o-right"></span> Make another quote', array('controller'=>'Quotes','action'=>'create'), array('escape' => false, 'class' => 'btn btn-success btn-lg pull-right', 'target' => '_self'));?> </div>
					</h1>
				</div>
			</div>
		 	


</div>