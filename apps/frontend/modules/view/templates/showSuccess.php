<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $urablog_field->getid() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $urablog_field->getcategory_id() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $urablog_field->getuser_id() ?></td>
    </tr>
    <tr>
      <th>Blog:</th>
      <td><?php echo $urablog_field->getblog_id() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $urablog_field->gettitle() ?></td>
    </tr>
    <tr>
      <th>Article:</th>
      <td><?php echo $urablog_field->getarticle() ?></td>
    </tr>
    <tr>
      <th>Is active:</th>
      <td><?php echo $urablog_field->getis_active() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $urablog_field->getexpires_at() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $urablog_field->getcreated_at() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $urablog_field->getupdated_at() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('view/edit?id='.$urablog_field['id']) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('view/index') ?>">List</a>
