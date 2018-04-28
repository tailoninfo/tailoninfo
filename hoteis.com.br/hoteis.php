<?php include("template-site/headers.php"); ?>

<?php include("template-site/top.php"); ?>

<?php
$json  = json_decode(file_get_contents('https://rif2ibxnjk.execute-api.sa-east-1.amazonaws.com/prod/hotels'));
?>

<div id="top-page">
	<div class="fluid">
		<a href="home.php">
			Enjoy<br>
			<span>Hotel</span>
		</a>
	</div>
</div>

<div id="page-hoteis">
	
	<div class="fluid">
		
		<section>
			
			<aside>
				
				<?php include("template-site/search-date.php"); ?>
				
				<h6>Stars</h6>
					
				<input type="hidden" id="_rade">
				
				<div id="rate">
					
					<a data-value="1">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
					</a>
					
					<a data-value="2">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
					</a>
					
					<a data-value="3">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
					</a>
					
					<a data-value="4">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
					</a>
					
					<a data-value="5">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
						</i>
					</a>
					
				</div>
				
				<?php
				
				$minPrice = 0;
				$maxPrice = 0;
				
				foreach($json->data as $hotel){
					
					if($maxPrice < $hotel->price){
						$maxPrice = $hotel ->price;
						$minPrice = $maxPrice;
					}
					
				}
				
				foreach($json->data as $hotel){
					
					if($minPrice > $hotel->price){
						$minPrice = $hotel->price;
					}
					
				}
				
				?>
				
				<div id="filtro-preco">
					
					<h6>Price Range per night</h6>					

					<div id="area-slider-preco">
						<div id="slider-preco">
							<div id="min" class="ui-slider-handle ui-slider-range-min"></div>
							<div id="max" class="ui-slider-handle ui-slider-range-max"></div>
						</div>
					</div>

					<input type="submit" value="FILTER" onClick="lol();">

				</div>
				
				<script>
						
					var minPriceFilter = <?php echo $minPrice; ?>;
					var maxPriceFilter = <?php echo $maxPrice; ?>;
					maxPriceFilter++;
					var starsFilter = [];
					var diffDays = 1;
					
					function update_date(){
						dtI = dtInicial.split("/");
						dtF = dtFinal.split("/");

						var date1 = new Date(dtI[1] + "/" + dtI[0] + "/" + dtI[2]);
						var date2 = new Date(dtF[1] + "/" + dtF[0] + "/" + dtF[2]);
						var timeDiff = Math.abs(date2.getTime() - date1.getTime());
						diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
					}
					
					$(document).ready(function(){
						
						$("#search").click(function(){
							
							update_date();
							
						})
						
						var $hotel = $('.hotel').find('a');
						
						 $hotel.click(function(){
							
							$('.graphic').fadeOut(200);
							
							$(this).parent().parent().find('.graphic').fadeIn(200);
							
						});
						
						 $('.graphic').find('button').click(function(){
							
							$('.graphic').fadeOut(200);
							
						});

						var $rate = $("#rate").find('a');

						$rate.click(function(){

							$(this).toggleClass('ativo');
							
							if( starsFilter.indexOf($(this).data('value')) !== -1){
								
								starsFilter.splice(starsFilter.indexOf($(this).data('value')), 1);
								
							} else {
								starsFilter.push($(this).data('value'));
							}
							
							
							search(starsFilter,minPriceFilter,maxPriceFilter);

						});

					})
					
					$( function() {
							
						var handle = $( "#min" );
						var handle2 = $( "#max" );

						$( "#slider-preco" ).slider({
							range: true,
							min: <?php echo $minPrice; ?>,
							max: <?php echo $maxPrice; ?>,
							values: [ <?php echo $minPrice; ?>, <?php echo $maxPrice; ?> ],
							create: function() {

							  },
							slide: function( event, ui ) {

								handle.text( "$" + ui.values[ 0 ] );
								handle2.text( "$" + ui.values[ 1 ] );

								$('#preco-inicial').val( "$ " + ui.values[ 0 ]);
								$('#preco-final').val( "$ " + ui.values[ 1 ]);

								minPriceFilter = ui.values[0];
								maxPriceFilter = ui.values[1];
							}
						});

						$('#preco-inicial').val( "R$ " + $( "#slider-preco" ).slider( "values", 0 ));
						$('#preco-final').val( "R$ " + $( "#slider-preco" ).slider( "values", 1 ));

						handle.text( "$" + $( "#slider-preco" ).slider( "values", 0 ) );
						handle2.text( "$" + $( "#slider-preco" ).slider( "values", 1 ) );


					});

					function lol(){
						update_date();
						search(starsFilter,minPriceFilter,maxPriceFilter);
					}
					
					function search(stars,minPrice,maxPrice){
						
						if(stars.length === 0){
							stars = [1,2,3,4,5];
						}
						
						$.ajax({
	
							url: 'json.json',
							type: 'get',
							success: function(content){
								
								var _html = "";
								var _star = "";
								var _grafico = "";
								var _maiorValorMes = 0;
								var _mesList = "";
								var cont = 0;

								if( content && !content.error ){
									
									content.data.forEach( function(hotel){
										
										for(x = 0; x <= stars.length; x++){
										
											if(stars[x] === hotel.rate || stars === 0){
											
												if((minPrice <= hotel.price) && (maxPrice >= hotel.price)){

													for(var i = 0; i < hotel.rate; i++){
														_star += '<i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg></i>';
													}

													for(var i = 0; i <= 6; i++){

														if(_maiorValorMes < hotel.price_history[i].value){

															_maiorValorMes = hotel.price_history[i].value;
														}

													}

													for(var y = 0; y <= 6; y++){

														_mesList += '<li><ins><small style="height:' + (hotel.price_history[y].value * 100) / _maiorValorMes + '%" class="amc"><i>' + hotel.price_history[y].value + '</i><span>' + hotel.price_history[y].month + ' </span></small></ins></li>'
													}

													_html += '<div class="hotel amc"><figure><img src="' + hotel.image + '" alt=""></figure><div class="infos"><h2 class="amc">' + hotel.name + '</h2><div class="star">' + _star + '</div><p>' + hotel.description + '</p><div class="valor"><span>Total ' + diffDays + ' nights</span><strong>$' + hotel.price * diffDays +'</strong><span>Per night</span><strong>$ ' + hotel.price + '</strong></div><a>Price History</a></div><div class="graphic"><ul>' + _mesList + '</ul><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.02 16"><path d="M26,7H3.41L8.71,1.71A1,1,0,0,0,7.29.29l-7,7a1,1,0,0,0,0,1.41l7,7a1,1,0,0,0,1.41-1.41L3.41,9H26a1,1,0,0,0,0-2Z"/></svg></button></div></div>';

													_star = "";
													_mesList = "";

													cont++;

												}

											}
										
										}
										
									});
									
									if(cont > 0){
										$('#list').html('<h6>Found <strong>' + cont + ' hotels</strong></h6>' + _html);
									}else{
										$('#list').html('<h6>No hotels found</h6>');
									}
								}
							}
						})
						
					}
					
				</script>
				
				<div id="bt-cancel" class="ctr">
					<a id="cancel">Cancel</a>
				</div>
				
			</aside>
			
			
			<article id="list">
				
				<?php
				
				$recebe_data_inicial = $_POST['checkin2'];
				$recebe_data_final = $_POST['checkout2'];
				
				echo "<script>$('#checkin').val('$recebe_data_inicial');$('#checkout').val('$recebe_data_final');</script>";

				$data_inicial = explode("/",$recebe_data_inicial);
				$data_final = explode("/",$recebe_data_final);

				$dt_imprimir_inicial = $data_inicial[2]."-".$data_inicial[1]."-".$data_inicial[0];
				$dt_imprimir_final = $data_final[2]."-".$data_final[1]."-".$data_final[0];

				// Calcula a diferença em segundos entre as datas
				$diferenca = strtotime($dt_imprimir_final) - strtotime($dt_imprimir_inicial);

				//Calcula a diferença em dias
				$dias = floor($diferenca / (60 * 60 * 24));

				?>
				
				<?php
					foreach($json->data as $hotel){$cont++;}
				?>
				
				<h6>Found <strong><?php echo $cont;?> hotels</strong></h6>
				
				<?php
					foreach($json->data as $hotel){
				?>
				
				<div class="hotel amc">
					
					<figure>
						<img src="<?php echo $hotel->image; ?>" alt="">
					</figure>
					
					<div class="infos">
						
						<h2 class="amc"><?php echo $hotel->name; ?></h2>
						
						<div class="star">
							<?php for ($i = 1; $i <= $hotel->rate; $i++){?>
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.63 25.33"><polygon points="13.31 21 5.09 25.33 6.66 16.16 0 9.67 9.2 8.34 13.31 0 17.43 8.34 26.63 9.67 19.97 16.16 21.54 25.33 13.31 21"/></svg>
							</i>
							<?php } ?>
						</div>

						<p><?php echo $hotel->description; ?></p>
						
						<div class="valor">
							
							<span>Total 8 nights</span>
							<strong>$<?php echo $hotel->price * $dias; ?></strong>
							<span>Per night</span>
							<strong>$<?php echo $hotel->price; ?></strong>
							
						</div>
						
						<a>Price History</a>

					</div>
					
					<div class="graphic">
						<?php 
						
							$value = 0;
						
							for($x = 0; $x <= 6; $x++){
								
								if($hotel->price_history[$x]->value > $value){
									$value = $hotel->price_history[$x]->value;
								}
								
							}
						
						?>
						
						<ul>
							<?php for($y = 0; $y <= 6; $y++){ ?>
							<li>
								<ins><small style="height: <?php echo ($hotel->price_history[$y]->value * 100) / $value; ?>%" class="amc"><i><?php echo $hotel->price_history[$y]->value; ?></i><span><?php echo $hotel->price_history[$y]->month; ?></span></small></ins>
							</li>
							<?php } ?>
						</ul>
						
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.02 16"><path d="M26,7H3.41L8.71,1.71A1,1,0,0,0,7.29.29l-7,7a1,1,0,0,0,0,1.41l7,7a1,1,0,0,0,1.41-1.41L3.41,9H26a1,1,0,0,0,0-2Z"/></svg>
						</button>
						
					</div>
				
				</div>

				<?php	} ?>
				
			</article>
			
