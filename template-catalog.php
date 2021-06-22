<?php
/*
Template Name: Каталог
*/

get_header();?>
	  <main>
	<div class="main">
		<div class="main-cat">
		<h1>Всё что тебе нужно
			это любовь и собака</h1>
		<p>Выбери лучшего друга прямо
			сейчас в нашем каталоге</p>
		</div>
		<img src="/wp-content/themes/MagyUp/img/catal dog.png" class="catd"  height="600px" width="600px">  
	</div>
	<div class="cd-main-content">
		<section class="cd-gallery">
		<ul>
		    <?php
		    $posts = get_posts([
		    'post_type' => 'catalog'
		    ]);
		    
		    foreach( $posts as $post) :
		      ?>
		      <?php setup_postdata($post);?>
		      	<li class="mix color-1 check1 "><a href="<?=the_permalink();?>"><img src="<?= the_post_thumbnail_url(); ?>" alt="Image 1"></a></li>
		      <?php wp_reset_postdata();?>
		      <?php endforeach; ?>
			</ul>
			<div class="cd-fail-message">Результаты не найдены</div>
		</section>

		<div class="cd-filter">
			<form>
				

				<div class="cd-filter-block">
					<h4>Порода</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">Пудель</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">ПТИ-брабансон</label>
						</li>
					</ul> 
				</div> 

				<div class="cd-filter-block">
					<h4>Возраст</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check4" type="checkbox" id="checkbox4">
			    			<label class="checkbox-label" for="checkbox4">1-5 месяцев</label>
						</li>

						<li>
							<input class="filter" data-filter=".check5" type="checkbox" id="checkbox5">
							<label class="checkbox-label" for="checkbox5">5-12 месяцев</label>
						</li>

						<li>
							<input class="filter" data-filter=".check6" type="checkbox" id="checkbox6">
							<label class="checkbox-label" for="checkbox6">старше 1 года</label>
						</li>
					</ul>
				</div> 

				<div class="cd-filter-block">
					<h4>Пол</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check7" type="checkbox" id="checkbox7">
			    			<label class="checkbox-label" for="checkbox7">Мужской</label>
						</li>

						<li>
							<input class="filter" data-filter=".check8" type="checkbox" id="checkbox8">
							<label class="checkbox-label" for="checkbox8">Женский</label>
						</li>

					</ul>
				</div> 
			</form>

			<a href="#0" class="cd-close">	&#215;</a>
		</div> 

		<a href="#0" class="cd-filter-trigger">Фильтры</a>
		</div>
	</main> 
<?=get_footer();?>