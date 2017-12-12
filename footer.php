<footer>
		Auteur Camille Lapprand
</footer>
    <script>
        // on attend que le document soit complètement construit
        $(document).ready(function() {
        	$('#charger').on('click', function() {
        		$.ajax({
        			url : 'faq.php',
        			type : 'GET',
        			dataType : 'html',
        			 success : function(code_html, statut){ // success est toujours en place, bien sûr !
						$('#faq').replaceWith(code_html);
					},
       				error : function(resultat, statut, erreur){
       				}
        		})
        		//$("#charger").load("faq.php #faq");
        	})
            // votre script
				var action;
				var answer;
				var attribute;
				$('#hideAside').on('click', function() {
					$('#navigation').slideToggle(500);
				});
				$('#fadeImg').on('click', function() {
				    $('img').fadeToggle().delay('10000');
				});
				$('#fadeImg').on('click', function() {
				    $('img').fadeToggle().delay('10000');
				});

				$('dt')
				.on('mouseenter', function() {
						answer = $(this).find('+dd');
						answer.show();

				})
				.on('mouseleave', function() {	
					if(!$(this).hasClass('persistent')){
						answer = $(this).find('+dd');
						answer.hide();
					}

				})
				.on('click', function() {
					$(this).toggleClass('persistent');
					//$('p').append(jQuery.hasData($(this)) + " " );
					var nbr = $(this).data('nbr');
					if(!nbr){
						nbr = 0;
					}
					nbr++;
					$(this).data('nbr', nbr);
					console.log(nbr);
					$('#clic'+$(this).data('quest')).html(nbr);

				});
	        });
    </script>
</body>
</html>
