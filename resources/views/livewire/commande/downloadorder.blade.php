<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture n° {n° Facture}</title>

    <style>
        :root {
    --couleur-1: #edf9fa; /* Couleur 1 */
    --couleur-2: #80a7c3; /* Couleur 2 */
    --couleur-3: #172e86; /* Couleur 3 */
    --couleur-4: #18a3e1; /* Couleur 4 */
    --couleur-5: #4c6277; /* Couleur 5 */
}
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

#container {
      width: 97%;
}
.deco{
    background-color: rgb(251, 171, 37);
    width: 5%;
    height: 25vh; /* Hauteur égale à la hauteur de la vue du navigateur */
margin-bottom: 40rem;
}

body {
    font-family: Arial, sans-serif;
    border: 1px solid;
    display: flex;
    align-items: center;
    justify-content: right;
}


header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px;
}

.left {
    display: flex;
    align-items: center;
}



.left img {
    max-width: 200px;
}

.container_info_header {
    font-size: 14px;
}

.left,.right {
    text-align: left;
    color: black;
    font-size: small;
}
.devis_titre {
    text-align: center;
    background-color: rgb(65, 178, 243);
    padding: 0.5rem 1rem;
    border-radius: 50px 0 0 50px; /* Cercle uniquement à gauche */
}


.devis_titre h2 {
    font-weight: bolder;
    font-size: 2rem;
    margin: 0;
    padding-bottom: 5px;
  }

.infos {
    margin: 5px 0;
}

/* Section Client */
.info_client {
    display: flex;
    font-weight: bold;
    margin-bottom: 0.5rem;
    margin-left: 0.5rem;
    font-size: 0.8rem;
}
.section-infos .client , .section-infos .mission{
    width: 50%;
}

.section-infos{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
/* Section Client */
.table-container {
    width: 100%;
}

.table-row {
    display: flex;
    background-color: #fff;
    border-radius: 50px;
    margin-bottom: 1px;
}

.table-cell {
    flex: 1;
    padding: 8px;
}

.even {
    background-color: #f0f0f0; /* Gris pour les lignes paires */
}

.odd {
    background-color: #fff; /* Blanc pour les lignes impaires */
}
.table-header {
    font-size: large;
    font-weight: bold;
    padding: 0.1rem;
    text-transform: uppercase;
    background-color: rgb(65, 178, 243);
    color: #fff;
    border-radius: 50px 50px 50px 50px;
}

.table-total {
    margin-top: 0.5rem;
    border-radius: 50px;
    font-size: larger;
    font-weight: 600;

 }
/*   */
.paiement {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 0..5rem;
}

.moyen-de-paiment {
    width: 60%;
    display: flex;
    flex-direction: column;

    align-self: start;
}
label{
    font-size: medium;
}

.condition {
    width: 60%;
    display: flex;
    flex-direction: column;
    align-self: start;
    font-size: medium;
  }

  .consigne
  {

    width: 100%;
    font-size: 0.7rem;
    font-style: italic;
    font-weight: 100;
    margin-top: 0.5rem;
  }


  /* Style pour la section des cachets */
.cachet {
    display: flex; /* Affiche les boîtes côte à côte */
    justify-content: space-between; /* Espace égal entre les boîtes */
    margin-top: 0.5rem;
}

.cachet .entreprise,
.cachet .client {
    font-size: medium;
    display: flex;
    text-align: center;
    justify-content: center;
    margin: 0.1rem;
    width: 50%;
    border: 1px solid rgba(251, 171, 37,70);
    border-radius: 25px;
    background-color: rgba(23, 46, 134, 0.2) ;
    height: 7rem;
}
#cgg, #tva{
    text-align: left;
    font-size: 0.6rem;

}
footer{
    margin-top: 1rem;
    width: 100%;
    height: 3rem;
    background-color: rgb(251, 171, 37);
}



/* Réorganiser la mise en page pour les petits écrans */
@media screen and (max-width: 768px) {
    /* Réduire la largeur du conteneur principal */
    #container {
        padding-right: 0.3rem;
        width: 100%;
    }

    /* Réorganiser la disposition de l'en-tête */
    header {
        flex-direction: row;
        text-align: left;
    }

    .left, .right {
        text-align: left;
    }

    /* Réduire la taille de la police dans l'en-tête */
    .container_info_header {
        font-size: smaller;
    }

    .devis_titre h2 {
        font-size: 1rem;
    }

    /* Ajuster la largeur des sections client et mission */
    .section-infos .client, .section-infos .mission {
        width: 100%;
    }

    /* Réorganiser la table pour s'adapter à un petit écran */
    .table-cell {
        padding: 5px;
    }

    /* Réduire la taille de la police dans la table */
    .table-header, .table-cell, .infos {
        font-size: smaller;
    }

    /* Réduire la taille du texte dans les cachets */
    .cachet .entreprise, .cachet .client {
        font-size: x-small;
        height: 5rem;
    }

    /* Ajuster la largeur des sections de paiement et de cachets */
    .paiement, .cachet {
        flex-direction: row;
        align-items: center;
    }

    /* Réduire la taille de la police dans la section de paiement */
    .moyen-de-paiment label {
        font-size: smaller;
    }

    .condition {
        width: 80%;
    }
}

    </style>
