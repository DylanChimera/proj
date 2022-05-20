<!DOCTYPE html>
<html>
      <?php include('header.php'); ?>

      <section id="articles">
        <div class="image-accueil"></div>
        <h1 id="titre">Montrez vous sous votre meilleur jour</h1>
        <div>
          <!-- <div class="tabs">
            <span class="active "><a  href="">Haut</a></span>
            <span><a href="">Pantalon</a></span>
          </div> -->

          <ul class="tabs">
            <li class='active' > <a  href="">Haut</a> </li>
            <li ><a  href="#pantalon">Pantalon</a></li>
          </ul>
          <div class="tabs-content">
            <div class="tab-content active" id="haut">
              <h2>
                <span
                  class=""
                  onclick="javascript:change_onglet('haut');"
                  >T-shirt, chemise et sweatshirt</span
                >
              </h2>
              <table>
                <tr>
                  <td>
                    <img
                      src="img/homme/haut/photo-1503341455253-b2e723bb3dbb.jpg"
                      alt="homme haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1503341455253</td>
                  <td class="nom-article">T-shirt Avidagrasto fit</td>
                  <td class="prix-article">18€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock18','al18')">Stock</button>
                    <div class="al0" id="stock18" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s21" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al18" style="display: none;">
                            <input type="button" value="-" id="minus21" onclick="modifier(-1,'nb21','plus21','s21','minus21')">
                            <input type="button" size="8" value="0" id="nb21">
                            <input type="button" value="+" id="plus21" onclick="modifier(1,'nb21','plus21','s21','minus21')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/homme/haut/photo-1607345366928-199ea26cfe3e.jpg"
                      alt="homme haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1607345366928</td>
                  <td class="nom-article">Chemise carreau</td>
                  <td class="prix-article">20€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock19','al19')">Stock</button>
                    <div class="al0" id="stock19" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s22" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al19" style="display: none;">
                            <input type="button" value="-" id="minus22" onclick="modifier(-1,'nb22','plus22','s22','minus22')">
                            <input type="button" size="8" value="0" id="nb22">
                            <input type="button" value="+" id="plus22" onclick="modifier(1,'nb22','plus22','s22','minus22')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/homme/haut/photo-1521572163474-6864f9cf17ab.jpg"
                      alt="homme haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1521572163474</td>
                  <td class="nom-article">T-shirt blanc</td>
                  <td class="prix-article">10€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock20','al20')">Stock</button>
                    <div class="al0" id="stock20" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s23" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al20" style="display: none;">
                            <input type="button" value="-" id="minus23" onclick="modifier(-1,'nb23','plus23','s23','minus23')">
                            <input type="button" size="8" value="0" id="nb23">
                            <input type="button" value="+" id="plus23" onclick="modifier(1,'nb23','plus23','s23','minus23')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/homme/haut/photo-1628737490381-117c818d1ad7.jpg"
                      alt="homme haut"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1628737490381</td>
                  <td class="nom-article">T-shirt noir Moralone</td>
                  <td class="prix-article">15€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock21','al21')">Stock</button>
                    <div class="al0" id="stock21" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s24" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al21" style="display: none;">
                            <input type="button" value="-" id="minus24" onclick="modifier(-1,'nb24','plus24','s24','minus24')">
                            <input type="button" size="8" value="0" id="nb24">
                            <input type="button" value="+" id="plus24" onclick="modifier(1,'nb24','plus24','s24','minus24')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
              </table>
            </div>

            <div class="tab-content " id="pantalon">
              <h2>
                <span
                  class=""
                  id="onglet_pantalon"
                  >Pantalon et culotte
                  </span>
              </h2>
              <table>
                <tr>
                  <td>
                    <img
                      src="img/homme/pantalon/photo-1493357335960-4583bfa6f8d9.jpg"
                      alt="homme pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1493357335960</td>
                  <td class="nom-article">Pantalon</td>
                  <td class="prix-article">17.50€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock22','al22')">Stock</button>
                    <div class="al0" id="stock22" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s25" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al22" style="display: none;">
                            <input type="button" value="-" id="minus25" onclick="modifier(-1,'nb25','plus25','s25','minus25')">
                            <input type="button" size="8" value="0" id="nb25">
                            <input type="button" value="+" id="plus25" onclick="modifier(1,'nb25','plus25','s25','minus25')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/homme/pantalon/photo-1517509458118-6525ca3fecc4.jpg"
                      alt="homme pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1517509458118</td>
                  <td class="nom-article">Avidagrasto jeans</td>
                  <td class="prix-article">25€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock23','al23')">Stock</button>
                    <div class="al0" id="stock23" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s26" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al23" style="display: none;">
                            <input type="button" value="-" id="minus26" onclick="modifier(-1,'nb26','plus26','s26','minus26')">
                            <input type="button" size="8" value="0" id="nb26">
                            <input type="button" value="+" id="plus26" onclick="modifier(1,'nb26','plus26','s26','minus26')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/homme/pantalon/photo-1592009061830-d95ba50fe213.jpg"
                      alt="homme pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1521572163474</td>
                  <td class="nom-article">Jeans bleu</td>
                  <td class="prix-article">15.56€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock24','al24')">Stock</button>
                    <div class="al0" id="stock24" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s27" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al24" style="display: none;">
                            <input type="button" value="-" id="minus27" onclick="modifier(-1,'nb27','plus27','s27','minus27')">
                            <input type="button" size="8" value="0" id="nb27">
                            <input type="button" value="+" id="plus27" onclick="modifier(1,'nb27','plus27','s27','minus27')">
                            <input type="button" value="Ajoutez au panier" id="ajouter">
                        </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/homme/pantalon/photo-1586441310277-ed1a8fae585d.jpg"
                      alt="homme pantalon"
                      class="image-article"
                    />
                  </td>
                  <td class="ref">ref. 1586441310277</td>
                  <td class="nom-article">Jeans valhalla noir</td>
                  <td class="prix-article">32.03€</td>
                  <td class="stockx">
                    <button onclick="maFonction('stock25','al25')">Stock</button>
                    <div class="al0" id="stock25" style="display:none;" >
                        <a class="al" style="color: rgb(0, 0, 0);">Stock : </a>
                        <a class="al" style="color: rgb(0, 0, 0);">6</a>
                    </div>
                    <input type="text" id="s28" size="4" value="6" readonly="true" class="dn" style="display:none;">
                  </td>
                  <td class="commande">
                        <div class="al" id="al25" style="display: none;">
                            <input type="button" value="-" id="minus28" onclick="modifier(-1,'nb28','plus28','s28','minus28')">
                            <input type="button" size="8" value="0" id="nb28">
                            <input type="button" value="+" id="plus28" onclick="modifier(1,'nb28','plus28','s28','minus28')">
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
