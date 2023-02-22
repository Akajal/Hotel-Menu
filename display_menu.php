<?php
require_once 'db.php';
?> 
<table>
<thead>
    <tr>
      <th>Item</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM orders";
    $result = mysqli_query($conn, $query);
      while ($menu = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $menu['item']; ?></td>
      <td><?php echo $menu['type']; ?></td>
      <td><?php echo $menu['price']; ?></td>
      <td>
        <form method="put" action="update.php">
          <input type="hidden" name="id" value="<?php echo $menu['id']; ?>">
          <input type="text" name="item" value="<?php echo $menu['item']; ?>">
          <input type="text" name="price" value="<?php echo $menu['type']; ?>">
          <input type="text" name="price" value="<?php echo $menu['price']; ?>">
          <button type="submit">Update</button>
        </form>
      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>


                    <!-- Content Row -->
                    <div class="row">
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Type</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>