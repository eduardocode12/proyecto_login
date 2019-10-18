<template>
    <div>
       <div class="modal-start-get" id="modal-start-get">
                <!-- <img class="img-modal-nav" src="../assets/img/img-register.jpg" alt=""> -->
                <div class="main-modal-start-get">
                    <article>

                        <router-link class="close-start-get"  to="/" >x</router-link>

                        <div>
                            <p class="title-modal-start">Aprende inglés viajando por el mundo!</p>
                        </div>

                        <div>
                            <img class="logo-modal-start  s-cross-center" src="../assets/img/around_the_world.svg"
                                alt="logo provicional">
                        </div>
                        <!-- Start botones modal empezar -->
                        <div class="buttons-modal-start" v-show="!Form">
                            <button @click="ShowForm('colegio')" class="btn btn-modal-start">Colegio</button>
                            <button @click="ShowForm('docente')" class="btn btn-modal-start">Docente</button>
                            <button @click="ShowForm('estudiante')" class="btn btn-modal-start">Estudiante</button>
                        </div>
                        <!-- End botones modal empezar -->



                        <!-- start form school -->
                        <div v-show="Form == 'colegio'">
                            <form class="form-modal-start" >
                                <div>
                                    <label>
                                        <input v-model="nombre_colegio" 
                                        @keydown="EstadosFormularios('colegio','nombre')" @click="EstadosFormularios('colegio','nombre')" 
                                        :class="['label-form-modal',estado_nombre_colegio]"  type="text" name="name"
                                            placeholder="Nombre Colegio" required autocomplete="off">
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input v-model="email_colegio" 
                                        @keydown="EstadosFormularios('colegio','email')" @click="EstadosFormularios('colegio','email')" 
                                        :class="['label-form-modal', estado_email_colegio]" type="text" name="user" placeholder="Correo electrónico"
                                            required autocomplete="off">
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input v-model="contrasena_colegio" 
                                        @keydown="EstadosFormularios('colegio','contrasena')" @click="EstadosFormularios('colegio','contrasena')" 
                                        :class="['label-form-modal',estado_contrasena_colegio]" type="password" name="name"
                                            placeholder="Contraseña" required autocomplete="off">
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <p class="agree-modal" name="agree"> 
                                            Al registrarte aceptas los 
                                            <a class="link-agree" href="#terminos"> Términos y Condiciones</a> 
                                            y <a class="link-agree" href="#politicas">las Política de Privacidad.</a>
                                        </p>
                                    </label>
                                </div>

                                <button type="button" @click="CreateColegio" class="btn btn-create-account" >Crear cuenta</button>

                            </form>

                        </div>
                        <!-- End form school -->



                        <!-- Start Form teachers -->
                        <div v-show="Form == 'docente'">
                            <form class="form-modal-start" action="#">
                                    <div>
                                        <label>
                                            <select class="label-double-form-modal" label="" name="teacherRoll">
                                                <option hidden>Soy Docente</option>
                                                <option class="select-items-teacher" value="1">De Colegio</option>
                                                <option class="select-items-teacher" value="2">Independiente</option>

                                            </select>

                                        </label>
                                        <label>
                                            <input class="label-double-form-modal" type="text" name="code"
                                                placeholder="Código Colegio" required autocomplete="off">
                                        </label>
                                    </div>

                                    <div>
                                        <label>
                                            <input class="label-form-modal" type="text" name="nameuser"
                                                placeholder="Nombre Docente" required autocomplete="off">
                                        </label>
                                    </div>
                                <div>
                                    <label>
                                        <input class="label-double-form-modal" type="email" name="email"
                                            placeholder="Correo" required autocomplete="off">
                                    </label>
                                    <label>
                                        <input class="label-double-form-modal" type="password" name="password"
                                            placeholder="Contraseña" required autocomplete="off">
                                    </label>
                                </div>

                                <div>
                                    <label>
                                        <p class="agree-modal" name="agree"> 
                                            Al registrarte aceptas los 
                                            <a class="link-agree" href="#terminos"> Términos y Condiciones</a> 
                                            y <a class="link-agree" href="#politicas">las Política de Privacidad.</a>
                                        </p>
                                    </label>
                                </div>

                                <button class="btn btn-create-account" type="submit">Crear cuenta</button>

                            </form>
                        </div>
                        <!-- END form teachers -->

                        <!-- START form students  -->
                        <div v-show="Form == 'estudiante'">
                            <form class="form-modal-start" action="#">
                                <div>
                                    <label>
                                        <select class="label-double-form-modal" label="" name="teacherRoll">
                                            <option hidden>Soy Estudiante</option>
                                            <option class="select-items-teacher" value="1">De Colegio</option>
                                            <option class="select-items-teacher" value="2">Independiente</option>

                                        </select>

                                    </label>
                                    <label>
                                        <input class="label-double-form-modal" type="text" name="code"
                                            placeholder="Código Colegio" required autocomplete="off">
                                    </label>
                                </div>

                                <div>
                                    <label>
                                        <input class="label-form-modal" type="text" name="nameuser"
                                            placeholder="Nombre Estudiante" required autocomplete="off">
                                    </label>
                                </div>
                            <div>
                                <label>
                                    <input class="label-double-form-modal" type="email" name="email"
                                        placeholder="Correo" required autocomplete="off">
                                </label>
                                <label>
                                    <input class="label-double-form-modal" type="password" name="password"
                                        placeholder="Contraseña" required autocomplete="off">
                                </label>
                            </div>
                                <div>
                                    <label>
                                        <p class="agree-modal" name="agree"> 
                                            Al registrarte aceptas los 
                                            <a class="link-agree" href="#terminos"> Términos y Condiciones</a> 
                                            y <a class="link-agree" href="#politicas">las Política de Privacidad.</a>
                                        </p>
                                    </label>
                                </div>

                                <button class="btn btn-create-account" type="submit">Crear cuenta</button>

                            </form>
                        </div>
                        <!-- END form students -->

                        <!-- ############## Start boton atras########### -->
                        <div class="s-cross-center" v-show="Form">
                            <span @click="Form = !Form" class="back-modal"><i
                                    class="fas fa-arrow-left"></i>Atrás</span>
                        </div>
                        <!--############### END boton atras ##############-->
          
                    </article>
                </div>
        </div>
        </div>


