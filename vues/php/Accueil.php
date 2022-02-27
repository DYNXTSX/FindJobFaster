<?php
header('Content-Type: text/html;charset=UTF-8');
header('Pragma: no-cache');
?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vues/css/style.css">
    <link rel="stylesheet" href="vues/css/texteditor.css">
    <script type="text/javascript" src="vues/js/jquery.js"></script>
    <script type="text/javascript" src="vues/js/script.js"></script>
    <title>Accueil</title>
</head>
<body>
    <menu class="menu">
        <button class="menu__item active" >
            <svg class="icon" viewBox="0 0 24 24">
                <path d="M3 10v11h6v-7h6v7h6v-11L12,3z"/>
            </svg>
        </button>

        <button class="menu__item"> 
            <svg class="icon" viewBox="0 0 24 24" >
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="16" y1="13" x2="8" y2="13"></line>
            <line x1="16" y1="17" x2="8" y2="17"></line>
            <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
        </button>

        <button class="menu__item">
            <svg class="icon" viewBox="0 0 24 24">
            <path  d="M3.4,11.9l8.8,4.4l8.4-4.4"/>
            <path  d="M3.4,16.2l8.8,4.5l8.4-4.5"/>
            <path  d="M3.7,7.8l8.6-4.5l8,4.5l-8,4.3L3.7,7.8z"/>
            </svg>
        </button>

        <button class="menu__item">
            <svg class="icon" viewBox="0 0 24 24">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline>
            </svg>
        </button>

        <button class="menu__item">
            <svg class="icon" viewBox="0 0 24 24" >
            <circle cx="12" cy="12" r="3"></circle>
            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
            </svg>
        </button>

        <div class="menu__border"></div>
    </menu>

    <div class="svg-container">
        <svg viewBox="0 0 202.9 45.5" >
            <clipPath id="menu" clipPathUnits="objectBoundingBox" transform="scale(0.0049285362247413 0.021978021978022)">
                <path  d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
                  c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
                  c9.2,3.6,17.6,4.2,23.3,4H6.7z"/>
            </clipPath>
        </svg>
    </div>

    <div class="page__contain">
        <!-- PAGE D'ACCUEIL -->
        <div class="page page__accueil visible">
            Accueil
        </div>

        <div class="page page__lettre" style="flex-direction: column;">
            <h2>Simple responsive form</h2>
            <div class="newPost">
                <div class="toolbar">
                    <button type="button" data-func="bold"><i class="fa fa-bold"></i></button>
                    <button type="button" data-func="italic"><i class="fa fa-italic"></i></button>
                    <button type="button" data-func="underline"><i class="fa fa-underline"></i></button>
                    <button type="button" data-func="justifyleft"><i class="fa fa-align-left"></i></button>
                    <button type="button" data-func="justifycenter"><i class="fa fa-align-center"></i></button>
                    <button type="button" data-func="justifyright"><i class="fa fa-align-right"></i></button>
                    <button type="button" data-func="justifyfull"><i class="fa fa-align-justify"></i></button>
                    <button type="button" title="entreprise" onclick="document.execCommand('backcolor',false,'pink');"><i class="fa fa-building"></i></button>
                    <button type="button" title="recruteur" onclick="document.execCommand('backcolor',false,'cyan');"><i class="fa fa-user"></i></button>
                    <button type="button" title="date" onclick="document.execCommand('backcolor',false,'aquamarine');"><i class="fa fa-calendar"></i></button>
                    <div class="customSelect">
                        <select data-func="fontname">
                            <optgroup label="Serif Fonts">
                                <option value="Bree Serif">Bree Serif</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Palatino Linotype">Palatino Linotype</option>
                                <option value="Times New Roman">Times New Roman</option>
                            </optgroup>
                            <optgroup label="Sans Serif Fonts">
                                <option value="Arial">Arial</option>
                                <option value="Arial Black">Arial Black</option>
                                <option value="Asap" selected>Asap</option>
                                <option value="Comic Sans MS">Comic Sans MS</option>
                                <option value="Impact">Impact</option>
                                <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                <option value="Tahoma">Tahoma</option>
                                <option value="Trebuchet MS">Trebuchet MS</option>
                                <option value="Verdana">Verdana</option>
                            </optgroup>
                            <optgroup label="Monospace Fonts">
                                <option value="Courier New">Courier New</option>
                                <option value="Lucida Console">Lucida Console</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="editor" contenteditable>
                  
                    <p class="MsoBodyText">Pierre Dupont</p>
                    <p class="MsoBodyText">60 rue Louis Blanc</p>
                    <p class="MsoBodyText">69006 Lyon</p>
                    <p class="MsoBodyText">Tel: +33 (0)6 66 66 66 66</p>
                    <p class="MsoBodyText">Pierre.dupont@xxxx.com</p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText" align="right">À l'attention du </p>
                    <p class="MsoBodyText" align="right">Service Ressources Humaines</p>
                    <p class="MsoBodyText" align="right">
                        <span style="background-color: pink;">Entreprise</span>
                    </p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText" align="right">À Lyon, le <span style="background-color: aquamarine;">DATE</span></p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText">Objet : candidature stage développeur web</p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText">Madame, Monsieur,</p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText" align="justify">Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe. Ceci est mon premier paragraphe.</p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText" align="justify">Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe. Ceci est mon deuxième paragraphe.</p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText" align="justify">Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. Ceci est mon troisième paragraphe. </p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText" align="justify">Ceci est mon quatrième paragraphe. Ceci est mon quatrième paragraphe. Ceci est mon quatrième paragraphe. Ceci est mon quatrième paragraphe. Ceci est mon quatrième paragraphe. Ceci est mon quatrième paragraphe. </p>
                    <p class="MsoBodyText"><br></p>
                    <p class="MsoBodyText"><br></p>

                </div>
                <div class="buttons">
                <!--<button type="button">save draft</button>-->
                    <button data-func="clear" type="button">clear</button>
                    <button data-func="save" type="button">save</button>
                </div>
            </div>

            <script>
                $('.newPost button[data-func]').click(function(){
                    document.execCommand( $(this).data('func'), false   );
                });

                $('.newPost select[data-func]').change(function(){
                    var $value = $(this).find(':selected').val();
                    document.execCommand( $(this).data('func'), false, $value);
                });

            
            </script>

            
            
        </div>

        <div class="page page__entreprise">
            <section>
                <h1>Ajouter une entreprise</h1>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th class="no__pad">
                                    <input type="text" class="nom__entreprise" placeholder="Nom de l'entreprise">
                                </th>
                                <th class="no__pad">
                                    <input type="text" class="nom__recruteur" placeholder="Nom du recruteur">
                                </th>
                                <th class="no__pad">
                                    <input type="text" class="sexe" placeholder="Sexe">
                                </th>
                                <th class="no__pad">
                                    <input type="text" class="email__recruteur" placeholder="Email">
                                </th>
                                <th class="no__pad" width="10%">
                                    <button class="button_entreprise">Ajouter</button>
                                </th>


                                <script type="text/javascript">
                                    $(".button_entreprise").on("click", function(e){
                                        reload__verif();

                                        var entreprise = $(".nom__entreprise").val(),
                                            recruteur = $(".nom__recruteur").val(),
                                            sexe = $(".sexe").val(),
                                            email = $(".email__recruteur").val();

                                        var del = $("<td  width='10%'><button class='button_entreprise'>Supprimer</button></td>").click(function(){
                                            var p = $(this).parent();
                                            p.fadeOut(function(){
                                                p.remove();
                                            });
                                        });

                                        //create entreprise
                                        var e = new Entreprise(entreprise,recruteur,sexe,email);
                                        var ligne = $("<tr><td>"+e.nom+"</td><td>"+e.recruteur+"</td><td>"+e.sexe+"</td><td>"+e.email+"</td></tr>");
                                        ligne.append(del);

                                        if(verif__entreprise(entreprise,recruteur,sexe,email)){
                                            $(".liste__entreprise").prepend(ligne);
                                            liste__entreprise.push(e);
                                            clear__champs();
                                        }
                                    
                                    });

                                    function clear__champs(){
                                        $(".nom__entreprise").val("");
                                        $(".nom__recruteur").val("");
                                        $(".sexe").val("");
                                        $(".email__recruteur").val("");
                                    }

                                    function reload__verif(){
                                        $(".nom__entreprise").removeClass("not__ok");
                                        $(".nom__recruteur").removeClass("not__ok");
                                        $(".sexe").removeClass("not__ok");
                                        $(".email__recruteur").removeClass("not__ok");
                                    }

                                    function verif__entreprise(entreprise, recruteur, sexe, email){
                                        var error = 0;

                                        if(entreprise == "" || entreprise == null){
                                            $(".nom__entreprise").addClass("not__ok");
                                            error = 1;
                                        }
                                        if(recruteur == "" || recruteur == null){
                                            $(".nom__recruteur").addClass("not__ok");
                                            error = 1;
                                        }
                                        if(sexe == "" || sexe == null){
                                            $(".sexe").addClass("not__ok");
                                            error = 1;
                                        }
                                        if(email == "" || email == null){
                                            $(".email__recruteur").addClass("not__ok");
                                            error = 1;
                                        }
                                        if(error)
                                            return false;
                                        return true;
                                    }
                                </script>

                            </tr>
                        </thead>
                    </table>
                </div>
                <!--for demo wrap-->
                <h1>Liste des entreprises</h1>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th>Nom de l'Entreprise</th>
                                <th>Nom du recruteur</th>
                                <th>Sexe</th>
                                <th>Email</th>
                                <th width="10%">Supprimer</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody class="liste__entreprise"></tbody>
                    </table>
                </div>
            </section>
        </div>

        <div class="page page__mail">
            Mail
        </div>

        <div class="page page__settings">
            Settings
        </div>



        <ul class="background__bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    </div>


    <script>
            const body = document.body;
            const bgColorsBody = ["#ffb457", "#ff96bd", "#9999fb", "#ffe797", "#8ae5ed"];
            const pageName = ["page__accueil", "page__lettre", "page__entreprise", "page__mail", "page__settings"];
            const menu = body.querySelector(".menu");
            const menuItems = menu.querySelectorAll(".menu__item");
            const menuBorder = menu.querySelector(".menu__border");
            let activeItem = menu.querySelector(".active");

            function clickItem(item, index) {

                menu.style.removeProperty("--timeOut");
                
                if (activeItem == item) return;
                
                if (activeItem) {
                    activeItem.classList.remove("active");
                }

                
                item.classList.add("active");
                body.style.backgroundColor = bgColorsBody[index];
                showGoodPage(index);
                activeItem = item;
                offsetMenuBorder(activeItem, menuBorder);
                
                
            }

            function showGoodPage(index){
                let activePage = document.getElementsByClassName("visible")[0];
                if(activePage){
                    activePage.classList.remove("visible");
                }

                let newPage = document.getElementsByClassName(pageName[index])[0];
                if(newPage){
                    newPage.classList.add("visible");
                }


                /*switch(index){
                    case 0:

                }*/

            }

            function offsetMenuBorder(element, menuBorder) {

                const offsetActiveItem = element.getBoundingClientRect();
                const left = Math.floor(offsetActiveItem.left - menu.offsetLeft - (menuBorder.offsetWidth  - offsetActiveItem.width) / 2) +  "px";
                menuBorder.style.transform = `translate3d(${left}, 0 , 0)`;

            }

            offsetMenuBorder(activeItem, menuBorder);

            menuItems.forEach((item, index) => {

                item.addEventListener("click", () => clickItem(item, index));
                
            })

            window.addEventListener("resize", () => {
                offsetMenuBorder(activeItem, menuBorder);
                menu.style.setProperty("--timeOut", "none");
            });
    </script>



</body>
</html>