import './bootstrap';

import {livewire_hot_reload} from 'virtual:livewire-hot-reload'
livewire_hot_reload();

import Alpine from 'alpinejs'
import {intersect} from "@alpinejs/intersect";

window.Alpine = Alpine
Alpine.plugin(intersect)
Alpine.start()

// swiper core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

window.Swiper=Swiper;
window.Navigation=Navigation;
window.Pagination=Pagination;

// import Swiper and modules styles
import 'swiper/css';
// import 'swiper/css/navigation';
import 'swiper/css/pagination';
