@extends('layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div id= "lets-work" class="card border-0">Let's work together!</div>
                        <p>Have a project in mind or need assistance? 
                            Feel free to reach out by filling in the form below. </p>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-light" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.sendmail') }}" method="POST" class="row g-3">
                            @csrf

                            <div class="col-md-6">
                                <label for="name"></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name*" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email"></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email*" required>
                            </div>

                            <div class="col-md-12">
                                <label for="subject"></label>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject*" required>
                            </div>

                            <div  class="col-md-12">
                                <label for="message"></label>
                                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter your message..." required></textarea>
                            </div>

                            <div id="spinner" class="spinner" style="display: none;">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                             </div>

                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



