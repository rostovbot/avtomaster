<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avtomaster
 */

?>

    <!--==============================footer=================================-->
    <footer>
			<div class="main"> 
				<span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved
				</span>
			</div>
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuint',
        preset: 'simpleFade',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        pagination: false,
        pagNums: false,
        nextBu: '.next',
        prevBu: '.prev'
    });
});
</script>

<?php wp_footer(); ?>

</body>
</html>
