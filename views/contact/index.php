<!-- Page title -->
<input type="hidden" value="5" id="pageId">
<section class="page-title-wrap">
    <div class="page-title-img default-pagetitle-bg">
        <div class="container">
            <div class="row">
                <div class="cp-page-title-wrap">
                    <div class="header-color-back">
                        <div class="header-main-content">
                            <h1><span>Контакты</span></h1>
                            <p>Дизайн студія Comfort House</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Page title -->

<!-- Main Content -->
<section id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-0 custom-80">
                <div id="map"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 padding-0">

                <div class="contact-us-info-1">
                    <h2>Контактная информация</h2>

                    <div class="custom-border">
                        <div class="custom-border-1"></div>
                    </div>

                    <p class="wow fadeInRight" data-wow-delay=".0s">

                    </p>
                    <p class="contact-add-1 custom-p wow fadeInRight" data-wow-delay=".1s"><span>Адрес:</span> г.Кривой Рог, ул.Мелешкина, 4 </p>
<!--                    <p class="wow fadeInRight" data-wow-delay=".1s">New York, USA</p>-->
                    <p class="wow fadeInRight" data-wow-delay=".2s"><span>Телефон:</span> <a href="tel:+380980515555">  +380 (98) 051 55 55</a></p>
                    <p class="wow fadeInRight" data-wow-delay=".3s"><span>Email:</span> <a href="mailto:info@business.com">info@business.com</a></p>
                </div>
            </div>
            <div class="col-sm-6 padding-0">

                <div class="contact-form-2">
                    <h2>Отправь нам сообщение</h2>

                    <div class="custom-border">
                        <div class="custom-border-1"></div>
                    </div>

                    <!-- Contact Form -->
                    <form class="form" id="contact_form" action="" method="post" autocomplete="off">
                        <div class="clearfix">
                            <div id="contact_message"></div>

                            <div class="contact-applied-form-1">

                                <!-- Name -->
                                <div class="form-group custom-group wow fadeInDown" data-wow-delay=".0s">
                                    <label for="name"> <span class="content-red">*</span> Имя</label>
                                    <input type="text" name="senderName" id="senderName" class="reply-info-field form-control" pattern=".{2,100}" required>
                                </div>
                            </div>
                            <div class="contact-applied-form-1">
                                <!-- Email -->
                                <div class="form-group custom-group wow fadeInDown" data-wow-delay=".1s">
                                    <label for="email"><span class="content-red">*</span>E-mail</label>
                                    <input type="email" name="senderEmail" id="senderEmail" class="reply-info-field form-control" pattern=".{5,100}" required>
                                </div>
                            </div>

                            <div class="contact-applied-form-1">

                                <!-- Message -->
                                <div class="form-group wow fadeInDown" data-wow-delay=".2s">
                                    <label for="message">Сообщение:</label>
                                    <textarea rows="5" name="senderMessage" id="senderMessage" class="reply-info-area form-control"></textarea>
                                </div>

                            </div>

                        </div>

                        <!-- Send Button -->
                        <button class="submit_btn btn btn-mod btn-large btn-full contact-submit-btn-2 wow fadeInDown" data-wow-delay=".3s" id="submit_btn">
                            Отправить
                        </button>

                    </form>
                </div>


            </div>
        </div>
    </div>
</section>
<!--/ End Main Content -->