-- phpMyAdmin SQL Dump
-- version OVH
-- http://www.phpmyadmin.net
--
-- Client: mysql51-53.perso
-- Généré le : Lun 16 Avril 2012 à 16:44
-- Version du serveur: 5.1.49
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `onlinespace`
--

-- --------------------------------------------------------

--
-- Structure de la table `bd_first_name`
--

CREATE TABLE IF NOT EXISTS `bd_first_name` (
  `first_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  KEY `first_name` (`first_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bd_first_name`
--

INSERT INTO `bd_first_name` (`first_name`) VALUES
('Aaron'),
('Abdon'),
('Abdonie'),
('Abdonise'),
('Abel'),
('Abelin'),
('Abeline'),
('Abelle'),
('Abigaelle'),
('Abondance'),
('Abraham'),
('Absalon'),
('Acace'),
('Acaciane'),
('Acacie'),
('Acanthe'),
('Achaire'),
('Achille'),
('Adalard'),
('Adalbald'),
('Adalbaude'),
('Adalbert'),
('Adalric'),
('Adalsinde'),
('Adam'),
('Adamir'),
('Adegrin'),
('Adegrine'),
('Adel'),
('Adelin'),
('Adeline'),
('Adelphe'),
('Adeltrude'),
('Adenet'),
('Adjutor'),
('Adolphe'),
('Adolphie'),
('Adon'),
('Adonis'),
('Adonise'),
('Adraste'),
('Adrehilde'),
('Adrien'),
('Adrienne'),
('Agapet'),
('Agathange'),
('Agathe'),
('Agathon'),
('Agilbert'),
('Agilberte'),
('Agnan'),
('Agnane'),
('Agnel'),
('Agrippin'),
('Agrippine'),
('Aignan'),
('Aignane'),
('Aimable'),
('Alain'),
('Alaine'),
('Alban'),
('Albane'),
('Albert'),
('Alberte'),
('Albertet'),
('Albertine'),
('Albin'),
('Albine'),
('Alcibiade'),
('Alcide'),
('Alcidie'),
('Alcime'),
('Alcine'),
('Alcyone'),
('Aldebert'),
('Aldegonde'),
('Aldegrin'),
('Aldemar'),
('Aldonce'),
('Aldric'),
('Aleaume'),
('Aleth'),
('Alexandra'),
('Alexandre'),
('Alexandrine'),
('Alexane'),
('Alexiane'),
('Alexine'),
('Alexis'),
('Alice'),
('Aliette'),
('Aline'),
('Alix'),
('Almine'),
('Almire'),
('Aloys'),
('Aloyse'),
('Alphonse'),
('Alphonsie'),
('Alphonsine'),
('Alpinien'),
('Amadis'),
('Amaliane'),
('Amalric'),
('Amande'),
('Amandin'),
('Amandine'),
('Amant'),
('Amante'),
('Amantine'),
('Amarande'),
('Amaranthe'),
('Amaryllis'),
('Amarynthe'),
('Amaury'),
('Ambre'),
('Ambrine'),
('Ambroise'),
('Ambroisie'),
('Ambroisine'),
('Ameliane'),
('Ameline'),
('Amiel'),
('Aminte'),
('Amour'),
('Anaelle'),
('Anastase'),
('Anastasiane'),
('Anastasie'),
('Anatole'),
('Anatolie'),
('Anatoline'),
('Ancelin'),
('Anceline'),
('Andelin'),
('Andoche'),
('Ange'),
('Angelin'),
('Angeline'),
('Angilbe'),
('Angilberte'),
('Angilran'),
('Anglebert'),
('Angoustan'),
('Anicet'),
('Anicette'),
('Annabelle'),
('Anne'),
('Annette'),
('Annibal'),
('Annie'),
('Ansbert'),
('Ansberte'),
('Anselme'),
('Anstrudie'),
('Antheaume'),
('Anthelme'),
('Anthelmette'),
('Anthelmine'),
('Anthime'),
('Antide'),
('Antigone'),
('Antoine'),
('Antoinette'),
('Antonin'),
('Antonine'),
('Aphrodite'),
('Apollinaire'),
('Apolline'),
('Apollon'),
('Apollonie'),
('Aquilin'),
('Aquiline'),
('Arabelle'),
('Arcade'),
('Arcadiane'),
('Arcadie'),
('Archambaud'),
('Archange'),
('Archibald'),
('Argine'),
('Arian'),
('Ariane'),
('Aricie'),
('Ariel'),
('Arielle'),
('Ariste'),
('Aristide'),
('Aristion'),
('Arlette'),
('Armance'),
('Armand'),
('Armande'),
('Armandie'),
('Armandine'),
('Armel'),
('Armeline'),
('Armelle'),
('Armide'),
('Armin'),
('Armine'),
('Arminie'),
('Arnalde'),
('Arnaud'),
('Arnaude'),
('Arnould'),
('Arolde'),
('Arthaud'),
('Arthur'),
('Arthurine'),
('Ascelin'),
('Asceline'),
('Astride'),
('Athalie'),
('Athanase'),
('Athanasie'),
('Aubane'),
('Aube'),
('Aubert'),
('Aubertin'),
('Aubertine'),
('Aubin'),
('Aude'),
('Audebert'),
('Audeline'),
('Audette'),
('Audouin'),
('Audran'),
('Audrey'),
('Audric'),
('Auguste'),
('Augustin'),
('Augustine'),
('Aulde'),
('Aure'),
('Aurelle'),
('Aurian'),
('Auriane'),
('Aurore'),
('Automne'),
('Auxane'),
('Auxence'),
('Aveline'),
('Avigaelle'),
('Avril'),
('Axel'),
('Axeline'),
('Axellane'),
('Axelle'),
('Aymard'),
('Aymardine'),
('Aymeric'),
('Aymond'),
('Aymonde'),
('Azel'),
('Azeline'),
('Azelle'),
('Baptiste'),
('Barbara'),
('Basile'),
('Bastien'),
('Baudouin'),
('Bernadette'),
('Bernard'),
('Bertrand'),
('Blaise'),
('Blanche'),
('Blandine'),
('Boniface'),
('Brice'),
('Brigitte'),
('Bruno'),
('Camille'),
('Caribert'),
('Carine'),
('Carle'),
('Caroline'),
('Cassandre'),
('Cathaline'),
('Catherine'),
('Cesar'),
('Chantal'),
('Charles'),
('Charline'),
('Christian'),
('Christiane'),
('Christine'),
('Christophe'),
('Claire'),
('Clara'),
('Claude'),
('Clotaire'),
('Clotilde'),
('Clovis'),
('Colas'),
('Colin'),
('Constance'),
('Constant'),
('Constantin'),
('Coralie'),
('Coraline'),
('Corentin'),
('Corentine'),
('Cosette'),
('Cyprien'),
('Cyrielle'),
('Damien'),
('Daniel'),
('Darius'),
('David'),
('Delphine'),
('Denis'),
('Denise'),
('Diane'),
('Didier'),
('Dieu'),
('Dimitri'),
('Dominique'),
('Domitille'),
('Dorian'),
('Doriane'),
('Edouard'),
('Eginhard'),
('Eliane'),
('Elie'),
('Eliette'),
('Elisabeth'),
('Elise'),
('Elodie'),
('Eloi'),
('Elora'),
('Emeric'),
('Emma'),
('Emmanuel'),
('Emmanuelle'),
('Emmeline'),
('Enguerrand'),
('Eric'),
('Ernest'),
('Ernestine'),
('Estelle'),
('Esther'),
('Etienne'),
('Eudes'),
('Eulalie'),
('Eve'),
('Fabien'),
('Fabrice'),
('Falba'),
('Fanny'),
('Fantine'),
('Faustine'),
('Ferdinand'),
('Fernand'),
('Fernande'),
('Fiacre'),
('Fiona'),
('Firmin'),
('Flavie'),
('Flavien'),
('Flore'),
('Florence'),
('Florent'),
('Florentin'),
('Florian'),
('Florie'),
('Foulques'),
('France'),
('Francia'),
('Francis'),
('Franck'),
('Fulbert'),
('Gabriel'),
('Gabrielle'),
('Gaspard'),
('Gaston'),
('Gatien'),
('Gautier'),
('Geoffroy'),
('Georges'),
('Georgette'),
('Germain'),
('Germaine'),
('Germanique'),
('Gertrude'),
('Ghislain'),
('Gondebaud'),
('Gonthier'),
('Gontran'),
('Gonzague'),
('Gui'),
('Guilhem'),
('Guilhemine'),
('Guillaume'),
('Guillemette'),
('Gustaphine'),
('Gustave'),
('Gustavine'),
('Guy'),
('Gwenael'),
('Gwendoline'),
('Gwladys'),
('Harmonie'),
('Hector'),
('Henri'),
('Henriette'),
('Hermione'),
('Hippolyte'),
('Hortense'),
('Hubert'),
('Hugo'),
('Hugues'),
('Huguette'),
('Igor'),
('Innocent'),
('Iris'),
('Isabeau'),
('Isabelle'),
('Isadora'),
('Isaline'),
('Iseult'),
('Isidore'),
('Jacinthe'),
('Jacqueline'),
('Jacques'),
('Jeanine'),
('Jeanne'),
('Jeannot'),
('Jessica'),
('Joachim'),
('Job'),
('Jocelyn'),
('Jonas'),
('Joseph'),
('Josse'),
('Jude'),
('Judith'),
('Jules'),
('Julie'),
('Julien'),
('Juliette'),
('Justin'),
('Justine'),
('Kevin'),
('Kilian'),
('Laura'),
('Laure'),
('Laureene'),
('Laurel'),
('Laurence'),
('Laurent'),
('Leila'),
('Lison'),
('Lothaire'),
('Louis'),
('Louise'),
('Lucas'),
('Lucie'),
('Lucile'),
('Ludivine'),
('Ludovic'),
('Lydia'),
('Madeleine'),
('Magali'),
('Maguelone'),
('Mahault'),
('Mahaut'),
('Malo'),
('Manon'),
('Marc'),
('Marcel'),
('Marcelin'),
('Marceline'),
('Margaux'),
('Margot'),
('Marguerite'),
('Marina'),
('Marine'),
('Marion'),
('Marius'),
('Martin'),
('Martine'),
('Mathias'),
('Mathieu'),
('Mathilde'),
('Mathurin'),
('Maud'),
('Maurice'),
('Mauricet'),
('Mauricette'),
('Max'),
('Maxence'),
('Maxime'),
('Maximilien'),
('Mayeul'),
('Michel'),
('Micheline'),
('Mireille'),
('Miriam'),
('Monique'),
('Morgane'),
('Nadia'),
('Nadine'),
('Natalie'),
('Nathan'),
('Naudet'),
('Nestor'),
('Nicolas'),
('Nicole'),
('Nicolette'),
('Nolwen'),
('Norbert'),
('Octave'),
('Odile'),
('Odilon'),
('Oger'),
('Olga'),
('Olivia'),
('Olivier'),
('Olympe'),
('Othon'),
('Ozanne'),
('Pamela'),
('Pascal'),
('Pascale'),
('Pascaline'),
('Patrice'),
('Patricia'),
('Patrick'),
('Paul'),
('Paule'),
('Paulette'),
('Pauline'),
('Perceval'),
('Perrine'),
('Philibert'),
('Philippe'),
('Pierre'),
('Pollyanna'),
('Primerose'),
('Priscille'),
('Quentin'),
('Rachel'),
('Raoul'),
('Raymond'),
('Renaud'),
('Reybaud'),
('Richard'),
('Robert'),
('Roch'),
('Rodolphe'),
('Roger'),
('Roland'),
('Rolande'),
('Romain'),
('Romuald'),
('Rosalie'),
('Rose'),
('Roselin'),
('Roseline'),
('Sabine'),
('Salomon'),
('Samuel'),
('Sandra'),
('Sandrine'),
('Sarah'),
('Serge'),
('Sigismond'),
('Simon'),
('Simone'),
('Sixtine'),
('Solange'),
('Sonia'),
('Soon'),
('Sophie'),
('Stanislas'),
('Suzanne'),
('Suzette'),
('Sylvain'),
('Sylvestre'),
('Sylviane'),
('Sylvie'),
('Syrine'),
('Tanguy'),
('Tatiana'),
('Thibault'),
('Thomas'),
('Tiphaine'),
('Titien'),
('Trajan'),
('Tristan'),
('Ulysse'),
('Valentin'),
('Valentine'),
('Vanessa'),
('Victoire'),
('Victor'),
('Victoria'),
('Victorine'),
('Vincent'),
('Vinciane'),
('Violette'),
('Virginie'),
('Vital'),
('Viviane'),
('Vivien'),
('Vladimir'),
('Walter'),
('Wilfrid'),
('Wilfried'),
('William'),
('Wolfgang'),
('Xavier'),
('Yann'),
('Yannick'),
('Yoann'),
('Yolande'),
('Yse'),
('Yseult'),
('Yves'),
('Yvette'),
('Yvon'),
('Yvonne'),
('Zacharie');

-- --------------------------------------------------------

--
-- Structure de la table `bd_last_name`
--

CREATE TABLE IF NOT EXISTS `bd_last_name` (
  `last_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bd_last_name`
--

INSERT INTO `bd_last_name` (`last_name`) VALUES
('Frerot'),
('Abbeville'),
('Addenin'),
('Ailly'),
('Aimée'),
('Alençon'),
('Alexandre'),
('Allain'),
('Alluison'),
('Alsace'),
('Amiens'),
('Amory'),
('Anjou'),
('Annequin'),
('Aquitaine'),
('Ardres'),
('Argenton'),
('Argies'),
('Arles'),
('Arnaud'),
('Arrault'),
('Aspremont'),
('Assignies'),
('Assonleville'),
('Aubigny'),
('Aubouare'),
('Auchoel'),
('Augendre'),
('Auger'),
('Augonnet'),
('Aumale'),
('Austine'),
('Auvergne'),
('Auxy'),
('Avantigny'),
('Averhoust'),
('Avesnes'),
('Azincourt'),
('Bachelier'),
('Bacquehem'),
('Baes'),
('Bailleul'),
('Baillot'),
('Bailly'),
('Ballot'),
('Bar'),
('Barat De La Haye'),
('Barbançon'),
('Barbat'),
('Barbier'),
('Barcelone'),
('Bardeau'),
('Barraut'),
('Bathereau'),
('Baudart'),
('Baudement'),
('Baugé'),
('Baugency'),
('Baulier'),
('Baux'),
('Beaufremez'),
('Beaufremont'),
('Beaujean'),
('Beaujeu'),
('Beaumont'),
('Beauparisis'),
('Beauvais'),
('Becquet'),
('Bellay'),
('Belleval'),
('Benard'),
('Bérenger'),
('Berghes'),
('Berland'),
('Bernard'),
('Bernâtre'),
('Bernicourt'),
('Berry'),
('Bertier'),
('Bertin'),
('Bertrand'),
('Besançon'),
('Besque'),
('Béthencourt'),
('Béthune'),
('Beugnet'),
('Beugnon'),
('Beuriot'),
('Beuvry'),
('Bezou'),
('Bienassis'),
('Biencourt'),
('Bienque'),
('Billemont'),
('Birague'),
('Blanchard'),
('Blancher'),
('Blandy'),
('Blois'),
('Blondel'),
('Boichot'),
('Boileau'),
('Bois'),
('Bois De Hoves'),
('Boiseaux'),
('Boissard'),
('Boisseau'),
('Boisvilliers'),
('Bomez'),
('Bommez'),
('Bonard'),
('Bonnafau'),
('Bordelet'),
('Bordet'),
('Bos'),
('Bosevent'),
('Boubers'),
('Boucher'),
('Boudet'),
('Boudou'),
('Boulat'),
('Boule'),
('Boullencourt'),
('Bourbon'),
('Bourbourg'),
('Bourgeois'),
('Bourgogne'),
('Bourgoin'),
('Bournel'),
('Bournonville'),
('Bourris'),
('Boursin'),
('Boussard'),
('Boutery'),
('Bouville'),
('Boyaval'),
('Brabant'),
('Braque'),
('Brenetot'),
('Bresot'),
('Bretagne'),
('Breteuil'),
('Brienne'),
('Brignac'),
('Brille'),
('Briquois'),
('Brissier'),
('Brisson'),
('Bristel'),
('Brocelance'),
('Brossard'),
('Broutin'),
('Brulloz'),
('Brumare'),
('Brunet'),
('Bunel'),
('Cadet'),
('Cady'),
('Caillat'),
('Callement'),
('Calonne'),
('Cambrin'),
('Cambuzat'),
('Cancer'),
('Candavene'),
('Canivet'),
('Cantrelle'),
('Carinthie'),
('Cariot'),
('Carpentier'),
('Carre'),
('Carrette'),
('Carue'),
('Cassel'),
('Cassemiche'),
('Castelloise'),
('Castille'),
('Cathelain'),
('Catheu'),
('Caudrelier'),
('Caumesnil'),
('Cercueil'),
('Cerf'),
('Chalon'),
('Champagne'),
('Champigny'),
('Chane'),
('Chantereau'),
('Chantocé'),
('Chardon'),
('Charenton'),
('Charlot'),
('Charrie'),
('Chartier'),
('Chasloup'),
('Chassenneau'),
('Chastel'),
('Chastillon'),
('Châteaulandon'),
('Châteauneuf'),
('Châtellerault'),
('Chatenet'),
('Chaumeron'),
('Chaumont'),
('Chenery'),
('Chenu'),
('Cherbuy'),
('Cherisy'),
('Cheron'),
('Chevalier'),
('Chevillon'),
('Chevillot'),
('Chevrette'),
('Choppin'),
('Chouquet'),
('Chourses'),
('Clairet'),
('Clémandort'),
('Clément'),
('Clermont'),
('Cléry'),
('Colachot'),
('Colbeau'),
('Collas'),
('Collet'),
('Colombat'),
('Commanville'),
('Comnène'),
('Conjeaud'),
('Conversat'),
('Coquibus'),
('Coquille'),
('Cordes'),
('Corichon'),
('Cornu'),
('Cosson'),
('Cotard'),
('Cottensin'),
('Cottrel'),
('Coucy'),
('Coudret'),
('Couppin'),
('Courcelle'),
('Courgenoul'),
('Couronnel'),
('Courroux'),
('Courtenay'),
('Couthrier'),
('Craon'),
('Crécy'),
('Crepin'),
('Créquy'),
('Crespin'),
('Cresson'),
('Creste'),
('Creuzet'),
('Crochot'),
('Cuingen'),
('Cunchy'),
('Cusani'),
('Dabrias'),
('Daire'),
('Dallemagne'),
('Damiens'),
('Damois'),
('Damoiseau'),
('Dampierre'),
('Dampmartin'),
('Darley'),
('Darlot'),
('Dauthon'),
('Dauvissat'),
('David De Conflans'),
('Debernard'),
('Debuire'),
('Defrance'),
('Deguion'),
('Deguy'),
('Dehay'),
('Delacour'),
('Delanoy'),
('Delapierre'),
('Delaporte'),
('Delaroque'),
('Delattre'),
('Delaveau'),
('Delcroix'),
('Delhomme'),
('Delorme'),
('Delvigne'),
('Demeaux'),
('Demery'),
('Demory'),
('Denis'),
('Depair'),
('Derancourt'),
('Derckel'),
('Deriencourt'),
('Derome'),
('Dery'),
('Deruy'),
('Dervillers'),
('Desboeufs'),
('Descamps'),
('Deschaintre'),
('Descluzeaux'),
('Descours'),
('Desgranges'),
('Desmolins'),
('Desponcheaux'),
('Deveau'),
('Deville'),
('Dey'),
('Dizier'),
('Donjon'),
('Donzy'),
('Dore'),
('Doutremepuich'),
('Dreux'),
('Dreville'),
('Dubuisson'),
('Dubusc'),
('Duclos'),
('Ducrot'),
('Dudout'),
('Dugon'),
('Duisye'),
('Dupas'),
('Dupont'),
('Dupuich'),
('Durand'),
('Durville'),
('Duval'),
('Duveau'),
('Escabillon'),
('Esclaibes'),
('Esne'),
('Eu'),
('Eve'),
('Evrat'),
('Évreux'),
('Fauconnier'),
('Fay'),
('Fevre'),
('Fiennes'),
('Filleu'),
('Fiquet'),
('Flandres'),
('Fleurigny'),
('Flos'),
('Fontaine'),
('Fonty'),
('Forcalquier'),
('Forest'),
('Foucher'),
('Fouet'),
('Fouillaux'),
('Fouquay'),
('Fourneau'),
('Fournier'),
('Fourrey'),
('Foursy'),
('Framecourt'),
('France'),
('Franquin'),
('Freaud'),
('Fricamps'),
('Fromon'),
('Fuzier'),
('Galbart'),
('Galveux'),
('Gamard'),
('Ganneau'),
('Gaquerel'),
('Gardin'),
('Gares'),
('Garlande'),
('Garny'),
('Gaucher'),
('Gaudry'),
('Gauguier'),
('Gautherin'),
('Gayot'),
('Geoffroy'),
('Germain'),
('Germigny'),
('Gherquier'),
('Ghistelles'),
('Gilardin'),
('Giraudon'),
('Gisors'),
('Goffert'),
('Gommegnies'),
('Gommets'),
('Gomot'),
('Gougeard'),
('Gourlot'),
('Gouy'),
('Graçay'),
('Grandpré'),
('Grandsire'),
('Grange'),
('Grard'),
('Gravereau'),
('Grebert'),
('Grégoire'),
('Grenet'),
('Griboval'),
('Grignard'),
('Grillot'),
('Grimier'),
('Grimoin'),
('Grospré'),
('Gueldres'),
('Guenand'),
('Guenech'),
('Guenier'),
('Guenin'),
('Guerchy'),
('Guerreau'),
('Guesset'),
('Guichard'),
('Guidamour'),
('Guidon'),
('Guidou'),
('Guilbert'),
('Guillaume'),
('Guillé'),
('Guillemin'),
('Guillemot'),
('Guillot'),
('Guinbert'),
('Guines'),
('Guinière'),
('Guinot'),
('Guisarme'),
('Guise'),
('Habarcq'),
('Habert'),
('Hack'),
('Hallengues'),
('Hallwin'),
('Ham'),
('Hamelin'),
('Hangest'),
('Harchies'),
('Harcourt'),
('Hardenthun'),
('Harry'),
('Haveskerque'),
('Haynaut'),
('Hébuterne'),
('Heilly'),
('Henau'),
('Henrion'),
('Henry'),
('Hérat'),
('Herbet'),
('Hergot'),
('Hermer'),
('Hervieux'),
('Hesques'),
('Hingettes'),
('Hollande'),
('Houlier'),
('Hubert'),
('Hugot'),
('Huguet'),
('Huot'),
('Huquedieu'),
('Hure'),
('Huret'),
('Jacob'),
('Jacquet'),
('Jamet'),
('Janneton'),
('Janniot'),
('Jarcy'),
('Jasquier'),
('Jausse'),
('Jay'),
('Jeanneau'),
('Jeannin'),
('Joigny'),
('Josse'),
('Joussot'),
('Jully'),
('Jumelle'),
('La Barre'),
('La Brosse'),
('La Caille'),
('La Chapelle'),
('Lachaume'),
('La Croix'),
('La Deulle'),
('Ladmiral'),
('La Forge'),
('Laine'),
('Lalaing'),
('Lamarre'),
('Lambersat'),
('Lamblin'),
(' Lampognani'),
('Lamy'),
('Lanchères'),
('Langhemeersch'),
('Lanier'),
('Lannoy'),
('Lanthier'),
('La Rivière'),
('La Roche'),
('La Roche-Dronion'),
('La Rocheguyon'),
('La Rosière'),
('La Rouë'),
('La Salle'),
('La Trémoille'),
('Latroye'),
('Launay'),
('Laurent'),
('Laurin'),
('La Vacquerie'),
('Laval'),
('La Vernade'),
('Le Caron'),
('Le Cauchie'),
('Lecerf'),
('Le Changeur'),
('Leclair'),
('Le Clef'),
('Leclerc'),
('Leclercq'),
('Le Coeur'),
('Lecomte'),
('Le Courtois'),
('Ledoux'),
('Le Drouais'),
('Le Febure'),
('Lefebvre'),
('Le Feutre'),
('Le Fort'),
('Legage'),
('Legar'),
('Legay'),
('Legrand'),
('Legueux'),
('Le Jart'),
('Lejeune'),
('Lejong'),
('Leleu'),
('Le Machon'),
('Lemaire'),
('Le Merle'),
('Lemort'),
('Lenfant'),
('Lenfernat'),
('Lens'),
('Léon'),
('Lepargneux'),
('Leroux'),
('Leroy'),
('Le Ruelle'),
('Lesage'),
('Le Saulx'),
('Lesauvage'),
('Lesenne'),
('Leslein'),
('Lessopier'),
('Lestriot'),
('Le Tellier'),
('Leterme'),
('Letourneau'),
('Le Vasseur'),
('Levesier'),
('Levesque'),
('Levis'),
('Le Viseux'),
('Lhoste'),
('Liger'),
('Lioret'),
('Lisques'),
('Loiseau'),
('Loiselet'),
('Longueval'),
('Longvilliers'),
('Lonnel'),
('Lorraine'),
('Lorry'),
('Lourdereau'),
('Loutre'),
('Louvain'),
('Lowez'),
('Lucas'),
('Lufort'),
('Lusignan'),
('Luxembourg'),
('Luyton'),
('Machy De Cocquerel'),
('Magny'),
('Maheut'),
('Maillault'),
('Mailly'),
('Malicorne'),
('Mallet'),
('Malvault'),
('Mandion'),
('Manigot'),
('Manivoire'),
('Manoury'),
('Marchais'),
('Marchand'),
('Marcheville'),
('Maréchal'),
('Martin'),
('Martrois'),
('Mary'),
('Masse'),
('Massiet'),
('Mathet'),
('Mathieu'),
('Maugras'),
('Maunoir'),
('Maupetit'),
('May'),
('Mehun'),
('Mello'),
('Melun'),
('Méranie'),
('Merat'),
('Merle'),
('Mestivier'),
('Meullent'),
('Mez'),
('Michaud'),
('Mignard'),
('Miguet'),
('Milly'),
('Mine'),
('Mizier'),
('Mocquot'),
('Moireau'),
('Moisette'),
('Molembais'),
('Moliens'),
('Monchy'),
('Montbelliard'),
('Montdidier'),
('Montfaucon'),
('Montferrat'),
('Montfort'),
('Monthomer'),
('Montigny'),
('Montjay'),
('Montlhéry'),
('Montmorency'),
('Moreau'),
('Morel'),
('Moreuil'),
('Morillon'),
('Morin'),
('Mothere'),
('Moucy'),
('Moulin'),
('Mouton'),
('Moven'),
('Muller'),
('Namur'),
('Nangis'),
('Nanteuil'),
('Naslos'),
('Naudet'),
('Naulin'),
('Nédonchel'),
('Neel'),
('Nemours'),
('Nesle'),
('Neufmez'),
('Neuville'),
('Nevers'),
('Nielles'),
('Noël'),
('Noeux'),
('Normandie'),
('Occre'),
('Oiselay'),
('Olhain'),
('Oppenot'),
('Ostrel'),
('Ostricque'),
('Oudin'),
('Outreleau'),
('Pacy'),
('Paisan'),
('Pampelune'),
('Paquier'),
('Paris'),
('Parmentier'),
('Party'),
('Pasqueau'),
('Pasqueron'),
('Pate'),
('Paulve'),
('Paviault'),
('Péchenot'),
('Penel'),
('Pérot'),
('Perrignon'),
('Perrigot'),
('Perrin'),
('Perroche'),
('Pertat'),
('Perthuis'),
('Pescheux'),
('Petit'),
('Petitjean'),
('Petitpas'),
('Pezé'),
('Philippon'),
('Picard'),
('Picquigny'),
('Piennes'),
('Pinaud'),
('Pinet'),
('Pingot'),
('Plessis'),
('Plusquellec'),
('Poinlane'),
('Pointeau'),
('Poirié'),
('Poisson'),
('Poitiers'),
('Poix'),
('Polle'),
('Pollet'),
('Polliard'),
('Ponthieu'),
('Pontrohart'),
('Porcherot'),
('Potherat'),
('Pouillaude'),
('Poulain'),
('Poupet'),
('Pourchot'),
('Préaulx'),
('Pretz'),
('Prévost'),
('Prochasson'),
('Protard'),
('Prou'),
('Pruvost'),
('Quarouble'),
('Quesnel'),
('Quesnes'),
('Quesnoy'),
('Quinquet'),
('Quirault'),
('Rancon'),
('Rapin'),
('Rasoir'),
('Ratillon'),
('Raulin'),
('Ravault'),
('Rayneval'),
('Regnard'),
('Regnault'),
('Rely'),
('Renard'),
('Renoux'),
('Renvoyé'),
('Rethel'),
('Ricametz'),
('Rigout'),
('Rimbert'),
('Rivelois'),
('Riverse'),
('Robert'),
('Robin'),
('Robinet'),
('Roblot'),
('Rochefort'),
('Roeulx'),
('Roger'),
('Rollaincourt'),
('Ronnelle'),
('Rose'),
('Rosmadec'),
('Roty'),
('Roucy'),
('Rouhy'),
('Roullier'),
('Rousseau'),
('Roussel'),
('Rousselet'),
('Rousset'),
('Roy'),
('Roye'),
('Royer'),
('Ruette'),
('Russie'),
('Sabran'),
('Sacquespée'),
('Sailly'),
('Saint-Blimond'),
('Saint-Esprit'),
('Saint-Georges'),
('Saint-Omer'),
('Saint-Paul'),
('Saint-Valery'),
('Saint-Venant'),
('Saint-Vérain'),
('Sainville'),
('Salin'),
('Salley'),
('Sancerre'),
('Sars'),
('Sart'),
('Sausseron'),
('Savary'),
('Savery'),
('Savoie'),
('Saxe'),
('Sechelles'),
('Seguin'),
('Seguinot'),
('Senestre'),
('Seurat'),
('Simon'),
('Sodade'),
('Soichet'),
('Soissons'),
('Somaing'),
('Souabe'),
('Soudé'),
('Souger'),
('Soulhac'),
('Soyer'),
('Spinola'),
('Stavele'),
('Steuer'),
('Sully'),
('Tartinville'),
('Tellier'),
('Téneveau'),
('Teniere'),
('Tenremonde'),
('Tessel'),
('Testat'),
('Thiembronne'),
('Thiennes'),
('Thiern'),
('Thierry'),
('Thies'),
('Thieury'),
('Thimonier'),
('Thomas'),
('Thorote'),
('Thuillier'),
('Thureau'),
('Tillou'),
(' Tilloy'),
('Tingry'),
('Tonnerre'),
('Toucy'),
('Toulouse'),
(' Tourmignies'),
('Tranchelion'),
('Trasignies'),
('Traves'),
('Trecy'),
('Tremblay'),
('Tressault'),
('Tribaudaut'),
('Trie'),
('Trivulce'),
('Troillard'),
('Truchy'),
('Tupinier'),
('Turenne'),
('Turquis'),
('Tyrel'),
('Vaast'),
('Varente'),
('Vasse'),
('Vaudemont'),
('Vaudricourt'),
('Veau'),
('Vendeuil'),
('Vendôme'),
('Venizy'),
('Vergnon'),
('Vermandois'),
('Vermeilles'),
('Véron'),
('Verrolot'),
('Vianden'),
('Viault'),
('Vieillard'),
('Vienne'),
('Viennois'),
('Vigreux'),
('Villain'),
('Villard'),
('Ville'),
('Villebéon'),
('Villehardouin'),
('Viltard'),
('Vincent'),
('Vinçon'),
('Vinot'),
('Vir'),
('Vitré'),
('Viturot'),
('Vouhec'),
('Voysines'),
('Wallins'),
('Wandringhem'),
('Wargny'),
('Wavrans'),
('Wavrin'),
('Xavier'),
('Yger'),
('Ypres'),
('Ysselstein');

-- --------------------------------------------------------

--
-- Structure de la table `building_list`
--

CREATE TABLE IF NOT EXISTS `building_list` (
  `id_building` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_building` varchar(255) NOT NULL,
  `description_building` text NOT NULL,
  `id_type_building` int(10) unsigned NOT NULL,
  `permanent_building` tinyint(1) unsigned NOT NULL,
  `building_required` text NOT NULL,
  `technology_required` text NOT NULL,
  PRIMARY KEY (`id_building`),
  KEY `id_type_building` (`id_type_building`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `building_list`
--

INSERT INTO `building_list` (`id_building`, `name_building`, `description_building`, `id_type_building`, `permanent_building`, `building_required`, `technology_required`) VALUES
(6, 'Mine de pierre', '', 3, 1, '', ''),
(7, 'Mine de métal', '', 3, 1, '', ''),
(8, 'Réservoir d''oxygène', '', 3, 1, '', ''),
(9, 'Station pétrolière', '', 3, 1, '', ''),
(10, 'Fabrique de lanceur', '', 2, 1, '', ''),
(11, 'Fabrique de coque', '', 2, 1, '', ''),
(12, 'Fabrique de module de commande', '', 2, 1, '', ''),
(13, 'Fabrique de combinaison', '', 2, 1, '', ''),
(14, 'Base de lancement', '', 1, 0, '', ''),
(15, 'Centre de commandement', '', 1, 1, '', ''),
(16, 'Bureau de relation gouvernemental', '', 4, 1, '', ''),
(17, 'Centre de recherche', '', 4, 1, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `building_type`
--

CREATE TABLE IF NOT EXISTS `building_type` (
  `id_type_building` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_type_building` varchar(255) NOT NULL,
  `description_type_building` text NOT NULL,
  PRIMARY KEY (`id_type_building`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `building_type`
--

INSERT INTO `building_type` (`id_type_building`, `name_type_building`, `description_type_building`) VALUES
(1, 'Mission', 'Ensemble des bâtiments relatif aux missions'),
(2, 'Construction', 'Ensemble des bâtiments relatif à la construction d''équipement'),
(3, 'Ressource', 'Ensemble des bâtiments de ressources'),
(4, 'Administration', 'Ensemble des bâtiments administratifs');

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('32cc55df70e3ba5e1d700f4971babf45', '194.88.104.178', 'Mozilla/5.0 (Windows NT 5.1; rv:11.0) Gecko/20100101 Firefox/11.0', 1334585643, 'a:3:{s:10:"is_connect";b:1;s:2:"id";s:1:"2";s:8:"username";s:6:"admin2";}'),
('ed3177133c6f80508097125c046c10ab', '194.88.104.178', 'Mozilla/5.0 (Windows NT 5.1; rv:11.0) Gecko/20100101 Firefox/11.0', 1334584843, 'a:4:{s:2:"id";s:1:"2";s:8:"username";s:5:"admin";s:10:"is_connect";b:0;s:15:"flash:old:error";s:61:"Oupps on dirait que vous avez oublié votre username/password";}');

-- --------------------------------------------------------

--
-- Structure de la table `equipment_list`
--

CREATE TABLE IF NOT EXISTS `equipment_list` (
  `id_equipment` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_type_equipment` int(10) unsigned NOT NULL,
  `name_equipment` varchar(255) NOT NULL,
  `skill1_equipment` int(10) unsigned NOT NULL,
  `skill2_equipment` int(10) unsigned NOT NULL,
  `building_required` text NOT NULL,
  `technology_required` text NOT NULL,
  `metal_equipment` bigint(20) unsigned NOT NULL,
  `oxygene_equipment` bigint(20) unsigned NOT NULL,
  `carburant_equipment` bigint(20) unsigned NOT NULL,
  `argent_equipment` bigint(20) unsigned NOT NULL,
  `time_equipment` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_equipment`),
  KEY `id_type_equipment` (`id_type_equipment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `equipment_list`
--

INSERT INTO `equipment_list` (`id_equipment`, `id_type_equipment`, `name_equipment`, `skill1_equipment`, `skill2_equipment`, `building_required`, `technology_required`, `metal_equipment`, `oxygene_equipment`, `carburant_equipment`, `argent_equipment`, `time_equipment`) VALUES
(3, 1, 'Missile V2', 1, 1, '', '', 400, 100, 200, 2000, 3000),
(4, 1, 'Jupiter Redstone', 2, 3, '', '', 500, 1000, 200, 5000, 6000),
(7, 2, 'Kevlar', 5, 5, '', '', 10000, 0, 0, 2000, 4500),
(8, 2, 'Alluminium', 10, 10, '', '', 20000, 0, 0, 10000, 30000),
(9, 3, 'Apollo', 2, 2, '', '', 1000, 400, 500, 7000, 3000),
(10, 3, 'Mercury', 4, 5, '', '', 700, 1200, 900, 6000, 10000),
(13, 4, 'A7L', 4, 5, '', '', 100, 5000, 100, 600, 3000),
(14, 4, 'ACES', 2, 3, '', '', 200, 3000, 140, 1888, 1500);

-- --------------------------------------------------------

--
-- Structure de la table `equipment_type`
--

CREATE TABLE IF NOT EXISTS `equipment_type` (
  `id_type_equipment` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_type_equipment` varchar(255) NOT NULL,
  `skill1_type_equipment` varchar(255) NOT NULL,
  `skill2_type_equipment` varchar(255) NOT NULL,
  PRIMARY KEY (`id_type_equipment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `equipment_type`
--

INSERT INTO `equipment_type` (`id_type_equipment`, `name_type_equipment`, `skill1_type_equipment`, `skill2_type_equipment`) VALUES
(1, 'Lanceur', '', ''),
(2, 'Coque', '', ''),
(3, 'Module de commande', '', ''),
(4, 'Combinaison', '', ''),
(5, 'Divers', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `know_list`
--

CREATE TABLE IF NOT EXISTS `know_list` (
  `id_know` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_know` varchar(255) NOT NULL,
  `description_know` text NOT NULL,
  `id_know_type` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_know`),
  KEY `id_know_type` (`id_know_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Structure de la table `know_type`
--

CREATE TABLE IF NOT EXISTS `know_type` (
  `id_know_type` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_know_type` varchar(255) NOT NULL,
  `description_know_type` text NOT NULL,
  PRIMARY KEY (`id_know_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `know_type`
--

INSERT INTO `know_type` (`id_know_type`, `name_know_type`, `description_know_type`) VALUES
(1, 'Astre céleste', ''),
(2, 'Histoire', ''),
(3, 'Salut', 'lol');

-- --------------------------------------------------------

--
-- Structure de la table `mission_status`
--

CREATE TABLE IF NOT EXISTS `mission_status` (
  `id_status` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `mission_status`
--

INSERT INTO `mission_status` (`id_status`, `name_status`) VALUES
(1, 'Mission non lancée'),
(2, 'Mission en attente de lancement'),
(3, 'Mission en phase de test'),
(4, 'Mission en direction de l''objectif'),
(5, 'Mission arrivé sur l''objectif en attente d''ordre'),
(6, 'Mission en action'),
(7, 'Mission a terminé le précédent ordre, en attente d''un nouvelle ordre'),
(8, 'Mission en cours de retour sur Terre'),
(9, 'Mission arrivé sur Terre');

-- --------------------------------------------------------

--
-- Structure de la table `personnel_auction`
--

CREATE TABLE IF NOT EXISTS `personnel_auction` (
  `id_auction_personnel` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_seller_auction_personnel` int(10) unsigned NOT NULL,
  `id_personnel` int(10) unsigned NOT NULL,
  `time_start_auction_personnel` bigint(20) unsigned NOT NULL,
  `time_end_auction_personnel` bigint(20) unsigned NOT NULL,
  `price_start_auction_personnel` bigint(20) unsigned NOT NULL,
  `price_current_auction_personnel` bigint(20) unsigned NOT NULL,
  `id_buyer_auction_personnel` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_auction_personnel`),
  KEY `id_seller_auction_personnel` (`id_seller_auction_personnel`),
  KEY `id_personnel` (`id_personnel`),
  KEY `id_buyer_auction_personnel` (`id_buyer_auction_personnel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `personnel_list`
--

CREATE TABLE IF NOT EXISTS `personnel_list` (
  `id_personnel` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_personnel` varchar(255) NOT NULL,
  `id_type_personnel` int(10) unsigned NOT NULL,
  `reputation_personnel` int(10) unsigned NOT NULL,
  `skill1_personnel` int(10) unsigned NOT NULL,
  `skill2_personnel` int(10) unsigned NOT NULL,
  `skill3_personnel` int(10) unsigned NOT NULL,
  `status_personnel` int(10) unsigned NOT NULL,
  `owner_personnel` int(10) unsigned DEFAULT NULL,
  `salaire_personnel` bigint(20) unsigned NOT NULL,
  `valeur_personnel` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_personnel`),
  KEY `id_type_personnel` (`id_type_personnel`),
  KEY `owner_personnel` (`owner_personnel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `personnel_list`
--

INSERT INTO `personnel_list` (`id_personnel`, `name_personnel`, `id_type_personnel`, `reputation_personnel`, `skill1_personnel`, `skill2_personnel`, `skill3_personnel`, `status_personnel`, `owner_personnel`, `salaire_personnel`, `valeur_personnel`) VALUES
(5, 'Angeline Noeux', 2, 93, 12, 16, 14, 0, NULL, 4200, 294000),
(8, 'Guy Vianden', 3, 82, 12, 12, 16, 0, NULL, 4000, 160000),
(9, 'Ancelin Cotard', 3, 13, 1, 4, 2, 0, NULL, 700, 28000),
(10, 'Gonzague Clémandort', 5, 73, 11, 9, 8, 0, NULL, 2800, 84000),
(13, 'Ariste Paris', 3, 14, 5, 2, 7, 0, NULL, 1400, 56000),
(14, 'Alice Breteuil', 3, 94, 16, 12, 16, 0, NULL, 4400, 176000);

-- --------------------------------------------------------

--
-- Structure de la table `personnel_type`
--

CREATE TABLE IF NOT EXISTS `personnel_type` (
  `id_type_personnel` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_type_personnel` varchar(255) NOT NULL,
  `skill1_type_personnel` varchar(255) NOT NULL,
  `skill2_type_personnel` varchar(255) NOT NULL,
  `skill3_type_personnel` varchar(255) NOT NULL,
  PRIMARY KEY (`id_type_personnel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `personnel_type`
--

INSERT INTO `personnel_type` (`id_type_personnel`, `name_type_personnel`, `skill1_type_personnel`, `skill2_type_personnel`, `skill3_type_personnel`) VALUES
(1, 'Spationaute', 'Réparation/Construction', 'Analyse/Recherche', 'Exploration'),
(2, 'Pilote', 'Fusée', 'Navette', 'Divers'),
(3, 'Scientifique', 'Recherche nouvelle technologie', 'Recherche d''exploration', 'Assemblage'),
(4, 'Hors la loi', 'Piratage', 'Espionnage', 'Terrorisme'),
(5, 'Membre de la sécurité', 'Piratage', 'Espionage', 'Terrorisme');

-- --------------------------------------------------------

--
-- Structure de la table `space_action`
--

CREATE TABLE IF NOT EXISTS `space_action` (
  `id_space_action` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_space_action` varchar(255) NOT NULL,
  `id_space_object_status` int(10) unsigned NOT NULL,
  `cout_space_action` bigint(20) unsigned NOT NULL,
  `time_space_action` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_space_action`),
  KEY `id_space_object_status` (`id_space_object_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `space_object`
--

CREATE TABLE IF NOT EXISTS `space_object` (
  `id_space_object` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_space_object` varchar(255) NOT NULL,
  `depend_space_object` int(10) unsigned NOT NULL,
  `id_type_space` int(10) unsigned NOT NULL,
  `id_zone_space` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_space_object`),
  KEY `depend_space_object` (`depend_space_object`),
  KEY `id_type_space` (`id_type_space`),
  KEY `id_zone_space` (`id_zone_space`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `space_object`
--

INSERT INTO `space_object` (`id_space_object`, `name_space_object`, `depend_space_object`, `id_type_space`, `id_zone_space`) VALUES
(1, 'Soleil', 0, 1, 1),
(2, 'Mercure', 0, 2, 1),
(3, 'Venus', 0, 2, 1),
(4, 'Terre', 0, 2, 1),
(5, 'Mars', 0, 2, 1),
(6, 'Jupiter', 0, 2, 2),
(7, 'Saturne', 0, 2, 2),
(8, 'Uranus', 0, 2, 2),
(9, 'Neptune', 0, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `space_object_event`
--

CREATE TABLE IF NOT EXISTS `space_object_event` (
  `id_space_object_event` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_space_object_event` varchar(255) NOT NULL,
  `description_space_object_event` text NOT NULL,
  `id_space_object` int(10) unsigned NOT NULL,
  `id_space_action` int(10) unsigned NOT NULL,
  `probabilite_space_object_event` int(10) unsigned NOT NULL,
  `point_space_object_event` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_space_object_event`),
  KEY `id_space_object` (`id_space_object`),
  KEY `id_space_action` (`id_space_action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `space_object_status`
--

CREATE TABLE IF NOT EXISTS `space_object_status` (
  `id_space_object_status` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_space_object_status` varchar(255) NOT NULL,
  `step_space_object_status` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_space_object_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `space_object_status`
--

INSERT INTO `space_object_status` (`id_space_object_status`, `name_space_object_status`, `step_space_object_status`) VALUES
(1, 'Non découvert', 0);

-- --------------------------------------------------------

--
-- Structure de la table `space_type`
--

CREATE TABLE IF NOT EXISTS `space_type` (
  `id_type_space` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_type_space` varchar(255) NOT NULL,
  PRIMARY KEY (`id_type_space`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `space_type`
--

INSERT INTO `space_type` (`id_type_space`, `name_type_space`) VALUES
(1, 'Etoile'),
(2, 'Planète'),
(3, 'Satellite'),
(4, 'Planete Naine'),
(5, 'Asteroïde'),
(6, 'Comete'),
(7, 'Objet Transneptunien');

-- --------------------------------------------------------

--
-- Structure de la table `space_zone`
--

CREATE TABLE IF NOT EXISTS `space_zone` (
  `id_zone_space` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_zone_space` varchar(255) NOT NULL,
  PRIMARY KEY (`id_zone_space`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `space_zone`
--

INSERT INTO `space_zone` (`id_zone_space`, `name_zone_space`) VALUES
(1, 'Zone interne du Systeme Solaire'),
(2, 'Zone externe du Systeme Solaire'),
(3, 'Terre'),
(4, 'Hors Systeme Solaire');

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_articlecategories`
--

CREATE TABLE IF NOT EXISTS `tbg3_articlecategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_name` varchar(300) DEFAULT NULL,
  `article_is_category` tinyint(1) DEFAULT '0',
  `category_name` varchar(300) DEFAULT NULL,
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `tbg3_articlecategories`
--

INSERT INTO `tbg3_articlecategories` (`id`, `article_name`, `article_is_category`, `category_name`, `scope`) VALUES
(1, 'Category:Help:Configuration', 1, 'Help', 1),
(2, 'Workflow', 0, 'TheBugGenie:Workflow', 1),
(3, 'CamelCasing', 0, 'Help', 1),
(4, 'WikiFormatting', 0, 'Help', 1),
(5, 'WikiFormatting', 0, 'Help:Howto', 1),
(6, 'ConfigurePermissions', 0, 'Help', 1),
(7, 'ConfigurePermissions', 0, 'Help:Configuration', 1),
(8, 'ConfigurePermissions', 0, 'Help:Howto', 1),
(9, 'VCSIntegration', 0, 'Help', 1),
(10, 'CreatingIssues', 0, 'Help', 1),
(11, 'CreatingIssues', 0, 'Help:Howto', 1),
(12, 'CSVImport', 0, 'Help', 1),
(13, 'Category:Help:HowTo', 1, 'Help', 1),
(14, 'GettingStarted', 0, 'Help', 1),
(15, 'GettingStarted', 0, 'Help:Howto', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_articlefiles`
--

CREATE TABLE IF NOT EXISTS `tbg3_articlefiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `article_id` int(10) unsigned DEFAULT '0',
  `file_id` int(10) unsigned DEFAULT '0',
  `attached_at` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_articlehistory`
--

CREATE TABLE IF NOT EXISTS `tbg3_articlehistory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_name` varchar(255) DEFAULT NULL,
  `old_content` text,
  `new_content` text,
  `reason` varchar(255) DEFAULT NULL,
  `date` int(10) DEFAULT '0',
  `revision` int(10) DEFAULT '0',
  `author` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `tbg3_articlehistory`
--

INSERT INTO `tbg3_articlehistory` (`id`, `article_name`, `old_content`, `new_content`, `reason`, `date`, `revision`, `author`, `scope`) VALUES
(1, 'FrontpageLeftmenu', NULL, 'If you want to put something in this area, edit the FrontpageLeftmenu wiki article.', NULL, 1328610626, 1, 0, 1),
(2, 'WorkflowTransitionView', NULL, '== Introduction ==\nThe workflow transition view is a popup presented to the user / developer so he or she can specify additional properties to be applied to the issue during its transition to the outgoing transition step. This popup can have items such as choosing whether time spent on the issue should be automatically logged, what resolution to pick for an issue, and more.\n\n== Properties ==\nThe list of properties shown in the transition view is defined by the post-transition actions specified on the transition. For example, if the transition doesn''t specify that it will set the resolution to the resolution given by the user, no dropdown for selecting a resolution will be shown. Also, if the resolution field isn''t defined as visible for that project / issue type combination, a message will be displayed to the user, so he/she can choose not to specify that particular field.\n\n== Instant transitions ==\nA transition doesn''t have to specify a view for when it is being applied to an issue. A transition without an associated transition view will be applied instantly.', NULL, 1328610626, 1, 0, 1),
(3, 'Category:Help:Configuration', NULL, 'This is a list of all the available help articles on configuring The Bug Genie.\n\n[[Category:Help]]', NULL, 1328610626, 1, 0, 1),
(4, 'Category:Workflow', '', '', NULL, 1328610626, 1, 0, 1),
(5, 'AboutIssuePrefixes', NULL, '== Prefixes explained ==\nA project can specify a prefix that will be used for all issues created against it. This prefix will then be used in issue numbers, links and descriptions. Because all issues in The Bug Genie are counted against specific projects (this means you can have an issue #1 for "Project 1" and an issue #1 for Project 2), prefixes can be an easy way to quickly distinguish between issues from different projects simply by looking at their issue number.\n\n== Example ==\nSay you have two projects, "Awesome product" and "Crappy product", and you want to use a prefix on issues created against "Crappy product" so you can easily find them in your list of issues. To do this, open up project configuration for "Crappy product" (either by clicking the "edit project" link on the frontpage, project dashboard or on the [[TBG:configure_projects|Configure projects]] page), and select "Yes" for "Enable prefix". Then - in the box below - specify a prefix that will be used (e.g. "CRAP").\n\nNow all issues for this project uses the prefix specified. Issue #1 will be called "CRAP-1", issue #2 "CRAP-2", etc. This is also backwards-compatible, so you can change it any time you want, and it will be valid for all your issues in that project.', NULL, 1328610626, 1, 0, 1),
(6, 'DefaultIssuetypeScheme', NULL, '{{TOC}}\n= Introduction =\nThe Default issuetype scheme is used for projects without a custom issue type scheme set, and defines a default set of visible / required properties on the [[CreatingIssues|Report an issue]] page, as well as on the "view issue" page.\n\n= Overview =\nThis is an overview of the required / visible properties per issue type. \n''''''Note:'''''' If a field has been set (either via a workflow transition, or otherwise), its value will be displayed regardless of its "visible" setting. Remember that the user must also have the permission to set the field in question, and there must be values available for the field to be populated.\n\n''''''Explanation:''''''\n* ''''Reportable'''': Whether the specified field is visible on the reporting page\n* ''''Required'''': Whether this field is required when reporting an issue\n* ''''Additional'''': Whether this is shown in the "additional fields" area, or in the main view when reporting an issue\n* ''''Visible'''': Whether this field is visible on the "view issue" page\n== Bug report ==\n* ''''''Redirects to the reported issue'''''': Yes\n{|\n! Field !! Visible !! Reportable !! Additional !! Required\n|-\n| Title || Yes || Yes || - || Yes\n|-\n| Description || Yes || Yes || - || Yes\n|-\n| Reproduction steps || Yes || Yes || - || Yes\n|-\n| Category || Yes || Yes || - || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Status || Yes || - || - || -\n|-\n| Resolution || Yes || Yes || Yes || -\n|-\n| Priority || Yes || Yes || Yes || -\n|-\n| Severity || Yes || Yes || Yes || -\n|-\n| Estimated time to complete || Yes || Yes || Yes || -\n|-\n| Targetted for milestone || Yes || Yes || Yes || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Percent completed || - || - || - || -\n|-\n| Affected edition(s) || Yes || Yes || - || -\n|-\n| Affected release(s) || Yes || Yes || - || -\n|-\n| Affected component(s) || Yes || Yes || - || -\n|-\n| Time spent working on the issue || Yes || - || - || -\n|-\n| Triaging: user paing || - || - || - || -\n|-\n| Votes || - || - || - || -\n|}\n== Feature request, Enhancement & Idea ==\n* ''''''Redirects to the reported issue'''''': Yes\n{|\n! Field !! Visible !! Reportable !! Additional !! Required\n|-\n| Title || Yes || Yes || - || Yes\n|-\n| Description || Yes || Yes || - || Yes\n|-\n| Reproduction steps || - || - || - || -\n|-\n| Category || Yes || Yes || Yes || -\n|-\n| Reproducability || - || - || - || -\n|-\n| Status || Yes || - || - || -\n|-\n| Resolution || - || - || - || -\n|-\n| Priority || Yes || Yes || Yes || -\n|-\n| Severity || - || - || - || -\n|-\n| Estimated time to complete || Yes || Yes || Yes || -\n|-\n| Targetted for milestone || Yes || Yes || Yes || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Percent completed || Yes || Yes || Yes || -\n|-\n| Affected edition(s) || - || - || - || -\n|-\n| Affected release(s) || - || - || - || -\n|-\n| Affected component(s) || - || - || - || -\n|-\n| Time spent working on the issue || Yes || - || - || -\n|-\n| Triaging: user paing || - || - || - || -\n|-\n| Votes || Yes || - || - || -\n|}\n== Task ==\n* ''''''Redirects to the reported issue'''''': No, loads a new & empty reporting form with a link to the saved issue at the top\n{|\n! Field !! Visible !! Reportable !! Additional !! Required\n|-\n| Title || Yes || Yes || - || -\n|-\n| Description || Yes || Yes || - || Yes\n|-\n| Reproduction steps || - || - || - || -\n|-\n| Category || Yes || Yes || Yes || -\n|-\n| Reproducability || - || - || - || -\n|-\n| Status || Yes || - || - || -\n|-\n| Resolution || - || - || - || -\n|-\n| Priority || Yes || Yes || Yes || -\n|-\n| Severity || - || - || - || -\n|-\n| Estimated time to complete || Yes || Yes || Yes || -\n|-\n| Targetted for milestone || Yes || Yes || Yes || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Percent completed || Yes || Yes || Yes || -\n|-\n| Affected edition(s) || - || - || - || -\n|-\n| Affected release(s) || - || - || - || -\n|-\n| Affected component(s) || - || - || - || -\n|-\n| Time spent working on the issue || Yes || - || - || -\n|-\n| Triaging: user paing || - || - || - || -\n|-\n| Votes || Yes || - || - || -\n|}\n== User story ==\n* ''''''Redirects to the reported issue'''''': No, loads a new & empty reporting form with a link to the saved issue at the top\n{|\n! Field !! Visible !! Reportable !! Additional !! Required\n|-\n| Title || Yes || Yes || - || -\n|-\n| Description || Yes || Yes || - || -\n|-\n| Reproduction steps || - || - || - || -\n|-\n| Category || Yes || Yes || - || -\n|-\n| Reproducability || - || - || - || -\n|-\n| Status || Yes || - || - || -\n|-\n| Resolution || - || - || - || -\n|-\n| Priority || Yes || Yes || - || -\n|-\n| Severity || - || - || - || -\n|-\n| Estimated time to complete || Yes || Yes || - || -\n|-\n| Targetted for milestone || Yes || Yes || - || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Percent completed || Yes || Yes || - || -\n|-\n| Affected edition(s) || - || - || - || -\n|-\n| Affected release(s) || - || - || - || -\n|-\n| Affected component(s) || - || - || - || -\n|-\n| Time spent working on the issue || Yes || Yes || - || -\n|-\n| Triaging: user paing || - || - || - || -\n|-\n| Votes || Yes || - || - || -\n|}', NULL, 1328610626, 1, 0, 1),
(7, 'Workflow', NULL, '{{TOC}}\n= Introduction =\nA workflow is reprecented by [[WorkflowSteps|steps]] and [[WorkflowTransitions|transitions]] that an issue progresses through, thereby defining an issue lifecycle. Steps and transitions can further be customized with validation, conditional access and permission based access to fields to create a setup perfectly tailored to an individual company workflow.\n\nThis defined lifecycle usually represents an internal company setup, or reflects a companys team-based structure, and is usually also anchored in a company or teams development and QA guidelines.\n\nThe Bug Genie comes with a default workflow called [[DefaultWorkflow|"Default workflow"]]. This workflow cannot be edited or removed, and is used as a fallback workflow or when a project doesn''t have a workflow configured. The editing tools for workflow will of course let you copy this default workflow or create a new one to make your own, and everything in other workflows than the builting one can be customized.\n[[Category:TheBugGenie:Workflow]]', NULL, 1328610626, 1, 0, 1),
(8, 'DefaultWorkflow', NULL, '= Overview =\nThe default workflow is used for issue types that does not have a workflow set in the workflow scheme associated with the current project. The default workflow is also used in the default workflow scheme setup.<br>\nThis is an overview of the default workflow setup with its steps and transitions:\n\n{|\n! Step !! Connected status !! State !! Outgoing transitions !! Notes\n|-\n| ''''''New'''''' || ''''New'''' || Open and editable || Investigate issue â†’ Investigating<br>Confirm issue â†’ Confirmed<br>Reject issue â†’ Rejected<br>Accept issue â†’ In progress<br>Resolve issue â†’ Closed || This is the default, initial step all issues start in\n|-\n| ''''''Investigating'''''' || ''''Investigating'''' || Open and editable || Request more information â†’ New<br>Confirm issue â†’ Confirmed<br>Reject issue â†’ Rejected<br>Accept issue â†’ In progress || \n|-\n| ''''''Confirmed'''''' || ''''Confirmed'''' || Open but not editable || Accept issue â†’ In progress <br>Assign issue â†’ In progress <br>Resolve issue â†’ Closed || \n|-\n| ''''''In progress'''''' || ''''Being worked on'''' || Open but not editable || Reject issue â†’ Rejected <br>Mark ready for testing â†’ Ready for testing <br>Resolve issue â†’ Closed || \n|-\n| ''''''Ready for testing'''''' || ''''Ready for testing / QA'''' || Open but not editable || Resolve issue â†’ Closed <br>Test issue solution â†’ Testing || \n|-\n| ''''''Testing'''''' || ''''Testing / QA'''' || Open but not editable || Accept issue solution â†’ Closed <br>Reject issue solution â†’ In progress || \n|-\n| ''''''Rejected'''''' || ''''Not a bug'''' || Closed and not editable || Reopen issue â†’ New || \n|-\n| ''''''Closed'''''' || - || Closed and not editable || Reopen issue â†’ New || This workflow step is not linked directly to a status\n|}\n\nSome things to note about the default workflow:\n* It is not possible to directly move an issue from new to closed - it has to either be accepted or assigned first. You can however move it directly to rejected if it is invalid or duplicate\n* The ''''Closed'''' step is not linked to a status, but has two valid statuses - ''''''Closed'''''' and ''''''Postponed''''''', NULL, 1328610627, 1, 0, 1),
(9, 'WorkflowSteps', NULL, '== Workflow step explained ==\nA workflow consists of several steps, together defining the possible states an issue can be in during the issue lifecycle. A step is linked to the following three separate properties of an issue:\n* Whether the issue is editable\n* Whether the issue is closed\n* (optionally) The issue status ("Fixed", "In progress", "Testing", etc)\n\n== Changing issue workflow step ==\nAn issue can only enter a new step via a [[WorkflowTransition|transition]] (either instantly or via a [[WorkflowTransitionView|transition view]]), which often defines other properties that needs to be set in order for the issue to progress to the defined step. For the issue to progress, a transition from the current step to any other step in the workflow needs to be defined in the workflow itself.\n\nAn example of this is such as when an issue is in the initial step (often linked with the status "New"), a transition can take it to the "Confirmed" step (often linked with the corresponding "Confirmed" status). During this transition, a user or developer may be asked to provide additional details to validate the transition. How transitions work are explained in more detail in the [[WorkflowTransitions|transitions]] documentation.\n\nThe workflow step is not visible anywhere on the issue - the way to tell it is usually to look at its state (open / closed) and the issues status field. This will give you an overview of the issues current position in the defined workflow.\n\n== Step actions ==\nA step does not have any specific actions associated with it. Because a step is a "state", not the transition between states, the step definition is limited to the three properties mentioned above, and does not include actions.\n\n== Defining a workflow step ==\nIf you''re using a non-default workflow, new steps can be added from the workflow configuration page. This page lists all steps in the specified workflow, and lets you edit the step and/or add outgoing [[WorkflowTransitions|transitions]] to it, leading to another step.', NULL, 1328610627, 1, 0, 1),
(10, 'CamelCasing', NULL, '''''''!CamelCase'''''' (also spelled "camel case") or ''''medial capitals'''' is the practice of writing compound words or phrases in which the elements are joined without spaces, with each element''s initial letter capitalized within the compound, and the first letter can be upper or lower case â€” as in !LaBelle, !BackColor, !MacGyver, or iPod.\n\nThe name comes from the uppercase "bumps" in the middle of the compound word, suggestive of the humps of a camel.\n\nThe practice is also known by many other names, such as ''''''!BumpCaps'''''', ''''''!BeefCaps'''''', ''''''!CapWords'''''' and ''''''!WikiWords''''''.\n\n''''''This is a short introduction to the subject, based on the [[Wikipedia:CamelCase|Wikipedia article]] about camel case.\n[[Category:Help]]', NULL, 1328610627, 1, 0, 1),
(11, 'LoremIpsum', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus, elit vel auctor tincidunt, magna orci elementum enim, eget luctus nisl enim et velit. Nullam sit amet est augue, ut tincidunt diam. Aliquam aliquam enim et turpis sagittis imperdiet. Donec in augue vitae quam facilisis malesuada a tempus orci. Quisque consectetur scelerisque sapien vel consectetur. Nam at congue magna. Aliquam commodo ornare nisi, vitae malesuada nunc congue in. Duis id est orci. Donec a ullamcorper tellus. Morbi non neque non augue aliquam porta. Sed posuere volutpat quam vitae dignissim. Nullam eu ipsum erat. Morbi nec arcu eget enim condimentum sollicitudin. Ut dui lectus, rhoncus et euismod et, feugiat eu nisi. Cras facilisis, nisl quis venenatis elementum, neque justo vehicula odio, id venenatis sapien neque vel nulla. In quis turpis non orci convallis pharetra. Aliquam erat volutpat.\n\nCras urna lectus, iaculis non venenatis vel, egestas quis est. Aliquam laoreet, neque nec bibendum dignissim, nulla felis hendrerit est, nec volutpat nisl lectus vitae enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer laoreet risus in massa sollicitudin quis vulputate nulla pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse semper, nunc consequat imperdiet convallis, quam tortor euismod mi, ac cursus sem neque sed elit. Vestibulum egestas tempor elit vel imperdiet. Donec lacinia, nulla et tempor facilisis, neque purus sollicitudin nunc, non venenatis leo eros sed ipsum. Cras lacus felis, auctor at euismod quis, vehicula vel est. Sed sit amet mauris ac felis imperdiet faucibus. Nam et euismod erat. Duis varius, dui in molestie dignissim, turpis nulla sollicitudin erat, in porta erat lacus ac eros. Phasellus consequat elementum pellentesque. Sed pharetra condimentum sagittis. Suspendisse metus leo, adipiscing nec congue id, interdum sit amet dui. Phasellus commodo ante ac augue imperdiet vitae volutpat nisl posuere. Integer vitae urna mi, et tincidunt orci. Nulla mattis ultrices dui vitae vestibulum. Donec felis tortor, lobortis vitae euismod in, laoreet quis augue.\n\nMaecenas a felis urna. Cras tincidunt ligula id nisi aliquam pretium. Mauris at nibh at arcu molestie scelerisque a a orci. Nam quam arcu, vulputate et tristique at, dapibus sit amet eros. Nam scelerisque massa posuere dui fermentum eu condimentum erat ultrices. Cras ante diam, mollis sed pretium imperdiet, pretium nec enim. Proin blandit justo tortor, eget sollicitudin magna. Donec rhoncus commodo nibh eget pulvinar. Nunc bibendum tristique arcu a dapibus. Maecenas ultricies consequat dolor et dignissim. Nulla nec velit in magna cursus rhoncus a vitae eros. Maecenas pretium nisl id risus facilisis sed dignissim quam tristique. Nunc consequat, elit ut consectetur blandit, dolor quam vehicula sem, non molestie ipsum nunc pellentesque ipsum. Aliquam erat volutpat. Donec ante massa, bibendum at dapibus a, facilisis nec metus. Nunc tristique sodales erat. Sed laoreet orci sed odio molestie quis varius magna rhoncus.\n\nDonec laoreet luctus lacus dictum commodo. Donec dignissim auctor varius. Nulla nunc metus, egestas sit amet vestibulum sed, fermentum nec ante. Ut in ultrices libero. Donec tortor velit, suscipit a tempor eu, auctor accumsan elit. Donec sed nisl enim. Morbi sagittis interdum quam in lacinia. In fermentum luctus turpis vitae vulputate. Nulla tincidunt semper neque, ut tincidunt nibh tincidunt sed. Maecenas tellus dui, bibendum sed convallis id, varius et mi. Nulla facilisi. Nulla semper, leo non tristique volutpat, ipsum arcu vestibulum enim, bibendum mattis urna nulla vel dolor. Cras nibh lorem, ullamcorper vitae ultricies eu, consequat sed est.\n\nVestibulum varius tempor nisi sed tempor. In suscipit luctus tellus porttitor sollicitudin. Sed in arcu turpis. Donec eu neque non est commodo porttitor. Aliquam erat volutpat. Donec varius, sem nec rutrum commodo, ipsum est sollicitudin dui, sed tempus purus est in felis. Aliquam sodales, velit vitae accumsan molestie, nulla lectus lobortis erat, vehicula ultrices dolor ipsum nec ipsum. Nunc sed turpis sed magna rhoncus lobortis ut ac lectus. Nunc a felis a eros condimentum fringilla. Donec ultrices aliquet leo, ac venenatis quam pharetra at. Pellentesque sodales condimentum felis a porta. Integer justo elit, ullamcorper eget vulputate ut, tincidunt non velit. Donec at urna mi, eget ultricies metus. Duis feugiat pulvinar metus, nec laoreet sem pharetra at. Maecenas quis mi sed lorem euismod convallis eget non quam. Sed vestibulum porttitor arcu, et rutrum est cursus vel. Fusce posuere pellentesque arcu vitae ullamcorper. Nulla facilisis hendrerit ligula, tempus condimentum eros imperdiet et. ', NULL, 1328610627, 1, 0, 1),
(12, 'LoginIntro', NULL, '= Welcome to The Bug Genie =\nPlease fill in your username and password below, and press "Continue" to log in.<br>\nIf you have not already registered, please use the "Register new account" tab to do so.', NULL, 1328610627, 1, 0, 1),
(13, 'WikiFormatting', NULL, '{{TOC}}\nThe Bug Genie uses a formatting technique called "Wiki formatting", most commonly known from Wikipedia (!MediaWiki).\nThe Bug Genie wiki tries to stay as close to the !MediaWiki syntax as possible, so if you''re familiar with that syntax you should feel right at home.\n\nWiki formatting is well explained in the [http://en.wikipedia.org/wiki/Help:Wikitext_examples Wikipedia help article], but can be easily summarized as a simple method of formatting your text by placing certain characters.\nWe will show you the most common syntax below.\n\n== Line breaks and text formatting ==\nYou can use line breaks to space out the text and make it more readable in the editor. One line break will not be transformed into a line break when the page is \ndisplayed. A blank line makes a new paragraph. You can put <br> to make a hard line break, but be careful with this as it might break layout.\n  This text is easy to\n  read because it is\n  split into several lines\n  but it will only show up as one line on the page\nThis text is easy to\nread because it is\nsplit into several lines\nbut it will only show up as one line on the page\n\nText can be formatted by putting ''-characters around the text you want to format. Here are some examples:\n\n  ''''this is some italic text''''\n''''this is some italic text''''\n  ''''''this is some bold text''''''\n''''''this is some bold text''''''\n  ''''''''''this is some bold and italic text''''''''''\n''''''''''this is some bold and italic text''''''''''\n\nYou can also use simple html formatting for things like underlined and strikethrough:\n\n  <strike>strikethrough</strike>\n<strike>strikethrough</strike>\n  <u>underlined</u>\n<u>underlined</u>\n\n== Headings ==\nTo specify headings, use equals-character around the line you want to be a heading. The number of equals-characters you put around the line decides how big the heading is (1 is biggest, 6 is lowest).\n  = I''m a big header =\n  == I''m a fairly big header ==\n  ===== I''m a very small header =====\nHeadings will automatically appear in the table of contents (if you have one).\n\n== Creating links between documents ==\nTraditionally, wikis have used something called [[WIKIPEDIA:CamelCase|Camel Casing]] to create links between documents. CamelCasing means that you put any word or combination of words as a "''''''camel cased''''''" word, and then the wiki will create a link to the document with that name for you automatically. If the page you are trying to link to isn''t yet created, the link will still be displayed, and you can click it to start editing the new article.\n\nIf you want to write a word with more than one capital letter, use an exclamation mark infront of it - that will stop it from being turned into a link automatically. The support for "camel casing" can be turned off in the wiki settings.\n\nYou can also use the double square bracket link format to link to internal pages, if you don''t want to use the CamelCasing style:\n  [[InternalPage]]\n[[InternalPage]]\n  [[Myproject:MainPage|Myproject wiki frontpage]]\n[[Myproject:MainPage|Myproject wiki frontpage]]\n\nWith this method you can also link to internal pages in The Bug Genie, by either specifying the relative url (like "/configure" points to the configuration page and "/wiki" points to the wiki), or use the internal route namespace "TBG:" (this has the added benefit of being safe if the link ever changes in a future release).\nUnfortunately, the list of routes used in The Bug Genie is quite long, but a few examples are listed below:\n\n  [[/about|About The Bug Genie]]\n[[/about|About The Bug Genie]]\n  [[/logout|Log out]]\n[[/logout|Log out]]\n  [[TBG:configure_projects|Configure projects]]\n[[TBG:configure_projects|Configure projects]]\n  [[TBG:configure_modules|Modules configuration]]\n[[TBG:configure_modules|Modules configuration]]\n\nThe Bug Genie wiki also lets you link directly to [http://www.wikipedia.org Wikipedia] articles by using the WIKIPEDIA namespace:\n\n  [[WIKIPEDIA:CamelCase]]\n[[WIKIPEDIA:CamelCase]]\n  [[WIKIPEDIA:CamelCase|Wikipedia article]]\n[[WIKIPEDIA:CamelCase|Wikipedia article]]\n\n''''''Remember - if all this sound complicated, you can always just use CamelCasing (provided it''s not disabled)''''''\n\n== Links ==\nIn addition to linking between internal pages with double square brackets, you can link to external pages with single square brackets. Any URLs inside your text will also automatically be turned into clickable links, but you can also put a pair of square brackets around the link to make it clickable. In addition, you can add a title if you want to:\n\n  http://www.thebuggenie.com\nhttp://www.thebuggenie.com\n  [http://www.thebuggenie.com]\n[http://www.thebuggenie.com]\n  [http://www.thebuggenie.com The Bug Genie website]\n[http://www.thebuggenie.com The Bug Genie website]\n\n== Horizontal line ==\nIf you want to put a horizontal line in the document, use four dashes:\n\n  ----\n----\n\n= Advanced usage =\n\n== Tables ==\nYou can add tables to your wiki page by using the table layout for defining rows, columns and headers. An example table (without headers) looks like this:\n  {|\n  |-\n  | Column 1 || Column 2 || Column 3\n  |}\n{|\n|-\n| Column 1 || Column 2 || Column 3\n|}\n\nAn example table ''''''with headers'''''' looks like this:\n  {|\n  ! Header 1 !! Header 2 !! Header 3\n  |-\n  | Column 1 || Column 2 || Column 3\n  |}\n{|\n! Header 1 !! Header 2 !! Header 3\n|-\n| Column 1 || Column 2 || Column 3\n|}\n\nA table must start with a table opener, and end with a table closer:\n\n''''''Table opener:''''''\n  {|\n''''''Table closer:''''''\n  |}\n\nIf you want to add header columns to your table, use the header row formatting, which is similar to the "normal" column formatting, but with an exclamation mark separator character:\n  ! Header 1 !! Header 2 !! Header 3\n\nEvery new row starts with a row indicator, which looks like this:\n  |-\n\nThe first column in a row starts with a single or double pipe character, and every new column is separated with a double pipe separator. These are both valid columns:\n  | Column 1 || Column 2 || Column 3\nand:\n  || Column 1 || Column 2 || Column 3\n\n\n== Categories ==\nYour article can be in none, one or more categories. You specify which category your article is in by using the Category namespace link:\n  [[Category:Mycategory]]\n\nThis won''t show up on the page, and you usually place this at the very end of your wiki page when you edit it. Categories will show up in the "Categories" area at the bottom of the article.\n\nIf you want to link to a Category, instead of put your article ''''''in'''''' a category, put a colon in front of the word "Category":\n  [[:Category:Mycategory]]\n[[:Category:Mycategory]]\n\nA category can have one or more ''''subcategories''''. You put one category in another category by putting the Category link shown above ''''inside the subcategory article''''.\n\n''''''Ex:'''''' after having created the page [[:Category:Actors]], create the page [[:Category:MaleActors]], and at the bottom of that article, put:\n  [[Category:Actors]]\nThis will make [[:Category:MaleActors]] a subcategory of [[:Category:Actors]]. That means [[:Category:MaleActors]] will show up in the "Subcategories" list on the [[:Category:Actors]] page.\n\nBefore you can see the content of a category - its subcategories or pages in that category, the category must be created. To create a category, put an article in a category, click the category link at the bottom of the article, and create the page.\nA category page is in essence just any other wiki article, but with the list of subcategories (if any) and pages in that category.\n\n== Redirecting from one page to another ==\nIf you want to make one page redirect directly to another page, use the ''''#REDIRECT'''' keyword, followed by the article to redirect to, like this:\n #REDIRECT [[PageToRedirectTo]]\n\nThe ''''#REDIRECT'''' must be the first thing on the first line, and must be followed by a space and the article name in the format specified above. This will not work:\n This is some content\n #REDIRECT [[AnotherPage]]\n\nNeither will this:\n  #REDIRECT [[AnotherPage]]\n(notice the space in front of ''''#REDIRECT'''')\n\n\n== Images ==\nYou can show uploaded images by using the same notation as for links, using the Image namespace:\n [[Image:image1.png]]\n\nThe Image: namespaced link accepts several parameters, separated by a pipe (|), and the right-most parameter is always the description. This means that if you want to specify any parameters, you must always put a description as the last parameter:\n [[Image:image1.png|Description here]]\n [[Image:image1.png|thumb|Description here]]\n\nImages are shown full-size by default, but you usually probably want to show a thumbnail of the image instead. To do this, use the "thumb" parameter:\n [[Image:image1.png|thumb|Image description]]\n\nImages float right by default, but this can also be specified as a parameter, by specifying "left" as a parameter on the Image tag:\n [[Image:image1.png|This image floats right]]\n [[Image:image1.png|right|This image also floats right]]\n [[Image:image1.png|left|This image floats left]]\n\n== Completely unparsed text ==\nIf you have some text that you don''t want to be automatically parsed at all, put them inside <nowiki></nowiki> tags:\n  <nowiki><nowiki>some text that shouldn''t be parsed [[a|link]] and ''''''bold text''''''</nowiki></nowiki>\n<nowiki>some text that shouldn''t be parsed [[a|link]] and ''''''bold text''''''</nowiki>\n\n== Lists ==\nTo create a list, use the star character for a bulleted list, hash character for a numbered (ordered) list, or a combination:\n\n  * One bullet\n  * Another ''''''bullet''''''\n  *# a list item\n  *# another list item\n  *#* unordered, ordered, unordered\n  *#* again\n  *# back down one\n* One bullet\n* Another ''''''bullet''''''\n*# a list item\n*# another list item\n*#* unordered, ordered, unordered\n*#* again\n*# back down one\n\n\n== Variables ==\nThere are some shortcuts available for outputting special data such as the current date, hour, day, etc. By putting special keywords enclosed with two { and }-characters on each side, The Bug Genie will automatically translate this for you.\n\n''''''Here are some examples'''''':\n  {{CURRENTMONTH}}\n{{CURRENTMONTH}}\n  {{CURRENTDAY}}\n{{CURRENTDAY}}\n  {{SITENAME}}\n{{SITENAME}}\n\nThe following keywords are available for automatic substitution: CURRENTMONTH, CURRENTMONTHNAMEGEN, CURRENTMONTHNAME, CURRENTDAY, CURRENTDAYNAME, CURRENTYEAR, CURRENTTIME, NUMBEROFARTICLES, PAGENAME, NAMESPACE, SITENAME, SITETAGLINE.\n\n== Table of contents ==\nYou can get a table of content on your page (like the one in the top right on this page) by using the TOC variable the same way as the "normal" variables above. It doesn''t matter where you put this variable in your document, it will always be displayed in the top right corner.\n\n== Linking to issues ==\nIf you want to link to an issue, use one of the following keywords: ''''''bug'''''', ''''''issue'''''', ''''''ticket'''''', ''''''story'''''', followed by the issue number:\n  ticket #123\nticket [http://sample.com/product/issue/123 #123 - title from ticket here]\n  bug #200\nbug [http://sample.com/product/issue/200 #200 - serious bug]\n  issue TBG-24\nissue <strike>[http://sample.com/product/issue/TBG-24 TBG-24 - issue title]</strike>\n\nThe links will automatically include things such as the title, and a strikethrough if the issue is closed.\n\n== Examples / comments ==\nIf you want to put some text on the page that shouldn''t be interpreted (like the examples above), put two spaces in front of each line.\n    I''m an example because I have two spaces in front of me (actually I have four, but that''s just so you can see the two spaces)\n    This is a second line\n\n== Syntax highlighting ==\n\nIf you have a code sample you want to place on a page, you can use syntax highlighting to place line numbers, and color the code depending on what language it is.\n\nTo do this, surround your code in <nowiki><source></source></nowiki> tags. By default this will use the default language and line numbering settings set by the administrator. You can also override these parameters to match your code settings.\n\n=== Code language ===\n\nTo set the language of the code, simply specify it as a property of the source tag, such as <nowiki><source lang="php">echo(''hi'');</source></nowiki>. If you specify an language that does not exist then no colors will be applied, but there are over 130 language definitions available so chances are you will find the right one. A few of the odd ones are ''''''html4strict'''''' for HTML code, and ''''''dos'''''' for a DOS batch file.\n\n=== Line numbering ===\n\nThree parameters are available to set the line numbering. The first of these is called ''''''line'''''', and it sets the style of numbering that is performed. The following styles are available:\n* ''''''GESHI_FANCY_LINE_NUMBERS'''''' or ''''''highlighted'''''' - Line numbering with a highlighted row at a regular interval (this interval is configurable)\n* ''''''GESHI_NORMAL_LINE_NUMBERS'''''' or ''''''normal'''''' - Normal line numbers with no highlighting\n* ''''''Anything else'''''' - No numbers\nYou can also specify the number at which the numbers count from. This is useful if you have taken a snippet from line 1000 in a file, and you want to make the snippet show this so that its easier to match the two up. To do this, the parameter is ''''''line start="''''number''''"'''''' (there is a space between line and start), and it will start counting from ''''number''''.\n\nFinally, if you choose ''''''GESHI_FANCY_LINE_NUMBERS'''''' or ''''''highlighted'''''', every ''''n''''th row is highlighted. To set a value for ''''n'''', you use the highlight property. For example if you set it to 10, then every 10th row will be highlighted.\n\nBelow is an example of all of the properties in use.\n\n<nowiki>\n<source lang="php" line="highlighted" line start="54" highlight="3">\n<?php\nfunction do_something($stuff) {\necho($stuff);\n$mythings = array();\n$mythings[] = $stuff;\n}\n?>\n</source>\n</nowiki>\n\n<source lang="php" line="highlighted" line start="54" highlight="3">\n<?php\nfunction do_something($stuff) {\necho($stuff);\n$mythings = array();\n$mythings[] = $stuff;\n}\n?>\n</source>\n\n[[Category:Help]][[Category:Help:Howto]]', NULL, 1328610627, 1, 0, 1),
(14, 'ConfigurePermissions', NULL, '= Setting up and understanding permissions in The Bug Genie =\n{{TOC}}\n== How are permissions defined? ==\nPermissions are defined on a 4-level basis, in the following order:\n# ''''''Global permissions'''''' - applies to all users, groups and teams\n# ''''''Group-specific permissions'''''' - applies only to members in that usergroup\n# ''''''Team-specific permissions'''''' - applies to any member of that team, and you can be a member of multiple teams\n# ''''''User-specific permissions'''''' - applies to the user it''s specified for\nEach new level in the above list overrides the previous one. That means if you''ve set "''''Report issues''''" to "''''Allowed''''" for "''''''''''Everyone''''''''''" and "''''Denied''''" for the "''''''''''Guest group''''''''''", then the group permission will override the global permission for all users in the guest group. In addition to this, The Bug Genie has a "''''Permissive''''" or "''''Restrictive''''" security setting which means if you trust all your users you can set this setting to "''''Permissive''''" and everyone will be able to do pretty much anything unless specifically denied. The only exception here is access to the configuration pages, where you must have explicit "''''Allowed''''" access. This gives you fine-grained control over what users, groups and teams can do.\n\n== Permissions hierarchy ==\nMany settings are grouped, and most specific settings (ex: "''''Can set issue priority''''") are only available as sub-permissions of more general groups. An example is the "''''Can edit basic information on your own issues''''" permission. This has three sub-settings, "''''Can edit title''''", "''''Can edit descrition''''" and "''''Can edit reproductions steps''''". Using "''''''''''Everyone''''''''''" as an example, if you set the top setting to "''''Allowed''''", everyone can edit basic information (title, description and reproduction steps) for issues they create. If you want to modify this, say you only want them to change the title, then you can do this two ways:\n# Set "''''Can edit description''''" and "''''Can edit reproduction steps''''" to "''''Denied''''". They will still have the basic "''''Can edit basic information (...)''''" setting, which means the title is editable, but the "''''Denied''''" settings for editing description and reproduction steps has higher priority, which means they will not be editable.\n# Unset the "''''Can edit basic information (...)''''" permission, and only set "''''Can edit title''''" to "''''Allowed''''".\nThis grouping is used several places, and is indicated by a little list icon next to the permission icon in the permissions overview. Clicking the list icon brings up all permissions in that group and lets you specify a more fine-grained permission in the group if desired.\n\n== Project-specific permissions ==\nAdding to all this, many permissions can be set on a project-specific basis. You might want to only let people report issues for a certain project, or restrict people from doing something on a specific project. The "''''Project-specific permissions''''"-tab in the permissions overview lets you define this. The same rules apply as above, but if a project-specific permission is set, then it will take presedence over the global permission.\n\n== Page access permissions ==\nYou can limit access to certain pages if you want to restrict users from accessing them. Some of these settings are available as both global and project-specific settings - such as the project-specific pages. This setting is "''''Permissive''''" by default and cannot be changed.\n\n== Datatype permissions ==\nEvery datatype (status, priority, category, etc) also have their own permissions available for each defined value. This setting is permissive by default (and cannot be changed), but lets you control who can set which field to a certain value. Even if you set a datatype field permission to "''''Denied''''" the user will still be able to ''''see'''' the field value, but they cannot set it to that value if the permission is "''''Denied''''". This can be useful in a workflow setting where you only want certain users to be able to mark issues as "''''Fixed''''", "''''Closed''''", etc.\n''''''These permissions are also available for all custom datatypes''''''.\n\n== Nice to know about the permissions handling ==\n* There is one important exception in effect when you''re reporting an issue: If a field is set to "''''''Required''''''" in the reporting process, then the user will have access to this field, even if it set in the permissions manager that they are not allowed to change it. This is to stop the reporting wizard from failing if you''re missing access to a required field. They still need access to a field value to set it, so if all field values are set to "''''Denied''''" then they won''t have any options to choose from. They will also not be able to change it after the issue has been reported if they don''t have access to do so.\n* If a user has read or write access to any of the configuration pages, they will automatically see the "''''Configure''''" link in the menu. If they don''t have access to any configuration page, this link will be hidden.\n* The permissions setting dialog will always show if a setting is permissive or restrictive by default, by showing a faded out "''''Denied''''" or faded out "''''Allowed''''" icon.\n\n[[Category:Help]][[Category:Help:Configuration]][[Category:Help:Howto]]', NULL, 1328610627, 1, 0, 1),
(15, 'VCSIntegration', NULL, '{{TOC}}\n= VCS Integration =\nThe Bug Genie includes the VCS Integration module, which allows you to link your projects in The Bug Genie to a source code repository. This allows your commits to update issues, as well as access the repository viewer from The Bug Genie. However, before you can start, you need to set up the module - both globally and for each project using the module.\n\nPlease note that the git hook does not support the web access method (explained later), only the direct access method. In addition, a Mercurial hook is available, though it is not included due to license restrictions. Please refer to The Bug Genie website to obtain it.\n\n= Setting up =\n=== Global settings ===\nThere are two methods for VCS hooks (the code that interfaces between your source code repository and The Bug Genie) to communicate with your installation. The methods are ''''''direct access'''''' and ''''''http access''''''.\n\n==== Direct access ====\nIn direct access, the repository exists on the same server as The Bug Genie, or the hook can use SSH or other associated systems to access the server that The Bug Genie is hosted on. Therefore the user that VCS hooks are executed as will need access to The Bug Genie''s files, as well as a PHP executable. You will also require the CLI version of PHP installed.\n\nIn each hook, you will need to enable direct mode, and set the path to PHP and The Bug Genie''s tbg_cli file. You will also need to set the project ID, which can be found on the VCS configuration page. Please refer to each hook''s documentation (it may be included in the hook file itself) to see how to do this.\n\nThen, in the VCS Integration general settings tab, on the Configuration page, choose ''''''Direct access'''''' and click Save. You can then set up your projects.\n\n==== HTTP access ====\nAnother option would be to use HTTP access, where the hook will use HTTP to access a page on your installation of The Bug Genie, which will cause the checkin to be recorded. Choose this option if you are not able to use the direct method. You will also need this method to interface The Bug Genie with github.\n\nYou will need to configure hooks to use this mode, as well as set the project ID and URL to access. Refer to hook documentation for doing this (this may be included in the hook itself). Please also set a secure passkey to prevent unauthorized commits. This will need to be the same for every VCS, and set in each hook.\n\nYou will then need to choose ''''''HTTP access'''''' on the VCS Integration general settings tab. In addition, you will need to enter the passkey you set earlier on this screen.\n\nAfter saving these settings, you can then set up each project.\n\n==== Github support ====\nIf you wish to use the github hook, please set up HTTP access as previously discussed. You will then need to set up your Github project''s post-receive hook to contact The Bug Genie.\n\nTo do this, go to your project''s service hooks page on github, and set a Post-recieve URL to point to the following URL:\n  http://www.your-tbg-site.com/vcs_integration/report/PROJECTID/github/?passkey=PASSKEY\nYou will need to set the hostname and path correctly as appropriate, as well as replacing PASSKEY with the passkey you set, and PROJECTID with the ID number of the project, which can be found on the projects tab of VCS Integration configuration.\n\nAny commits which follow the rules for being picked up (see below) will then be recorded against their respective issues on push, though commits which make no changes to the filesystem (i.e. nothing added, removed or modified) will not be recorded in this release of VCS Integration.\n\n==== Gitorious support ====\nIf you have a locally hosted Gitorious server, then you can integrate that with The Bug Genie.\n\nAgain, set a post-receive hook as per your documentation, the URL for which is:\n  http://www.your-tbg-site.com/vcs_integration/report/PROJECTID/gitorious/?passkey=PASSKEY\n\nPlease note that the Gitorious support will only create comments and will not record filesystem changes, plus it will not work on the gitorious.com server.\n\n=== Project settings ===\nEach project to use VCS Integration will then require configuration. If a project will not be using VCS Integration, then you can leave its repository URL field empty.\n\nTo set up each project, you need to specify the repository browser you use. This will be used to build the right URLs to be displayed in The Bug Genie. In the ''''URL to repository browser'''' field, you enter the path to the root of the repository browser (i.e. this may be the page where a list of available repository browsers is shown). Finally you enter the repository name in the final box.\n\nAfter pressing save, a ''''''Source code'''''' link will be added to the project dashboard. You can use this link to test to see if the details are correct - if so this link will open the main page of the repository browser for your chosen project.\n\nAfter doing this, the module can be used by committing details as below, and they will show up in a new tab when viewing an issue, with links to view files, diffs, revision info and other details.\n\n= Using the module =\n\nWhen a commit is made which refers to an issue, then the issue will be updated with the commit log and details of every changed file. The Bug Genie will pick up any commits which contain any of the following words, followed by an issue number:\n  bug, issue, ticket, fix, fixes, fixed, fixing, applies to, closes\n  references, ref, addresses, re, see, according to, also see\n\nThe user assigned to the commit will depends on the user who committed it to the VCS. If you are using a VCS where your committer name is in the form "Joe Bloggs <jbloggs@example.com>", for example, then The Bug Genie will search for users with the email as provided.\n\nIf a user can not be found, or if there is no email, then The Bug Genie will take the name part (or username) and search against the Full Name field. Failing that, we then search against the friendly name and then finally the user name. If still no user can be found then no user will be recorded for the commit.\n\nLinks on the project dashboard to view the source code repository is added upon set up, and each commit will have a link to view the commit details, a log of commits, diffs and links to view files.\n[[Category:Help]]\n', NULL, 1328610627, 1, 0, 1),
(16, 'Configuration', NULL, '#REDIRECT [[Category:Help:Configuration]]', NULL, 1328610627, 1, 0, 1);
INSERT INTO `tbg3_articlehistory` (`id`, `article_name`, `old_content`, `new_content`, `reason`, `date`, `revision`, `author`, `scope`) VALUES
(17, 'CreatingIssues', NULL, '{{TOC}}\n= Introduction =\nCreating issues in The Bug Genie requires one or more existing projects, as all issues are filed against projects.\n\n= How to start creating an issue =\nWhen a project has been created, an issue can be filed by either using the "Report an issue" tab inside the project space, or by using the "Report an issue" button on the frontpage, if the project is visible there. Both methods will let you pick an issue type directly via a dropdown menu. If you don''t specify an issue type (by clicking directly on the "Report an issue" links, you can specify as the first step on the reporting page.\n\n= Specifying issue details =\nWhen you report an issue, you have to specify the details you want to be saved with the issue when it is reported. By default these details include items such as a descriptive title, a longer description about the issue and a reproduction step list. \n\nThe available and required fields you have to fill out vary depending on the type of issue you are reporting and the associated IssuetypeScheme. The only field that will always be available (and required) is the descriptive title, other fields may vary. A short description of each possible field follows:\n\n=== Title ===\nThis is a short (max 150 char) but descriptive overview of the issue you''re filing. It should be descriptive enough to identify the issue, but short enough to fit on one line.\n* Bad example: ''''The application crashes constantly''''\n* Good example: ''''Whenever I let my cat sleep on the keyboard, the application crashes after about two hours''''\n\n=== Description ===\nA thorough description of the issue. Use as many words as is needed to describe the issue. Pretend that you''re describing it to your mom.\n* Bad example: ''''The stupid application crashed on me! Just as I was about to send my document!"\n* Good example: ''''I opened up the application to write a letter to my aunt. I had been writing for two hours non-stop, and was about to send it, when I tripped and accidentally hit some keys on my keyboard and the application crashed with a message saying "Invalid key combination: CTRL+ALT+PAGEUP+F+S+L+G"''''\n\n=== Reproduction steps ===\nA step-by-step guide to reproducing the issue you''re reporting. Try to be as descriptive as possible and include any and all steps that would be necessary to reproduce the issue for someone that has never experienced it.\n* Bad example: ''''The application just randomly crashes, and I have no idea when, where or why. It''s usually dark and I don''t know what I''m doing''''\n* Good example: \n# Open Application\n# Click "New document"\n# Type some text\n# Accidentally trip and hit the key combination CTRL+ALT+PAGEUP+F+S+L+G\n# Observe application crashing\n\n== Additional details ==\nDepending on the [[IssuetypeSceme|issue type scheme]], there might be additional fields available in the grey area below the main reporting area (known as the "additional fields area") where you can add less important, but still potentially useful information about the issue. If such fields are reportable and marked as "additional", they will show up here, instead of in the main reporting view.\n\n= Submitting an issue =\nWhen you''ve filled out the form and are ready to submit the issue, click the "''''''file issue''''''" button located in the green bar below the main reporting area. As soon as the issue has been saved, it will - based on the settings for that specific issue type - either reload the page with a new reporting form and a link to the submitted issue at the top, or redirect you to the issue you just reported.\n\n[[Category:Help]] [[Category:Help:Howto]]', NULL, 1328610627, 1, 0, 1),
(18, 'IssuetypeScheme', NULL, '= Description =\nAn issue type scheme is the scheme that specifies - per issue type - which issue fields are:\n* available for reporting via the "main" reporting view\n* available for reporting via the "additional information" pane at the bottom\n* required for reporting\n* available on the "view issue" page\n\nAll issue types have their own settings for which fields are available / required on both the reporting page and on the issue overview page. These settings are deeply integrated in The Bug Genie, and always respected.\n\nOn the [[CreatingIssues|Report an issue]] page, fields will be displayed and marked as required based on the settings specified in the issue type scheme in use by the selected project. These settings are also used to determine which fields are displayed on the "View issue" page.\n\n= Custom fields =\nBecause the DefaultIssuetypeScheme is not editable, you have to create a copy of it and modify that copy to be able to display any CustomFields, as they would not be available by default. Which issuetype scheme a project uses is available in the project configuration popup.', NULL, 1328610627, 1, 0, 1),
(19, 'WorkflowDefault', NULL, '= Overview =\nThe default workflow is used for issue types that does not have a workflow set in the workflow scheme associated with the current project. The default workflow is also used in the default workflow scheme setup.<br>\nThis is an overview of the default workflow setup with its steps and transitions:\n\n{|\n! Step !! Connected status !! State !! Outgoing transitions !! Notes\n|-\n| ''''''New'''''' || ''''New'''' || Open and editable || Investigate issue â†’ Investigating<br>Confirm issue â†’ Confirmed<br>Reject issue â†’ Rejected<br>Accept issue â†’ In progress<br>Resolve issue â†’ Closed || This is the default, initial step all issues start in\n|-\n| ''''''Investigating'''''' || ''''Investigating'''' || Open and editable || Request more information â†’ New<br>Confirm issue â†’ Confirmed<br>Reject issue â†’ Rejected<br>Accept issue â†’ In progress || \n|-\n| ''''''Confirmed'''''' || ''''Confirmed'''' || Open but not editable || Accept issue â†’ In progress <br>Assign issue â†’ In progress <br>Resolve issue â†’ Closed || \n|-\n| ''''''In progress'''''' || ''''Being worked on'''' || Open but not editable || Reject issue â†’ Rejected <br>Mark ready for testing â†’ Ready for testing <br>Resolve issue â†’ Closed || \n|-\n| ''''''Ready for testing'''''' || ''''Ready for testing / QA'''' || Open but not editable || Resolve issue â†’ Closed <br>Test issue solution â†’ Testing || \n|-\n| ''''''Testing'''''' || ''''Testing / QA'''' || Open but not editable || Accept issue solution â†’ Closed <br>Reject issue solution â†’ In progress || \n|-\n| ''''''Rejected'''''' || ''''Not a bug'''' || Closed and not editable || Reopen issue â†’ New || \n|-\n| ''''''Closed'''''' || - || Closed and not editable || Reopen issue â†’ New || This workflow step is not linked directly to a status\n|}\n\nSome things to note about the default workflow:\n* It is not possible to directly move an issue from new to closed - it has to either be accepted or assigned first. You can however move it directly to rejected if it is invalid or duplicate\n* The ''''Closed'''' step is not linked to a status, but has two valid statuses - ''''''Closed'''''' and ''''''Postponed''''''', NULL, 1328610628, 1, 0, 1),
(20, 'MainPage', NULL, 'This is the global wiki frontpage.', NULL, 1328610628, 1, 0, 1),
(21, 'CSVImport', NULL, '= Importing data from CSV files =\n\nYou can import data to The Bug Genie from a CSV file, pasted into the Import screen. Currently you can only import projects, issues and clients. This document explains how to use the Import feature.\n\nData must be provided in comma-separated format, with the first row containing column names (which have restrictions - see below). Column values should be enclosed in speech marks if appropriate - The Bug Genie will handle these correctly. In addition, The Bug Genie also performs a number of validation steps to ensure the data is valid, also explained below.\n\nWhen the tables mention the ''column name'', this is what should be in the first row to indicate the column. Some columns are required, some are optional, however if you specify a column in the header row it must be included in every subsequent row. Likewise, you can not specify data in subsequent rows which does not have a matching column marked in the header row.\n\n== Importing projects ==\n\n{|\n! Column name !! Required !! Contains !! Other details\n|-\n| name || Yes || Project name || none\n|-\n| prefix || No || Prefix for project issue numbers || By specifying a prefix, the project will automatically use the prefix\n|-\n| scrum || No || Should scrum (Agile) development be used || 1 for yes, 0 for no\n|-\n| owner || No (yes if owner_type specified) || User or Team ID for project owner || none\n|-\n| owner_type || No (yes if owner specified) || Type identifier for owner || 1 for user, 2 for team\n|-\n| lead || No (yes if lead_type specified) || User or Team ID for project leader || none\n|-\n| lead_type || No (yes if lead specified) || Type identifier for leader || 1 for user, 2 for team\n|-\n| qa || No (yes if qa_type specified) || User or Team ID for project''s QA responsible || none\n|-\n| qa_type || No (yes if qa specified) || Type identifier for QA responsible || 1 for user, 2 for team\n|-\n| descr || No || Description || none\n|-\n| doc_url || No || URL for documentation website || none\n|-\n| freelance || No || Can users edit issue properties without working on the issue || 1 for yes, 0 for no\n|-\n| en_builds || No || Are builds enabled || 1 for yes, 0 for no\n|-\n| en_comps || No || Are components enabled || 1 for yes, 0 for no\n|-\n| en_editions || No || Are editions enabled || 1 for yes, 0 for no\n|-\n| workflow_id || No || ID number of workflow scheme || none\n|-\n| client || No || ID number of client || none\n|-\n| show_summary || No || Should a summary be shown on the frontpage || 1 for yes, 0 for no\n|-\n| summary_type || No || What to show on the frontpage || Either issuetypes or milestones\n|-\n| issuetype_scheme || No || ID number of issuetype scheme || none\n|-\n| allow_reporting || No || Set whether new issues can be reported against this project || 1 for yes, 0 for no\n|-\n| autoassign || No || Set whether to automatically assign issues based on the leader for projects, editions and components || 1 for yes, 0 for no\n|}\n\n== Importing projects ==\n\n{|\n! Column name  !! Required !! Contains !! Other details\n|-\n| name || Yes || Client name || none\n|-\n| email || No || Email address || none\n|-\n| telephone || No || Telephone number || none\n|-\n| fax || No || Fax number || none\n|-\n| website || No || Website address || none\n|}\n\n== Importing issues ==\n\n{|\n! Column name !! Required !! Contains !! Other details\n|-\n| title || Yes || Issue title || none\n|-\n| project || Yes || Project ID || none\n|-\n| descr || No || Issue description || none\n|-\n| repro || No || Reproduction steps || none\n|-\n| state || No || Type identifier for owner || 1 for closed, 0 for open\n|-\n| status || No || ID for status value || none\n|-\n| posted_by || No || User ID (NOT team) for issue poster || If not specified, importing user will be set\n|-\n| owner || No (yes if owner_type specified) || User or Team ID for issue owner || none\n|-\n| owner_type || No (yes if owner specified) || Type identifier for owner || 1 for user, 2 for team\n|-\n| assigned || No (yes if assigned_type specified) || User or Team ID for issue assignee || none\n|-\n| assigned_type || No (yes if assigned specified) || Type identifier for assignee || 1 for user, 2 for team\n|-\n| resolution || No || ID of resolution value || none\n|-\n| issue_type || Yes || ID of issue type || none\n|-\n| priority || No || ID of priority value || none\n|-\n| category || No || ID of category value || none\n|-\n| severity || No || ID of severity value || none\n|-\n| reproducability || No || ID of reproducability value || none\n|-\n| votes || No || Number of votes || none\n|-\n| percentage || No || How much of the issue is complete || 0 to 100 inclusive\n|-\n| blocking || No || Does the issue block the next release || 1 for yes, 0 for no\n|-\n| milestone || No || ID number of milestone || none\n|}\n\n[[Category:Help]]\n', NULL, 1328610628, 1, 0, 1),
(22, 'Category:Help:HowTo', NULL, '[[Category:Help]]', NULL, 1328610628, 1, 0, 1),
(23, 'FrontpageArticle', NULL, '== Welcome to The Bug Genie! ==\n\nThe Bug Genie makes development a lot easier and manageable. With The Bug Genie you get:<br>\n[[http://thebuggenie.com/features.php#project_management|Project management]], [[http://thebuggenie.com/features.php#issue_tracking|powerful issue tracking]] with advanced [[http://thebuggenie.com/features.php#custom_workflow|workflow support]], [[http://thebuggenie.com/features.php#vcs_integration|source code control]], [[http://thebuggenie.com/features.php#wiki|full-fledged wiki]] for all your documentation needs, and more.\n\nPlease take a few moments setting up your new issue tracker, by clicking the ''''''[[TBG:configure|Configure The Bug Genie]]'''''' link at the very bottom of this page.<br>\nAll configuration takes place from this configuration center, and you can always access it by clicking the link in the footer.\n\nFor more information on getting started, have a look at [[GettingStarted]], [[Configuration]] and [[CreatingIssues]].\n\nTo learn more about the wiki formatting used in The Bug Genie, check out [[WikiFormatting]].\n\n<br>\n''''''Enjoy The Bug Genie!''''''\n\n''''-The Bug Genie development team''''<br>\n[http://www.thebuggenie.com]\n\n''''ps: this page can be edited from [[FrontpageArticle]]''''\n', NULL, 1328610628, 1, 0, 1),
(24, 'Category:Help', NULL, 'This is a list of all the available help articles in The Bug Genie. If you are stuck, look here for help.', NULL, 1328610628, 1, 0, 1),
(25, 'WorkflowTransition', NULL, '== Workflow transitions explained ==\nA transition is when an issue moves from one step to another in the workflow associated with that project/issue type combination. The workflow transition is what triggers email notifications, changes status, resolution, issue state, and more. Without a transition happening, changes to an issue state will not be consistent with the data associated with that workflow step. The transition being performed is essential for the workflow to function properly.\n\n== Transition details ==\nWhen a transition is defined, it can have pre-/post-validators, and post-transition actions associated with it.\n\n=== Pre-validators ===\nA pre-validator is a set of rules that must apply to an issue for the transition to be available. For example, you can set a "maximum number of assigned issues", which means that for that transition to be available to the developer, he can not have more than the specified number of issues assigned. These pre-validation rules are shown in the workflow configuration view after selecting a transaction.\n\n=== Post-validators ===\nThe post-validators validates input from the user, and makes sure it passes a valid set of allowed values. For example (in the default workflow), issues that are moving from the "In progress" step to the "Resolved" step will have to have the status set to one of the following: "Done", "Fixed" or "Closed". These validation rules are also integrated with the transition view, so it is not possible to modify the issue property to a value that is not allowed in the transitions'' post-validation rule set.\n\n=== Post-transition actions ===\nA post-transition action is an action that defines what will be done with the issue after the transaction validation is complete. This can be everything from applying a user-specified priority/resolution, to marking an issue as being worked on by a user (for automated time tracking), changing the percent complete field (to give a good visual indicator of how complete an issue is) or changing the user assigned to an issue. Post-transition actions occur at the very end of the transition, right before the issues step is changed to the outgoing step of the transition.\n\n=== Pre- vs. post-validators ===\nThere is a fundamental difference between pre- and post-validators. Whereas the post-validators validate user input, such as a status provided in the [[WorkflowTransitionView|transition view]], the pre-validators is what decides whether the user will even be able to trigger the transition view or transition. A pre-validation rule keeps the transition from being ''''''available'''''' under certain conditions, whereas the post-validation rules keeps the issue from ''''''having its properties set to invalid values''''''.', NULL, 1328610628, 1, 0, 1),
(26, 'GettingStarted', NULL, '= Getting started with The Bug Genie =\n{{TOC}}\n== Name, slogan and other settings ==\nYou might want to set the name and slogan, or change some of the other default settings. You can do this from [[TBG:configure_settings|Configure -> Settings]], where you have all the main settings available.\n\n== Your first project ==\nThe first thing you want to do is set up your project. Although The Bug Genie can be used without any projects, it''s mainly an issue tracker, and that''s where it excels.\n\nTo add a project, log in as an admin, and either click the little configuration icon next to the project list on the frontpage, or click [[TBG:configure_projects|Configure -> projects]]. This will take you to the projects list. To create a project from here, simply enter the project name in the text box and click "Add" or press Enter.\n\nThe Bug Genie is now ready to be used for issue reporting with your new project. However, you might want to set up more information about the project. Click the "Edit project" link on the project and change any settings in here. From that page you can also add a project description, release date and more information about your project. This is also where you set up editions, components, releases, milestones, and more.\n\n=== Permissions ===\nYour project will initially only be available to the user group that created the project. If you created the project as the administrator user, the project will initially be available only to the "Administrator" group. You can change this by clicking the "more details" link when you create the project. You can also change project permissions for other user groups by going to [[TBG:configure_permissions|Configure -> Permissions]]. Select the "Project specific permissions" tab, and click the project name. From here you can set permissions for all groups and teams in the system. \n\nTo allow easy bug reporting if the global security setting is set to "Restrictive", enable the following permission groups:\n* Can access project\n* Can access all project pages\n* Can create issues, edit basic information on issues reported by the user and close/re-open them\n\nTo do this, click the permission group text, and then click the icons for either global access, group-specific- or team-specific access.\n\n''''For smaller teams, consider setting the global security setting to "Permissive". This can be done from [[TBG:configure_settings|Configure -> settings]] under the "Users & security" tab.''''\n\n\n=== Project team ===\nSomeone is usually working on your project. You should add developers working on The Bug Genie to your project. (This of course requires that your developers have user accounts). Click the "Edit project" icon on your project, and then open up the ''''''Related users'''''' tab. Add developers, project managers, testers and documentors from this page. By adding developers to projects, you ensure that they get access to project specific features such as project information on their dashboard, issue notifications, and they also appear on the projects'' team page.\n\n=== Editions, components & releases ===\n==== Releases ====\nIf your project publishes regular test releases / builds, you should enable releases. This lets you add a specific build / release name / id to an issue so that you can target the issues progress through a set of releases. When this setting is enabled you can also add a release to your issue when you report it, and even make it mandatory during the report process for any given issue type.\n\n==== Components ====\nOften a project is made up of several very specific pieces of code or functionality. Such components can be "search", "wiki", "admin interface", etc. and is up to you to decide. Similar to above (releases), an issue can also target a specific component. You can also notify certain developers or teams when a new issue for a certain component has been reported by adding them to the specific component on the project "Related users" configuration page.\n\n==== Editions ====\nIn some cases your project may also be made up of several different editions. Editions are mainly defined by their included components, and one edition usually includes a different feature set from another edition. You may also want to use editions for version tracking, and set up editions between major versions, such as "MYPROJECT version 1", "MYPROJECT version 2", and so on.\n\n== Reporting issues ==\nYou can report issues for any projects registered in the bug genie by clicking the "Report an issue" tab in the top menu bar, or the green "Report an issue" button which is shown in the project menu bar. If you''re not in any project (such as in the global wiki, your user account settings, dashboard, etc), the report issue form will let you choose a project to report an issue for. Otherwise, the issue will be reported for the currently selected issue.\n\n=== Customizing issue types ===\nThe Bug Genie comes with a predefined set of issue types available out of the box. These can be customized to show different fields during issue reporting and in the issue overview page. You can do this from [[TBG:configure_issuetypes|Configure -> issue types]], where you can also add new issue types. Keep in mind that The Bug Genie uses the information in these issue types to include them in areas of the system where they would be relevant, such as showing any custom "bug report" issue types in bug report statistics, etc - use this to your advantage!\n\n=== Adding custom fields ===\nIf the standard issue fields aren''t enough for your needs, you can add custom ones from [[TBG:configure_issuefields|Configure -> issue fields]]. These fields are treated just as other issue fields in the system, and are available for searches and issue type customization. There are several types of custom fields to choose from, such as radio buttons, input areas, list of users, secondary status fields, dates, and more.\n\n[[Category:Help]][[Category:Help:Howto]]', NULL, 1328610628, 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_articlelinks`
--

CREATE TABLE IF NOT EXISTS `tbg3_articlelinks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_name` varchar(300) DEFAULT NULL,
  `link_article_name` varchar(300) DEFAULT NULL,
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `tbg3_articlelinks`
--

INSERT INTO `tbg3_articlelinks` (`id`, `article_name`, `link_article_name`, `scope`) VALUES
(1, 'FrontpageLeftmenu', 'FrontpageLeftmenu', 1),
(2, 'DefaultIssuetypeScheme', 'CreatingIssues', 1),
(3, 'Workflow', 'WorkflowSteps', 1),
(4, 'Workflow', 'WorkflowTransitions', 1),
(5, 'Workflow', 'DefaultWorkflow', 1),
(6, 'WorkflowSteps', 'WorkflowTransition', 1),
(7, 'WorkflowSteps', 'WorkflowTransitionView', 1),
(8, 'WorkflowSteps', 'WorkflowTransitions', 1),
(9, 'WikiFormatting', 'CamelCasing', 1),
(10, 'WikiFormatting', 'InternalPage', 1),
(11, 'WikiFormatting', 'Myproject:MainPage', 1),
(12, 'WikiFormatting', 'Category:Mycategory', 1),
(13, 'WikiFormatting', 'Category:Actors', 1),
(14, 'WikiFormatting', 'Category:MaleActors', 1),
(15, 'CreatingIssues', 'IssuetypeScheme', 1),
(16, 'CreatingIssues', 'IssuetypeSceme', 1),
(17, 'IssuetypeScheme', 'DefaultIssuetypeScheme', 1),
(18, 'IssuetypeScheme', 'CustomFields', 1),
(19, 'IssuetypeScheme', 'CreatingIssues', 1),
(20, 'FrontpageArticle', 'GettingStarted', 1),
(21, 'FrontpageArticle', 'Configuration', 1),
(22, 'FrontpageArticle', 'CreatingIssues', 1),
(23, 'FrontpageArticle', 'WikiFormatting', 1),
(24, 'FrontpageArticle', 'FrontpageArticle', 1),
(25, 'WorkflowTransition', 'WorkflowTransitionView', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_articles`
--

CREATE TABLE IF NOT EXISTS `tbg3_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `is_published` tinyint(1) DEFAULT '0',
  `date` int(10) DEFAULT '0',
  `author` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `tbg3_articles`
--

INSERT INTO `tbg3_articles` (`id`, `name`, `content`, `is_published`, `date`, `author`, `scope`) VALUES
(1, 'FrontpageLeftmenu', 'If you want to put something in this area, edit the FrontpageLeftmenu wiki article.', 1, 1328610625, NULL, 1),
(2, 'WorkflowTransitionView', '== Introduction ==\nThe workflow transition view is a popup presented to the user / developer so he or she can specify additional properties to be applied to the issue during its transition to the outgoing transition step. This popup can have items such as choosing whether time spent on the issue should be automatically logged, what resolution to pick for an issue, and more.\n\n== Properties ==\nThe list of properties shown in the transition view is defined by the post-transition actions specified on the transition. For example, if the transition doesn''t specify that it will set the resolution to the resolution given by the user, no dropdown for selecting a resolution will be shown. Also, if the resolution field isn''t defined as visible for that project / issue type combination, a message will be displayed to the user, so he/she can choose not to specify that particular field.\n\n== Instant transitions ==\nA transition doesn''t have to specify a view for when it is being applied to an issue. A transition without an associated transition view will be applied instantly.', 1, 1328610625, NULL, 1),
(3, 'Category:Help:Configuration', 'This is a list of all the available help articles on configuring The Bug Genie.\n\n[[Category:Help]]', 1, 1328610625, NULL, 1),
(4, 'Category:Workflow', '', 1, 1328610625, NULL, 1),
(5, 'AboutIssuePrefixes', '== Prefixes explained ==\nA project can specify a prefix that will be used for all issues created against it. This prefix will then be used in issue numbers, links and descriptions. Because all issues in The Bug Genie are counted against specific projects (this means you can have an issue #1 for "Project 1" and an issue #1 for Project 2), prefixes can be an easy way to quickly distinguish between issues from different projects simply by looking at their issue number.\n\n== Example ==\nSay you have two projects, "Awesome product" and "Crappy product", and you want to use a prefix on issues created against "Crappy product" so you can easily find them in your list of issues. To do this, open up project configuration for "Crappy product" (either by clicking the "edit project" link on the frontpage, project dashboard or on the [[TBG:configure_projects|Configure projects]] page), and select "Yes" for "Enable prefix". Then - in the box below - specify a prefix that will be used (e.g. "CRAP").\n\nNow all issues for this project uses the prefix specified. Issue #1 will be called "CRAP-1", issue #2 "CRAP-2", etc. This is also backwards-compatible, so you can change it any time you want, and it will be valid for all your issues in that project.', 1, 1328610625, NULL, 1),
(6, 'DefaultIssuetypeScheme', '{{TOC}}\n= Introduction =\nThe Default issuetype scheme is used for projects without a custom issue type scheme set, and defines a default set of visible / required properties on the [[CreatingIssues|Report an issue]] page, as well as on the "view issue" page.\n\n= Overview =\nThis is an overview of the required / visible properties per issue type. \n''''''Note:'''''' If a field has been set (either via a workflow transition, or otherwise), its value will be displayed regardless of its "visible" setting. Remember that the user must also have the permission to set the field in question, and there must be values available for the field to be populated.\n\n''''''Explanation:''''''\n* ''''Reportable'''': Whether the specified field is visible on the reporting page\n* ''''Required'''': Whether this field is required when reporting an issue\n* ''''Additional'''': Whether this is shown in the "additional fields" area, or in the main view when reporting an issue\n* ''''Visible'''': Whether this field is visible on the "view issue" page\n== Bug report ==\n* ''''''Redirects to the reported issue'''''': Yes\n{|\n! Field !! Visible !! Reportable !! Additional !! Required\n|-\n| Title || Yes || Yes || - || Yes\n|-\n| Description || Yes || Yes || - || Yes\n|-\n| Reproduction steps || Yes || Yes || - || Yes\n|-\n| Category || Yes || Yes || - || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Status || Yes || - || - || -\n|-\n| Resolution || Yes || Yes || Yes || -\n|-\n| Priority || Yes || Yes || Yes || -\n|-\n| Severity || Yes || Yes || Yes || -\n|-\n| Estimated time to complete || Yes || Yes || Yes || -\n|-\n| Targetted for milestone || Yes || Yes || Yes || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Percent completed || - || - || - || -\n|-\n| Affected edition(s) || Yes || Yes || - || -\n|-\n| Affected release(s) || Yes || Yes || - || -\n|-\n| Affected component(s) || Yes || Yes || - || -\n|-\n| Time spent working on the issue || Yes || - || - || -\n|-\n| Triaging: user paing || - || - || - || -\n|-\n| Votes || - || - || - || -\n|}\n== Feature request, Enhancement & Idea ==\n* ''''''Redirects to the reported issue'''''': Yes\n{|\n! Field !! Visible !! Reportable !! Additional !! Required\n|-\n| Title || Yes || Yes || - || Yes\n|-\n| Description || Yes || Yes || - || Yes\n|-\n| Reproduction steps || - || - || - || -\n|-\n| Category || Yes || Yes || Yes || -\n|-\n| Reproducability || - || - || - || -\n|-\n| Status || Yes || - || - || -\n|-\n| Resolution || - || - || - || -\n|-\n| Priority || Yes || Yes || Yes || -\n|-\n| Severity || - || - || - || -\n|-\n| Estimated time to complete || Yes || Yes || Yes || -\n|-\n| Targetted for milestone || Yes || Yes || Yes || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Percent completed || Yes || Yes || Yes || -\n|-\n| Affected edition(s) || - || - || - || -\n|-\n| Affected release(s) || - || - || - || -\n|-\n| Affected component(s) || - || - || - || -\n|-\n| Time spent working on the issue || Yes || - || - || -\n|-\n| Triaging: user paing || - || - || - || -\n|-\n| Votes || Yes || - || - || -\n|}\n== Task ==\n* ''''''Redirects to the reported issue'''''': No, loads a new & empty reporting form with a link to the saved issue at the top\n{|\n! Field !! Visible !! Reportable !! Additional !! Required\n|-\n| Title || Yes || Yes || - || -\n|-\n| Description || Yes || Yes || - || Yes\n|-\n| Reproduction steps || - || - || - || -\n|-\n| Category || Yes || Yes || Yes || -\n|-\n| Reproducability || - || - || - || -\n|-\n| Status || Yes || - || - || -\n|-\n| Resolution || - || - || - || -\n|-\n| Priority || Yes || Yes || Yes || -\n|-\n| Severity || - || - || - || -\n|-\n| Estimated time to complete || Yes || Yes || Yes || -\n|-\n| Targetted for milestone || Yes || Yes || Yes || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Percent completed || Yes || Yes || Yes || -\n|-\n| Affected edition(s) || - || - || - || -\n|-\n| Affected release(s) || - || - || - || -\n|-\n| Affected component(s) || - || - || - || -\n|-\n| Time spent working on the issue || Yes || - || - || -\n|-\n| Triaging: user paing || - || - || - || -\n|-\n| Votes || Yes || - || - || -\n|}\n== User story ==\n* ''''''Redirects to the reported issue'''''': No, loads a new & empty reporting form with a link to the saved issue at the top\n{|\n! Field !! Visible !! Reportable !! Additional !! Required\n|-\n| Title || Yes || Yes || - || -\n|-\n| Description || Yes || Yes || - || -\n|-\n| Reproduction steps || - || - || - || -\n|-\n| Category || Yes || Yes || - || -\n|-\n| Reproducability || - || - || - || -\n|-\n| Status || Yes || - || - || -\n|-\n| Resolution || - || - || - || -\n|-\n| Priority || Yes || Yes || - || -\n|-\n| Severity || - || - || - || -\n|-\n| Estimated time to complete || Yes || Yes || - || -\n|-\n| Targetted for milestone || Yes || Yes || - || -\n|-\n| Reproducability || Yes || Yes || - || -\n|-\n| Percent completed || Yes || Yes || - || -\n|-\n| Affected edition(s) || - || - || - || -\n|-\n| Affected release(s) || - || - || - || -\n|-\n| Affected component(s) || - || - || - || -\n|-\n| Time spent working on the issue || Yes || Yes || - || -\n|-\n| Triaging: user paing || - || - || - || -\n|-\n| Votes || Yes || - || - || -\n|}', 1, 1328610625, NULL, 1),
(7, 'Workflow', '{{TOC}}\n= Introduction =\nA workflow is reprecented by [[WorkflowSteps|steps]] and [[WorkflowTransitions|transitions]] that an issue progresses through, thereby defining an issue lifecycle. Steps and transitions can further be customized with validation, conditional access and permission based access to fields to create a setup perfectly tailored to an individual company workflow.\n\nThis defined lifecycle usually represents an internal company setup, or reflects a companys team-based structure, and is usually also anchored in a company or teams development and QA guidelines.\n\nThe Bug Genie comes with a default workflow called [[DefaultWorkflow|"Default workflow"]]. This workflow cannot be edited or removed, and is used as a fallback workflow or when a project doesn''t have a workflow configured. The editing tools for workflow will of course let you copy this default workflow or create a new one to make your own, and everything in other workflows than the builting one can be customized.\n[[Category:TheBugGenie:Workflow]]', 1, 1328610625, NULL, 1),
(8, 'DefaultWorkflow', '= Overview =\nThe default workflow is used for issue types that does not have a workflow set in the workflow scheme associated with the current project. The default workflow is also used in the default workflow scheme setup.<br>\nThis is an overview of the default workflow setup with its steps and transitions:\n\n{|\n! Step !! Connected status !! State !! Outgoing transitions !! Notes\n|-\n| ''''''New'''''' || ''''New'''' || Open and editable || Investigate issue â†’ Investigating<br>Confirm issue â†’ Confirmed<br>Reject issue â†’ Rejected<br>Accept issue â†’ In progress<br>Resolve issue â†’ Closed || This is the default, initial step all issues start in\n|-\n| ''''''Investigating'''''' || ''''Investigating'''' || Open and editable || Request more information â†’ New<br>Confirm issue â†’ Confirmed<br>Reject issue â†’ Rejected<br>Accept issue â†’ In progress || \n|-\n| ''''''Confirmed'''''' || ''''Confirmed'''' || Open but not editable || Accept issue â†’ In progress <br>Assign issue â†’ In progress <br>Resolve issue â†’ Closed || \n|-\n| ''''''In progress'''''' || ''''Being worked on'''' || Open but not editable || Reject issue â†’ Rejected <br>Mark ready for testing â†’ Ready for testing <br>Resolve issue â†’ Closed || \n|-\n| ''''''Ready for testing'''''' || ''''Ready for testing / QA'''' || Open but not editable || Resolve issue â†’ Closed <br>Test issue solution â†’ Testing || \n|-\n| ''''''Testing'''''' || ''''Testing / QA'''' || Open but not editable || Accept issue solution â†’ Closed <br>Reject issue solution â†’ In progress || \n|-\n| ''''''Rejected'''''' || ''''Not a bug'''' || Closed and not editable || Reopen issue â†’ New || \n|-\n| ''''''Closed'''''' || - || Closed and not editable || Reopen issue â†’ New || This workflow step is not linked directly to a status\n|}\n\nSome things to note about the default workflow:\n* It is not possible to directly move an issue from new to closed - it has to either be accepted or assigned first. You can however move it directly to rejected if it is invalid or duplicate\n* The ''''Closed'''' step is not linked to a status, but has two valid statuses - ''''''Closed'''''' and ''''''Postponed''''''', 1, 1328610625, NULL, 1),
(9, 'WorkflowSteps', '== Workflow step explained ==\nA workflow consists of several steps, together defining the possible states an issue can be in during the issue lifecycle. A step is linked to the following three separate properties of an issue:\n* Whether the issue is editable\n* Whether the issue is closed\n* (optionally) The issue status ("Fixed", "In progress", "Testing", etc)\n\n== Changing issue workflow step ==\nAn issue can only enter a new step via a [[WorkflowTransition|transition]] (either instantly or via a [[WorkflowTransitionView|transition view]]), which often defines other properties that needs to be set in order for the issue to progress to the defined step. For the issue to progress, a transition from the current step to any other step in the workflow needs to be defined in the workflow itself.\n\nAn example of this is such as when an issue is in the initial step (often linked with the status "New"), a transition can take it to the "Confirmed" step (often linked with the corresponding "Confirmed" status). During this transition, a user or developer may be asked to provide additional details to validate the transition. How transitions work are explained in more detail in the [[WorkflowTransitions|transitions]] documentation.\n\nThe workflow step is not visible anywhere on the issue - the way to tell it is usually to look at its state (open / closed) and the issues status field. This will give you an overview of the issues current position in the defined workflow.\n\n== Step actions ==\nA step does not have any specific actions associated with it. Because a step is a "state", not the transition between states, the step definition is limited to the three properties mentioned above, and does not include actions.\n\n== Defining a workflow step ==\nIf you''re using a non-default workflow, new steps can be added from the workflow configuration page. This page lists all steps in the specified workflow, and lets you edit the step and/or add outgoing [[WorkflowTransitions|transitions]] to it, leading to another step.', 1, 1328610625, NULL, 1),
(10, 'CamelCasing', '''''''!CamelCase'''''' (also spelled "camel case") or ''''medial capitals'''' is the practice of writing compound words or phrases in which the elements are joined without spaces, with each element''s initial letter capitalized within the compound, and the first letter can be upper or lower case â€” as in !LaBelle, !BackColor, !MacGyver, or iPod.\n\nThe name comes from the uppercase "bumps" in the middle of the compound word, suggestive of the humps of a camel.\n\nThe practice is also known by many other names, such as ''''''!BumpCaps'''''', ''''''!BeefCaps'''''', ''''''!CapWords'''''' and ''''''!WikiWords''''''.\n\n''''''This is a short introduction to the subject, based on the [[Wikipedia:CamelCase|Wikipedia article]] about camel case.\n[[Category:Help]]', 1, 1328610625, NULL, 1),
(11, 'LoremIpsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus, elit vel auctor tincidunt, magna orci elementum enim, eget luctus nisl enim et velit. Nullam sit amet est augue, ut tincidunt diam. Aliquam aliquam enim et turpis sagittis imperdiet. Donec in augue vitae quam facilisis malesuada a tempus orci. Quisque consectetur scelerisque sapien vel consectetur. Nam at congue magna. Aliquam commodo ornare nisi, vitae malesuada nunc congue in. Duis id est orci. Donec a ullamcorper tellus. Morbi non neque non augue aliquam porta. Sed posuere volutpat quam vitae dignissim. Nullam eu ipsum erat. Morbi nec arcu eget enim condimentum sollicitudin. Ut dui lectus, rhoncus et euismod et, feugiat eu nisi. Cras facilisis, nisl quis venenatis elementum, neque justo vehicula odio, id venenatis sapien neque vel nulla. In quis turpis non orci convallis pharetra. Aliquam erat volutpat.\n\nCras urna lectus, iaculis non venenatis vel, egestas quis est. Aliquam laoreet, neque nec bibendum dignissim, nulla felis hendrerit est, nec volutpat nisl lectus vitae enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer laoreet risus in massa sollicitudin quis vulputate nulla pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse semper, nunc consequat imperdiet convallis, quam tortor euismod mi, ac cursus sem neque sed elit. Vestibulum egestas tempor elit vel imperdiet. Donec lacinia, nulla et tempor facilisis, neque purus sollicitudin nunc, non venenatis leo eros sed ipsum. Cras lacus felis, auctor at euismod quis, vehicula vel est. Sed sit amet mauris ac felis imperdiet faucibus. Nam et euismod erat. Duis varius, dui in molestie dignissim, turpis nulla sollicitudin erat, in porta erat lacus ac eros. Phasellus consequat elementum pellentesque. Sed pharetra condimentum sagittis. Suspendisse metus leo, adipiscing nec congue id, interdum sit amet dui. Phasellus commodo ante ac augue imperdiet vitae volutpat nisl posuere. Integer vitae urna mi, et tincidunt orci. Nulla mattis ultrices dui vitae vestibulum. Donec felis tortor, lobortis vitae euismod in, laoreet quis augue.\n\nMaecenas a felis urna. Cras tincidunt ligula id nisi aliquam pretium. Mauris at nibh at arcu molestie scelerisque a a orci. Nam quam arcu, vulputate et tristique at, dapibus sit amet eros. Nam scelerisque massa posuere dui fermentum eu condimentum erat ultrices. Cras ante diam, mollis sed pretium imperdiet, pretium nec enim. Proin blandit justo tortor, eget sollicitudin magna. Donec rhoncus commodo nibh eget pulvinar. Nunc bibendum tristique arcu a dapibus. Maecenas ultricies consequat dolor et dignissim. Nulla nec velit in magna cursus rhoncus a vitae eros. Maecenas pretium nisl id risus facilisis sed dignissim quam tristique. Nunc consequat, elit ut consectetur blandit, dolor quam vehicula sem, non molestie ipsum nunc pellentesque ipsum. Aliquam erat volutpat. Donec ante massa, bibendum at dapibus a, facilisis nec metus. Nunc tristique sodales erat. Sed laoreet orci sed odio molestie quis varius magna rhoncus.\n\nDonec laoreet luctus lacus dictum commodo. Donec dignissim auctor varius. Nulla nunc metus, egestas sit amet vestibulum sed, fermentum nec ante. Ut in ultrices libero. Donec tortor velit, suscipit a tempor eu, auctor accumsan elit. Donec sed nisl enim. Morbi sagittis interdum quam in lacinia. In fermentum luctus turpis vitae vulputate. Nulla tincidunt semper neque, ut tincidunt nibh tincidunt sed. Maecenas tellus dui, bibendum sed convallis id, varius et mi. Nulla facilisi. Nulla semper, leo non tristique volutpat, ipsum arcu vestibulum enim, bibendum mattis urna nulla vel dolor. Cras nibh lorem, ullamcorper vitae ultricies eu, consequat sed est.\n\nVestibulum varius tempor nisi sed tempor. In suscipit luctus tellus porttitor sollicitudin. Sed in arcu turpis. Donec eu neque non est commodo porttitor. Aliquam erat volutpat. Donec varius, sem nec rutrum commodo, ipsum est sollicitudin dui, sed tempus purus est in felis. Aliquam sodales, velit vitae accumsan molestie, nulla lectus lobortis erat, vehicula ultrices dolor ipsum nec ipsum. Nunc sed turpis sed magna rhoncus lobortis ut ac lectus. Nunc a felis a eros condimentum fringilla. Donec ultrices aliquet leo, ac venenatis quam pharetra at. Pellentesque sodales condimentum felis a porta. Integer justo elit, ullamcorper eget vulputate ut, tincidunt non velit. Donec at urna mi, eget ultricies metus. Duis feugiat pulvinar metus, nec laoreet sem pharetra at. Maecenas quis mi sed lorem euismod convallis eget non quam. Sed vestibulum porttitor arcu, et rutrum est cursus vel. Fusce posuere pellentesque arcu vitae ullamcorper. Nulla facilisis hendrerit ligula, tempus condimentum eros imperdiet et. ', 1, 1328610625, NULL, 1),
(12, 'LoginIntro', '= Welcome to The Bug Genie =\nPlease fill in your username and password below, and press "Continue" to log in.<br>\nIf you have not already registered, please use the "Register new account" tab to do so.', 1, 1328610625, NULL, 1),
(13, 'WikiFormatting', '{{TOC}}\nThe Bug Genie uses a formatting technique called "Wiki formatting", most commonly known from Wikipedia (!MediaWiki).\nThe Bug Genie wiki tries to stay as close to the !MediaWiki syntax as possible, so if you''re familiar with that syntax you should feel right at home.\n\nWiki formatting is well explained in the [http://en.wikipedia.org/wiki/Help:Wikitext_examples Wikipedia help article], but can be easily summarized as a simple method of formatting your text by placing certain characters.\nWe will show you the most common syntax below.\n\n== Line breaks and text formatting ==\nYou can use line breaks to space out the text and make it more readable in the editor. One line break will not be transformed into a line break when the page is \ndisplayed. A blank line makes a new paragraph. You can put <br> to make a hard line break, but be careful with this as it might break layout.\n  This text is easy to\n  read because it is\n  split into several lines\n  but it will only show up as one line on the page\nThis text is easy to\nread because it is\nsplit into several lines\nbut it will only show up as one line on the page\n\nText can be formatted by putting ''-characters around the text you want to format. Here are some examples:\n\n  ''''this is some italic text''''\n''''this is some italic text''''\n  ''''''this is some bold text''''''\n''''''this is some bold text''''''\n  ''''''''''this is some bold and italic text''''''''''\n''''''''''this is some bold and italic text''''''''''\n\nYou can also use simple html formatting for things like underlined and strikethrough:\n\n  <strike>strikethrough</strike>\n<strike>strikethrough</strike>\n  <u>underlined</u>\n<u>underlined</u>\n\n== Headings ==\nTo specify headings, use equals-character around the line you want to be a heading. The number of equals-characters you put around the line decides how big the heading is (1 is biggest, 6 is lowest).\n  = I''m a big header =\n  == I''m a fairly big header ==\n  ===== I''m a very small header =====\nHeadings will automatically appear in the table of contents (if you have one).\n\n== Creating links between documents ==\nTraditionally, wikis have used something called [[WIKIPEDIA:CamelCase|Camel Casing]] to create links between documents. CamelCasing means that you put any word or combination of words as a "''''''camel cased''''''" word, and then the wiki will create a link to the document with that name for you automatically. If the page you are trying to link to isn''t yet created, the link will still be displayed, and you can click it to start editing the new article.\n\nIf you want to write a word with more than one capital letter, use an exclamation mark infront of it - that will stop it from being turned into a link automatically. The support for "camel casing" can be turned off in the wiki settings.\n\nYou can also use the double square bracket link format to link to internal pages, if you don''t want to use the CamelCasing style:\n  [[InternalPage]]\n[[InternalPage]]\n  [[Myproject:MainPage|Myproject wiki frontpage]]\n[[Myproject:MainPage|Myproject wiki frontpage]]\n\nWith this method you can also link to internal pages in The Bug Genie, by either specifying the relative url (like "/configure" points to the configuration page and "/wiki" points to the wiki), or use the internal route namespace "TBG:" (this has the added benefit of being safe if the link ever changes in a future release).\nUnfortunately, the list of routes used in The Bug Genie is quite long, but a few examples are listed below:\n\n  [[/about|About The Bug Genie]]\n[[/about|About The Bug Genie]]\n  [[/logout|Log out]]\n[[/logout|Log out]]\n  [[TBG:configure_projects|Configure projects]]\n[[TBG:configure_projects|Configure projects]]\n  [[TBG:configure_modules|Modules configuration]]\n[[TBG:configure_modules|Modules configuration]]\n\nThe Bug Genie wiki also lets you link directly to [http://www.wikipedia.org Wikipedia] articles by using the WIKIPEDIA namespace:\n\n  [[WIKIPEDIA:CamelCase]]\n[[WIKIPEDIA:CamelCase]]\n  [[WIKIPEDIA:CamelCase|Wikipedia article]]\n[[WIKIPEDIA:CamelCase|Wikipedia article]]\n\n''''''Remember - if all this sound complicated, you can always just use CamelCasing (provided it''s not disabled)''''''\n\n== Links ==\nIn addition to linking between internal pages with double square brackets, you can link to external pages with single square brackets. Any URLs inside your text will also automatically be turned into clickable links, but you can also put a pair of square brackets around the link to make it clickable. In addition, you can add a title if you want to:\n\n  http://www.thebuggenie.com\nhttp://www.thebuggenie.com\n  [http://www.thebuggenie.com]\n[http://www.thebuggenie.com]\n  [http://www.thebuggenie.com The Bug Genie website]\n[http://www.thebuggenie.com The Bug Genie website]\n\n== Horizontal line ==\nIf you want to put a horizontal line in the document, use four dashes:\n\n  ----\n----\n\n= Advanced usage =\n\n== Tables ==\nYou can add tables to your wiki page by using the table layout for defining rows, columns and headers. An example table (without headers) looks like this:\n  {|\n  |-\n  | Column 1 || Column 2 || Column 3\n  |}\n{|\n|-\n| Column 1 || Column 2 || Column 3\n|}\n\nAn example table ''''''with headers'''''' looks like this:\n  {|\n  ! Header 1 !! Header 2 !! Header 3\n  |-\n  | Column 1 || Column 2 || Column 3\n  |}\n{|\n! Header 1 !! Header 2 !! Header 3\n|-\n| Column 1 || Column 2 || Column 3\n|}\n\nA table must start with a table opener, and end with a table closer:\n\n''''''Table opener:''''''\n  {|\n''''''Table closer:''''''\n  |}\n\nIf you want to add header columns to your table, use the header row formatting, which is similar to the "normal" column formatting, but with an exclamation mark separator character:\n  ! Header 1 !! Header 2 !! Header 3\n\nEvery new row starts with a row indicator, which looks like this:\n  |-\n\nThe first column in a row starts with a single or double pipe character, and every new column is separated with a double pipe separator. These are both valid columns:\n  | Column 1 || Column 2 || Column 3\nand:\n  || Column 1 || Column 2 || Column 3\n\n\n== Categories ==\nYour article can be in none, one or more categories. You specify which category your article is in by using the Category namespace link:\n  [[Category:Mycategory]]\n\nThis won''t show up on the page, and you usually place this at the very end of your wiki page when you edit it. Categories will show up in the "Categories" area at the bottom of the article.\n\nIf you want to link to a Category, instead of put your article ''''''in'''''' a category, put a colon in front of the word "Category":\n  [[:Category:Mycategory]]\n[[:Category:Mycategory]]\n\nA category can have one or more ''''subcategories''''. You put one category in another category by putting the Category link shown above ''''inside the subcategory article''''.\n\n''''''Ex:'''''' after having created the page [[:Category:Actors]], create the page [[:Category:MaleActors]], and at the bottom of that article, put:\n  [[Category:Actors]]\nThis will make [[:Category:MaleActors]] a subcategory of [[:Category:Actors]]. That means [[:Category:MaleActors]] will show up in the "Subcategories" list on the [[:Category:Actors]] page.\n\nBefore you can see the content of a category - its subcategories or pages in that category, the category must be created. To create a category, put an article in a category, click the category link at the bottom of the article, and create the page.\nA category page is in essence just any other wiki article, but with the list of subcategories (if any) and pages in that category.\n\n== Redirecting from one page to another ==\nIf you want to make one page redirect directly to another page, use the ''''#REDIRECT'''' keyword, followed by the article to redirect to, like this:\n #REDIRECT [[PageToRedirectTo]]\n\nThe ''''#REDIRECT'''' must be the first thing on the first line, and must be followed by a space and the article name in the format specified above. This will not work:\n This is some content\n #REDIRECT [[AnotherPage]]\n\nNeither will this:\n  #REDIRECT [[AnotherPage]]\n(notice the space in front of ''''#REDIRECT'''')\n\n\n== Images ==\nYou can show uploaded images by using the same notation as for links, using the Image namespace:\n [[Image:image1.png]]\n\nThe Image: namespaced link accepts several parameters, separated by a pipe (|), and the right-most parameter is always the description. This means that if you want to specify any parameters, you must always put a description as the last parameter:\n [[Image:image1.png|Description here]]\n [[Image:image1.png|thumb|Description here]]\n\nImages are shown full-size by default, but you usually probably want to show a thumbnail of the image instead. To do this, use the "thumb" parameter:\n [[Image:image1.png|thumb|Image description]]\n\nImages float right by default, but this can also be specified as a parameter, by specifying "left" as a parameter on the Image tag:\n [[Image:image1.png|This image floats right]]\n [[Image:image1.png|right|This image also floats right]]\n [[Image:image1.png|left|This image floats left]]\n\n== Completely unparsed text ==\nIf you have some text that you don''t want to be automatically parsed at all, put them inside <nowiki></nowiki> tags:\n  <nowiki><nowiki>some text that shouldn''t be parsed [[a|link]] and ''''''bold text''''''</nowiki></nowiki>\n<nowiki>some text that shouldn''t be parsed [[a|link]] and ''''''bold text''''''</nowiki>\n\n== Lists ==\nTo create a list, use the star character for a bulleted list, hash character for a numbered (ordered) list, or a combination:\n\n  * One bullet\n  * Another ''''''bullet''''''\n  *# a list item\n  *# another list item\n  *#* unordered, ordered, unordered\n  *#* again\n  *# back down one\n* One bullet\n* Another ''''''bullet''''''\n*# a list item\n*# another list item\n*#* unordered, ordered, unordered\n*#* again\n*# back down one\n\n\n== Variables ==\nThere are some shortcuts available for outputting special data such as the current date, hour, day, etc. By putting special keywords enclosed with two { and }-characters on each side, The Bug Genie will automatically translate this for you.\n\n''''''Here are some examples'''''':\n  {{CURRENTMONTH}}\n{{CURRENTMONTH}}\n  {{CURRENTDAY}}\n{{CURRENTDAY}}\n  {{SITENAME}}\n{{SITENAME}}\n\nThe following keywords are available for automatic substitution: CURRENTMONTH, CURRENTMONTHNAMEGEN, CURRENTMONTHNAME, CURRENTDAY, CURRENTDAYNAME, CURRENTYEAR, CURRENTTIME, NUMBEROFARTICLES, PAGENAME, NAMESPACE, SITENAME, SITETAGLINE.\n\n== Table of contents ==\nYou can get a table of content on your page (like the one in the top right on this page) by using the TOC variable the same way as the "normal" variables above. It doesn''t matter where you put this variable in your document, it will always be displayed in the top right corner.\n\n== Linking to issues ==\nIf you want to link to an issue, use one of the following keywords: ''''''bug'''''', ''''''issue'''''', ''''''ticket'''''', ''''''story'''''', followed by the issue number:\n  ticket #123\nticket [http://sample.com/product/issue/123 #123 - title from ticket here]\n  bug #200\nbug [http://sample.com/product/issue/200 #200 - serious bug]\n  issue TBG-24\nissue <strike>[http://sample.com/product/issue/TBG-24 TBG-24 - issue title]</strike>\n\nThe links will automatically include things such as the title, and a strikethrough if the issue is closed.\n\n== Examples / comments ==\nIf you want to put some text on the page that shouldn''t be interpreted (like the examples above), put two spaces in front of each line.\n    I''m an example because I have two spaces in front of me (actually I have four, but that''s just so you can see the two spaces)\n    This is a second line\n\n== Syntax highlighting ==\n\nIf you have a code sample you want to place on a page, you can use syntax highlighting to place line numbers, and color the code depending on what language it is.\n\nTo do this, surround your code in <nowiki><source></source></nowiki> tags. By default this will use the default language and line numbering settings set by the administrator. You can also override these parameters to match your code settings.\n\n=== Code language ===\n\nTo set the language of the code, simply specify it as a property of the source tag, such as <nowiki><source lang="php">echo(''hi'');</source></nowiki>. If you specify an language that does not exist then no colors will be applied, but there are over 130 language definitions available so chances are you will find the right one. A few of the odd ones are ''''''html4strict'''''' for HTML code, and ''''''dos'''''' for a DOS batch file.\n\n=== Line numbering ===\n\nThree parameters are available to set the line numbering. The first of these is called ''''''line'''''', and it sets the style of numbering that is performed. The following styles are available:\n* ''''''GESHI_FANCY_LINE_NUMBERS'''''' or ''''''highlighted'''''' - Line numbering with a highlighted row at a regular interval (this interval is configurable)\n* ''''''GESHI_NORMAL_LINE_NUMBERS'''''' or ''''''normal'''''' - Normal line numbers with no highlighting\n* ''''''Anything else'''''' - No numbers\nYou can also specify the number at which the numbers count from. This is useful if you have taken a snippet from line 1000 in a file, and you want to make the snippet show this so that its easier to match the two up. To do this, the parameter is ''''''line start="''''number''''"'''''' (there is a space between line and start), and it will start counting from ''''number''''.\n\nFinally, if you choose ''''''GESHI_FANCY_LINE_NUMBERS'''''' or ''''''highlighted'''''', every ''''n''''th row is highlighted. To set a value for ''''n'''', you use the highlight property. For example if you set it to 10, then every 10th row will be highlighted.\n\nBelow is an example of all of the properties in use.\n\n<nowiki>\n<source lang="php" line="highlighted" line start="54" highlight="3">\n<?php\nfunction do_something($stuff) {\necho($stuff);\n$mythings = array();\n$mythings[] = $stuff;\n}\n?>\n</source>\n</nowiki>\n\n<source lang="php" line="highlighted" line start="54" highlight="3">\n<?php\nfunction do_something($stuff) {\necho($stuff);\n$mythings = array();\n$mythings[] = $stuff;\n}\n?>\n</source>\n\n[[Category:Help]][[Category:Help:Howto]]', 1, 1328610625, NULL, 1),
(14, 'ConfigurePermissions', '= Setting up and understanding permissions in The Bug Genie =\n{{TOC}}\n== How are permissions defined? ==\nPermissions are defined on a 4-level basis, in the following order:\n# ''''''Global permissions'''''' - applies to all users, groups and teams\n# ''''''Group-specific permissions'''''' - applies only to members in that usergroup\n# ''''''Team-specific permissions'''''' - applies to any member of that team, and you can be a member of multiple teams\n# ''''''User-specific permissions'''''' - applies to the user it''s specified for\nEach new level in the above list overrides the previous one. That means if you''ve set "''''Report issues''''" to "''''Allowed''''" for "''''''''''Everyone''''''''''" and "''''Denied''''" for the "''''''''''Guest group''''''''''", then the group permission will override the global permission for all users in the guest group. In addition to this, The Bug Genie has a "''''Permissive''''" or "''''Restrictive''''" security setting which means if you trust all your users you can set this setting to "''''Permissive''''" and everyone will be able to do pretty much anything unless specifically denied. The only exception here is access to the configuration pages, where you must have explicit "''''Allowed''''" access. This gives you fine-grained control over what users, groups and teams can do.\n\n== Permissions hierarchy ==\nMany settings are grouped, and most specific settings (ex: "''''Can set issue priority''''") are only available as sub-permissions of more general groups. An example is the "''''Can edit basic information on your own issues''''" permission. This has three sub-settings, "''''Can edit title''''", "''''Can edit descrition''''" and "''''Can edit reproductions steps''''". Using "''''''''''Everyone''''''''''" as an example, if you set the top setting to "''''Allowed''''", everyone can edit basic information (title, description and reproduction steps) for issues they create. If you want to modify this, say you only want them to change the title, then you can do this two ways:\n# Set "''''Can edit description''''" and "''''Can edit reproduction steps''''" to "''''Denied''''". They will still have the basic "''''Can edit basic information (...)''''" setting, which means the title is editable, but the "''''Denied''''" settings for editing description and reproduction steps has higher priority, which means they will not be editable.\n# Unset the "''''Can edit basic information (...)''''" permission, and only set "''''Can edit title''''" to "''''Allowed''''".\nThis grouping is used several places, and is indicated by a little list icon next to the permission icon in the permissions overview. Clicking the list icon brings up all permissions in that group and lets you specify a more fine-grained permission in the group if desired.\n\n== Project-specific permissions ==\nAdding to all this, many permissions can be set on a project-specific basis. You might want to only let people report issues for a certain project, or restrict people from doing something on a specific project. The "''''Project-specific permissions''''"-tab in the permissions overview lets you define this. The same rules apply as above, but if a project-specific permission is set, then it will take presedence over the global permission.\n\n== Page access permissions ==\nYou can limit access to certain pages if you want to restrict users from accessing them. Some of these settings are available as both global and project-specific settings - such as the project-specific pages. This setting is "''''Permissive''''" by default and cannot be changed.\n\n== Datatype permissions ==\nEvery datatype (status, priority, category, etc) also have their own permissions available for each defined value. This setting is permissive by default (and cannot be changed), but lets you control who can set which field to a certain value. Even if you set a datatype field permission to "''''Denied''''" the user will still be able to ''''see'''' the field value, but they cannot set it to that value if the permission is "''''Denied''''". This can be useful in a workflow setting where you only want certain users to be able to mark issues as "''''Fixed''''", "''''Closed''''", etc.\n''''''These permissions are also available for all custom datatypes''''''.\n\n== Nice to know about the permissions handling ==\n* There is one important exception in effect when you''re reporting an issue: If a field is set to "''''''Required''''''" in the reporting process, then the user will have access to this field, even if it set in the permissions manager that they are not allowed to change it. This is to stop the reporting wizard from failing if you''re missing access to a required field. They still need access to a field value to set it, so if all field values are set to "''''Denied''''" then they won''t have any options to choose from. They will also not be able to change it after the issue has been reported if they don''t have access to do so.\n* If a user has read or write access to any of the configuration pages, they will automatically see the "''''Configure''''" link in the menu. If they don''t have access to any configuration page, this link will be hidden.\n* The permissions setting dialog will always show if a setting is permissive or restrictive by default, by showing a faded out "''''Denied''''" or faded out "''''Allowed''''" icon.\n\n[[Category:Help]][[Category:Help:Configuration]][[Category:Help:Howto]]', 1, 1328610625, NULL, 1),
(15, 'VCSIntegration', '{{TOC}}\n= VCS Integration =\nThe Bug Genie includes the VCS Integration module, which allows you to link your projects in The Bug Genie to a source code repository. This allows your commits to update issues, as well as access the repository viewer from The Bug Genie. However, before you can start, you need to set up the module - both globally and for each project using the module.\n\nPlease note that the git hook does not support the web access method (explained later), only the direct access method. In addition, a Mercurial hook is available, though it is not included due to license restrictions. Please refer to The Bug Genie website to obtain it.\n\n= Setting up =\n=== Global settings ===\nThere are two methods for VCS hooks (the code that interfaces between your source code repository and The Bug Genie) to communicate with your installation. The methods are ''''''direct access'''''' and ''''''http access''''''.\n\n==== Direct access ====\nIn direct access, the repository exists on the same server as The Bug Genie, or the hook can use SSH or other associated systems to access the server that The Bug Genie is hosted on. Therefore the user that VCS hooks are executed as will need access to The Bug Genie''s files, as well as a PHP executable. You will also require the CLI version of PHP installed.\n\nIn each hook, you will need to enable direct mode, and set the path to PHP and The Bug Genie''s tbg_cli file. You will also need to set the project ID, which can be found on the VCS configuration page. Please refer to each hook''s documentation (it may be included in the hook file itself) to see how to do this.\n\nThen, in the VCS Integration general settings tab, on the Configuration page, choose ''''''Direct access'''''' and click Save. You can then set up your projects.\n\n==== HTTP access ====\nAnother option would be to use HTTP access, where the hook will use HTTP to access a page on your installation of The Bug Genie, which will cause the checkin to be recorded. Choose this option if you are not able to use the direct method. You will also need this method to interface The Bug Genie with github.\n\nYou will need to configure hooks to use this mode, as well as set the project ID and URL to access. Refer to hook documentation for doing this (this may be included in the hook itself). Please also set a secure passkey to prevent unauthorized commits. This will need to be the same for every VCS, and set in each hook.\n\nYou will then need to choose ''''''HTTP access'''''' on the VCS Integration general settings tab. In addition, you will need to enter the passkey you set earlier on this screen.\n\nAfter saving these settings, you can then set up each project.\n\n==== Github support ====\nIf you wish to use the github hook, please set up HTTP access as previously discussed. You will then need to set up your Github project''s post-receive hook to contact The Bug Genie.\n\nTo do this, go to your project''s service hooks page on github, and set a Post-recieve URL to point to the following URL:\n  http://www.your-tbg-site.com/vcs_integration/report/PROJECTID/github/?passkey=PASSKEY\nYou will need to set the hostname and path correctly as appropriate, as well as replacing PASSKEY with the passkey you set, and PROJECTID with the ID number of the project, which can be found on the projects tab of VCS Integration configuration.\n\nAny commits which follow the rules for being picked up (see below) will then be recorded against their respective issues on push, though commits which make no changes to the filesystem (i.e. nothing added, removed or modified) will not be recorded in this release of VCS Integration.\n\n==== Gitorious support ====\nIf you have a locally hosted Gitorious server, then you can integrate that with The Bug Genie.\n\nAgain, set a post-receive hook as per your documentation, the URL for which is:\n  http://www.your-tbg-site.com/vcs_integration/report/PROJECTID/gitorious/?passkey=PASSKEY\n\nPlease note that the Gitorious support will only create comments and will not record filesystem changes, plus it will not work on the gitorious.com server.\n\n=== Project settings ===\nEach project to use VCS Integration will then require configuration. If a project will not be using VCS Integration, then you can leave its repository URL field empty.\n\nTo set up each project, you need to specify the repository browser you use. This will be used to build the right URLs to be displayed in The Bug Genie. In the ''''URL to repository browser'''' field, you enter the path to the root of the repository browser (i.e. this may be the page where a list of available repository browsers is shown). Finally you enter the repository name in the final box.\n\nAfter pressing save, a ''''''Source code'''''' link will be added to the project dashboard. You can use this link to test to see if the details are correct - if so this link will open the main page of the repository browser for your chosen project.\n\nAfter doing this, the module can be used by committing details as below, and they will show up in a new tab when viewing an issue, with links to view files, diffs, revision info and other details.\n\n= Using the module =\n\nWhen a commit is made which refers to an issue, then the issue will be updated with the commit log and details of every changed file. The Bug Genie will pick up any commits which contain any of the following words, followed by an issue number:\n  bug, issue, ticket, fix, fixes, fixed, fixing, applies to, closes\n  references, ref, addresses, re, see, according to, also see\n\nThe user assigned to the commit will depends on the user who committed it to the VCS. If you are using a VCS where your committer name is in the form "Joe Bloggs <jbloggs@example.com>", for example, then The Bug Genie will search for users with the email as provided.\n\nIf a user can not be found, or if there is no email, then The Bug Genie will take the name part (or username) and search against the Full Name field. Failing that, we then search against the friendly name and then finally the user name. If still no user can be found then no user will be recorded for the commit.\n\nLinks on the project dashboard to view the source code repository is added upon set up, and each commit will have a link to view the commit details, a log of commits, diffs and links to view files.\n[[Category:Help]]\n', 1, 1328610625, NULL, 1),
(16, 'Configuration', '#REDIRECT [[Category:Help:Configuration]]', 1, 1328610625, NULL, 1),
(17, 'CreatingIssues', '{{TOC}}\n= Introduction =\nCreating issues in The Bug Genie requires one or more existing projects, as all issues are filed against projects.\n\n= How to start creating an issue =\nWhen a project has been created, an issue can be filed by either using the "Report an issue" tab inside the project space, or by using the "Report an issue" button on the frontpage, if the project is visible there. Both methods will let you pick an issue type directly via a dropdown menu. If you don''t specify an issue type (by clicking directly on the "Report an issue" links, you can specify as the first step on the reporting page.\n\n= Specifying issue details =\nWhen you report an issue, you have to specify the details you want to be saved with the issue when it is reported. By default these details include items such as a descriptive title, a longer description about the issue and a reproduction step list. \n\nThe available and required fields you have to fill out vary depending on the type of issue you are reporting and the associated IssuetypeScheme. The only field that will always be available (and required) is the descriptive title, other fields may vary. A short description of each possible field follows:\n\n=== Title ===\nThis is a short (max 150 char) but descriptive overview of the issue you''re filing. It should be descriptive enough to identify the issue, but short enough to fit on one line.\n* Bad example: ''''The application crashes constantly''''\n* Good example: ''''Whenever I let my cat sleep on the keyboard, the application crashes after about two hours''''\n\n=== Description ===\nA thorough description of the issue. Use as many words as is needed to describe the issue. Pretend that you''re describing it to your mom.\n* Bad example: ''''The stupid application crashed on me! Just as I was about to send my document!"\n* Good example: ''''I opened up the application to write a letter to my aunt. I had been writing for two hours non-stop, and was about to send it, when I tripped and accidentally hit some keys on my keyboard and the application crashed with a message saying "Invalid key combination: CTRL+ALT+PAGEUP+F+S+L+G"''''\n\n=== Reproduction steps ===\nA step-by-step guide to reproducing the issue you''re reporting. Try to be as descriptive as possible and include any and all steps that would be necessary to reproduce the issue for someone that has never experienced it.\n* Bad example: ''''The application just randomly crashes, and I have no idea when, where or why. It''s usually dark and I don''t know what I''m doing''''\n* Good example: \n# Open Application\n# Click "New document"\n# Type some text\n# Accidentally trip and hit the key combination CTRL+ALT+PAGEUP+F+S+L+G\n# Observe application crashing\n\n== Additional details ==\nDepending on the [[IssuetypeSceme|issue type scheme]], there might be additional fields available in the grey area below the main reporting area (known as the "additional fields area") where you can add less important, but still potentially useful information about the issue. If such fields are reportable and marked as "additional", they will show up here, instead of in the main reporting view.\n\n= Submitting an issue =\nWhen you''ve filled out the form and are ready to submit the issue, click the "''''''file issue''''''" button located in the green bar below the main reporting area. As soon as the issue has been saved, it will - based on the settings for that specific issue type - either reload the page with a new reporting form and a link to the submitted issue at the top, or redirect you to the issue you just reported.\n\n[[Category:Help]] [[Category:Help:Howto]]', 1, 1328610625, NULL, 1);
INSERT INTO `tbg3_articles` (`id`, `name`, `content`, `is_published`, `date`, `author`, `scope`) VALUES
(18, 'IssuetypeScheme', '= Description =\nAn issue type scheme is the scheme that specifies - per issue type - which issue fields are:\n* available for reporting via the "main" reporting view\n* available for reporting via the "additional information" pane at the bottom\n* required for reporting\n* available on the "view issue" page\n\nAll issue types have their own settings for which fields are available / required on both the reporting page and on the issue overview page. These settings are deeply integrated in The Bug Genie, and always respected.\n\nOn the [[CreatingIssues|Report an issue]] page, fields will be displayed and marked as required based on the settings specified in the issue type scheme in use by the selected project. These settings are also used to determine which fields are displayed on the "View issue" page.\n\n= Custom fields =\nBecause the DefaultIssuetypeScheme is not editable, you have to create a copy of it and modify that copy to be able to display any CustomFields, as they would not be available by default. Which issuetype scheme a project uses is available in the project configuration popup.', 1, 1328610625, NULL, 1),
(19, 'WorkflowDefault', '= Overview =\nThe default workflow is used for issue types that does not have a workflow set in the workflow scheme associated with the current project. The default workflow is also used in the default workflow scheme setup.<br>\nThis is an overview of the default workflow setup with its steps and transitions:\n\n{|\n! Step !! Connected status !! State !! Outgoing transitions !! Notes\n|-\n| ''''''New'''''' || ''''New'''' || Open and editable || Investigate issue â†’ Investigating<br>Confirm issue â†’ Confirmed<br>Reject issue â†’ Rejected<br>Accept issue â†’ In progress<br>Resolve issue â†’ Closed || This is the default, initial step all issues start in\n|-\n| ''''''Investigating'''''' || ''''Investigating'''' || Open and editable || Request more information â†’ New<br>Confirm issue â†’ Confirmed<br>Reject issue â†’ Rejected<br>Accept issue â†’ In progress || \n|-\n| ''''''Confirmed'''''' || ''''Confirmed'''' || Open but not editable || Accept issue â†’ In progress <br>Assign issue â†’ In progress <br>Resolve issue â†’ Closed || \n|-\n| ''''''In progress'''''' || ''''Being worked on'''' || Open but not editable || Reject issue â†’ Rejected <br>Mark ready for testing â†’ Ready for testing <br>Resolve issue â†’ Closed || \n|-\n| ''''''Ready for testing'''''' || ''''Ready for testing / QA'''' || Open but not editable || Resolve issue â†’ Closed <br>Test issue solution â†’ Testing || \n|-\n| ''''''Testing'''''' || ''''Testing / QA'''' || Open but not editable || Accept issue solution â†’ Closed <br>Reject issue solution â†’ In progress || \n|-\n| ''''''Rejected'''''' || ''''Not a bug'''' || Closed and not editable || Reopen issue â†’ New || \n|-\n| ''''''Closed'''''' || - || Closed and not editable || Reopen issue â†’ New || This workflow step is not linked directly to a status\n|}\n\nSome things to note about the default workflow:\n* It is not possible to directly move an issue from new to closed - it has to either be accepted or assigned first. You can however move it directly to rejected if it is invalid or duplicate\n* The ''''Closed'''' step is not linked to a status, but has two valid statuses - ''''''Closed'''''' and ''''''Postponed''''''', 1, 1328610625, NULL, 1),
(20, 'MainPage', 'This is the global wiki frontpage.', 1, 1328610625, NULL, 1),
(21, 'CSVImport', '= Importing data from CSV files =\n\nYou can import data to The Bug Genie from a CSV file, pasted into the Import screen. Currently you can only import projects, issues and clients. This document explains how to use the Import feature.\n\nData must be provided in comma-separated format, with the first row containing column names (which have restrictions - see below). Column values should be enclosed in speech marks if appropriate - The Bug Genie will handle these correctly. In addition, The Bug Genie also performs a number of validation steps to ensure the data is valid, also explained below.\n\nWhen the tables mention the ''column name'', this is what should be in the first row to indicate the column. Some columns are required, some are optional, however if you specify a column in the header row it must be included in every subsequent row. Likewise, you can not specify data in subsequent rows which does not have a matching column marked in the header row.\n\n== Importing projects ==\n\n{|\n! Column name !! Required !! Contains !! Other details\n|-\n| name || Yes || Project name || none\n|-\n| prefix || No || Prefix for project issue numbers || By specifying a prefix, the project will automatically use the prefix\n|-\n| scrum || No || Should scrum (Agile) development be used || 1 for yes, 0 for no\n|-\n| owner || No (yes if owner_type specified) || User or Team ID for project owner || none\n|-\n| owner_type || No (yes if owner specified) || Type identifier for owner || 1 for user, 2 for team\n|-\n| lead || No (yes if lead_type specified) || User or Team ID for project leader || none\n|-\n| lead_type || No (yes if lead specified) || Type identifier for leader || 1 for user, 2 for team\n|-\n| qa || No (yes if qa_type specified) || User or Team ID for project''s QA responsible || none\n|-\n| qa_type || No (yes if qa specified) || Type identifier for QA responsible || 1 for user, 2 for team\n|-\n| descr || No || Description || none\n|-\n| doc_url || No || URL for documentation website || none\n|-\n| freelance || No || Can users edit issue properties without working on the issue || 1 for yes, 0 for no\n|-\n| en_builds || No || Are builds enabled || 1 for yes, 0 for no\n|-\n| en_comps || No || Are components enabled || 1 for yes, 0 for no\n|-\n| en_editions || No || Are editions enabled || 1 for yes, 0 for no\n|-\n| workflow_id || No || ID number of workflow scheme || none\n|-\n| client || No || ID number of client || none\n|-\n| show_summary || No || Should a summary be shown on the frontpage || 1 for yes, 0 for no\n|-\n| summary_type || No || What to show on the frontpage || Either issuetypes or milestones\n|-\n| issuetype_scheme || No || ID number of issuetype scheme || none\n|-\n| allow_reporting || No || Set whether new issues can be reported against this project || 1 for yes, 0 for no\n|-\n| autoassign || No || Set whether to automatically assign issues based on the leader for projects, editions and components || 1 for yes, 0 for no\n|}\n\n== Importing projects ==\n\n{|\n! Column name  !! Required !! Contains !! Other details\n|-\n| name || Yes || Client name || none\n|-\n| email || No || Email address || none\n|-\n| telephone || No || Telephone number || none\n|-\n| fax || No || Fax number || none\n|-\n| website || No || Website address || none\n|}\n\n== Importing issues ==\n\n{|\n! Column name !! Required !! Contains !! Other details\n|-\n| title || Yes || Issue title || none\n|-\n| project || Yes || Project ID || none\n|-\n| descr || No || Issue description || none\n|-\n| repro || No || Reproduction steps || none\n|-\n| state || No || Type identifier for owner || 1 for closed, 0 for open\n|-\n| status || No || ID for status value || none\n|-\n| posted_by || No || User ID (NOT team) for issue poster || If not specified, importing user will be set\n|-\n| owner || No (yes if owner_type specified) || User or Team ID for issue owner || none\n|-\n| owner_type || No (yes if owner specified) || Type identifier for owner || 1 for user, 2 for team\n|-\n| assigned || No (yes if assigned_type specified) || User or Team ID for issue assignee || none\n|-\n| assigned_type || No (yes if assigned specified) || Type identifier for assignee || 1 for user, 2 for team\n|-\n| resolution || No || ID of resolution value || none\n|-\n| issue_type || Yes || ID of issue type || none\n|-\n| priority || No || ID of priority value || none\n|-\n| category || No || ID of category value || none\n|-\n| severity || No || ID of severity value || none\n|-\n| reproducability || No || ID of reproducability value || none\n|-\n| votes || No || Number of votes || none\n|-\n| percentage || No || How much of the issue is complete || 0 to 100 inclusive\n|-\n| blocking || No || Does the issue block the next release || 1 for yes, 0 for no\n|-\n| milestone || No || ID number of milestone || none\n|}\n\n[[Category:Help]]\n', 1, 1328610625, NULL, 1),
(22, 'Category:Help:HowTo', '[[Category:Help]]', 1, 1328610625, NULL, 1),
(23, 'FrontpageArticle', '== Welcome to The Bug Genie! ==\n\nThe Bug Genie makes development a lot easier and manageable. With The Bug Genie you get:<br>\n[[http://thebuggenie.com/features.php#project_management|Project management]], [[http://thebuggenie.com/features.php#issue_tracking|powerful issue tracking]] with advanced [[http://thebuggenie.com/features.php#custom_workflow|workflow support]], [[http://thebuggenie.com/features.php#vcs_integration|source code control]], [[http://thebuggenie.com/features.php#wiki|full-fledged wiki]] for all your documentation needs, and more.\n\nPlease take a few moments setting up your new issue tracker, by clicking the ''''''[[TBG:configure|Configure The Bug Genie]]'''''' link at the very bottom of this page.<br>\nAll configuration takes place from this configuration center, and you can always access it by clicking the link in the footer.\n\nFor more information on getting started, have a look at [[GettingStarted]], [[Configuration]] and [[CreatingIssues]].\n\nTo learn more about the wiki formatting used in The Bug Genie, check out [[WikiFormatting]].\n\n<br>\n''''''Enjoy The Bug Genie!''''''\n\n''''-The Bug Genie development team''''<br>\n[http://www.thebuggenie.com]\n\n''''ps: this page can be edited from [[FrontpageArticle]]''''\n', 1, 1328610625, NULL, 1),
(24, 'Category:Help', 'This is a list of all the available help articles in The Bug Genie. If you are stuck, look here for help.', 1, 1328610625, NULL, 1),
(25, 'WorkflowTransition', '== Workflow transitions explained ==\nA transition is when an issue moves from one step to another in the workflow associated with that project/issue type combination. The workflow transition is what triggers email notifications, changes status, resolution, issue state, and more. Without a transition happening, changes to an issue state will not be consistent with the data associated with that workflow step. The transition being performed is essential for the workflow to function properly.\n\n== Transition details ==\nWhen a transition is defined, it can have pre-/post-validators, and post-transition actions associated with it.\n\n=== Pre-validators ===\nA pre-validator is a set of rules that must apply to an issue for the transition to be available. For example, you can set a "maximum number of assigned issues", which means that for that transition to be available to the developer, he can not have more than the specified number of issues assigned. These pre-validation rules are shown in the workflow configuration view after selecting a transaction.\n\n=== Post-validators ===\nThe post-validators validates input from the user, and makes sure it passes a valid set of allowed values. For example (in the default workflow), issues that are moving from the "In progress" step to the "Resolved" step will have to have the status set to one of the following: "Done", "Fixed" or "Closed". These validation rules are also integrated with the transition view, so it is not possible to modify the issue property to a value that is not allowed in the transitions'' post-validation rule set.\n\n=== Post-transition actions ===\nA post-transition action is an action that defines what will be done with the issue after the transaction validation is complete. This can be everything from applying a user-specified priority/resolution, to marking an issue as being worked on by a user (for automated time tracking), changing the percent complete field (to give a good visual indicator of how complete an issue is) or changing the user assigned to an issue. Post-transition actions occur at the very end of the transition, right before the issues step is changed to the outgoing step of the transition.\n\n=== Pre- vs. post-validators ===\nThere is a fundamental difference between pre- and post-validators. Whereas the post-validators validate user input, such as a status provided in the [[WorkflowTransitionView|transition view]], the pre-validators is what decides whether the user will even be able to trigger the transition view or transition. A pre-validation rule keeps the transition from being ''''''available'''''' under certain conditions, whereas the post-validation rules keeps the issue from ''''''having its properties set to invalid values''''''.', 1, 1328610625, NULL, 1),
(26, 'GettingStarted', '= Getting started with The Bug Genie =\n{{TOC}}\n== Name, slogan and other settings ==\nYou might want to set the name and slogan, or change some of the other default settings. You can do this from [[TBG:configure_settings|Configure -> Settings]], where you have all the main settings available.\n\n== Your first project ==\nThe first thing you want to do is set up your project. Although The Bug Genie can be used without any projects, it''s mainly an issue tracker, and that''s where it excels.\n\nTo add a project, log in as an admin, and either click the little configuration icon next to the project list on the frontpage, or click [[TBG:configure_projects|Configure -> projects]]. This will take you to the projects list. To create a project from here, simply enter the project name in the text box and click "Add" or press Enter.\n\nThe Bug Genie is now ready to be used for issue reporting with your new project. However, you might want to set up more information about the project. Click the "Edit project" link on the project and change any settings in here. From that page you can also add a project description, release date and more information about your project. This is also where you set up editions, components, releases, milestones, and more.\n\n=== Permissions ===\nYour project will initially only be available to the user group that created the project. If you created the project as the administrator user, the project will initially be available only to the "Administrator" group. You can change this by clicking the "more details" link when you create the project. You can also change project permissions for other user groups by going to [[TBG:configure_permissions|Configure -> Permissions]]. Select the "Project specific permissions" tab, and click the project name. From here you can set permissions for all groups and teams in the system. \n\nTo allow easy bug reporting if the global security setting is set to "Restrictive", enable the following permission groups:\n* Can access project\n* Can access all project pages\n* Can create issues, edit basic information on issues reported by the user and close/re-open them\n\nTo do this, click the permission group text, and then click the icons for either global access, group-specific- or team-specific access.\n\n''''For smaller teams, consider setting the global security setting to "Permissive". This can be done from [[TBG:configure_settings|Configure -> settings]] under the "Users & security" tab.''''\n\n\n=== Project team ===\nSomeone is usually working on your project. You should add developers working on The Bug Genie to your project. (This of course requires that your developers have user accounts). Click the "Edit project" icon on your project, and then open up the ''''''Related users'''''' tab. Add developers, project managers, testers and documentors from this page. By adding developers to projects, you ensure that they get access to project specific features such as project information on their dashboard, issue notifications, and they also appear on the projects'' team page.\n\n=== Editions, components & releases ===\n==== Releases ====\nIf your project publishes regular test releases / builds, you should enable releases. This lets you add a specific build / release name / id to an issue so that you can target the issues progress through a set of releases. When this setting is enabled you can also add a release to your issue when you report it, and even make it mandatory during the report process for any given issue type.\n\n==== Components ====\nOften a project is made up of several very specific pieces of code or functionality. Such components can be "search", "wiki", "admin interface", etc. and is up to you to decide. Similar to above (releases), an issue can also target a specific component. You can also notify certain developers or teams when a new issue for a certain component has been reported by adding them to the specific component on the project "Related users" configuration page.\n\n==== Editions ====\nIn some cases your project may also be made up of several different editions. Editions are mainly defined by their included components, and one edition usually includes a different feature set from another edition. You may also want to use editions for version tracking, and set up editions between major versions, such as "MYPROJECT version 1", "MYPROJECT version 2", and so on.\n\n== Reporting issues ==\nYou can report issues for any projects registered in the bug genie by clicking the "Report an issue" tab in the top menu bar, or the green "Report an issue" button which is shown in the project menu bar. If you''re not in any project (such as in the global wiki, your user account settings, dashboard, etc), the report issue form will let you choose a project to report an issue for. Otherwise, the issue will be reported for the currently selected issue.\n\n=== Customizing issue types ===\nThe Bug Genie comes with a predefined set of issue types available out of the box. These can be customized to show different fields during issue reporting and in the issue overview page. You can do this from [[TBG:configure_issuetypes|Configure -> issue types]], where you can also add new issue types. Keep in mind that The Bug Genie uses the information in these issue types to include them in areas of the system where they would be relevant, such as showing any custom "bug report" issue types in bug report statistics, etc - use this to your advantage!\n\n=== Adding custom fields ===\nIf the standard issue fields aren''t enough for your needs, you can add custom ones from [[TBG:configure_issuefields|Configure -> issue fields]]. These fields are treated just as other issue fields in the system, and are available for searches and issue type customization. There are several types of custom fields to choose from, such as radio buttons, input areas, list of users, secondary status fields, dates, and more.\n\n[[Category:Help]][[Category:Help:Howto]]', 1, 1328610625, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_articleviews`
--

CREATE TABLE IF NOT EXISTS `tbg3_articleviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT '0',
  `article_id` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_billboardposts`
--

CREATE TABLE IF NOT EXISTS `tbg3_billboardposts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `link` text,
  `is_deleted` tinyint(1) DEFAULT '0',
  `date` int(10) DEFAULT '0',
  `target_board` int(10) DEFAULT '0',
  `article_id` int(10) unsigned DEFAULT '0',
  `author` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_buddies`
--

CREATE TABLE IF NOT EXISTS `tbg3_buddies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned DEFAULT '0',
  `bid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_builds`
--

CREATE TABLE IF NOT EXISTS `tbg3_builds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `version_major` int(3) DEFAULT '0',
  `version_minor` int(3) DEFAULT '0',
  `version_revision` int(5) DEFAULT '0',
  `release_date` int(10) DEFAULT '0',
  `isreleased` tinyint(1) DEFAULT '0',
  `locked` tinyint(1) DEFAULT '0',
  `edition` int(10) unsigned DEFAULT '0',
  `project` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_clientmembers`
--

CREATE TABLE IF NOT EXISTS `tbg3_clientmembers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned DEFAULT '0',
  `cid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_clients`
--

CREATE TABLE IF NOT EXISTS `tbg3_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_comments`
--

CREATE TABLE IF NOT EXISTS `tbg3_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `target_id` int(10) DEFAULT '0',
  `target_type` int(3) DEFAULT '0',
  `content` text,
  `posted` int(10) DEFAULT '0',
  `updated` int(10) DEFAULT '0',
  `comment_number` int(10) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `is_public` tinyint(1) DEFAULT '1',
  `module` varchar(50) DEFAULT NULL,
  `system_comment` tinyint(1) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `updated_by` int(10) unsigned DEFAULT '0',
  `posted_by` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_componentassignees`
--

CREATE TABLE IF NOT EXISTS `tbg3_componentassignees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `target_type` int(5) DEFAULT '0',
  `component_id` int(10) unsigned DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `tid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_components`
--

CREATE TABLE IF NOT EXISTS `tbg3_components` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `version_major` int(3) DEFAULT '0',
  `version_minor` int(3) DEFAULT '0',
  `version_revision` int(5) DEFAULT '0',
  `leader` int(10) DEFAULT '0',
  `leader_type` int(3) DEFAULT '0',
  `project` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_customfieldoptions`
--

CREATE TABLE IF NOT EXISTS `tbg3_customfieldoptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `itemdata` varchar(100) DEFAULT NULL,
  `sort_order` int(100) DEFAULT '0',
  `customfield_key` varchar(100) DEFAULT NULL,
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_customfields`
--

CREATE TABLE IF NOT EXISTS `tbg3_customfields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `key` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `instructions` text,
  `itemtype` int(10) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_editionassignees`
--

CREATE TABLE IF NOT EXISTS `tbg3_editionassignees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `target_type` int(5) DEFAULT '0',
  `edition_id` int(10) unsigned DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `tid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_editioncomponents`
--

CREATE TABLE IF NOT EXISTS `tbg3_editioncomponents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `edition` int(10) unsigned DEFAULT '0',
  `component` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_editions`
--

CREATE TABLE IF NOT EXISTS `tbg3_editions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `leader` int(10) DEFAULT '0',
  `leader_type` int(3) DEFAULT '0',
  `owner` int(10) DEFAULT '0',
  `owner_type` int(3) DEFAULT '0',
  `doc_url` varchar(200) DEFAULT '',
  `qa_responsible` int(10) DEFAULT '0',
  `qa_responsible_type` int(3) DEFAULT '0',
  `release_date` int(10) DEFAULT '0',
  `isreleased` tinyint(1) DEFAULT '0',
  `isplannedreleased` tinyint(1) DEFAULT '0',
  `locked` tinyint(1) DEFAULT '0',
  `project` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_files`
--

CREATE TABLE IF NOT EXISTS `tbg3_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `real_filename` varchar(250) DEFAULT NULL,
  `content_type` varchar(250) DEFAULT NULL,
  `original_filename` varchar(250) DEFAULT NULL,
  `uploaded_at` int(10) DEFAULT '0',
  `content` longblob,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_groups`
--

CREATE TABLE IF NOT EXISTS `tbg3_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tbg3_groups`
--

INSERT INTO `tbg3_groups` (`id`, `name`, `scope`) VALUES
(1, 'Administrators', 1),
(2, 'Regular users', 1),
(3, 'Guests', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issueaffectsbuild`
--

CREATE TABLE IF NOT EXISTS `tbg3_issueaffectsbuild` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `confirmed` tinyint(1) DEFAULT '0',
  `build` int(10) unsigned DEFAULT '0',
  `issue` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `status` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issueaffectscomponent`
--

CREATE TABLE IF NOT EXISTS `tbg3_issueaffectscomponent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `confirmed` tinyint(1) DEFAULT '0',
  `component` int(10) unsigned DEFAULT '0',
  `issue` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `status` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issueaffectsedition`
--

CREATE TABLE IF NOT EXISTS `tbg3_issueaffectsedition` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `confirmed` tinyint(1) DEFAULT '0',
  `edition` int(10) unsigned DEFAULT '0',
  `issue` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `status` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issuecustomfields`
--

CREATE TABLE IF NOT EXISTS `tbg3_issuecustomfields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issue_id` int(10) unsigned DEFAULT '0',
  `customfields_id` int(10) unsigned DEFAULT '0',
  `option_value` text,
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issuefields`
--

CREATE TABLE IF NOT EXISTS `tbg3_issuefields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_key` varchar(100) DEFAULT NULL,
  `required` tinyint(1) DEFAULT '0',
  `is_reportable` tinyint(1) DEFAULT '0',
  `is_additional` tinyint(1) DEFAULT '0',
  `issuetype_id` int(10) unsigned DEFAULT '0',
  `issuetype_scheme_id` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `tbg3_issuefields`
--

INSERT INTO `tbg3_issuefields` (`id`, `field_key`, `required`, `is_reportable`, `is_additional`, `issuetype_id`, `issuetype_scheme_id`, `scope`) VALUES
(1, 'description', 1, 1, 0, 1, 1, 1),
(2, 'reproduction_steps', 1, 1, 0, 1, 1, 1),
(3, 'edition', 0, 1, 0, 1, 1, 1),
(4, 'build', 0, 1, 0, 1, 1, 1),
(5, 'component', 0, 1, 0, 1, 1, 1),
(6, 'category', 0, 1, 0, 1, 1, 1),
(7, 'reproducability', 0, 1, 0, 1, 1, 1),
(8, 'resolution', 0, 1, 1, 1, 1, 1),
(9, 'severity', 0, 1, 1, 1, 1, 1),
(10, 'milestone', 0, 1, 1, 1, 1, 1),
(11, 'estimated_time', 0, 1, 1, 1, 1, 1),
(12, 'spent_time', 0, 0, 0, 1, 1, 1),
(13, 'percentcomplete', 0, 1, 1, 1, 1, 1),
(14, 'priority', 0, 1, 1, 1, 1, 1),
(15, 'description', 1, 1, 0, 2, 1, 1),
(16, 'milestone', 0, 1, 1, 2, 1, 1),
(17, 'category', 0, 1, 1, 2, 1, 1),
(18, 'estimated_time', 0, 1, 1, 2, 1, 1),
(19, 'spent_time', 0, 0, 0, 2, 1, 1),
(20, 'percent_complete', 0, 1, 1, 2, 1, 1),
(21, 'priority', 0, 1, 1, 2, 1, 1),
(22, 'votes', 0, 0, 0, 2, 1, 1),
(23, 'description', 1, 1, 0, 3, 1, 1),
(24, 'milestone', 0, 1, 1, 3, 1, 1),
(25, 'category', 0, 1, 1, 3, 1, 1),
(26, 'estimated_time', 0, 1, 1, 3, 1, 1),
(27, 'spent_time', 0, 0, 0, 3, 1, 1),
(28, 'percent_complete', 0, 1, 1, 3, 1, 1),
(29, 'priority', 0, 1, 1, 3, 1, 1),
(30, 'description', 0, 1, 0, 4, 1, 1),
(31, 'category', 0, 1, 1, 4, 1, 1),
(32, 'estimated_time', 0, 1, 1, 4, 1, 1),
(33, 'spent_time', 0, 0, 0, 4, 1, 1),
(34, 'percent_complete', 0, 1, 1, 4, 1, 1),
(35, 'priority', 0, 1, 1, 4, 1, 1),
(36, 'milestone', 0, 1, 1, 4, 1, 1),
(37, 'description', 0, 1, 0, 5, 1, 1),
(38, 'percent_complete', 0, 1, 0, 5, 1, 1),
(39, 'category', 0, 1, 0, 5, 1, 1),
(40, 'milestone', 0, 1, 0, 5, 1, 1),
(41, 'estimated_time', 0, 1, 0, 5, 1, 1),
(42, 'spent_time', 0, 1, 0, 5, 1, 1),
(43, 'priority', 0, 1, 0, 5, 1, 1),
(44, 'description', 1, 1, 0, 6, 1, 1),
(45, 'milestone', 0, 1, 1, 6, 1, 1),
(46, 'category', 0, 1, 1, 6, 1, 1),
(47, 'estimated_time', 0, 1, 1, 6, 1, 1),
(48, 'spent_time', 0, 0, 0, 6, 1, 1),
(49, 'percent_complete', 0, 1, 1, 6, 1, 1),
(50, 'priority', 0, 1, 1, 6, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issuefiles`
--

CREATE TABLE IF NOT EXISTS `tbg3_issuefiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `issue_id` int(10) unsigned DEFAULT '0',
  `file_id` int(10) unsigned DEFAULT '0',
  `attached_at` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issuerelations`
--

CREATE TABLE IF NOT EXISTS `tbg3_issuerelations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mustfix` tinyint(1) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `parent_id` int(10) unsigned DEFAULT '0',
  `child_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issues`
--

CREATE TABLE IF NOT EXISTS `tbg3_issues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issue_no` int(10) DEFAULT '0',
  `title` varchar(200) DEFAULT NULL,
  `posted` int(10) DEFAULT '0',
  `last_updated` int(10) DEFAULT '0',
  `project_id` int(10) unsigned DEFAULT '0',
  `description` text,
  `state` tinyint(1) DEFAULT '0',
  `posted_by` int(10) unsigned DEFAULT '0',
  `owner` int(10) DEFAULT '0',
  `owner_type` int(2) DEFAULT '0',
  `user_pain` float DEFAULT '0',
  `pain_bug_type` int(3) DEFAULT '0',
  `pain_effect` int(3) DEFAULT '0',
  `pain_likelihood` int(3) DEFAULT '0',
  `assigned_to` int(10) DEFAULT '0',
  `reproduction_steps` text,
  `resolution` int(10) unsigned DEFAULT '0',
  `issuetype` int(10) unsigned DEFAULT '0',
  `status` int(10) unsigned DEFAULT '0',
  `priority` int(10) unsigned DEFAULT '0',
  `category` int(10) unsigned DEFAULT '0',
  `severity` int(10) unsigned DEFAULT '0',
  `reproducability` int(10) unsigned DEFAULT '0',
  `scrumcolor` varchar(7) DEFAULT '#FFFFFF',
  `estimated_months` int(10) DEFAULT '0',
  `estimated_weeks` int(10) DEFAULT '0',
  `estimated_days` int(10) DEFAULT '0',
  `estimated_hours` int(10) DEFAULT '0',
  `estimated_points` int(10) DEFAULT '0',
  `spent_months` int(10) DEFAULT '0',
  `spent_weeks` int(10) DEFAULT '0',
  `spent_days` int(10) DEFAULT '0',
  `spent_hours` int(10) DEFAULT '0',
  `votes_total` int(10) DEFAULT '0',
  `spent_points` int(10) DEFAULT '0',
  `percent_complete` int(2) DEFAULT '0',
  `assigned_type` int(2) DEFAULT '0',
  `duplicate_of` int(10) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `blocking` tinyint(1) DEFAULT '0',
  `locked` tinyint(1) DEFAULT '0',
  `being_worked_on_by_user` int(10) unsigned DEFAULT '0',
  `being_worked_on_by_user_since` int(10) DEFAULT '0',
  `milestone` int(10) unsigned DEFAULT '0',
  `workflow_step_id` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issuetags`
--

CREATE TABLE IF NOT EXISTS `tbg3_issuetags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issue_id` int(10) unsigned DEFAULT '0',
  `tag_name` varchar(50) DEFAULT NULL,
  `added` int(10) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issuetypes`
--

CREATE TABLE IF NOT EXISTS `tbg3_issuetypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `itemdata` varchar(30) DEFAULT 'bug_report',
  `description` text,
  `task` tinyint(1) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `tbg3_issuetypes`
--

INSERT INTO `tbg3_issuetypes` (`id`, `name`, `itemdata`, `description`, `task`, `scope`) VALUES
(1, 'Bug report', 'bug_report', 'Have you discovered a bug in the application, or is something not working as expected?', 0, 1),
(2, 'Feature request', 'feature_request', 'Are you missing some specific feature, or is your favourite part of the application a bit lacking?', 0, 1),
(3, 'Enhancement', 'enhancement', 'Have you found something that is working in a way that could be improved?', 0, 1),
(4, 'Task', 'task', NULL, 1, 1),
(5, 'User story', 'developer_report', 'Doing it Agile-style. Issue type perfectly suited for entering user stories', 0, 1),
(6, 'Idea', 'idea', 'Express yourself - share your ideas with the rest of the team!', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issuetype_schemes`
--

CREATE TABLE IF NOT EXISTS `tbg3_issuetype_schemes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbg3_issuetype_schemes`
--

INSERT INTO `tbg3_issuetype_schemes` (`id`, `scope`, `name`, `description`) VALUES
(1, 1, 'Default issuetype scheme', 'This is the default issuetype scheme. It is used by all projects with no specific issuetype scheme selected. This scheme cannot be edited or removed.');

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issuetype_scheme_link`
--

CREATE TABLE IF NOT EXISTS `tbg3_issuetype_scheme_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issuetype_scheme_id` int(10) unsigned DEFAULT '0',
  `issuetype_id` int(10) unsigned DEFAULT '0',
  `reportable` tinyint(1) DEFAULT '1',
  `redirect_after_reporting` tinyint(1) DEFAULT '1',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `tbg3_issuetype_scheme_link`
--

INSERT INTO `tbg3_issuetype_scheme_link` (`id`, `issuetype_scheme_id`, `issuetype_id`, `reportable`, `redirect_after_reporting`, `scope`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 1, 2, 1, 1, 1),
(3, 1, 3, 1, 1, 1),
(4, 1, 4, 0, 1, 1),
(5, 1, 5, 0, 0, 1),
(6, 1, 6, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issue_estimates`
--

CREATE TABLE IF NOT EXISTS `tbg3_issue_estimates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issue_id` int(10) unsigned DEFAULT '0',
  `edited_by` int(10) unsigned DEFAULT '0',
  `edited_at` int(10) DEFAULT '0',
  `estimated_months` int(10) DEFAULT '0',
  `estimated_weeks` int(10) DEFAULT '0',
  `estimated_days` int(10) DEFAULT '0',
  `estimated_hours` int(10) DEFAULT '0',
  `estimated_points` float DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_issue_spenttimes`
--

CREATE TABLE IF NOT EXISTS `tbg3_issue_spenttimes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issue_id` int(10) unsigned DEFAULT '0',
  `edited_by` int(10) unsigned DEFAULT '0',
  `edited_at` int(10) DEFAULT '0',
  `spent_months` int(10) DEFAULT '0',
  `spent_weeks` int(10) DEFAULT '0',
  `spent_days` int(10) DEFAULT '0',
  `spent_hours` int(10) DEFAULT '0',
  `spent_points` float DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_links`
--

CREATE TABLE IF NOT EXISTS `tbg3_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(300) DEFAULT NULL,
  `link_order` int(3) DEFAULT '0',
  `target_type` varchar(30) DEFAULT NULL,
  `target_id` int(10) DEFAULT '0',
  `description` varchar(100) DEFAULT '',
  `uid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `tbg3_links`
--

INSERT INTO `tbg3_links` (`id`, `url`, `link_order`, `target_type`, `target_id`, `description`, `uid`, `scope`) VALUES
(1, 'http://www.thebuggenie.com', 1, 'main_menu', 0, 'The Bug Genie homepage', 0, 1),
(2, 'http://www.thebuggenie.com/forum', 2, 'main_menu', 0, 'The Bug Genie forums', 0, 1),
(3, NULL, 3, 'main_menu', 0, NULL, 0, 1),
(4, 'http://thebuggenie.com/thebuggenie', 4, 'main_menu', 0, 'Online issue tracker', 0, 1),
(5, '', 5, 'main_menu', 0, '''''This is the issue tracker for The Bug Genie''''', 0, 1),
(6, NULL, 6, 'main_menu', 0, NULL, 0, 1),
(7, 'http://thebuggenie.wordpress.com/', 7, 'main_menu', 0, 'The Bug Genie team blog', 0, 1),
(8, '', 8, 'main_menu', 0, '''''Stay up to date on the latest development''''', 0, 1),
(9, 'MainPage', 1, 'wiki', 0, 'Wiki Frontpage', 0, 1),
(10, 'WikiFormatting', 2, 'wiki', 0, 'Formatting help', 0, 1),
(11, 'Category:Help', 3, 'wiki', 0, 'Help topics', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_listtypes`
--

CREATE TABLE IF NOT EXISTS `tbg3_listtypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `itemtype` varchar(25) DEFAULT NULL,
  `itemdata` text,
  `applies_to` int(10) DEFAULT '0',
  `sort_order` int(3) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `tbg3_listtypes`
--

INSERT INTO `tbg3_listtypes` (`id`, `name`, `itemtype`, `itemdata`, `applies_to`, `sort_order`, `scope`) VALUES
(1, 'General', 'category', NULL, NULL, NULL, 1),
(2, 'Security', 'category', NULL, NULL, NULL, 1),
(3, 'User interface', 'category', NULL, NULL, NULL, 1),
(4, 'Critical', 'priority', '1', NULL, NULL, 1),
(5, 'Needs to be fixed', 'priority', '2', NULL, NULL, 1),
(6, 'Must fix before next release', 'priority', '3', NULL, NULL, 1),
(7, 'Low', 'priority', '4', NULL, NULL, 1),
(8, 'Normal', 'priority', '5', NULL, NULL, 1),
(9, 'Can''t reproduce', 'reproducability', '', NULL, NULL, 1),
(10, 'Rarely', 'reproducability', '', NULL, NULL, 1),
(11, 'Often', 'reproducability', '', NULL, NULL, 1),
(12, 'Always', 'reproducability', '', NULL, NULL, 1),
(13, 'CAN''T REPRODUCE', 'resolution', '', NULL, NULL, 1),
(14, 'WON''T FIX', 'resolution', '', NULL, NULL, 1),
(15, 'NOT AN ISSUE', 'resolution', '', NULL, NULL, 1),
(16, 'POSTPONED', 'resolution', '', NULL, NULL, 1),
(17, 'RESOLVED', 'resolution', '', NULL, NULL, 1),
(18, 'CAN''T FIX', 'resolution', '', NULL, NULL, 1),
(19, 'DUPLICATE', 'resolution', '', NULL, NULL, 1),
(20, 'Low', 'severity', '', NULL, NULL, 1),
(21, 'Normal', 'severity', '', NULL, NULL, 1),
(22, 'Critical', 'severity', '', NULL, NULL, 1),
(23, 'New', 'status', '#FFF', NULL, NULL, 1),
(24, 'Investigating', 'status', '#C2F533', NULL, NULL, 1),
(25, 'Confirmed', 'status', '#FF55AA', NULL, NULL, 1),
(26, 'Not a bug', 'status', '#44FC1D', NULL, NULL, 1),
(27, 'Being worked on', 'status', '#5C5', NULL, NULL, 1),
(28, 'Near completion', 'status', '#7D3', NULL, NULL, 1),
(29, 'Ready for testing / QA', 'status', '#55C', NULL, NULL, 1),
(30, 'Testing / QA', 'status', '#77C', NULL, NULL, 1),
(31, 'Closed', 'status', '#C2F588', NULL, NULL, 1),
(32, 'Postponed', 'status', '#FA5', NULL, NULL, 1),
(33, 'Done', 'status', '#7D3', NULL, NULL, 1),
(34, 'Fixed', 'status', '#5C5', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_log`
--

CREATE TABLE IF NOT EXISTS `tbg3_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `target` int(10) DEFAULT '0',
  `target_type` int(3) DEFAULT '0',
  `change_type` int(3) DEFAULT '0',
  `text` text,
  `previous_value` text,
  `current_value` text,
  `time` int(10) DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_mailing_queue`
--

CREATE TABLE IF NOT EXISTS `tbg3_mailing_queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `headers` text,
  `date` int(10) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_milestones`
--

CREATE TABLE IF NOT EXISTS `tbg3_milestones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `reacheddate` int(10) DEFAULT '0',
  `itemtype` int(2) DEFAULT '0',
  `startingdate` int(10) DEFAULT '0',
  `scheduleddate` int(10) DEFAULT '0',
  `project` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_modulepermissions`
--

CREATE TABLE IF NOT EXISTS `tbg3_modulepermissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(50) DEFAULT NULL,
  `allowed` tinyint(1) DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `gid` int(10) unsigned DEFAULT '0',
  `tid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_modules`
--

CREATE TABLE IF NOT EXISTS `tbg3_modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '0',
  `version` varchar(10) DEFAULT NULL,
  `classname` varchar(50) DEFAULT NULL,
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tbg3_modules`
--

INSERT INTO `tbg3_modules` (`id`, `name`, `enabled`, `version`, `classname`, `scope`) VALUES
(1, 'mailing', 1, '1.0', 'TBGMailing', 1),
(2, 'vcs_integration', 1, '1.0', 'TBGVCSIntegration', 1),
(3, 'publish', 1, '1.0', 'TBGPublish', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_notifications`
--

CREATE TABLE IF NOT EXISTS `tbg3_notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(50) DEFAULT NULL,
  `notify_type` int(5) DEFAULT '0',
  `target_id` int(10) DEFAULT '0',
  `title` varchar(100) DEFAULT NULL,
  `contents` text,
  `status` int(5) DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `gid` int(10) unsigned DEFAULT '0',
  `tid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_permissions`
--

CREATE TABLE IF NOT EXISTS `tbg3_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_type` varchar(100) DEFAULT NULL,
  `target_id` varchar(200) DEFAULT '0',
  `allowed` tinyint(1) DEFAULT '0',
  `module` varchar(50) DEFAULT NULL,
  `uid` int(10) unsigned DEFAULT '0',
  `gid` int(10) unsigned DEFAULT '0',
  `tid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `tbg3_permissions`
--

INSERT INTO `tbg3_permissions` (`id`, `permission_type`, `target_id`, `allowed`, `module`, `uid`, `gid`, `tid`, `scope`) VALUES
(1, 'cansaveconfig', '0', 1, 'core', 0, 1, 0, 1),
(2, 'page_account_access', '0', 1, 'core', 0, 0, 0, 1),
(3, 'page_account_access', '0', 0, 'core', 0, 3, 0, 1),
(4, 'candoscrumplanning', '0', 0, 'core', 0, 0, 0, 1),
(5, 'cancreateandeditissues', '0', 1, 'core', 0, 0, 0, 1),
(6, 'canfindissuesandsavesearches', '0', 1, 'core', 0, 0, 0, 1),
(7, 'cancreatepublicsearches', '0', 0, 'core', 0, 0, 0, 1),
(8, 'cancreatepublicsearches', '0', 1, 'core', 0, 1, 0, 1),
(9, 'caneditmainmenu', '0', 1, 'core', 0, 1, 0, 1),
(10, 'caneditissuecustomfieldsown', '0', 1, 'core', 0, 0, 0, 1),
(11, 'canpostandeditcomments', '0', 1, 'core', 0, 0, 0, 1),
(12, 'canpostseeandeditallcomments', '0', 1, 'core', 0, 1, 0, 1),
(13, 'canseeproject', '0', 1, 'core', 0, 1, 0, 1),
(14, 'candoscrumplanning', '0', 1, 'core', 0, 1, 0, 1),
(15, 'page_project_allpages_access', '0', 1, 'core', 0, 1, 0, 1),
(16, 'page_home_access', '0', 1, 'core', 0, 0, 0, 1),
(17, 'page_about_access', '0', 1, 'core', 0, 0, 0, 1),
(18, 'page_dashboard_access', '0', 1, 'core', 0, 0, 0, 1),
(19, 'page_search_access', '0', 1, 'core', 0, 0, 0, 1),
(20, 'page_dashboard_access', '0', 0, 'core', 0, 3, 0, 1),
(21, 'page_teamlist_access', '0', 1, 'core', 0, 1, 0, 1),
(22, 'page_clientlist_access', '0', 1, 'core', 0, 1, 0, 1),
(23, 'canvoteforissues', '0', 1, 'core', 0, 1, 0, 1),
(24, 'canlockandeditlockedissues', '0', 1, 'core', 0, 1, 0, 1),
(25, 'cancreateandeditissues', '0', 1, 'core', 0, 1, 0, 1),
(26, 'caneditissue', '0', 1, 'core', 0, 1, 0, 1),
(27, 'candeleteissues', '0', 1, 'core', 0, 1, 0, 1),
(28, 'caneditissuecustomfields', '0', 1, 'core', 0, 1, 0, 1),
(29, 'canaddextrainformationtoissues', '0', 1, 'core', 0, 1, 0, 1),
(30, 'canpostseeandeditallcomments', '0', 1, 'core', 0, 1, 0, 1),
(31, 'article_management', '0', 1, 'publish', 0, 1, 0, 1),
(32, 'publish_postonglobalbillboard', '0', 1, 'publish', 0, 1, 0, 1),
(33, 'publish_postonteambillboard', '0', 1, 'publish', 0, 1, 0, 1),
(34, 'manage_billboard', '0', 1, 'publish', 0, 1, 0, 1),
(35, 'editarticle', '0', 1, 'publish', 0, 1, 0, 1),
(36, 'deletearticle', '0', 1, 'publish', 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_projectassignees`
--

CREATE TABLE IF NOT EXISTS `tbg3_projectassignees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `target_type` int(5) DEFAULT '0',
  `project_id` int(10) unsigned DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `tid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_projects`
--

CREATE TABLE IF NOT EXISTS `tbg3_projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `key` varchar(100) DEFAULT NULL,
  `prefix` varchar(5) DEFAULT '',
  `use_prefix` tinyint(1) DEFAULT '0',
  `use_scrum` tinyint(1) DEFAULT '0',
  `homepage` varchar(200) DEFAULT '',
  `owner` int(10) DEFAULT '0',
  `owner_type` int(3) DEFAULT '0',
  `leader` int(10) DEFAULT '0',
  `leader_type` int(3) DEFAULT '0',
  `description` text,
  `doc_url` varchar(200) DEFAULT '',
  `allow_freelancing` tinyint(1) DEFAULT '0',
  `isreleased` tinyint(1) DEFAULT '0',
  `isplannedreleased` tinyint(1) DEFAULT '0',
  `release_date` int(10) DEFAULT '0',
  `enable_builds` tinyint(1) DEFAULT '0',
  `enable_editions` tinyint(1) DEFAULT '0',
  `enable_components` tinyint(1) DEFAULT '0',
  `show_in_summary` tinyint(1) DEFAULT '1',
  `summary_display` varchar(15) DEFAULT 'issuetypes',
  `qa_responsible` int(10) DEFAULT '0',
  `qa_responsible_type` int(3) DEFAULT '0',
  `locked` tinyint(1) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `workflow_scheme_id` int(10) unsigned DEFAULT '0',
  `issuetype_scheme_id` int(10) unsigned DEFAULT '0',
  `client` int(10) unsigned DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `autoassign` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_savedsearches`
--

CREATE TABLE IF NOT EXISTS `tbg3_savedsearches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(255) DEFAULT '',
  `is_public` tinyint(1) DEFAULT '0',
  `templatename` varchar(200) DEFAULT NULL,
  `templateparameter` varchar(200) DEFAULT NULL,
  `issues_per_page` int(10) DEFAULT '0',
  `groupby` varchar(100) DEFAULT NULL,
  `grouporder` varchar(5) DEFAULT NULL,
  `scope` int(10) unsigned DEFAULT '0',
  `applies_to_project` int(10) unsigned DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_savedsearchfilters`
--

CREATE TABLE IF NOT EXISTS `tbg3_savedsearchfilters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(200) DEFAULT NULL,
  `operator` varchar(40) DEFAULT NULL,
  `filter_key` varchar(100) DEFAULT NULL,
  `scope` int(10) unsigned DEFAULT '0',
  `search_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_scopehostnames`
--

CREATE TABLE IF NOT EXISTS `tbg3_scopehostnames` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hostname` varchar(200) DEFAULT '',
  `scope_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbg3_scopehostnames`
--

INSERT INTO `tbg3_scopehostnames` (`id`, `hostname`, `scope_id`) VALUES
(1, '*', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_scopes`
--

CREATE TABLE IF NOT EXISTS `tbg3_scopes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) DEFAULT '0',
  `custom_workflows_enabled` tinyint(1) DEFAULT '1',
  `uploads_enabled` tinyint(1) DEFAULT '1',
  `max_upload_limit` int(5) DEFAULT '0',
  `max_workflows` int(5) DEFAULT '0',
  `max_users` int(5) DEFAULT '0',
  `max_projects` int(5) DEFAULT '0',
  `max_teams` int(5) DEFAULT '0',
  `description` text,
  `name` text,
  `administrator` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbg3_scopes`
--

INSERT INTO `tbg3_scopes` (`id`, `enabled`, `custom_workflows_enabled`, `uploads_enabled`, `max_upload_limit`, `max_workflows`, `max_users`, `max_projects`, `max_teams`, `description`, `name`, `administrator`) VALUES
(1, 1, 1, 1, 0, 0, 0, 0, 0, '', 'The default scope', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_settings`
--

CREATE TABLE IF NOT EXISTS `tbg3_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `module` varchar(45) DEFAULT NULL,
  `value` varchar(200) DEFAULT NULL,
  `uid` int(10) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Contenu de la table `tbg3_settings`
--

INSERT INTO `tbg3_settings` (`id`, `name`, `module`, `value`, `uid`, `scope`) VALUES
(1, 'theme_name', 'core', 'oxygen', 0, 1),
(2, 'requirelogin', 'core', '0', 0, 1),
(3, 'defaultisguest', 'core', '1', 0, 1),
(4, 'allowreg', 'core', '1', 0, 1),
(5, 'returnfromlogin', 'core', 'referer', 0, 1),
(6, 'returnfromlogout', 'core', 'home', 0, 1),
(7, 'showprojectsoverview', 'core', '1', 0, 1),
(8, 'userthemes', 'core', '0', 0, 1),
(9, 'enable_uploads', 'core', '0', 0, 1),
(10, 'enable_gravatars', 'core', '1', 0, 1),
(11, 'upload_restriction_mode', 'core', 'blacklist', 0, 1),
(12, 'upload_extensions_list', 'core', 'exe,bat,php,asp,jsp', 0, 1),
(13, 'upload_storage', 'core', 'files', 0, 1),
(14, 'upload_localpath', 'core', '/homez.509/onlinesp/www/bugtracker/files/', 0, 1),
(15, 'b2_name', 'core', 'The Bug Genie', 0, 1),
(16, 'b2_tagline', 'core', '<b>Friendly</b> issue tracking and project management', 0, 1),
(17, 'highlight_default_lang', 'core', 'html4strict', 0, 1),
(18, 'highlight_default_numbering', 'core', '3', 0, 1),
(19, 'highlight_default_interval', 'core', '10', 0, 1),
(20, 'salt', 'core', '4137b48ee96bea8d3ce3077e740b76bdf579c5d7', 0, 1),
(21, 'admingroup', 'core', '1', 0, 1),
(22, 'defaultgroup', 'core', '2', 0, 1),
(23, 'timezone', 'core', 'sys', 1, 1),
(24, 'language', 'core', 'sys', 1, 1),
(25, 'timezone', 'core', 'sys', 2, 1),
(26, 'language', 'core', 'sys', 2, 1),
(27, 'defaultuserid', 'core', '2', 0, 1),
(28, 'onlinestate', 'core', '1', 0, 1),
(29, 'offlinestate', 'core', '2', 0, 1),
(30, 'awaystate', 'core', '7', 0, 1),
(31, 'defaultissuetypefornewissues', 'core', '1', 0, 1),
(32, 'issuetype_bug_report', 'core', '1', 0, 1),
(33, 'issuetype_feature_request', 'core', '2', 0, 1),
(34, 'issuetype_enhancement', 'core', '3', 0, 1),
(35, 'issuetype_task', 'core', '4', 0, 1),
(36, 'issuetype_user_story', 'core', '5', 0, 1),
(37, 'issuetype_idea', 'core', '6', 0, 1),
(38, 'language', 'core', 'fr_FR', 0, 1),
(39, 'smtp_host', 'mailing', '', 0, 1),
(40, 'smtp_port', 'mailing', '25', 0, 1),
(41, 'smtp_user', 'mailing', '', 0, 1),
(42, 'smtp_pwd', 'mailing', '', 0, 1),
(43, 'headcharset', 'mailing', 'utf-8', 0, 1),
(44, 'from_name', 'mailing', 'The Bug Genie Automailer', 0, 1),
(45, 'from_addr', 'mailing', '', 0, 1),
(46, 'ehlo', 'mailing', '1', 0, 1),
(47, 'allow_camelcase_links', 'publish', '1', 0, 1),
(48, 'singleprojecttracker', 'core', '0', 0, 1),
(49, 'permissive', 'core', '0', 0, 1),
(50, 'limit_registration', 'core', '', 0, 1),
(51, 'cleancomments', 'core', '0', 0, 1),
(52, 'charset', 'core', '', 0, 1),
(53, 'server_timezone', 'core', '1', 0, 1),
(54, 'icon_header', 'core', '0', 0, 1),
(55, 'icon_fav', 'core', '0', 0, 1),
(56, 'previewcommentimages', 'core', '1', 0, 1),
(57, 'header_link', 'core', '', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_teammembers`
--

CREATE TABLE IF NOT EXISTS `tbg3_teammembers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned DEFAULT '0',
  `tid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_teams`
--

CREATE TABLE IF NOT EXISTS `tbg3_teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `ondemand` tinyint(1) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tbg3_teams`
--

INSERT INTO `tbg3_teams` (`id`, `name`, `ondemand`, `scope`) VALUES
(1, 'Staff members', 0, 1),
(2, 'Developers', 0, 1),
(3, 'Team leaders', 0, 1),
(4, 'Testers', 0, 1),
(5, 'Translators', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_userissues`
--

CREATE TABLE IF NOT EXISTS `tbg3_userissues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issue` int(10) unsigned DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_users`
--

CREATE TABLE IF NOT EXISTS `tbg3_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `buddyname` varchar(50) DEFAULT NULL,
  `realname` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `userstate` int(10) unsigned DEFAULT '0',
  `customstate` tinyint(1) DEFAULT '0',
  `homepage` varchar(250) DEFAULT '',
  `language` varchar(100) DEFAULT '',
  `lastseen` int(10) DEFAULT '0',
  `quota` int(10) DEFAULT '0',
  `activated` tinyint(1) DEFAULT '0',
  `enabled` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `avatar` varchar(30) DEFAULT '',
  `use_gravatar` tinyint(1) DEFAULT '1',
  `private_email` tinyint(1) DEFAULT '0',
  `joined` int(10) DEFAULT '0',
  `group_id` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tbg3_users`
--

INSERT INTO `tbg3_users` (`id`, `username`, `password`, `buddyname`, `realname`, `email`, `userstate`, `customstate`, `homepage`, `language`, `lastseen`, `quota`, `activated`, `enabled`, `deleted`, `avatar`, `use_gravatar`, `private_email`, `joined`, `group_id`, `scope`) VALUES
(1, 'administrator', '9e57ffa19de8a7a56e05d6e81aa0dbbc68c3996a', 'Admin', 'Administrator', '', 1, 0, '', 'sys', 1328610978, 0, 1, 1, 0, 'admin', 1, 1, 0, 1, 1),
(2, 'guest', 'd50a1459a88d0adf8839a19e7fde533c654be752', 'Guest user', 'Guest user', '', 1, 1, '', 'sys', 1330606106, 0, 1, 1, 0, '', 1, 1, 0, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_userstate`
--

CREATE TABLE IF NOT EXISTS `tbg3_userstate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `is_unavailable` tinyint(1) DEFAULT '0',
  `is_busy` tinyint(1) DEFAULT '0',
  `is_online` tinyint(1) DEFAULT '0',
  `is_in_meeting` tinyint(1) DEFAULT '0',
  `is_absent` tinyint(1) DEFAULT '0',
  `itemdata` varchar(7) DEFAULT '',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `tbg3_userstate`
--

INSERT INTO `tbg3_userstate` (`id`, `name`, `is_unavailable`, `is_busy`, `is_online`, `is_in_meeting`, `is_absent`, `itemdata`, `scope`) VALUES
(1, 'Available', 0, 0, 1, 0, 0, NULL, 1),
(2, 'Offline', 1, 0, 0, 0, 0, NULL, 1),
(3, 'Busy', 1, 0, 1, 0, 0, NULL, 1),
(4, 'Unavailable', 1, 0, 1, 0, 0, NULL, 1),
(5, 'In a meeting', 1, 0, 0, 1, 0, NULL, 1),
(6, 'Coding', 1, 1, 1, 0, 0, NULL, 1),
(7, 'Away', 1, 1, 1, 0, 1, NULL, 1),
(8, 'On vacation', 1, 1, 0, 0, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_user_dashboard_views`
--

CREATE TABLE IF NOT EXISTS `tbg3_user_dashboard_views` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(10) DEFAULT '0',
  `view` int(10) DEFAULT '0',
  `pid` int(10) DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `tbg3_user_dashboard_views`
--

INSERT INTO `tbg3_user_dashboard_views` (`id`, `type`, `view`, `pid`, `uid`, `scope`) VALUES
(1, 1, 5, 0, 1, 1),
(2, 1, 3, 0, 1, 1),
(3, 3, 0, 0, 1, 1),
(4, 1, 5, 0, 2, 1),
(5, 1, 3, 0, 2, 1),
(6, 3, 0, 0, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_vcsintegration`
--

CREATE TABLE IF NOT EXISTS `tbg3_vcsintegration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` text,
  `log` text,
  `old_rev` varchar(40) DEFAULT NULL,
  `new_rev` varchar(40) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `action` varchar(1) DEFAULT NULL,
  `date` int(10) DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  `issue_no` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_visible_issue_types`
--

CREATE TABLE IF NOT EXISTS `tbg3_visible_issue_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issuetype_id` int(10) unsigned DEFAULT '0',
  `project_id` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_visible_milestones`
--

CREATE TABLE IF NOT EXISTS `tbg3_visible_milestones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `milestone_id` int(10) unsigned DEFAULT '0',
  `project_id` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_votes`
--

CREATE TABLE IF NOT EXISTS `tbg3_votes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `target` int(10) DEFAULT '0',
  `vote` int(2) DEFAULT '0',
  `uid` int(10) unsigned DEFAULT '0',
  `scope` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_workflows`
--

CREATE TABLE IF NOT EXISTS `tbg3_workflows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `is_active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbg3_workflows`
--

INSERT INTO `tbg3_workflows` (`id`, `scope`, `name`, `description`, `is_active`) VALUES
(1, 1, 'Default workflow', 'This is the default workflow. It is used by all projects with no specific workflow selected, and for issue types with no specific workflow specified. This workflow cannot be edited or removed.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_workflow_issuetype`
--

CREATE TABLE IF NOT EXISTS `tbg3_workflow_issuetype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `workflow_id` int(10) unsigned DEFAULT '0',
  `workflow_scheme_id` int(10) unsigned DEFAULT '0',
  `issutype_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `tbg3_workflow_issuetype`
--

INSERT INTO `tbg3_workflow_issuetype` (`id`, `scope`, `workflow_id`, `workflow_scheme_id`, `issutype_id`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 1, 2),
(3, 1, 1, 1, 3),
(4, 1, 1, 1, 4),
(5, 1, 1, 1, 5),
(6, 1, 1, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_workflow_schemes`
--

CREATE TABLE IF NOT EXISTS `tbg3_workflow_schemes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbg3_workflow_schemes`
--

INSERT INTO `tbg3_workflow_schemes` (`id`, `scope`, `name`, `description`) VALUES
(1, 1, 'Default workflow scheme', 'This is the default workflow scheme. It is used by all projects with no specific workflow scheme selected. This scheme cannot be edited or removed.');

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_workflow_steps`
--

CREATE TABLE IF NOT EXISTS `tbg3_workflow_steps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `status_id` int(10) unsigned DEFAULT '0',
  `workflow_id` int(10) unsigned DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `editable` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `tbg3_workflow_steps`
--

INSERT INTO `tbg3_workflow_steps` (`id`, `scope`, `status_id`, `workflow_id`, `name`, `description`, `editable`, `closed`) VALUES
(1, 1, 23, 1, 'New', 'A new issue, not yet handled', 1, 0),
(2, 1, 24, 1, 'Investigating', 'An issue that is being investigated, looked into or is by other means between new and unconfirmed state', 1, 0),
(3, 1, 25, 1, 'Confirmed', 'An issue that has been confirmed', 0, 0),
(4, 1, 27, 1, 'In progress', 'An issue that is being adressed', 0, 0),
(5, 1, 29, 1, 'Ready for testing', 'An issue that has been marked fixed and is ready for testing', 0, 0),
(6, 1, 30, 1, 'Testing', 'An issue where the proposed or implemented solution is currently being tested or approved', 0, 0),
(7, 1, 26, 1, 'Rejected', 'A closed issue that has been rejected', 0, 1),
(8, 1, NULL, 1, 'Closed', 'A closed issue', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_workflow_step_transitions`
--

CREATE TABLE IF NOT EXISTS `tbg3_workflow_step_transitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `workflow_id` int(10) unsigned DEFAULT '0',
  `from_step_id` int(10) unsigned DEFAULT '0',
  `transition_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `tbg3_workflow_step_transitions`
--

INSERT INTO `tbg3_workflow_step_transitions` (`id`, `scope`, `workflow_id`, `from_step_id`, `transition_id`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 1, 3),
(3, 1, 1, 1, 4),
(4, 1, 1, 1, 5),
(5, 1, 1, 1, 9),
(6, 1, 1, 2, 2),
(7, 1, 1, 2, 3),
(8, 1, 1, 2, 4),
(9, 1, 1, 2, 5),
(10, 1, 1, 3, 5),
(11, 1, 1, 3, 7),
(12, 1, 1, 3, 9),
(13, 1, 1, 4, 4),
(14, 1, 1, 4, 8),
(15, 1, 1, 4, 9),
(16, 1, 1, 5, 9),
(17, 1, 1, 5, 10),
(18, 1, 1, 6, 11),
(19, 1, 1, 6, 12),
(20, 1, 1, 7, 6),
(21, 1, 1, 8, 6);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_workflow_transitions`
--

CREATE TABLE IF NOT EXISTS `tbg3_workflow_transitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `workflow_id` int(10) unsigned DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `outgoing_step_id` int(10) unsigned DEFAULT '0',
  `template` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `tbg3_workflow_transitions`
--

INSERT INTO `tbg3_workflow_transitions` (`id`, `scope`, `workflow_id`, `name`, `description`, `outgoing_step_id`, `template`) VALUES
(1, 1, 1, 'Investigate issue', 'Assign the issue to yourself and start investigating it', 2, NULL),
(2, 1, 1, 'Request more information', 'Move issue back to new state for more details', 1, 'main/updateissueproperties'),
(3, 1, 1, 'Confirm issue', 'Confirm that the issue is valid', 3, NULL),
(4, 1, 1, 'Reject issue', 'Reject the issue as invalid', 7, 'main/updateissueproperties'),
(5, 1, 1, 'Accept issue', 'Accept the issue and assign it to yourself', 4, NULL),
(6, 1, 1, 'Reopen issue', 'Reopen the issue', 1, NULL),
(7, 1, 1, 'Assign issue', 'Accept the issue and assign it to someone', 4, 'main/updateissueproperties'),
(8, 1, 1, 'Mark ready for testing', 'Mark the issue as ready to be tested', 5, NULL),
(9, 1, 1, 'Resolve issue', 'Resolve the issue', 8, 'main/updateissueproperties'),
(10, 1, 1, 'Test issue solution', 'Check whether the solution is valid', 6, NULL),
(11, 1, 1, 'Accept issue solution', 'Mark the issue as resolved', 8, 'main/updateissueproperties'),
(12, 1, 1, 'Reject issue solution', 'Reject the proposed solution and mark the issue as in progress', 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_workflow_transition_actions`
--

CREATE TABLE IF NOT EXISTS `tbg3_workflow_transition_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `action_type` varchar(100) DEFAULT NULL,
  `target_value` varchar(200) DEFAULT NULL,
  `transition_id` int(10) unsigned DEFAULT '0',
  `workflow_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `tbg3_workflow_transition_actions`
--

INSERT INTO `tbg3_workflow_transition_actions` (`id`, `scope`, `action_type`, `target_value`, `transition_id`, `workflow_id`) VALUES
(1, 1, 'assign_self', '0', 1, 1),
(2, 1, 'clear_assignee', '0', 2, 1),
(3, 1, 'set_percent', '10', 3, 1),
(4, 1, '0', 'set_priority', 3, 1),
(5, 1, 'set_resolution', '0', 4, 1),
(6, 1, 'set_percent', '100', 4, 1),
(7, 1, 'user_stop_working', '0', 4, 1),
(8, 1, 'assign_self', '0', 5, 1),
(9, 1, 'user_start_working', '0', 5, 1),
(10, 1, 'clear_resolution', '0', 6, 1),
(11, 1, 'clear_percent', '0', 6, 1),
(12, 1, 'assign_user', '0', 7, 1),
(13, 1, 'user_start_working', '0', 7, 1),
(14, 1, 'clear_assignee', '0', 8, 1),
(15, 1, 'user_stop_working', '0', 8, 1),
(16, 1, 'set_status', '0', 9, 1),
(17, 1, 'set_percent', '100', 9, 1),
(18, 1, 'set_resolution', '0', 9, 1),
(19, 1, 'user_stop_working', '0', 9, 1),
(20, 1, 'assign_self', '0', 10, 1),
(21, 1, 'user_start_working', '0', 10, 1),
(22, 1, 'set_resolution', '0', 11, 1),
(23, 1, 'clear_assignee', '0', 11, 1),
(24, 1, 'user_stop_working', '0', 11, 1),
(25, 1, 'set_resolution', '0', 12, 1),
(26, 1, 'clear_assignee', '0', 12, 1),
(27, 1, 'user_stop_working', '0', 12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbg3_workflow_transition_validation_rules`
--

CREATE TABLE IF NOT EXISTS `tbg3_workflow_transition_validation_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` int(10) unsigned DEFAULT '0',
  `pre_or_post` varchar(4) DEFAULT NULL,
  `rule` varchar(100) DEFAULT NULL,
  `rule_value` varchar(200) DEFAULT NULL,
  `transition_id` int(10) unsigned DEFAULT '0',
  `workflow_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tbg3_workflow_transition_validation_rules`
--

INSERT INTO `tbg3_workflow_transition_validation_rules` (`id`, `scope`, `pre_or_post`, `rule`, `rule_value`, `transition_id`, `workflow_id`) VALUES
(1, 1, 'pre', 'max_assigned_issues', '5', 1, 1),
(2, 1, 'post', 'valid_resolution', '15,14,18,13,19', 4, 1),
(3, 1, 'pre', 'max_assigned_issues', '5', 5, 1),
(4, 1, 'post', 'valid_status', '31,32,33,34', 9, 1),
(5, 1, 'post', 'valid_resolution', '17,14,16,19', 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `technology_list`
--

CREATE TABLE IF NOT EXISTS `technology_list` (
  `id_technology` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_technology` varchar(255) NOT NULL,
  `description_technology` text NOT NULL,
  `id_type_technology` int(10) unsigned NOT NULL,
  `level_type_technology` int(10) unsigned NOT NULL,
  `levelmax_technology` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_technology`),
  KEY `id_type_technology` (`id_type_technology`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `technology_type`
--

CREATE TABLE IF NOT EXISTS `technology_type` (
  `id_type_technology` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_type_technology` varchar(255) NOT NULL,
  `description_type_technology` text NOT NULL,
  PRIMARY KEY (`id_type_technology`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `technology_type`
--

INSERT INTO `technology_type` (`id_type_technology`, `name_type_technology`, `description_type_technology`) VALUES
(1, 'Recherche', 'Développement de nouvelle technologie.'),
(2, 'Exploration', 'Développement de l''exploration');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country_continent` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_capital` varchar(255) NOT NULL,
  `country_government` varchar(255) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `agency_initial` varchar(255) NOT NULL,
  `agency_logo` varchar(255) NOT NULL,
  `director_first_name` varchar(255) NOT NULL,
  `director_last_name` varchar(255) NOT NULL,
  `director_conviction` varchar(255) NOT NULL,
  `director_experience` int(10) unsigned NOT NULL,
  `pierre` bigint(20) unsigned NOT NULL,
  `metal` bigint(20) unsigned NOT NULL,
  `oxygene` bigint(20) unsigned NOT NULL,
  `carburant` bigint(20) unsigned NOT NULL,
  `argent` bigint(20) unsigned NOT NULL,
  `xp_technology1` bigint(20) NOT NULL,
  `point_technology1` int(11) NOT NULL,
  `xp_technology2` bigint(20) NOT NULL,
  `point_technology2` int(11) NOT NULL,
  `first_time` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `director_experience` (`director_experience`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `country_continent`, `country_name`, `country_capital`, `country_government`, `agency_name`, `agency_initial`, `agency_logo`, `director_first_name`, `director_last_name`, `director_conviction`, `director_experience`, `pierre`, `metal`, `oxygene`, `carburant`, `argent`, `xp_technology1`, `point_technology1`, `xp_technology2`, `point_technology2`, `first_time`) VALUES
(2, 'admin2', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'frederic@globulebleu.com', '', '', '', '', '', '', '', '', '', '', 1, 10100, 10010, 10010, 10010, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_building`
--

CREATE TABLE IF NOT EXISTS `user_building` (
  `id_user` int(10) unsigned NOT NULL,
  `id_building` int(10) unsigned NOT NULL,
  `level_building` int(10) unsigned NOT NULL,
  `status_building` tinyint(1) unsigned NOT NULL,
  `date_start_building` bigint(20) unsigned NOT NULL,
  `date_end_building` bigint(20) unsigned NOT NULL,
  KEY `id_building` (`id_building`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user_building`
--

INSERT INTO `user_building` (`id_user`, `id_building`, `level_building`, `status_building`, `date_start_building`, `date_end_building`) VALUES
(2, 14, 2, 0, 0, 0),
(2, 15, 1, 0, 0, 0),
(2, 10, 1, 0, 0, 0),
(2, 11, 0, 0, 0, 0),
(2, 12, 0, 0, 0, 0),
(2, 13, 0, 0, 0, 0),
(2, 6, 0, 0, 0, 0),
(2, 7, 0, 0, 0, 0),
(2, 8, 0, 0, 0, 0),
(2, 9, 0, 0, 0, 0),
(2, 16, 1, 0, 0, 0),
(2, 17, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_equipment`
--

CREATE TABLE IF NOT EXISTS `user_equipment` (
  `id_user` int(10) unsigned NOT NULL,
  `id_equipment` int(10) unsigned NOT NULL,
  `amount_equipment` int(10) unsigned NOT NULL,
  `status_equipment` tinyint(1) unsigned NOT NULL,
  `date_start_equipment` bigint(20) unsigned NOT NULL,
  `date_end_equipment` bigint(20) unsigned NOT NULL,
  KEY `id_user` (`id_user`),
  KEY `id_equipment` (`id_equipment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user_equipment`
--

INSERT INTO `user_equipment` (`id_user`, `id_equipment`, `amount_equipment`, `status_equipment`, `date_start_equipment`, `date_end_equipment`) VALUES
(2, 3, 0, 0, 0, 0),
(2, 4, 0, 0, 0, 0),
(2, 7, 0, 0, 0, 0),
(2, 8, 0, 0, 0, 0),
(2, 9, 0, 0, 0, 0),
(2, 10, 0, 0, 0, 0),
(2, 13, 0, 0, 0, 0),
(2, 14, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_know`
--

CREATE TABLE IF NOT EXISTS `user_know` (
  `id_user` int(10) unsigned NOT NULL,
  `id_know` int(10) unsigned NOT NULL,
  `date_discover_know` bigint(20) unsigned NOT NULL,
  `read_know` tinyint(3) unsigned NOT NULL,
  KEY `id_user` (`id_user`,`id_know`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_message`
--

CREATE TABLE IF NOT EXISTS `user_message` (
  `id_message` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user_receive` int(10) unsigned NOT NULL,
  `id_user_send` int(10) unsigned NOT NULL,
  `title_message` varchar(255) NOT NULL,
  `content_message` text NOT NULL,
  `date_message` bigint(20) unsigned NOT NULL,
  `read_message` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `id_user_receive` (`id_user_receive`),
  KEY `id_user_send` (`id_user_send`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `user_message`
--

INSERT INTO `user_message` (`id_message`, `id_user_receive`, `id_user_send`, `title_message`, `content_message`, `date_message`, `read_message`) VALUES
(5, 2, 2, 'Bâtiment construit', 'Votre bâtiment "Centre de commandement" à été construit avec succès !', 1334174463, 0),
(6, 2, 2, 'Bâtiment construit', 'Votre bâtiment "Bureau de relation gouvernemental" à été construit avec succès !', 1334344267, 0),
(7, 2, 2, 'Bâtiment construit', 'Votre bâtiment "Centre de recherche" à été construit avec succès !', 1334344748, 0),
(8, 2, 2, 'Bâtiment construit', 'Votre bâtiment "Fabrique de lanceur" à été construit avec succès !', 1334491704, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_mission`
--

CREATE TABLE IF NOT EXISTS `user_mission` (
  `id_mission` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `name_mission` varchar(255) NOT NULL,
  `id_zone_space` int(10) unsigned NOT NULL,
  `id_space_object` int(10) unsigned NOT NULL,
  `coque` int(10) unsigned NOT NULL,
  `lance` int(10) unsigned NOT NULL,
  `module` int(10) unsigned NOT NULL,
  `combinaison` int(10) unsigned NOT NULL,
  `pilote` int(10) unsigned NOT NULL,
  `spationaute` int(10) unsigned NOT NULL,
  `spationaute2` int(10) unsigned NOT NULL,
  `phase_test` int(10) unsigned NOT NULL,
  `date_start_start` bigint(20) unsigned NOT NULL,
  `date_test` bigint(20) unsigned NOT NULL,
  `date_start_end` bigint(20) unsigned NOT NULL,
  `date_end_start` bigint(20) unsigned NOT NULL,
  `date_end_end` bigint(20) unsigned NOT NULL,
  `id_space_action` int(10) unsigned NOT NULL,
  `date_start_space_action` bigint(20) unsigned NOT NULL,
  `date_end_space_action` bigint(20) unsigned NOT NULL,
  `id_status` smallint(5) unsigned NOT NULL,
  `point_action` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_mission`),
  KEY `id_user` (`id_user`),
  KEY `id_zone_space` (`id_zone_space`),
  KEY `id_space_object` (`id_space_object`),
  KEY `coque` (`coque`),
  KEY `lance` (`lance`),
  KEY `module` (`module`),
  KEY `pilote` (`pilote`),
  KEY `combinaison` (`combinaison`),
  KEY `spationaute2` (`spationaute2`),
  KEY `spationaute` (`spationaute`),
  KEY `id_space_action` (`id_space_action`),
  KEY `id_status` (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user_space_object`
--

CREATE TABLE IF NOT EXISTS `user_space_object` (
  `id_user` int(10) unsigned NOT NULL,
  `id_space_object` int(10) unsigned NOT NULL,
  `id_space_object_status` int(10) unsigned NOT NULL,
  `xp_space_object_status` bigint(20) unsigned NOT NULL,
  KEY `id_user` (`id_user`),
  KEY `id_space_object` (`id_space_object`),
  KEY `id_space_object_status` (`id_space_object_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user_space_object`
--

INSERT INTO `user_space_object` (`id_user`, `id_space_object`, `id_space_object_status`, `xp_space_object_status`) VALUES
(2, 1, 1, 0),
(2, 2, 1, 0),
(2, 3, 1, 0),
(2, 4, 1, 0),
(2, 5, 1, 0),
(2, 6, 1, 0),
(2, 7, 1, 0),
(2, 8, 1, 0),
(2, 9, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_space_object_event`
--

CREATE TABLE IF NOT EXISTS `user_space_object_event` (
  `id_user` int(10) unsigned NOT NULL,
  `id_space_object_event` int(10) unsigned NOT NULL,
  `id_mission` int(10) unsigned NOT NULL,
  `date_discover_space_object_event` bigint(20) unsigned NOT NULL,
  KEY `id_space_object_event` (`id_space_object_event`),
  KEY `id_mission` (`id_mission`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_technology`
--

CREATE TABLE IF NOT EXISTS `user_technology` (
  `id_user` int(10) unsigned NOT NULL,
  `id_technology` int(10) unsigned NOT NULL,
  `status_technology` tinyint(1) unsigned NOT NULL,
  `level_technology` int(10) unsigned NOT NULL,
  `date_start_technology` bigint(20) unsigned NOT NULL,
  `date_end_technology` bigint(20) unsigned NOT NULL,
  KEY `id_user` (`id_user`),
  KEY `id_technology` (`id_technology`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `building_list`
--
ALTER TABLE `building_list`
  ADD CONSTRAINT `building_list_ibfk_1` FOREIGN KEY (`id_type_building`) REFERENCES `building_type` (`id_type_building`);

--
-- Contraintes pour la table `equipment_list`
--
ALTER TABLE `equipment_list`
  ADD CONSTRAINT `equipment_list_ibfk_1` FOREIGN KEY (`id_type_equipment`) REFERENCES `equipment_type` (`id_type_equipment`);

--
-- Contraintes pour la table `know_list`
--
ALTER TABLE `know_list`
  ADD CONSTRAINT `know_list_ibfk_1` FOREIGN KEY (`id_know_type`) REFERENCES `know_list` (`id_know_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `personnel_auction`
--
ALTER TABLE `personnel_auction`
  ADD CONSTRAINT `personnel_auction_ibfk_3` FOREIGN KEY (`id_buyer_auction_personnel`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `personnel_auction_ibfk_1` FOREIGN KEY (`id_personnel`) REFERENCES `personnel_list` (`id_personnel`),
  ADD CONSTRAINT `personnel_auction_ibfk_2` FOREIGN KEY (`id_seller_auction_personnel`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `personnel_list`
--
ALTER TABLE `personnel_list`
  ADD CONSTRAINT `personnel_list_ibfk_1` FOREIGN KEY (`id_type_personnel`) REFERENCES `personnel_type` (`id_type_personnel`),
  ADD CONSTRAINT `personnel_list_ibfk_2` FOREIGN KEY (`owner_personnel`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `space_action`
--
ALTER TABLE `space_action`
  ADD CONSTRAINT `space_action_ibfk_1` FOREIGN KEY (`id_space_object_status`) REFERENCES `space_object_status` (`id_space_object_status`);

--
-- Contraintes pour la table `space_object`
--
ALTER TABLE `space_object`
  ADD CONSTRAINT `space_object_ibfk_2` FOREIGN KEY (`id_zone_space`) REFERENCES `space_zone` (`id_zone_space`),
  ADD CONSTRAINT `space_object_ibfk_1` FOREIGN KEY (`id_type_space`) REFERENCES `space_type` (`id_type_space`);

--
-- Contraintes pour la table `space_object_event`
--
ALTER TABLE `space_object_event`
  ADD CONSTRAINT `space_object_event_ibfk_2` FOREIGN KEY (`id_space_action`) REFERENCES `space_action` (`id_space_action`),
  ADD CONSTRAINT `space_object_event_ibfk_1` FOREIGN KEY (`id_space_object`) REFERENCES `space_object` (`id_space_object`);

--
-- Contraintes pour la table `technology_list`
--
ALTER TABLE `technology_list`
  ADD CONSTRAINT `technology_list_ibfk_1` FOREIGN KEY (`id_type_technology`) REFERENCES `technology_type` (`id_type_technology`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`director_experience`) REFERENCES `personnel_type` (`id_type_personnel`);

--
-- Contraintes pour la table `user_building`
--
ALTER TABLE `user_building`
  ADD CONSTRAINT `user_building_ibfk_2` FOREIGN KEY (`id_building`) REFERENCES `building_list` (`id_building`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_building_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_equipment`
--
ALTER TABLE `user_equipment`
  ADD CONSTRAINT `user_equipment_ibfk_2` FOREIGN KEY (`id_equipment`) REFERENCES `equipment_list` (`id_equipment`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_equipment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_message`
--
ALTER TABLE `user_message`
  ADD CONSTRAINT `user_message_ibfk_2` FOREIGN KEY (`id_user_send`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_message_ibfk_1` FOREIGN KEY (`id_user_receive`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_mission`
--
ALTER TABLE `user_mission`
  ADD CONSTRAINT `user_mission_ibfk_12` FOREIGN KEY (`id_status`) REFERENCES `mission_status` (`id_status`),
  ADD CONSTRAINT `user_mission_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_mission_ibfk_10` FOREIGN KEY (`spationaute2`) REFERENCES `personnel_list` (`id_personnel`),
  ADD CONSTRAINT `user_mission_ibfk_11` FOREIGN KEY (`id_space_action`) REFERENCES `space_action` (`id_space_action`),
  ADD CONSTRAINT `user_mission_ibfk_2` FOREIGN KEY (`id_zone_space`) REFERENCES `space_zone` (`id_zone_space`),
  ADD CONSTRAINT `user_mission_ibfk_3` FOREIGN KEY (`id_space_object`) REFERENCES `space_object_event` (`id_space_object`),
  ADD CONSTRAINT `user_mission_ibfk_4` FOREIGN KEY (`coque`) REFERENCES `equipment_list` (`id_equipment`),
  ADD CONSTRAINT `user_mission_ibfk_5` FOREIGN KEY (`lance`) REFERENCES `equipment_list` (`id_equipment`),
  ADD CONSTRAINT `user_mission_ibfk_6` FOREIGN KEY (`module`) REFERENCES `equipment_list` (`id_equipment`),
  ADD CONSTRAINT `user_mission_ibfk_7` FOREIGN KEY (`combinaison`) REFERENCES `equipment_list` (`id_equipment`),
  ADD CONSTRAINT `user_mission_ibfk_8` FOREIGN KEY (`pilote`) REFERENCES `personnel_list` (`id_personnel`),
  ADD CONSTRAINT `user_mission_ibfk_9` FOREIGN KEY (`spationaute`) REFERENCES `personnel_list` (`id_personnel`);

--
-- Contraintes pour la table `user_space_object`
--
ALTER TABLE `user_space_object`
  ADD CONSTRAINT `user_space_object_ibfk_3` FOREIGN KEY (`id_space_object_status`) REFERENCES `space_object_status` (`id_space_object_status`),
  ADD CONSTRAINT `user_space_object_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_space_object_ibfk_2` FOREIGN KEY (`id_space_object`) REFERENCES `space_object` (`id_space_object`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_space_object_event`
--
ALTER TABLE `user_space_object_event`
  ADD CONSTRAINT `user_space_object_event_ibfk_3` FOREIGN KEY (`id_mission`) REFERENCES `user_mission` (`id_mission`),
  ADD CONSTRAINT `user_space_object_event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_space_object_event_ibfk_2` FOREIGN KEY (`id_space_object_event`) REFERENCES `space_object_event` (`id_space_object_event`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_technology`
--
ALTER TABLE `user_technology`
  ADD CONSTRAINT `user_technology_ibfk_2` FOREIGN KEY (`id_technology`) REFERENCES `technology_list` (`id_technology`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_technology_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
