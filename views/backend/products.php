			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br /><br />
			<table width="100%">
				<tr>
					<th>No</th>					    
				    <th width="400">Product Name</th>
				    <th width="200">Quantity Per Unit</th>	
                    <th>Units In Stock</th>	
                    <th>Units On Order</th>	
                    <th>Reorder Level</th>				   				   
				</tr>
				<?php
					foreach($heru_lihat as $row):		
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>				    
				    <td><?=$row->ProductName;?></td>
				    <td><?=$row->QuantityPerUnit;?></td>
                    <td align="center"><?=$row->UnitsInStock;?></td>
                    <td align="center"><?=$row->UnitsOnOrder;?></td>
                    <td align="center"><?=$row->ReorderLevel;?></td>
                    
                    				    
				</tr>
				<?php  endforeach; ?>
			</table>
            Halaman  <?php echo $page; ?>
