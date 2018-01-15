<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answer = new Answer();
        
        $array = [
            "Communiti est un réseau qui comporte plusieurs facettes. 
La principale est un réseau social et professionnel qui a tendance à regrouper les personnes étant d’origine Corse ou ayant des affinités avec la Corse. Ce réseau est accessible via l’adresse https://www.communiti.corsica
Ce même réseau accueil en son sein une plateforme de projets où l’on peut trouver à la fois de l’emploi, des opportunités d’investissement mais aussi de la prestation de service. Il s’agit d’un outil très intéressant pour les entrepreneurs qui peuvent exprimer leur besoin et le présenter aux personnes du réseau dans le but que ces derniers puissent y répondre favorablement. 
 
Adossé à ce réseau digital, nous avons crée une plateforme d’évènements nommée Communiti Events, et qui tend à organiser des évènements dans le but que les membres du réseau puissent se rencontrer. 
En réalité, nous essayons d’utiliser le numérique non pas comme une fin en soi mais plutôt comme un outil permettant de créer des liens entre les Hommes et Femmes de cette grande communauté. 
Nous sommes en ce moment même en phase de réflexion pour réaliser ces évènements un peu partout ou des compatriotes se trouvent notre objectif principal avec cette plateforme d’évènement étant de connecter la Corse à sa Diaspora.
Cette plateforme d’évènement est accessible via l’adresse https://events.communiti.corsica",
            "C'est très simple, il suffit de créer un compte pour accéder au réseau. Une fois inscrit vous pourrez trouver de nombreuses informations telles que des offres d'emplois, des opportunités d'investissements, des services de publicité pour votre entreprise, et bien encore des prestations de services. Plus globalement, vous serez connecté aux Corses et Amis de la Corse du monde entier et pourrez rentrer en contact avec eux très facilement.",
            "Tous les Corses vivants en Corse ou à l'international ainsi que les personnes ayant des affinités avec la région seront suscpetibles de trouver des informations intéressantes via cette nouvelle manière d'échanger de l'information et de se rencontrer ",
            "Il suffit de vous inscrire via l'adresse https://www.communiti.corsica/creation_profil.php et de remplir vos informations. Une fois votre adresse email validée, vous pourrez accéder au réseau international de la communauté Corse.",
            " L’idée de réaliser Communiti est née à Madrid, en Avril 2016, puis s’est structurée au fil du temps grâce à de longs échanges avec mes amis et co-fondateurs. Pour ne pas les citer il s’agit de François Cardi, Christophe Battesti et Thomas Dellasantina, avec qui j’ai eu la chance de réaliser la CPGE au lycée Laetitia, et aussi Jean-Louis Beynel et mon père qui nous confèrent une vision plus expérimentée du management et de l’entreprise. 
 
Une fois l’idée structurée entre Avril et Septembre 2016, nous avons décidé de la tester entre Septembre et Décembre 2016 pour connaître son potentiel et savoir si nous répondions à un véritable besoin. 
Après ce test d’un peu moins 4 mois, et plus de 4000 adhésions à notre initiative, nous avons décidé de créer une société dans le but de passer à la phase 2 à savoir le développement du site internet que l’on connait aujourd’hui. ",
            "Ce site à plusieurs facettes. Il permet déjà de tisser des liens très étroits entre la Corse et sa Diaspora grâce aux différents services tels que le service de messagerie instantanée intégré, au fil d’actualités (équivalent à celui de Facebook, Twitter ou LinkedIn), aux services de recrutement, d’emplois, à la possibilité d’écrire des articles, etc … 
 
Plus stratégiquement, nous poursuivons des deux objectifs avec Communiti, à savoir : 
1/ Permettre à de jeunes membres de notre communauté de trouver des stages à l’international grâce au réseau de la Diaspora. Cela permettra sûrement une certaine émancipation et créera des vocations.
2/ Permettre à nos membres, vivants en Corse ou situés à l’international de postuler directement aux offres d’emplois présentes sur la plateforme ou bien de se faire recruter parce que leurs profils auront attirés l’œil de certains recruteurs. Cela à déjà permis de créer des opportunités professionnelles et même à faire en sorte que plusieurs Corses reviennent travailler chez eux ! 
 
Si je dois résumer le profil type d’utilisateur, il s’agirait d’une personne animée par un sentiment d’appartenance, par l’envie d’être utile et d’apporter quelque chose de nouveau via ce réseau atypique. ",
            "Il y en a eu tellement et il y en a tellement chaque jour qu’il serait difficile de toutes les cités. En fait nous sommes constamment à l’écoute de suggestions pour améliorer le service et beaucoup de membres nous envoient leur avis au sujet des services présents, et les pistes d’amélioration, mais aussi sur les prochains services à ouvrir. 
Nous pratiquons l’amélioration continue mais avec une certaine forme d’intelligence collective et d’innovation ouverte car après tout, cette initiative se doit d’être au service de tous !",
            "Dans un futur très proche nous sortirons une application mobile qui permettra de dynamiser encore plus les échanges entre les membres ainsi qu’une plateforme de recrutement adossée au réseau qui permettra d’affiner les recherches de profils et de recruter à une échelle régionale.",
            "L'application mobile est en cours de développement et sortira bientôt sur les stores. Vous serez informé de la sortie de l'application si vous êtes membre du réseau. ",
            "Ils sont plusieurs. Parmi eux nous comptons Christophe Battesti, François Cardi, Jean-Louis Beynel Casanova, Thomas Dellasantina et Robert Menassé.",
            "Regrouper les Corses et amis de la Corse du monde entier sur une même plate-forme numérique afin de développer des projets en Corse ; tel est le concept de cette initiative nommée « communiti ».",
            "Nous avons pour ambition de donner aux étudiants corses l’opportunité de pouvoir partir se former à l’international, grâce au réseau communiti, ainsi que de mettre en avant leur profil respectif afin de trouver plus facilement un emploi en Corse",
            "En tant que membre de la Diaspora vous pourrez par exemple connaitre les membres vivants dans la même ville que vous, être à l'écoute des opportunités d'emplois en Corse et peut-être même trouver un emploi via le réseau et revenir travailler dans votre région.",
            "C'est très simple, vous pouvez soit envoyer un email à l'adresse info@communiti.corsica, soit téléphoner directement au 06 84 86 10 49. Nous seront très heureux de répondre à toutes vos questions",
            "Nous avons une page Facebook. Elle est accessible via l'adresse : https://www.facebook.com/corsicancommuniti/",
            "Nous avons un compte Twitter. Il est accessible via l'adresse : https://twitter.com/c0mmuniti",
            "Nous avons une page LinkedIn. Elle est accessible via l'adresse : https://www.linkedin.com/company/communiti-corse/",
            "Nous organisons des évènements à caractère entrepreneurial en Corse et à l'international. Nous annonçons tous nos évènements via notre plateforme dédiée à cela et accessible à l'adresse suivante : https://events.communiti.corsica",
            "Ils sont plusieurs ! Parmi eux nous comptons à la fois des entreprises, des institutions publiques et des associations. Par exemple nous pourrions citer Max Immobilier, Cabinet Pantalacci, Impact Diffusion, Empire Cowork, BPIFRANCE, Corse Billet, Equi, l'ADEC, Biomathematica, Pole Emploi, Wild Productions, France Bleu RFCM, Le Journal de la Corse, Novita Prod, France 3 Corse Via Stella, la CAPA M3E, les Corsican Business Women, la CGPME, le Réseau des Télésecrétaires de Corse, le MEDEF, Ricordi di Petru Pà, Paroles de Corse, Corse-Matin, Andemu, In Corsica, le Nuvalinu, Wild Corsica, Media COrsica, Corsica Diaspora, Make Eat Up, Meet Me Before Buying, etc.",
            "Nous vous conseillons de regarder une émission au sujet du réseau, réalisée par nos partenaires Novita Prod et France 3 Corse Via Stella accessible à l'adresse suivante : https://vimeo.com/247816601",
            "Non, je dirais que je suis plutôt une sorte d'esprit composé de 0 et 1 en attendant l'ordinateur quantique. ",
            "Je m'appelle Pasquale, et vous ? ",
            "C’est-à-dire ? ",
            "Pour vous inscrire c'est très simple, il suffit de vous rendre à l'adresse suivante : https://www.communiti.corsica/creation_profil.php",
            "Je vais très bien merci ! Un peu les jambes engourdies car je suis resté un peu trop longtemps assis aujourd'hui mais sinon tout va bien :) Et vous comment allez vous ? ",
            "N'est-ce pas … :)",
            "Effectivement, cela est possible ! Il suffit d'ajouter un membre en tant qu'ami et que celui accepte votre demande pour que vous puissiez converser grâce au service de messagerie instantanée intégrée au site internet",
            
            
        ]
        
        foreach ($value as $i) {
            $answer->text = $value[$i];
        }
    }
}
