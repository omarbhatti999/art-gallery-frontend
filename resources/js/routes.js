import Home from './components/Home.vue';
import About from './components/About.vue';
import Gallery from './components/Gallery.vue';
import GalleryDetail from './components/GalleryDetail.vue';
import GalleryDetailLeft from './components/GalleryDetailLeft.vue';
import GalleryDetailRight from './components/GalleryDetailRight.vue';
import Contact from './components/Contact.vue';
import PrivacyPolicy from './components/PrivacyPolicy.vue';



const routes = [{
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/about',
        name: 'About',
        component: About
    },
    {
        path: '/gallery',
        name: 'Gallery',
        component: Gallery
    },
    {
        path: '/gallery-detail/:id',
        name: 'GalleryDetail',
        component: GalleryDetail
    },
    // { path: '/gallery-detail-left', component: GalleryDetailLeft },
    // { path: '/gallery-detail-right', component: GalleryDetailRight },
    { path: '/contact', component: Contact },
    { path: '/privacy-policy', component: PrivacyPolicy },
    { path: '/terms-of-use', component: PrivacyPolicy },






];

export default routes;