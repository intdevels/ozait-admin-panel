@extends('layouts.app')


@section('content')
    <div class="main__block wrapper">
        <h1 style="color: #FF2E63;" class="element-animation"><span style="color: #2a9cff;" id="typed"></span> {!! $typing->title !!}</h1>
        <div class="mainblock__flex">
            <div class="mainblock__mintext">
                <div class="element-animation">
                    {!! $typing->text !!}
                </div>
                <a class="btn element-animation" href="#form_scroll">{{ $typing->button_text }} <img src="fonts/line1.svg" alt></a>
            </div>
            <img class="mainblock__img element-animation" src="images/main_img.png" alt>
        </div>
    </div>
    <div id="typed-strings">
        @foreach($typing->texts as $text)
            <span>{{ $text->text }}</span>
        @endforeach
    </div>
    <div class="team" id="team">
        <div class="wrapper">
            <h2 class="element-animation">Наша команда
                <div class="str"></div>
            </h2>
        </div>
        <div class="team__flex responsive element-animation">
            @foreach($team as $member)
                <div>
                    <div class="team__card">
                        <img src="{{ asset('storage/'.$member->image) }}" alt>
                        <div class="tmcard__name">{{ $member->name }}</div>
                        <div class="tmcard__teg">{!! $member->tag !!}</div>
                        <div class="tmcard__text">{!! $member->description !!}</div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="wrapper">
            <a class="element-animation team__a">все специалисты <img src="fonts/line2.svg" alt></a>
        </div>
    </div>

    <div class="wrapper services" id="services">
        <h2 class="element-animation">Что мы можем сделать для Вас?</h2>
        <div class="services__flex">
            @foreach($services as $service)
                <div class="services__card element-animation">
                    <div class="srvcard__title"><img src="fonts/free-icon-web-design-2862304%201.svg" alt> {{ $service->name }}
                    </div>
                    <div class="srvcard__text">{!! $service->description !!}
                    </div>
                    <div class="srvcard__bottom">
                        <div class="srvcard__price">от {{ $service->price }} ₽</div>
                        <a href="{{ $service->url }}">Подробнее <img src="fonts/line3.svg" alt></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="wrapper advantage" id="advantage">
        <h2 class="element-animation">Преимущества?</h2>
        <div class="advantage__grid">
            @foreach($advantages as $advantage)
                <div class="ad__card element-animation">
                    <div class="adcard_top">
                        <img src="{{ asset('storage/'.$advantage->image) }}" alt>
                        <div class="adcard__title">{!! $advantage->name !!}</div>
                    </div>
                    <div class="adcard_text">{!! $advantage->description !!}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="advantage__line arrow1 element-animation"><img src="fonts/line4.svg" alt></div>
    </div>

    <div class="wrapper contract">
        <div class="contract__text element-animation">Мы работаем по <span>договору</span>, <br>
            100% гарантия выполнения или
            возврат денежных средств
        </div>
        <img class="element-animation" src="images/contractimg.png" alt>
    </div>

    <div class="wrapper stages">
        <h2 class="element-animation">Этапы работы над&nbsp;<span>Вашим проектом</span></h2>
        <div class="stages_grid">
            <div class="stages_card stages_card_1 element-animation">
                <div class="stag_fl">
                    <div class="stag_fl_top">
                        <div class="stag_fl_namber">1</div>
                        <img src="fonts/image5.svg" alt>
                    </div>
                    <div class="stag_fl_title_flex">
                        <div class="stag_title">Брифинг</div>
                        <img src="fonts/line5.svg" alt>
                    </div>
                    <div class="stag_fl_text">Уточнение деталей и обсуждение условий с менеджером</div>
                </div>
            </div>
            <div class="stages_card stages_card_2 element-animation">
                <div class="stag_fl">
                    <div class="stag_fl_top">
                        <div class="stag_fl_namber">2</div>
                        <img src="fonts/image6.svg" alt>
                    </div>
                    <div class="stag_fl_title_flex">
                        <div class="stag_title">Контракт</div>
                        <img src="fonts/line5.svg" alt>
                    </div>
                    <div class="stag_fl_text">Подписание договора без обязательств по оплате на данном этапе</div>
                </div>
            </div>
            <div class="stages_card stages_card_3 element-animation">
                <div class="stag_fl">
                    <div class="stag_fl_top">
                        <div class="stag_fl_namber">3</div>
                        <img src="fonts/image7.svg" alt>
                    </div>
                    <div class="stag_fl_title_flex">
                        <div class="stag_title">Отбор</div>
                        <img class="st_img_3" src="fonts/Group5.svg" alt>
                    </div>
                    <div class="stag_fl_text">Формирование команды или подбор отдельных специальных под требования
                        клиента
                    </div>
                </div>
            </div>
            <div class="stages_card stages_card_4"></div>
            <div class="stages_card stages_card_5 element-animation">
                <div class="stag_fl">
                    <div class="stag_fl_top">
                        <div class="stag_fl_namber">4</div>
                        <img src="fonts/image8.svg" alt>
                    </div>
                    <div class="stag_fl_title_flex">
                        <div class="stag_title">Создание</div>
                    </div>
                    <div class="stag_fl_text">Интеграция специалистов в команду клиента, ежедневная отчетность под
                        контролем
                        менеджера
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper we">
        <h2 class="element-animation">
            <span>МЫ</span><br>
            сотрудничаем с крупными бизнесами
            России и СНГ
        </h2>
        <div class="we__flex">
            <div class="wefl__left">
                @foreach($cooperate as $item)
                    <div class="wefl__card element-animation">
                        <div class="weflcard__top">
                            <div>{{ $item->title }}</div>
                            <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->image }}">
                        </div>
                        <div class="weflcard__number">{{ $item->info }}</div>
                        <div class="weflcard__text">{{ $item->description }}</div>
                    </div>
                @endforeach
            </div>
            <div class="wefl__img element-animation"><img src="images/cnbr.png" alt></div>
        </div>
    </div>

    <div class="portfolio">
        <div class="wrapper">
            <h2 class="element-animation " id="we">Наши проекты</h2>
        </div>
        <div class="slider multiple-items element-animation">
            <div class="sl">
                <div class="sl1">
                    <img src="fonts/logoufhguf.svg" alt>
                    <a class="popup-open_5" href>платформа киберспортивных турниров</a>
                </div>
            </div>
            <div class="sl">
                <div class="sl1">
                    <img src="images/logojgjjjhg.png" alt>
                    <a class="popup-open_6" href>интернет-магазин обуви</a>
                </div>
            </div>
            <div class="sl">
                <div class="sl1">
                    <img src="images/img1.png" alt>
                    <a class="popup-open" href>найти фильм\книгу по отрывку</a>
                </div>
            </div>
            <div class="sl">
                <div class="sl2">
                    <img src="images/img2.png" alt>
                    <a class="popup-open_2" href>Нарисуй линии и получи фото земли с таким же рельефон</a>
                </div>
            </div>
            <div class="sl">
                <div class="sl3">
                    <img src="images/img3.png" alt>
                    <a class="popup-open_3" href>шахматы</a>
                </div>
            </div>
            <div class="sl">
                <div class="sl4">
                    <img src="images/img4.png" alt>
                    <a class="popup-open_4" href>Поиск двойника по фото</a>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <a href="{{ route('projects') }}" class="element-animation team__a">все проекты <img src="fonts/line2.svg"
                                                                                                 alt></a>
        </div>
    </div>

    <div class="wrapper form" id="form_scroll">
        <h2 class="element-animation"><span>Вы хотите развития и сильную команду?</span><br>Оставьте заявку</h2>
        <div class="form_block">
            <form name="form" id="feedback-form" action>
                <fieldset class="fr_top element-animation">
                    <div>
                        <!--<label for="name">ФИО</label>-->
                        <input type="text" name="name" id="name" placeholder="ФИО" required>
                    </div>
                    <div>
                        <!--<label for="email">Email</label>-->
                        <input type="email" name="mail" id="email" placeholder="email" required>
                    </div>
                    <div>
                        <!--<label for="number">Номер для сзяви</label>-->
                        <input type="tel" name="phone" id="number" placeholder="Номер для сзяви" maxlength="21"
                               required>
                    </div>
                </fieldset>
                <fieldset class="fr_center element-animation">
                    <div>
                        <input type="checkbox" name="app" id="app" class="app" checked>
                        <label for="app">Создание приложения</label>
                    </div>
                    <div>
                        <input type="checkbox" name="site" id="sit" class="site">
                        <label for="sit">Создание сайта</label>
                    </div>
                </fieldset>
                <fieldset class="fr_bottom element-animation">
                    <legend>Наш менеджер свяжется с Вами с удобное для Вас время</legend>
                    <div class="fr_tm_dt">
                        <div>
                            <!--<label for="date">дата</label>-->
                            <input type="date" name="date" id="date" placeholder="дата" required>
                        </div>
                        <div>
                            <!--	<label for="time">время</label>-->
                            <input type="time" name="time" id="time" placeholder="время" required>
                        </div>
                    </div>
                </fieldset>
                <div>
                    <div class="appr element-animation">
                        <input type="checkbox" name="books" id="approval" class="custom-checkbox" required>
                        <label for="approval">Я согласен с Политикой конфиденциальности и Условиями
                            использования</label>
                    </div>
                    <input type="submit" name="submit" value="Отправить">
                    <!--h<button type="submit">Отправить</button>-->
                </div>
            </form>
        </div>
    </div>

    <div class="wrapper questions">
        <h2 class="element-animation">ответы на Ваши вопросы</h2>
        <div class="questions_block">
            @foreach($faq as $key => $text)
                <div class="questions_item @if($key === 0) act @endif">
                    <div class="questions_item_title">
                        <div class="qpos">{!! $text->question !!}
                            <div class="line_h"></div>
                        </div>
                    </div>
                    <div class="questions_item_text">
                        {!! $text->answer !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="reviews">
        <div class="wrapper">
            <h2 class="element-animation"><span>Отзывы&nbsp;</span>клиентов
                <div class="line_h"></div>
            </h2>
        </div>
        <div class="center">
            @foreach($comments as $comment)
                <div>
                    <div class="reviews_sl">
                        <div class="rev_flex">
                            <div class="rev_flex_img"><img src="{{ asset('storage/'.$comment->image) }}" alt>
                            </div>
                            <div class="rev_flex_right">
                                <div class="rev_flex_star">
                                    @foreach($comment->starArray as $star)
                                        @if($star === 'star')
                                            <div class="star"></div>
                                        @elseif($star === 'star3')
                                            <div class="star">
                                                <div class="star3"></div>
                                            </div>
                                        @else
                                            <div class="star">
                                                <div class="star2"></div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="rev_flex_text">
                                    {{ $comment->description }}
                                </div>
                            </div>
                        </div>
                        <div class="reviews_bot">
                            <div class="reviews_sl_name">{{ $comment->name }}</div>
                            <div class="reviews_sl_post">{{ $comment->position }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
