<h2>Shiper List</h2>
<a href="./shiper.php?page=addShiper" class="btn btn-success">Add</a>
<input style=" width:1000px;float:right;" class="form-control mb-4" id="tableSearch" type="text"
    placeholder="Search..">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th>STT</th>
      <th>Name</th>
      <th>Birthday</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Timework</th>
      <th colspan="2">Action</th>
  </tr>
  </thead>
  <tbody id="myTable">
    <?php foreach ($shipers as $key => $shiper): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $shiper->name ?></td>
            <td><?php echo $shiper->birthday ?></td>
            <td><?php echo $shiper->phone ?>
            <td><?php echo $shiper->email ?></td>
            <td><?php echo $shiper->timework ?></td>
            <td> <a href="./shiper.php?page=editShiper&id=<?php echo $shiper->id_shiper; ?>" title="Edit"><i class='fa fa-edit' style='font-size:25px; color:bluesky; margin:5px;'></i></a></td>
            <td> <a href="./shiper.php?page=deleteShiper&id=<?php echo $shiper->id_shiper; ?>" title="Delete"><i class='fa fa-trash' style='font-size:25px; color:red; margin:5px;'></i></a></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
