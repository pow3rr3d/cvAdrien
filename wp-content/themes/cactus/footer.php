<?php
$hide_footer = apply_filters('cactus_hide_footer',0);
if( $hide_footer != '1' ):
		?>
<footer class="site-footer">
  <div class="container text-center">
	  <div class="col">
		  <br>
		  <p>
			  <b>Téléphone:<a href="tel:+33659537137"> 06 59 53 71 37</a> </b>
<br>
			  <b>Email: <a href="mailto:adrien.messager.diaz@gmail.com"> adrien.messager.diaz@gmail.com</a></b>
		  </p>
		  <p>
			  <a href"#">Mentions Légales & Politiques de confidentialité</a>
		  </p>
		  
	  </div>
  </div>
</footer>
<?php endif;?>
</div>
<?php wp_footer(); ?>
</body>
</html>