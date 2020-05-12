<?php
   /*
      Plugin Name: Cutepupp_register
      Plugin URI: http://cutepupp.com
      Description: General settings to register users
      Version: 1
      Author: Robert Torres
      Author URI: http://robetorr.info
   */
   
   function cutepupp_register_install(){
     global $wpdb;
     $table_name= $wpdb->prefix . "register";
     $sql = " CREATE TABLE $table_name(  id int(11) NOT NULL,  username text NOT NULL,  password text NOT NULL,  firstname text NOT NULL, lastname text NOT NULL, street text NOT NULL, apt text NOT NULL, city text NOT NULL, state text NOT NULL, zip text NOT NULL, country text NOT NULL, phone text NOT NULL, mobile text NOT NULL, workphone text NOT NULL, email text NOT NULL, active tinyint(1), howfound text, howpay text , registration_code text, iduser int(11)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $wpdb->query($sql);
     $sql2= "ALTER TABLE $table_name ADD PRIMARY KEY(id);";
     $wpdb->query($sql2);
     $sql3="ALTER TABLE $table_name CHANGE id id INT(11) NOT NULL AUTO_INCREMENT;";
     $wpdb->query($sql3);
     $table_name2= $wpdb->prefix . "breeding";
     $sql4="CREATE TABLE $table_name2 (id int(11) NOT NULL, idregister int(11) NOT NULL, kennel text, url text , breeding text , breed1 text , breed2 text , breed3 text , breed4 text , breed5 text , breed6 text , contract character(3), active character(3), license character(3), vet_name text , vet_phone text, travel_info text NOT NULL,montreal boolean, toronto boolean, vancouver boolean,anchorage boolean) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
     $sql5="ALTER TABLE $table_name2  ADD PRIMARY KEY (id);";
     $sql6="ALTER TABLE $table_name2  MODIFY id int(11) NOT NULL AUTO_INCREMENT;";  
     $table_name3= $wpdb->prefix . "state";
     $sql7="CREATE TABLE $table_name3 (id int(11) NOT NULL, name text NOT NULL, code character(2) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
     $sql8="ALTER TABLE $table_name3  ADD PRIMARY KEY (id);";
     $sql9="ALTER TABLE $table_name3  MODIFY id int(11) NOT NULL AUTO_INCREMENT;";  
     $sql10="insert into $table_name3 (name, code) values ('Alabama', 'AL');";
     $sql11="insert into $table_name3 (name, code) values ('Arizona','AZ');";
     $sql12="insert into $table_name3 (name, code) values ('Arkansas','AR');";
     $sql13="insert into $table_name3 (name, code) values ('California','CA');";
     $sql14="insert into $table_name3 (name, code) values ('North Carolina','NC');";
     $sql15="insert into $table_name3 (name, code) values ('South Carolina','SC');";
     $sql16="insert into $table_name3 (name, code) values ('Colorado','CO');";
     $sql17="insert into $table_name3 (name, code) values ('Connecticut','CT');";
     $sql18="insert into $table_name3 (name, code) values ('North Dakota','ND');";
     $sql19="insert into $table_name3 (name, code) values ('South Dakota','SD');";
     $sql21="insert into $table_name3 (name, code) values ('Delaware','DE');";
     $sql22="insert into $table_name3 (name, code) values ('Florida','FL');";
     $sql23="insert into $table_name3 (name, code) values ('Georgia','GA');";
     $sql24="insert into $table_name3 (name, code) values ('Idaho','ID');";
     $sql25="insert into $table_name3 (name, code) values ('Illinois','IL');";
     $sql26="insert into $table_name3 (name, code) values ('Indiana'IN');";
     $sql27="insert into $table_name3 (name, code) values ('Iowa','IA');";
     $sql28="insert into $table_name3 (name, code) values ('Kansas','KS');";
     $sql29="insert into $table_name3 (name, code) values ('Kentucky','KY');";
     $sql30="insert into $table_name3 (name, code) values ('Luisiana','LA');";
     $sql31="insert into $table_name3 (name, code) values ('Maine','ME');";
     $sql32="insert into $table_name3 (name, code) values ('Maryland','MD');";
     $sql33="insert into $table_name3 (name, code) values ('Massachusetts','MA');";
     $sql34="insert into $table_name3 (name, code) values ('Michigan','MI');";
     $sql35="insert into $table_name3 (name, code) values ('Minnesota','MN');";
     $sql36="insert into $table_name3 (name, code) values ('Mississippi','MS');";
     $sql37="insert into $table_name3 (name, code) values ('Missouri','MO');";
     $sql38="insert into $table_name3 (name, code) values ('Montana','MT');";
     $sql39="insert into $table_name3 (name, code) values ('Nebraska','NE');";
     $sql40="insert into $table_name3 (name, code) values ('Nevada','NV');";
     $sql41="insert into $table_name3 (name, code) values ('New Jersey','NJ');";
     $sql42="insert into $table_name3 (name, code) values ('New York','NY');";
     $sql43="insert into $table_name3 (name, code) values ('New Hampshire','NH');";
     $sql44="insert into $table_name3 (name, code) values ('New Mexico','NM');";
     $sql45="insert into $table_name3 (name, code) values ('Ohio','OH');";
     $sql46="insert into $table_name3 (name, code) values ('Oklahoma','OK');";
     $sql47="insert into $table_name3 (name, code) values ('Oregon','OR');";
     $sql48="insert into $table_name3 (name, code) values ('Pennsylvania','PA');";
     $sql49="insert into $table_name3 (name, code) values ('Rhode Island','RI');";
     $sql50="insert into $table_name3 (name, code) values ('Tennessee','TN');";
     $sql51="insert into $table_name3 (name, code) values ('Texas','TX');";
     $sql52="insert into $table_name3 (name, code) values ('Utah','UT');";
     $sql53="insert into $table_name3 (name, code) values ('Vermont','VT');";
     $sql54="insert into $table_name3 (name, code) values ('Virginia','VA');";
     $sql55="insert into $table_name3 (name, code) values ('West Virginia'WV');";
     $sql56="insert into $table_name3 (name, code) values ('Washington','WA');";
     $sql57="insert into $table_name3 (name, code) values ('Wisconsin','WI');";
     $sql58="insert into $table_name3 (name, code) values ('Wyoming','WY');";
     $table_name4= $wpdb->prefix . "breed";
     $sql59="CREATE TABLE $table_name4 (id int(11) NOT NULL, name text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
     $sql60="ALTER TABLE $table_name4  ADD PRIMARY KEY (id);";
     $sql61="ALTER TABLE $table_name4  MODIFY id int(11) NOT NULL AUTO_INCREMENT;";
     $sql62="insert into $table_name4 (name) values ('Affenpinscher');";
     $sql63="insert into $table_name4 (name) values ('Afghan Hound');";
     $sql64="insert into $table_name4 (name) values ('Airedale Terrier');";
     $sql65="insert into $table_name4 (name) values ('Airedoodle');";
     $sql66="insert into $table_name4 (name) values ('Akita');";
     $sql67="insert into $table_name4 (name) values ('Alapaha Blue Blood Bulldog');";
     $sql68="insert into $table_name4 (name) values ('Alaskan Klee Kai');";
     $sql69="insert into $table_name4 (name) values ('Alaskan Malamute');";
     $sql70="insert into $table_name4 (name) values ('American Bulldog');";
     $sql71="insert into $table_name4 (name) values ('American Eskimo Dog');";
     $sql72="insert into $table_name4 (name) values ('American Hairless Terrier');";
     $sql73="insert into $table_name4 (name) values ('American Staffordshire Terrier');";
     $sql74="insert into $table_name4 (name) values ('American Tundra Shepherd');";
     $sql75="insert into $table_name4 (name) values ('American Water Spaniel');";
     $sql76="insert into $table_name4 (name) values ('Anatolian Shepherd Dog');";
     $sql77="insert into $table_name4 (name) values ('Ausky');";
     $sql78="insert into $table_name4 (name) values ('Aussiedoodle');";
     $sql79="insert into $table_name4 (name) values ('Australian Cattle Dog');";
     $sql80="insert into $table_name4 (name) values ('Australian Shepherd');";
     $sql81="insert into $table_name4 (name) values ('Australian Terrier');";
     $sql82="insert into $table_name4 (name) values ('Basenji');";
     $sql83="insert into $table_name4 (name) values ('Basset Hound');";
     $sql84="insert into $table_name4 (name) values ('Beabull');";
     $sql85="insert into $table_name4 (name) values ('Beagalier');";
     $sql86="insert into $table_name4 (name) values ('Beagle');";
     $sql87="insert into $table_name4 (name) values ('Bearded Collie');";
     $sql88="insert into $table_name4 (name) values ('Bedlington Terrier');";
     $sql89="insert into $table_name4 (name) values ('Belgian Malinois');";
     $sql90="insert into $table_name4 (name) values ('Belgian Sheepdog');";
     $sql91="insert into $table_name4 (name) values ('Belgian Tervuren');";
     $sql92="insert into $table_name4 (name) values ('Berger Picard');";
     $sql93="insert into $table_name4 (name) values ('Bernaswiss Mountain Dog');";
     $sql94="insert into $table_name4 (name) values ('Bernedoodle');";
     $sql95="insert into $table_name4 (name) values ('Bernese Mountain Dog');";
     $sql96="insert into $table_name4 (name) values ('Bichon Frise');";
     $sql97="insert into $table_name4 (name) values ('Bichonpoo');";
     $sql98="insert into $table_name4 (name) values ('Bie-Tzu');";
     $sql99="insert into $table_name4 (name) values ('Biewer Terrier');";
     $sql100="insert into $table_name4 (name) values ('Biton');";
     $sql101="insert into $table_name4 (name) values ('Black and Tan Coonhound');";
     $sql102="insert into $table_name4 (name) values ('Black Mouth Cur');";
     $sql103="insert into $table_name4 (name) values ('Black Russian Terrier');";
     $sql104="insert into $table_name4 (name) values ('Bloodhound');";
     $sql105="insert into $table_name4 (name) values ('Boerboel');";
     $sql106="insert into $table_name4 (name) values ('Bolognese');";
     $sql107="insert into $table_name4 (name) values ('Bolonoodle');";
     $sql108="insert into $table_name4 (name) values ('Border Collie');";
     $sql109="insert into $table_name4 (name) values ('Border Terrier');";
     $sql110="insert into $table_name4 (name) values ('Bordoodle');";
     $sql111="insert into $table_name4 (name) values ('Borkie');";
     $sql112="insert into $table_name4 (name) values ('Boston Terrier');";
     $sql113="insert into $table_name4 (name) values ('Bouvier des Flandres');";
     $sql114="insert into $table_name4 (name) values ('Boxer');";
     $sql115="insert into $table_name4 (name) values ('Boykin Spaniel');";
     $sql116="insert into $table_name4 (name) values ('Brittany');";
     $sql117="insert into $table_name4 (name) values ('Brussels Griffon');";
     $sql118="insert into $table_name4 (name) values ('Bugg');";
     $sql119="insert into $table_name4 (name) values ('Bull Terrier');";
     $sql120="insert into $table_name4 (name) values ('Bulldog');";
     $sql121="insert into $table_name4 (name) values ('Bullmastiff');";
     $sql122="insert into $table_name4 (name) values ('Cairn Terrier');";
     $sql123="insert into $table_name4 (name) values ('Cane Corso');";
     $sql124="insert into $table_name4 (name) values ('Cardigan Welsh Corgi');";
     $sql125="insert into $table_name4 (name) values ('Catahoula Leopard Dog');";
     $sql126="insert into $table_name4 (name) values ('Cavachon');";
     $sql127="insert into $table_name4 (name) values ('Cavalier King Charles Spaniel');";
     $sql128="insert into $table_name4 (name) values ('Cavapom');";
     $sql129="insert into $table_name4 (name) values ('Cavapoo');";
     $sql130="insert into $table_name4 (name) values ('Chesapeake Bay Retriever');";
     $sql131="insert into $table_name4 (name) values ('Chihuahua');";
     $sql132="insert into $table_name4 (name) values ('Chinese Crested');";
     $sql133="insert into $table_name4 (name) values ('Chinese Shar-Pei');";
     $sql134="insert into $table_name4 (name) values ('Chion');";
     $sql135="insert into $table_name4 (name) values ('Chipoo');";
     $sql136="insert into $table_name4 (name) values ('Chiweenie');";
     $sql137="insert into $table_name4 (name) values ('Chorkie');";
     $sql138="insert into $table_name4 (name) values ('Chow Chow');";
     $sql139="insert into $table_name4 (name) values ('Chug');";
     $sql140="insert into $table_name4 (name) values ('Cirneco dell&#039;Etna');";
     $sql141="insert into $table_name4 (name) values ('Clumber Spaniel');";
     $sql142="insert into $table_name4 (name) values ('Cockalier');";
     $sql143="insert into $table_name4 (name) values ('Cockapoo');";
     $sql144="insert into $table_name4 (name) values ('Cocker Spaniel');";
     $sql145="insert into $table_name4 (name) values ('Cocker-Pei');";
     $sql146="insert into $table_name4 (name) values ('Collie');";
     $sql147="insert into $table_name4 (name) values ('Coonhound');";
     $sql148="insert into $table_name4 (name) values ('Coton de Tulear');";
     $sql149="insert into $table_name4 (name) values ('Dachshund');";
     $sql150="insert into $table_name4 (name) values ('Dalmatian');";
     $sql151="insert into $table_name4 (name) values ('Dandie Dinmont');";
     $sql152="insert into $table_name4 (name) values ('Daniff');";
     $sql153="insert into $table_name4 (name) values ('Designer Breeds');";
     $sql154="insert into $table_name4 (name) values ('Doberman Pinscher');";
     $sql155="insert into $table_name4 (name) values ('Dogo Argentino');";
     $sql156="insert into $table_name4 (name) values ('Dogue de Bordeaux');";
     $sql157="insert into $table_name4 (name) values ('Double Doodle');";
     $sql158="insert into $table_name4 (name) values ('Dutch Shepherd');";
     $sql159="insert into $table_name4 (name) values ('English Cocker Spaniel');";
     $sql160="insert into $table_name4 (name) values ('English Setter');";
     $sql161="insert into $table_name4 (name) values ('English Shepherd');";
     $sql162="insert into $table_name4 (name) values ('English Springer Spaniel');";
     $sql163="insert into $table_name4 (name) values ('English Toy Spaniel');";
     $sql164="insert into $table_name4 (name) values ('Entlebucher Mountain Dog');";
     $sql165="insert into $table_name4 (name) values ('Eskipoo');";
     $sql166="insert into $table_name4 (name) values ('Fila Brasileiro');";
     $sql167="insert into $table_name4 (name) values ('Flat-Coated Retriever');";
     $sql168="insert into $table_name4 (name) values ('Fox Terrier - Smooth');";
     $sql169="insert into $table_name4 (name) values ('Fox Terrier - Toy');";
     $sql170="insert into $table_name4 (name) values ('Fox Terrier - Wire');";
     $sql171="insert into $table_name4 (name) values ('French Bulldog');";
     $sql172="insert into $table_name4 (name) values ('Frenchton');";
     $sql173="insert into $table_name4 (name) values ('German Shepherd Dog');";
     $sql174="insert into $table_name4 (name) values ('German Shorthaired Pointer');";
     $sql175="insert into $table_name4 (name) values ('Giant Schnauzer');";
     $sql176="insert into $table_name4 (name) values ('Golden Cavalier');";
     $sql177="insert into $table_name4 (name) values ('Golden Cocker Retriever');";
     $sql178="insert into $table_name4 (name) values ('Golden Retriever');";
     $sql179="insert into $table_name4 (name) values ('Goldendoodle');";
     $sql180="insert into $table_name4 (name) values ('Gordon Setter');";
     $sql181="insert into $table_name4 (name) values ('Great Dane');";
     $sql182="insert into $table_name4 (name) values ('Great Pyrenees');";
     $sql183="insert into $table_name4 (name) values ('Greater Swiss Mountain Dog');";
     $sql184="insert into $table_name4 (name) values ('Greater Swissdoodle');";
     $sql185="insert into $table_name4 (name) values ('Greyhound');";
     $sql186="insert into $table_name4 (name) values ('Harlequin Pinscher');";
     $sql187="insert into $table_name4 (name) values ('Havachon');";
     $sql188="insert into $table_name4 (name) values ('Havamalt');";
     $sql189="insert into $table_name4 (name) values ('Havanese');";
     $sql190="insert into $table_name4 (name) values ('Havapom');";
     $sql191="insert into $table_name4 (name) values ('Havapoo');";
     $sql192="insert into $table_name4 (name) values ('Huskita');";
     $sql193="insert into $table_name4 (name) values ('Irish Doodle');";
     $sql194="insert into $table_name4 (name) values ('Irish Setter');";
     $sql195="insert into $table_name4 (name) values ('Irish Terrier');";
     $sql196="insert into $table_name4 (name) values ('Irish Wolfhound');";
     $sql197="insert into $table_name4 (name) values ('Italian Greyhound');";
     $sql198="insert into $table_name4 (name) values ('Jack Russell Terrier');";
     $sql199="insert into $table_name4 (name) values ('Jack-A-Poo');";
     $sql200="insert into $table_name4 (name) values ('Jackabee');";
     $sql201="insert into $table_name4 (name) values ('Jackie-Bichon');";
     $sql202="insert into $table_name4 (name) values ('Japanese Chin');";
     $sql203="insert into $table_name4 (name) values ('Japanese Spitz');";
     $sql204="insert into $table_name4 (name) values ('Keeshond');";
     $sql205="insert into $table_name4 (name) values ('Kerry Blue Terrier');";
     $sql206="insert into $table_name4 (name) values ('King Schnauzer');";
     $sql207="insert into $table_name4 (name) values ('Komondor');";
     $sql208="insert into $table_name4 (name) values ('Kuvasz');";
     $sql209="insert into $table_name4 (name) values ('Labradoodle');";
     $sql210="insert into $table_name4 (name) values ('Labrador Retriever');";
     $sql211="insert into $table_name4 (name) values ('Labsky');";
     $sql212="insert into $table_name4 (name) values ('Lagotto Romagnolo');";
     $sql213="insert into $table_name4 (name) values ('Lakeland Terrier');";
     $sql214="insert into $table_name4 (name) values ('Leonberger');";
     $sql215="insert into $table_name4 (name) values ('Leondoodle');";
     $sql216="insert into $table_name4 (name) values ('Lhasa Apso');";
     $sql217="insert into $table_name4 (name) values ('Lhasapoo');";
     $sql218="insert into $table_name4 (name) values ('Mal-Shi');";
     $sql219="insert into $table_name4 (name) values ('Malchi');";
     $sql220="insert into $table_name4 (name) values ('Maltalier');";
     $sql221="insert into $table_name4 (name) values ('Maltese');";
     $sql222="insert into $table_name4 (name) values ('Maltichon');";
     $sql223="insert into $table_name4 (name) values ('Maltipom');";
     $sql224="insert into $table_name4 (name) values ('Maltipoo');";
     $sql225="insert into $table_name4 (name) values ('Mastiff');";
     $sql226="insert into $table_name4 (name) values ('Mi-Ki');";
     $sql227="insert into $table_name4 (name) values ('Miniature American Shepherd');";
     $sql228="insert into $table_name4 (name) values ('Miniature Pinscher');";
     $sql229="insert into $table_name4 (name) values ('Miniature Schnauzer');";
     $sql230="insert into $table_name4 (name) values ('Morkie');";
     $sql231="insert into $table_name4 (name) values ('Mountain Cur');";
     $sql232="insert into $table_name4 (name) values ('Neapolitan Mastiff');";
     $sql233="insert into $table_name4 (name) values ('Neo Daniff');";
     $sql234="insert into $table_name4 (name) values ('Newfoundland');";
     $sql235="insert into $table_name4 (name) values ('Newfypoo');";
     $sql236="insert into $table_name4 (name) values ('Norfolk Terrier');";
     $sql237="insert into $table_name4 (name) values ('Norwegian Buhund');";
     $sql238="insert into $table_name4 (name) values ('Norwegian Elkhound');";
     $sql239="insert into $table_name4 (name) values ('Norwich Terrier');";
     $sql240="insert into $table_name4 (name) values ('Nova Scotia Duck Tolling Retriever');";
     $sql241="insert into $table_name4 (name) values ('Old English Sheepdog');";
     $sql242="insert into $table_name4 (name) values ('Olde English Bulldogge');";
     $sql243="insert into $table_name4 (name) values ('Ori Pei');";
     $sql244="insert into $table_name4 (name) values ('Papi-poo');";
     $sql245="insert into $table_name4 (name) values ('Papillon');";
     $sql246="insert into $table_name4 (name) values ('Papitese');";
     $sql247="insert into $table_name4 (name) values ('Parson Russell Terrier');";
     $sql248="insert into $table_name4 (name) values ('Peekapom');";
     $sql249="insert into $table_name4 (name) values ('Peekapoo');";
     $sql250="insert into $table_name4 (name) values ('Pekalier');";
     $sql251="insert into $table_name4 (name) values ('Peke-A-Tese');";
     $sql252="insert into $table_name4 (name) values ('Pekingese');";
     $sql253="insert into $table_name4 (name) values ('Pembroke Welsh Corgi');";
     $sql254="insert into $table_name4 (name) values ('Perro de Presa Canario');";
     $sql255="insert into $table_name4 (name) values ('Petit Basset Griffon Vendeen');";
     $sql256="insert into $table_name4 (name) values ('Pointer');";
     $sql257="insert into $table_name4 (name) values ('Pomapoo');";
     $sql258="insert into $table_name4 (name) values ('Pomchi');";
     $sql259="insert into $table_name4 (name) values ('Pomeranian');";
     $sql260="insert into $table_name4 (name) values ('Pomsky');";
     $sql261="insert into $table_name4 (name) values ('Poo-Ton');";
     $sql262="insert into $table_name4 (name) values ('Poodle');";
     $sql263="insert into $table_name4 (name) values ('Poogle');";
     $sql264="insert into $table_name4 (name) values ('Portuguese Water Dog');";
     $sql265="insert into $table_name4 (name) values ('Poshie');";
     $sql266="insert into $table_name4 (name) values ('Pug');";
     $sql267="insert into $table_name4 (name) values ('Puggle');";
     $sql268="insert into $table_name4 (name) values ('Pumi');";
     $sql269="insert into $table_name4 (name) values ('Pyredoodle');";
     $sql270="insert into $table_name4 (name) values ('Rat Terrier');";
     $sql271="insert into $table_name4 (name) values ('Redbone Coonhound');";
     $sql272="insert into $table_name4 (name) values ('Rhodesian Ridgeback');";
     $sql273="insert into $table_name4 (name) values ('Rottweiler');";
     $sql274="insert into $table_name4 (name) values ('Saint Berdoodle');";
     $sql275="insert into $table_name4 (name) values ('Saint Bernard');";
     $sql276="insert into $table_name4 (name) values ('Saluki');";
     $sql277="insert into $table_name4 (name) values ('Samoyed');";
     $sql278="insert into $table_name4 (name) values ('Schipperke');";
     $sql279="insert into $table_name4 (name) values ('Schnoodle');";
     $sql281="insert into $table_name4 (name) values ('Schnorkie');";
     $sql282="insert into $table_name4 (name) values ('Scottish Terrier');";
     $sql283="insert into $table_name4 (name) values ('Sheepadoodle');";
     $sql284="insert into $table_name4 (name) values ('Shepadoodle');";
     $sql285="insert into $table_name4 (name) values ('Shetland Sheepdog');";
     $sql286="insert into $table_name4 (name) values ('Shiba Inu');";
     $sql287="insert into $table_name4 (name) values ('Shichi');";
     $sql288="insert into $table_name4 (name) values ('Shichon');";
     $sql289="insert into $table_name4 (name) values ('Shiffon');";
     $sql280="insert into $table_name4 (name) values ('Shih Tzu');";
     $sql290="insert into $table_name4 (name) values ('Shihpoo');";
     $sql291="insert into $table_name4 (name) values ('Shinese');";
     $sql292="insert into $table_name4 (name) values ('Shiranian');";
     $sql293="insert into $table_name4 (name) values ('Shorkie');";
     $sql294="insert into $table_name4 (name) values ('Siberian Husky');";
     $sql295="insert into $table_name4 (name) values ('Siberpoo');";
     $sql296="insert into $table_name4 (name) values ('Silky Terrier');";
     $sql297="insert into $table_name4 (name) values ('Skye Terrier');";
     $sql298="insert into $table_name4 (name) values ('Soft Coated Wheaten Terrier');";
     $sql299="insert into $table_name4 (name) values ('Springerdoodle');";
     $sql301="insert into $table_name4 (name) values ('Staffordshire Bull Terrier');";
     $sql302="insert into $table_name4 (name) values ('Standard Schnauzer');";
     $sql303="insert into $table_name4 (name) values ('Testbreed');";
     $sql304="insert into $stable_name4 (name) values ('Tibetan Mastiff');";
     $sql305="insert into $table_name4 (name) values ('Tibetan Spaniel');";
     $sql306="insert into $table_name4 (name) values ('Tibetan Terrier');";
     $sql307="insert into $table_name4 (name) values ('Tosa');";
     $sql308="insert into $table_name4 (name) values ('Victorian Bulldog');";
     $sql309="insert into $table_name4 (name) values ('Vizsla');";
     $sql300="insert into $table_name4 (name) values ('Weimaraner');";
     $sql310="insert into $table_name4 (name) values ('Welsh Terrier');";
     $sql311="insert into $table_name4 (name) values ('West Highland White Terrier');";
     $sql312="insert into $table_name4 (name) values ('Westiepoo');";
     $sql313="insert into $table_name4 (name) values ('Whippet');";
     $sql314="insert into $table_name4 (name) values ('White Swiss Shepherd');";
     $sql315="insert into $table_name4 (name) values ('Whoodle');";
     $sql316="insert into $table_name4 (name) values ('Yoranian');";
     $sql317="insert into $table_name4 (name) values ('Yorkie-ton');";
     $sql318="insert into $table_name4 (name) values ('Yorkiepoo');";
     $sql319="insert into $table_name4 (name) values ('Yorkinese');";
     $sql320="insert into $table_name4 (name) values ('Yorkshire Terrier');";
     $wpdb->query($sql4);
     $wpdb->query($sql5);
     $wpdb->query($sql6);
     $wpdb->query($sql7);
     $wpdb->query($sql8);
     $wpdb->query($sql9);
     $wpdb->query($sql10);
     $wpdb->query($sql11);
     $wpdb->query($sql12);
     $wpdb->query($sql13);
     $wpdb->query($sql14);
     $wpdb->query($sql15);
     $wpdb->query($sql16);
     $wpdb->query($sql17);
     $wpdb->query($sql18);
     $wpdb->query($sql19);
     $wpdb->query($sql20);
     $wpdb->query($sql21);
     $wpdb->query($sql22);
     $wpdb->query($sql23);
     $wpdb->query($sql24);
     $wpdb->query($sql25);
     $wpdb->query($sql26);
     $wpdb->query($sql27);
     $wpdb->query($sql28);
     $wpdb->query($sql29);
     $wpdb->query($sql30);
     $wpdb->query($sql31);
     $wpdb->query($sql32);
     $wpdb->query($sql33);
     $wpdb->query($sql34);
     $wpdb->query($sql35);
     $wpdb->query($sql36);
     $wpdb->query($sql37);
     $wpdb->query($sql38);
     $wpdb->query($sql39);
     $wpdb->query($sql40);
     $wpdb->query($sql41);
     $wpdb->query($sql42);
     $wpdb->query($sql43);
     $wpdb->query($sql44);
     $wpdb->query($sql45);
     $wpdb->query($sql46);
     $wpdb->query($sql47);
     $wpdb->query($sql48);
     $wpdb->query($sql49);
     $wpdb->query($sql50);
     $wpdb->query($sql51);
     $wpdb->query($sql52);
     $wpdb->query($sql53);
     $wpdb->query($sql54);
     $wpdb->query($sql55);
     $wpdb->query($sql56);
     $wpdb->query($sql57);
     $wpdb->query($sql58);
     $wpdb->query($sql59);
     $wpdb->query($sql60);
     $wpdb->query($sql61);
     $wpdb->query($sql62);
     $wpdb->query($sql63);
     $wpdb->query($sql64);
     $wpdb->query($sql65);
     $wpdb->query($sql66);
     $wpdb->query($sql67);
     $wpdb->query($sql68);
     $wpdb->query($sql69);
     $wpdb->query($sql70);
     $wpdb->query($sql71);
     $wpdb->query($sql72);
     $wpdb->query($sql73);
     $wpdb->query($sql74);
     $wpdb->query($sql75);
     $wpdb->query($sql76);
     $wpdb->query($sql77);
     $wpdb->query($sql78);
     $wpdb->query($sql79);
     $wpdb->query($sql80);
     $wpdb->query($sql81);
     $wpdb->query($sql82);
     $wpdb->query($sql83);
     $wpdb->query($sql84);
     $wpdb->query($sql85);
     $wpdb->query($sql86);
     $wpdb->query($sql87);
     $wpdb->query($sql88);
     $wpdb->query($sql89);
     $wpdb->query($sql90);
     $wpdb->query($sql91);
     $wpdb->query($sql92);
     $wpdb->query($sql93);
     $wpdb->query($sql94);
     $wpdb->query($sql95);
     $wpdb->query($sql96);
     $wpdb->query($sql97);
     $wpdb->query($sql98);
     $wpdb->query($sql99);
     $wpdb->query($sql100);
     $wpdb->query($sql101);
     $wpdb->query($sql102);
     $wpdb->query($sql103);
     $wpdb->query($sql104);
     $wpdb->query($sql105);
     $wpdb->query($sql106);
     $wpdb->query($sql107);
     $wpdb->query($sql108);
     $wpdb->query($sql109);
     $wpdb->query($sql110);
     $wpdb->query($sql111);
     $wpdb->query($sql112);
     $wpdb->query($sql113);
     $wpdb->query($sql114);
     $wpdb->query($sql115);
     $wpdb->query($sql116);
     $wpdb->query($sql117);
     $wpdb->query($sql118);
     $wpdb->query($sql119);
     $wpdb->query($sql120);
     $wpdb->query($sql121);
     $wpdb->query($sql122);
     $wpdb->query($sql123);
     $wpdb->query($sql124);
     $wpdb->query($sql125);
     $wpdb->query($sql126);
     $wpdb->query($sql127);
     $wpdb->query($sql128);
     $wpdb->query($sql129);
     $wpdb->query($sql130);
     $wpdb->query($sql131);
     $wpdb->query($sql132);
     $wpdb->query($sql133);
     $wpdb->query($sql134);
     $wpdb->query($sql135);
     $wpdb->query($sql136);
     $wpdb->query($sql137);
     $wpdb->query($sql138);
     $wpdb->query($sql139);
     $wpdb->query($sql140);
     $wpdb->query($sql141);
     $wpdb->query($sql142);
     $wpdb->query($sql143);
     $wpdb->query($sql144);
     $wpdb->query($sql145);
     $wpdb->query($sql146);
     $wpdb->query($sql147);
     $wpdb->query($sql148);
     $wpdb->query($sql149);
     $wpdb->query($sql150);
     $wpdb->query($sql151);
     $wpdb->query($sql152);
     $wpdb->query($sql153);
     $wpdb->query($sql154);
     $wpdb->query($sql155);
     $wpdb->query($sql156);
     $wpdb->query($sql157);
     $wpdb->query($sql158);
     $wpdb->query($sql159);
     $wpdb->query($sql160);
     $wpdb->query($sql161);
     $wpdb->query($sql162);
     $wpdb->query($sql163);
     $wpdb->query($sql164);
     $wpdb->query($sql165);
     $wpdb->query($sql166);
     $wpdb->query($sql167);
     $wpdb->query($sql168);
     $wpdb->query($sql169);
     $wpdb->query($sql170);
     $wpdb->query($sql171);
     $wpdb->query($sql172);
     $wpdb->query($sql173);
     $wpdb->query($sql174);
     $wpdb->query($sql175);
     $wpdb->query($sql176);
     $wpdb->query($sql177);
     $wpdb->query($sql178);
     $wpdb->query($sql179);
     $wpdb->query($sql180);
     $wpdb->query($sql181);
     $wpdb->query($sql182);
     $wpdb->query($sql183);
     $wpdb->query($sql184);
     $wpdb->query($sql185);
     $wpdb->query($sql186);
     $wpdb->query($sql187);
     $wpdb->query($sql188);
     $wpdb->query($sql189);
     $wpdb->query($sql190);
     $wpdb->query($sql191);
     $wpdb->query($sql192);
     $wpdb->query($sql193);
     $wpdb->query($sql194);
     $wpdb->query($sql195);
     $wpdb->query($sql196);
     $wpdb->query($sql197);
     $wpdb->query($sql198);
     $wpdb->query($sql199);
     $wpdb->query($sql200);
     $wpdb->query($sql201);
     $wpdb->query($sql202);
     $wpdb->query($sql203);
     $wpdb->query($sql204);
     $wpdb->query($sql205);
     $wpdb->query($sql206);
     $wpdb->query($sql207);
     $wpdb->query($sql208);
     $wpdb->query($sql209);
     $wpdb->query($sql210);
     $wpdb->query($sql211);
     $wpdb->query($sql212);
     $wpdb->query($sql213);
     $wpdb->query($sql214);
     $wpdb->query($sql215);
     $wpdb->query($sql216);
     $wpdb->query($sql217);
     $wpdb->query($sql218);
     $wpdb->query($sql219);
     $wpdb->query($sql220);
     $wpdb->query($sql221);
     $wpdb->query($sql222);
     $wpdb->query($sql223);
     $wpdb->query($sql224);
     $wpdb->query($sql225);
     $wpdb->query($sql226);
     $wpdb->query($sql227);
     $wpdb->query($sql228);
     $wpdb->query($sql229);
     $wpdb->query($sql230);
     $wpdb->query($sql231);
     $wpdb->query($sql232);
     $wpdb->query($sql233);
     $wpdb->query($sql234);
     $wpdb->query($sql235);
     $wpdb->query($sql236);
     $wpdb->query($sql237);
     $wpdb->query($sql238);
     $wpdb->query($sql239);
     $wpdb->query($sql240);
     $wpdb->query($sql241);
     $wpdb->query($sql242);
     $wpdb->query($sql243);
     $wpdb->query($sql244);
     $wpdb->query($sql245);
     $wpdb->query($sql246);
     $wpdb->query($sql247);
     $wpdb->query($sql248);
     $wpdb->query($sql249);
     $wpdb->query($sql250);
     $wpdb->query($sql251);
     $wpdb->query($sql252);
     $wpdb->query($sql253);
     $wpdb->query($sql254);
     $wpdb->query($sql255);
     $wpdb->query($sql256);
     $wpdb->query($sql257);
     $wpdb->query($sql258);
     $wpdb->query($sql259);
     $wpdb->query($sql260);
     $wpdb->query($sql261);
     $wpdb->query($sql262);
     $wpdb->query($sql263);
     $wpdb->query($sql264);
     $wpdb->query($sql265);
     $wpdb->query($sql266);
     $wpdb->query($sql267);
     $wpdb->query($sql268);
     $wpdb->query($sql269);
     $wpdb->query($sql270);
     $wpdb->query($sql271);
     $wpdb->query($sql272);
     $wpdb->query($sql273);
     $wpdb->query($sql274);
     $wpdb->query($sql275);
     $wpdb->query($sql276);
     $wpdb->query($sql277);
     $wpdb->query($sql278);
     $wpdb->query($sql279);
     $wpdb->query($sql281);
     $wpdb->query($sql282);
     $wpdb->query($sql283);
     $wpdb->query($sql284);
     $wpdb->query($sql285);
     $wpdb->query($sql286);
     $wpdb->query($sql287);
     $wpdb->query($sql288);
     $wpdb->query($sql289);
     $wpdb->query($sql280);
     $wpdb->query($sql290);
     $wpdb->query($sql291);
     $wpdb->query($sql292);
     $wpdb->query($sql293);
     $wpdb->query($sql294);
     $wpdb->query($sql295);
     $wpdb->query($sql296);
     $wpdb->query($sql297);
     $wpdb->query($sql298);
     $wpdb->query($sql299);
     $wpdb->query($sql301);
     $wpdb->query($sql302);
     $wpdb->query($sql303);
     $wpdb->query($sql304);
     $wpdb->query($sql305);
     $wpdb->query($sql306);
     $wpdb->query($sql307);
     $wpdb->query($sql308);
     $wpdb->query($sql309);
     $wpdb->query($sql300);
     $wpdb->query($sql310);
     $wpdb->query($sql311);
     $wpdb->query($sql312);
     $wpdb->query($sql313);
     $wpdb->query($sql314);
     $wpdb->query($sql315);
     $wpdb->query($sql316);
     $wpdb->query($sql317);
     $wpdb->query($sql318);
     $wpdb->query($sql319);
     $wpdb->query($sql320);
   }
   function cutepupp_register_uninstall(){
      global $wpdb; 
      $table_name= $wpdb->prefix . "register";
      $table_name2= $wpdb->prefix . "breeding";
      $table_name3= $wpdb->prefix . "state";
      $table_name4= $wpdb->prefix . "breed";
      $sql = "DROP TABLE $table_name";
      $sql2 = "DROP TABLE $table_name2";
      $sql3 = "DROP TABLE $table_name3";
      $sql4 = "DROP TABLE $table_name4";
      $wpdb->query($sql);
      $wpdb->query($sql2);
      $wpdb->query($sql3);
      $wpdb->query($sql4);      
   }
   function cutepupp_register_general_settings(){
      global $wpdb;
      $table_name= $wpdb->prefix . "register";
      $results_disabled = $wpdb->get_results("SELECT * FROM $table_name where active=0;");
      $results_enabled = $wpdb->get_results("SELECT * FROM $table_name where active=1;");   
      include('template/general_settings.php');
    }
   function addnew_register(){
      global $wpdb;
      $table_name= $wpdb->prefix . "state";
      $table_name2= $wpdb->prefix . "breed";
      $results_states = $wpdb->get_results("SELECT * FROM $table_name ORDER BY name;");
      $results_breeds = $wpdb->get_results("SELECT * FROM $table_name2 ORDER BY name;");
      ?><script type="text/javascript">
      var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
      </script>
      <?php
      include('template/register_template.php');        
   }
   function saveregister(){
      global $wpdb;
      $params=$_POST['params'];
      $arraysearch=explode('&', $params);
      foreach ($arraysearch as $key => $value) {
        $need[substr($value,0,strpos($value,'='))]=substr($value,strpos($value,'=')+1);
      }
      $username= $need['username'];
      $password=$need['password'];
      $firstname=str_replace('+', ' ', $need['firstname']);
      $lastname=str_replace('+', ' ', $need['lastname']);
      $street=str_replace('+', ' ', $need['street']);
      $apt=str_replace('+', ' ', $need['apt']);
      $city=str_replace('+', ' ', $need['city']);
      $state=str_replace('+', ' ', $need['state']);
      $zip=str_replace('+', ' ', $need['zip']);
      $country=str_replace('+', ' ', $need['country']);
      $phone=str_replace('+', ' ', $need['phone']);
      $mobile=str_replace('+', ' ', $need['mobile']);
      $workphone=str_replace('+', ' ', $need['workphone']);
      $email=str_replace('%40', '@', $need['email']);
      $howfound=str_replace('+', ' ', $need['howfound']);
      $howpay=str_replace('+', ' ', $need['howpay']);
      $registration_code=str_replace('+', ' ', $need['registration_code']);
      $kennel=str_replace('+', ' ', $need['kennel']);
      $url= str_replace('%3A', ':', str_replace('%2F', '/', str_replace('+', ' ', $need['url'])));
      $breeding=str_replace('+', ' ', $need['breeding']);
      $breed1=str_replace('+', ' ', $need['breed1']);
      $breed2=str_replace('+', ' ', $need['breed2']);
      $breed3=str_replace('+', ' ', $need['breed3']);
      $breed4=str_replace('+', ' ', $need['breed4']);
      $breed5=str_replace('+', ' ', $need['breed5']);
      $breed6=str_replace('+', ' ', $need['breed6']);
      $contract=str_replace('+', ' ', $need['contract']);
      $active=str_replace('+', ' ', $need['active']);
      $license=str_replace('+', ' ', $need['license']);
      $vet_name=str_replace('+', ' ', $need['vet_name']);
      $vet_phone=str_replace('+', ' ', $need['vet_phone']);
      $travel_info=str_replace('+', ' ', $need['travel_info']);
      $montreal=str_replace('+', ' ', $need['montreal']);
      $toronto=str_replace('+', ' ', $need['toronto']);
      $vancouver=str_replace('+', ' ', $need['vancouver']);
      $anchorage=str_replace('+', ' ', $need['anchorage']);
      if(empty($montreal)){ $montreal=0; } else { $montreal=1; }
      if(empty($toronto)){ $toronto=0; } else { $toronto=1; }
      if(empty($vancouver)){ $vancouver=0; } else { $vancouver=1; }
      if(empty($anchorage)){ $anchorage=0; } else { $anchorage=1; }
      $table_register= $wpdb->prefix . "register";
      $table_name2= $wpdb->prefix . "breeding";
      $sql="INSERT INTO $table_register (username ,  password ,  firstname , lastname , street , apt , city , state , zip , country , phone , mobile , workphone , email , active , howfound , howpay  , registration_code) values( '$username' ,  '$password' ,  '$firstname' , '$lastname' , '$street' , '$apt' , '$city' , '$state' , '$zip' , '$country' , '$phone' , '$mobile' , '$workphone' , '$email' , 0 , '$howfound' , '$howpay'  , '$registration_code');";
      $wpdb->query($sql); 
        $idregister=$wpdb->insert_id;
        $data2=array('idregister' =>$idregister,
                   'kennel' => $kennel,
                   'url' => $url,
                   'breeding' => $breeding,
                   'breed1' => $breed1,
                   'breed2' => $breed2,
                   'breed3' => $breed3,
                   'breed4' => $breed4,
                   'breed5' => $breed5,
                   'breed6' => $breed6,
                   'contract' => $contract,
                   'active' => $active,
                   'license' => $license,
                   'vet_name' => $vet_name,
                   'vet_phone' => $vet_phone,
                   'travel_info' => $travel_info,
                   'montreal' => $montreal,
                   'toronto' => $toronto,
                   'vancouver' => $vancouver,
                   'anchorage' => $anchorage);
        $wpdb->insert($table_name2,$data2);
        $subject="Cutepuppytime register";

        $message="<img src='https://cutepuppytime.com/wp-content/uploads/2018/04/Logo-150x150.png'></img>";
        $message.="<p>To confirmate and complete registration please click here -> <a href='". get_site_url()."/confirm?id=".$idregister."'>Confirm</a></p> ";
         wp_mail($email, "Subject", $message);         
         $regis="ok"; 
        include('template/success.php'); 
        wp_die();  
   }
   function get_register(){
      global $wpdb;
      $id=$_GET['id'];
      $table_name= $wpdb->prefix . "register";
      $table_name2= $wpdb->prefix . "breeding";
      $table_name3= $wpdb->prefix . "state";
      $results_register = $wpdb->get_results("SELECT * FROM $table_name where id=$id;");
      $results_breeding = $wpdb->get_results("SELECT * FROM $table_name2 where idregister=$id;");
      foreach ($results_register as $key_register) {
        $username=$key_register->username;
        $password=$key_register->password;
        $firstname=$key_register->firstname;
        $lastname=$key_register->lastname;
        $street=$key_register->street;
        $apt=$key_register->apt;
        $city=$key_register->city;
        $code=$key_register->state;
        $zip=$key_register->zip;
        $country=$key_register->country;
        $phone=$key_register->phone;
        $mobile=$key_register->mobile;
        $workphone=$key_register->workphone;
        $email=$key_register->email;
        $howfound=$key_register->howfound;
        $howpay=$key_register->howpay;
        $registration_code=$key_register->registration_code;
      }
      foreach ($results_breeding as $key_breeding) {
        $kennel=$key_breeding->kennel;
        $url=$key_breeding->url;
        $breeding=$key_breeding->breeding;
        $breed1=$key_breeding->breed1;
        $breed2=$key_breeding->breed2;
        $breed3=$key_breeding->breed3;
        $breed4=$key_breeding->breed4;
        $breed5=$key_breeding->breed5;
        $breed6=$key_breeding->breed6;
        $contract=$key_breeding->contract;
        $active=$key_breeding->active;
        $license=$key_breeding->license;
        $vet_name=$key_breeding->vet_name;
        $vet_phone=$key_breeding->vet_phone;
        $travel_info=$key_breeding->travel_info;
        $montreal=$key_breeding->montreal;
        $toronto=$key_breeding->toronto;
        $vancouver=$key_breeding->vancouver;
        $anchorage=$key_breeding->anchorage;
      }
      $results_states= $wpdb->get_results("SELECT * FROM $table_name3 where code='$code';");
      foreach ($results_states as $key_st) {
        $state=$key_st->name;
      }
      ?><script type="text/javascript">
      var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
      </script>
      <?php
      include('template/view_register.php');        
   }
   function updateregister(){
      global $wpdb;
      $params=$_POST['params'];
      $id=$_POST['id'];
      $arraysearch=explode('&', $params);
      foreach ($arraysearch as $key => $value) {
        $need[substr($value,0,strpos($value,'='))]=substr($value,strpos($value,'=')+1);
      }
      $username= $need['username'];
      $firstname=str_replace('+', ' ', $need['firstname']);
      $lastname=str_replace('+', ' ', $need['lastname']);
      $street=str_replace('+', ' ', $need['street']);
      $apt=str_replace('+', ' ', $need['apt']);
      $city=str_replace('+', ' ', $need['city']);
      $state=str_replace('+', ' ', $need['state']);
      $zip=str_replace('+', ' ', $need['zip']);
      $country=str_replace('+', ' ', $need['country']);
      $phone=str_replace('+', ' ', $need['phone']);
      $mobile=str_replace('+', ' ', $need['mobile']);
      $workphone=str_replace('+', ' ', $need['workphone']);
      $email=str_replace('%40', '@', $need['email']);
      $howfound=str_replace('+', ' ', $need['howfound']);
      $howpay=str_replace('+', ' ', $need['howpay']);
      $registration_code=str_replace('+', ' ', $need['registration_code']);
      $kennel=str_replace('+', ' ', $need['kennel']);
      $url= str_replace('%3A', ':', str_replace('%2F', '/', str_replace('+', ' ', $need['url'])));
      $breeding=str_replace('+', ' ', $need['breeding']);
      $breed1=str_replace('+', ' ', $need['breed1']);
      $breed2=str_replace('+', ' ', $need['breed2']);
      $breed3=str_replace('+', ' ', $need['breed3']);
      $breed4=str_replace('+', ' ', $need['breed4']);
      $breed5=str_replace('+', ' ', $need['breed5']);
      $breed6=str_replace('+', ' ', $need['breed6']);
      $contract=str_replace('+', ' ', $need['contract']);
      $active=str_replace('+', ' ', $need['active']);
      $license=str_replace('+', ' ', $need['license']);
      $vet_name=str_replace('+', ' ', $need['vet_name']);
      $vet_phone=str_replace('+', ' ', $need['vet_phone']);
      $travel_info=str_replace('+', ' ', $need['travel_info']);
      $montreal=str_replace('+', ' ', $need['montreal']);
      $toronto=str_replace('+', ' ', $need['toronto']);
      $vancouver=str_replace('+', ' ', $need['vancouver']);
      $anchorage=str_replace('+', ' ', $need['anchorage']);
      if(empty($montreal)){ $montreal=0; } else { $montreal=1; }
      if(empty($toronto)){ $toronto=0; } else { $toronto=1; }
      if(empty($vancouver)){ $vancouver=0; } else { $vancouver=1; }
      if(empty($anchorage)){ $anchorage=0; } else { $anchorage=1; }
      $table_register= $wpdb->prefix . "register";
      $table_name2= $wpdb->prefix . "breeding";
      $sql="UPDATE $table_register SET username='$username' ,  firstname='$firstname' , lastname='$lastname' , street='$street' , apt='$apt' , city='$city' , state='$state'  , zip ='$zip', country='$country' , phone='$phone' , mobile='$mobile' , email= '$email',workphone='$workphone' , howfound='$howfound' , howpay='$howpay'  , registration_code='$registration_code' WHERE id=$id;";
      $wpdb->query($sql); 
        $idregister=$wpdb->insert_id;
        $sql2="UPDATE $table_name2 SET kennel='$kennel' , url = '$url', breeding = '$breeding', breed1 = '$breed1', breed2 = '$breed2', breed3 = '$breed3', breed4 = '$breed4', breed5 = '$breed5', breed6 = '$breed6', contract = '$contract', active = '$active', license = '$license', vet_name = '$vet_name', vet_phone = '$vet_phone', travel_info = '$travel_info', montreal = '$montreal', toronto = '$toronto', vancouver = '$vancouver', anchorage = '$anchorage' WHERE idregister=$id";
        $wpdb->query($sql2);
        $regis="ok";   
        include('template/success.php'); 
        wp_die();  

   }
   function deleteregister() {
      global $wpdb;
      $id=$_POST['id'];
      $table_name= $wpdb->prefix . "register";
      $table_name2= $wpdb->prefix . "bredding";
      $sql1="DELETE from $table_name WHERE id=$id;";
      $sql2="DELETE from $table_name2 WHERE idregister=$id;";
      $wpdb->query($sql1); 
      $wpdb->query($sql2); 
      $results_disabled = $wpdb->get_results("SELECT * FROM $table_name where active=0;");
      $results_enabled = $wpdb->get_results("SELECT * FROM $table_name where active=1;");   
      wp_die();
   }
   function activeuser(){
      global $wpdb;
      $id=$_POST['id'];
      $website=get_site_url();
      $table_name= $wpdb->prefix . "register";
      $table_name2= $wpdb->prefix . "users";
      $results_disabled = $wpdb->get_results("SELECT * FROM $table_name where id=$id;");
      foreach ($results_disabled as $key) {
        $username=$key->username;
        $password=$key->password;
        $firstname=$key->firstname;
        $lastname=$key->lastname;
        $street=$key->street;
        $apt=$key->apt;
        $city=$key->city;
        $code=$key->state;
        $zip=$key->zip;
        $country=$key->country;
        $phone=$key->phone;
        $mobile=$key->mobile;
        $workphone=$key->workphone;
        $email=$key->email;
      }
      $userdata= array(
        'user_login'  =>  $username,
        'password'  =>  $password,
        'user_nicename'  =>  $username,
        'user_email'  =>  $email,
        'user_url'  =>  $website,
        'display_name'  => $username,
        'role' => 'subscriber'
      );
      $user_id=wp_insert_user( $userdata );
      if ( ! is_wp_error( $user_id ) ) {
        $table_register= $wpdb->prefix . "register";
        $sql="UPDATE $table_register SET iduser=$user_id ,  active=1 WHERE id=$id;";
        $wpdb->query($sql);
        $sql2="UPDATE $table_name2 SET user_pass=md5('$password') WHERE id=$user_id;";
        $wpdb->query($sql2);
        echo 'Success';
      }
      else {
        echo $user_id->get_error_message();
      }
      wp_die();       
  }
  function updateproduct(){
       global $wpdb;
       $user_id = wp_get_current_user()->ID;
       $id=$_POST['id_product'];
       $params=$_POST['params'];
       $arraysearch=explode('&', $params);
       foreach ($arraysearch as $key => $value) {
         $need[substr($value,0,strpos($value,'='))]=substr($value,strpos($value,'=')+1);
       }
       $puppy_name= $need['puppy_name'];
       $price=$need['price'];
       $description=str_replace('+', ' ', $need['description']);
       $short_desc=str_replace('+', ' ', $need['short_desc']);
       $health=str_replace('+', ' ', $need['health']);
       $iso=str_replace('+', ' ', $need['iso']);
       $shipping=str_replace('+', ' ', $need['shipping']);
       $guarantee=str_replace('+', ' ', $need['guarantee']);
       if (!empty($health)){ $health='$44 FREE'; }
       if (!empty($iso)){ $iso='$27 FREE'; }
       if (!empty($shipping)){ $shipping='INCLUDED'; }
       if (!empty($guarantee)){ $guarantee='INCLUDED'; }            
       if (!empty($pedigree)){ $pedigree='INCLUDED'; }      
        $picture=$_POST['picture'];
        $post_excerpt="<div class=\"block-singlepup\">";
        $post_excerpt.="<p class=\"alignleft\">Healthcare certificate:</p>";
        $post_excerpt.="<p class=\"alignright\" style=\"text-decoration: line-through;\">".$health."</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="<p class=\"alignleft\">ISO microchip</p>";
        $post_excerpt.="<p class=\"alignright\" style=\"text-decoration: line-through;\">".$iso."</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="<p class=\"alignleft\">Shipping Crate</p>";
        $post_excerpt.="<p class=\"alignright\">".$shipping."</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="<p class=\"alignleft\">10 year Guarantee</p>";
        $post_excerpt.="<p class=\"alignright\">".$guarantee."</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="<p class=\"alignleft\" style=\"margin-bottom: 0px;\">FCI Pedigree</p>";
        $post_excerpt.="<p class=\"alignright\" style=\"margin-bottom: 0px;\">INCLUDED</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="</div>"; 
        $post = array(
             'ID' => $id,
             'post_author' => $user_id,
             'post_content' => $description, 
             'post_status' => "publish",
             'post_title' => $puppy_name,
             'post_parent' => '',
             'post_type' => "product",
             'post_excerpt' => $post_excerpt,
             'comment_status' => 'open'
          );
        $post_id = wp_update_post( $post, true );
        wp_set_object_terms( $post_id, 'simple', 'product_type' );
        update_post_meta( $post_id, '_visibility', 'visible' );
        update_post_meta( $post_id, '_stock_status', 'instock');
        update_post_meta( $post_id, 'total_sales', '0' );
        update_post_meta( $post_id, '_downloadable', 'no' );
        update_post_meta( $post_id, '_virtual', '' );
        update_post_meta( $post_id, '_regular_price', '' );
        update_post_meta( $post_id, '_sale_price', $price );
        update_post_meta( $post_id, '_purchase_note', '' );
        update_post_meta( $post_id, '_featured', 'no' );
        update_post_meta( $post_id, '_weight', '' );
        update_post_meta( $post_id, '_length', '' );
        update_post_meta( $post_id, '_width', '' );
        update_post_meta( $post_id, '_height', '' );
        update_post_meta( $post_id, '_sku', '' );
        update_post_meta( $post_id, '_tax_status', 'taxable' );
        update_post_meta( $post_id, '_tax_class', '' );
        update_post_meta( $post_id, '_sold_individually', 'yes' );
        update_post_meta( $post_id, '_product_attributes', array() );
        update_post_meta( $post_id, '_sale_price_dates_from', '' );
        update_post_meta( $post_id, '_sale_price_dates_to', '' );
        update_post_meta( $post_id, '_price', $price );
        update_post_meta( $post_id, '_sold_individually', 'yes' );
        update_post_meta( $post_id, '_manage_stock', 'no' );
        wc_update_product_stock($post_id, $single['qty'], 'set');
        update_post_meta( $post_id, '_backorders', 'no' );
        $dir = plugin_dir_path( __DIR__ );;
        $output_dir = $dir."cutepupp_register/template/assets/uploads/";
        $filename = $output_dir.$picture;
        $filetype = wp_check_filetype( basename( $filename ), null );    
        $wp_upload_dir = wp_upload_dir();
        $unique_file_name = wp_unique_filename( $wp_upload_dir['path'], $picture );
        $fname = basename( $unique_file_name );
        if( wp_mkdir_p( $wp_upload_dir['path'] ) ) {
          $file = $wp_upload_dir['path'] . '/' . $fname;
        } 
        else {
          $file = $wp_upload_dir['basedir'] . '/' . $fname;
        }
        $guid=$wp_upload_dir['url'] . '/' . basename( $fname );
        copy( $filename, $file );
        unlink($filename);
        $attachment = array(
          'guid'           => $guid, 
          'post_mime_type' => $filetype['type'],
          'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
          'post_content'   => '',
          'post_status'    => 'inherit'
         );
         $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
         require_once( ABSPATH . 'wp-admin/includes/image.php' );
         $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
         wp_update_attachment_metadata( $attach_id, $attach_data );
         set_post_thumbnail( $post_id, $attach_id );
         
         include('template/success.php'); 
         wp_die();  
  }
  function edit_product(){
    global $wpdb;
    $id_product=$_GET['id']; 
      $table_name= $wpdb->prefix . "register";
      $table_name2= $wpdb->prefix . "breeding";
      $table_name3= $wpdb->prefix . "state";
      $results_register = $wpdb->get_results("SELECT * FROM $table_name where id=$id;");
      $results_breeding = $wpdb->get_results("SELECT * FROM $table_name2 where idregister=$id;");
      foreach ($results_register as $key_register) {
        $username=$key_register->username;
        $password=$key_register->password;
        $firstname=$key_register->firstname;
        $lastname=$key_register->lastname;
        $street=$key_register->street;
        $apt=$key_register->apt;
        $city=$key_register->city;
        $code=$key_register->state;
        $zip=$key_register->zip;
        $country=$key_register->country;
        $phone=$key_register->phone;
        $mobile=$key_register->mobile;
        $workphone=$key_register->workphone;
        $email=$key_register->email;
        $howfound=$key_register->howfound;
        $howpay=$key_register->howpay;
        $registration_code=$key_register->registration_code;
      }
      foreach ($results_breeding as $key_breeding) {
        $kennel=$key_breeding->kennel;
        $url=$key_breeding->url;
        $breeding=$key_breeding->breeding;
        $breed1=$key_breeding->breed1;
        $breed2=$key_breeding->breed2;
        $breed3=$key_breeding->breed3;
        $breed4=$key_breeding->breed4;
        $breed5=$key_breeding->breed5;
        $breed6=$key_breeding->breed6;
        $contract=$key_breeding->contract;
        $active=$key_breeding->active;
        $license=$key_breeding->license;
        $vet_name=$key_breeding->vet_name;
        $vet_phone=$key_breeding->vet_phone;
        $travel_info=$key_breeding->travel_info;
        $montreal=$key_breeding->montreal;
        $toronto=$key_breeding->toronto;
        $vancouver=$key_breeding->vancouver;
        $anchorage=$key_breeding->anchorage;
      }
      $results_states= $wpdb->get_results("SELECT * FROM $table_name3 where code='$code';");
      foreach ($results_states as $key_st) {
        $state=$key_st->name;
      }
    ?><script type="text/javascript">
     var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
     </script>
     <?php    
     include('template/edit_product.php');
  }
  function view_products(){
    global $wpdb;    
    $user_id = wp_get_current_user()->ID;
    if($user_id==0){  
      include('template/wrong_user.php');
    }
    else{
      ?><script type="text/javascript">
      var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
      </script>
      <?php    
      include('template/view_product_template.php');
    }
  }  
  function addproduct(){
       global $wpdb;
       $user_id = wp_get_current_user()->ID;
       $params=$_POST['params'];
       $arraysearch=explode('&', $params);
       foreach ($arraysearch as $key => $value) {
         $need[substr($value,0,strpos($value,'='))]=substr($value,strpos($value,'=')+1);
       }
       $puppy_name= $need['puppy_name'];
       $price=$need['price'];
       $description=str_replace('+', ' ', $need['description']);
       $short_desc=str_replace('+', ' ', $need['short_desc']);
       $health=str_replace('+', ' ', $need['health']);
       $iso=str_replace('+', ' ', $need['iso']);
       $shipping=str_replace('+', ' ', $need['shipping']);
       $guarantee=str_replace('+', ' ', $need['guarantee']);
       if (!empty($health)){ $health='$44 FREE'; }
       if (!empty($iso)){ $iso='$27 FREE'; }
       if (!empty($shipping)){ $shipping='INCLUDED'; }
       if (!empty($guarantee)){ $guarantee='INCLUDED'; }            
       if (!empty($pedigree)){ $pedigree='INCLUDED'; }      
        $picture=$_POST['picture'];
        $post_excerpt="<div class=\"block-singlepup\">";
        $post_excerpt.="<p class=\"alignleft\">Healthcare certificate:</p>";
        $post_excerpt.="<p class=\"alignright\" style=\"text-decoration: line-through;\">".$health."</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="<p class=\"alignleft\">ISO microchip</p>";
        $post_excerpt.="<p class=\"alignright\" style=\"text-decoration: line-through;\">".$iso."</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="<p class=\"alignleft\">Shipping Crate</p>";
        $post_excerpt.="<p class=\"alignright\">".$shipping."</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="<p class=\"alignleft\">10 year Guarantee</p>";
        $post_excerpt.="<p class=\"alignright\">".$guarantee."</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="<p class=\"alignleft\" style=\"margin-bottom: 0px;\">FCI Pedigree</p>";
        $post_excerpt.="<p class=\"alignright\" style=\"margin-bottom: 0px;\">INCLUDED</p>";
        $post_excerpt.="<div style=\"clear: both;\"></div>";
        $post_excerpt.="</div>"; 
        $post = array(
             'post_author' => $user_id,
             'post_content' => $description, 
             'post_status' => "publish",
             'post_title' => $puppy_name,
             'post_parent' => '',
             'post_type' => "product",
             'post_excerpt' => $post_excerpt,
             'comment_status' => 'open'
          );
        $post_id = wp_insert_post( $post, true );
        wp_set_object_terms( $post_id, 'simple', 'product_type' );
        update_post_meta( $post_id, '_visibility', 'visible' );
        update_post_meta( $post_id, '_stock_status', 'instock');
        update_post_meta( $post_id, 'total_sales', '0' );
        update_post_meta( $post_id, '_downloadable', 'no' );
        update_post_meta( $post_id, '_virtual', '' );
        update_post_meta( $post_id, '_regular_price', '' );
        update_post_meta( $post_id, '_sale_price', $price );
        update_post_meta( $post_id, '_purchase_note', '' );
        update_post_meta( $post_id, '_featured', 'no' );
        update_post_meta( $post_id, '_weight', '' );
        update_post_meta( $post_id, '_length', '' );
        update_post_meta( $post_id, '_width', '' );
        update_post_meta( $post_id, '_height', '' );
        update_post_meta( $post_id, '_sku', '' );
        update_post_meta( $post_id, '_tax_status', 'taxable' );
        update_post_meta( $post_id, '_tax_class', '' );
        update_post_meta( $post_id, '_sold_individually', 'yes' );
        update_post_meta( $post_id, '_product_attributes', array() );
        update_post_meta( $post_id, '_sale_price_dates_from', '' );
        update_post_meta( $post_id, '_sale_price_dates_to', '' );
        update_post_meta( $post_id, '_price', $price );
        update_post_meta( $post_id, '_sold_individually', 'yes' );
        update_post_meta( $post_id, '_manage_stock', 'no' );
        wc_update_product_stock($post_id, $single['qty'], 'set');
        update_post_meta( $post_id, '_backorders', 'no' );
        $dir = plugin_dir_path( __DIR__ );;
        $output_dir = $dir."cutepupp_register/template/assets/uploads/";
        $filename = $output_dir.$picture;
        $filetype = wp_check_filetype( basename( $filename ), null );    
        $wp_upload_dir = wp_upload_dir();
        $unique_file_name = wp_unique_filename( $wp_upload_dir['path'], $picture );
        $fname = basename( $unique_file_name );
        if( wp_mkdir_p( $wp_upload_dir['path'] ) ) {
          $file = $wp_upload_dir['path'] . '/' . $fname;
        } 
        else {
          $file = $wp_upload_dir['basedir'] . '/' . $fname;
        }
        $guid=$wp_upload_dir['url'] . '/' . basename( $fname );
        copy( $filename, $file );
        unlink($filename);
        $attachment = array(
          'guid'           => $guid, 
          'post_mime_type' => $filetype['type'],
          'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
          'post_content'   => '',
          'post_status'    => 'inherit'
         );
         $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
         require_once( ABSPATH . 'wp-admin/includes/image.php' );
         $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
         wp_update_attachment_metadata( $attach_id, $attach_data );
         set_post_thumbnail( $post_id, $attach_id );
         
         include('template/success.php'); 
         wp_die();  
  }
  function uploadfile(){
    global $wpdb;
    $dir = plugin_dir_path( __DIR__ );;
    $output_dir = $dir."cutepupp_register/template/assets/uploads/";
    $filename = $_FILES["myfile"]["name"];
    move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$filename);
    echo $output_dir.$filename;
    wp_die();       
  }
  function add_newproduct(){
    global $wpdb;    
    $user_id = wp_get_current_user()->ID;
    if($user_id==0){  
      include('template/wrong_user.php');
    }
    else{
      ?><script type="text/javascript">
      var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
      </script>
      <?php    
      include('template/product_template.php');
    }
  }
  function cutepupp_login(){
    global $wpdb;
    $login=$_GET['login'];    
    include('template/login_template.php');
  }
  function change_password(){
    global $wpdb; 
    include('template/change_password_template.php');     
  }
  function sendemailpwd(){
    global $wpdb; 
    $email=$_POST['email'];
    $subject="Cutepuppytime recover password";
    $message="<img src='https://cutepuppytime.com/wp-content/uploads/2018/04/Logo-150x150.png'></img>";
    $message.="<p>To change your password please click here -> <a href='". get_site_url()."/change-password'>Change</a></p> ";
    wp_mail($email, "Subject", $message);  
    include('template/mail_sended.php');     
   wp_die();
  }

 
 function cutepupp_register_add_menu(){   
      if (function_exists('add_options_page')) {
         //add_menu_page
         add_options_page('Cutepupp register - General Settings', 'Cuteupps Register general settings', 8, basename(__FILE__), 'cutepupp_register_general_settings');
      }
  }  
