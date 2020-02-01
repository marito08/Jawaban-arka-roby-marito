 <?php
 include('connect.php');
 ?>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="update.php" method="POST">
              <?php
                $id = $_GET['id_product'];
                $sql = $pdo->prepare("SELECT * FROM tbl_product WHERE id = $id");
                $sql->execute();
              ?>
              <?php while($data = $sql->fetch() ) : 
                $id = $data['id'];
                $product = $data['name'];
                $price = $data['price'];
                $id_category = $data['id_category'];
                $id_kasir = $data['id_cashier'];
              ?>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id" placeholder="product" value="<?=$id ?>">
                    <?php 
                      $cashier = $pdo->prepare("SELECT * FROM tbl_cashier");
                      $cashier->execute();
                    ?>
                    <label for="cashier">Cashier</label>
                    <select class="form-control" id="cashier" name="cashier">
                      <?php while($row = $cashier->fetch() ) :
                        $id = $row['id'];
                      ?>
                        <?php
                        if($id_kasir == $id){
                          echo "<option value='".$row['id']."' selected>".$row['name']."</option>";
                        }else{
                         echo "<option value='".$row['id']."'>".$row['name']."</option>";
                        }
                        ?>
                      <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <?php 
                      $category = $pdo->prepare("SELECT * FROM tbl_category");
                      $category->execute();
                    ?>
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category">
                      <?php while($row = $category->fetch() ) :?>
                       <?php
                        if($id_category == $row['id']){
                          echo "<option value=".$row['id']." selected>".$row['name']."</option>";
                        }else{
                         echo "<option value='".$row['id']."'>".$row['name']."</option>";
                        }
                        ?>
                      <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="product">Product</label>
                    <input type="text" class="form-control" name="product" id="product" placeholder="product" value="<?=$product ?>">
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="price" value="<?= $price?>">
                  </div>
              <?php endwhile;?>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  