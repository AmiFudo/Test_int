
<?php 

$this->title = 'Тарифы';

?>

<!-- Блок тарифы -->
<div class="rate">
    <h1>Тарифы</h1>
    <div class="rate__list">
        <?php

        foreach($rate as $value){
            ?>
            <div class="rate__list_element">
                <div class="rate__list_element_name">
                    <p class="title"><?=$value->name?></p>
                </div>
                <div class="rate__list_element_speed">
                    <p>Скорость Интернета:</p>
                    <div class="rate__list_element_speed_squar">
                        <div class="rate__list_element_speed_squar_info">
                            <p>до</p>
                            <p class="speed <?=$value->id?>">
                                <span class="value"><?=$value->speed?></span>
                                <?php
                                    if (!Yii::$app->user->isGuest) {
                                        ?>
                                        <span class="rate__list_element_speed_setting" data-id="<?=$value->id?>"></span>
                                        <?php
                                    }
                                ?>
                            </p>
                            <div class="rate__list_element_speed_setting_block <?=$value->id?>">
                                <input type="text" value="<?=$value->speed?>">
                                <span class="rate__list_element_speed_setting save" data-id="<?=$value->id?>"></span>
                            </div>
                            <p>Мбит/с</p>
                        </div>
                    </div>
                </div>
                <div class="rate__list_element_description">
                    <p><?=$value->description?></p>
                </div>
                <div class="rate__list_element_price">
                    <p>Стоимость:</p>
                    <p><?=$value->price?><span>/мес</span></p>
                </div>
                <div class="rate__list_element_button">
                    <button>Выбрать тариф</button>
                </div>
            </div>
            <?php
        }

        ?>
    </div>
</div>
<!-- Блок тарифы -->
