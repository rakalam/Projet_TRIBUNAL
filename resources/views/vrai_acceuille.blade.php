@extends("fixe_dossier.iface")

@section("contenu")
<link href="{{asset('css/soutien.css')}}" rel="stylesheet">
<style>
    #txt span{
        font-size: 2em;
        font-weight: bold
    }
    #txt small{
        font-style: italic;
        font-weight: bold
    }

</style>

<div class="boite">

    <div class=" d-flex">

        <div class="col-7 d-block ">
            <div class="col-9 d-flex p-5" style="color: rgb(3, 33, 53)">
                   <div class=" me-2 mt-2" style="font-size: 0px; background-color:rgb(3, 33, 53);width:3px;height:85px ">
                       x
                   </div>
                   <div id="txt">
                    <p><span>IRSA Télépaiement</span> <br>
                         <small>Nouveaux plateforme pour declarer <br> et payer vos IRSA</small><br>

                   </div>

            </div>
            <div class="col-9 d-flex align-items-center p-5 petit_logo">
                    <div class=" me-4">
                    <img src="{{asset('image/OIP.jfif')}}" width="40" alt="">
                    </div>
                    <div style="color: rgb(3, 33, 53)">
                    <b>
                        MINISTER DES FINANCES ET DU BUDGET<br>
                        SECTRETARIAT GENERAL<br>
                        DIRECTION GENERALE DES IMPOTS
                    </b>
                    </div>
            </div>
            <div class="col-7  art" style="margin-top: 2em; padding:2em ">
                <br>
                <p class="h5">Simple notion via Article</p>

                <p>
                    Sous réserve de conventions internationales, bilatérales
                    ou multilatérales, sont imposables à
                    l‟impôt sur les revenus, sauf s‟ils en sont expressément exonérés par les dispositions du présent Code, tous les
                    revenus de quelque nature qu‟ils soient
                </p>

                <a href="{{asset('code_impots.pdf')}}" class="btn btn text-white" style="background-color: rgb(11, 143, 55)">
                    <i class=" fa fa-paper-plane"> </i> &nbsp;
                    <b>code des Impôts</b>
                </a>
            </div>

        </div>



        <div class=" col-5 p-3" style="margin-left: 2em">

            <!-- PAYEUR -->
            <div  class="div_payeur ">
                <div class=" d-block rounded col-10  bg-white" style="margin-top:4em;box-shadow:1px 1px -1558px rgb(255, 255, 255)">
                                        <!-- en tete formulaire -->
                                            <div class=" p-3 d-flex align-items-center text-white" style="background-color: rgba(3, 33, 53, 0.877) ">
                                                <p class="h5">Connexion PAYEUR
                                                </p>

                                                <div class="bAdmin">
                                                    <span  style="background-color:white;
                                                    color:rgb(11, 143, 55);
                                                    margin-left:14em"
                                                    class=" btn btn-sm ">
                                                    &nbsp; Admin &nbsp;
                                                    <i class="fa fa-angle-double-right"></i>
                                                    </span>
                                                </div>

                                            </div>

                                    <!-- Formulaire -->
                                    <div class=" p-4">
                                        <form method="post" action="{{route('aut')}}">
                                                    <p style="color: rgb(97, 97, 97)">Veuillez connecter au tant que <strong>Payeur</strong></p>

                                                    <div class="rs_ms">
                                                        @if(session('error'))

                                                                <div class=" text-danger" id="message">
                                                                <p>
                                                                    {{session('error')}}
                                                                </p>
                                                                </div>
                                                        @endif
                                                    </div>

                                                    @csrf
                                                    <!-- nif input -->
                                                    <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                                                        <i class="fa fa-user me-2" style="color:rgb(175, 175, 175)"></i>
                                                        @if(session('NIF'))
                                                            <input type="text"  required name="nif" value="{{session('NIF')}}" class="form-control" />
                                                         @else
                                                            <input type="text"  required name="nif" placeholder="NIF" class="form-control" />
                                                        @endif

                                                    </div>



                                                    <!-- mot de passe input -->

                                                    <div class="col-12 mt-3 d-flex align-items-center ">
                                                        <i class="fa fa-key me-2" style="color: rgb(175, 175, 175)"></i>
                                                        @if(session('MDP'))
                                                             <input type="password"  required name="pass" value="{{ session('MDP') }}" class="form-control" />
                                                         @else
                                                             <input type="password"  required name="pass" placeholder="mot de passe" class="form-control" />
                                                        @endif
                                                    </div>

                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" style="background-color:rgb(11, 143, 55);
                                                                                        color:white ;
                                                                                        border:none;
                                                                                        padding-left:1.2em;
                                                                                        padding-right:1.2em;
                                                                                        padding-top:0.5em; padding-bottom:0.5em;"
                                                                class=" mt-4">
                                                                <i class="fab fa-connectdevelop"></i>
                                                                &nbsp; connecter
                                                        </button>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <div class=" pt-3 " style="  cursor: pointer;"  onclick="document.getElementById('id01').style.display='block'">
                                                        mot de passe oublier&nbsp;<i class="fa fa-question"></i>
                                                        </div>
                                                    </div>
                                        </form>

                                                    <div class=" mt-4 bg-body-secondary ">
                                                            <p class="h6 p-2"> <i class=" fab fa-keycdn"></i>&nbsp;&nbsp; Visualisé Bien</p>
                                                            <div class=" p-2" style="background-color: rgb(245, 245, 241);color: rgb(97, 97, 97)">
                                                                <p > Si vous êtes un <span style="font-weight:bold">Payeur</span> ou bien <br>
                                                                    <span style="font-weight:bold">Utilisateur</span> alors ...
                                                                    <h6> Vous pouvez CONNECTER</h6>

                                                                </p>
                                                            </div>

                                                    </div>

                                    </div>
                </div>

            </div >


             <!-- admin -->
            <div  class="div_admin " style="display: none">
                <div class=" d-block rounded col-10  bg-white" style="margin-top:4em;box-shadow:1px 1px -1558px rgb(255, 255, 255)">
                                        <!-- en tete formulaire -->
                                            <div class=" p-3 d-flex align-items-center text-white" style="background-color: rgb(11, 143, 55) ">
                                                <p class="h5">Connexion  ADMIN
                                                </p>

                                                <div class="bpayeur">
                                                    <span  style="background-color:white;
                                                    color:rgb(11, 143, 55);
                                                    margin-left:14em"
                                                    class=" btn btn-sm ">
                                                    &nbsp; Payeur &nbsp;
                                                    <i class="fa fa-angle-double-right"></i>
                                                    </span>
                                                </div>

                                            </div>

                                    <!-- Formulaire -->
                                    <div class=" p-4">
                                        <form method="post" action="" name="F" >
                                                    <p style="color: rgb(97, 97, 97)">Veuillez connecter au tant qu' <strong>Admin</strong></p>

                                                    @csrf
                                                    <!-- nif input -->
                                                    <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                                                        <i class="fa fa-user me-2" style="color:rgb(175, 175, 175)"></i>
                                                        <input type="text"  placeholder="identifiant" required name="fi" class="form-control" />
                                                    </div>


                                                    <!-- mot de passe input -->

                                                    <div class="col-12 mt-3 d-flex align-items-center ">
                                                        <i class="fa fa-key me-2" style="color: rgb(175, 175, 175)"></i>      <input type="password"  required name="pass" placeholder="mot de passe" class="form-control" />

                                                    </div>

                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" style="background-color:rgb(11, 143, 55);
                                                                                        color:white ;
                                                                                        border:none;
                                                                                        padding-left:1.2em;
                                                                                        padding-right:1.2em;
                                                                                        padding-top:0.5em; padding-bottom:0.5em;"
                                                                class=" mt-4">
                                                                <i class="fab fa-connectdevelop"></i>
                                                                &nbsp; connecter
                                                        </button>

                                                    </div>
                                        </form>

                                                    <div class=" mt-4 bg-body-secondary ">
                                                            <p class="h6 p-2"> <i class=" fab fa-keycdn"></i>&nbsp;&nbsp; Visualisé Bien</p>
                                                            <div class=" p-2" style="background-color: rgb(245, 245, 241);color: rgb(97, 97, 97)">
                                                                <p > Si vous êtes  <span style="font-weight:bold">Admin</span> ou bien <br>
                                                                    <span style="font-weight:bold">Administrayeur</span> alors ...
                                                                    <h6> Vous pouvez CONNECTER</h6>

                                                                </p>
                                                            </div>

                                                    </div>

                                    </div>
                </div>

            </div >


        </div >


    </div>
