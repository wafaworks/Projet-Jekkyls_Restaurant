<?php
$pageTitle = "Restaurants";
include 'include/header.php';
?>

<body>
<div id=separ> </div>

<div class="container">

  <div class="row" id="imgresto"><img src="img/resto1.jpg">
  </div>

  <div id=separ> </div>

  <div class="panel-group" id="accordion">
<!-- Bordeaux -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Bordeaux</a>
          </h3>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5">
                <h5 class="restodesc">Le restaurant
                </h5>
                <p>Au pays du canelé la cuisine est reine, tant qu'elle est accompagné d'une bonne bouteille ! Encore jeune pour un chef, Florent a su gravir les échelons grâce à une cuisine décomplexée reposant sur son intuition pour les mélanges de saveurs. Si votre palais a envie d'être surpris, vous voilà au bon endroit.
                </p>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-4 col-sm-offset-1">
                <h5 class="motchef">Le mot du chef
                </h5>
                <p>Fier de ma région depuis tout petit, c'est une joie de tout les jours de faire découvrir aux touristes et redécouvrir aux locaux les délices du bordelais.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5" class="horaire">
                <h5>Horaires</h5>
                  <table>
                    <tbody>
                      <tr>
                        <td>Lundi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Mardi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Mercredi</td>
                        <td>Fermé</td>
                      </tr>
                      <tr>
                        <td>Jeudi</td>
                        <td>Fermé</td>
                      </tr>
                      <tr>
                        <td>Vendredi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Samedi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Dimanche</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-4" class="contacces">
                <h5>Téléphone :
                </h5>
                <p>02.33.44.55.66
                </p>
                <h5>Adresse :
                </h5>
                <p>
                Place du parlement<br>
                33000 Bordeaux<br>
                France<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- Chartres -->
   
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Chartres</a>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5">
                <h5 class="restodesc">Le restaurant</h5>
                  <p>Dans la capitale de la lumière et du parfum, venez retrouver notre chef Gianni et son "italian touch". Cuisinier depuis plus de 20 ans, il a su intégrer les plats typiques de <?php echo $restoName ?> et y rajouter le soleil de sa cuisine italienne, une explosion de saveur et de soleil pour les papilles.
                  </p>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-4 col-sm-offset-1">
                <h5 class="motchef">Le mot du chef</h5>
                  <p>La cuisine française m'a beaucoup donné, c'est un plaisir pour moi de rendre au quotidien et de mélanger patrie d'origine et patrie d'adoption dans ma cuisine.
                  </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5" class="horaire">
                <h5>Horaires</h5>
                  <table>
                    <tbody>
                      <tr>
                        <td>Lundi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Mardi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Mercredi</td>
                        <td>Fermé</td>
                      </tr>
                      <tr>
                        <td>Jeudi</td>
                        <td>Fermé</td>
                      </tr>
                      <tr>
                        <td>Vendredi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Samedi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Dimanche</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-4" class="contacces">
                <h5>Téléphone :</h5>
                  <p>
                  01.23.45.67.89
                  </p>
                <h5>Adresse :</h5>
                  <p>
                  Rue du champs des Anes<br>
                  28000 Chartres<br>
                  France<br>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Fontainebleau -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Fontainebleau</a>
        </h4>
      </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5">
                <h5 class="restodesc">Le restaurant</h5>
                  <p>La ville au chateau, ancien domaine de chasse des rois de France, vous permettra une escapade champêtre pour profiter de la cuisine non pas d'un mais une chef. Amatrice d'une cuisine bariolée, Cecile a su marier créativité et tradition pour vous faire redécouvrir de subtiles saveurs.
                  </p>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-4 col-sm-offset-1">
                <h5 class="motchef">Le mot du chef</h5>
                  <p>Beaucoup doutent en voyant une femme en cuisine, très peu repartent sans être convaincu, et c'est pour moi une satisfaction de tous les jours.
                  </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5" class="horaire">
                <h5>Horaires</h5>
                  <table>
                    <tbody>
                      <tr>
                        <td>Lundi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Mardi</td>
                        <td>Fermé</td>
                      </tr>
                      <tr>
                        <td>Mercredi</td>
                        <td>Fermé</td>
                      </tr>
                      <tr>
                        <td>Jeudi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Vendredi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Samedi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Dimanche</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-4" class="contacces">
                <h5>Téléphone :</h5>
                  <p>
                  01.23.45.67.89
                  </p>
                <h5>Adresse :</h5>
                  <p>
                  Pavillon Voltaire<br>
                  Grande avenue<br>
                  77300 Fontainebleau<br>
                  France<br>
                  </p>
              </div>
            </div>
          </div>
        </div>
    </div>

