<footer>
    <div class="footer_container">
        <div class="copyrights">2017 - 2023. Arassa Nusga -
            <a href="">Веб студия в Ашхабаде.</a>
        </div>
        <div class="expand-text mobile-none" id="openModalButton">
            Оставьте заявку
        </div>
        <div id="modal" class="modal">
            <div class="modal-content align-items-start mobile-none">
                <div class="col-7 content-container  my-5">
                    <div class="form-container d-flex flex-column align-items-start"
                        style="max-width:115rem; flex-wrap:wrap">
                        <div class="col d-flex flex-column">
                            <div class="modal-title d-flex flex-column align-items-start ml-3"
                                style="margin-bottom:7.7rem; margin-top:50px">
                                <div class ="start">СТАРТУЕМ?</div>
                                <p style="font-size:18px">С нами проекты проходят легко и не принужденно, давайте
                                    знакомиться!</p>
                            </div>
                            {{-- <form action="{{ route('send.email',['lang' => $lang]) }}" method="post">
                                @csrf
                            <div class="row d-flex">
                                <label class="field">
                                    <input type="text" name="name" class="field-input" placeholder="Ваше Имя">
                                </label>
                                <label class="field">
                                    <input type="text" name="name" class="field-input"
                                        placeholder="“Ваш” номер телефона">
                                </label>
                            </div>
                            <div class="row d-flex">
                                <label class="field">
                                    <input type="text" name="name" class="field-input"
                                        placeholder="Что за проект?">
                                </label>
                                <label class="field">
                                    <input type="text" name="name" class="field-input" placeholder="'Ваш' e-mail">
                                </label>
                            </div>
                            <input type="text" name="name" class="field-input field-textarea mt-5"
                                placeholder="Ваш комментарий или описание">
                                <button type="sumbit" class="btn send-p d-flex align-items-center text-white" style="">Отправить</button>
                        </form> --}}
                        </div>


                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6 d-flex flex-column  ">
                        <div class="contacts_request">
                            <button id="closeModalButton" class="close-modal"><i class="fa-solid fa-xmark"
                                    style="font-size:18px"></i></button>
                            <div class="dzin">
                                <div class="dzin_title">
                                    <img src="{{ '../assets/images/dzin__title.png' }}">
                                </div>
                                <div class="dzin_icon">
                                    <img src="{{ '../assets/images/phoneLightBlue.png' }}">
                                </div>
                                <div class="dzin_phone">+993 12 754480</div>
                                <div class="dzin_phone">+993 61 648605</div>
                            </div>
                            <div class="mail">
                                <div class="mail_icon"> <img src="{{ '../assets/images/doveLightBlue.png' }}"></div>
                                <div class="mail_title w-line">{!! nl2br(__('translate.pigeon')) !!}</div>
                                <div class="mail_title">info@arassanusga.com</div>
                            </div>
                            <p class="col-5 col-md-9" style="font-size:42px; font-weight:700; font-family:'Bebas Neue'">
                                ЗАБАВНО,
                                ЧТО МЫ ЕЩЁ НЕ ЗНАКОМЫ</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-content-mobile desktop-none d-flex flex-column">
                <div class="form-container ">
                    <div class="d-flex flex-column">
                        <div class="modal-title d-flex flex-column align-items-start ml-3"
                            style="margin-bottom:7.7rem; margin-top:50px">
                            <div class ="start">СТАРТУЕМ?</div>
                            <p style="font-size:18px">С нами проекты проходят легко и не принужденно, давайте
                                знакомиться!</p>
                        </div>
                        <div class="row d-flex">
                            <label class="field">
                                <input type="text" name="name" class="field-input" placeholder="Ваше Имя">
                            </label>
                            <label class="field">
                                <input type="text" name="name" class="field-input"
                                    placeholder="“Ваш” номер телефона">
                            </label>
                        </div>
                        <div class="row d-flex">
                            <label class="field">
                                <input type="text" name="name" class="field-input" placeholder="Что за проект?">
                            </label>
                            <label class="field">
                                <input type="text" name="name" class="field-input" placeholder="'Ваш' e-mail">
                            </label>
                        </div>
                        <input type="text" name="name" class="field-input field-textarea mt-5"
                            placeholder="Ваш комментарий или описание">
                    </div>

                    <p class="send-p d-flex align-items-center" style="margin-top:80px">Отправить</p>

                </div>
                <div class="contacts_request">
                    <button id="closeModalButton" class="close-modal"><i class="fa-solid fa-xmark"
                            style="font-size:18px"></i></button>
                    <div class="dzin">
                        <div class="dzin_title">
                            <img src="{{ '../assets/images/dzin__title.png' }}">
                        </div>
                        <div class="dzin_icon">
                            <img src="{{ '../assets/images/phoneLightBlue.png' }}">
                        </div>
                        <div class="dzin_phone">+993 12 754480</div>
                        <div class="dzin_phone">+993 61 648605</div>
                    </div>
                    <div class="mail">
                        <div class="mail_icon"> <img src="{{ '../assets/images/doveLightBlue.png' }}"></div>
                        <div class="mail_title w-line">{!! nl2br(__('translate.pigeon')) !!}</div>
                        <div class="mail_title">info@arassanusga.com</div>
                    </div>
                    <p class="col-5 col-lg-5 col-md-9" style="font-size:42px; font-weight:700; font-family:'Bebas Neue'">
                        ЗАБАВНО,
                        ЧТО МЫ ЕЩЁ НЕ ЗНАКОМЫ</p>
                </div>
            </div>
        </div>
        <ul>
            <li>Блог</li>
            <li>Fb</li>
            <li>Inst</li>
            <li>Dr</li>
            <li>Bh</li>
            <li>Ln</li>
        </ul>

    </div>
</footer>
