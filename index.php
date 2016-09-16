<?php
$pageTitle = "Jekylls' Restaurant";
include 'include/header.php';
?>
<div id="imgacc">
	<a href="#accanchor" class="smoothtrans">
		<button type="button" class="btn-lg" id="accdown">
			<span class="glyphicon glyphicon-menu-down"></span>
		</button>
	</a>
</div>

<div id="separ"> </div>

<article>
	<div id="accanchor">
	</div>
	<div class="container-fluid"> 
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-lg-3 col-lg-offset-2" id="text1">
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
				</p>
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
				</p>
        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        </p>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-lg-3 col-lg-offset-2" id="text2">
				<div id="carouActu" class="carousel slide" data-ride="carousel">
  					<!-- Indicators -->
  					<ol class="carousel-indicators">
 					   <li data-target="#carouActu" data-slide-to="0" class="active"></li>
 					   <li data-target="#carouActu" data-slide-to="1"></li>
   					</ol>

 					 <!-- Wrapper for slides -->
 					<div class="carousel-inner" role="listbox">
   						<div class="item active">
  						  <img class="img-fluid" src="img/act_gordon.png" alt="Gordon">
                <div class="carousel-caption">
                  <h3>Il arrive !</h3>
                  <p>Gordon Ramsay vient nous livrer sa version de la Ratatouille.</p>
                </div>
    					</div>

    					<div class="item">
    						<img class="img-fluid" src="img/act_london.jpg" alt="London">
                <div class="carousel-caption">
                  <h3>Jekylls' à Londres !</h3>
                  <p>Ouverture de notre première franchise à l'étranger !</p>
                </div>
 						</div>

  				</div>

  					<!-- Left and right controls -->
  					<a class="left carousel-control" href="#carouActu" role="button" data-slide="prev">
    					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="right carousel-control" href="#carouActu" role="button" data-slide="next">
   						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
				</div>
			</div>
		</div>
	</div>
</article>

<div id=separ> </div>
<?php
include 'include/footer.php';
?>