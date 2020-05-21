<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package avtomaster
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Страница не найдена', 'avtomaster' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Извините, но данной страницы нет на сайте или Вы неправильно ввели её адрес. Вы можете воспользоваться поиском.', 'avtomaster' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<div class="category_404">
    На сайте есть много интересной и полезной информации. Ниже Вы можете перейти в нужную Вам категорию Нарядных Детских платьев:
    <ul>
     	<li><a href="https://girl-dress.ru/product-category/pyshnye-platya/">Пышные платья</a></li>
     	<li><a href="https://girl-dress.ru/product-category/mama-dochka/">Мама - дочка</a></li>
     	<li><a href="https://girl-dress.ru/product-category/korotkie-platya/">Короткие платья</a></li>
     	<li><a href="https://girl-dress.ru/product-category/a-siluet/">А - силуэт</a></li>
     	<li><a href="https://girl-dress.ru/product-category/platia_so_shleifom/">Платья со шлейфом</a></li>
     	<li><a href="https://girl-dress.ru/product-category/platie_transformer/">Платье трансформер</a></li>
     	<li><a href="https://girl-dress.ru/product-category/platiya_pod_zakaz/">Платья под заказ</a></li>
     	<li><a href="https://girl-dress.ru/product-category/aksessuary_ruchnoi_raboty/">Аксессуары ручной работы</a></li>
    </ul>
    &nbsp;
</div>

<?php
get_footer();
