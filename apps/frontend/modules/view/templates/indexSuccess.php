<?php slot('title', 'ブログ記事一覧') ?>

    <div id="container">
  <div id="intro">
    <div id="pageHeader">
      <h1><span>30分でできるurablog</span></h1>
      <h2><span>たった30分でできるブログです</span></h2>
    </div>

  <div id="supportingText">
    <?php foreach ($urablog_field_list as $urablog_field): ?>
    <div id="participation">
      <h3><span><?php echo $urablog_field->gettitle() ?></span></h3>
      <p class="p1"><?php echo $urablog_field->getArticle() ?></p>
      <span><?php echo $urablog_field->getUpdatedAt() ?></span>
      <p><a href="<?php echo url_for('view/show?id='.$urablog_field['id']) ?>">記事の詳細を見る</a></p>
    </div>
    <?php endforeach; ?>

    <div id="footer">
      <a href="#">Copyright (c) XXXXXX AllRights Reserved.</a>
    </div>

  </div>

  <div id="linkList">
    <div id="linkList2">

      <div id="lselect">
        <h3 class="select"><span>月別アーカイブ</span></h3>
        <ul>
          <li><a href="/" title="AccessKey: a" accesskey="a">"2006年6月</a></li>
        </ul>
      </div>

      <div id="larchives">
        <h3 class="archives"><span>アーカイブ</span></h3>
        <ul>
          <?php foreach ($urablog_field_list as $urablog_field): ?>
          <li><a href="<?php echo url_for('view/show?id='.$urablog_field['id']) ?>"><?php echo $urablog_field->gettitle() ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div id="lresources">
        <h3 class="resources"><span>カテゴリ</span></h3>
        <ul>
          <li></ul>
      </div>

    </div>
  </div>

</div>


