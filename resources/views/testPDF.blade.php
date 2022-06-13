<!DOCTYPE html>
<html>
<html>
    <style>
        *{
            top:0px;
            padding-top:0;
    
        }
        .logo-facture-date{ 
            height:100px;
            margin-left:500px
        }
        .facture-table{
            height: 80px;
            padding-top: 20px;
        }
        .facture{
            width: 200px;
        }
        .table-date{
            border-collapse: collapse;
            width: 200px; 
            height: 50px;
            padding-top:20px
        }
        .company-infos{
            padding-top:20px
        }  

    </style>
        <head>
            <meta charset="UTF-8" />
        </head>
    <body>
    <link rel="stylesheet" type="text/css" href="./index.css"/>
    <div class="container;">
        <img style="margin-left:150px" src="data:image/png;base64,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"></img>
        <div class="logo-facture-date">
            <div class="facture-table">
                <div class="facture">
                    <span>Facture N°</span>
                    <span>20220001.Paywall</span>
                </div>
                <table class="table-date">
                    <tr style=" border: 1px solid;background-color:#dddddd;padding: 10px;">
                        <th>Date</th>
                    </tr>
                    <tr style="border: 1px solid;">
                        <th>{{ $date }}</th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="company-infos">
            <table style="border:0 ;">
                <tr>
                    <td>Adress de Facturation :   {{$adresse_de_facturation}}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Société :   {{$société}}</td>
                </tr>
                <tr>
                    <td>Adress/ligne1 :{{$adresse_ligne1}}</td>
                </tr>
                <tr>
                    <td>Adress/ligne2 :{{$adresse_ligne2}}</td>
                </tr>
                <tr>
                    <td>ICE:{{$ice}}</td>
                </tr>
                <tr>
                    <td>Ville :{{$ville}}</td>
                </tr>
            </table>
        </div>
        <p style="border: 1px ridge black;width:400px;height:40px;font-weight: bold;margin-right:300px;padding-left:10px;padding-top:5px">Objet: Offre Corporate</p>
        <div style="padding-top: 20px;">
            <table style="border-collapse: collapse;border: 3px solid black;width:100%">
                <tr style="border: 1px solid black; border-collapse:collapse">
                  <th style="width:60%;">Désignation</th>
                  <th style="border: 1px solid black; border-collapse:collapse">Nombre d'accès</th> 
                  <th style="border: 1px solid black; border-collapse:collapse">Total</th>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding: 10px;border: 1px solid black; border-collapse:collapse">
                        Abonnement au journal numérique Médias24
                        <ul style="list-style-type: disc; padding: 0 0 0 20px;">
                            <li>Accès aux archives de près de 10 ans</li>
                            <li>Accès gratuits aux autres produits abonnés</li>
                            <li>Les newsletters de nos meilleurs éditorialistes</li>
                            <li>Un espace qui vous garantit une fluidité de navigation</li>
                            <li>Votre journal sur le Web, desktop, mobile et tablette</li>
                            <li>Une équipe support dédiée pour répondre aux besoins de vos collaborateurs</li>
                            <li>...accès supplémentaires</li>
                        </ul>

                    </td>
                    <td style="vertical-align: top; text-align: center; padding: 10px;border: 1px solid black; border-collapse:collapse">{{$number_readers}}</td>
                    <td style="vertical-align: top; text-align: center; padding: 10px;border: 1px solid black; border-collapse:collapse">{{$total}}</td>
                </tr> 
            </table>
        </div>
        <div>
        <p style="margin-top:20px;width:330px">Arretée la présente Facture à la somme de :  <br>……………………………………….. Dirhams</p>
        <table style="border-collapse: collapse;width: 180px;margin-left:528px;position:absolute;top:740px">
            <tr>
                <th style=" border: 1px solid;background-color:#dddddd;padding: 10px;">Total</th>
                <th style="border: 1px solid;">{{$total}}</th>
            </tr>
        </table>
    </div>
    <div style="padding-top:40px"> 
        <table style="border:0">
            <tr>
                <td style="font-weight: bold;">BANQUE :</td>
                <td style="padding-left:10px ;">CREDIT AGRICOLE DU MAROC</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">AGENCE :</td>
                <td style="padding-left:10px ;">AGRO BUSINESS CENTER - CA</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">COMPTE N° :</td>
                <td style="padding-left:10px ;">225 780 0159040726510105 39</td>
            </tr>
        </table>
        <p style="border:1px solid black;text-align: center; width:220px;height:100px;margin-left:500px;position:absolute;top:800px;padding-top:10px">EXONERE DE TVA VENTE <br>Article de l’exonération de la TVA du code de la<br> CGI. Article 91 (1-E)-1</p>
    </div>
    <div style="position: relative; text-align: right; margin-top: 100px">
        <img style="width:170px"src="https://annonceslegales.medias24.com/themes/scan02.jpg">
        <p style="font-size:13px;position:absolute; right:0; top: 0px; bottom: 0; left: 0; text-align: center;">SARL au capital de 9.125.300,00DH<br>159, Bd Yacoub Mansour -Casablanca- Tél. (212) 5 22 98 30 59-Fax.:(212) 5 22 98 48 17 <br>E.mail : contact@medias24.com - Site web : www.medias24.com<br>Patente :35873669 -I.F : 14412785 - R.C : 276123- CNSS:954554 -ICE:001536326000084</p>
    </div>
    </div>
</body>
</html>