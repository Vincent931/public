import Person from './Vmodules/Person.js'; // Importer le composant
new Vue({
    el: '#app',
    components: { Person },
    data: {
        persons: [
            { name: 'John Doe', age: 18 },
            { name: 'Jack Doe', age: 30 },
            { name: 'Jane Doe', age: 45 },
        ],
    },
});
Vue.config.devtools = true;
