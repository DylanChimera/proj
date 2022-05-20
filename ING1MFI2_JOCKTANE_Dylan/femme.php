<!DOCTYPE html>
<html>
      <?php include('header.php'); ?>

      <section id="articles">
        <div class="image-accueil"></div>
        <h1 id="titre">Ne vous faites pas prier mesdames</h1>
        <div>
          <!-- <div class="tabs">
            <span class="active "><a  href="">Haut</a></span>
            <span><a href="">Pantalon</a></span>
          </div> -->

          <ul class="tabs">
            <li  class='active'> <a  href="#haut">Haut</a> </li>
            <li ><a  href="#pantalon">Pantalon</a></li>
            <li><a href="#robe">Robe</a></li>
          </ul>
          <div class="tabs-content">
            <div class="tab-content active" id="haut">
              <h2>
                <span
                  class=""
                  onclick="javascript:change_onglet('haut');"
                  >T-shirt, crop-top et sweatshirt</span
                >
              </h2>
              <table>
                <tr>
                  <td>
                    <img
                      src="img/femme/haut/photo-1485218126466-34e6392ec754.jpg"
                      alt="femme haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1485218126466</td>
                  <td class="nom-article">T-shirt gris</td>
                  <td class="prix-article">8.50€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock9','al9')">Stock</button>
                    <div class="al0" id="stock9" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s9" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al9" style="display: none;">
                            <input type="button" value="-" id="minus9" onclick="modifier(-1,'nb9','plus9','s9','minus9')">
                            <input type="button" size="8" value="0" id="nb9">
                            <input type="button" value="+" id="plus9" onclick="modifier(1,'nb9','plus9','s9','minus9')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/haut/photo-1503342217505-b0a15ec3261c.jpg"
                      alt="femme haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1503342217505</td>
                  <td class="nom-article">Crop-top Avidagrasto fit</td>
                  <td class="prix-article">20€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock30','al30')">Stock</button>
                    <div class="al0" id="stock30" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s10" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al30" style="display: none;">
                            <input type="button" value="-" id="minus10" onclick="modifier(-1,'nb10','plus10','s10','minus10')">
                            <input type="button" size="8" value="0" id="nb10">
                            <input type="button" value="+" id="plus10" onclick="modifier(1,'nb10','plus10','s10','minus10')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/haut/photo-1521577352947-9bb58764b69a.jpg"
                      alt="femme haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1521577352947</td>
                  <td class="nom-article">T-shirt blanc</td>
                  <td class="prix-article">10€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock10','al10')">Stock</button>
                    <div class="al0" id="stock10" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s11" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al10" style="display: none;">
                            <input type="button" value="-" id="minus11" onclick="modifier(-1,'nb11','plus11','s11','minus11')">
                            <input type="button" size="8" value="0" id="nb11">
                            <input type="button" value="+" id="plus11" onclick="modifier(1,'nb11','plus11','s11','minus11')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/haut/photo-1540804485132-9c94bcae6c66.jpg"
                      alt="femme haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1540804485132</td>
                  <td class="nom-article">Crop-top gris</td>
                  <td class="prix-article">15€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock31','al31')">Stock</button>
                    <div class="al0" id="stock31" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s12" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al31" style="display: none;">
                            <input type="button" value="-" id="minus12" onclick="modifier(-1,'nb12','plus12','s12','minus12')">
                            <input type="button" size="8" value="0" id="nb12">
                            <input type="button" value="+" id="plus12" onclick="modifier(1,'nb12','plus12','s12','minus12')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
              </table>
            </div>

            <div class="tab-content" id="pantalon">
              <h2>
                <span
                  class=""
                  id="onglet_pantalon"
                  >Pantalon
                  </span>
              </h2>
              <table>
                <tr>
                  <td>
                    <img
                      src="img/femme/pantalon/photo-1517445312882-bc9910d016b7.jpg"
                      alt="femme pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1517445312882</td>
                  <td class="nom-article">Pantalon beige</td>
                  <td class="prix-article">18.50€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock11','al11')">Stock</button>
                    <div class="al0" id="stock11" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s13" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al11" style="display: none;">
                            <input type="button" value="-" id="minus13" onclick="modifier(-1,'nb13','plus13','s13','minus13')">
                            <input type="button" size="8" value="0" id="nb13">
                            <input type="button" value="+" id="plus13" onclick="modifier(1,'nb13','plus13','s13','minus13')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/pantalon/photo-1519733833087-3b1ceb8d56c5.jpg"
                      alt="femme pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1519733833087</td>
                  <td class="nom-article">Avidagrasto jeans</td>
                  <td class="prix-article">25€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock12','al12')">Stock</button>
                    <div class="al0" id="stock12" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s14" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al12" style="display: none;">
                            <input type="button" value="-" id="minus14" onclick="modifier(-1,'nb14','plus14','s14','minus14')">
                            <input type="button" size="8" value="0" id="nb14">
                            <input type="button" value="+" id="plus14" onclick="modifier(1,'nb14','plus14','s14','minus14')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/pantalon/photo-1541099649105-f69ad21f3246.jpg"
                      alt="femme pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1541099649105</td>
                  <td class="nom-article">Jeans bleu denim</td>
                  <td class="prix-article">28.56€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock13','al13')">Stock</button>
                    <div class="al0" id="stock13" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s15" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al13" style="display: none;">
                            <input type="button" value="-" id="minus15" onclick="modifier(-1,'nb15','plus15','s15','minus15')">
                            <input type="button" size="8" value="0" id="nb15">
                            <input type="button" value="+" id="plus15" onclick="modifier(1,'nb15','plus15','s15','minus15')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/pantalon/photo-1582418702059-97ebafb35d09.jpg"
                      alt="femme pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1582418702059</td>
                  <td class="nom-article">Jeans bleu oversize</td>
                  <td class="prix-article">27.03€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock14','al14')">Stock</button>
                    <div class="al0" id="stock14" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s16" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al14" style="display: none;">
                            <input type="button" value="-" id="minus16" onclick="modifier(-1,'nb16','plus16','s16','minus16')">
                            <input type="button" size="8" value="0" id="nb16">
                            <input type="button" value="+" id="plus16" onclick="modifier(1,'nb16','plus16','s16','minus16')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td></tr>
              </table>
            </div>


            <div class="tab-content" id="robe">
              <h2>
                <span
                  class=""
                  id="onglet_robe"
                  >robe
                  </span>
              </h2>
              <table>
                <tr>
                  <td>
                    <img
                      src="img/femme/robe/photo-1485230895905-ec40ba36b9bc.jpg"
                      alt="femme robe"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1485230895905</td>
                  <td class="nom-article">robe tomato</td>
                  <td class="prix-article">37.50€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock15','al15')">Stock</button>
                    <div class="al0" id="stock15" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s17" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al15" style="display: none;">
                            <input type="button" value="-" id="minus17" onclick="modifier(-1,'nb17','plus17','s17','minus17')">
                            <input type="button" size="8" value="0" id="nb17">
                            <input type="button" value="+" id="plus17" onclick="modifier(1,'nb17','plus17','s17','minus17')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/robe/photo-1572804013427-4d7ca7268217.jpg"
                      alt="femme robe"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1572804013427</td>
                  <td class="nom-article">robe coechella</td>
                  <td class="prix-article">25.99€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock16','al16')">Stock</button>
                    <div class="al0" id="stock16" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s18" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al16" style="display: none;">
                            <input type="button" value="-" id="minus18" onclick="modifier(-1,'nb18','plus18','s18','minus18')">
                            <input type="button" size="8" value="0" id="nb18">
                            <input type="button" value="+" id="plus18" onclick="modifier(1,'nb18','plus18','s18','minus18')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/robe/photo-1605763240000-7e93b172d754.jpg"
                      alt="femme robe"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1550639525</td>
                  <td class="nom-article">robe soleil</td>
                  <td class="prix-article">35.56€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock33','al33')">Stock</button>
                    <div class="al0" id="stock33" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s19" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al33" style="display: none;">
                            <input type="button" value="-" id="minus19" onclick="modifier(-1,'nb19','plus19','s19','minus19')">
                            <input type="button" size="8" value="0" id="nb19">
                            <input type="button" value="+" id="plus19" onclick="modifier(1,'nb19','plus19','s19','minus19')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/femme/robe/photo-1572123748421-ac758c94c4db.jpg"
                      alt="femme robe"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1572123748421</td>
                  <td class="nom-article">robe doré</td>
                  <td class="prix-article">42.03€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock17','al17')">Stock</button>
                    <div class="al0" id="stock17" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s20" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al17" style="display: none;">
                            <input type="button" value="-" id="minus20" onclick="modifier(-1,'nb20','plus20','s20','minus20')">
                            <input type="button" size="8" value="0" id="nb20">
                            <input type="button" value="+" id="plus20" onclick="modifier(1,'nb20','plus20','s20','minus20')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>

    <?php include('footer.php'); ?>
  <script src="./js/script.js"></script>
</body>
</html>
