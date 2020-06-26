<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
const jumbotron = document.querySelector('.jumbotron');
const header = document.querySelector('header');
if(jumbotron != null) {
  jumbotron.style.height = `${window.innerHeight - header.offsetHeight}px`;
}
const wp_headerMenu = document.querySelectorAll('.nav-link');
wp_headerMenu.forEach((el) => el.classList.add('p-2', 'text-dark'));
</script>
</body>
</html>
