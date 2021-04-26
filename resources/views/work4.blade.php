@extends('master')
@section('header')

    @extends('header');

@endsection
@section('main')
    <div id="work" class="container">
        <div class="col-md-8">
            <h1>
                Kurumsal satış
            </h1>
            <p>Sitemizde gördüğünüz tüm ürünlerden, istenilen malzemeden ve istenilen ölçülerde baskılı yada baskısız özel üretim yapılabilmektedir.
                Sitemizde olmayan ambalaj ürünleri de özel üretim ile yapılabilmektedir.
                Hızlı baskı tekniği dışında 12 renge kadar Flexo yada Rotogravür (Tifdruk) baskılı ve tek katlı yada çok katlı (laminasyonlu) ambalaj üretimi yapılabilmektedir.</p>
        </div>

    </div>





@endsection
@section('footer')
    <footer class="footer">
        <div class="newsletter">
            <div class="container">
                <div class="inner">
                    <div class="newsletter-title">Bizden haberdar olmak ister misiniz?</div>
                    <div class="newsletter-box">
                        <form action="">
                            <input class="newsletter-box-input" type="email" name="newsletter" placeholder="E-Posta">
                            <button class="newsletter-box-button" type="submit" name="newsletterButton">
                                <span>Abone Ol</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="features">
            <div class="container">
                <div class="inner">
                    <a href="javascript:" data-fancybox data-src="#feature-cards">
                        <div class="feature-cards feature-cards-mobile">
                            <div class="feature-card">
                                <div class="feature-card__figure">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="64" height="64" rx="32" fill="#24FF96" fill-opacity="0.1"/>
                                        <path d="M38.963 38.2833C40.7935 35.7387 41.9189 32.8147 42.2702 29.7283L32.0994 26.8362L21.9285 29.7283C22.2797 32.8146 23.4051 35.7387 25.2357 38.2833C27.018 40.7608 29.3834 42.7539 32.0994 44.0723C34.8152 42.7539 37.1807 40.7608 38.963 38.2833V38.2833Z" fill="#2CA48E"/>
                                        <path d="M32.0995 24.4765L42.3894 27.4025V22.6829L32.0995 19.7568L21.8096 22.6829V27.4025L32.0995 24.4765Z" fill="#2CA48E"/>
                                        <path d="M33.2344 13V17.7197L44.6592 20.9685V27.6282C44.6592 31.9618 43.3267 36.1047 40.8057 39.6091C38.8349 42.3484 36.2281 44.5609 33.2344 46.0435V51.0001C37.7551 49.2385 41.6349 46.2301 44.4908 42.2601C47.5708 37.9788 49.1989 32.9191 49.1989 27.6282V17.5397L33.2344 13Z" fill="#2CA48E"/>
                                        <path d="M30.9645 46.0434C27.9707 44.5608 25.3639 42.3483 23.3932 39.609C20.8722 36.1047 19.5397 31.9618 19.5397 27.6281V20.9684L30.9645 17.7196V13L15 17.5397V27.6281C15 32.919 16.6281 37.9787 19.7081 42.2601C22.5641 46.23 26.4439 49.2384 30.9645 51V46.0434Z" fill="#2CA48E"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card__figure">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="64" height="64" rx="32" fill="#5D24FF" fill-opacity="0.1"/>
                                        <g clip-path="url(#clip0)">
                                            <path d="M47.6638 21.4735L26.2279 16.9371C25.321 16.7452 24.4221 17.3303 24.2302 18.2372L23.823 20.8544L48.5563 26.0883L48.9636 23.4712C49.1554 22.5646 48.5707 21.6654 47.6638 21.4735Z" fill="#805FB7"/>
                                            <path d="M38.6494 26.6433C38.399 25.7417 37.4567 25.2087 36.5554 25.4587L32.4861 26.5883L22.8929 24.5581L21.8379 29.5431L15.246 31.3727C14.3446 31.6227 13.8117 32.565 14.0617 33.4664L17.7766 46.8533C18.027 47.7546 18.9693 48.2879 19.8706 48.0375L41.18 42.1239C42.0813 41.8736 42.6143 40.9316 42.3643 40.0299L41.7267 37.7318L44.1166 38.2371C45.0235 38.4293 45.9224 37.8442 46.1143 36.9373L47.6263 29.7921L39.0177 27.9705L38.6494 26.6433ZM41.1103 33.4471L41.6373 30.9563C41.7165 30.5834 42.0863 30.3429 42.4591 30.4216L44.9499 30.949C45.3232 31.0281 45.5637 31.3975 45.485 31.7708L44.9579 34.2615C44.8788 34.6345 44.5091 34.8753 44.1361 34.7962L41.6454 34.2692C41.2718 34.1898 41.0312 33.82 41.1103 33.4471ZM15.6168 32.7086L21.5139 31.0726L35.4282 27.2113L36.9254 26.7953C36.9528 26.7879 36.9801 26.7845 37.0067 26.7845C37.1268 26.7845 37.2704 26.8633 37.3124 27.0142L37.4882 27.6473L38.039 29.632L16.1245 35.7133L15.3979 33.0959C15.3524 32.9316 15.4526 32.7541 15.6168 32.7086ZM41.028 40.4003C41.056 40.5019 41.0267 40.5859 40.9969 40.6385C40.9675 40.691 40.9107 40.7597 40.8092 40.7876L19.5001 46.7012C19.4732 46.7086 19.4455 46.7125 19.4189 46.7125C19.2988 46.7125 19.1552 46.6333 19.1132 46.4824L16.9464 38.674L38.8609 32.5923L40.1975 37.4082L41.028 40.4003Z" fill="#805FB7"/>
                                            <path d="M22.9434 40.9348C22.8411 40.5671 22.4573 40.35 22.0897 40.4519L19.601 41.1428C19.2337 41.2447 19.0163 41.6288 19.1185 41.9965L19.809 44.4848C19.9113 44.8525 20.2951 45.0696 20.6628 44.9673L23.1514 44.2768C23.5191 44.1749 23.7362 43.7907 23.6343 43.4231L22.9434 40.9348Z" fill="#805FB7"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="35" height="35" fill="white" transform="translate(14 15)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card__figure">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="64" height="64" rx="32" fill="#FFEA79" fill-opacity="0.1"/>
                                        <path d="M46.3365 40.023C45.7306 39.5723 44.8742 39.6982 44.4235 40.3039C44.1756 40.6371 43.9104 40.9639 43.6351 41.2753C43.1351 41.841 43.1882 42.705 43.7538 43.2051C44.014 43.4351 44.337 43.548 44.6589 43.548C45.037 43.548 45.4135 43.392 45.6837 43.0863C46.0097 42.7176 46.3238 42.3305 46.6173 41.9359C47.068 41.3302 46.9423 40.4736 46.3365 40.023Z" fill="#C2AB2D"/>
                                        <path d="M48.623 33.6114C47.8857 33.4508 47.1569 33.9187 46.9963 34.6565C46.9079 35.0623 46.8012 35.4689 46.6787 35.8651C46.4558 36.5866 46.86 37.3521 47.5813 37.575C47.7158 37.6165 47.8517 37.6363 47.9854 37.6363C48.5692 37.6363 49.1098 37.2593 49.2912 36.6723C49.4366 36.2021 49.5633 35.7195 49.6682 35.2381C49.8287 34.5003 49.3608 33.772 48.623 33.6114Z" fill="#C2AB2D"/>
                                        <path d="M39.7556 44.4017C39.3926 44.6043 39.0167 44.7937 38.6386 44.9645C37.9504 45.2753 37.6445 46.0851 37.9552 46.7732C38.1836 47.2788 38.6811 47.578 39.202 47.578C39.3902 47.578 39.5814 47.539 39.764 47.4565C40.2126 47.2539 40.6582 47.0294 41.0886 46.7891C41.7479 46.421 41.9839 45.5881 41.6158 44.9289C41.2478 44.2697 40.4149 44.0337 39.7556 44.4017Z" fill="#C2AB2D"/>
                                        <path d="M31.1328 20.5625V30.9337L26.1194 35.947C25.5855 36.481 25.5855 37.3466 26.1194 37.8805C26.3864 38.1475 26.7362 38.281 27.0862 38.281C27.4361 38.281 27.786 38.1475 28.053 37.8805L33.4668 32.4667C33.7232 32.2104 33.8672 31.8626 33.8672 31.5V20.5625C33.8672 19.8074 33.2551 19.1953 32.5 19.1953C31.7449 19.1953 31.1328 19.8074 31.1328 20.5625Z" fill="#C2AB2D"/>
                                        <path d="M48.6328 16.9395C47.8777 16.9395 47.2656 17.5515 47.2656 18.3066V22.103C44.0834 17.1123 38.5259 14 32.5 14C27.8256 14 23.431 15.8203 20.1256 19.1256C16.8203 22.431 15 26.8256 15 31.5C15 36.1744 16.8203 40.569 20.1256 43.8744C23.431 47.1797 27.8256 49 32.5 49C32.5116 49 32.5227 48.9986 32.5342 48.9983C32.5457 48.9986 32.5568 49 32.5684 49C33.0611 49 33.5587 48.9792 34.0475 48.9383C34.7999 48.8753 35.3588 48.2143 35.2958 47.4618C35.2327 46.7094 34.5726 46.1502 33.8193 46.2135C33.4061 46.2481 32.9853 46.2656 32.5684 46.2656C32.5568 46.2656 32.5457 46.2671 32.5342 46.2673C32.5227 46.2671 32.5116 46.2656 32.5 46.2656C24.3582 46.2656 17.7344 39.6418 17.7344 31.5C17.7344 23.3582 24.3582 16.7344 32.5 16.7344C37.7471 16.7344 42.5732 19.5312 45.2105 23.9805H41.4512C40.6961 23.9805 40.084 24.5926 40.084 25.3477C40.084 26.1028 40.6961 26.7148 41.4512 26.7148H45.625C46.4576 26.7148 47.2366 26.4808 47.8998 26.0755C47.9425 26.0511 47.9835 26.025 48.0226 25.9967C49.2124 25.2139 50 23.8675 50 22.3398V18.3066C50 17.5515 49.3879 16.9395 48.6328 16.9395Z" fill="#C2AB2D"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card__figure">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32Z" fill="#FF7979" fill-opacity="0.1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40.6543 19.9876C44.3824 20.8527 45.8085 23.0327 47.5965 26.0332H40.6543V19.9876ZM18.8669 26.2852C19.5969 26.2852 20.1267 26.6375 20.1267 27.4609C20.1267 28.1554 19.5647 28.7187 18.8705 28.7207H11.2598C10.5639 28.7207 10 29.285 10 29.9805C10 30.6763 10.5639 31.2402 11.2598 31.2402H22.5977C23.3 31.2402 23.8623 31.8038 23.8623 32.5C23.8623 33.1958 23.2984 33.7598 22.6026 33.7598H11.2598C10.5639 33.7598 10 34.3237 10 35.0195C10 35.7154 10.5639 36.2793 11.2598 36.2793H14.0312V40.0586C14.0312 40.7544 14.5952 41.3184 15.291 41.3184H17.8233C18.2748 43.542 20.2395 45.1816 22.5557 45.1816C24.8718 45.1816 26.8366 43.542 27.288 41.3184H40.0792C40.5306 43.542 42.4954 45.1816 44.8115 45.1816C47.1277 45.1816 49.0924 43.542 49.5438 41.3184H51.7402C52.4361 41.3184 53 40.7544 53 40.0586V32.5C53 28.8037 49.1013 28.5583 49.0977 28.5527H39.3945C38.6987 28.5527 38.1348 27.9888 38.1348 27.293V19.7344H15.291C14.5952 19.7344 14.0312 20.2983 14.0312 20.9941V23.7656H12.5195C11.8237 23.7656 11.2598 24.3296 11.2598 25.0254C11.2598 25.7212 11.8237 26.2852 12.5195 26.2852H18.8669ZM46.4446 38.7194C47.3465 39.6213 47.3465 41.0841 46.4446 41.986C44.9939 43.4367 42.502 42.4046 42.502 40.3525C42.502 38.3008 44.9939 37.2687 46.4446 38.7194V38.7194ZM24.1888 38.7194C25.0906 39.6213 25.0906 41.0841 24.1888 41.986C22.7381 43.4367 20.2461 42.4046 20.2461 40.3525C20.2461 38.3008 22.7381 37.2687 24.1888 38.7194V38.7194Z" fill="#CA3D3D"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card__figure">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="64" height="64" rx="32" fill="#16ABFE" fill-opacity="0.1"/>
                                        <g clip-path="url(#clip0)">
                                            <path d="M24.0083 31.6675C25.9762 31.6675 27.5768 29.256 27.5768 26.2919C27.5768 23.3284 25.9762 20.917 24.0083 20.917C22.0404 20.917 20.4395 23.3284 20.4395 26.2919C20.4395 29.256 22.0408 31.6675 24.0083 31.6675Z" fill="#39B7D2"/>
                                            <path d="M40.989 31.6675C42.9569 31.6675 44.5579 29.256 44.5579 26.2919C44.5579 23.3284 42.9569 20.917 40.989 20.917C39.0215 20.917 37.4209 23.3284 37.4209 26.2919C37.4209 29.256 39.0219 31.6675 40.989 31.6675Z" fill="#39B7D2"/>
                                            <path d="M49.7901 34.2547C49.5723 34.0351 49.2399 33.9752 48.9608 34.1095C44.4827 36.2451 38.6368 37.421 32.499 37.421C26.3626 37.421 20.5163 36.2451 16.0379 34.1098C15.7584 33.9766 15.4253 34.0354 15.2089 34.255C14.9915 34.475 14.9378 34.8089 15.075 35.0862C17.1097 39.206 24.2753 42.0827 32.4993 42.0827C40.7266 42.0827 47.8926 39.2049 49.9251 35.0854C50.0616 34.8085 50.0071 34.4742 49.7901 34.2547Z" fill="#39B7D2"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="35" height="35" fill="white" transform="translate(15 14)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="feature-cards" id="feature-cards">
                        <div class="feature-card">
                            <div class="feature-card__figure">
                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="64" height="64" rx="32" fill="#24FF96" fill-opacity="0.1"/>
                                    <path d="M38.963 38.2833C40.7935 35.7387 41.9189 32.8147 42.2702 29.7283L32.0994 26.8362L21.9285 29.7283C22.2797 32.8146 23.4051 35.7387 25.2357 38.2833C27.018 40.7608 29.3834 42.7539 32.0994 44.0723C34.8152 42.7539 37.1807 40.7608 38.963 38.2833V38.2833Z" fill="#2CA48E"/>
                                    <path d="M32.0995 24.4765L42.3894 27.4025V22.6829L32.0995 19.7568L21.8096 22.6829V27.4025L32.0995 24.4765Z" fill="#2CA48E"/>
                                    <path d="M33.2344 13V17.7197L44.6592 20.9685V27.6282C44.6592 31.9618 43.3267 36.1047 40.8057 39.6091C38.8349 42.3484 36.2281 44.5609 33.2344 46.0435V51.0001C37.7551 49.2385 41.6349 46.2301 44.4908 42.2601C47.5708 37.9788 49.1989 32.9191 49.1989 27.6282V17.5397L33.2344 13Z" fill="#2CA48E"/>
                                    <path d="M30.9645 46.0434C27.9707 44.5608 25.3639 42.3483 23.3932 39.609C20.8722 36.1047 19.5397 31.9618 19.5397 27.6281V20.9684L30.9645 17.7196V13L15 17.5397V27.6281C15 32.919 16.6281 37.9787 19.7081 42.2601C22.5641 46.23 26.4439 49.2384 30.9645 51V46.0434Z" fill="#2CA48E"/>
                                </svg>
                            </div>
                            <div class="feature-card__meta">
                                <div class="feature-card__title">Güvenli Ödeme</div>
                                <div class="feature-card__description">
                                    % 100 Güvenli<br>
                                    iyzico & QNB Finansbank
                                </div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="feature-card__figure">
                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="64" height="64" rx="32" fill="#5D24FF" fill-opacity="0.1"/>
                                    <g clip-path="url(#clip0)">
                                        <path d="M47.6638 21.4735L26.2279 16.9371C25.321 16.7452 24.4221 17.3303 24.2302 18.2372L23.823 20.8544L48.5563 26.0883L48.9636 23.4712C49.1554 22.5646 48.5707 21.6654 47.6638 21.4735Z" fill="#805FB7"/>
                                        <path d="M38.6494 26.6433C38.399 25.7417 37.4567 25.2087 36.5554 25.4587L32.4861 26.5883L22.8929 24.5581L21.8379 29.5431L15.246 31.3727C14.3446 31.6227 13.8117 32.565 14.0617 33.4664L17.7766 46.8533C18.027 47.7546 18.9693 48.2879 19.8706 48.0375L41.18 42.1239C42.0813 41.8736 42.6143 40.9316 42.3643 40.0299L41.7267 37.7318L44.1166 38.2371C45.0235 38.4293 45.9224 37.8442 46.1143 36.9373L47.6263 29.7921L39.0177 27.9705L38.6494 26.6433ZM41.1103 33.4471L41.6373 30.9563C41.7165 30.5834 42.0863 30.3429 42.4591 30.4216L44.9499 30.949C45.3232 31.0281 45.5637 31.3975 45.485 31.7708L44.9579 34.2615C44.8788 34.6345 44.5091 34.8753 44.1361 34.7962L41.6454 34.2692C41.2718 34.1898 41.0312 33.82 41.1103 33.4471ZM15.6168 32.7086L21.5139 31.0726L35.4282 27.2113L36.9254 26.7953C36.9528 26.7879 36.9801 26.7845 37.0067 26.7845C37.1268 26.7845 37.2704 26.8633 37.3124 27.0142L37.4882 27.6473L38.039 29.632L16.1245 35.7133L15.3979 33.0959C15.3524 32.9316 15.4526 32.7541 15.6168 32.7086ZM41.028 40.4003C41.056 40.5019 41.0267 40.5859 40.9969 40.6385C40.9675 40.691 40.9107 40.7597 40.8092 40.7876L19.5001 46.7012C19.4732 46.7086 19.4455 46.7125 19.4189 46.7125C19.2988 46.7125 19.1552 46.6333 19.1132 46.4824L16.9464 38.674L38.8609 32.5923L40.1975 37.4082L41.028 40.4003Z" fill="#805FB7"/>
                                        <path d="M22.9434 40.9348C22.8411 40.5671 22.4573 40.35 22.0897 40.4519L19.601 41.1428C19.2337 41.2447 19.0163 41.6288 19.1185 41.9965L19.809 44.4848C19.9113 44.8525 20.2951 45.0696 20.6628 44.9673L23.1514 44.2768C23.5191 44.1749 23.7362 43.7907 23.6343 43.4231L22.9434 40.9348Z" fill="#805FB7"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="35" height="35" fill="white" transform="translate(14 15)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="feature-card__meta">
                                <div class="feature-card__title">Taksitli Ödeme</div>
                                <div class="feature-card__description">Tüm kredi kartlarına taksit imkanı</div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="feature-card__figure">
                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="64" height="64" rx="32" fill="#FFEA79" fill-opacity="0.1"/>
                                    <path d="M46.3365 40.023C45.7306 39.5723 44.8742 39.6982 44.4235 40.3039C44.1756 40.6371 43.9104 40.9639 43.6351 41.2753C43.1351 41.841 43.1882 42.705 43.7538 43.2051C44.014 43.4351 44.337 43.548 44.6589 43.548C45.037 43.548 45.4135 43.392 45.6837 43.0863C46.0097 42.7176 46.3238 42.3305 46.6173 41.9359C47.068 41.3302 46.9423 40.4736 46.3365 40.023Z" fill="#C2AB2D"/>
                                    <path d="M48.623 33.6114C47.8857 33.4508 47.1569 33.9187 46.9963 34.6565C46.9079 35.0623 46.8012 35.4689 46.6787 35.8651C46.4558 36.5866 46.86 37.3521 47.5813 37.575C47.7158 37.6165 47.8517 37.6363 47.9854 37.6363C48.5692 37.6363 49.1098 37.2593 49.2912 36.6723C49.4366 36.2021 49.5633 35.7195 49.6682 35.2381C49.8287 34.5003 49.3608 33.772 48.623 33.6114Z" fill="#C2AB2D"/>
                                    <path d="M39.7556 44.4017C39.3926 44.6043 39.0167 44.7937 38.6386 44.9645C37.9504 45.2753 37.6445 46.0851 37.9552 46.7732C38.1836 47.2788 38.6811 47.578 39.202 47.578C39.3902 47.578 39.5814 47.539 39.764 47.4565C40.2126 47.2539 40.6582 47.0294 41.0886 46.7891C41.7479 46.421 41.9839 45.5881 41.6158 44.9289C41.2478 44.2697 40.4149 44.0337 39.7556 44.4017Z" fill="#C2AB2D"/>
                                    <path d="M31.1328 20.5625V30.9337L26.1194 35.947C25.5855 36.481 25.5855 37.3466 26.1194 37.8805C26.3864 38.1475 26.7362 38.281 27.0862 38.281C27.4361 38.281 27.786 38.1475 28.053 37.8805L33.4668 32.4667C33.7232 32.2104 33.8672 31.8626 33.8672 31.5V20.5625C33.8672 19.8074 33.2551 19.1953 32.5 19.1953C31.7449 19.1953 31.1328 19.8074 31.1328 20.5625Z" fill="#C2AB2D"/>
                                    <path d="M48.6328 16.9395C47.8777 16.9395 47.2656 17.5515 47.2656 18.3066V22.103C44.0834 17.1123 38.5259 14 32.5 14C27.8256 14 23.431 15.8203 20.1256 19.1256C16.8203 22.431 15 26.8256 15 31.5C15 36.1744 16.8203 40.569 20.1256 43.8744C23.431 47.1797 27.8256 49 32.5 49C32.5116 49 32.5227 48.9986 32.5342 48.9983C32.5457 48.9986 32.5568 49 32.5684 49C33.0611 49 33.5587 48.9792 34.0475 48.9383C34.7999 48.8753 35.3588 48.2143 35.2958 47.4618C35.2327 46.7094 34.5726 46.1502 33.8193 46.2135C33.4061 46.2481 32.9853 46.2656 32.5684 46.2656C32.5568 46.2656 32.5457 46.2671 32.5342 46.2673C32.5227 46.2671 32.5116 46.2656 32.5 46.2656C24.3582 46.2656 17.7344 39.6418 17.7344 31.5C17.7344 23.3582 24.3582 16.7344 32.5 16.7344C37.7471 16.7344 42.5732 19.5312 45.2105 23.9805H41.4512C40.6961 23.9805 40.084 24.5926 40.084 25.3477C40.084 26.1028 40.6961 26.7148 41.4512 26.7148H45.625C46.4576 26.7148 47.2366 26.4808 47.8998 26.0755C47.9425 26.0511 47.9835 26.025 48.0226 25.9967C49.2124 25.2139 50 23.8675 50 22.3398V18.3066C50 17.5515 49.3879 16.9395 48.6328 16.9395Z" fill="#C2AB2D"/>
                                </svg>
                            </div>
                            <div class="feature-card__meta">
                                <div class="feature-card__title">Aynı Gün Kargo</div>
                                <div class="feature-card__description">Saat 14.00'a kadar verilen valfsiz ürün siparişleri aynı gün kargoda!</div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="feature-card__figure">
                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32Z" fill="#FF7979" fill-opacity="0.1"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.6543 19.9876C44.3824 20.8527 45.8085 23.0327 47.5965 26.0332H40.6543V19.9876ZM18.8669 26.2852C19.5969 26.2852 20.1267 26.6375 20.1267 27.4609C20.1267 28.1554 19.5647 28.7187 18.8705 28.7207H11.2598C10.5639 28.7207 10 29.285 10 29.9805C10 30.6763 10.5639 31.2402 11.2598 31.2402H22.5977C23.3 31.2402 23.8623 31.8038 23.8623 32.5C23.8623 33.1958 23.2984 33.7598 22.6026 33.7598H11.2598C10.5639 33.7598 10 34.3237 10 35.0195C10 35.7154 10.5639 36.2793 11.2598 36.2793H14.0312V40.0586C14.0312 40.7544 14.5952 41.3184 15.291 41.3184H17.8233C18.2748 43.542 20.2395 45.1816 22.5557 45.1816C24.8718 45.1816 26.8366 43.542 27.288 41.3184H40.0792C40.5306 43.542 42.4954 45.1816 44.8115 45.1816C47.1277 45.1816 49.0924 43.542 49.5438 41.3184H51.7402C52.4361 41.3184 53 40.7544 53 40.0586V32.5C53 28.8037 49.1013 28.5583 49.0977 28.5527H39.3945C38.6987 28.5527 38.1348 27.9888 38.1348 27.293V19.7344H15.291C14.5952 19.7344 14.0312 20.2983 14.0312 20.9941V23.7656H12.5195C11.8237 23.7656 11.2598 24.3296 11.2598 25.0254C11.2598 25.7212 11.8237 26.2852 12.5195 26.2852H18.8669ZM46.4446 38.7194C47.3465 39.6213 47.3465 41.0841 46.4446 41.986C44.9939 43.4367 42.502 42.4046 42.502 40.3525C42.502 38.3008 44.9939 37.2687 46.4446 38.7194V38.7194ZM24.1888 38.7194C25.0906 39.6213 25.0906 41.0841 24.1888 41.986C22.7381 43.4367 20.2461 42.4046 20.2461 40.3525C20.2461 38.3008 22.7381 37.2687 24.1888 38.7194V38.7194Z" fill="#CA3D3D"/>
                                </svg>
                            </div>
                            <div class="feature-card__meta">
                                <div class="feature-card__title">Kargonu Seç</div>
                                <div class="feature-card__description">3 farklı kargo firması seçeneği</div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="feature-card__figure">
                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="64" height="64" rx="32" fill="#16ABFE" fill-opacity="0.1"/>
                                    <g clip-path="url(#clip0)">
                                        <path d="M24.0083 31.6675C25.9762 31.6675 27.5768 29.256 27.5768 26.2919C27.5768 23.3284 25.9762 20.917 24.0083 20.917C22.0404 20.917 20.4395 23.3284 20.4395 26.2919C20.4395 29.256 22.0408 31.6675 24.0083 31.6675Z" fill="#39B7D2"/>
                                        <path d="M40.989 31.6675C42.9569 31.6675 44.5579 29.256 44.5579 26.2919C44.5579 23.3284 42.9569 20.917 40.989 20.917C39.0215 20.917 37.4209 23.3284 37.4209 26.2919C37.4209 29.256 39.0219 31.6675 40.989 31.6675Z" fill="#39B7D2"/>
                                        <path d="M49.7901 34.2547C49.5723 34.0351 49.2399 33.9752 48.9608 34.1095C44.4827 36.2451 38.6368 37.421 32.499 37.421C26.3626 37.421 20.5163 36.2451 16.0379 34.1098C15.7584 33.9766 15.4253 34.0354 15.2089 34.255C14.9915 34.475 14.9378 34.8089 15.075 35.0862C17.1097 39.206 24.2753 42.0827 32.4993 42.0827C40.7266 42.0827 47.8926 39.2049 49.9251 35.0854C50.0616 34.8085 50.0071 34.4742 49.7901 34.2547Z" fill="#39B7D2"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="35" height="35" fill="white" transform="translate(15 14)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="feature-card__meta">
                                <div class="feature-card__title">Kolay İade</div>
                                <div class="feature-card__description">15 gün içerisinde iade garantisi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="link-catalog">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="address">
                            <p>
                                <strong>E-Ticaret Ofisimiz</strong><br>
                                Yarımburgaz Mah. Halkalı Altınşehir İstanbul Cad. No:313/B PK:34303 Küçükçekmece/İST.
                            </p>
                            <p><strong>Tel: </strong>0850 255 0535</p>
                            <p><strong>E-Posta: </strong><a href="mailto:info@ambalajsepeti.com">info@ambalajsepeti.com</a></p>
                        </div>
                        <ul class="social">
                            <li><a href="javascript:"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="javascript:"><i class="lab la-twitter"></i></a></li>
                            <li><a href="javascript:"><i class="lab la-linkedin-in"></i></a></li>
                            <li><a href="javascript:"><i class="lab la-pinterest"></i></a></li>
                            <li><a href="javascript:"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <nav class="navigation-footer">
                            <ul class="navigation-footer-ul">
                                <li class="navigation-footer-item">
                                    <a href="javascript:" class="navigation-footer-link">
                                        <span class="label">Hakkımızda</span>
                                        <span class="description">Bizi tanımak ister misiniz?</span>
                                    </a>
                                </li>
                                <li class="navigation-footer-item">
                                    <a href="javascript:" class="navigation-footer-link">
                                        <span class="label">Banka Bilgileri</span>
                                        <span class="description">% 100 Güvenli. iyzico & QNB Finansbank Ödeme Sistemi</span>
                                    </a>
                                </li>
                                <li class="navigation-footer-item">
                                    <a href="javascript:" class="navigation-footer-link">
                                        <span class="label">Mesafeli Satış Sözleşmesi</span>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    </a>
                                </li>
                                <li class="navigation-footer-item">
                                    <a href="javascript:" class="navigation-footer-link">
                                        <span class="label">Gizlilik ve Güvenlik Politikası</span>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    </a>
                                </li>
                                <li class="navigation-footer-item">
                                    <a href="javascript:" class="navigation-footer-link">
                                        <span class="label">K.V.K.K Bilgilendirmesi</span>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    </a>
                                </li>
                                <li class="navigation-footer-item">
                                    <a href="javascript:" class="navigation-footer-link">
                                        <span class="label">Ödeme ve Teslimat</span>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    </a>
                                </li>
                                <li class="navigation-footer-item">
                                    <a href="javascript:" class="navigation-footer-link">
                                        <span class="label">Garanti ve İade</span>
                                        <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="{{'images/upload/kartlogolari.png'}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <span>© 2021. Tüm Hakları Saklıdır.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection

