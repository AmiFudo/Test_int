
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
                            <p class="speed">
                                <?=$value->speed?>
                                <?php
                                    if (!Yii::$app->user->isGuest) {
                                        ?>
                                        <span class="rate__list_element_speed_setting"></span>
                                        <?php
                                    }
                                ?>
                            </p>
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
