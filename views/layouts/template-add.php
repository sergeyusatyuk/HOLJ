<?php
/**
 * @var string $index
 */


?>

<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="upload-image-block" data-index="<?= $index ?>">
            <div class="image-wrap">
                <label for="petimage-source_url-<?= $index ?>">
                    <img src="/images/no_image.jpg" alt="">
                </label>
            </div>
        <span class="image-trash glyphicon glyphicon-remove-circle"></span>
        <input type="hidden" name="PetImage[source_url]" value="">
        <input type="file" id="petimage-source_url-<?= $index ?>" name="PetImage[source_url][]" style="display:none">
        <input type="hidden" id="petimage-removeimage" name="PetImage[removeImage]" value="0">
    </div>
</div>
<script>
    $("input[type=file]").change(function () {
        if (this.files && this.files[0]) {
            var $this = $(this);
            var reader = new FileReader();
            reader.onload = function (e) {
                $('label[for=' + $this.attr('id') + '] img').attr('src', e.target.result);
            };

            reader.readAsDataURL(this.files[0]);

            $('[class*=img-preview]').attr('src', $('img.img-upload:first-child').attr('src'))
        }
    });
</script>