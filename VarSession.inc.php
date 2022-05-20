<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["categories"])){

        $_SESSION["categories"] = array(

            "enfant" => array(
    
                    "Haut" => array(
                        "eh0" => array(
                            "id"=>0,
                            "img"=>"img/enfant/haut/photo-1471286174890-9c112ffca5b4.jpg",
                            "name"=>"Polo rouge",
                            "price"=>"4.50",
                            "stock"=>"6"
                        ), 
                        "eh1" => array(
                            "id"=>1,
                            "img"=>"img/enfant/haut/photo-1519238263530-99bdd11df2ea.jpg",
                            "name"=>"Pull avec col en V",
                            "price"=>"8",
                            "stock"=>"6"
                        ),
                        "eh2" => array(
                            "id"=>2,
                            "img"=>"img/enfant/haut/photo-1519457431-44ccd64a579b.jpg",
                            "name"=>"chemise jeans",
                            "price"=>"10",
                            "stock"=>"6"
                        ),
                    )
                    "pantalon" => array(
                        "ep0" => array(
                            "id"=>0,
                            "img"=>"img/enfant/bas/photo-1617627057301-7b03d1097672 - Copie.jpg",
                            "name"=>"mini pantalpon cargo",
                            "price"=>"12.5",
                            "stock"=>"6"
                        ),
                        "ep1" => array(
                            "id"=>1,
                            "img"=>"img/enfant/bas/photo-1603792273674-543a44863980.jpg",
                            "name"=>"Avidagrasto jeans Enfant",
                            "price"=>"20",
                            "stock"=>"6"
                        ),
                        "ep2" => array(
                            "id"=>2,
                            "img"=>"img/enfant/bas/photo-1645458460851-2f786c81acf7.jpg",
                            "name"=>"Mini jeans bleu",
                            "price"=>"13.56",
                            "stock"=>"6"
                        ),
                    )
                    "robe" => array(
                        "er0" => array(
                            "id"=>0,
                            "img"=>"img/enfant/robe/photo-1513791149369-f88da26c8e93 (1).jpg",
                            "name"=>"robe ThaÏ",
                            "price"=>"16.5",
                            "stock"=>"6"
                        ),
                        "er1" => array(
                            "id"=>1,
                            "img"=>"img/enfant/robe/photo-1518831959646-742c3a14ebf7.jpg",
                            "name"=>"robe blanche à points",
                            "price"=>"15",
                            "stock"=>"6"
                        ),
                        "er2" => array(
                            "id"=>2,
                            "img"=>"img/enfant/robe/photo-1524698144045-29ad01c53109.jpg",
                            "name"=>"robe à fleurs",
                            "price"=>"15.56",
                            "stock"=>"6"
                        ),
                    )
                    )
            "femme" => array(
    
                "Haut" => array(
                    "fh0" => array(
                        "id"=>0,
                        "img"=>"img/femme/haut/photo-1485218126466-34e6392ec754.jpg",
                        "name"=>"T-shirt gris",
                        "price"=>"8.50",
                        "stock"=>"6"
                    ), 
                    "fh1" => array(
                        "id"=>1,
                        "img"=>"img/femme/haut/photo-1503342217505-b0a15ec3261c.jpg",
                        "name"=>"Crop-top Avidagrasto fit",
                        "price"=>"20",
                        "stock"=>"6"
                    ),
                    "fh2" => array(
                        "id"=>2,
                        "img"=>"img/femme/haut/photo-1521577352947-9bb58764b69a.jpg",
                        "name"=>"T-shirt blanc",
                        "price"=>"10",
                        "stock"=>"6"
                    ),
                    "fh3" => array(
                        "id"=>3,
                        "img"=>"img/femme/haut/photo-1540804485132-9c94bcae6c66.jpg",
                        "name"=>"Crop-top gris",
                        "price"=>"15",
                        "stock"=>"6"
                    ),
                )
                "pantalon" => array(
                    "fp0" => array(
                        "id"=>0,
                        "img"=>"img/femme/pantalon/photo-1517445312882-bc9910d016b7.jpg - Copie.jpg",
                        "name"=>"Pantalon beige",
                        "price"=>"18.5",
                        "stock"=>"6"
                    ),
                    "fp1" => array(
                        "id"=>1,
                        "img"=>"img/femme/pantalon/photo-1519733833087-3b1ceb8d56c5.jpg",
                        "name"=>"Avidagrasto jeans",
                        "price"=>"25",
                        "stock"=>"6"
                    ),
                    "fp2" => array(
                        "id"=>2,
                        "img"=>"img/femme/pantalon/photo-1541099649105-f69ad21f3246.jpg",
                        "name"=>"Jeans bleu denim",
                        "price"=>"28.56",
                        "stock"=>"6"
                    ),
                    "fp3" => array(
                        "id"=>3,
                        "img"=>"img/femme/pantalon/photo-1582418702059-97ebafb35d09.jpg",
                        "name"=>"Jeans bleu oversize",
                        "price"=>"27.03",
                        "stock"=>"6"
                    ),
                )
                "robe" => array(
                    "fr0" => array(
                        "id"=>0,
                        "img"=>"img/femme/robe/photo-1485230895905-ec40ba36b9bc.jpg",
                        "name"=>"robe tomato",
                        "price"=>"37.5",
                        "stock"=>"6"
                    ),
                    "fr1" => array(
                        "id"=>1,
                        "img"=>"img/femme/robe/photo-1572804013427-4d7ca7268217.jpg",
                        "name"=>"robe coechella",
                        "price"=>"25.99",
                        "stock"=>"6"
                    ),
                    "fr2" => array(
                        "id"=>2,
                        "img"=>"img/femme/robe/photo-1605763240000-7e93b172d754.jpg",
                        "name"=>"robe soleil",
                        "price"=>"35.56",
                        "stock"=>"6"
                    ),
                    "fr3" => array(
                        "id"=>3,
                        "img"=>"img/femme/robe/photo-1572123748421-ac758c94c4db.jpg",
                        "name"=>"robe doré",
                        "price"=>"42.03",
                        "stock"=>"6"
                    ),
                )

            ),
    
            "homme" => array(
    
                "Haut" => array(
                    "hh0" => array(
                        "id"=>0,
                        "img"=>"img/homme/haut/photo-1503341455253-b2e723bb3dbb.jpg",
                        "name"=>"T-shirt Avidagrasto fit",
                        "price"=>"18",
                        "stock"=>"6"
                    ), 
                    "hh1" => array(
                        "id"=>1,
                        "img"=>"img/homme/haut/photo-1607345366928-199ea26cfe3e.jpg",
                        "name"=>"Chemise carreau",
                        "price"=>"20",
                        "stock"=>"6"
                    ),
                    "hh2" => array(
                        "id"=>2,
                        "img"=>"img/homme/haut/photo-1521572163474-6864f9cf17ab.jpg",
                        "name"=>"T-shirt blanc",
                        "price"=>"10",
                        "stock"=>"6"
                    ),
                    "hh3" => array(
                        "id"=>3,
                        "img"=>"img/homme/haut/photo-1628737490381-117c818d1ad7.jpg",
                        "name"=>"T-shirt noir Moralone",
                        "price"=>"15",
                        "stock"=>"6"
                    ),
                )
                "pantalon" => array(
                    "hp0" => array(
                        "id"=>0,
                        "img"=>"img/homme/pantalon/photo-1493357335960-4583bfa6f8d9.jpg",
                        "name"=>"Pantalon",
                        "price"=>"17.5",
                        "stock"=>"6"
                    ),
                    "hp1" => array(
                        "id"=>1,
                        "img"=>"img/homme/pantalon/photo-1517509458118-6525ca3fecc4.jpg",
                        "name"=>"Avidagrasto jeans",
                        "price"=>"25",
                        "stock"=>"6"
                    ),
                    "hp2" => array(
                        "id"=>2,
                        "img"=>"img/homme/pantalon/photo-1592009061830-d95ba50fe213.jpg",
                        "name"=>"Jeans bleu",
                        "price"=>"15.56",
                        "stock"=>"6"
                    ),
                    "hp3" => array(
                        "id"=>3,
                        "img"=>"img/homme/pantalon/photo-1586441310277-ed1a8fae585d.jpg",
                        "name"=>"Jeans valhalla noir",
                        "price"=>"32.03",
                        "stock"=>"6"
                    ),
                )
    
            )
        )
    }

?>