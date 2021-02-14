## Setup instructions
* install docker
* run 'docker-compose up'


Localhost:5555 -> Laravel container
Localhost:5556 -> Phpmyadmin container

# Why docker was used
Docker was used to ensure testing and development on the application was as easy as possible. Allows me to easily run commands on each container. For example running php artisan commands on the laravel container allowed me to isolate the development experience from my computer. This ensure the application will run correctly on any instance of this project and not just on  my computer.


