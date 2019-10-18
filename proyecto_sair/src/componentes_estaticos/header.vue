<template>
<div>
   <header class="header">
        <img class="banckground-banner" src="../assets/img/Estrellas.png" alt="fondo del banner">
        <div class="navbar " id="navbar">
            <div class="ed-grid s-grid-4">
                <div class="s-cols-1 main-logotipo s-cross-center ">
                    
                    <router-link to="/inicio">
                        <a class="logotipo  m-center" >Logotipo</a>
                    </router-link>
                </div>
                <nav class="s-cols-4 lg-cols-3 lg-x-2 nav s-cross-center">
                    <ul class="lg-to-right main-menu-nav">
                        <li class="menu-item">
                            <a class="btn btn-nav link-navbar" href="#parr">Más información <i
                                    class="fas fa-chevron-down"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="main-menu-nav-small s-cross-center">
                        <li class="list-item-small">
                            <a class="icon-navbar-small icon-home" id="icon-home" href="/"><i
                                    class="fab fa-wordpress"></i></a>
                        </li>
                        <li class="list-item-small">
                            <a class="icon-navbar-small icon-more" id="icon-more" href="#"><i
                                    class="fas fa-chevron-circle-down"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

           

        <div class="banner ed-grid  s-grid-1 lg-grid-2 ">
            <div class="main-planet">
                <img class="img-banner" src="../assets/img/planet.svg" alt="lustracion">
            </div>
            <div class="eslogan">
                <h1 class="title-banner">Aprende inglés viajando por el mundo!</h1>
                <div class="buttons-banner">
                    
                    <router-link to="/registro">
               <button class="btn btn-banner">Empezar</button>
                    </router-link> 
                    
                    <router-link to="/login">
                    <button @click="ShowView('log-in')" class="btn btn-banner">
                    Ya tengo una cuenta</button>
                    </router-link>
                </div>
            </div>
        </div>
      
      
      
      
      </header>
       </div>
    
</template>
<script>
import footer from '@/componentes_estaticos/footer.vue'
export default {
 
  component:{
  footer,
  },
  data () {
    return {
      msg: 'Welcome to Your Vue.js PWA'
    }
  }
}
</script>
