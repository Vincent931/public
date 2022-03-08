// export du composant.        // Nom du composant
export default Vue.component('Person.js', {
   
// Le template HTML
    template: `
        <ul>
            <li v-for="person in persons" v-if="person.age == 18">
                {{ person.name }}
            </li>
            <li v-else-if="person.age > 10 && person.age < 35">
                {{ person.name }}
            </li>
            <li v-else>
                {{ person.name }}
            </li>
        </ul>`, // Attention à la virgule.. facile de l'oublier..

    // Dans un composant le data object ***DOIT*** être une fonction qui retourne un objet
    data() {
        return {
                persons:[
                            { name: 'John 18', age: 18 },
                            { name: 'Jack 10+ et 35-', age: 30 },
                            { name: 'Jane Doe 45', age: 45 },
                        ]
        };
    },
});
