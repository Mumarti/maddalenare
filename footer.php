<footer id="site-footer">
<div class="footer">
<div class="footer-content">
    <?php get_sidebar();?>
    <ul class="socials">
    <li><a href="<?php echo get_theme_mod("id_setting_facebook"); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
    <li><a href="<?php echo get_theme_mod("id_setting_instagram"); ?>" ><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
    <p>© 2021 Maddalena Re - P. IVA 02922660358 - tutti i diritti sono riservati</p>
    <p>Design with love by <span>Martina</span></p>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('.menu-toggle').toggleClass('active')
        $('nav').toggleClass('active')
    })
})
</script>

<script type="text/javascript">
const bg = document.getElementById('copertina');
var windowWidth = window.outerWidth;
//if (windowWidth >= 1200) {
window.addEventListener('scroll', function(){
    //bg.style.backgroundSize = 160 - +window.pageYOffset/12+'%';
    bg.style.opacity = 1 - +window.pageYOffset/600+'';
})
//}else if (windowWidth <= 1200){
    //window.addEventListener('scroll', function(){
    //bg.style.backgroundSize = 160 - +window.pageYOffset/14+'%';
    //bg.style.opacity = 1 - +window.pageYOffset/700+'';
//})  
//}
</script>

<script type="text/javascript">
let box = document.querySelectorAll('.box');
box.forEach(popup => popup.addEventListener('click', () => {
    popup.classList.toggle('active')
}))
</script>

<script>

</script>
</footer>

<?php wp_footer(); ?>

</body>
</html>