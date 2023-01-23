# symfony-subscription
Boilerplate codebase for subscription system in symphony php 

Starting the app
- Install docker and docker-compose 
- navigate to root of docker-compose file and run `docker-compose up -d`
- The command will create all containers for you app
- Open docker desktop and open by termilan the subscription container
- move `.env.example` to `.env`
- open localhost:54321 to create the database with name `app`
- in terminal run `php bin/console doctrine:migrations:migrate` for creating the tables
- continue developing ...
