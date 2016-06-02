<?php include ROOT.'/views/layouts/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="form-main">
                <div class="outputErrors">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach($errors as $error): ?>
                                <li>-<?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <form  class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="userName" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" name="userEmail" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputFile" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-6">
                            <input type="file" name="userFile"  id="inputFile" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-sm-3 control-label">Message</label>
                        <div class="col-sm-6">
                            <input type="text" name="userMessage"  id="inputText"  class="form-control" placeholder="Text input" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <input type="submit" name="submit" class="btn btn-primary" value="Отправить">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include ROOT.'/views/layouts/footer.php'; ?>