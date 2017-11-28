@extends('layouts.master')

@section('title')
    Contact
@endsection 


@section('styles')
    <link rel="stylsheet" href={{ URL::secure('src/css/main.css') }}>
@endsection


@section('content')
    @include('includes.info-box')
    <form action="" method="post" id="contact-form">
        <div class="input-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name"/>
        </div>
        <div class="input-group">
            <label for="email">Your E-Mail</label>
            <input type="text" name="email" id="email"/>
        </div>
        <div class="input-group">
            <label for="name">Subject</label>
            <input type="text" name="subject" id="subject"/>
        <div>
        <div class="input-group">
            <label for="name">Your Message</label>
            <textarea name="message id="message" rows="10"></textarea>
        <div>
        <button type="submit" class="btn">Submit Message</button>
        <input type="hidden" value="{{ Session::token() }}" name="_token" />
    </form>
@endsection