export default class layout {
    static toggleMenu() {
        let $menu = document.querySelector('.js-menu')
        if($menu) {
            $menu.classList.toggle('hidden')
        }
    }
}