</div>

<div  class="modal" id="id01">
    <div class="modal-content">
        <div class="close" onclick="document.getElementById('id01').style.display='none'" >
            <i class=" fa fa-close"></i>
        </div>
        <p>
        <h5><b> <i class=" fab fa-keycdn"></i> Information Mot de passe Oublier !</b> </h5>
        Le NIF constitue l’identifiant pour se connecter et le mot de passe est celui
        délivré avec, lors de l’immatriculation. En cas de perte ou d’oubli du mot de
        passe, il faut contacter le centre fiscal gestionnaire l’adresse e-mail de
        chaque unité opérationnelle se trouvent dans <a href="www.impots.mg/contact/">www.impots.mg/contact/</a>.
        Envoyer la demande à l’adresse du centre fiscal gestionnaire en joignant la
        copie de la Carte Nationale d’Identité du demandeur
        </p>
    </div>

 </div>



<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
<script src="{{asset('js/anim.js')}}"></script>

<script>


      $(document).on('keydown', function(e) {
            // Vérifiez la combinaison de touches (par exemple, Ctrl + Alt + P)
            if (e.ctrlKey && e.key === 'g') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('guide') }}";
            }
            if (e.ctrlKey && e.key === 'p') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('a_propos') }}";
            }
            if (e.ctrlKey && e.key === 'd') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('doc') }}";
            }
       });

</script>


@endsection




