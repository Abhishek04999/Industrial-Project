

<section id="footer">


    <img id="border2" src="{{asset('storage/media/border2.png')}}" alt="">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4"><img id="description" src="{{asset('storage/media/logo.png')}}" alt="">
                <p id="foot-dec">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, quo mollitia dolor ipsum velit, perspiciatis officiis, eaque unde quibusdam ducimus esse sapiente. Facilis cumque reiciendis possimus ipsum, voluptates delectus blanditiis.</p>
            </div>
            <div class="col-md-4 ">
                <p id="company">Indigo infraprojects pvt. ltd.</p>
                <p><i class="bi bi-building"> : Lorem ipsum dolor sit amet.</i></p>
                <p><i class="bi bi-phone"></i> : Lorem, ipsum.</p>
                <p><i class="bi bi-telephone"></i> : Lorem, ipsum dolor.</p>
                <p><i class="bi bi-geo-alt"></i> : Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="col-md-4">
                <p id="footer-query">Query Form</p>

                <form action="{{ route('send.whatsapp') }}" method="POST">
                    @csrf
                    <input type="text"  name="email" class="form-control form-control-sm mb-2 " placeholder="E-mail">
                    <input type="text"  name="name" class="form-control form-control-sm mb-2 " placeholder="Name">
                    <input type="text"  name="query" class="form-control form-control-sm mb-2" placeholder="Query">
                    <button type="submit"  class="btn btn-success form-control btn-sm">Submit query</button>
                </form>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <img class="media" src="{{asset('storage/media/instagram-icon.png')}}" alt="">
                <img class="media" src="{{asset('storage/media/twitter-icon.png')}}" alt="">
                <img class="media" src="{{asset('storage/media/linkedin-icon.png')}}" alt="">
                <img class="media" src="{{asset('storage/media/snapchat-icon.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

