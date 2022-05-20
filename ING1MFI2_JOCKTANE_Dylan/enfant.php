<!DOCTYPE html>
<html>
      <?php include('header.php'); ?>

      <section id="articles">
        <div class="image-accueil"></div>
        <h1 id="titre">Habillez vos enfants</h1>
        <div>
          <ul class="tabs">
            <li class="active"><a href="#haut">Haut</a></li>
            <li><a href="#pantalon">Pantalon</a></li>
            <li><a href="#robe">Robe</a></li>
          </ul>
          <div class="tabs-content">
            <div class="tab-content active" id="haut">
              <h2>
                <span class="" onclick="javascript:change_onglet('haut');"
                  >T-shirt, chemise</span
                >
              </h2>
              <table>
                <tr>
                  <td>
                    <img
                      src="img/enfant/haut/photo-1471286174890-9c112ffca5b4.jpg"
                      alt="enfant haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1471286174890</td>
                  <td class="nom-article">Polo rouge</td>
                  <td class="prix-article">4.50€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock','al')">Stock</button>
                    <div class="al0" id="stock" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al" style="display: none;">
                            <input type="button" value="-" id="minus" onclick="modifier(-1,'nb','plus','s','minus')">
                            <input type="button" size="8" value="0" id="nb">
                            <input type="button" value="+" id="plus" onclick="modifier(1,'nb','plus','s','minus')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/enfant/haut/photo-1519238263530-99bdd11df2ea.jpg"
                      alt="enfant haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1519238263530</td>
                  <td class="nom-article">Pull avec col en V</td>
                  <td class="prix-article">8€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock1','al1')">Stock</button>
                    <div class="al0" id="stock1" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s1" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al1" style="display: none;">
                            <input type="button" value="-" id="minus1" onclick="modifier(-1,'nb1','plus1','s1','minus1')">
                            <input type="button" size="8" value="0" id="nb1">
                            <input type="button" value="+" id="plus1" onclick="modifier(1,'nb1','plus1','s1','minus1')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/enfant/haut/photo-1519457431-44ccd64a579b.jpg"
                      alt="enfant haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1519457431</td>
                  <td class="nom-article">Chemise jeans</td>
                  <td class="prix-article">10€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock2','al2')">Stock</button>
                    <div class="al0" id="stock2" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s2" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al2" style="display: none;">
                            <input type="button" value="-" id="minus2" onclick="modifier(-1,'nb2','plus2','s2','minus2')">
                            <input type="button" size="8" value="0" id="nb2">
                            <input type="button" value="+" id="plus2" onclick="modifier(1,'nb2','plus2','s2','minus2')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
              </table>
            </div>

            <div class="tab-content" id="pantalon">
              <h2>
                <span class="" id="onglet_pantalon">Pantalon, culotte </span>
              </h2>
              <table>
                <tr>
                  <td>
                    <img
                      src="img/enfant/bas/photo-1617627057301-7b03d1097672 - Copie.jpg"
                      alt="enfant pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1617627057301</td>
                  <td class="nom-article">mini pantalon cargo</td>
                  <td class="prix-article">12.50€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock3','al3')">Stock</button>
                    <div class="al0" id="stock3" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s3" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al3" style="display: none;">
                            <input type="button" value="-" id="minus3" onclick="modifier(-1,'nb3','plus3','s3','minus3')">
                            <input type="button" size="8" value="0" id="nb3">
                            <input type="button" value="+" id="plus3" onclick="modifier(1,'nb3','plus3','s3','minus3')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/enfant/bas/photo-1603792273674-543a44863980.jpg"
                      alt="enfant pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1603792273674</td>
                  <td class="nom-article">Avidagrasto jeans Enfant</td>
                  <td class="prix-article">20€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock4','al4')">Stock</button>
                    <div class="al0" id="stock4" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s4" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al4" style="display: none;">
                            <input type="button" value="-" id="minus4" onclick="modifier(-1,'nb4','plus4','s4','minus4')">
                            <input type="button" size="8" value="0" id="nb4">
                            <input type="button" value="+" id="plus4" onclick="modifier(1,'nb4','plus4','s4','minus4')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/enfant/bas/photo-1645458460851-2f786c81acf7.jpg"
                      alt="enfant pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1645458460851</td>
                  <td class="nom-article">Mini jeans bleu</td>
                  <td class="prix-article">13.56€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock5','al5')">Stock</button>
                    <div class="al0" id="stock5" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s5" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al5" style="display: none;">
                            <input type="button" value="-" id="minus5" onclick="modifier(-1,'nb5','plus5','s5','minus5')">
                            <input type="button" size="8" value="0" id="nb5">
                            <input type="button" value="+" id="plus5" onclick="modifier(1,'nb5','plus5','s5','minus5')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
              </table>
            </div>

            <div class="tab-content" id="robe">
              <h2>
                <span class="" id="onglet_robe">robe </span>
              </h2>
              <table>
                <tr>
                  <td>
                    <img
                      src="img/enfant/robe/photo-1513791149369-f88da26c8e93 (1).jpg"
                      alt="enfant robe"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1513791149369</td>
                  <td class="nom-article">robe Thaï</td>
                  <td class="prix-article">16.50€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock6','al6')">Stock</button>
                    <div class="al0" id="stock6" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s6" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al6" style="display: none;">
                            <input type="button" value="-" id="minus6" onclick="modifier(-1,'nb6','plus6','s6','minus6')">
                            <input type="button" size="8" value="0" id="nb6">
                            <input type="button" value="+" id="plus6" onclick="modifier(1,'nb6','plus6','s6','minus6')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/enfant/robe/photo-1518831959646-742c3a14ebf7.jpg"
                      alt="enfant robe"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1518831959646</td>
                  <td class="nom-article">robe blanche à points</td>
                  <td class="prix-article">15€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock7','al7')">Stock</button>
                    <div class="al0" id="stock7" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s7" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al7" style="display: none;">
                            <input type="button" value="-" id="minus7" onclick="modifier(-1,'nb7','plus7','s7','minus7')">
                            <input type="button" size="8" value="0" id="nb7">
                            <input type="button" value="+" id="plus7" onclick="modifier(1,'nb7','plus7','s7','minus7')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/enfant/robe/photo-1524698144045-29ad01c53109.jpg"
                      alt="enfant robe"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1524698144045</td>
                  <td class="nom-article">robe à fleurs</td>
                  <td class="prix-article">15.56€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock8','al8')">Stock</button>
                    <div class="al0" id="stock8" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s8" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al8" style="display: none;">
                            <input type="button" value="-" id="minus8" onclick="modifier(-1,'nb8','plus8','s8','minus8')">
                            <input type="button" size="8" value="0" id="nb8">
                            <input type="button" value="+" id="plus8" onclick="modifier(1,'nb8','plus8','s8','minus8')">
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
