<div id="pagination">
  <?php  include_once("template/header.php"); ?>
  <section class="white">
    
    <aside class="grey lighten-5">
      <p>Price Content : </p>
      <!--<form>-->
        <div class="input-field">
            <select class="multiple">
              <option value="" disabled selected >Choose option</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <label>Brand Power</label>
        </div>
        <table>
          
          <tr class="switch">
          <!--<div class="switch">-->
            <td><label>Price Range</label></td>
            <td><label>OFF<input id="priceLever" type="checkbox"><span class="lever black"></span>ON</label></td>
          <!--</div>-->
            <div class="priceBar">
              <h5>Price</h5>
              <div class="range-field">
                <input type="range" id="price" min="0" max="2000">
              </div>
              <!--  <label for="laptop">Laptop</label>-->
              <!--<br/>-->
              <!--  <input type="checkbox" id="amd">-->
              <!--  <label for="printer">Printer</label>-->
              <br/>
            </div>
          </tr>
          
          
          <tr class="switch">
          <!--<div class="switch">-->
            <td><label>Manufacturer</label></td>
            <td><label>OFF<input id="manufacturer" type="checkbox"><span class="lever black"></span>ON</label></td>
          <!--</div>-->
            <div class="manufacturerBar">
              <h5>Manufacturer</h5>
                <input type="checkbox" id="intel">
                <label for="intel">Intel</label>
              <br/>
                <input type="checkbox" id="amd">
                <label for="amd">AMD</label>
              <br/>
            </div>
          </tr>
          <tr class="switch">
          <!--<div class="switch">-->
            <td><label>Category</label></td>
            <td><label>OFF<input id="category" type="checkbox"><span class="lever black"></span>ON</label></td>
          <!--</div>-->
            <div class="categoryBar">
              <h5>Category</h5>
                <input type="checkbox" id="intel">
                <label for="laptop">Laptop</label>
              <br/>
                <input type="checkbox" id="amd">
                <label for="printer">Printer</label>
              <br/>
            </div>
          </tr>
        </table>
        
      <!--</form>-->
      
    </aside>
    
    <article></article>
    
  </section>
  <?php include_once("template/footer.php"); ?>
</div>