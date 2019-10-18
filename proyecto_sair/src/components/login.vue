<template>
    <div> 
    <div class="modal-start-get" id="modal-login">

    <div class="main-modal-start-get">

        <article>
            <router-link to="/" class="close-start-get" >x</router-link>
            <div>
                <p class="title-modal-start">Es un placer tenerte de regreso!</p>
            </div>

            <div>
                <img class="logo-modal-login s-cross-center" src="../assets/img/Login_authentication.svg"
                    alt="logo provicional">
            </div>
            <!-- START form students  -->
            <div>
                <form class="form-modal-start" action="#">

                    <div>
                        <label>
                            <input class="label-form-modal" type="email" name="email" placeholder="Correo"
                                required autocomplete="off">
                        </label>
                    </div>
                    <div>
                        <label>
                            <input class="label-form-modal" type="password" name="password"
                                placeholder="Contraseña" required autocomplete="off">
                        </label>
                    </div>


                    <button class="btn btn-create-account" type="submit">Iniciar sesión</button>
                    <div>
                        <label>
                            <p class="agree-modal" name="agree"><a class="link-agree" href="#forgetPassword"
                                    required>
                                    ¿Olvidaste tu contraseña?</a>
                            </p>
                        </label>
                    </div>
                </form>
            </div>
            <!-- END form login -->
        </article>
    </div>
</div>
    </div>
</template>
<script>
export default {
  name: 'app',
  methods:{
      CloseView: function(){
     const open_modal_login = document.getElementById('modal-login');
     open_modal_login.removeAttribute('open');
     this.Form = false;
     this.Modal = false;

    }
  }
}

</script>