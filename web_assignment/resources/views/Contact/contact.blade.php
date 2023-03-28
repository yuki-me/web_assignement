@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('contant/custome-style/contact/contact.css') }}">

@section('content')
    <div class="contactMail">
        <form action="">
            <span>Leave a Message</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" />
            <input type="text" placeholder="Your Email" />
            <input type="text" placeholder="Subject" />
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button>Submit</button>
        </form>

        <div class="people">
            <div class="single_people">
                <div class="people_image">
                    <img src="../img/People/Boss Pheak1.jpg" alt="" />
                </div>
                <div class="people_text">
                    <span>Choeun Sopheak</span>
                    <h4>Team Leader</h4>
                    <p>
                        Phone: 097 566 8483 <br />
                        081 642 137
                    </p>
                    <p>Email: N/A</p>
                </div>
            </div>

            <div class="single_people">
                <div class="people_image">
                    <img src="../img/People/Boss Sin.jpg" alt="" />
                </div>
                <div class="people_text">
                    <span>Thorn Rasin</span>
                    <h4>Co-Leader</h4>
                    <p>Phone: N/A</p>
                    <p>Email: N/A</p>
                </div>
            </div>

            <div class="single_people">
                <div class="people_image">
                    <img src="../img/People/Me.jpg" alt="" />
                </div>
                <div class="people_text">
                    <span>Khen Sophanit</span>
                    <h4>រាស្រ្ត</h4>
                    <p>Phone: 096 651 61915</p>
                    <p>Email: sophanit99khen@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
@endsection