function register_load_scripts() {
   wp_enqueue_script( "register", plugin_dir_url( __FILE__ ) . 'template/assets/js/register.js', array( 'jquery' ) );
   wp_localize_script( 'deleteregister', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) ); 
   wp_localize_script( 'activeuser', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) ); 
}
function view_register_load_scripts() {
   wp_enqueue_script( "view_register", plugin_dir_url( __FILE__ ) . 'template/assets/js/view_register.js', array( 'jquery' ) );
}
function add_product_load_scripts() {
   wp_enqueue_script( "add_product", plugin_dir_url( __FILE__ ) . 'template/assets/js/add_product.js', array( 'jquery' ) );
}
function cutepupp_login_load_scripts() {
   wp_enqueue_script( "cutepupp_login", plugin_dir_url( __FILE__ ) . 'template/assets/js/login.js', array( 'jquery' ) );
}
function cutepupp_change_load_scripts() {
   wp_enqueue_script( "cutepupp_change", plugin_dir_url( __FILE__ ) . 'template/assets/js/change_password.js', array( 'jquery' ) );
}
function bootstrap_load_styles(){
   wp_register_style('bootstrap', plugin_dir_url( __FILE__ ) . 'template/assets/css/bootstrap.min.css');
   wp_enqueue_style( 'bootstrap' );
}
function datatables_bootstrap_load_styles(){
   wp_register_style('datatables_bootstrap', plugin_dir_url( __FILE__ ) . 'template/assets/css/dataTables.bootstrap.min.css');
   wp_enqueue_style( 'datatables_bootstrap' );
}
function upload_load_styles(){
   wp_register_style('upload', plugin_dir_url( __FILE__ ) . 'template/assets/css/jquery-file-upload.css');
   wp_enqueue_style( 'upload' );
}
function uploadfile_load_styles(){
   wp_register_style('uploadfile', plugin_dir_url( __FILE__ ) . 'template/assets/css/uploadfile.css');
   wp_enqueue_style( 'uploadfile' );
}
function font_awesome_load_styles(){
   wp_register_style('font_awesome', plugin_dir_url( __FILE__ ) . 'template/assets/css/font-awesome/css/font-awesome.min.css');
   wp_enqueue_style( 'font_awesome' );
}
function datatables_load_styles(){
   wp_register_style('datatables', plugin_dir_url( __FILE__ ) . 'template/assets/css/jquery.dataTables.min.css');
   wp_enqueue_style( 'datatables' );
}
function bootstrap_load_scripts() {
  wp_enqueue_script( "bootstrap", plugin_dir_url( __FILE__ ) . 'template/assets/js/bootstrap.min.js', array( 'jquery' ) );
}
function upload_load_scripts() {
  wp_enqueue_script( "upload", plugin_dir_url( __FILE__ ) . 'template/assets/js/jquery-file-upload.min.js', array( 'jquery' ) );
}
function datatables_load_scripts() {
  wp_enqueue_script( "datatables", plugin_dir_url( __FILE__ ) . 'template/assets/js/jquery.dataTables.min.js', array( 'jquery' ) );
}
function ckeditor_load_scripts() {
  wp_enqueue_script( "ckeditor", plugin_dir_url( __FILE__ ) . 'template/assets/ckeditor/ckeditor.js', array( 'jquery' ) );
}
function datatables_bootstrap_load_scripts() {
  wp_enqueue_script( "datatables", plugin_dir_url( __FILE__ ) . 'template/assets/js/jquery.dataTables.bootstrap.min.js', array( 'jquery' ) );
}
function tables_load_scripts() {
   wp_enqueue_script( "tables", plugin_dir_url( __FILE__ ) . 'template/assets/js/tables.js', array( 'jquery' ) );
}
function validate_load_styles(){
   wp_register_style('screen', plugin_dir_url( __FILE__ ) . 'template/assets/css/screen.css');
   wp_register_style('reset', plugin_dir_url( __FILE__ ) . 'template/assets/css/reset.css');
   wp_register_style('cmxform', plugin_dir_url( __FILE__ ) . 'template/assets/css/cmxform.css');
   wp_register_style('cmxformtemplate', plugin_dir_url( __FILE__ ) . 'template/assets/css/cmxformTemplate.css');
   wp_register_style('core', plugin_dir_url( __FILE__ ) . 'template/assets/css/core.css');
   wp_enqueue_style( 'screen' );
}
function validate_load_scripts() {
  wp_enqueue_script( "jquery-validate", plugin_dir_url( __FILE__ ) . 'template/assets/js/jquery.validate.js', array( 'jquery' ) );
}

