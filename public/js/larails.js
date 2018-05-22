jQuery(function () { //ou $ ou jQuery(document) ou $(document)

    var larails = { // définition d'une classe et instanciation d'un objet de cette meme classe

        // Define the name of the hidden input field for method submission
        methodInputName: '_method',
        // Define the name of the hidden input field for token submission
        tokenInputName: '_token',
        // Define the name of the meta tag from where we can get the csrf-token
        metaNameToken: 'csrf-token',

        initialize: function()
        {
            $('a[data-method]').on('click', this.handleMethod);
			//a: regarde tous les liens qui ont une attribut data-method
			//on: lorsqu'on va click sur l'un de ces liens là, alors on appell cette methode handleMethod
			//handleMethod : au lieu de handleMethod(), c'est pour spécifier qu'on ne veut pas appeler directement cette methode, il faut attendre qu'on click sur l'un des liens ...
			
			//on peut modif data-method ...
        },

        handleMethod: function(e) // après click sur l'un des liens ... on aura acceès à un evenement e
        {
            e.preventDefault(); //on anule ce qui doit etre fait par défaut
			 
			//récupération du lien et autres 
            var link = $(this), //$(this) fait référence à l'élmt qui a déclanché l'éven(le lien sur le quel on a clicker
                httpMethod = link.data('method').toUpperCase(), //récupération de la methode, pas besoin de mettre date-method) (ex. delete)
                confirmMessage = link.data('confirm'),//ex. Etes vous sur?
                form; //enfin on crée un attribut form sans initialiser

            // Exit out if there is no data-methods of PUT, PATCH or DELETE.
            if ($.inArray(httpMethod, ['PUT', 'PATCH', 'DELETE']) === -1)
            {
                return;
            }

            // Allow user to optionally provide data-confirm="Are you sure?"
            if (confirmMessage)
            {
                if( confirm(confirmMessage) ) {
                    form = larails.createForm(link);
                    form.submit();
                }
            } else {
               form = larails.createForm(link);
               form.submit();
            }
        },

        createForm: function(link)
        {
            var form = $('<form>', // création du formulaire et lui passer des attributs
                {
                    'method': 'POST',
                    'action': link.prop('href')
                });

            var token =	$('<input>',// le token CSRF  se trouvant de les meta
                {
                    'type': 'hidden',
                    'name': larails.tokenInputName,
                    'value': $('meta[name=' + larails.metaNameToken + ']').prop('content')
                });

            var method = $('<input>', 
                {
                    'type': 'hidden',
                    'name': larails.methodInputName,
                    'value': link.data('method')
                });

            return form.append(token, method).appendTo('body');
        }
    };

    larails.initialize();
});