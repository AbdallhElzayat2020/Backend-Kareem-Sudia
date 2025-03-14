@extends('Dashboard.layouts.master')
@section('title_dashboard', 'Home Page')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Welcome <span class="text-primary">{{Auth::user()->name}}</span> Your Free trail start 14 Day</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Special Questions </h4>
                        </div>
                        <div class="card-body">
                            <div id="accordion">
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse"
                                         data-target="#panel-body-1" aria-expanded="true">
                                        <h4>Question 1</h4>
                                    </div>
                                    <div class="accordion-body collapse show" id="panel-body-1"
                                         data-parent="#accordion">
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse"
                                         data-target="#panel-body-2">
                                        <h4>Question 2</h4>
                                    </div>
                                    <div class="accordion-body collapse" id="panel-body-2"
                                         data-parent="#accordion">
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-header" role="button" data-toggle="collapse"
                                         data-target="#panel-body-3">
                                        <h4>Question 3</h4>
                                    </div>
                                    <div class="accordion-body collapse" id="panel-body-3"
                                         data-parent="#accordion">
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
