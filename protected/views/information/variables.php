<h2>Server variables</h2>

<?php foreach($variables AS $name => $variable) { ?>
	<div class="list">
		<table class="list">
			<colgroup>
				<col style="width: 50%" />
				<col />
			</colgroup>
			<thead>
				<tr>
					<th colspan="2"><?php echo $name; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($variable AS $key=>$value) { ?>
					<tr>
						<td><?php echo $key; ?></td>
						<td><?php echo $value; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php } ?>