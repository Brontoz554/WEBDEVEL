var app = new Vue({
    el: '#app',
    data: {
        isActive: true,
    },
    methods: {
        show() {
            this.isActive = !this.isActive;
        }
    },
});
var BG = document.getElementById('app');
var colors = ['black', 'whitesmoke', 'dodgerblue', 'firebrick', '#e43e42', 'grey', '#757A86', 'hotpink', '#134080', '#821822'];
var i = -1;

function newColor() {
    if (i < colors.length) {
        i++;
        BG.style.background = colors[i];
    } else {
        i = 0;
        BG.style.background = colors[i];
    }

}