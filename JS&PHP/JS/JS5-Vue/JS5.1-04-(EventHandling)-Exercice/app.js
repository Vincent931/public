new Vue({ 
    el: '#app', 

    data: {
        name: '',
        email: '',
        phone: ''
    },
    
    // L'objet methods permet d'écrire des fonctions, ces fonctions sont locales dans le contexte d'un 'component'
    methods: { 
        createContact() { 
            const contact = { 
                name: this.name, 
                email: this.email, 
                phone: this.phone,
            }; 
            console.log(contact); 
        },
        
        doSomething() { 
            console.log('bouton clique'); 
        },
        
        interceptEvent() { 
            console.log('clique a href'); 
        },
    }, 
});

/*# Event Handling

Créer un composant et tester les events native et custom avec et sans data.
> Exercice libre*/