<footer id="rodape" class="ctr">

	<div id="redes-footer">
		
		<a href="#" target="_blank">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve">
				<path d="M40,0C17.9,0,0,17.9,0,40s17.9,40,40,40s40-17.9,40-40S62.1,0,40,0z M50.1,27.5h-5.2c-1.4,0-2.4,1.2-2.4,2.7
				v2.3h7.4L48.7,40h-6.2v20.1h-7.6V40h-5v-7.5h5v-3.8l0,0c0.1-4.4,1.6-8.5,9-8.8l0,0H50L50.1,27.5L50.1,27.5z"/>
			</svg>
		</a>
		
		<a href="#" target="_blank">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve">
				<circle cx="40" cy="40" r="6"/>
				<path  d="M50,24.3H30c-3.2,0-5.8,2.6-5.8,5.8V50c0,3.2,2.6,5.8,5.8,5.8h20c3.2,0,5.8-2.6,5.8-5.8V30
					C55.7,26.8,53.2,24.3,50,24.3z M40,50.4c-5.7,0-10.4-4.7-10.4-10.4S34.3,29.6,40,29.6S50.4,34.3,50.4,40S45.7,50.4,40,50.4z
					 M50.7,31.8c-1.4,0-2.5-1.1-2.5-2.5s1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5S52.1,31.8,50.7,31.8z"/>
				<path d="M40,0C17.9,0,0,17.9,0,40s17.9,40,40,40s40-17.9,40-40S62.1,0,40,0z M60.3,50.1c0,5.6-4.6,10.2-10.2,10.2H29.9
					c-5.6,0-10.2-4.6-10.2-10.2V29.9c0-5.6,4.6-10.2,10.2-10.2H50c5.6,0,10.2,4.6,10.2,10.2L60.3,50.1L60.3,50.1z"/>
			</svg>
		</a>
		
		<a href="#" target="_blank">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve">
				<path d="M40,0C17.9,0,0,17.9,0,40s17.9,40,40,40s40-17.9,40-40S62.1,0,40,0z M60.7,32c0,0.4,0,0.9,0,1.3
					c0,13.4-10.2,28.9-28.9,28.9c-5.7,0-11.1-1.7-15.6-4.6c0.8,0.1,1.6,0.1,2.4,0.1c4.8,0,9.1-1.6,12.6-4.3c-4.4-0.1-8.2-3-9.5-7.1
					c0.6,0.1,1.3,0.2,1.9,0.2c0.9,0,1.8-0.1,2.7-0.4c-4.6-0.9-8.1-5-8.1-10V36c1.4,0.8,2.9,1.2,4.6,1.3c-2.7-1.8-4.5-4.9-4.5-8.5
					c0-1.9,0.5-3.6,1.4-5.1c5,6.1,12.5,10.2,20.9,10.6c-0.2-0.7-0.3-1.5-0.3-2.3c0-5.6,4.5-10.2,10.2-10.2c2.9,0,5.6,1.2,7.4,3.2
					c2.3-0.5,4.5-1.3,6.4-2.5c-0.8,2.4-2.4,4.4-4.5,5.6c2.1-0.2,4-0.8,5.8-1.6C64.4,28.7,62.7,30.5,60.7,32z"/>
				</svg>
		</a>
		
	</div>
	
</footer>

<div id="bt-show-filter">Filters</div>
<script>
	
	$(document).ready(function(){
		
		$('#bt-show-filter').click(function(){
			$('#page-hoteis').find('section').find('aside').fadeIn(200);
		})
		
		$('#bt-cancel').find('a').click(function(){
			$('#page-hoteis').find('section').find('aside').fadeOut(200);
		})
		
	})
	
</script>
	
</div>
	
<?php include("template-site/bottom.php"); ?>