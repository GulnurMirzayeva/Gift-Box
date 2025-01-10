@extends('front.layouts.app')
@section('title', __('Hazır Hədiyyə Qutusu Seçin | BOX & TALE'))
<link rel="stylesheet" href="{{ asset('assets/front/css/choose-premade.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/css/choose-box.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


@section('content')
    <div class="choose-box-line"></div>

    <div class="choose-box-steps-container">
        @foreach (range(1, 3) as $stepNumber)
            <div class="choose-box-step">
                <div class="choose-box-circle {{ $stepNumber <= $currentStep ? 'completed' : '' }}">{{ $stepNumber }}</div>
                <div class="choose-box-text">
                    <h3>{{ ['Qutu Seçin', 'Fərdiləşdirin', 'Tamamlandı'][$stepNumber - 1] }}</h3>
                    <p>{{ ['Seçdiyiniz qutunu seçin', 'Qutunuzu fərdiləşdirin', 'Sifarişi tamamlayın'][$stepNumber - 1] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container my-5 p-5 choose-boxes-page" style="background-color: #ffffff; max-width: 1150px!important; border-radius: 20px">
        <div class="choose-boxes-header text-center" style="line-height: 0.5">
            <h3 class="fw-bold" style="color: #a3907a; margin-bottom: 15px">Qutunuzu fərdiləşdirin</h3>
            <p style="font-size: 14px; color: #898989">Qutunu, Kartı seçin və Məhsulları Fərdiləşdirin.</p>
            <p style="color: #a3907a; font-size: 14px; font-weight: 600">Sifarişi tamamlamaq üçün seçdiyiniz qutunun içərisindəkilərə nəzər yetirin!</p>
        </div>

        <div class="container mt-5" style="min-width: 1050px">
            <div id="accordion">
                <div class="mt-5 w-100" style="border-radius: 20px; max-width: 1150px!important; border: 1px solid #ccc; width: 70%;">
                    <!-- Heading və Collapse bölməsi -->
                    <div class="border-theme-secondary pb-3" style="border-bottom-left-radius: 0rem; border-bottom-right-radius: 0rem; border-bottom-width: 0px !important;">
                        <h2 class="mb-0 d-flex flex-column pt-2">
                            <button type="button" class="d-flex flex-row mb-0 btn btn-header-link w-100 text-theme h2 text-left collapse-button pb-0 pt-3 pl-3 pr-3"
                                    data-toggle="collapse" data-target="#collapse-67dbcf95-11ee-4ff5-b8cb-856d23df54f3" aria-expanded="false"
                                    aria-controls="collapse-67dbcf95-11ee-4ff5-b8cb-856d23df54f3"
                                    style="background: none; border: none; outline: none; color: inherit; box-shadow: none;">
                                <div class="flex-grow-1 d-flex flex-md-row flex-column align-items-md-center">
                                    <span class="font-butler text-capitalize mb-0 h4" style="color: #a3907a;">Box adi</span>
                                    <br class="w-100 d-block d-md-none mb-0">
                                    <span class="mb-0 font-avenir-light recipient-name-text-0 h5"></span>
                                </div>
                                <div class="d-flex justify-content-end mr-4">
                                    <div style="cursor: pointer;">
                                        <i class="far fa-trash-alt h5 mb-0 text-theme-secondary"></i>
                                    </div>
                                </div>
                            </button>
                        </h2>
                    </div>

                    <!-- Collapse bölməsi -->
                    <div id="collapse-67dbcf95-11ee-4ff5-b8cb-856d23df54f3" class="collapse show w-100" aria-labelledby="heading-67dbcf95-11ee-4ff5-b8cb-856d23df54f3" data-parent="#accordion">
                        <div class="row">
                            <!-- Sol tərəf: Qutular -->
                            <div class="col-md-6">
                                <p data-v-11909900="" class="font-avenir-black text-theme-secondary mt-4 ps-3 text-left" style="color: #898989; font-size: 14px; font-weight: 600">Qutu Seçin!</p>
                                <div class="d-flex flex-row flex-wrap w-100 mx-0">
                                    @foreach($boxes as $box)
                                        <div class="col-md-3 col-6 px-1">
                                            <div class="form-check-inline mx-0">
                                                <div class="d-flex flex-column justify-content-center align-items-center">
                                                    <img src="{{ asset('images/' . $box['image']) }}"
                                                         alt="{{ $box['name'] }}"
                                                         class="img-fluid rounded"
                                                         style="object-fit: contain;">
                                                    <span class="text-capitalize font-butler w-100 text-center mt-2 text-theme h6">
                                                        {{ $box['name'] }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="ps-3 mt-3">
                                    <p data-v-11909900="" class="font-avenir-black text-theme-secondary text-left" style="color: #898989; font-size: 14px;">Qutu üzərinə yazı yazın</p>
                                    <textarea class="customizing-text-input-fonts"></textarea>
                                    <p data-v-11909900="" class="font-avenir-black text-theme-secondary text-left" style="color: #898989; font-size: 14px; font-weight: 600">Font Seçin</p>
                                    <div class="button-group-customizing-fonts" data-box-index="">
                                        <button class="font-button-customizing-edit" data-font="Playwrite AU SA" style="font-family: Playwrite AU SA">Font A</button>
                                        <button class="font-button-customizing-edit" data-font="Josefin Sans" style="font-family: Josefin Sans;">Font B</button>
                                        <button class="font-button-customizing-edit" data-font="Indie Flower" style="font-family: Indie Flower;">Font C</button>
                                    </div>
                                </div>
                                <p data-v-11909900="" class="font-avenir-black text-theme-secondary text-left ps-3 pt-3" style="color: #898989; font-size: 14px; font-weight: 600">Kart Seçin!</p>
                                <div class="slider-container">
                                    <div class="d-flex row px-3">
                                        <div id="slider-container">
                                            <div class="row">
                                                @foreach($cards as $card)
                                                    <div class="col-6 px-1 col-md-6 mb-3 card-item" data-id="{{ $card->id }}">
                                                        <img
                                                            alt="{{ $card->name }}"
                                                            src="{{ asset('images/' . $card->image) }}"
                                                            class="rounded img-fluid w-100 select-card"
                                                            style="min-height: 150px; height: auto; object-fit: contain; cursor: pointer;"
                                                            data-name="{{ $card->name }}"
                                                            data-price="{{ '₼ ' . $card->price ?? '' }}"
                                                        >
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Prev və Next düymələri -->
                                            <button class="nav-button prev position-absolute d-flex justify-content-center align-items-center">
                                                <i class="fas fa-chevron-left"></i>
                                            </button>
                                            <button class="nav-button next position-absolute d-flex justify-content-center align-items-center">
                                                <i class="fas fa-chevron-right"></i>
                                            </button>
                                        </div>

                                        <!-- Seçilən kartın göstərilməsi -->
                                        <div id="selected-card-container" style="display: none;">
                                            <div class="text-center">
                                                <img id="selected-card-image" src="" alt="" style="min-height:150px; height: auto" class="rounded img-fluid w-100 mb-3">
                                                <h4 id="selected-card-name"></h4>
                                                <p id="selected-card-price" style="font-size: 18px;"></p>
                                                <span id="reset-slider" style="cursor: pointer; font-size:14px; text-decoration: underline;">(Kartı Dəyişdir)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ps-3 pb-3 w-100 d-flex flex-column">
                                    <!-- "To" Field -->
                                    <div class="form-group d-flex flex-column flex-wrap flex-md-nowrap">
                                        <label for="to-field" class="px-0 pt-2 mr-2 text-theme-secondary">To</label>
                                        <input
                                            type="text"
                                            id="to-field"
                                            maxlength="70"
                                            class="col-md-10 rounded form-control recipient-name-0"
                                            placeholder="Enter recipient name">
                                    </div>

                                    <!-- "From" Field -->
                                    <div class="form-group d-flex flex-column flex-wrap flex-md-nowrap">
                                        <label for="from-field" class="px-0 pt-2 mr-2 text-theme-secondary">From</label>
                                        <input
                                            type="text"
                                            id="from-field"
                                            maxlength="70"
                                            class="col-md-10 rounded form-control"
                                            placeholder="Enter your name">
                                    </div>

                                    <!-- "Message" Field -->
                                    <div class="form-group d-flex flex-column flex-wrap flex-md-nowrap">
                                        <label for="message-field" class="px-0 pt-2 mr-2 text-theme-secondary">Message</label>
                                        <textarea
                                            id="message-field"
                                            maxlength="300"
                                            class="col-md-10 rounded form-control"
                                            placeholder="Write your message here"></textarea>
                                    </div>
                                </div>

                            </div>

                            <!-- Sağ tərəf: Məhsullar -->
                            <div class="col-md-6" style="background-color: #6b7280">
                                Sağ tərəf
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .button-group-customizing-fonts {
        display: flex;
        text-align: left;
        margin: 0;
        padding: 0;
    }

    .font-button-customizing-edit {
        float: left;
        clear: left;
        margin-bottom: 5px;
    }

    .slider-container {
        position: relative;
        padding: 0 15px; /* Reduced padding to bring buttons closer */
    }

    input {
        border-color: #3f6212;
    }

    .nav-button {
        position: absolute;
        top: 40%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #333;
        cursor: pointer;
        z-index: 2;
        padding: 5px;
    }

    .nav-button.prev {
        left: 5px; /* Moved closer to content */
    }

    .nav-button.next {
        right: 5px; /* Moved closer to content */
    }

    /* Add transition styles for smooth animation */
    .col-6 {
        transition: all 0.5s ease-in-out;
        opacity: 1;
    }

    .col-6.hiding {
        opacity: 0;
        transform: translateX(-20px);
    }

    .col-6.showing {
        opacity: 1;
        transform: translateX(0);
    }
    .col-6 {
        transition: opacity 0.5s ease-in-out;
        opacity: 0;
        display: none;
    }

    .col-6.active {
        opacity: 1;
        display: block;
    }

    .slider-container img {
        cursor: pointer;
    }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sliderContainer = document.querySelector('.slider-container');
        const row = sliderContainer.querySelector('.row');
        const prevBtn = sliderContainer.querySelector('.prev');
        const nextBtn = sliderContainer.querySelector('.next');

        const items = row.querySelectorAll('.col-6');
        const itemCount = items.length;
        const itemsPerView = 4;
        let currentPosition = 0;
        let isAnimating = false;

        updateSliderView();

        prevBtn.addEventListener('click', () => {
            if (!isAnimating && currentPosition > 0) {
                slideItems('prev');
            }
        });

        nextBtn.addEventListener('click', () => {
            if (!isAnimating && currentPosition + itemsPerView < itemCount) {
                slideItems('next');
            }
        });

        function slideItems(direction) {
            isAnimating = true;

            const start = currentPosition;
            if (direction === 'next') {
                currentPosition += itemsPerView;
            } else if (direction === 'prev') {
                currentPosition -= itemsPerView;
            }

            // Yeni elementləri animasiya ilə göstər
            updateSliderView(() => {
                isAnimating = false; // Animasiya tamamlandıqda aktivliyi yenilə
            });
        }

        function updateSliderView(callback) {
            // Bütün elementləri gizlət
            items.forEach((item, index) => {
                if (index >= currentPosition && index < currentPosition + itemsPerView) {
                    item.style.display = 'block';
                    item.style.opacity = '0'; // Şəffaflıq
                    setTimeout(() => {
                        item.style.transition = 'opacity 0.5s';
                        item.style.opacity = '1';
                    }, 50);
                } else {
                    item.style.display = 'none';
                }
            });

            // Düymə vəziyyətlərini yenilə
            prevBtn.style.display = currentPosition === 0 ? 'none' : 'block';
            nextBtn.style.display = currentPosition + itemsPerView >= itemCount ? 'none' : 'block';

            if (callback) callback();
        }
    });
    document.addEventListener('DOMContentLoaded', () => {
        const cardItems = document.querySelectorAll('.card-item img');
        const selectedCardContainer = document.getElementById('selected-card-container');
        const sliderContainer = document.getElementById('slider-container');
        const selectedCardImage = document.getElementById('selected-card-image');
        const selectedCardName = document.getElementById('selected-card-name');
        const selectedCardPrice = document.getElementById('selected-card-price');
        const resetSlider = document.getElementById('reset-slider');

        // Kart seçmə və aktivləşdirmə
        cardItems.forEach(card => {
            card.addEventListener('click', function () {
                const cardId = this.closest('.card-item').dataset.id;
                const cardName = this.dataset.name;
                const cardPrice = this.dataset.price || "No Price";

                // Aktiv kartı göstər
                sliderContainer.style.display = 'none';
                selectedCardContainer.style.display = 'block';

                // Şəkil və məlumatları göstər
                selectedCardImage.src = this.src;
                selectedCardName.textContent = cardName;
                selectedCardPrice.textContent = cardPrice;

                // Aktiv sinifini əlavə et
                cardItems.forEach(img => img.classList.remove('active-card'));
                this.classList.add('active-card');
            });
        });

        // Yenidən seçim
        resetSlider.addEventListener('click', function () {
            sliderContainer.style.display = 'block';
            selectedCardContainer.style.display = 'none';

            // Aktiv sinifi təmizlə
            cardItems.forEach(img => img.classList.remove('active-card'));
        });
    });
</script>

