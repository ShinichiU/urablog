<h1>Edit List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>User</th>
      <th>Title</th>
      <th>Article</th>
      <th>Is active</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($urablog_field_list as $urablog_field): ?>
    <tr>
      <td><a href="<?php echo url_for('edit/show?id='.$urablog_field['id']) ?>"><?php echo $urablog_field->getid() ?></a></td>
      <td><?php echo $urablog_field->getcategory_id() ?></td>
      <td><?php echo $urablog_field->getuser_id() ?></td>
      <td><?php echo $urablog_field->gettitle() ?></td>
      <td><?php echo $urablog_field->getarticle() ?></td>
      <td><?php echo $urablog_field->getis_active() ?></td>
      <td><?php echo $urablog_field->getexpires_at() ?></td>
      <td><?php echo $urablog_field->getcreated_at() ?></td>
      <td><?php echo $urablog_field->getupdated_at() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('edit/new') ?>">New</a>
