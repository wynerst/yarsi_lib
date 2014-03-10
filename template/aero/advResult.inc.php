<form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
		    <input type="hidden" name="search" value="Search" />				
			<div class="advance">
			<table width="100%">
				<tr>
					<td class="value bgleft">
					<?php echo __('Author(s)'); ?>
					</td>
					<td class="value bgright">
					<?php echo $advsearch_author; ?>
					</td>
					<td class="value bgleft">
					<?php echo __('Subject(s)'); ?>
					</td>
					<td class="value bgright">
					<?php echo $advsearch_topic; ?>
					</td>
				</tr>
				<tr>
					<td class="value bgleft">
					<?php echo __('ISBN/ISSN'); ?>
					</td>
					<td class="value bgright">
						<input type="text" name="isbn" />
					</td>
					<td class="value bgleft">
						<?php echo __('GMD'); ?>
					</td>
					<td class="value bgright">
						<select name="gmd">
						<?php echo $gmd_list; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="value bgleft">
						<?php echo __('Collection Type'); ?>
					</td>
					<td class="value bgright">
						<select name="colltype">
						<?php echo $colltype_list; ?>
						</select>
					</td>
					<td class="value bgleft">
						<?php echo __('Location'); ?>
					</td>
					<td class="value bgright">
						<select name="location">
						<?php echo $location_list; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="close value bgleft" style="text-align:right;">
						<a href="javascript: history.back();">Close</a>
					</td>
					<td colspan="2" class="value bgright" style="text-align:left;">
					    <input type="submit" name="search" value="<?php echo __('Search'); ?>" class="advsearchButton" />
					</td>
				</tr>
			</table>
			</div>
			</form>