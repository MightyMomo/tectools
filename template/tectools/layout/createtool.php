<?php

declare(strict_types=1);

/**
 * @var Template $this
 */

/**
 * @var TecTools $TecTools
 */
$TecTools = $GLOBALS['TecTools'];

$categories = $TecTools->getAllCategories();

?>

<!-- Main Quill library TODO: skal loades lokalt -->
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<div class="section no-pad-bot">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Opret værktøj</h1>

        <div class="row center">
            <div class="col s12 m6 l6 xl6 offset-m3 offset-l3 offset-xl3">
                <?php
                if (isset($_SESSION['tool_image_upload_error'])) {
                    $this->RCMS->Functions->outputError($_SESSION['tool_image_upload_error'], 'h5', true);
                    unset($_SESSION['tool_image_upload_error']);
                }
                ?>
                <form class="tectool-form" enctype="multipart/form-data" id="add_tool_form" action="" method="POST">

                    <label>Navn</label>
                    <input id="tool_name" required name="tool_name" type="text" placeholder="Navn på værktøj">

                    <label for="des-editor">Beskrivelse</label>
                    <div id="des-editor">

                    </div>

                    <textarea style="display: none" name="description" id="description" cols="30" rows="10">

                    </textarea>

                    <br>

                    <label>Status</label>
                    <select required class="browser-default" name="status">
                        <option value="" disabled selected>Vælg status</option>
                        <?php foreach ($TecTools->getAllStatuses() as $status): ?>
                            <option value="<?= $status['StatusID'] ?>"><?= $status['StatusName'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label>Producent</label>
                    <select id="manufacturer_id" required class="browser-default" name="manufacturer_id">
                        <option value="" disabled selected>Vælg producent</option>
                        <?php foreach ($TecTools->getAllManufacturers() as $manufacturer): ?>
                            <option value="<?= $manufacturer['ManufacturerID'] ?>"><?= $manufacturer['ManufacturerName'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label>Kategorier</label>
                    <select style="min-height: 100px;" multiple required class="browser-default" name="categories[]">
                        <option value="" disabled selected>Vælg kategorier</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['CategoryID'] ?>"><?= $category['CategoryName'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Billede</span>
                            <input onchange="updateImagePreview(this, 'tool-image');" required name="image" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>

                    <img id="tool-image" style="max-height: 200px;" src="" alt="">

                    <input type="hidden" name="add_tool" value="1" />

                    <br><br>
                    <button id="add_tool_btn" class="btn" type="submit">Opret værktøj</button>
                    <button class="btn" type="button" onclick="history.back()">Tilbage</button>

                </form>
            </div>
        </div>
        <br><br>
    </div>
</div>


<script src="<?= $this->RCMS->getTemplateFolder() ?>/js/tools/edit-create-tool.js"></script>
