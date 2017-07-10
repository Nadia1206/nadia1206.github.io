<?php get_header();?>
<!-- Banner -->
<!--
Note: To show a background image, set the "data-bg" attribute below
to the full filename of your image. This is used in each section to set
the background image.
-->
<section id="banner" class="bg-img" data-bg="bg.jpg">
<div class="inner">
<header>
<h1>Че не Гевара Че не Кастро</h1>
</header>
</div>
<a href="#one" class="more">Узнать больше</a>
</section>


<!-- One -->
<section id="one" class="wrapper post bg-img" data-bg="sl6.jpg">

<div class="inner">
<article class="box">
<?php if(have_posts()):?>
<?php while (have_posts()): the_post();?>
<header>
<h2>То что можна узнать о чемоданах</h2>
<p>прямо сейчас</p>
</header>
<div class="content">
<p>Чемодан (от перс. جامه دان‎ джомадан: جامه jāma одежда + دان dān хранитель) — коробка прямоугольной
формы, используемая для хранения и транспортировки вещей. Чемодан оснащён откидной крышкой и ручкой для переноски;
изготавливается преимущественно из натуральной, искусственной кожи, древесины, фибры или синтетических материалов.
</p>
</div>
<?php endwhile; ?>
<?php endif;?>

<footer>
<a href="/road_trip/chemodany" class="button alt">Узнать больше</a>
</footer>
</article>
</div>
<a href="#two" class="more">Узнать больше</a>
</section>

<!-- Three -->
<section id="two" class="wrapper post bg-img" data-bg="su2.jpg">
<div class="inner">
<article class="box">
<header>
<h2>И давно забитые сундуки</h2>
<p>могут быть кстати</p>
</header>
<div class="content">
<p>Сундук (от тюркского сандык) — изделие корпусной мебели с откидной или съёмной верхней крышкой, используется
как ёмкость для хранения предметов обихода, драгоценностей и других ценных вещей. Использовался в самых
разных культурах, начиная с древних времён. В настоящее время сундук (сандык), как предмет обихода, можно
увидеть в казахских аулах, русских и восточноевропейских деревнях, а также в различных музеях.</p>
</div>
<footer>
<a href="/road_trip/sunduky/" class="button alt">Узнать больше</a>
</footer>
</article>
</div>
<a href="#three" class="more">Узнать больше</a>
</section>

<!-- Four -->
<section id="three" class="wrapper post bg-img" data-bg="fu3.jpg">
<div class="inner">
<article class="box">
<header>
<h2>Футляр бывает не только для очков</h2>
<p>Протереть очки прямо сейчас будет полезно</p>
</header>
<div class="content">
<p>Футляр (от нем. Futteral) — аксессуар, чехол или коробочка с крышкой для хранения различных предметов обихода
и ценностей, обычно продолговатой плоской формы. В зависимости от предназначения существуют футляры для
очков, украшений, монет, перьевых ручек, ключей (см. ключница), фотоаппаратов или маникюрных наборов.
Футляры изготавливаются из металла, пластика, кожи, искусственной кожи или текстиля. Внутри футляр обычно
обит мягким материалом — замшей, велюром, шёлком или кожей. Для фиксации хранимого предмета может быть
использован ложемент.</p>
</div>
<footer>
<a href="/road_trip/futlyary/" class="button alt">Знать больше</a>
</footer>
</article>
</div>
<a href="#four" class="more">Узнать больше</a>
</section>
<!-- five--> 
<section id="four" class="wrapper post bg-img" data-bg="k.jpg">
<div class="inner">
<article class="box">
<header>
<h2>Где хранить деньги? В кошельках</h2>
<p>не только в квартире</p>
</header>
<div class="content">
<p>Кошелёк, кошель, бумажник (от лат. cassa - коробка для денег) — небольшой полый или плоский предмет (изначально
мешочек), чаще всего из кожи или ткани, предназначенный для ношения денег. Часто называлось также портмоне,
происходит из фр. porte-monnaie.</p>
</div>
<footer>
<a href="/road_trip/koshelky/" class="button alt">Узнать больше</a>
</footer>
</article>
</div>
<a href="#five" class="more">Узнать больше</a>
</section>
<!--six-->
<section id="five" class="wrapper post bg-img" data-bg="s3.jpg">
<div class="inner">
<article class="box">
<header>
<h2>Сумки и еще раз сумки</h2>
<p>могут быть кстати</p>
</header>
<div class="content">
<p> Сумка — изделие, мягкая ёмкость (матерчатая или кожаная) для переноски предметов в руках или на плече (реже — на
поясе). Сумка может быть полностью мягкой, но может также иметь твёрдое дно.</p>
</div>
<footer>
<a href="road_trip/sumky/" class="button alt">Узнать больше</a>
</footer>
</article>
</div>
<a href="#six" class="more">Узнать больше</a>
</section>
<!--seven-->
<section id="six" class="wrapper post bg-img" data-bg="sl4.jpg">
<div class="inner">
<article class="box">
<header>
<h2>Галерея</h2>
<p>между прочим</p>
</header>
<div class="content">
<p>Посмотреть на мир глазами фотографа</p>
</div>
<footer>
<a href="/road_trip/galereya/" class="button alt">Узнать больше</a>
</footer>
</article>
</div>

</section>
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
		<?php the_content( ); ?>
<!-- Footer -->
<?php get_footer();?>