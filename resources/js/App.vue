<template>
<!-- <div class="loader-wrapper">
        <div id="large-header" class="large-header">
            <h1 class="loader-title"><span>Red</span> Art</h1>
        </div>
    </div> -->
<!-- **Wrapper** -->

<Sidebar></Sidebar>

<router-view></router-view>
</template>
<script>
import Sidebar from './components/partials/Sidebar.vue';
import $ from 'jquery';
export default {
    name: 'App',
    components:{
            Sidebar
    },
    // mounted(){
    //     $.getScript('/css/animations.css');
    //     $.getScript('/js/jquery.prettyPhoto.js');
    //     console.log("library has been loaded");
    // }

};

</script>
