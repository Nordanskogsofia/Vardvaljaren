<div class="articleContainer" id="articleContainer1">
	<h2>Välj område</h2>
	<form name="locationForm">
		<!--SWEDEN MAP-->
		<div class="half-article-container">
			<img src="Resources/img/provincesSwe.jpg">
		</div>
		<!--ROLL-DOWN LIST FROM DATA BASE-->
		<div class="half-article-container">
			<select name="provincesOptions" form="locationForm">
				<Option value="">Uppsala Län</Option>
				<Option value="">Skåne Län</Option>
			</select>
			<select name="cityOptions" form="locationForm">
				<Option value="">Uppsala</Option>
				<Option value="">Nyköping</Option>
			</select>
			<select name="areaOptions" form="locationForm">
				<Option value="">Gränby</Option>
				<Option value="">Rackarberget</Option>
			</select>
			<!--lägg till "HITTA MIG"-knapp-->
			<input type="submit" class="button" value="Klar">
		</div>
	</form>
</div>