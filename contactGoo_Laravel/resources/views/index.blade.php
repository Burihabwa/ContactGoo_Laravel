
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <!--<link rel="stylesheet" href="all.css">-->
        <link rel="stylesheet" href="{{ asset('assets/css/styleindex.css')}}">
        <style>
            .pointer {cursor: pointer;}
        </style>

    </head>


    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" style="height: 30px; width: 30px;" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 30 30">
                    <path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"></path>
                    </svg>
                    <img src="" alt="">
            </a>
            <a class="navbar-brand pointer" onclick="fetchAllContact()">
            <img src="{{asset('assets/imag/users.png')}}" />
                <span class="ml-2">Contact</span>
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
        <div class="">

            <div class="row height d-flex justify-content-center align-items-center">
            <div class="">
                <div class="form">
                <i class="fa fa-search"></i>
                <input type="text" id="filter"  class="form-control form-input" placeholder="Cherche Contact">
                <span class="left-pan"><i class="fa fa-microphone"></i></span>
                </div>

            </div>

            </div>

        </div>
        </div>
        <div class="col-12 col-md-5 col-lg-5 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="mr-3 mt-1">

            </div>
            <div class="dropdown">
                <button  class="btn dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                <img style="border-radius: 50%; width: 30px; height: 30px;" src="{{asset('assets/imag/esp.jpeg')}}" alt="">

                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Messages</a></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">

                    <ul class="nav flex-column">

                        <li class="nav-item dropdown nouveau">
                        <a class="nav-link dropdown-toggle active"  href="index.php" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/imag/add-user.png')}}"  height="30px" width="30px" />
                            <span class="ml-2">Nouveau</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Creer Contact</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Contact existant</a></li>
                        </ul>
                        </li>
                        <li class="nav-item contact pointer">
                        <a class="nav-link" onclick="fetchAllContact()" >
                        <img src="{{asset('assets/imag/users.png')}}" />
                        <span class="ml-2">Contacts</span>
                        </a>
                        </li>
                        <li class="nav-item frequen pointer">
                        <a class="nav-link" onclick="fetchAllFreq()">
                        <img src="{{asset('assets/imag/history.png')}}" height="30px" width="30px"/>
                        <span class="ml-2">Frequents</span>
                        </a>
                        </li>

                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="Contact">


        <!-- creation du contact-->
        <div class="">

            <form action="{{ route('store')}}" method="POST" class="needs-validation" enctype="multipart/form-data"  novalidate>
                @csrf
                <div class="row g-2 ml-5 pl-5 mr-5 pr-5">
                <div  id="selectedBanner" class="mt-3">
                <img style="border-radius: 50%; border: 1px solid cyan; padding: 3px; width: 150px; height: 150px;" src="{{asset('assets/imag/user.png')}}" alt="">
                </div>
                <label for="img" style="margin-left: 120px; margin-top: -40px;"><i style="border-radius:50%" class='fa fa-edit fa-2x bg-Info p-2'></i></label>
                <div class="form-group">
                <input
                    type="file"
                    class="form-control"
                    id="img"
                    placeholder="Enter password"
                    name="profil"
                    hidden
                />
                </div>

                <div class="col-md-6 pr-5">
                <label for="validationCustom01" class="form-label ">Nom</label>
                <div class="mt-2.5">
                    <input type="text" name="nom" id="validationCustom01"  class="form-control" required>
                </div>
                </div>
                <div class="col-md-6 pr-5">
                <label for="validationCustom02" class="form-label">Prenom</label>
                <div class="mt-2.5">
                    <input type="text" name="prenom" id="validationCustom02" class="form-control" required>
                </div>
                </div>
                <div class="col-md-12 pr-5">
                <label for="validationCustom03" class="form-label">Entreprise</label>
                <div class="mt-2.5">
                    <input type="text" name="entreprise"  id="validationCustom03" class="form-control"  required>
                </div>
                </div>
                <div class="col-md-12 pr-5">
                <label for="validationCustom04" class="form-label">Email</label>
                <div class="mt-2.5">
                    <input type="email" name="email" id="email" id="validationCustom04" class="email form-control" pattern="[a-z0-9]+@[a-z0-9]+\.[a-z]{2,4}$" required>
                </div>
                </div>
                <div class="col-md-12 pr-5">
                <label for="validationCustom05" class="form-label">Télephone</label>
                <div class="select-box">
                    <div class="selected-option">
                        <div>
                            <span class="iconify" data-icon="flag:bi-4x3"></span>
                            <strong class="">+257</strong>
                        </div>
                        <input type="tel" name="tel" placeholder="Phone Number" id="validationCustom06" required>
                    </div>
                    <div class="options pr-5">
                        <input type="text" class="search-box form-control" placeholder="Search Country Name">
                        <ol>
                        </ol>
                    </div>
                </div>
                </div>
                <div class="col-md-12 pr-5">
                <label for="message" class="form-label">Description</label>
                <div class="mt-2.5">
                    <textarea name="description" id="validationCustom07" rows="4" class="form-control"></textarea>
                </div>
                </div>
            <div class="d-grid gap-2 col-md-12 mx-auto">
                <button type="submit" name="envoye" class="btn btn-primary">Enregistrer</button>
            </div>
            </div>

            </form>
        </div>

            </main>
        </div>
    </div>
    <script>
    var selDiv = "";
    var storedFiles = [];
    $(document).ready(function () {
        $("#img").on("change", handleFileSelect);
        selDiv = $("#selectedBanner");
    });

    function handleFileSelect(e) {
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        filesArr.forEach(function (f) {
        if (!f.type.match("image.*")) {
            return;
        }
        storedFiles.push(f);

        var reader = new FileReader();
        reader.onload = function (e) {
            var html =
            '<img src="' +
            e.target.result +
            "\" data-file='" +
            f.name +
            "' style=' border: 1px solid cyan; border-radius: 50%; padding: 3px;' class='avatar rounded lg' alt='Category Image' height='150px' width='150px'>";
            selDiv.html(html);
        };
        reader.readAsDataURL(f);
        });
    }



    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script async defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <!--<script src="all.js"></script> -->
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script>
        console.log("hello word");
    (function () {
    'use strict'


    var forms = document.querySelectorAll('.needs-validation')


    Array.prototype.slice.call(forms)
    .forEach(function (form) {
        form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
        }, false)
    })
    })()

        function fetchAllContact() {
            $.ajax({
            url: '{{ route('fetchAll') }}',
            method: 'GET',
            success: function(reponse) {

                loadMain(reponse)
                //$('#Contact').html(reponse)
                /*console.log(reponse);
                console.log('success')*/
            }
            });
            //console.log('ggg')
        }
        function fetchAllFreq(){
            $('#Contact').html('<div></div>')
        }

        $("#filter").on('keyup', function(event){
            let searchValue = $(this).val();
            console.log(searchValue);

            $.ajax({
                method: "GET",
                url : `selectItem/${searchValue}`,
                success : function(data){
                    loadMain(data)
                    console.log(data)
                },
                error : function(err){
                    console.log(err)
                }
            })
        })


        function loadMain(data){

            let table = ``
            let verif=false;
            for(let item of data){
                verif = true;
                table += `
                <div class="card mb-2 cont" >
                <div class="row g-0">
                <div class="col-md-2">
                    <center>
                    <img src="storage/images/${item.profil}" height="80px" style="border-radius: 50%;" width="80px" class="p-1" alt="...">
                    </center>
                    </div>
                <div class="col-md-10">
                    <div class="card-body">
                    <h5 class="card-title">${item.nom} ${item.prenom}</h5>
                    <p class="card-text">${item.tel}</p>
                    </div>
                </div>
                </div>
            </div>`
            }

            if(verif){
                $("#Contact").html(table)
            }else{
                $("#Contact").html('<h1 class="text-center text-secondary my-5"><h1 class="text-center text-secondary my-5">Aucun  contact present dans la base de donnée !</h1></h1>')

            }
        }

    </script>

    </body>
    </html>
