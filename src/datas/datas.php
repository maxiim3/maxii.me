<?php
$pages = [
    "accueil" => new Pages(
        "Accueil",
        "accueil",
        "
                <section class=\"container home-container\">
                    <h1  class=\"grid-header\">Maxime Tamburrini</h1>
                    <h2  class=\"grid-content\">Développeur Fullstack junior</h2>
                    <a target='_blank' title='ouvrir dans un nouvel onglet'  class=\"grid-half-left\"  href=\"https://github.com/maxiim3\"><i class=\"fab fa-github-square\"></i>Git Hub</a>
                    <a target='_blank'  title='ouvrir dans un nouvel onglet' class=\"grid-half-right\" href=\"https://www.linkedin.com/in/maxime-tamburrini-7048895a/\"><i class=\"fab fa-linkedin\"></i>Linked In</a>
                </section>
                "),
    "about" => new Pages(
        "À Propos",
        "about",
        "
                <section class=\"container about-container\">
                    <h2 class=\"grid-header\"   id=\"h2-angle\">À Propos</h2>
                    <hr class=\"grid-header\">
                    
                    <article class=\"grid-content\">
                        <p>Je m’appelle Maxime, j’ai 33 ans</p>
                        <p>La passion pour le web a toujours été présente en moi, mais j’ai emprunté différents chemins avant d’en venir réellement au code.</p>
                        <p>J’ai d’abord travaillé dans la Post-Production Cinéma à Paris, d’où je suis originaire, avant de voyager comme saisonnier en France et en Europe. C’est au cours de l’un de ces voyages que j’ai rencontré mon épouse. Nous nous sommes installés dans cette magnifique ville ensoleillée qu’est Montpellier et avons deux enfants.</p>
                        <p>Le premier confinement m’a permis de me lancer dans le code en créant des scripts en Python. Je n’ai plus lâché le clavier depuis.</p>
                        <p>J’ai poursuivi en me formant en parallèle de mon travail, tous les jours. En suivant des formations en ligne je me suis ainsi initié au Python puis HTML/CSS. J’ai ensuite ancrer des fondations solides en m'intéressant aux Designs Patterns, à l'algorithmique et à la programmation orientée Objet avec Java. Je me suis ensuiet tourné vers JavaScript.</p>
                        <p>C’est à ce moment que j’ai franchit le pas et suivit une formation tremplin chez Diginamic. Cette formation m’a permis d’assurer ma reconversion professionnelle et de confirmer les bases solides que j’ai acquises et complétées avec cette formation.</p>
                        <p>Je débute une formation de développeur web et mobile en février prochain.</p>
                        
                    </article>
                </section>
                "),
    "formation" => new Pages(
        "Diplômes & Formations",
        "formation",
        "
                <section class=\"container formation-container\">
                
                    <h2 class=\"grid-header\">Diplômes & Formations</h2>
                    <hr class=\"grid-header\">
                    
                    <div class=\"grid-content\">
                        <div class=\"sub grid-half-left\"> 
                            <article class=\"objet obj-formation\">
                                <p class=\"date light\">2008</p>
                                <p class=\"bac\">Bac scientifique spé. Maths - <span class=\"light\">Paris 6<sup>ème</sup></span></p>
                            </article> 
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">2012</p>
                                <p class=\"bac\">Bac +2 : Technicien du son - <span class=\"light\">SAE Institute Paris</span></p>
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">2021</p>
                                <h3>Opquast</h3>  
                                <h4>Diginamic formation<span class=\"light\"> - Montpellier</span></h4> 
                                <p>Certification Opquast, maîtrise qualité projet Web</p>           
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">2021</p>
                                <h3>Prestashop</h3>  
                                <h4>Diginamic formation<span class=\"light\"> - Montpellier</span></h4> 
                                <p>Création d’un site e-commerce avec Prestashop</p>                 
                                <p>Création de modules Prestashop</p>                 
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">2022</p>
                                <h3>Développeur Web et mobile</h3>  
                                <h4>Diginamic formation<span class=\"light\"> - Montpellier</span></h4> 
                                <p>En préparation pour 2022</p>                 
                                <p class=\"light\">Diplôme RNCP de niveau 5</p>                 
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">2021</p>
                                <h3>Programmation Orientée Objet en Java</h3>
                                <h4>Formation en ligne : Code with Mosh</h4>
                                <p>Les bases de Java et création de petites applications en utilisant la POO </p>
                                <p>Algorithmie</p>
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">2020</p>
                                <h3>Programmation Orientée Objet en Python</h3>
                                <h4>Formation en ligne : Code with Mosh</h4>
                                <p>Python intermédiaire. Création de scripts d\"automation.</p>
                                <p>Web scrapping</p>
                                <p>Algorithmie</p>
                            </article>
                        </div>
                        
                        <div class=\"sub grid-half-right\">  
                            <article class=\"objet obj-formation date light\">2020 à 2021</p>
                                <h3>HTML/CSS</h3>
                                <h4>Formation en ligne : Code with Mosh</h4>
                                <p>Technique avancée du HTML et CSS</p>
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">2021</p>
                                <h3>Programmation Orientée Objet en JavaScript</h3>
                                <h4>Formation en ligne : Code with Mosh</h4>
                                <p></p>
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">Prévu au premier semestre 2022</p>
                                <h3>Git et GitHub</h3>
                                <h4>Formation en ligne : Code with Mosh</h4>
                                <p>Git et GitHub avancés</p>
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">Prévu au premier semestre 2022</p>
                                <h3>Design Patterns</h3>
                                <h4>Formation en ligne : Code with Mosh</h4>
                                <p>Initiation aux Design patterns</p>
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">Prévu au premier semestre 2022</p>
                                <h3>Algorithmie et Data Structure</h3>
                                <h4>Formation en ligne : Code with Mosh</h4>
                                <p>Algorithmie et type de structure de données</p>
                            </article>     
                                       
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">Prévu au premier semestre 2022</p>
                                <h3>NodeJS</h3>
                                <h4>Formation en ligne : Code with Mosh</h4>
                                <p>Initiation à NodeJS</p>
                            </article>
                            
                            <article class=\"objet obj-formation\">
                                 <p class=\"date light\">2019</p>
                                <h3>Rédaction Web</h3>
                                <h4>Formation en ligne : Udemy</h4>
                                <p>Bonnes pratiques, SEO, culture web</p>
                            </article>
                            </div>
                        </div>
                     </section>
                     "),
    "experience" => new Pages(
        "Expériences Professionnelles",
        "experience",
        "
                <section class=\"container xp-container\">
                
                    <h2 class=\"grid-header\">Expériences Professionnelles</h2>
                    <hr class='grid-header'>
                    
                    <div class=\"grid-content\">
                       <div class='sub grid-header'>
                            <article class=\"objet obj-xp obj-xp1\">
                                <h3>Quelques compétences transversales développées:</h3>
                                <ul>
                                    <li>• Gérer la pression et les deadline.</li>
                                    <li>• Organisé</li>
                                    <li>• Cusiosité</li>
                                    <li>• Travailler en équipe</li>
                                    <li>• Sortir de sa zone de confort (connaissances, domaines techniques)</li>
                                    <li>• Travailler avec des sessions de plusieurs milliers de fichiers</li>
                                    <li>• Être dynamique et efficace</li>
                                    <li>• Manager et transmettre des compértences/connaissances</li>
                                    <li>• Une certaine endurance physique et mentale</li>
                                    <li>• Patience</li>
                                    <li>• La prise d'initiative</li>
                                    <li>• Improvisation</li>
                                    <li>• Se remettre en question</li>
                                </ul>
                            </article>
                       </div>
                        <div class='sub grid-half-left'>
                            <article class='objet obj-xp obj-xp2'>
                                <h3>ingénieur du son</h3>
                                <h4>La Formation d'ingénieur du son à la <a href='https://www.sae.edu/fra/fr' title='Ouvrir le site de la SAE Institue dans un nouvel onglet'>SAE Institute Paris</a></h4>
                                <p>Je me suis familliariser avec l'environnement  MacOS ainsi que le DAW AVID ProTools. Cette formation m'a permis de développer une grande capcaité de visualisation au travers des synoptiques des consoles de mixages et \"rootings\". Mais aussi la capacité à gérer des projets dans des contraintes matériels, techniques et temporelles imposés.</p>
                            </article>
                        
                            <article class='objet obj-xp obj-xp3'>
                                <h3>ingénieur du son</h3>
                                <h4>Mon aventure dans le milieu de la post-production cinéma</h4>
                                <p>Suite à mon stage de fin d'étude effectué chez Film Factory, j'ai eu la chance d’obtenir une place d’apprentis et d'être mentoré par les meilleurs techniciens français de la post-production cinéma:</p>
                                <ul>
                                    <li>• Le Sound Designer Frederic Lelouet (Dias De Gracia, Or Noir, BabySitting, Paradise Lost...) </li>
                                    <li>• Le Mixeur Vincent Arnardi (Amélie Poulain, Taxi, Stalingrad.. ) </li>
                                    <li>• Le Bruiteur Nicolas Becker (Batman begins, Harry Potter, Gravity..) </li>
                                    <p>Une expérience intense, humainement et professionnellement. A leur coté j'ai travaillé sur de projets comme BabySitting  ou Pionner... Vous retrouverez quelques unes de mes expériences sur <a href='https://www.imdb.com/name/nm5708197/?ref_=fn_al_nm_1' title='Ouvrir IMDB dans un nouvel onglet'>ma page IMDB</a> .</p>
                                </ul>
                            </article>
                            
                            <article class='objet obj-xp'>
                                <h4>Créations sonores et musicales</h4>
                                <p>A la suite de mes expériences dans le cinéma je me suis intéressé au son binaural (Famillièrement son 3D). J'ai participé au Biennal d'Art Contemporain de Goteborg en 2015 (GIBCA 2015). J'ai fait différents enregistrements d'ambiance sonores en binaural 3D et en Stéréo. Vous pouvez retrouver quelques échantillons sur mon <a href='https://soundcloud.com/maxdjukic' title='Ouvrir Soundcloud dans un nouvel onglet'>Soundcloud</a></p>
                            </article>
                        </div>
              
                        <div class='sub grid-half-right'>
                            <article class='objet objet-xp'>
                                <h4>Pratique de la musique</h4>
                                <p>Musicien, j'ai pratiqué la batterie et les percussions pendant plus de 10 ans. La pratique de la musique en groupe et de l'improvisation m'ont permis de développer l'écoute et la recherche de la justesse afin de valoriser la cohérence du groupe dans son ensemble.</p>
                            </article>
                
                            <article class='objet objet-xp'>
                                <h3>autres expériences professionnelles</h3>
                                <p>J'ai travaillé dans la restauration pendant plusieurs années. Parfois par passion, d'autres fois par obligation... J'ai cependant appris énormément professionnellement et humainement au cours des expériences accumulées. Voici quelques unes de ces expériences de la plus reecente à la plus ancienne:</p>
                                <ul>
                                    <li>• Apprentis puis Chef Pizzaiolo a la pizzeria Mongelli de Montpellier de 2019 à 2021</li>
                                    <li>• Responsable de cuisine au Petit Nice à Montpellier en 2019)</li>
                                    <li>• Manager d'une Auberge de Jeunesse en Macédoine du Nord de 2016 à 2018</li>
                                    <li>• Woofer et apprentis agriculteur/permaculteur/cuisinier/traiteur en Normandie en 2015 et 2016</li>
                                    <li>• Serveur dans la boite de nuit les Aviateurs à Strasbourg en 2015</li>
                                    <li>• Responsable de bar et salle au Clin\'s 20, Paris 20ème en 2014 et 2015</li>
                                    <li>• Hôte d'accueil au Parc des Princes (Paris-Saint Germain) de 2008 à 2010</li>
                                </ul>
                             </article>
                         </div>
                        </div>
                </section>
                    "),
    "skills" => new Pages(
        "Compétences",
        "skills",
        "
                <section class='container skills-container'>
                    
                    <h2 class=\"grid-header\">Compétences Techniques</h2>
                    <hr class='grid-header'>
                
                    <div class='grid-content'>
                        <div class='sub grid-half-left'> 
                            <aside class=\"objet obj-skills aside\">
                                <ul>
                                    <li>-- Les compétences acquises</li>
                                    <li class=\"light\">-- Les compétences visées au premier semestre 2022</li>
                                </ul>
                            </aside>
                             <article class='objet obj-skills'>
                                <h3>LANGUES</h3>
                                <h4>Pratique courante et quotidienne</h4>
                                <i class=\"fas fa-language\"></i>
                                <ul>
                                    <li>Français</li>
                                    <li>Anglais</li>
                                    <li>Macédonien</li>
                                    <li>Serbe - Croate</li>
                                </ul>
                             </article>
                             
                             <article class='objet obj-skills'>
                               <h3>PRESTASHOP</h3>
                                <ul>
                                    <li>Création d’un site e-commerce </li>
                                    <li>Création de modules de CMS</li>
                                </ul>
                            </article>
                            
                             <article class='objet obj-skills'>
                                <h3 class=\"light\">Wordpress</h3>
                                <ul>
                                    <li class=\"light\">Création de sites </li>
                                    <li class=\"light\">Création de modules de CMS</li>
                                </ul>
                            </article>
                            
                            <article class='objet obj-skills'>
                                <h3>MySQL</h3>
                                <ul>
                                    <li>Création de bases de données relationnelles</li>
                                    <li>Manipulation des données et requêtage</li>
                                </ul>
                            </article>
                            
                             <article class='objet obj-skills'>
                                <h3>PHP <span class=\"light\">AVANCÉ</span></h3>
                                <ul>
                                    <li>Programmation Orientée Objet</li>
                                    <li>Création de pages Web dynamiques.</li>
                                    <li class=\"light\">Framework Symphony</li>
                                    <li class=\"light\">Test unitaires avec PHPUnit</li>
                                </ul>
                            </article>
                        </div>
                        
                        <div class='sub grid-half-right'> 
                             <article class='objet obj-skills'>
                                <h3>JAVASCRIPT <span class=\"light\">AVANCÉ</span></h3>
                                <ul>
                                    <li>Programmation Orientée Objet</li>
                                    <li>Manipulation du DOM avec VanillaJS et jQuerry </li>
                                    <li>Création d’applications comme une Todo List</li>
                                    <li class=\"light\">Initiation au Framework Angular</li>
                                    <li class=\"light\">Initiation à NodeJS</li>
                                    <li class=\"light\">Famillier avec la Librairie REACTJS</li>
                                </ul>
                            </article>

                                          
                             <article class='objet obj-skills'>
                               <h3>PYTHON</span></h3>
                                <ul>
                                    <li>Programmation Orientée Objet</li>
                                    <li>Web et data scrapping</li>
                                    <li>Utilisation d’API et requêtage</li>
                                    <li>Manipulation de documents textes et JSON</li>
                                    <li>Création de scripts sous MacOS</li>
                                </ul>
                            </article>
                            
                             <article class='objet obj-skills'>
                                <h3>HTML/CSS Avancés</h3>
                                <ul>
                                    <li>Création de pages Web responsives </li>
                                    <li>Création de pages Web dynamiques.</li>
                                    <li>Framework CSS: Bootstrap,  <span class=\"light\">Tailwind, Miligram</span></li>
                                    <li class=\"light\">SCSS/SASS</li>
                                </ul>
                            </article>
                                                        
                             <article class='objet obj-skills'>
                                <h3>Autres ...</h3>
                                <h4></h4>
                                <ul>                            
                                    <li>Git et Github</li>
                                    <li class=\"light\">Maquêtage</li>
                                    <li class=\"light\">Fondamentaux UI / UX</li>
                                    <li>Méthode agile</li>
                                    <li>Création d’application</li>  
                                </ul>
                            </article>
                        </div>
                    </div>
                </section>
                "),
    "ressources" => new Pages(
        "Ressources",
        "ressources",
        "
                 <section class='container skills-container'>
                    
                    <h2 class=\"grid-header\">Ressources</h2>
                    <hr class='grid-header'>
                
                    <div class='grid-content'>
                        <div class='sub grid-half-left'> 
                            
                            <article class='objet obj-skills'>
                                <p>Quelques ressources téléchargeables</p>    
                            </article>
                            
                            <article class='objet obj-skills'>
                                <a href='/public/assets/pdf/CV_MAXIME_TAMBURRINI.pdf' download='CV_MAXIME_TAMBURRINI'>Télécharger mon CV au format pdf</a>    
                            </article>
                            <article class='objet obj-skills'>
                                <h3>Formation Diginamic Prestashop : \"Création d'un site e-commerce\"</h3>
                                <ul>    
                                    <li><a href='/public/assets/pdf/DIGINAMIC_PRESTASHOP_ATTESTATION.pdf' download='DIGINAMIC_PRESTASHOP_ATTESTATION'>Attestation de formation</a></li>    
                                    <li><a href='/public/assets/pdf/DIGINAMIC_PRESTASHOP_BILAN_FORMATION.pdf' download='DIGINAMIC_PRESTASHOP_BILAN_FORMATION'>Bilan de formation</a></li>
                                </ul>    
                            </article>
                            <article class='objet obj-skills'>
                                <h3>Certification : \"Programmation Orientée Objet en Java\"</h3>
                                <ul>    
                                    <li><a href='/public/assets/pdf/JAVA_CERTIF01.pdf' download='JAVA_CERTIF01'>Certificat de complétion Java niveau 1</a></li>    
                                    <li><a href='/public/assets/pdf/JAVA_CERTIF02.pdf' download='JAVA_CERTIF02'>Certificat de complétion Java niveau 2</a></li>    
                                    <li><a href='/public/assets/pdf/JAVA_CERTIF03.pdf' download='JAVA_CERTIF03'>Certificat de complétion Java niveau 3</a></li>    
                                </ul>    
                            </article>
                            <article class='objet obj-skills'>
                                <h3>Certification : \"Programmation Orientée Objet en JavaSCRIPT\"</h3>
                                <ul>    
                                    <li><a href='/public/assets/pdf/JAVASCRIPT_CERTIF01.pdf' download='JAVASCRIPT_CERTIF01'>Certificat de complétion JavaScript niveau 1</a></li>    
                                    <li><a href='/public/assets/pdf/JAVASCRIPT_CERTIF02.pdf' download='JAVASCRIPT_CERTIF02'>Certificat de complétion JavaScript niveau 2</a></li>    
                                </ul>    
                            </article>
                            <article class='objet obj-skills'>
                                <h3>Certification : \"HTML-CSS\"</h3>
                                <ul>    
                                    <li><a href='/public/assets/pdf/HTML-CSS_CERTIF01.pdf' download='HTML-CSS_CERTIF01'>Certificat de complétion HTML-CSS niveau 1</a></li>    
                                    <li><a href='/public/assets/pdf/HTML-CSS_CERTIF02.pdf' download='HTML-CSS_CERTIF02'>Certificat de complétion HTML-CSS niveau 2</a></li>    
                                </ul>    
                            </article>
                            <article class='objet obj-skills'>
                                <h3>Certification : \"Design Patterns et Data Structure\"</h3>
                                <ul>    
                                    <li><a href='/public/assets/pdf/DESIGN-PATTERN_CERTIF01.pdf' download='DESIGN-PATTERN_CERTIF01'>Certificat de complétion Design Pattern</a></li>    
                                    <li><a href='/public/assets/pdf/ULTIMATE-DATASTRUCTURE_CERTIF01.pdf' download='ULTIMATE-DATASTRUCTURE_CERTIF01'>Certificat de complétion Structure de données et algorithmique</a></li>    
                                </ul>    
                            </article>

                           
                            
                        </div>
                        <div class='sub grid-half-right'> 
                             
                        </div>
                    </div>
                </section>
                "),
    "contact" => new Pages(
        "Contact",
        "contact",
        "
            <section class='container form-container'>
                
                <h2 class='grid-header'>Contact</h2>
                <hr class='grid-header'>
                    
                <div class=\"grid-content\">
                    <form action=\"index.php\" method='POST'  name='EmailForm'>
                         <fieldset class=\"light\"><sup class=\"orange\">*</sup> champs obligatoire</fieldset>
                         <label for='nom'>Votre Nom <sup class=\"orange\">*</sup>
                            <input type='text' name='nom' id='nom' required placeholder='Votre Nom'>
                         </label>
                         <label for='mail'>Votre mail <sup class=\"orange\">*</sup>
                             <input type=\"email\" name=\"mail\" id=\"mail\" required placeholder=\"Votre mail..\">
                         </label>
                         
                         <label for='content'>Votre message <sup class=\"orange\">*</sup>
                            <textarea name=\"content\" id=\"txt\" cols=\"40\" rows=\"10\" placeholder=\"Écrivez votre texte...\" required></textarea>
                         </label>
                         <button type=\"submit\" name=\"submit\" value='Submit'> envoyer</button>
                    </form>
                 </div>
            </section>
                ")
];