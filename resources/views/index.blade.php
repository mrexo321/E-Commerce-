@extends('layouts.main')


@section('container')
    <section class="first_section">
        @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @auth
        <h1>Selamat Datang {{ auth()->user()->username }}</h1>
        @endauth

        <div class="inner_first_section md:flex justify-center items-center md:w-full justify-items-center p-16">
            <div class="box_1">
                <img class="" src="{{ asset("images/900p.jpg") }}" alt="">
            </div>

            <div class="box_2 ml-8">
                <div class="inner_box2 flex p-12 items-center">
                    <div class="text_wrapper">
                        <p class="">Starts from IDR 189.000</p>
                        <h2 class="my-1.5">Brand New Every Day</h2>
                        <p>Order by 4PM for same-day delivery in Jabodetabek Area </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="catalogue">
        <div class="collections p-8">
            <div class="collections_Upper">
                <ul class="flex justify-center">
                    <li class="mx-4">
                        <a href="#" class="underline">Mouse RGB</a>
                    </li>
                    <li>
                        <a href="#" class="underline">Keyboard Mechanical</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container mx-auto grid-container flex overflow-x-scroll">
        <div class="product-grid-outer">
            <div class="slider flex">
                <div class="product-item mr-4">
                    <div class="product-image">
                        <a href=""><img style="max-width: 300px" class="" src="{{ asset('images/900p.jpg') }}" alt=""></a>
                    </div>
                    <div class="product-description p-4 bg-gray-300 border-b-2 border-gray-400">
                        <a href="">
                            <p class="product-name">Motherboard</p>
                            <span class="product-price text-gray-600">Rp.69000</span>
                        </a>
                    </div>
                </div>
                <div class="product-item mr-4">
                    <div class="product-image">
                        <a href=""><img style="max-width: 300px" class="" src="{{ asset('images/900p.jpg') }}" alt=""></a>
                    </div>
                    <div class="product-description p-4 bg-gray-300 border-b-2 border-gray-400">
                        <a href="">
                            <p class="product-name">Motherboard</p>
                            <span class="product-price text-gray-600">Rp.69000</span>
                        </a>
                    </div>
                </div>
                <div class="product-item mr-4">
                    <div class="product-image">
                        <a href=""><img style="max-width: 300px" class="" src="{{ asset('images/900p.jpg') }}" alt=""></a>
                    </div>
                    <div class="product-description p-4 bg-gray-300 border-b-2 border-gray-400">
                        <a href="">
                            <p class="product-name">Motherboard</p>
                            <span class="product-price text-gray-600">Rp.69000</span>
                        </a>
                    </div>
                </div>
                <div class="product-item mr-4">
                    <div class="product-image">
                        <a href=""><img style="max-width: 300px" class="" src="{{ asset('images/900p.jpg') }}" alt=""></a>
                    </div>
                    <div class="product-description p-4 bg-gray-300 border-b-2 border-gray-400">
                        <a href="">
                            <p class="product-name">Motherboard</p>
                            <span class="product-price text-gray-600">Rp.69000</span>
                        </a>
                    </div>
                </div>
                <div class="product-item mr-4">
                    <div class="product-image">
                        <a href=""><img style="max-width: 300px" class="" src="{{ asset('images/900p.jpg') }}" alt=""></a>
                    </div>
                    <div class="product-description p-4 bg-gray-300 border-b-2 border-gray-400">
                        <a href="">
                            <p class="product-name">Motherboard</p>
                            <span class="product-price text-gray-600">Rp.69000</span>
                        </a>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image">
                        <a href=""><img style="max-width: 300px" class="" src="{{ asset('images/900p.jpg') }}" alt=""></a>
                    </div>
                    <div class="product-description p-4 bg-gray-300 border-b-2 border-gray-400">
                        <a href="">
                            <p class="product-name">Motherboard</p>
                            <span class="product-price text-gray-600">Rp.69000</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits md:flex p-20 mt-8 py-24 " style="background-color: #f5f0e3">
        <div class="text-row">
            <div class="text-content">
                <svg class="my-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16">
                    <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                </svg>
                <span class="font-bold font-mono">Buying Components Make it Easy</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis nihil earum ut deleniti reiciendis, totam quod sapiente error accusantium?</p>
            </div>
        </div>
        <div class="text-row">
            <div class="text-content">
                <svg class="my-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                    <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                    <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                </svg>
                <span class="font-bold font-mono">Buying Components Make it Easy</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis nihil earum ut deleniti reiciendis, totam quod sapiente error accusantium?</p>
            </div>
        </div>
        <div class="text-row">
            <div class="text-content">
                <svg class="my-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-keyboard" viewBox="0 0 16 16">
                    <path d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h12zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2z"/>
                    <path d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75v-.5zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-.5zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75v-.5zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75v-.5zm-2 0A.25.25 0 0 1 2.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75v-.5zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2 0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75v-.5zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75v-.5zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75v-.5zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75v-.5zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25v-.5z"/>
                  </svg>
                <span class="font-bold font-mono">Buying Components Make it Easy</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis nihil earum ut deleniti reiciendis, totam quod sapiente error accusantium?</p>
            </div>
        </div>
    </section>

    <section class="company-description flex ">
        <div class="first-desctiption border-r-2 border-gray-400">
            <div class="text-block">
                <div class="text-block-inner p-12 flex">
                    <div class="text-content">
                        <span class="text-sm">Faith Components - Computer Store</span>
                        <div class="content-description mt-4">
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto pariatur deleniti labore expedita nesciunt laboriosam fugiat quis minus repellendus deserunt nulla consequatur porro omnis laborum eos in iure numquam eaque, aliquam cumque officia ducimus dolor at qui! Non aliquid hic facere illum expedita iure similique dignissimos at asperiores minima eum ipsa laborum quae architecto, ducimus, repellendus provident eligendi quaerat reprehenderit!</p>
                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, amet. Porro eligendi ipsum officiis vitae rerum, delectus repellat? Expedita, placeat!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-description">
            <div class="text-block">
                <div class="text-block-inner p-12 flex">
                    <div class="text-content">
                        <span class="text-sm">Faith Components - Computer Store</span>
                        <div class="content-description mt-4">
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto pariatur deleniti labore expedita nesciunt laboriosam fugiat quis minus repellendus deserunt nulla consequatur porro omnis laborum eos in iure numquam eaque, aliquam cumque officia ducimus dolor at qui! Non aliquid hic facere illum expedita iure similique dignissimos at asperiores minima eum ipsa laborum quae architecto, ducimus, repellendus provident eligendi quaerat reprehenderit!</p>
                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, amet. Porro eligendi ipsum officiis vitae rerum, delectus repellat? Expedita, placeat!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="whatsapp" style="position: fixed; right:0; bottom:0; left:200;">
        <a href="https://wa.me/08888730173?text=Bajingan%20Lo%20Asu"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
          </svg></a>
    </div>


@endsection
