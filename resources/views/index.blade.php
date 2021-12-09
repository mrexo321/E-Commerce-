@extends('layouts.main')


@section('container')
    <section class="first_Section flex w-full">
        <div class="inner_First_Section flex justify-center m-8">
            <div class="block w-1/2">
                <img class="" src="{{ asset("images/900p.jpg") }}" alt="">
            </div>
            <div class="block_2 w-1/2 flex items-center p-8">
                <div class="flower_Wrapper ">
                    <div class="flower_Price">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, nulla!</span>
                    </div>
                    <div class="flower_Name">
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, exercitationem?</span>
                    </div>
                    <div class="flower_Description">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsam?</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection