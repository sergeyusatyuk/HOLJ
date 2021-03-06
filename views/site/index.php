<?php
use app\models\Pet;
use app\models\Breed;
use app\models\Slide;

/**
 * @var $this yii\web\View
 * @var Pet[] $pets
 * @var Breed[] $breeds
 * @var Slide[] $imagesArray1
 * @var Slide[] $imagesArray2
 */

$this->title = Yii::$app->name;
?>
<div class="landing-page">
    <div class="wrapper">
        <div class="header header-filter">
            <img src="/images/homepage-background.jpg" alt="">
        </div>
        </div>

        <div class="main main-raised">
            <div class="container main-padding-top">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="text-center">
                            <p class="main-text"><?= Yii::t('app', "Pleased to welcome you to the website of our kennel.
You've come to the fabulous world of miniature dogs, where you can pick up a puppy for every taste. And it will not
just a dog, and a loving, gentle, kind, loyal, though sometimes with a character, a friend for life. And does not matter
what kind of mood you, he is always looking forward and happy to meet the owner. And these devotees eyes
help forget the sorrow and bring joy to your home.
For our clients, I guarantee that all of our puppies are brought up hath on high-quality feed, love and care. And as I
offered the doctors advise on feeding, breeding and training a puppy.
For my part I want to make sure that I give a pet in good hands. And so it does not matter, you are buying a puppy
for shows or \"pillow\" - love and take care of them as well as their parents.
Dear customers and future owners of the puppies - good luck to you and the health of your pets!") ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-12 nav-align-center">
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <?php foreach ($breeds as $key => $breed) { ?>
                                    <li <?= $key==0?'class="active"':''?>>
                                        <a href="#pill<?= $key?>" role="tab" data-toggle="tab">
                                            <?= $breed->name ?>
                                        </a>
                                    </li>
                                <?php
                                } ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($breeds as $key => $breed) : ?>
                                <div role="tabpanel" class="tab-pane fade <?= $key==0?'active in':''?>" id="pill<?= $key ?>">
                                    <div class="col-md-12">
                                        <h3><?= $breed->brood->name ?></h3>
                                    </div>
                                    <?php foreach ($breed->brood->puppies as $pet ) {
                                        echo $this->render('/layouts/pet', ['pet' => $pet]);
                                    } ?>
                                    <div class="col-md-12">
                                        <a  class="btn btn-primary btn-round btn-group-raised" href="<?= Yii::$app->urlManager->createUrl(['site/puppies-breed', 'id'=>$breed->id])?>"><?= Yii::t('app', 'view all')?></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <?php foreach ($imagesArray1 as $image) { ?>
                                    <img class="gallery-image img-rounded" src="<?= $image->source_url?>" alt="<?= $image->alt?>">
                                <?php } ?>
                            </div>
                            <div class="col-sm-6">
                                <?php foreach ($imagesArray2 as $image) { ?>
                                    <img class="gallery-image img-rounded" src="<?= $image->source_url?>" alt="<?= $image->alt?>">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="contact-container">
                    <div class="row">
                        <div class="text-center">
                            <div class="name">
                                <h3 class="title main-padding-top"><?= Yii::t('app', 'Lesya Usatyuk')?></h3>
                                <h6><?= Yii::t('app', 'Owner & Breeder')?></h6>
                                <h6><?= Yii::t('app', "Nursery «Home of little joys»")?></h6>
                            </div>
                        </div>
                        <div class="col-md-6 nav-align-center">
                            <h3 class="text-primary"><i class="fa fa-map-marker"></i> <?= Yii::t('app', 'Our location')?></h3>
                            <p>
                                <?= Yii::t('app', 'Vinnytsia')?>,<br>
                                <?= Yii::t('app', 'Ukraine')?>
                            </p>
                        </div>
                        <div class="col-md-6 nav-align-center">
                            <h3 class="text-primary"><i class="fa fa-phone"></i> <?= Yii::t('app', 'How to contact') ?></h3>
                            <p>
                                <?= Yii::t('app', 'Lesya Usatyuk')?><br>
                                <a href="tel:+380636659660">+380 63 665 96 60</a><br>
                                <a href="tel:+380677005275">+380 67 700 52 75</a><br>
                                <?= Yii::t('app', 'Mon - Fri')?>, 10:00-20:00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>