add_shortcode( 'cr_cutepupp_registration', 'cutepupp_registration_shortcode' );
function cutepupp_registration_shortcode() {
    ob_start();
    addnew_register();
    return ob_get_clean();
}
add_shortcode( 'cr_cutepupp_view_register', 'cutepupp_view_register' );
function cutepupp_view_register() {
    ob_start();
    get_register();
    return ob_get_clean();
}
add_shortcode( 'cr_add_product', 'add_product_shortcode' );
function add_product_shortcode() {
    ob_start();
    add_newproduct();
    return ob_get_clean();
}
add_shortcode( 'cr_cutepupp_login', 'cutepupp_login_shortcode' );
function cutepupp_login_shortcode() {
    ob_start();
    cutepupp_login();
    return ob_get_clean();
}
add_shortcode( 'cr_change_password', 'change_password_shortcode' );
function change_password_shortcode() {
    ob_start();
    change_password();
    return ob_get_clean();
}
add_action( 'wp_login_failed', 'cutepupp_login_fail' ); 
function cutepupp_login_fail( $username ) {
     $referrer = $_SERVER['HTTP_REFERER'];  
     if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
          wp_redirect(site_url() . '/login/?login=failed' );
          exit;
     }
}
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROMNAME;
}

if (function_exists('add_action')) {
   add_action('admin_menu', 'cutepupp_register_add_menu');
}
add_action('wp_print_styles', 'validate_load_styles');
add_action('wp_print_styles', 'bootstrap_load_styles');
add_action('wp_print_styles', 'font_awesome_load_styles');
add_action('wp_print_styles', 'datatables_load_styles');
add_action('wp_print_styles', 'datatables_bootstrap_load_styles');
add_action('wp_print_styles', 'upload_load_styles');
add_action('wp_print_styles', 'uploadfile_load_styles');
add_action('wp_head', 'register_load_scripts');
add_action('wp_head', 'view_register_load_scripts');
add_action('wp_head', 'add_product_load_scripts');
add_action('wp_head', 'cutepupp_login_load_scripts');
add_action('wp_head', 'cutepupp_change_load_scripts');
add_action('wp_head', 'bootstrap_load_scripts');
add_action('wp_head', 'datatables_load_scripts');
add_action('wp_head', 'ckeditor_load_scripts');
add_action('wp_head', 'validate_load_scripts');
add_action('wp_head', 'tables_load_scripts');
add_action('wp_head', 'upload_load_scripts');
add_action('admin_head', 'bootstrap_load_scripts');
add_action('admin_head', 'datatables_load_scripts');
add_action('admin_head', 'datatables_bootstrap_load_scripts');
add_action('admin_head', 'tables_load_scripts');
add_action('admin_head', 'register_load_scripts');
add_action('admin_head', 'add_product_load_scripts');
add_action('admin_head', 'cutepupp_login_load_scripts');
add_action('admin_head', 'cutepupp_change_load_scripts');
add_action('wp_ajax_deleteregister', 'deleteregister');
add_action( 'wp_ajax_nopriv_deleteregister', 'deleteregister' );
add_action('wp_ajax_activeuser', 'activeuser');
add_action('wp_ajax_nopriv_activeuser', 'activeuser');
add_action('wp_ajax_saveregister', 'saveregister');
add_action( 'wp_ajax_nopriv_saveregister', 'saveregister' );
add_action('wp_ajax_updateregister', 'updateregister');
add_action('wp_ajax_nopriv_saveregister', 'updateregister');

add_action('wp_ajax_addproduct', 'addproduct');
add_action( 'wp_ajax_nopriv_addproduct', 'addproduct' );
add_action('wp_ajax_sendemailpwd', 'sendemailpwd');
add_action( 'wp_ajax_nopriv_sendemailpwd', 'sendemailpwd' );
add_action('wp_ajax_uploadfile', 'uploadfile');
add_action( 'wp_ajax_nopriv_uploadfile', 'uploadfile' );
add_action('activate_cutepupp_register/cutepupp_register.php','cutepupp_register_install');
add_action('deactivate_cutepupp_register/cutepupp_register.php', 'cutepupp_register_uninstall');
