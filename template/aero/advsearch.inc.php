	<div id="advance-search">
		<form name="advSearchForm" id="advSearchForm" action="index.php" method="get">
			<div class="advance">
				<table width="100%">
					<tr>
						<td class="advForm">
						<?php echo __('Author(s)'); ?>
						</td>
					</tr>
					<tr>
						<td class="advForm">
						<?php echo $advsearch_author; ?>
						</td>
					</tr>
					<tr>
						<td class="advForm">
						<?php echo __('Subject(s)'); ?>
						</td>
					</tr>
					<tr>
						<td class="advForm">
						<?php echo $advsearch_topic; ?>
						</td>
					</tr>
					<tr>
						<td class="advForm">
						<?php echo __('Publishing Year'); ?>
						</td>
					</tr>
					<tr>
						<td class="advForm">
							<input type="text" name="publishyear" />
						</td>
					</tr>
					<tr>
						<td class="advForm">
							<?php echo __('GMD'); ?>
						</td>
					</tr>
					<tr>
						<td class="advForm">
							<select name="gmd">
							<?php echo $gmd_list; ?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="advForm">
							<?php echo __('Collection Type'); ?>
						</td>
					</tr>
					<tr>
						<td class="advForm">
							<select name="colltype">
							<?php echo $colltype_list; ?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="advForm">
							<?php echo __('Location'); ?>
						</td>
					</tr>
					<tr>
						<td class="advForm">
							<select name="location">
							<?php echo $location_list; ?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="4" class="advForm" style="text-align:center;">
							<button type="submit" name="search" value="<?php echo __('Search'); ?>" class="searchButton"><?php echo __('Search'); ?></button>
						</td>
					</tr>
				</table>
			</div>
		</form>
    </div>
