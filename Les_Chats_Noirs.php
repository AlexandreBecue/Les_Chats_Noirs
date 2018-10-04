<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Les Chats Noirs</title>
        <link rel="icon" type="image/png" href="src/favicon.ico"/>
        <link rel="stylesheet" href="src/bootstrap.min.css">
        <link rel="stylesheet" href="src/Les Chats Noirs.css">
        <script type="text/javascript" src="src/Les Chats Noirs.js"></script>
    </head>

    <header class="container-fluid row col-xs-12 col-sd-12 col-md-12 col-lg-12">
        <img class="col-xs-2 col-sd-2 col-md-2 col-lg-2 logo-responsive" src="src/logo1.png" alt="Logo" title="Accueil" onclick="afficherAccueil()">
        <ul id="menu" class="col-xs-8 col-sd-8 col-md-8 col-lg-8">
            <li><a href="#">Albums</a>
      	        <ul>
                    <li><a href="#" onclick="afficherAlbum1()">Personne Ne Nous Trouvera</a></li>
                    <li><a href="#" onclick="afficherAlbum2()">L'Esprit s'Exprime</a></li>
      	        </ul>
            </li>
            <li><a href="#">Vidéos</a>
    	        <ul>
                    <li><a href="#" onclick="afficherVideosClips()">Clips</a></li>
                    <li><a href="#" onclick="afficherVideosConcerts()">Concerts</a></li>
                    <li><a href="#" onclick="afficherVideosRepetitions()">Répétitions</a></li>
                </ul>
            </li>
            <li><a href="#">Photos</a>
    	        <ul>
                    <li><a href="#" onclick="afficherPhotosPosters()">Posters</a></li>
                    <li><a href="#" onclick="afficherPhotosConcerts()">Concerts</a></li>
    	            <li><a href="#" onclick="afficherPhotosRepetitions()">Répétitions</a></li>
    	        </ul>
            </li>
            <li><a href="#">Documents</a>
                <ul>
                    <li><a href="#" onclick="afficherSetlists()">SetLists</a></li>
                    <li><a href="#" onclick="afficherParoles()">Paroles</a></li>
                </ul>
            </li>
            <li><a href="#">Planning</a>
                <ul>
                    <li><a href="#" onclick="afficherPlanningGeneral1()">Général</a></li>
                    <li><a href="#" onclick="afficherPlanningConcerts1()">Concerts</a></li>
                    <li><a href="#" onclick="afficherPlanningRepetitions1()">Répétitions</a></li>
                    <li><a href="#" onclick="afficherPlanningPublications1()">Publications</a></li>
                </ul>
            </li>
        </ul>
        <img class="col-xs-2 col-sd-2 col-md-2 col-lg-2 logo-responsive" src="src/logo2.png" alt="Logo">
    </header>

    <body>
        <div class="container-fluid row">
            <div class="container col-xs-8 col-sd-8 col-md-8 col-lg-8 corps">
                <div id="accueil">
                    <p>
                        <h1>Accueil</h1><br>
                        //Insérer le texte ici.\\<br>
                        <div id="carrousel">
                            <figure>
                                <img src="src/carrousel1.jpg" alt="carrousel1">
                                <img src="src/carrousel2.jpg" alt="carrousel2">
                                <img src="src/carrousel3.jpg" alt="carrousel3">
                                <img src="src/carrousel4.jpg" alt="carrousel4">
                            </figure>
                        </div>
                    </p>
                </div>

                <div id="album1">
                    <p>
                        <h1>Personne Ne Nous Trouvera</h1><br>
                        //Insérer le texte ici.\\<br>
                        Commandez le vôtre ici, et payez avec Paypal.<br><br>
                        <form action="src/mail.php" method="post">
                            <p>
                                <strong> Nom : </strong> <label for="nom"></label> <input id="nom" name="nom" size="28" type="text"/>
                                <strong> Prénom : </strong> <label for="prenom"></label> <input id="prenom" name="prenom" size="27" type="text"/> <br><br>
                                <strong> Code Postal : </strong> <label for="code"></label> <input id="code" name="code" size="13" type="text"/>
                                <strong> Ville : </strong> <label for="ville"></label> <input id="ville" name="ville" size="39" type="text"/> <br><br>
                                <strong> Mail <span style="color: #ff0000;">*</span> : </strong> <br> <label for="mail"> </label><input id="mail" name="mail" size="73" type="text" />
                            </p>
                            <p>
                                Quel album voulez-vous commander ?
                                <label for="motif"></label>
                                <select id="motif" name="motif">
                                    <option value="Personne Ne Nous Trouvera">Personne Ne Nous Trouvera</option>
                                    <option value="L'Esprit s'Exprime">L'Esprit s'Exprime</option>
                                </select>
                            </p>
                            <p>Message supplémentaire (optionnel) : </p>
                            <p><label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea></p>
                            <input type="reset" value="Effacer"/><a href="https://www.paypal.com/signin" target="_blank"><input type="submit" value="Envoyer"/></a>
                        </form>
                    </p>
                </div>

                <div id="album2">
                    <p>
                    <h1>L'Esprit s'Exprime</h1><br>
                    //Insérer le texte ici.\\<br>
                    Commandez le vôtre ici, et payez avec Paypal.<br><br>
                    <form action="src/mail.php" method="post">
                        <p>
                            <strong> Nom : </strong> <label for="nom"></label> <input id="nom" name="nom" size="28" type="text"/>
                            <strong> Prénom : </strong> <label for="prenom"></label> <input id="prenom" name="prenom" size="27" type="text"/> <br><br>
                            <strong> Code Postal : </strong> <label for="code"></label> <input id="code" name="code" size="13" type="text"/>
                            <strong> Ville : </strong> <label for="ville"></label> <input id="ville" name="ville" size="39" type="text"/> <br><br>
                            <strong> Mail <span style="color: #ff0000;">*</span> : </strong> <br> <label for="mail"> </label><input id="mail" name="mail" size="73" type="text" />
                        </p>
                        <p>
                            Quel album voulez-vous commander ?
                            <label for="motif"></label>
                            <select id="motif" name="motif">
                                <option value="L'Esprit s'Exprime">L'Esprit s'Exprime</option>
                                <option value="Personne Ne Nous Trouvera">Personne Ne Nous Trouvera</option>
                            </select>
                        </p>
                        <p>Message supplémentaire (optionnel) : </p>
                        <p><label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea></p>
                        <input type="reset" value="Effacer"/><a href="https://www.paypal.com/signin" target="_blank"><input type="submit" value="Envoyer"/></a>
                    </form>
                    </p>
                </div>

                <div id="videosClips">
                    <p>
                        <h1>Clips</h1><br>
                        //Insérer les clips ici.\\
                    </p>
                </div>

                <div id="videosConcerts">
                    <p>
                        <h1>Concerts</h1><br>
                        //Insérer les vidéos ici.\\
                    </p>
                </div>

                <div id="videosRepetitions">
                    <p>
                        <h1>Répétitions</h1><br>
                        //Insérer les vidéos ici.\\
                    </p>
                </div>

                <div id="photosPosters">
                    <p>
                        <h1>Posters</h1><br>
                        //Insérer les photos ici.\\
                    </p>
                </div>

                <div id="photosConcerts">
                    <p>
                        <h1>Concerts</h1><br>
                            <h2> 21/06/2018 : Fête de la Musique, place Jean Jaurès Provin </h2>
                                //Insérer les photos ici.\\
                            <h2> 23/06/2018 : Fête de la Musique, parc des Faitelles de Vendin-Le-Vieil </h2>
                                //Insérer les photos ici.\\
                            <h2> 08/09/2018 : Exposition "Les Z'amis de l'Atelier", salle de la Mairie de Vendin-Le-Vieil </h2>
                                //Insérer les photos ici.\\
                            <h2> 23/06/2018 : Première partie de Noiseless, Bistroquet à Annœulin </h2>
                                //Insérer les photos ici.\\
                    </p>
                </div>

                <div id="photosRepetitions">
                    <p>
                        <h1>Répétitions</h1><br>
                            <h2> 30/12/2017 </h2>
                                //Insérer les photos ici.\\
                            <h2> 28/04/2018 </h2>
                                //Insérer les photos ici.\\
                            <h2> 05/05/2018 </h2>
                                //Insérer les photos ici.\\
                            <h2> 02/06/2018 </h2>
                                //Insérer les photos ici.\\
                    </p>
                </div>

                <div id="setlists">
                    <p>
                        <h1>Setlists</h1><br>
                        //Insérer le texte ici.\\
                    </p>
                </div>

                <div id="paroles">
                    <p>
                        <h1>Paroles</h1><br>
                        //Insérer le texte ici.\\
                    </p>
                </div>

                <div id="planningGeneral1">
                    <p>
                        <h1> Planning </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Janvier</h1><img href="#" src="src/suivant.png" alt="Suivant" title="Suivant" onclick="afficherPlanningGeneral2()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td title="Nouvel an">01</td>
                                <td>02</td>
                                <td>03</td>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                            </tr>

                            <tr>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningGeneral2">
                    <p>
                        <h1> Planning </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Février</h1><img href="#" src="src/precedent.png" alt="Précédent" title="Précédent" onclick="afficherPlanningGeneral1()"><img href="#" src="src/suivant.png" alt="Suivant" title="Suivant" onclick="afficherPlanningGeneral3()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningGeneral3">
                    <p>
                        <h1> Planning </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Mars</h1><img href="#" src="src/precedent.png" alt="Précédent" title="Précédent" onclick="afficherPlanningGeneral2()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningConcerts1">
                    <p>
                        <h1> Planning des concerts </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Janvier</h1><img href="#" src="src/suivant.png" alt="Suivant" title="Suivant" onclick="afficherPlanningConcerts2()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                            </tr>

                            <tr>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningConcerts2">
                    <p>
                        <h1> Planning des concerts </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Février</h1><img href="#" src="src/precedent.png" alt="Précédent" title="Précédent" onclick="afficherPlanningConcerts1()"><img href="#" src="src/suivant.png" alt="Suivant" title="Suivant" onclick="afficherPlanningConcerts3()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningConcerts3">
                    <p>
                        <h1> Planning des concerts</h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Mars</h1><img href="#" src="src/precedent.png" alt="Précédent" title="Précédent" onclick="afficherPlanningConcerts2()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningRepetitions1">
                    <p>
                        <h1> Planning des répétitions </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Janvier</h1><img href="#" src="src/suivant.png" alt="Suivant" title="Suivant" onclick="afficherPlanningRepetitions2()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                            </tr>

                            <tr>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningRepetitions2">
                    <p>
                        <h1> Planning des répétitions </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Février</h1><img href="#" src="src/precedent.png" alt="Précédent" title="Précédent" onclick="afficherPlanningRepetitions1()"><img href="#" src="src/suivant.png" alt="Suivant" title="Suivant" onclick="afficherPlanningRepetitions3()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningRepetitions3">
                    <p>
                        <h1> Planning des répétitions</h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Mars</h1><img href="#" src="src/precedent.png" alt="Précédent" title="Précédent" onclick="afficherPlanningRepetitions2()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningPublications1">
                    <p>
                        <h1> Planning des publications </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Janvier</h1><img href="#" src="src/suivant.png" alt="Suivant" title="Suivant" onclick="afficherPlanningPublications2()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                            </tr>

                            <tr>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningPublications2">
                    <p>
                        <h1> Planning des publications </h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Février</h1><img href="#" src="src/precedent.png" alt="Précédent" title="Précédent" onclick="afficherPlanningPublications1()"><img href="#" src="src/suivant.png" alt="Suivant" title="Suivant" onclick="afficherPlanningPublications3()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="planningPublications3">
                    <p>
                        <h1> Planning des publications</h1><br>
                        <table class="planning">
                            <tr><th colspan=7><h1>Mars</h1><img href="#" src="src/precedent.png" alt="Précédent" title="Précédent" onclick="afficherPlanningPublications2()"></th></tr>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>01</td>
                                <td>02</td>
                                <td>03</td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>05</td>
                                <td>06</td>
                                <td>07</td>
                                <td>08</td>
                                <td>09</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                            </tr>
                        </table>
                    </p>
                </div>

                <div id="contact">
                    <p>
                        <h1>Contact</h1><br>
                        Adresse mail : LesChatsNoirs@gmail.com<br>
                        <a href="https://www.youtube.com/channel/UCuGnbo4C7jGMnWx6UW1YbCw" target="_blank">Chaine Youtube</a> -
                        <a href="https://www.facebook.com/LesChatsNoirsRock/?ref=br_rs" target="_blank">Page Facebook</a>
                    </p>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <div class="txt-responsive">
            <a href="#" onclick="afficherContact()">Nous contacter</a> <br>
            Langue : Français / <a href="Les_Chats_Noirs.php">English</a>
        </div>
    </footer>
</html>