<!-- La loupe -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">La loupe</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5">
              <h5 class="restodesc">Le restaurant</h5>
                <p>Antre de Damien et Laurent, c'est à La Loupe que tout a commencé et que l'aventure <?php echo $restoName ?> continue au quotidien. Ici pas de fioriture, on est à la campagne, mais de la bonne cuisine, un savoir faire d'exception et des produits frais !
                </p>
            </div>
            <div class="col-xs-offset-1 col-xs-10 col-sm-4 col-sm-offset-1">
              <h5 class="motchef">Le mot du chef</h5>
                <p>Pour moi la cuisine a toujours été quelques choses de fascinant, un besoin primaire élevé au rang d'art. Chaque jour est pour moi une occasion de mêler plaisir et poursuite de l'excellence.
                </p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5" class="horaire">
              <h5>Horaires</h5>
                <table>
                  <tbody>
                    <tr>
                      <td>Lundi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Mardi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Mercredi</td>
                      <td>Fermé</td>
                    <tr>
                      <td>Jeudi</td>
                      <td>Fermé</td>
                    </tr>
                     <tr>
                      <td>Vendredi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Samedi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Dimanche</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-4" class="contacces">
              <h5>Téléphone :</h5>
                <p>
                05.14.26.36.58
                </p>
              <h5>Adresse :</h5>
                <p>
                36, Boulevard de la résistance<br>
                28240 La Loupe<br>
                France<br>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Lyon -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Lyon</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5">
              <h5 class="restodesc">Le restaurant</h5>
                <p>La ville des bouchons ne manque jamais d'être mentionné dès qu'on parle de bonne cuisine, il semblait normal pour nous dy être présent. Nous avons eu la chance de trouver en Kevin un chef à la hauteur de nos exigences et bien plus encore.
                </p>
            </div>
            <div class="col-xs-offset-1 col-xs-10 col-sm-4 col-sm-offset-1">
              <h5 class="motchef">Le mot du chef</h5>
               <p>Issu d'une famille de cuisiniers lyonnais, c'est avec plaisir que j'ai repris le flambeau familiale et chaque jour est pour moi l'occasion de pratiquer cette passion que je connais depuis tout petit.
               </p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5" class="horaire">
              <h5>Horaires</h5>
                <table>
                  <tbody>
                    <tr>
                      <td>Lundi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Mardi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Mercredi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    <tr>
                    </tr>
                      <td>Jeudi</td>
                      <td>Fermé</td>
                    </tr>
                    <tr>
                      <td>Vendredi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Samedi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Dimanche</td>
                      <td>Fermé</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-4" class="contacces">
              <h5>Téléphone :</h5>
              <p>
              04.25.63.69.48
              </p>
              <h5>Adresse :</h5>
              <p>
              18, Rue delandine<br>
              69002 Lyon<br>
              France<br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Orléans -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Orléans</a>
        </h4>
      </div>
        <div id="collapse6" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5">
                <h5 class="restodesc">Le restaurant</h5>
                  <p>Le long de la Loire, hstoire et cuisine se mêlent depuis des sicèles au fil de l'eau. A proximité de la cathédrale, Nicolas vous accueille dans un restaurant intimiste et convivial mais dont la décoration vous donnera pour quelques heures l'impression d'être revenu au temps de la royauté.
                  </p>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-4 col-sm-offset-1">
                <h5 class="motchef">Le mot du chef</h5>
                  <p>Souvent sous estimée, la cuisine du val de Loire recèle de nombreuses pépites et rien ne me fait plus plaisir que de voir mes clients repartir conquis par celle-ci.
                  </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5" class="horaire">
                <h5>Horaires</h5>
                  <table>
                    <tbody>
                      <tr>
                        <td>Lundi</td>
                        <td>Fermé</td>
                      </tr>
                      <tr>
                        <td>Mardi</td>
                        <td>Fermé</td>
                      </tr>
                      <tr>
                        <td>Mercredi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      <tr>
                        <td>Jeudi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Vendredi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Samedi</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                      <tr>
                        <td>Dimanche</td>
                        <td>12:00–14:00, 19:30–22:00</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-4" class="contacces">
                <h5>Téléphone :</h5>
                  <p>
                  01.23.45.67.89
                  </p>
                <h5>Adresse :</h5>
                  <p>
                  6, Boulevard de la cathédrale<br>
                  45000 Orléans<br>
                  France<br>
                  </p>
              </div>
            </div>
          </div>
        </div>
    </div>

<!-- Toulouse -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Toulouse</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5">
              <h5 class="restodesc">Le restaurant</h5>
              <p>La ville rose, bien que moins reputée que d'autres en terme de plaisirs culinaires, a su produire de nombreux grands cuisiniers, et parmi eux David. Ce grand gaillard a beaucoup bourlingué et a ramené des ces voyages des saveurs et mariages qui régalent les papilles.
              </p>
            </div>
            <div class="col-xs-offset-1 col-xs-10 col-sm-4 col-sm-offset-1">
              <h5 class="motchef">Le mot du chef</h5>
               <p>J'ai été beaucoup marqué par mes voyages en orient et tentes d'inclure les délices que j'ai connu dans ma cuisine de tous les jours afin de faire découvrir ça chez nous.
               </p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5" class="horaire">
              <h5>Horaires</h5>
                <table>
                  <tbody>
                    <tr>
                      <td>Lundi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Mardi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Mercredi</td>
                      <td>Fermé</td>
                    <tr>
                      <td>Jeudi</td>
                      <td>Fermé</td>
                    </tr>
                    <tr>
                      <td>Vendredi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Samedi</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    <tr>
                      <td>Dimanche</td>
                      <td>12:00–14:00, 19:30–22:00</td>
                    </tr>
                    </tbody>
                  </table>
              </div>
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-4" class="contacces">
                <h5>Téléphone :</h5>
                  <p>
                  01.23.45.67.89
                  </p>
                <h5>Adresse :</h5>
                  <p>
                  15 Rue du libraire<br>
                  31000 Toulouse<br>
                  France<br>
                  </p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div id=separ> </div>
  
  <div class="row" id="imgresto"><img src="img/resto2.jpg">
  </div>

</div>

<div id=separ> </div>

</body>


<?php
include 'include/footer.php';
?>