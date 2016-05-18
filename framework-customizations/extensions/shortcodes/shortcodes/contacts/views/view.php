<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<!-- open .container -->
<div class="container">
    <!-- open .h3 -->
    <h3>Контакты</h3>
    <!-- close .h3 -->
    <!-- open .contacts-content__info -->
    <div class="contacts-content__info">
        <!-- open .contacts-content__info_item -->
        <div class="contacts-content__info_item">
            <strong>Телефон</strong>
            <p><?= fw_get_db_customizer_option( 'phone' ); ?></p>
            <p><?= fw_get_db_customizer_option( 'second_phone' ); ?></p>
        </div>
        <!-- close .contacts-content__info_item -->
        <!-- open .contacts-content__info_item -->
        <div class="contacts-content__info_item">
            <strong>E-mail:</strong>
            <p>
                <a href="mailto:<?= fw_get_db_customizer_option( 'email' ); ?>"><?= fw_get_db_customizer_option( 'email' ); ?></a>
            </p>
        </div>
        <!-- close .contacts-content__info_item -->
        <!-- open .contacts-content__info_item -->
        <div class="contacts-content__info_item">
            <strong>Адрес:</strong>
            <p><?= fw_get_db_customizer_option( 'address' ); ?></p>
        </div>
        <!-- close .contacts-content__info_item -->

        <!-- open .contacts-content__info_item -->
        <div class="contacts-content__info_item">
            <!-- open #map -->
            <div id="contacts_map" width="100%" height="250">
            </div>
            <!-- close #map -->
        </div>
        <!-- close .contacts-content__info_item -->
    </div>
    <!-- close .contacts-content__info -->
    <!-- open .contacts-content__form -->
    <div class="contacts-content__form">
        <form action="#">
            <label for="contacts-content__form_name">Ваше ФИО*</label>
            <input type="text" class="contacts-content__form_inp" name="contacts-content__form_name"
                   id="contacts-content__form_name"/>

            <label for="contacts-content__form_email">Email*</label>
            <input type="email" class="contacts-content__form_inp" name="contacts-content__form_email"
                   id="contacts-content__form_email"/>

            <!-- open .contacts-content__form_shortbox -->
            <div class="contacts-content__form_shortbox">
                <label for="contacts-content__form_site">Сайт*</label>
                <input type="text" class="contacts-content__form_inp" name="contacts-content__form_site"
                       id="contacts-content__form_site"/>
            </div>
            <!-- close .contacts-content__form_shortbox -->

            <!-- open .contacts-content__form_shortbox -->
            <div class="contacts-content__form_shortbox">
                <label for="contacts-content__form_phone">Телефон*</label>
                <input type="tel" class="contacts-content__form_inp" name="contacts-content__form_phone"
                       id="contacts-content__form_phone"/>
            </div>
            <!-- close .contacts-content__form_shortbox -->


            <label for="contacts-content__form_text">Комментарии</label>
            <textarea name="contacts-content__form_text" id="contacts-content__form_text"
                      class="contacts-content__form_text"></textarea>

            <button class="contacts-content__form_btn">Отправить</button>
        </form>
    </div>
    <!-- close .contacts-content__form -->
</div>
<!-- close .container -->