</template>
<script>
import axios from 'axios'
export default {
  name: 'app',
  data(){
        return{
            Form:false,

            // control registro datos estudiante:
            es_nombre: "",
            es_email: "",
            es_contrasena: "",
            estado_es_nombre: false,
            estado_es_email: false,
            estado_es_contrasena: false,
            
            // control registro datos docente:
            tipo_docente:"",
            codigo_colegio: "",
            nombre_docente:"",
            email_docente:"",
            contrasena: "",

            estado_tipo_docente:"",
            estado_codigo_colegio: "",
            estado_nombre_docente:"",
            estado_email_docente:"",
            estado_contrasena: "",


            // control registro datos colegio:
            nombre_colegio: "",
            email_colegio: "",
            contrasena_colegio: "",

            estado_nombre_colegio: "",
            estado_email_colegio: "",
            estado_contrasena_colegio: ""
        }
    },
    props: { 
        
    },
    
methods:{

    // cerrar ventana - modal 
    CloseView: function()
    {
        const modal_start_get = document.getElementById('modal-start-get');
        modal_start_get.removeAttribute('open');
        this.Form = false;
        this.Modal = false;
    },


        //// abrir forrmulario :
    ShowForm: function(form){
        switch(form)
        {
            case "colegio":
                this.Form = "colegio";
                break;
            case "docente": 
                this.Form = "docente";
                break;
            case "estudiante":
                this.Form = "estudiante";
                break;
        }
    },


        ////////////////////////////////////////////////
        ///  Estados de los formularios/////
////////////////////////////////////////////////
    EstadosFormularios: function(form, input){
        var sair = this;
        switch(form)
        {
        case "colegio":
            switch(input)
            {
            case "email":

            //si lo piensar utilizar en un servidor web sera asi
            //sairsanchez98-saiinprueba-7edc483cc843/Controladores/php/ctrl.colegio.php?validar_email="+this.email_colegio

            //si el proyecto lo pienzas utilizar local ejecuta este  con vue cli y el archivo 
            //http://localhost/sairsanchez98-saiinprueba-7edc483cc843/Controladores/php/ctrl.colegio.php?validar_email="+this.email_colegio
            // en xampp


         


            // si lo vas a utilizar local  instala un plugin en google
            // llamado cross allow controll origin, o instala cross en el proyecto
            // lo mismo lo puedes hacer en todas las peticiones


               //si quieres evitar eso solo copia la carpeta dist y la carpeta sairsanchez98-saiinprueba-7edc483cc843 en htdost y ejecuta y todo correra normal
                axios.post("http://localhost/sairsanchez98-saiinprueba-7edc483cc843/Controladores/php/ctrl.colegio.php?validar_email="+this.email_colegio)
                .then(function(response){
                    var datos  = response.data;

                    if(sair.email_colegio == ""){
                    sair.estado_email_colegio = "focus";
                    } else if(datos.respuesta == "ok" && sair.email_colegio != ""){
                    sair.estado_email_colegio = "check";
                    }else if(sair.email_colegio != "" && datos.respuesta == "err"){
                    sair.estado_email_colegio = "error";
                    }
                    
                    console.log(datos.respuesta);
                });

                
            break;

            case "nombre":
                if(this.nombre_colegio == "" || this.nombre_colegio.length < 2){
                this.estado_nombre_colegio = "error";
                }else if(this.nombre_colegio.length > 2 && this.nombre_colegio != ""){
                this.estado_nombre_colegio = "check";
                }
            break;

            case "contrasena":
                if(this.contrasena_colegio == "" || this.contrasena_colegio.length < 2){
                    this.estado_contrasena_colegio = "error";
                }else if(this.contrasena_colegio.length > 2 && this.contrasena_colegio != ""){
                    this.estado_contrasena_colegio = "check";
                }
            break;
            }
        break;
        } 
    },


          //// crear un colegio 
    CreateColegio: function(){
        var sair = this;
        // los campos no pueden estar vacíos:
        if(sair.nombre_colegio != "" && sair.email_colegio != "" && sair.contrasena_colegio != "")
        {
            // verificamos que los estados de los inputs del formulario esten en CHECK
            if(sair.estado_nombre_colegio == "check" && sair.estado_contrasena_colegio == "check" && sair.estado_email_colegio == "check")
            {
                var formdata = new FormData();
                formdata.append("CrearColegio", "ok");
                formdata.append("nombre_colegio", sair.nombre_colegio);
                formdata.append("email_colegio", sair.email_colegio);
                formdata.append("contrasena", sair.contrasena_colegio);

                axios.post("http://localhost/sairsanchez98-saiinprueba-7edc483cc843/Controladores/php/ctrl.colegio.php", formdata)
                .then(function(response){
                datos = response.data;
                if(datos.respuesta == "ok"){
                    sair.CreateSession(datos.idSession);
                     this.$router.push("/");
                }
                });
            }
        }
    },


     /// Crear session para un usuario:
     CreateSession: function(id)
     {
       axios.get("http://localhost/sairsanchez98-saiinprueba-7edc483cc843/Controladores/php/ctrl.session.php?id_user="+id)
       .then(function(response){
         console.log(response);
         this.$router.push("/");
       });
     }


}


}

</script>