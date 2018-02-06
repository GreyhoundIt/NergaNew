## Official Documentation

Built on the Laravel framework this is the SIte for NERGA a golf competition in the North East. This provides both the backend admin and team enteries as well as the public view for competitors. 

## Deploying a New Season
  - Update seeder file
  - Log in to Heroku 
  - heroku pg:reset DATABASE
  - comment out the lines in the AppServiceProviderFile
  - Git push heroku master
  - Heroku run bash
  - php artisan migrate:refresh
  - php artisan db:seed
  - uncmment linkes in AppServiceProvider
  - git push Heroku master
  
