@extends('layout')

@section('title')Онлайн-Академия@endsection

@section('main_content')


<div class="wrapper">
        <main>
            <div class="main_block">
                <div class="mainphoto"><img src="{{asset('images/home_img.svg')}}" alt=""></div>
                <div class="onlinekurs">
                    <div class="elips"><img src="{{asset('images/сircle.svg')}}" alt=""></div>
                    <h1 class="name">Онлайн курсы</h1>
                    <div class="discription">Академия предлагает инновационные курсы по программированию, обеспечивая доступное образование с экспертами и поддержкой для успешного обучения.</div>
                    <div class="learn_more">Узнать больше</div>
                </div>
            </div>
            <div class="garantee">
                <div class="megarantee">Мы гарантируем, что вам будет легко учиться</div>
                <div class="infogarantee">
                    <div class="column1">
                        <div class="block_garantee">
                            <div class="text_garantee"><span class="img_check"><img src="{{asset('images/check.svg')}}" alt=""></span>Опыт учителей</div>
                            <div class="discription_garan">Наши преподаватели имеют многолетний опыт в области программирования и успешно обучают студентов на всех уровнях</div>
                        </div>
                        <div class="block_garantee">
                            <div class="text_garantee"><span class="img_check"><img src="{{asset('images/check.svg')}}" alt=""></span>Мощные программы</div>
                            <div class="discription_garan">Мы предлагаем современные учебные программы, которые включают практические задания и проекты для закрепления знаний</div>
                        </div>
                        <div class="block_garantee">
                            <div class="text_garantee"><span class="img_check"><img src="{{asset('images/check.svg')}}" alt=""></span>Персональный учитель</div>
                            <div class="discription_garan">Вы получите индивидуальное внимание и поддержку от личного преподавателя, который поможет достичь ваших образовательных целей</div>
                        </div>          
                    </div>
                    <div class="column2">
                        <div class="block_garantee">
                            <div class="text_garantee"><span class="img_check"><img src="{{asset('images/check.svg')}}" alt=""></span>Сертификационные курсы</div>
                            <div class="discription_garan">Программы сертификации помогут вам получить знания и навыки, признанные в индустрии, и повысить вашу конкурентоспособность</div>
                        </div>
                        <div class="block_garantee">
                            <div class="text_garantee"><span class="img_check"><img src="{{asset('images/check.svg')}}" alt=""></span>Эксперты отрасли</div>
                            <div class="discription_garan">Наши курсы разрабатываются и проводятся опытными экспертами, которые знают актуальные тенденции и требования рынка</div>
                        </div>
                        <div class="block_garantee">
                            <div class="text_garantee"><span class="img_check"><img src="{{asset('images/check.svg')}}" alt=""></span>Круглосуточная поддержка</div>
                            <div class="discription_garan">Наша команда поддержки доступна 24/7, чтобы ответить на ваши вопросы и помочь в решении любых проблем</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="improve_skills">
                <div class="name_improve">Улучшайте свои навыки</div>
                <div class="text_skills">Развивайтесь и совершенствуйтесь в выбранной области! Записывайтесь на курсы, читайте специализированную литературу и участвуйте в вебинарах. Не забывайте практиковаться и применять новые знания на практике для достижения лучших результатов!</div>
                <div class="blocks_languages">
                    <div class="blok_lang">
                        <div class="img_lang"><img src="{{asset('images/python.svg')}}" alt=""></div>
                        <div class="name_lang">Python</div>
                        <div class="discrip_lang">Python — базовый, один из самых популярных и востребованных языков программирования. </div>
                        <div class="learn_more_lang"><a href="/python">Узнать больше</a></div>
                    </div>
                    <div class="blok_lang">
                        <div class="img_lang"><img src="{{asset('images/javascript.svg')}}" alt=""></div>
                        <div class="name_lang">JavaScript</div>
                        <div class="discrip_lang">Погрузитесь в мир разработки сайтов — освойте JavaScript, React.js, верстку. </div>
                        <div class="learn_more_lang" style="margin-top: 60px;"><a href="/javascript">Узнать больше</a></div>
                    </div>
                    <div class="blok_lang">
                        <div class="img_lang"><img src="{{asset('images/java.svg')}}" alt=""></div>
                        <div class="name_lang">Java</div>
                        <div class="discrip_lang">Станьте Java-разработчиком — пишите десктопные и веб-приложения </div>
                        <div class="learn_more_lang" style="margin-top: 60px;"><a href="/java">Узнать больше</a></div>
                    </div>
                    <div class="blok_lang">
                        <div class="img_lang"><img src="{{asset('images/c_sharpe_main.svg')}}" alt=""></div>
                        <div class="name_lang">C#</div>
                        <div class="discrip_lang">Создавайте сайты, серверные, десктопные и мобильные приложения на C#.</div>
                        <div class="learn_more_lang" style="margin-top: 60px;"><a href="/c_sharpe">Узнать больше</a></div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @endsection