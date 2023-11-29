@extends('layouts1.main')

@section('Main-section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @push('title')
    <title>Quiz delete</title>
    @endpush

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <section id="banner">
        <div class="container pt-5  ">
            <div class="row">
                <div class="col-md-8">
                    <h4>E-learning</h4>
                    <p>E-learning is a method of obtaining knowledge through digital or, web-enabled gadgets like computers, laptops, tablets, or smartphones. The technique of online learning or e-learning enables remote access to systematic learning or any desired course through a digital device aided by stable internet connectivity. With e-learning, a learner can digitally access learnings or insights of any chosen subject from anywhere across the world.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('storage/media/about-us.png')}}" class="img-fluid" id="img1" alt="">
                </div>
            </div>
        </div>
        <img id="border1" src="{{asset('storage/media/border1.png')}}" alt="">
    </section>


    <section id="service">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('storage/media/c.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">C Language</h5>
                            <p class="card-text" style="text-align: justify">C is a general-purpose computer programming language. It was created in the 1970s by Dennis Ritchie, and remains very widely used and influential. By design, C's features cleanly reflect the capabilities of the targeted CPUs. It has found lasting use in operating systems, device drivers, protocol stacks . </p>
                            <a href="{{ url('/ucours?q=' . base64_encode('C++')) }}" class="btn btn-primary">More details...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/media/python.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Python</h5>
                                <p class="card-text" style="text-align: justify">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, including structured (particularly procedural), object.</p>
                                <a href="{{ url('/ucours?q=' . base64_encode('Python')) }}" class="btn btn-primary">More details...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/media/ruby.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ruby</h5>
                                <p class="card-text" style="text-align: justify">Ruby is a pure Object-Oriented language developed by Yukihiro Matsumoto. Everything in Ruby is an object except the blocks but there are replacements too for it i.e procs and lambda. The objective of Ruby’s development was to make it act as a sensible buffer between human programmers .</p>
                                <a href="ruby.php" class="btn btn-primary">More details...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <Section id="testi">
        <div class="container">
            <h2>Welcome</h2>
            <div class="row">
                <div class="col-md-3">
                    <img id="main-png" src="{{asset('storage/media/i4.png')}}" alt="">
                    <p><span> comments</span> : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias! Lorem ipsum dolor sit amet consectetur adipisicing elit. At!</p>
                    <p><span>company</span> : IBM pvt. ltd.</p>
                    <p><span>Date</span> : 27/11/2022</p>
                </div>
                <div class="col-md-3">
                    <img id="main-png" src="{{asset('storage/media/i5.png')}}" alt="">
                    <p><span> comments</span> : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias! Lorem ipsum dolor sit amet consectetur adipisicing elit. At!</p>
                    <p><span>company</span> : IBM pvt. ltd.</p>
                    <p><span>Date</span> : 27/11/2022</p>
                </div>
                <div class="col-md-3">
                    <img id="main-png" src="{{asset('storage/media/i4.png')}}" alt="">
                    <p><span> comments</span> : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias! Lorem ipsum dolor sit amet consectetur adipisicing elit. At!</p>
                    <p><span>company</span> : IBM pvt. ltd.</p>
                    <p><span>Date</span> : 27/11/2022</p>
                </div>
                <div class="col-md-3">
                    <img id="main-png" src="{{asset('storage/media/i5.png')}}" alt="">
                    <p><span> comments</span> : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias! Lorem ipsum dolor sit amet consectetur adipisicing elit. At!</p>
                    <p><span>company</span> : IBM pvt. ltd.</p>
                    <p><span>Date</span> : 27/11/2022</p>
                </div>
            </div>
        </div>
    </Section>





@endsection
