<?php $title = 'Upload File' ?><?php ob_start() ?>    <div class="row justify-content-center">        <div class="col-md-10 col-sm-10 col-xs-12">            <div class="text-center my-4">                <h3>Upload File</h3>            </div>            <div class="row justify-content-center my-3">                <div class="col-md-6 col-xs-12">                    <form method="POST" action="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/file/upload' ?>"                          enctype="multipart/form-data">                        <div class="form-group my-5">                            <p>Upload your file with books catalog this.</p>                            <?php if (!empty($errors)): ?>                                <ul>                                    <?php foreach ($errors as $item): ?>                                        <li><b class="text-danger"><?= $item ?></b></li>                                    <?php endforeach; ?>                                </ul>                            <?php endif; ?>                            <div>                                <input type="file" name="file" accept=".txt" multiple>                                <input type="submit" class="btn btn-outline-dark" value="Upload File">                            </div>                        </div>                    </form>                </div>            </div>        </div>    </div><?php $content = ob_get_clean() ?><?php include 'view/index.php' ?>