</head>

<body>
    <div class="deco"></div>
    <div id="container">
        <header>
            <div class="left">
                <div class="container_info_header">
                    {{-- <img src="assets/logo_proximity.jpeg" alt="Votre logo"> --}}

                    <div class="infos">Compte Contribuable N° 2242525A</div>
                    <div class="infos">RCCM : CI-ABJ-03-2022-B13-05599</div>
                    <div class="infos">SARLU au capital de 1.000.000 F CFA</div>
                    <div class="infos">Lieu : Riviera Bonoumin - Rond point ADO</div>
                    <div class="infos">Contact : +225 05 00 50 79 52</div>
                    <div class="infos">E-mail : contact@proximiti.ci</div>
                    <div class="infos">Site : www.proximiti.ci</div>
                </div>
            </div>

            <div class="right">
                <div class="devis_titre">
                    <h2>DEVIS</h2>
                </div>
                <div class="infos">Devis Numéro </div>
                <div class="infos">Date : 19/09/2023</div>
                <div class="infos">Expiration le : 01/01/1970</div>
                <div class="infos">Code Client : PROXI-30151</div>
            </div>
        </header>

        <section class="section-infos">
          <div class="client">
            <div class="info_client" id="nom_client">
                Identité Client: Loic Sydney
            </div>
            <div class="info_client">
                Contact: +225 00000000
            </div>
            <div class="info_client">
                Adresse : Abatta
            </div>

          </div>
          <div class="mission">

            <div class="info_client">
                Descriptif de la Mission:

            </div>
          </div>
        </section>




        <main>
            <div class="table-container">
                <div class="table-row table-header">
                    <div class="table-cell">Designation</div>
                    <div class="table-cell">Prix Unitaire</div>
                    <div class="table-cell">Quantité</div>
                    <div class="table-cell">Total</div>
                </div>
                <div class="table-row even">
                    <div class="table-cell">Produit 1</div>
                    <div class="table-cell">CFA 10.00</div>
                    <div class="table-cell">2</div>
                    <div class="table-cell">CFA 20.00</div>
                </div>
                <div class="table-row odd">
                    <div class="table-cell">Produit 2</div>
                    <div class="table-cell">3</div>
                    <div class="table-cell">3</div>
                    <div class="table-cell">45.00 </div>
                </div>
                <div class="table-row even">
                    <div class="table-cell">Produit 2</div>
                    <div class="table-cell">3</div>
                    <div class="table-cell">3</div>
                    <div class="table-cell">CFA 45.00</div>
                </div>
                <div class="table-row table-total">
                    <div class="table-cell"></div>
                    <div class="table-cell"></div>
                    <div class="table-cell">Total à payer :</div>
                    <div class="table-cell">CFA65.00</div>
                </div>
            </div>

            <section class="paiement">
                <div class="moyen-de-paiment">
                    <h4>Moyens de Paiement</h3>
                    <label>
                        <input type="checkbox" name="paiement" value="carte-credit">
                        Espèces
                    </label>
                    <label>
                        <input type="checkbox" name="paiement" value="virement-bancaire">
                        Mobile Money
                    </label>
                    <label>
                        <input type="checkbox" name="paiement" value="paiement-especes">
                        Carte Bancaire
                    </label>
                </div>
                <div class="condition">
                    <h4>Conditions de règlement</h3>
                    <p>
                       Accompte de 30% à la commande , soldé à la livraison
                    </p>
                </div>
            </section>
            <p class="consigne">Si le devis vous convient, merci de nous le ramener signé et marqué de la mention 'Bon pour accord et commande'</p>

            <section class="cachet">
                <div class="entreprise">
                    <h5>Cachet de l'entreprise</h5>
                       </div>
                <div class="client">
                    <h5>Cadre reservé au client
                        <br>
                        Fais à Abidjan
                    </h5>
                           </div>
            </section>

            <p class="consigne" id="cgg">**Voir CGV au verso, le client reconnait avoir lu et accepté les conditions generale de vente disponible sur www.proximiti.ci</p>
            <p class="consigne" id="tva">*Les prestations rendues en Cote d'Ivoire sont soumises à la TVA ivoirienne au taux de 18% (Lieu d'excécution - Article 351 du CGI ivoirien).</p>

        </main>

        <footer>

        </footer>
    </div>
</body>

</html>
