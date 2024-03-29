<?php require(dirname(__DIR__).'/header.html')?>
<form action="/frame/Project/www/article/update/<?=$article->getId();?>" method="post">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?=$article->getTitle();?>">
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <input type="text" class="form-control" id="text" name="text" value="<?=$article->getText();?>">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <select class="form-control" name="author" id="author">
      <option value="<?=$article->getAuthorId()->getId();?>"><?=$article->getAuthorId()->getName();?></option>
    <?php foreach($users as $user):?>
        <option value="<?=$user->getId();?>"><?=$user->getName();?></option>
      <?php endforeach;?>
    </select>
</div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require(dirname(__DIR__).'/footer.html')?>