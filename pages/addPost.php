<?php
ob_start();
?>
<div class="row">
    <?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])):?>
        <div class="alert alert-success" role="alert">
        <?=$_SESSION['message']?>
        </div>
    <?php endif?>
    <div class="col-md-8" style="margin: auto;">
        <form action="" method="post">
        <input type="text" name="url" hidden value="postPost">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required>
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="content" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php $content = ob_get_clean();

require_once 'pages/layout.php';