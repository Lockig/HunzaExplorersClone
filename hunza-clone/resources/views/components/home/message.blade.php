@extends('partials.layout')

@section('css')
    <link href="{{asset('assets/css/component/home/message.css')}}" rel="stylesheet" type="text/css"/>
@endsection


@section('content')
    <div id="content" class="w-100 position-relative z-0 has-content">
        <div class="content__wrapper">
            <div class="section__group">
                <div class="section">
                    <div class="section__wrapper">
                        <div class="content__wrapper has-content">
                            <div class="row">
                                <div class="col-12 col-lg-8 left-panel">
                                    <div class="column--inner">
                                        <h1>Message from the CEO</h1>
                                        <p>
                                            <a class="text-black" href="{{route('about-us')}}" target="_blank">Hunza
                                                Explorer</a>
                                            finds its roots in 2003 when it was originally created with the purpose of
                                            introducing
                                            <a class="text-black" href="{{route('about-us')}}"
                                               target="_blank">Pakistan</a>
                                            and welcoming visitors from around the world. Hunza Explorers Treks and
                                            <a class="text-black" href="{{route('about-us')}}" target="_blank">Tours</a>
                                            has carried on this more than 10 years mission as the Hunza Explorers
                                            Pakistan
                                            inbound specialists, introducing this beautiful country to customers the
                                            world
                                            over.
                                        </p>
                                        <p>
                                            The Hunza Explorers, with the travel industry as a basis, endeavors to
                                            promote
                                            exchange and interaction between people domestically and abroad, while
                                            developing
                                            new fields as a part of this Multicultural Communication Business. We at
                                            Hunza
                                            Explorers are working very hard to expand its business and increase its
                                            position
                                            in
                                            the global market to No. 1 in Asia. We consider it our mission, as a core
                                            component
                                            of the Hunza Explorers and this vision, to exceed our original purpose by
                                            promoting
                                            cultural exchange between Pakistan and the peoples of the world and
                                            contribute
                                            to
                                            the realization of Pakistan as a tourism-oriented country.
                                        </p>
                                        <p>
                                            As I take stock of what has transpired over the years, I am extremely proud
                                            of
                                            our
                                            achievements since 2003. The future looks even more promising, with plans
                                            for
                                            growth
                                            fully underway. We have successfully transitioned from a local Hunza based
                                            one
                                            branch operation to become a respected company garnering business from
                                            across
                                            the
                                            nation whilst earning our clients trust and respect.
                                        </p>
                                        <p>
                                            We have resolved to provide our clients extraordinary levels of customer
                                            service. In
                                            short, for nearly a decade we’ve given all our customers reason to consider
                                            Hunza
                                            Explorers as their only choice in travel. Customer satisfaction is the
                                            hallmark
                                            by
                                            which we measure our performance, and we hold ourselves, as do our clients,
                                            to
                                            the
                                            highest standards of quality.
                                        </p>
                                        <p>
                                            Among our most important assets is the extensive knowledge base, deep-rooted
                                            professionalism and unwavering commitment of our highly-qualified, diverse
                                            STAFF.
                                            Our team of travel specialists share a passion for creating the most
                                            inspiring
                                            experiences for every client. This requires a rare blend of professionalism
                                            and
                                            knowledge, patience and understanding, and most of all…creativity and
                                            caring.
                                        </p>
                                        <p>
                                            Karim Tajik
                                            <br>
                                            President and CEO
                                            <br>
                                            Hunza Explorers
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 right-panel">
                                    <div class="column--inner">
                                        <div class="image">
                                            <img src="{{asset('assets/images/user/user.jpg')}}" alt="images"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-space"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
