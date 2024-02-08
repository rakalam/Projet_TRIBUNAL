       // Définir la durée d'inactivité en millisecondes (2 minutes dans cet exemple)
       var inactivityTimeout = 15 * 60 * 1000; // 2 minutes

       // Stocker l'heure de la dernière activité
       var lastActivityTime = new Date().getTime();

       // Fonction pour réinitialiser le temps d'activité
       function resetActivityTime() {
           lastActivityTime = new Date().getTime();
       }

       // Vérifier l'activité à intervalles réguliers
       setInterval(function() {
           var currentTime = new Date().getTime();
           var elapsedTime = currentTime - lastActivityTime;

           // Vérifier si l'utilisateur est resté inactif pendant la durée spécifiée
           if (elapsedTime > inactivityTimeout) {
               // Déconnexion automatique
               window.location.href = '/deconnecter';
           }
       }, 10000); // Vérifie toutes les 10 secondes (vous pouvez ajuster cet intervalle en fonction de vos besoins)

       // Ajouter des écouteurs d'événements pour réinitialiser le temps d'activité
       $(document).on('mousemove keydown scroll click', resetActivityTime);

       // Vous pouvez ajouter d'autres événements selon les besoins, par exemple, 'click', 'input', etc.

7