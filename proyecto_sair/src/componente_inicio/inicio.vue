<template>
<div>
   <div>
        <cabezapagina></cabezapagina>
        <router-view/>
         <piePagina></piePagina>
    </div>
 </div>
</template>
<script>
import cabezapagina from '@/componentes_estaticos/header.vue'
import  piePagina from '@/componentes_estaticos/footer.vue'
export default {
    components:{
        piePagina,
        cabezapagina
    }
}
</script>