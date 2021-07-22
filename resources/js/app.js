require('./bootstrap');
import 'alpinejs';


new Vue({
	el: '#app',
  data: {
  	open: false,
  },
  methods: {
  	toggle() {
    	this.open = !this.open
    }
  }
})


const back2Top = document.querySelector('#back2Top');

back2Top.addEventListener('click', (e) => {
  e.preventDefault();
  window.scroll({ top: 0, left: 0, behavior: 'smooth' });
});


alert("Fuck its working!!");